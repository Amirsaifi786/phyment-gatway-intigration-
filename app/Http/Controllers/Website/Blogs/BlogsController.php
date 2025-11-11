<?php

namespace App\Http\Controllers\Website\Blogs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BlogsController extends Controller
{
        public function blog(){

                $metatitle = "blog";
                return view('Website.Blogs.blog',compact('metatitle'));
        }

        public function blogdetail(){

                $metatitle = "Blog Detail";
                return view('Website.Blogs.blogdetail',compact('metatitle'));
        }

        public function blogfirst(){

                $metatitle = "Top 10 casual look ideas to dress up your kids";
                return view('Website.Blogs.blogfirst',compact('metatitle'));
        }
         public function blogsecond(){

                $metatitle = "Blog fealcool";
                return view('Website.Blogs.blogsecond',compact('metatitle'));
        }
        public function blogthird(){

                $metatitle = "Latest trends of wearing street wears supremely ";
                return view('Website.Blogs.blogthird',compact('metatitle'));
        }
        public function blogfourth(){

                $metatitle = "Latest trends of wearing street wears supremely ";
                return view('Website.Blogs.blogfourth',compact('metatitle'));
        }
        public function blogfifth(){

                $metatitle = "Latest trends of wearing street wears supremely ";
                return view('Website.Blogs.blogfifth',compact('metatitle'));
        }
        public function blogsixth(){

                $metatitle = "Latest trends of wearing street wears supremely ";
                return view('Website.Blogs.blogsixth',compact('metatitle'));
        }


}

