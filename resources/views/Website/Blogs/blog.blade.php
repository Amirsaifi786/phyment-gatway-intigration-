
@extends('Website.layout.app')
@section('style')

@endsection
@section('content')
  <div class="breadcrumb-area breadcrumb-img bg-img" data-bg="assets/img/banner/shop.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap">
                    <nav aria-label="breadcrumb">
                        <h3 class="breadcrumb-title">BLOG </h3>
                        <ul class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index-2.html"><i class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blog-main-wrapper section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 order-2 order-lg-1">
                <aside class="blog-sidebar-wrapper">
                    <div class="blog-sidebar">
                        <h5 class="title">search</h5>
                        <div class="sidebar-serch-form">
                            <form action="#">
                                <input type="text" class="search-field" placeholder="search here">
                                <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div> 
                    <div class="blog-sidebar">
                        <h5 class="title">categories</h5>
                        <ul class="blog-archive blog-category">
                            <li><a href="#">Shoes (10)</a></li>
                            <li><a href="#">fashion (08)</a></li>
                            <li><a href="#">handbag (07)</a></li>
                            <li><a href="#">Jewelry (14)</a></li>
                            <li><a href="#">Kids (10)</a></li>
                        </ul>
                    </div> 
                    <div class="blog-sidebar">
                        <h5 class="title">Blog Archives</h5>
                        <ul class="blog-archive">
                            <li><a href="#">January (10)</a></li>
                            <li><a href="#">February (08)</a></li>
                            <li><a href="#">March (07)</a></li>
                            <li><a href="#">April (14)</a></li>
                            <li><a href="#">May (10)</a></li>
                        </ul>
                    </div> 
                    <div class="blog-sidebar">
                        <h5 class="title">recent post</h5>
                        <div class="recent-post">
                            <div class="recent-post-item">
                                <figure class="product-thumb">
                                    <a href="blog-details.html">
                                        <img src="assets/img/blog/blog-1.jpg" alt="blog image">
                                    </a>
                                </figure>
                                <div class="recent-post-description">
                                    <div class="product-name">
                                        <h6><a href="blog-details.html">Auctor gravida enim</a></h6>
                                        <p>Mar 10 2021</p>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-post-item">
                                <figure class="product-thumb">
                                    <a href="blog-details.html">
                                        <img src="assets/img/blog/blog-2.jpg" alt="blog image">
                                    </a>
                                </figure>
                                <div class="recent-post-description">
                                    <div class="product-name">
                                        <h6><a href="blog-details.html">gravida auctor dnim</a></h6>
                                        <p>Apr 18 2021</p>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-post-item">
                                <figure class="product-thumb">
                                    <a href="blog-details.html">
                                        <img src="assets/img/blog/blog-3.jpg" alt="blog image">
                                    </a>
                                </figure>
                                <div class="recent-post-description">
                                    <div class="product-name">
                                        <h6><a href="blog-details.html">enim auctor gravida</a></h6>
                                        <p>Jun 14 2021</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="blog-sidebar">
                        <h5 class="title">Tags</h5>
                        <ul class="blog-tags">
                            <li><a href="#">Shoes</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Bags</a></li>
                            <li><a href="#">Watch</a></li>
                            <li><a href="#">Phone</a></li>
                            <li><a href="#">Kids</a></li>
                        </ul>
                    </div> 
                </aside>
            </div>
            <div class="col-lg-9 order-1 order-lg-2">
                <div class="blog-item-wrapper">                            
                    <div class="row mbn-30">

                        <div class="col-md-6">                                    
                            <div class="blog-post-item d-block mb-30">
                                <div class="blog-thumb w-100">
                                    <a href="{{route('blogfirst')}}">
                                        <img src="assets/img/blog/blog-1.jpg" alt="blog thumb">
                                    </a>
                                </div>
                                <div class="blog-content w-100 pl-0 mt-20">
                                    <h6 class="blog-title">
                                        <a href="{{route('blogfirst')}}">This is First Post XipBlog</a>
                                    </h6>
                                    <div class="blog-meta">
                                        <span><i class="fa fa-calendar"></i>Aug 05, 2021</span>
                                        <span><i class="fa fa-user"></i>Admin</span>
                                    </div>
                                    <p class="blog-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. ...</p>
                                    <a class="btn read-more" href="{{route('blogfirst')}}">Read More</a>
                                </div>
                            </div>                                    
                        </div>
                        <div class="col-md-6">                                    
                            <div class="blog-post-item d-block mb-30">
                                <div class="blog-thumb w-100">
                                    <div class="blog-carousel-2 slick-row-5 slick-dot-style">
                                        <div class="blog-single-slide">
                                            <a href="{{route('blogsecond')}}">
                                                <img src="assets/img/blog/blog-2.jpg" alt="blog image">
                                            </a>
                                        </div>
                                        <div class="blog-single-slide">
                                            <a href="{{route('blogsecond')}}">
                                                <img src="assets/img/blog/blog-3.jpg" alt="blog image">
                                            </a>
                                        </div>
                                        <div class="blog-single-slide">
                                            <a href="{{route('blogsecond')}}">
                                                <img src="assets/img/blog/blog-4.jpg" alt="blog image">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-content w-100 pl-0 mt-20">
                                    <h6 class="blog-title">
                                        <a href="{{route('blogsecond')}}">This is Second Post XipBlog</a>
                                    </h6>
                                    <div class="blog-meta">
                                        <span><i class="fa fa-calendar"></i>May 10, 2021</span>
                                        <span><i class="fa fa-user"></i>Admin</span>
                                    </div>
                                    <p class="blog-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. ...</p>
                                    <a class="btn read-more" href="{{route('blogsecond')}}">Read More</a>
                                </div>
                            </div>                                    
                        </div>
                        <div class="col-md-6">                                    
                            <div class="blog-post-item d-block mb-30">
                                <div class="blog-thumb w-100">
                                    <a href="{{route('blogthird')}}">
                                        <img src="assets/img/blog/blog-1.jpg" alt="blog thumb">
                                    </a>
                                </div>
                                <div class="blog-content w-100 pl-0 mt-20">
                                    <h6 class="blog-title">
                                        <a href="{{route('blogthird')}}">This is Third Post XipBlog</a>
                                    </h6>
                                    <div class="blog-meta">
                                        <span><i class="fa fa-calendar"></i>Aug 05, 2021</span>
                                        <span><i class="fa fa-user"></i>Admin</span>
                                    </div>
                                    <p class="blog-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. ...</p>
                                    <a class="btn read-more" href="{{route('blogthird')}}">Read More</a>
                                </div>
                            </div>                                    
                        </div>
                        <div class="col-md-6">                                    
                            <div class="blog-post-item d-block mb-30">
                                <div class="blog-thumb w-100">
                                    <a href="{{route('blogfourth')}}">
                                        <img src="assets/img/blog/blog-4.jpg" alt="blog thumb">
                                    </a>
                                </div>
                                <div class="blog-content w-100 pl-0 mt-20">
                                    <h6 class="blog-title">
                                        <a href="{{route('blogfourth')}}">This is Fourth Post XipBlog</a>
                                    </h6>
                                    <div class="blog-meta">
                                        <span><i class="fa fa-calendar"></i>Aug 05, 2021</span>
                                        <span><i class="fa fa-user"></i>Admin</span>
                                    </div>
                                    <p class="blog-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. ...</p>
                                    <a class="btn read-more" href="{{route('blogfourth')}}">Read More</a>
                                </div>
                            </div>                                    
                        </div>
                        <div class="col-md-6">                                    
                            <div class="blog-post-item d-block mb-30">
                                <div class="blog-thumb w-100">
                                    <a href="{{route('blogfifth')}}">
                                        <img src="assets/img/blog/blog-3.jpg" alt="blog thumb">
                                    </a>
                                </div>
                                <div class="blog-content w-100 pl-0 mt-20">
                                    <h6 class="blog-title">
                                        <a href="{{route('blogfifth')}}">This is fifth Post XipBlog</a>
                                    </h6>
                                    <div class="blog-meta">
                                        <span><i class="fa fa-calendar"></i>Aug 05, 2021</span>
                                        <span><i class="fa fa-user"></i>Admin</span>
                                    </div>
                                    <p class="blog-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. ...</p>
                                    <a class="btn read-more" href="{{route('blogfifth')}}">Read More</a>
                                </div>
                            </div>                                    
                        </div>
                        <div class="col-md-6">                                    
                            <div class="blog-post-item d-block mb-30">
                                <div class="blog-thumb w-100">
                                    <a href="{{route('blogsixth')}}">
                                        <img src="assets/img/blog/blog-4.jpg" alt="blog thumb">
                                    </a>
                                </div>
                                <div class="blog-content w-100 pl-0 mt-20">
                                    <h6 class="blog-title">
                                        <a href="{{route('blogsixth')}}">This is Seventh Post XipBlog</a>
                                    </h6>
                                    <div class="blog-meta">
                                        <span><i class="fa fa-calendar"></i>Aug 05, 2021</span>
                                        <span><i class="fa fa-user"></i>Admin</span>
                                    </div>
                                    <p class="blog-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. ...</p>
                                    <a class="btn read-more" href="{{route('blogsixth')}}">Read More</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="paginatoin-area shadow-bg text-center">
                        <ul class="pagination-box">
                            <li><a class="previous" href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a class="next" href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')

@endsection


