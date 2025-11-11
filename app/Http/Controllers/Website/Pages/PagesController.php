<?php
namespace App\Http\Controllers\Website\Pages;

use \App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function privacypolicy(){
        
        $metatitle = "Privacy-Policy";
        return view('Website.Pages.privacypolicy',compact('metatitle'));
    }
     public function termcondition(){
        
        $metatitle = "term & condition";
        return view('Website.Pages.termcondition',compact('metatitle'));
    }
   


  
}

