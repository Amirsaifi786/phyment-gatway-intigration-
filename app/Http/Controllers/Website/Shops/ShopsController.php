<?php

namespace App\Http\Controllers\Website\Shops;

use \App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class ShopsController extends Controller
{
    public function shop()
    {
        $metatitle = "Shops";
        $products = Product::all();
        return view('Website.Shops.shop', compact('metatitle', 'products'));
    }

    public function shopdetail($id)
    {

        $metatitle = "shopdetail";
        $pro = Product::find($id);
        $products = Product::all();

        return view('Website.Shops.shopdetail', compact('metatitle', 'pro', 'products'));
    }
    public function cart()
    {
        $metatitle = "Cart Page";
        $carts = Cart::with('product')->where('user_id', Auth::id())->get();
        $subtotal = Cart::where('user_id', Auth::id())
            ->selectRaw('SUM(price * quantity) as subtotal')
            ->value('subtotal');
        return view('Website.Cart.index', compact('metatitle', 'carts', 'subtotal'));
    }

    public function cartStoreOrUpdate(Request $request)
    {
        if (empty($request->user_id)) {
            return redirect()->back()->with('error', 'Please login to continue adding to cart.');
        }

        Cart::updateOrCreate(
            [
                'user_id'    => $request->user_id,
                'product_id' => $request->product_id,
                'size'       => $request->size,
            ],
            [
                'price'    => $request->price,
                'mrp'      => $request->mrp,
                'quantity' => DB::raw('quantity + ' . (int) $request->quantity),
                'date'     => now(),
            ]
        );

        // ✅ Redirect instead of returning view
        return redirect()->route('shop.Cart')->with('success', 'Cart updated successfully');
    }



    public function cartUpdate(Request $request)
    {
        $cartItem = Cart::where('id', $request->cart_id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $cartItem->update([
            'quantity' => $request->quantity,
            'date'     => now(),
        ]);

        $item_total = $cartItem->price * $cartItem->quantity;

        $subtotal = Cart::where('user_id', Auth::id())
            ->selectRaw('SUM(price * quantity) as subtotal')
            ->value('subtotal');

        return response()->json([
            'success'    => true,
            'message'    => "Your cart updated successfully",
            'item_total' => number_format($item_total, 2),
            'subtotal'   => number_format($subtotal, 2),
        ]);
    }



    public function delete($id)
    {
        $cartItem = Cart::where('id', $id)
            ->where('user_id', Auth::id())
            ->first();

        if ($cartItem) {
            $cartItem->delete();

            // 🔥 Get new subtotal after delete
            $subtotal = Cart::where('user_id', Auth::id())
                ->selectRaw('SUM(price * quantity) as subtotal')
                ->value('subtotal') ?? 0;

            return response()->json([
                'success'  => true,
                'message'  => 'Cart item removed',
                'subtotal' => number_format($subtotal, 2)
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Item not found'
        ], 404);
    }


    public function chekout()
    {
        $subtotal = Cart::where('user_id', Auth::id())->selectRaw('SUM(price * quantity) as subtotal')->value('subtotal');
        $user = User::where('id', Auth::id())->first();
        return view('Website.Checkouts.index', compact('user', 'subtotal'));
    }
    public function getLocation($pincode)
    {
        $location = DB::table('locations')->where('pincode', $pincode)->first();

        if ($location) {
            return response()->json([
                'success' => true,
                'city' => $location->city_name,
                'state' => $location->state_name
            ]);
        }

        return response()->json(['success' => false]);
    }
    // public function pay(Request $request)
    // {

    //     $user = auth()->user(); // Or fetch by session
    //     $amount = $request->input('amount');
    //     // Update user details if needed
    //     $user->update([
    //         'name' => $request->input('name'),
    //         'address' => $request->input('address1'),
    //         'address2' => $request->input('address2'),
    //         'city' => $request->input('city'),
    //         'state' => $request->input('state'),
    //         'pincode' => $request->input('zip'),
    //         'email' => $request->input('email'),
    //         'update_time_date' => now()
    //     ]);

    //     // 1. Get OAuth Token
    //     $oauthResponse = Http::asForm()->post("https://api.phonepe.com/apis/identity-manager/v1/oauth/token", [
    //         "client_id" => env('PHONEPE_CLIENT_ID'),
    //         "client_version" => 1,
    //         "client_secret" => env('PHONEPE_CLIENT_SECRET'),
    //         "grant_type" => "client_credentials"
    //     ]);

    //     if ($oauthResponse->failed() || empty($oauthResponse['access_token'])) {
    //         return back()->with('error', 'Failed to get PhonePe token');
    //     }

    //     $token = $oauthResponse['access_token'];

    //     // 2. Initiate Payment Request
    //     $orderId = "TX" . rand(1111, 9999);
    //     $amount = (float) str_replace(',', '', $request->input('amount')); // remove commas & cast

    //     $paymentData = [
    //         "merchantOrderId" => $orderId,
    //         "amount" => $amount * 100, // in paise
    //         "expireAfter" => 1200,
    //         "metaInfo" => [
    //             "udf1" => $user->name,
    //             "udf2" => $user->phone
    //         ],
    //         "paymentFlow" => [
    //             "type" => "PG_CHECKOUT",
    //             "message" => "Payment request for order",
    //             "merchantUrls" => [
    //                 "redirectUrl" => env('PHONEPE_REDIRECT_URL')
    //             ]
    //         ]
    //     ];

    //     $response = Http::withToken($token, 'O-Bearer')
    //         ->withHeaders(["Content-Type" => "application/json"])
    //         ->post("https://api.phonepe.com/apis/pg/checkout/v2/pay", $paymentData);

    //     if ($response->failed()) {
    //         return back()->with('error', 'PhonePe payment request failed');
    //     }

    //     $resData = $response->json();

    //     if (!empty($resData['redirectUrl'])) {
    //         return redirect()->away($resData['redirectUrl']); // redirect to PhonePe payment page
    //     }

    //     return back()->with('error', 'Payment failed, please try again');
    // }
    public function pay(Request $request)
    {
        $amount = (float) str_replace(',', '', $request->input('amount'));

        $user = User::findOrFail(auth()->id());
        // 2. Generate order ID & transaction ID
        $orderId = "ORD" . time();
        $txnId   = "TXN" . rand(100000, 999999);

        // 3. Get all cart items for this user
        $cartItems = Cart::where('user_id', $user->id)->get();

        if ($cartItems->isEmpty()) {
            return back()->with('error', 'Your cart is empty');
        }

        // 4. Insert each cart item into orders table
        foreach ($cartItems as $item) {
            DB::table('orders')->insert([
                'productid'      => $item->product_id,
                'quantity'       => $item->quantity,
                'price'          => $item->price,
                'txnid'          => $txnId,
                'orderid'        => $orderId,
                'payment_method' => 'phonepe',
                'userid'         => $user->id,
                'status'         => 'pending',
                'date'           => now(),
                'txnStatusCode'  => null,
                'userMobileNo'   => $user->phone ?? null,
                'merchantRefId'  => null,
                'amount'         => $item->price * $item->quantity,
                'udf1'           => $user->name,
                'udf2'           => $user->email,
                'udf3'           => $request->input('zip'),
                'txnStatus'      => null,
                'bankRefId'      => null,
                'rrn'            => null,
                'payerVPA'       => null,
                'param'          => null,
                'order_data'     => null, // optional since each row is per product
            ]);
        }

        // 5. Clear cart after order creation
        Cart::where('user_id', $user->id)->delete();

        // 6. Continue PhonePe payment integration with $orderId, $txnId, $amount
        return back()->with('success', 'Order placed. Redirecting to payment...');
    }


public function myorder()
{
    $user = Auth::user();

    // fetch all orders of logged in user
    $orders = Order::where('userid', $user->id)
        ->orderBy('id', 'desc')
        ->get();

    return view('Website.Orders.index', compact('orders', 'user'));
}

    public function wishlist()
    {
        return view('Website.Wishlist.index');
    }
    public function quickView($id)
    {
        $product = Product::findOrFail($id);
        return response()->json($product);
    }
}
