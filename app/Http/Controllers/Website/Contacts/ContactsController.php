<?php

namespace App\Http\Controllers\Website\Contacts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ContactsController extends Controller
{
     public function contact(){
        
        $metatitle = "Contact";
        return view('Website.Contacts.contact',compact('metatitle'));
    }


}

