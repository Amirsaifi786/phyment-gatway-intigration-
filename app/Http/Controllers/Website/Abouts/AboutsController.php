<?php
namespace App\Http\Controllers\Website\Abouts;

use \App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AboutsController extends Controller
{
    public function index(){
        $metatitle = "Abouts";
        return view('Website.Abouts.index',compact('metatitle'));
    }


}

