    <footer class="black-bg">
        <!-- newsletter area start -->
        {{-- <section class="newsletter-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="newsletter-wrapper text-center">
                            <h3 class="title text-white">JOIN OUR NEWSLETTER</h3>
                            <form class="newsletter-inner" id="mc-form">
                                <input type="email" class="news-field" id="mc-email" autocomplete="off"
                                    placeholder="Enter your email address">
                                <button class="news-btn" id="mc-submit">Subscribe</button>
                            </form>
                            <h6 class="newsletter-subtitle">To get the latest news from us please subscribe your email.
                            </h6>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- newsletter area end -->
        <div class="footer-widget-area">
            <div class="container">
                <div class="row mtn-30">
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget-item mt-30">
                            <h6 class="widget-title">Pages</h6>
                            <ul class="usefull-links">
                                {{-- <li><a href="{{ route('home.index') }}">Home</a></li> --}}
                                <li><a href="{{ route('about.index') }}">About</a></li>
                                <li><a href="{{ route('contact.contact') }}">Contact-us</a></li>
                                <li><a href="{{ route('shop.Cart') }}">Cart</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget-item mt-30">
                            <h6 class="widget-title">PRODUCTS</h6>
                            <ul class="usefull-links">
                                <li><a href="{{ route('shop.shop') }}">Shop</a></li>
                                <li><a href="{{ route('checkout') }}">Checkout</a></li>
                                <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
                              
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget-item mt-30">
                            <h6 class="widget-title">Privacy </h6>
                            <ul class="usefull-links">
                                <li><a href="{{ route('page.privacypolicy') }}">Privacy Policy</a></li>
                                <li><a href="{{ route('page.termcondition') }}">Terms And Condition</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget-item mt-30">
                            <h6 class="widget-title">My ACCOUNT</h6>
                            <ul class="usefull-links">
                                <li><a href="{{ route('myacount') }}">My Account</a></li>
                                <li><a href="{{route('myorder')}}">Orders</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle-area">
            <div class="container">
                <div class="row mtn-30">
                    <div class="col-lg-6 col-sm-12">
                        <div class="address-block mt-30">
                            <div class="footer-logo">
                                <a href="index-2.html">
                                    <img src="assets/img/logo/logo.png" alt="Brand Logo">
                                </a>
                            </div>
                            <address class="address-info d-flex align-items-center">
                                <i class="fa fa-map-marker"></i>
                                <p><span>ADDRESS : </span> Your address goes here</p>
                            </address>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <address class="address-info email mt-30">
                            <i class="fa fa-envelope"></i>
                            <p><span>EMAIL : </span><a href="emailto:demo@examplecom">demo@examplecom</a></p>
                        </address>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <address class="address-info email mt-30">
                            <i class="fa fa-phone"></i>
                            <p><span>PHONE : </span><a href="tel:0123456789">0123456789</a></p>
                        </address>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="footer-bottom-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="payment-method-list">
                            <img src="assets/img/payment-2.png" alt="payment method">
                        </div>
                        <div class="footer-link">
                            <a href="#">SITE MAP</a>
                            <a href="#">SEARCH TERMS</a>
                            <a href="#">ADVANCED SEARCH</a>
                            <a href="#">ORDERS AND RETURNS</a>
                            <a href="#">CONTACT US</a>
                        </div>
                        <p class="copyright">
                        <p>© 2021 <b class="text-white">Pullman</b> Made with <i class="fa fa-heart text-danger"></i> by
                            <a href="https://hasthemes.com/">HasThemes</a></p>
                        </p>
                    </div>
                </div>
            </div>
        </div> --}}
    </footer>
    <div class="modal" id="quick_view">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <!-- product details inner end -->
                    <div class="product-details-inner">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product-large-slider">
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-details-img1.jpg"
                                            alt="product-details" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-details-img2.jpg"
                                            alt="product-details" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-details-img3.jpg"
                                            alt="product-details" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-details-img4.jpg"
                                            alt="product-details" />
                                    </div>
                                </div>
                                <div class="pro-nav slick-row-10 slick-arrow-style">
                                    <div class="pro-nav-thumb">
                                        <img src="assets/img/product/product-details-img1.jpg"
                                            alt="product-details" />
                                    </div>
                                    <div class="pro-nav-thumb">
                                        <img src="assets/img/product/product-details-img2.jpg"
                                            alt="product-details" />
                                    </div>
                                    <div class="pro-nav-thumb">
                                        <img src="assets/img/product/product-details-img3.jpg"
                                            alt="product-details" />
                                    </div>
                                    <div class="pro-nav-thumb">
                                        <img src="assets/img/product/product-details-img4.jpg"
                                            alt="product-details" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="product-details-des">
                                    <h3 class="product-name">Premium Mens Sports Lather Keds</h3>
                                    <div class="ratings d-flex">
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <div class="pro-review">
                                            <span>1 Reviews</span>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <span class="price-old"><del>$90.00</del></span>
                                        <span class="price-regular">$70.00</span>
                                    </div>
                                    <h5 class="offer-text"><strong>Hurry up</strong>! offer ends in:</h5>
                                    <div class="product-countdown" data-countdown="2021/09/20"></div>
                                    <p class="pro-desc">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                        diam nonumy
                                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                                    <div class="quantity-cart-box d-flex align-items-center">
                                        <h6 class="option-title">qty:</h6>
                                        <div class="quantity">
                                            <div class="pro-qty"><input type="text" value="1"></div>
                                        </div>
                                        <div class="action_link">
                                            <a class="btn btn-cart2" href="#">Add To Cart</a>
                                        </div>
                                    </div>
                                    <div class="useful-links">
                                        <a href="#" data-bs-toggle="tooltip" title="Compare"><i
                                                class="fa fa-refresh"></i>compare</a>
                                        <a href="#" data-bs-toggle="tooltip" title="Wishlist"><i
                                                class="fa fa-heart-o"></i>wishlist</a>
                                    </div>
                                    <div class="like-icon">
                                        <a class="facebook" href="#"><i class="fa fa-facebook"></i>like</a>
                                        <a class="twitter" href="#"><i class="fa fa-twitter"></i>tweet</a>
                                        <a class="pinterest" href="#"><i class="fa fa-pinterest"></i>save</a>
                                        <a class="google" href="#"><i class="fa fa-google-plus"></i>share</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- product details inner end -->
                </div>
            </div>
        </div>
    </div>
