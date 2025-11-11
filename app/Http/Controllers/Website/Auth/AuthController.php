<?php

namespace App\Http\Controllers\Website\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\User;
use Carbon\Carbon;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('Website.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {


        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
    public function myacount()
    {

        $metatitle = "My Acount";
        $user = Auth::user();

        $orders = Order::where('userid', Auth::id())
            ->orderBy('id', 'desc')
            ->get();

        return view('Website.Acount.index', compact('metatitle', 'user', 'orders'));
    }
    public function showRegistrationForm()
    {
        return view('Website.auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login')->with('success', 'Registration successful! Please log in.');
    }
 public function sendOtp(Request $request)
{
    $request->validate([
        'mobile' => 'required'
    ]);

    $user = User::where('mobile', $request->mobile)->first();
    if (!$user) {
        return response()->json(['error' => 'Mobile number not registered'], 400);
    }

    $otp = rand(100000, 999999);
    $user->otp = $otp;
    $user->otp_expires_at = Carbon::now()->addMinutes(5);
    $user->save();

    try {
        $twilio = new Client(env('TWILIO_SID'), env('TWILIO_AUTH_TOKEN'));
        $twilio->messages->create('+91' . ltrim($user->mobile, '0'), [
            "from" => env('TWILIO_FROM'),
            "body" => "Your OTP code is: $otp"
        ]);
    } catch (\Exception $e) {
        return response()->json(['error' => 'Failed to send OTP: ' . $e->getMessage()], 500);
    }

    return response()->json(['success' => true, 'mobile' => $user->mobile]);
}
public function verifyOtp(Request $request)
{
    $request->validate([
        'mobile' => 'required',
        'otp' => 'required'
    ]);

    $user = User::where('mobile', $request->mobile)
        ->where('otp', $request->otp)
        ->where('otp_expires_at', '>=', Carbon::now())
        ->first();

    if ($user) {
        $user->otp = null;
        $user->otp_expires_at = null;
        $user->save();

        Auth::login($user);

        return response()->json(['success' => true]);
    }

    return response()->json(['error' => 'Invalid or expired OTP'], 400);
}

}
