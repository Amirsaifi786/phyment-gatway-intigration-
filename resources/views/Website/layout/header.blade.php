   <header class="header-area">
       <div class="main-header d-none d-lg-block">
           <div class="header-top black-bg">
               <div class="container">
                   <div class="row align-items-center">
                       <div class="col-lg-6">
                           <div class="top-left-navigation">
                               <ul class="nav align-items-center">
                                   {{-- <li class="language">
                                       <img src="assets/img/icon/en.png" alt="flag"> ENGLISH
                                       <i class="fa fa-angle-down"></i>
                                       <ul class="dropdown-list">
                                           <li><a href="#"><img src="assets/img/icon/en.png" alt="flag">
                                                   English</a></li>
                                           <li><a href="#"><img src="assets/img/icon/fr.png" alt="flag">
                                                   French</a></li>
                                       </ul>
                                   </li> --}}
                                   {{-- <li class="curreny-wrap">
                                       $ CURRENCY
                                       <i class="fa fa-angle-down"></i>
                                       <ul class="dropdown-list curreny-list">
                                           <li><a href="#">$ USD</a></li>
                                           <li><a href="#">€ EURO</a></li>
                                       </ul>
                                   </li> --}}
                               </ul>
                           </div>
                       </div>
                       <div class="col-lg-6 d-flex justify-content-end">
                           <div class="header-social-link">
                               <a href="#"><i class="fa fa-facebook"></i></a>
                               <a href="#"><i class="fa fa-twitter"></i></a>
                               <a href="#"><i class="fa fa-instagram"></i></a>
                               <a href="#"><i class="fa fa-pinterest"></i></a>
                           </div>
                           <ul class="user-info-block">
                               @auth
                                   <li><a href="{{ route('myacount') }}"><i class="fa fa-user-circle"></i> My Account</a>
                                   </li>
                                   <li><a href="{{ route('checkout') }}"><i class="fa fa-credit-card"></i> Checkout</a></li>
                                   <li>
                                       <form method="POST" action="{{ route('logout') }}">
                                           @csrf
                                           <button type="submit" class="btn btn-link p-0">
                                               <i class="fa fa-sign-out"></i> Logout
                                           </button>
                                       </form>
                                   </li>
                               @endauth

                               @guest
                                   <li><a href="{{ route('login') }}"><i class="fa fa-sign-in"></i> Sign In</a></li>
                                   <li><a href="{{ route('register') }}"><i class="fa fa-user-plus"></i> Register</a></li>
                               @endguest
                           </ul>

                       </div>
                   </div>
               </div>
           </div>
           <div class="header-main-area black-soft sticky">
               <div class="container">
                   <div class="row align-items-center position-relative">

                       <div class="col-auto">
                           <div class="logo">
                               <a href="{{ route('home.index') }}">
                                   <img src="{{ url('assets/img/logo/logo.png') }}" alt="Brand Logo">
                               </a>
                           </div>
                       </div>
                       <div class="col-auto position-static">
                           <div class="main-menu-area">
                               <div class="main-menu">
                                   <nav class="desktop-menu">
                                       <ul>
                                           <li class="active"><a href="{{ route('home.index') }}">Home <i
                                                       class="fa fa-angle-down"></i></a>
                                               {{-- <ul class="dropdown">
                                                   <li><a href="index-2.html">Home version 01</a></li>
                                                   <li><a href="index-3.html">Home version 02</a></li>
                                                   <li><a href="index-4.html">Home version 03</a></li>
                                                   <li><a href="index-5.html">Home version 04</a></li>
                                                   <li><a href="index-6.html">Home version 05</a></li>
                                                   <li><a href="index-7.html">Home version 06</a></li>
                                               </ul> --}}
                                           </li>
                                           <li class="position-static"><a href="#">pages <i
                                                       class="fa fa-angle-down"></i></a>
                                               <ul class="megamenu dropdown">
                                                   {{-- <li class="mega-title"><span>column 01</span>
                                                       <ul>
                                                           <li><a href="shop.html">shop grid left
                                                                   sidebar</a></li>
                                                           <li><a href="shop-grid-right-sidebar.html">shop grid right
                                                                   sidebar</a></li>
                                                           <li><a href="shop-list-left-sidebar.html">shop list left
                                                                   sidebar</a></li>
                                                           <li><a href="shop-list-right-sidebar.html">shop list right
                                                                   sidebar</a></li>
                                                       </ul>
                                                   </li>
                                                   <li class="mega-title"><span>column 02</span>
                                                       <ul>
                                                           <li><a href="product-details.html">product details</a></li>
                                                           <li><a href="product-details-affiliate.html">product
                                                                   details
                                                                   affiliate</a></li>
                                                           <li><a href="product-details-variable.html">product details
                                                                   variable</a></li>
                                                           <li><a href="product-details-group.html">product details
                                                                   group</a></li>
                                                       </ul>
                                                   </li> --}}
                                                   <li class="mega-title"><span>List 1</span>
                                                       <ul>
                                                           <li><a href="{{ route('shop.Cart') }}">cart</a></li>
                                                           <li><a href="{{ route('checkout') }}">checkout</a></li>
                                                           <li><a href="{{ route('shop.shop') }}">Shop</a></li>
                                                           <li><a href="{{ route('wishlist') }}">wishlist</a></li>
                                                       </ul>
                                                   </li>
                                                   <li class="mega-title"><span>List 2</span>
                                                       <ul>
                                                           <li><a href="{{ route('myacount') }}">My-account</a></li>
                                                           <li><a href="{{ route('login') }}">Login</a></li>
                                                           <li><a href="{{ route('register') }}">Register</a></li>
                                                           <li><a href="{{ route('about.index') }}">About us</a></li>
                                                           <li><a href="{{ route('contact.contact') }}">Contact us</a>
                                                           </li>
                                                       </ul>
                                                   </li>
                                               </ul>
                                           </li>
                                           <li><a href="{{ route('shop.shop') }}">shop <i
                                                       class="fa fa-angle-down"></i></a>
                                               <ul class="dropdown">
                                                   {{--   <li><a href="#">shop grid layout <i
                                                               class="fa fa-angle-right"></i></a>
                                                       <ul class="dropdown">
                                                           <li><a href="shop.html">shop grid left sidebar</a></li>
                                                           <li><a href="shop-grid-right-sidebar.html">shop grid right
                                                                   sidebar</a></li>
                                                           <li><a href="shop-grid-full-3-col.html">shop grid full 3
                                                                   col</a></li>
                                                           <li><a href="shop-grid-full-4-col.html">shop grid full 4
                                                                   col</a></li>
                                                       </ul>
                                                   </li>
                                                  <li><a href="#">shop list layout <i
                                                               class="fa fa-angle-right"></i></a>
                                                       <ul class="dropdown">
                                                           <li><a href="shop-list-left-sidebar.html">shop list left
                                                                   sidebar</a></li>
                                                           <li><a href="shop-list-right-sidebar.html">shop list right
                                                                   sidebar</a></li>
                                                           <li><a href="shop-list-full-width.html">shop list full
                                                                   width</a></li>
                                                       </ul>
                                                   </li>
                                                   <li><a href="#">products details <i
                                                               class="fa fa-angle-right"></i></a>
                                                       <ul class="dropdown">
                                                           <li><a href="product-details.html">product details</a></li>
                                                           <li><a href="product-details-affiliate.html">product details
                                                                   affiliate</a></li>
                                                           <li><a href="product-details-variable.html">product details
                                                                   variable</a></li>
                                                           <li><a href="product-details-group.html">product details
                                                                   group</a></li>
                                                       </ul>
                                                   </li> --}}
                                               </ul>
                                           </li>
                                           <li><a href="{{ route('blog.blog') }}">Blog <i
                                                       class="fa fa-angle-down"></i></a>
                                               {{-- <ul class="dropdown">
                                                   <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
                                                   <li><a href="blog-list-left-sidebar.html">blog list left sidebar</a>
                                                   </li>
                                                   <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                                                   <li><a href="blog-list-right-sidebar.html">blog list right
                                                           sidebar</a></li>
                                                   <li><a href="blog-grid-full-width.html">blog grid full width</a>
                                                   </li>
                                                   <li><a href="blog-details.html">blog details</a></li>
                                                   <li><a href="blog-details-left-sidebar.html">blog details left
                                                           sidebar</a></li>
                                                   <li><a href="blog-details-audio.html">blog details audio</a></li>
                                                   <li><a href="blog-details-video.html">blog details video</a></li>
                                                   <li><a href="blog-details-image.html">blog details image</a></li>
                                               </ul> --}}
                                           </li>
                                           <li><a href="{{ route('contact.contact') }}">Contact us</a></li>
                                       </ul>
                                   </nav>

                               </div>
                           </div>
                       </div>



                       <div class="col-auto ms-auto">
                           <div class="header-right">
                               <div class="header-configure-area">
                                   <ul class="nav">
                                       <li>
                                           <a href="#" class="search-trigger"><i class="fa fa-search"></i></a>
                                       </li>
                                       <li class="mini-cart-wrap">
                                           @php $cartCount = \App\Models\Cart::where('user_id', \Illuminate\Support\Facades\Auth::id())->count(); @endphp
                                           <a href="{{ route('shop.Cart') }}" class="minicart-btn">
                                               <i class="fa fa-shopping-cart"></i>
                                               <span class="notification">{{ $cartCount ?? 0 }}</span>
                                           </a>
                                           {{-- <div class="cart-list-wrapper">
                                               <ul class="cart-list">

                                                   <li>
                                                       <div class="cart-img">
                                                           <a href="product-details.html"><img
                                                                   src="assets/img/cart/cart-1.jpg" alt=""></a>
                                                       </div>
                                                       <div class="cart-info">
                                                           <h6 class="product-name"><a href="product-details.html">7th
                                                                   Generation classic</a></h6>
                                                           <span class="cart-qty">Qty: 1</span>
                                                           <span class="item-price">$60.00</span>
                                                       </div>
                                                       <div class="del-icon">
                                                           <i class="fa fa-times"></i>
                                                       </div>
                                                   </li>

                                                   <li>
                                                       <div class="cart-img">
                                                           <a href="product-details.html"><img
                                                                   src="assets/img/cart/cart-2.jpg" alt=""></a>
                                                       </div>
                                                       <div class="cart-info">
                                                           <h6 class="product-name"><a
                                                                   href="product-details.html">Digital 8th
                                                                   generation</a></h6>
                                                           <span class="cart-qty">Qty: 2</span>
                                                           <span class="item-price">$70.00</span>
                                                       </div>
                                                       <div class="del-icon">
                                                           <i class="fa fa-times"></i>
                                                       </div>
                                                   </li>
                                               </ul>
                                               <ul class="minicart-pricing-box">
                                                   <li>
                                                       <span>Sub-Total</span>
                                                       <span><strong>$300.00</strong></span>
                                                   </li>
                                                   <li>
                                                       <span>Eco Tax (-2.00)</span>
                                                       <span><strong>$10.00</strong></span>
                                                   </li>
                                                   <li>
                                                       <span>VAT (20%)</span>
                                                       <span><strong>$60.00</strong></span>
                                                   </li>
                                                   <li class="total">
                                                       <span>Total</span>
                                                       <span><strong>$370.00</strong></span>
                                                   </li>
                                               </ul>
                                               <div class="minicart-button">
                                                   <a href="{{ route('shop.Cart') }}"><i
                                                           class="fa fa-shopping-cart"></i> View
                                                       Cart</a>
                                                   <a href="{{ route('checkout') }}"><i class="fa fa-share"></i>
                                                       Checkout</a>
                                               </div>
                                           </div> --}}

                                           {{-- <div class="cart-list-wrapper">
                                               <ul class="cart-list">
                                                   @forelse($carts as $cart)
                                                       <li>
                                                           <div class="cart-img">
                                                               <a
                                                                   href="{{ route('shop.shopdetail', $cart->product->id) }}">
                                                                   <img src="{{ url('assets/img/product/' . $cart->product->image) }}"
                                                                       alt="{{ $cart->product->name }}">
                                                               </a>
                                                           </div>
                                                           <div class="cart-info">
                                                               <h6 class="product-name">
                                                                   <a
                                                                       href="{{ route('shop.shopdetail', $cart->product->id) }}">
                                                                       {{ $cart->product->name }}
                                                                   </a>
                                                               </h6>
                                                               <span class="cart-qty">Qty: {{ $cart->quantity }}</span>
                                                               <span
                                                                   class="item-price">${{ number_format($cart->price, 2) }}</span>
                                                           </div>
                                                           <div class="del-icon">
                                                               <form action="{{ route('cart.delete', $cart->id) }}"
                                                                   method="POST">
                                                                   @csrf
                                                                   @method('DELETE')
                                                                   <button type="submit"
                                                                       class="btn btn-link p-0 m-0"><i
                                                                           class="fa fa-times"></i></button>
                                                               </form>
                                                           </div>
                                                       </li>
                                                   @empty
                                                       <li class="text-center">Your cart is empty</li>
                                                   @endforelse
                                               </ul>

                                               @if ($carts->count() > 0)
                                                   <ul class="minicart-pricing-box">
                                                       <li>
                                                           <span>Sub-Total</span>
                                                           <span><strong>${{ number_format($subtotal, 2) }}</strong></span>
                                                       </li>
                                                       <li class="total">
                                                           <span>Total</span>
                                                           <span><strong>${{ number_format($subtotal, 2) }}</strong></span>
                                                       </li>
                                                   </ul>
                                                   <div class="minicart-button">
                                                       <a href="{{ route('shop.Cart') }}"><i
                                                               class="fa fa-shopping-cart"></i> View Cart</a>
                                                       <a href="{{ route('checkout') }}"><i class="fa fa-share"></i>
                                                           Checkout</a>
                                                   </div>
                                               @endif
                                           </div> --}}

                                       </li>
                                   </ul>
                               </div>
                           </div>
                       </div>


                   </div>
               </div>
           </div>

       </div>




       <div class="mobile-header d-lg-none d-md-block sticky black-soft">

           <div class="container-fluid">
               <div class="row align-items-center">
                   <div class="col-12">
                       <div class="mobile-main-header">
                           <div class="mobile-logo">
                               <a href="{{ route('home.index') }}">
                                   <img src="{{ url('assets/img/logo/logo.png') }}" alt="Brand Logo">
                               </a>
                           </div>
                           <div class="mobile-menu-toggler">
                               <div class="mini-cart-wrap">
                                   <a href="{{ route('shop.Cart') }}" class="minicart-btn">
                                       <i class="fa fa-shopping-cart"></i>
                                       <div class="notification">0</div>
                                   </a>
                               </div>
                               <button class="mobile-menu-btn">
                                   <span></span>
                                   <span></span>
                                   <span></span>
                               </button>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

       </div>
       <aside class="off-canvas-wrapper">
           <div class="off-canvas-overlay"></div>
           <div class="off-canvas-inner-content">
               <div class="btn-close-off-canvas">
                   <i class="fa fa-close"></i>
               </div>

               <div class="off-canvas-inner">

                   <div class="search-box-offcanvas">
                       <form>
                           <input type="text" placeholder="Search Here...">
                           <button class="search-btn"><i class="fa fa-search"></i></button>
                       </form>
                   </div>



                   <div class="mobile-navigation">
                       <nav>
                           <ul class="mobile-menu">
                               <li class="menu-item-has-children"><a href="{{ route('home.index') }}">Home</a>
                                   {{-- <ul class="dropdown">
                                       <li><a href="index-2.html">Home version 01</a></li>
                                       <li><a href="index-3.html">Home version 02</a></li>
                                       <li><a href="index-4.html">Home version 03</a></li>
                                       <li><a href="index-5.html">Home version 04</a></li>
                                       <li><a href="index-6.html">Home version 05</a></li>
                                       <li><a href="index-7.html">Home version 06</a></li>
                                   </ul> --}}
                               </li>
                               <li class="menu-item-has-children"><a href="#">pages</a>
                                   <ul class="megamenu dropdown">
                                       {{-- <li class="mega-title menu-item-has-children"><a href="#">column 01</a>
                                           <ul class="dropdown">
                                               <li><a href="shop.html">shop grid left
                                                       sidebar</a></li>
                                               <li><a href="shop-grid-right-sidebar.html">shop grid right
                                                       sidebar</a></li>
                                               <li><a href="shop-list-left-sidebar.html">shop list left sidebar</a>
                                               </li>
                                               <li><a href="shop-list-right-sidebar.html">shop list right sidebar</a>
                                               </li>
                                           </ul>
                                       </li>
                                       <li class="mega-title menu-item-has-children"><a href="#">column 02</a>
                                           <ul class="dropdown">
                                               <li><a href="product-details.html">product details</a></li>
                                               <li><a href="product-details-affiliate.html">product
                                                       details
                                                       affiliate</a></li>
                                               <li><a href="product-details-variable.html">product details
                                                       variable</a></li>
                                               <li><a href="product-details-group.html">product details
                                                       group</a></li>
                                           </ul>
                                       </li> --}}
                                       <li class="mega-title menu-item-has-children"><a href="#">List 1</a>
                                           <ul class="dropdown">
                                               <li><a href="{{ route('shop.Cart') }}">Cart</a></li>
                                               <li><a href="{{ route('checkout') }}">Checkout</a></li>
                                               <li><a href="{{ route('shop.shop') }}">Shop</a></li>
                                               <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
                                           </ul>
                                       </li>
                                       <li class="mega-title menu-item-has-children"><a href="#">List 2</a>
                                           <ul class="dropdown">
                                               <li><a href="{{ route('myacount') }}">My-account</a></li>
                                               <li><a href="{{ route('login') }}">Login</a></li>
                                               <li><a href="{{ route('register') }}">Register</a></li>
                                               <li><a href="{{ route('about.index') }}">About us</a></li>
                                               <li><a href="{{ route('contact.contact') }}">Contact us</a></li>
                                           </ul>
                                       </li>

                                   </ul>
                               </li>
                               <li class="menu-item-has-children "><a href="{{ route('shop.shop') }}">Shop</a>
                                   {{-- <ul class="dropdown">
                                       <li class="menu-item-has-children"><a href="#">shop grid layout</a>
                                           <ul class="dropdown">
                                               <li><a href="shop.html">shop grid left sidebar</a></li>
                                               <li><a href="shop-grid-right-sidebar.html">shop grid right sidebar</a>
                                               </li>
                                               <li><a href="shop-grid-full-3-col.html">shop grid full 3 col</a></li>
                                               <li><a href="shop-grid-full-4-col.html">shop grid full 4 col</a></li>
                                           </ul>
                                       </li>
                                       <li class="menu-item-has-children"><a href="#">shop list layout</a>
                                           <ul class="dropdown">
                                               <li><a href="shop-list-left-sidebar.html">shop list left sidebar</a>
                                               </li>
                                               <li><a href="shop-list-right-sidebar.html">shop list right sidebar</a>
                                               </li>
                                               <li><a href="shop-list-full-width.html">shop list full width</a></li>
                                           </ul>
                                       </li>
                                       <li class="menu-item-has-children"><a href="#">products details</a>
                                           <ul class="dropdown">
                                               <li><a href="product-details.html">product details</a></li>
                                               <li><a href="product-details-affiliate.html">product details
                                                       affiliate</a></li>
                                               <li><a href="product-details-variable.html">product details variable</a>
                                               </li>
                                               <li><a href="product-details-group.html">product details group</a></li>
                                           </ul>
                                       </li>
                                   </ul> --}}
                               </li>
                               <li class="menu-item-has-children "><a href="{{ route('blog.blog') }}">Blog</a>
                                   {{-- <ul class="dropdown">
                                       <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
                                       <li><a href="blog-list-left-sidebar.html">blog list left sidebar</a></li>
                                       <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                                       <li><a href="blog-list-right-sidebar.html">blog list right sidebar</a></li>
                                       <li><a href="blog-grid-full-width.html">blog grid full width</a></li>
                                       <li><a href="blog-details.html">blog details</a></li>
                                       <li><a href="blog-details-left-sidebar.html">blog details left sidebar</a></li>
                                       <li><a href="blog-details-audio.html">blog details audio</a></li>
                                       <li><a href="blog-details-video.html">blog details video</a></li>
                                       <li><a href="blog-details-image.html">blog details image</a></li>
                                   </ul> --}}
                               </li>
                               <li><a href="{{ route('contact.contact') }}">Contact us</a></li>
                           </ul>
                       </nav>

                   </div>


                   <div class="mobile-settings">
                       <ul class="nav">
                           <li>
                               <div class="dropdown mobile-top-dropdown">
                                   <a href="#" class="dropdown-toggle" id="currency"
                                       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       Currency
                                       <i class="fa fa-angle-down"></i>
                                   </a>
                                   <div class="dropdown-menu" aria-labelledby="currency">
                                       <a class="dropdown-item" href="#">$ USD</a>
                                       <a class="dropdown-item" href="#">$ EURO</a>
                                   </div>
                               </div>
                           </li>
                           <li>
                               <div class="dropdown mobile-top-dropdown">
                                   <a href="{{ route('myacount') }}" class="dropdown-toggle" id="myaccount"
                                       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       My Account
                                       <i class="fa fa-angle-down"></i>
                                   </a>
                                   <div class="dropdown-menu" aria-labelledby="myaccount">
                                       <a class="dropdown-item" href="{{ route('myacount') }}">My account</a>
                                       <a class="dropdown-item" href="{{ route('login') }}"> Login</a>
                                       <a class="dropdown-item" href="{{ route('register') }}">register</a>
                                   </div>
                               </div>
                           </li>
                       </ul>
                   </div>


                   <div class="offcanvas-widget-area">
                       <div class="off-canvas-contact-widget">
                           <ul>
                               <li><i class="fa fa-mobile"></i>
                                   <a href="#">0123456789</a>
                               </li>
                               <li><i class="fa fa-envelope-o"></i>
                                   <a href="#">info@yourdomain.com</a>
                               </li>
                           </ul>
                       </div>
                       <div class="off-canvas-social-widget">
                           <a href="#"><i class="fa fa-facebook"></i></a>
                           <a href="#"><i class="fa fa-twitter"></i></a>
                           <a href="#"><i class="fa fa-pinterest-p"></i></a>
                           <a href="#"><i class="fa fa-linkedin"></i></a>
                           <a href="#"><i class="fa fa-youtube-play"></i></a>
                       </div>
                   </div>

               </div>
           </div>
       </aside>


   </header>
