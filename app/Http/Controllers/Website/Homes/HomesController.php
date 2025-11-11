<?php
namespace App\Http\Controllers\Website\Homes;

use \App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
class HomesController extends Controller
{
    public function index(){
        
        $metatitle = "Home";
        $products = Product::all();
        return view('Website.Homes.index',compact('metatitle','products'));
    }

  public function sendmail(Request $request)
    {
    
        $data = $request->validate([
            'email' => 'required|email',
            'phone' => 'required',
            'number_of_employee_v1' => 'required',
        ]);

        Mail::to($data['email'])->send(new ContactMail($data));

        return back()->with('success', 'Message sent successfully!');
    }


}

