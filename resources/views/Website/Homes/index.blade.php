@extends('Website.layout.app')
@section('style')
@endsection
@section('content')
    <section class="hero-slider">
        <div class="hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style">

            <div class="hero-single-slide hero-overlay">
                <div class="hero-slider-item hero-1 bg-img" data-bg="assets/img/slider/home1-slide2.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="hero-slider-content slide-1">
                                    <h1 class="slide-title">New</h1>
                                    <h2 class="slide-subtitle">Running Sneakers <span>Men's like plex</span></h2>
                                    <a href="#" class="btn btn-large btn-bg">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-single-slide hero-overlay">
                <div class="hero-slider-item hero-1 bg-img" data-bg="assets/img/slider/home2-slide1.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="hero-slider-content slide-2">
                                    <h1 class="slide-title">Sale</h1>
                                    <h2 class="slide-subtitle">Running Sneakers <span>Men's like plex</span></h2>
                                    <a href="#" class="btn btn-large btn-bg">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    {{-- <section class="service-policy bg-gray mtn-100">
            <div class="container">
                <div class="row row-10">
                    <div class="col-lg-3 col-sm-6">
                        <div class="policy-block text-center">
                            <div class="policy-icon">
                                <i class="fa fa-heart-o"></i>
                            </div>
                            <div class="policy-text">
                                <h4 class="policy-title">Great Value</h4>
                                <p class="policy-desc">Nunc id ante quis tellus faucibus dictum in eget metus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="policy-block text-center">
                            <div class="policy-icon">
                                <i class="fa fa-truck"></i>
                            </div>
                            <div class="policy-text">
                                <h4 class="policy-title">Worlwide Delivery</h4>
                                <p class="policy-desc">Nunc id ante quis tellus faucibus dictum in eget metus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="policy-block text-center">
                            <div class="policy-icon">
                                <i class="fa fa-credit-card"></i>
                            </div>
                            <div class="policy-text">
                                <h4 class="policy-title">Safe Payment</h4>
                                <p class="policy-desc">Nunc id ante quis tellus faucibus dictum in eget metus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="policy-block text-center">
                            <div class="policy-icon">
                                <i class="fa fa-headphones"></i>
                            </div>
                            <div class="policy-text">
                                <h4 class="policy-title">24/7 Help Center</h4>
                                <p class="policy-desc">Nunc id ante quis tellus faucibus dictum in eget metus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    <section class="about-us bg-gray section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-thumb js-tilt" data-tilt-perspective="1000" data-tilt-scale="1" data-tilt-speed="500"
                        data-tilt-max="15">
                        <img class="w-100" src="assets/img/about/about.jpg" alt="about thumb">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <h2 class="about-title">PULLMAN SNEAKER ABOUT US.</h2>
                        <h3 class="about-subtitle">Investigationes demonstraverunt lectores legere me.</h3>
                        <p>Quisque consequat venenatis rutrum. Quisque posuere enim augue, in rhoncus diam dictum non.Nunc
                            id ante quis tellus faucibus</p>
                        <ul class="about-info">
                            <li class="add"><i class="fa fa-home"></i>Manchester Road 123-78B, Silictown 7854MD, Great
                                Country</li>
                            <li class="phone"><i class="fa fa-phone"></i>Phone: +46 123 456 789</li>
                            <li class="mail"><i class="fa fa-envelope"></i>Email: hello@sitename.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="product-gallery section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3 class="title">NEW ARRIVALS PRODUCTS</h3>
                        <h4 class="sub-title">Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius
                            claritas est etiam processus dynamicus, qui sequitur mutationem.</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-carousel--4 slick-row-5 slick-arrow-style">
                        @foreach ($products as $item)
                            <div class="product-item">
                                <div class="product-thumb">
                                    <a href="{{ route('shop.shopdetail', $item->id) }}">
                                        <img src="{{ url('assets/img/product/' . $item->image) }}" alt="product thumb">
                                    </a>
                                    <div class="button-group">
                                        {{-- <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i
                                                class="fa fa-heart-o"></i></a> --}}
                                        {{-- <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a> --}}
                                        <a href="javascript:void(0);" class="quick-view-btn" data-id="{{ $item->id }}"
                                            data-name="{{ $item->name }}" data-price="{{ $item->sellprice }}"
                                            data-oldprice="{{ $item->mrp }}" {{-- data-desc="{{ $item->description }}"  --}}
                                            data-image="{{ asset('assets/img/product/' . $item->image) }}"
                                            data-bs-toggle="modal" data-bs-target="#quick_view">
                                            <span data-bs-toggle="tooltip" title="Quick View">
                                                <i class="fa fa-eye"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="product-label">
                                        <span>new</span>
                                    </div>
                                    <div class="discount-label">
                                        <span>-10% Off</span>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <div class="product-caption">
                                        <h6 class="product-name">
                                            <a href="{{ route('shop.shopdetail', $item->id) }}">{{ $item->name }}</a>
                                        </h6>
                                        <div class="price-box">
                                            <span class="price-old"><del>${{ $item->mrp }}</del></span>
                                            <span class="price-regular">${{ $item->sellprice }}</span>
                                        </div>
                                     
                                    </div>
                                    <div class="ratings">
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="banner-statistics-area">
        <div class="container">
            <div class="row mtn-30">
                <div class="col-md-6">
                    <div class="banner-statistics mt-30">
                        <a href="#">
                            <img src="assets/img/banner/banner_1.2.jpg" alt="banner thumb">
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner-statistics mt-30">
                        <a href="#">
                            <img src="assets/img/banner/banner_1.3.jpg" alt="banner thumb">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="product-tab-area section-padding">
        <div class="container">
            <div class="pos-special-products">
                <div class="row">
                    <div class="col-lg-6 col-right">
                        <div class="deals-tab-wrapper">
                            <div class="deals-tab-area">
                                <div class="deals-nav-carousel">
                                    <div class="deals-nav-item">
                                        <img src="assets/img/product/product-1.jpg" alt="deals thumb">
                                    </div>
                                    <div class="deals-nav-item">
                                        <img src="assets/img/product/product-2.jpg" alt="deals thumb">
                                    </div>
                                    <div class="deals-nav-item">
                                        <img src="assets/img/product/product-3.jpg" alt="deals thumb">
                                    </div>
                                    <div class="deals-nav-item">
                                        <img src="assets/img/product/product-4.jpg" alt="deals thumb">
                                    </div>
                                    <div class="deals-nav-item">
                                        <img src="assets/img/product/product-5.jpg" alt="deals thumb">
                                    </div>
                                    <div class="deals-nav-item">
                                        <img src="assets/img/product/product-6.jpg" alt="deals thumb">
                                    </div>
                                </div>
                            </div>
                            <div class="deals-content-wrapper">
                                <div class="deals-content-carousel">

                                    <div class="deals-slide-item">
                                        <div class="deals-content-item">
                                            <h2 class="deals-title"><a
                                                    href="{{ route('shop.shopdetail', $item->id) }}">Top Mens slippers</a>
                                            </h2>
                                            <div class="ratings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                            </div>
                                            <p class="deals-desc">Canon's first 4K UHD Camcorder, the GX10 has a compact
                                                and portable design that delivers ...</p>
                                            <div class="price-box">
                                                <span class="price-old"><del>$80.00</del></span>
                                                <span class="price-regular">$26.10</span>
                                            </div>
                                            <a class="shop-btn" href="shop.html">Add To Cart</a>
                                            <div class="product-countdown" data-countdown="2021/10/20"></div>
                                        </div>
                                    </div>


                                    <div class="deals-slide-item">
                                        <div class="deals-content-item">
                                            <h2 class="deals-title"><a
                                                    href="{{ route('shop.shopdetail', $item->id) }}">Top Mens slippers</a>
                                            </h2>
                                            <div class="ratings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                            </div>
                                            <p class="deals-desc">Canon's first 4K UHD Camcorder, the GX10 has a compact
                                                and portable design that delivers ...</p>
                                            <div class="price-box">
                                                <span class="price-old"><del>$80.00</del></span>
                                                <span class="price-regular">$26.10</span>
                                            </div>
                                            <a class="shop-btn" href="shop.html">Add To Cart</a>
                                            <div class="product-countdown" data-countdown="2021/09/20"></div>
                                        </div>
                                    </div>


                                    <div class="deals-slide-item">
                                        <div class="deals-content-item">
                                            <h2 class="deals-title"><a
                                                    href="{{ route('shop.shopdetail', $item->id) }}">Top Mens slippers</a>
                                            </h2>
                                            <div class="ratings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                            </div>
                                            <p class="deals-desc">Canon's first 4K UHD Camcorder, the GX10 has a compact
                                                and portable design that delivers ...</p>
                                            <div class="price-box">
                                                <span class="price-old"><del>$80.00</del></span>
                                                <span class="price-regular">$26.10</span>
                                            </div>
                                            <a class="shop-btn" href="shop.html">Add To Cart</a>
                                            <div class="product-countdown" data-countdown="2021/09/20"></div>
                                        </div>
                                    </div>


                                    <div class="deals-slide-item">
                                        <div class="deals-content-item">
                                            <h2 class="deals-title"><a
                                                    href="{{ route('shop.shopdetail', $item->id) }}">Top Mens slippers</a>
                                            </h2>
                                            <div class="ratings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                            </div>
                                            <p class="deals-desc">Canon's first 4K UHD Camcorder, the GX10 has a compact
                                                and portable design that delivers ...</p>
                                            <div class="price-box">
                                                <span class="price-old"><del>$80.00</del></span>
                                                <span class="price-regular">$26.10</span>
                                            </div>
                                            <a class="shop-btn" href="shop.html">Add To Cart</a>
                                            <div class="product-countdown" data-countdown="2021/09/20"></div>
                                        </div>
                                    </div>


                                    <div class="deals-slide-item">
                                        <div class="deals-content-item">
                                            <h2 class="deals-title"><a
                                                    href="{{ route('shop.shopdetail', $item->id) }}">Top Mens slippers</a>
                                            </h2>
                                            <div class="ratings">
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                                <span><i class="fa fa-star"></i></span>
                                            </div>
                                            <p class="deals-desc">Canon's first 4K UHD Camcorder, the GX10 has a compact
                                                and portable design that delivers ...</p>
                                            <div class="price-box">
                                                <span class="price-old"><del>$80.00</del></span>
                                                <span class="price-regular">$26.10</span>
                                            </div>
                                            <a class="shop-btn" href="shop.html">Add To Cart</a>
                                            <div class="product-countdown" data-countdown="2021/09/20"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="category-area bg-set bg-img section-padding pb-0" data-bg="assets/img/bg/bg-listcate.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3 class="title text-white">SHOP BY CATEGORIES PULLMAN</h3>
                        <h4 class="sub-title text-white">Investigationes demonstraverunt lectores legere me lius quod ii
                            legunt saepius claritas est etiam processus dynamicus, qui sequitur mutationem.</h4>
                    </div>
                </div>
            </div>
            <div class="row category-wrapper">
                <div class="col-12">
                    <div class="catagory-carousel-active slick-row-15">
                        <div class="single-category-item">
                            <div class="category-title">
                                <a href="shop.html">MEN</a>
                            </div>
                            <div class="category-thumb">
                                <a href="shop.html">
                                    <img src="assets/img/category/category-1.png" alt="category thumb">
                                </a>
                            </div>
                            <div class="shop-collection text-center">
                                <a class="shop-btn" href="shop.html">Shop Collections</a>
                            </div>
                        </div>
                        <div class="single-category-item">
                            <div class="category-title">
                                <a href="shop.html">WOMEN</a>
                            </div>
                            <div class="category-thumb">
                                <a href="shop.html">
                                    <img src="assets/img/category/category-2.png" alt="category thumb">
                                </a>
                            </div>
                            <div class="shop-collection text-center">
                                <a class="shop-btn" href="shop.html">Shop Collections</a>
                            </div>
                        </div>
                        <div class="single-category-item">
                            <div class="category-title">
                                <a href="shop.html">QUICKIIN</a>
                            </div>
                            <div class="category-thumb">
                                <a href="shop.html">
                                    <img src="assets/img/category/category-3.png" alt="category thumb">
                                </a>
                            </div>
                            <div class="shop-collection text-center">
                                <a class="shop-btn" href="shop.html">Shop Collections</a>
                            </div>
                        </div>
                        <div class="single-category-item">
                            <div class="category-title">
                                <a href="shop.html">Kids</a>
                            </div>
                            <div class="category-thumb">
                                <a href="shop.html">
                                    <img src="assets/img/category/category-2.png" alt="category thumb">
                                </a>
                            </div>
                            <div class="shop-collection text-center">
                                <a class="shop-btn" href="shop.html">Shop Collections</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="product-gallery section-padding mt-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3 class="title">OUR IN STORE</h3>
                        <h4 class="sub-title">Investigationes demonstraverunt lectores legere me lius quod ii legunt
                            saepius claritas est etiam processus dynamicus, qui sequitur mutationem.</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-container">

                        <div class="product-tab-menu">
                            <ul class="nav justify-content-center">
                                <li><a href="#tab1" class="active" data-bs-toggle="tab">New Arrival</a></li>
                                <li><a href="#tab2" data-bs-toggle="tab">Best Seller</a></li>
                                <li><a href="#tab3" data-bs-toggle="tab">Featured Products</a></li>
                            </ul>
                        </div>



                        <div class="tab-content">

                            <div class="tab-pane fade show active" id="tab1">
                                <div class="product-carousel-4_2 slick-row-5 slick-arrow-style">
                                    @foreach ($products as $item)
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="{{ route('shop.shopdetail', $item->id) }}">
                                                    <img src="{{ url('assets/img/product/' . $item->image) }}"
                                                        alt="product thumb">
                                                </a>
                                                <div class="button-group">
                                                    {{-- <a href="wishlist.html" data-bs-toggle="tooltip"
                                                        title="Add to Wishlist"><i class="fa fa-heart-o"></i></a> --}}
                                                    {{-- <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a> --}}
                                                    <a href="javascript:void(0);" class="quick-view-btn"
                                                        data-id="{{ $item->id }}" data-name="{{ $item->name }}"
                                                        data-price="{{ $item->sellprice }}"
                                                        data-oldprice="{{ $item->mrp }}" {{-- data-desc="{{ $item->description }}"  --}}
                                                        data-image="{{ asset('assets/img/product/' . $item->image) }}"
                                                        data-bs-toggle="modal" data-bs-target="#quick_view">
                                                        <span data-bs-toggle="tooltip" title="Quick View">
                                                            <i class="fa fa-eye"></i>
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="product-label">
                                                    <span>new</span>
                                                </div>
                                                <div class="discount-label">
                                                    <span>-10% Off</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-caption">
                                                    <h6 class="product-name">
                                                        <a
                                                            href="{{ route('shop.shopdetail', $item->id) }}">{{ $item->name }}</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="price-old"><del>${{ $item->mrp }}</del></span>
                                                        <span class="price-regular">${{ $item->sellprice }}</span>
                                                    </div>

                                                </div>
                                                <div class="ratings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            {{-- <div class="tab-pane fade" id="tab2">
                                    <div class="product-carousel-4_2 slick-row-5 slick-arrow-style">
                                        
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="{{route('shop.shopdetail',$item->id)}}">
                                                    <img src="assets/img/product/product-10.jpg" alt="product thumb">
                                                </a>
                                                <div class="button-group">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                                </div>
                                                <div class="product-label">
                                                    <span>new</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-caption">
                                                    <h6 class="product-name">
                                                        <a href="{{route('shop.shopdetail',$item->id)}}">Quickiin Mens shoes</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="price-old"><del>$90.00</del></span>
                                                        <span class="price-regular">$70.00</span>
                                                    </div>
                                                    <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                                <div class="ratings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </div>
                                            </div>
                                        </div>                                       

                                        
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="{{route('shop.shopdetail',$item->id)}}">
                                                    <img src="assets/img/product/product-9.jpg" alt="product thumb">
                                                </a>
                                                <div class="button-group">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                                </div>
                                                <div class="product-label">
                                                    <span>new</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-caption">
                                                    <h6 class="product-name">
                                                        <a href="{{route('shop.shopdetail',$item->id)}}">New Womens High Hills</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="price-old"><del>$80.00</del></span>
                                                        <span class="price-regular">$60.00</span>
                                                    </div>
                                                    <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                                <div class="ratings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        

                                        
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="{{route('shop.shopdetail',$item->id)}}">
                                                    <img src="assets/img/product/product-8.jpg" alt="product thumb">
                                                </a>
                                                <div class="button-group">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                                </div>
                                                <div class="product-label">
                                                    <span>new</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-caption">
                                                    <h6 class="product-name">
                                                        <a href="{{route('shop.shopdetail',$item->id)}}">Leather Mens slippers</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="price-old"><del>$60.00</del></span>
                                                        <span class="price-regular">$50.00</span>
                                                    </div>
                                                    <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                                <div class="ratings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        

                                        
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="{{route('shop.shopdetail',$item->id)}}">
                                                    <img src="assets/img/product/product-7.jpg" alt="product thumb">
                                                </a>
                                                <div class="button-group">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                                </div>
                                                <div class="product-label">
                                                    <span>new</span>
                                                </div>
                                                <div class="discount-label">
                                                    <span>-15% Off</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-caption">
                                                    <h6 class="product-name">
                                                        <a href="{{route('shop.shopdetail',$item->id)}}">Rexpo Womens shoes</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="price-old"><del>$100.00</del></span>
                                                        <span class="price-regular">$85.00</span>
                                                    </div>
                                                    <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                                <div class="ratings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        

                                        
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="{{route('shop.shopdetail',$item->id)}}">
                                                    <img src="assets/img/product/product-6.jpg" alt="product thumb">
                                                </a>
                                                <div class="button-group">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                                </div>
                                                <div class="product-label">
                                                    <span>new</span>
                                                </div>
                                                <div class="discount-label">
                                                    <span>-10% Off</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-caption">
                                                    <h6 class="product-name">
                                                        <a href="{{route('shop.shopdetail',$item->id)}}">Primitive Mens shoes</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="price-old"><del>$75.00</del></span>
                                                        <span class="price-regular">$55.00</span>
                                                    </div>
                                                    <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                                <div class="ratings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        

                                        
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="{{route('shop.shopdetail',$item->id)}}">
                                                    <img src="assets/img/product/product-5.jpg" alt="product thumb">
                                                </a>
                                                <div class="button-group">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                                </div>
                                                <div class="product-label">
                                                    <span>new</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-caption">
                                                    <h6 class="product-name">
                                                        <a href="{{route('shop.shopdetail',$item->id)}}">Quickiin Mens shoes</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="price-old"><del>$90.00</del></span>
                                                        <span class="price-regular">$70.00</span>
                                                    </div>
                                                    <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                                <div class="ratings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        

                                        
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="{{route('shop.shopdetail',$item->id)}}">
                                                    <img src="assets/img/product/product-4.jpg" alt="product thumb">
                                                </a>
                                                <div class="button-group">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                                </div>
                                                <div class="product-label">
                                                    <span>new</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-caption">
                                                    <h6 class="product-name">
                                                        <a href="{{route('shop.shopdetail',$item->id)}}">New Womens High Hills</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="price-old"><del>$80.00</del></span>
                                                        <span class="price-regular">$60.00</span>
                                                    </div>
                                                    <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                                <div class="ratings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        

                                        
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="{{route('shop.shopdetail',$item->id)}}">
                                                    <img src="assets/img/product/product-3.jpg" alt="product thumb">
                                                </a>
                                                <div class="button-group">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                                </div>
                                                <div class="product-label">
                                                    <span>new</span>
                                                </div>
                                                <div class="discount-label">
                                                    <span>-10% Off</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-caption">
                                                    <h6 class="product-name">
                                                        <a href="{{route('shop.shopdetail',$item->id)}}">Leather Mens slippers</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="price-old"><del>$60.00</del></span>
                                                        <span class="price-regular">$50.00</span>
                                                    </div>
                                                    <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                                <div class="ratings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        

                                        
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="{{route('shop.shopdetail',$item->id)}}">
                                                    <img src="assets/img/product/product-2.jpg" alt="product thumb">
                                                </a>
                                                <div class="button-group">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                                </div>
                                                <div class="product-label">
                                                    <span>new</span>
                                                </div>
                                                <div class="discount-label">
                                                    <span>-10% Off</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-caption">
                                                    <h6 class="product-name">
                                                        <a href="{{route('shop.shopdetail',$item->id)}}">Rexpo Womens shoes</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="price-old"><del>$100.00</del></span>
                                                        <span class="price-regular">$85.00</span>
                                                    </div>
                                                    <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                                <div class="ratings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        

                                        
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="{{route('shop.shopdetail',$item->id)}}">
                                                    <img src="assets/img/product/product-1.jpg" alt="product thumb">
                                                </a>
                                                <div class="button-group">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                                </div>
                                                <div class="product-label">
                                                    <span>new</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-caption">
                                                    <h6 class="product-name">
                                                        <a href="{{route('shop.shopdetail',$item->id)}}">Primitive Mens shoes</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="price-old"><del>$75.00</del></span>
                                                        <span class="price-regular">$55.00</span>
                                                    </div>
                                                    <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                                <div class="ratings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab3">
                                    <div class="product-carousel-4_2 slick-row-5 slick-arrow-style">
                                        
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="{{route('shop.shopdetail',$item->id)}}">
                                                    <img src="assets/img/product/product-2.jpg" alt="product thumb">
                                                </a>
                                                <div class="button-group">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                                </div>
                                                <div class="product-label">
                                                    <span>new</span>
                                                </div>
                                                <div class="discount-label">
                                                    <span>-10% Off</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-caption">
                                                    <h6 class="product-name">
                                                        <a href="{{route('shop.shopdetail',$item->id)}}">Quickiin Mens shoes</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="price-old"><del>$90.00</del></span>
                                                        <span class="price-regular">$70.00</span>
                                                    </div>
                                                    <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                                <div class="ratings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        

                                        
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="{{route('shop.shopdetail',$item->id)}}">
                                                    <img src="assets/img/product/product-4.jpg" alt="product thumb">
                                                </a>
                                                <div class="button-group">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                                </div>
                                                <div class="product-label">
                                                    <span>new</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-caption">
                                                    <h6 class="product-name">
                                                        <a href="{{route('shop.shopdetail',$item->id)}}">New Womens High Hills</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="price-old"><del>$80.00</del></span>
                                                        <span class="price-regular">$60.00</span>
                                                    </div>
                                                    <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                                <div class="ratings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        

                                        
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="{{route('shop.shopdetail',$item->id)}}">
                                                    <img src="assets/img/product/product-6.jpg" alt="product thumb">
                                                </a>
                                                <div class="button-group">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                                </div>
                                                <div class="product-label">
                                                    <span>new</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-caption">
                                                    <h6 class="product-name">
                                                        <a href="{{route('shop.shopdetail',$item->id)}}">Leather Mens slippers</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="price-old"><del>$60.00</del></span>
                                                        <span class="price-regular">$50.00</span>
                                                    </div>
                                                    <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                                <div class="ratings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        

                                        
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="{{route('shop.shopdetail',$item->id)}}">
                                                    <img src="assets/img/product/product-8.jpg" alt="product thumb">
                                                </a>
                                                <div class="button-group">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                                </div>
                                                <div class="product-label">
                                                    <span>new</span>
                                                </div>
                                                <div class="discount-label">
                                                    <span>-15% Off</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-caption">
                                                    <h6 class="product-name">
                                                        <a href="{{route('shop.shopdetail',$item->id)}}">Rexpo Womens shoes</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="price-old"><del>$100.00</del></span>
                                                        <span class="price-regular">$85.00</span>
                                                    </div>
                                                    <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                                <div class="ratings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        

                                        
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="{{route('shop.shopdetail',$item->id)}}">
                                                    <img src="assets/img/product/product-10.jpg" alt="product thumb">
                                                </a>
                                                <div class="button-group">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                                </div>
                                                <div class="product-label">
                                                    <span>new</span>
                                                </div>
                                                <div class="discount-label">
                                                    <span>-20% Off</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-caption">
                                                    <h6 class="product-name">
                                                        <a href="{{route('shop.shopdetail',$item->id)}}">Primitive Mens shoes</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="price-old"><del>$75.00</del></span>
                                                        <span class="price-regular">$55.00</span>
                                                    </div>
                                                    <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                                <div class="ratings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        

                                        
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="{{route('shop.shopdetail',$item->id)}}">
                                                    <img src="assets/img/product/product-1.jpg" alt="product thumb">
                                                </a>
                                                <div class="button-group">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                                </div>
                                                <div class="product-label">
                                                    <span>new</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-caption">
                                                    <h6 class="product-name">
                                                        <a href="{{route('shop.shopdetail',$item->id)}}">Quickiin Mens shoes</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="price-old"><del>$90.00</del></span>
                                                        <span class="price-regular">$70.00</span>
                                                    </div>
                                                    <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                                <div class="ratings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        

                                        
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="{{route('shop.shopdetail',$item->id)}}">
                                                    <img src="assets/img/product/product-3.jpg" alt="product thumb">
                                                </a>
                                                <div class="button-group">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                                </div>
                                                <div class="product-label">
                                                    <span>new</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-caption">
                                                    <h6 class="product-name">
                                                        <a href="{{route('shop.shopdetail',$item->id)}}">New Womens High Hills</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="price-old"><del>$80.00</del></span>
                                                        <span class="price-regular">$60.00</span>
                                                    </div>
                                                    <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                                <div class="ratings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        

                                        
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="{{route('shop.shopdetail',$item->id)}}">
                                                    <img src="assets/img/product/product-5.jpg" alt="product thumb">
                                                </a>
                                                <div class="button-group">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                                </div>
                                                <div class="product-label">
                                                    <span>new</span>
                                                </div>
                                                <div class="discount-label">
                                                    <span>-10% Off</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-caption">
                                                    <h6 class="product-name">
                                                        <a href="{{route('shop.shopdetail',$item->id)}}">Leather Mens slippers</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="price-old"><del>$60.00</del></span>
                                                        <span class="price-regular">$50.00</span>
                                                    </div>
                                                    <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                                <div class="ratings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        

                                        
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="{{route('shop.shopdetail',$item->id)}}">
                                                    <img src="assets/img/product/product-7.jpg" alt="product thumb">
                                                </a>
                                                <div class="button-group">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                                </div>
                                                <div class="product-label">
                                                    <span>new</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-caption">
                                                    <h6 class="product-name">
                                                        <a href="{{route('shop.shopdetail',$item->id)}}">Rexpo Womens shoes</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="price-old"><del>$100.00</del></span>
                                                        <span class="price-regular">$85.00</span>
                                                    </div>
                                                    <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                                <div class="ratings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        

                                        
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a href="{{route('shop.shopdetail',$item->id)}}">
                                                    <img src="assets/img/product/product-9.jpg" alt="product thumb">
                                                </a>
                                                <div class="button-group">
                                                    <a href="wishlist.html" data-bs-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#quick_view"><span data-bs-toggle="tooltip"  title="Quick View"><i class="fa fa-eye"></i></span></a>
                                                </div>
                                                <div class="product-label">
                                                    <span>new</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="product-caption">
                                                    <h6 class="product-name">
                                                        <a href="{{route('shop.shopdetail',$item->id)}}">Primitive Mens shoes</a>
                                                    </h6>
                                                    <div class="price-box">
                                                        <span class="price-old"><del>$75.00</del></span>
                                                        <span class="price-regular">$55.00</span>
                                                    </div>
                                                    <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a>
                                                </div>
                                                <div class="ratings">
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="testimonial-area bg-img section-padding" data-bg="assets/img/bg/bg-testimonial.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-wrapper">
                        <div class="testimonial-carousel">

                            <div class="testimonial-slide-item">
                                <div class="testimonial-item text-center">
                                    <p class="testimonial-desc">
                                        "When potential customers are researching you online, they're getting to know you by
                                        way of the content of your website."
                                    </p>
                                    <div class="testimonial-author">
                                        <img src="assets/img/testimonial/testimonial-1.png" alt="testimonial author">
                                    </div>
                                    <h6 class="author-designation">jhone doe</h6>
                                </div>
                            </div>


                            <div class="testimonial-slide-item">
                                <div class="testimonial-item text-center">
                                    <p class="testimonial-desc">
                                        " When potential customers are researching you online, they're getting to know you
                                        by way of the content of your website. "
                                    </p>
                                    <div class="testimonial-author">
                                        <img src="assets/img/testimonial/testimonial-1.png" alt="testimonial author">
                                    </div>
                                    <h6 class="author-designation">jhone doe</h6>
                                </div>
                            </div>


                            <div class="testimonial-slide-item">
                                <div class="testimonial-item text-center">
                                    <p class="testimonial-desc">
                                        " When potential customers are researching you online, they're getting to know you
                                        by way of the content of your website. "
                                    </p>
                                    <div class="testimonial-author">
                                        <img src="assets/img/testimonial/testimonial-1.png" alt="testimonial author">
                                    </div>
                                    <h6 class="author-designation">jhone doe</h6>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="brand-logo-wrapper">
                        <div class="brand-logo-carousel slick-row-10 slick-arrow-style">

                            <div class="brand-item">
                                <a href="#">
                                    <img src="assets/img/brand/1.png" alt="">
                                </a>
                            </div>



                            <div class="brand-item">
                                <a href="#">
                                    <img src="assets/img/brand/2.png" alt="">
                                </a>
                            </div>



                            <div class="brand-item">
                                <a href="#">
                                    <img src="assets/img/brand/3.png" alt="">
                                </a>
                            </div>



                            <div class="brand-item">
                                <a href="#">
                                    <img src="assets/img/brand/4.png" alt="">
                                </a>
                            </div>



                            <div class="brand-item">
                                <a href="#">
                                    <img src="assets/img/brand/5.png" alt="">
                                </a>
                            </div>



                            <div class="brand-item">
                                <a href="#">
                                    <img src="assets/img/brand/6.png" alt="">
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="latest-blog-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3 class="title">FROM OUR BLOG</h3>
                        <h4 class="sub-title">Investigationes demonstraverunt lectores legere me lius quod ii legunt
                            saepius claritas est etiam processus dynamicus, qui sequitur mutationem.</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="blog-carousel-active slick-row-5 slick-arrow-style">

                        <div class="blog-slide-item">
                            <div class="blog-post-item">
                                <div class="blog-thumb">
                                    <a href="blog-details.html">
                                        <img src="assets/img/blog/blog-1.jpg" alt="blog thumb">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <h6 class="blog-title">
                                        <a href="blog-details.html">This is First Post XipBlog</a>
                                    </h6>
                                    <div class="blog-meta">
                                        <span><i class="fa fa-calendar"></i>Aug 05, 2021</span>
                                        <span><i class="fa fa-user"></i>Admin</span>
                                    </div>
                                    <p class="blog-desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. ...</p>
                                    <a class="btn read-more" href="blog-details.html">Read More</a>
                                </div>
                            </div>
                        </div>


                        <div class="blog-slide-item">
                            <div class="blog-post-item">
                                <div class="blog-thumb">
                                    <a href="blog-details.html">
                                        <img src="assets/img/blog/blog-2.jpg" alt="blog thumb">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <h6 class="blog-title">
                                        <a href="blog-details.html">This is Secound Post XipBlog</a>
                                    </h6>
                                    <div class="blog-meta">
                                        <span><i class="fa fa-calendar"></i>Jun 05, 2021</span>
                                        <span><i class="fa fa-user"></i>Admin</span>
                                    </div>
                                    <p class="blog-desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. ...</p>
                                    <a class="btn read-more" href="blog-details.html">Read More</a>
                                </div>
                            </div>
                        </div>


                        <div class="blog-slide-item">
                            <div class="blog-post-item">
                                <div class="blog-thumb">
                                    <a href="blog-details.html">
                                        <img src="assets/img/blog/blog-3.jpg" alt="blog thumb">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <h6 class="blog-title">
                                        <a href="blog-details.html">This is Third Post XipBlog</a>
                                    </h6>
                                    <div class="blog-meta">
                                        <span><i class="fa fa-calendar"></i>May 05, 2021</span>
                                        <span><i class="fa fa-user"></i>Admin</span>
                                    </div>
                                    <p class="blog-desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. ...</p>
                                    <a class="btn read-more" href="blog-details.html">Read More</a>
                                </div>
                            </div>
                        </div>


                        <div class="blog-slide-item">
                            <div class="blog-post-item">
                                <div class="blog-thumb">
                                    <a href="blog-details.html">
                                        <img src="assets/img/blog/blog-4.jpg" alt="blog thumb">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <h6 class="blog-title">
                                        <a href="blog-details.html">This is Fourth Post XipBlog</a>
                                    </h6>
                                    <div class="blog-meta">
                                        <span><i class="fa fa-calendar"></i>Jan 08, 2021</span>
                                        <span><i class="fa fa-user"></i>Admin</span>
                                    </div>
                                    <p class="blog-desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. ...</p>
                                    <a class="btn read-more" href="blog-details.html">Read More</a>
                                </div>
                            </div>
                        </div>


                        <div class="blog-slide-item">
                            <div class="blog-post-item">
                                <div class="blog-thumb">
                                    <a href="blog-details.html">
                                        <img src="assets/img/blog/blog-2.jpg" alt="blog thumb">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <h6 class="blog-title">
                                        <a href="blog-details.html">This is Fifth Post XipBlog</a>
                                    </h6>
                                    <div class="blog-meta">
                                        <span><i class="fa fa-calendar"></i>Aug 05, 2021</span>
                                        <span><i class="fa fa-user"></i>Admin</span>
                                    </div>
                                    <p class="blog-desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. ...</p>
                                    <a class="btn read-more" href="blog-details.html">Read More</a>
                                </div>
                            </div>
                        </div>


                        <div class="blog-slide-item">
                            <div class="blog-post-item">
                                <div class="blog-thumb">
                                    <a href="blog-details.html">
                                        <img src="assets/img/blog/blog-3.jpg" alt="blog thumb">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <h6 class="blog-title">
                                        <a href="blog-details.html">This is Seventh Post XipBlog</a>
                                    </h6>
                                    <div class="blog-meta">
                                        <span><i class="fa fa-calendar"></i>Aug 05, 2021</span>
                                        <span><i class="fa fa-user"></i>Admin</span>
                                    </div>
                                    <p class="blog-desc">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry. ...</p>
                                    <a class="btn read-more" href="blog-details.html">Read More</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
@endsection
