  @extends('Website.layout.app')
@section('style')
@endsection
@section('content')
  <div class="breadcrumb-area breadcrumb-img bg-img" data-bg="{{url('assets/img/banner/shop.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <h3 class="breadcrumb-title">SHOP Detail</h3>
                            <ul class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{route('home.index')}}"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">SHOP Detail</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shop-main-wrapper section-padding pb-0">
        <div class="container">
            <div class="row">
                @if (session('success'))
                    <div class="alert alert-success" id="flash-message">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger" id="flash-message">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="col-lg-12 order-1 order-lg-2">
                    <div class="product-details-inner">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product-large-slider">

                                    <div class="pro-large-img img-zoom">
                                        <img src="{{ url('assets/img/product/' . $pro->image) }}"
                                            alt="{{ $pro->image }}" />
                                    </div>
                                    {{-- <div class="pro-large-img img-zoom">
                                <img src="{{url('assets/img/product/product-details-img2.jpg')}}" alt="product-details" />
                            </div>
                            <div class="pro-large-img img-zoom">
                                <img src="{{url('assets/img/product/product-details-img3.jpg')}}" alt="product-details" />
                            </div>
                            <div class="pro-large-img img-zoom">
                                <img src="{{url('assets/img/product/product-details-img4.jpg')}}" alt="product-details" />
                            </div> --}}
                                </div>
                                <div class="pro-nav slick-row-10 slick-arrow-style">
                                    <div class="pro-nav-thumb">
                                        <img src="{{ url('assets/img/product/product-details-img1.jpg') }}"
                                            alt="product-details" />
                                    </div>
                                    <div class="pro-nav-thumb">
                                        <img src="{{ url('assets/img/product/product-details-img2.jpg') }}"
                                            alt="product-details" />
                                    </div>
                                    <div class="pro-nav-thumb">
                                        <img src="{{ url('assets/img/product/product-details-img3.jpg') }}"
                                            alt="product-details" />
                                    </div>
                                    <div class="pro-nav-thumb">
                                        <img src="{{ url('assets/img/product/product-details-img4.jpg') }}"
                                            alt="product-details" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <form action="{{ route('shop.cartStore') }}" method="POST">
                                    @csrf
                                    <div class="product-details-des">
                                        <h3 class="product-name">{{ $pro->name }}</h3>
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
                                            <span class="price-old"><del>${{ $pro->mrp }}</del></span>
                                            <span class="price-regular">${{ $pro->sellprice }}</span>
                                        </div>
                                        <h5 class="offer-text"><strong>Hurry up</strong>! offer ends in:</h5>
                                        <div class="product-countdown" data-countdown="2021/08/30"></div>
                                        <div class="availability">
                                            <i class="fa fa-check-circle"></i>
                                            <span>200 in stock</span>
                                        </div>
                                        <p class="pro-desc">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                            diam nonumy
                                            eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                            voluptua. Phasellus id nisi quis justo tempus mollis sed et dui. In hac
                                            habitasse platea dictumst.</p>
                                        <div class="quantity-cart-box d-flex align-items-center">
                                            <h6 class="option-title">qty:</h6>
                                            <div class="quantity">
                                                <div class="pro-qty d-flex"><input type="text" name="quantity"
                                                        value="1"></div>
                                            </div>

                                            <div class="action_link">
                                                <input type="hidden" name="product_id" value="{{ $pro->id }}">
                                                <input type="hidden"
                                                    name="user_id"value="@auth{{ Auth::user()->id }} @endauth">
                                                <input type="hidden" name="price"value="{{ $pro->sellprice }}">
                                                <input type="hidden" name="mrp"value="{{ $pro->mrp }}">
                                                {{-- <input type="hidden" name="size"value="{{$pro->size}}" > --}}
                                                <button type="submit" name="add-to-cart" class="btn btn-cart2">Add to
                                                    cart</button>
                                                {{-- <a class="btn btn-cart2"  type="submit" name="submit">Add To Cart</a> --}}
                                            </div>
                                        </div>
                                        <div class="pro-size">
                                            <h6 class="option-title">size :</h6>
                                            <select class="nice-select" name="size">
                                                <option value="S">S</option>
                                                <option value="M">M</option>
                                                <option value="L">L</option>
                                                <option value="XL">XL</option>
                                            </select>
                                        </div>
                                        <div class="color-option">
                                            <h6 class="option-title">color :</h6>
                                            <ul class="color-categories">
                                                <li>
                                                    <a class="c-lightblue" href="#" title="LightSteelblue"></a>
                                                </li>
                                                <li>
                                                    <a class="c-darktan" href="#" title="Darktan"></a>
                                                </li>
                                                <li>
                                                    <a class="c-grey" href="#" title="Grey"></a>
                                                </li>
                                                <li>
                                                    <a class="c-brown" href="#" title="Brown"></a>
                                                </li>
                                            </ul>
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
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="product-details-reviews section-padding pb-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="product-review-info">
                                    <ul class="nav review-tab">
                                        <li>
                                            <a class="active" data-bs-toggle="tab" href="#tab_one">description</a>
                                        </li>
                                        <li>
                                            <a data-bs-toggle="tab" href="#tab_two">information</a>
                                        </li>
                                        <li>
                                            <a data-bs-toggle="tab" href="#tab_three">reviews (1)</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content reviews-tab">
                                        <div class="tab-pane fade show active" id="tab_one">
                                            <div class="tab-one">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                                                    fringilla augue nec est tristique auctor. Ipsum metus feugiat
                                                    sem, quis fermentum turpis eros eget velit. Donec ac tempus
                                                    ante. Fusce ultricies massa massa. Fusce aliquam, purus eget
                                                    sagittis vulputate, sapien libero hendrerit est, sed commodo
                                                    augue nisi non neque.Cras neque metus, consequat et blandit et,
                                                    luctus a nunc. Etiam gravida vehicula tellus, in imperdiet
                                                    ligula euismod eget. Pellentesque habitant morbi tristique
                                                    senectus et netus et malesuada fames ac turpis egestas. Nam
                                                    erat mi, rutrum at sollicitudin rhoncus
                                                </p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab_two">
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td>color</td>
                                                        <td>black, blue, red</td>
                                                    </tr>
                                                    <tr>
                                                        <td>size</td>
                                                        <td>L, M, S</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane fade" id="tab_three">
                                            <form action="#" class="review-form">
                                                <h5>1 review for <span>Chaz Kangeroo</span></h5>
                                                <div class="total-reviews">
                                                    <div class="rev-avatar">
                                                        <img src="assets/img/about/avatar.jpg')}}" alt="">
                                                    </div>
                                                    <div class="review-box">
                                                        <div class="ratings">
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span class="good"><i class="fa fa-star"></i></span>
                                                            <span><i class="fa fa-star"></i></span>
                                                        </div>
                                                        <div class="post-author">
                                                            <p><span>admin -</span> 30 Mar, 2021</p>
                                                        </div>
                                                        <p>Aliquam fringilla euismod risus ac bibendum. Sed sit
                                                            amet sem varius ante feugiat lacinia. Nunc ipsum nulla,
                                                            vulputate ut venenatis vitae, malesuada ut mi. Quisque
                                                            iaculis, dui congue placerat pretium, augue erat
                                                            accumsan lacus</p>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col">
                                                        <label class="col-form-label"><span class="text-danger">*</span>
                                                            Your Name</label>
                                                        <input type="text" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col">
                                                        <label class="col-form-label"><span class="text-danger">*</span>
                                                            Your Email</label>
                                                        <input type="email" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col">
                                                        <label class="col-form-label"><span class="text-danger">*</span>
                                                            Your Review</label>
                                                        <textarea class="form-control" required></textarea>
                                                        <div class="help-block pt-10"><span
                                                                class="text-danger">Note:</span>
                                                            HTML is not translated!
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col">
                                                        <label class="col-form-label"><span class="text-danger">*</span>
                                                            Rating</label>
                                                        &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                                        <input type="radio" value="1" name="rating">
                                                        &nbsp;
                                                        <input type="radio" value="2" name="rating">
                                                        &nbsp;
                                                        <input type="radio" value="3" name="rating">
                                                        &nbsp;
                                                        <input type="radio" value="4" name="rating">
                                                        &nbsp;
                                                        <input type="radio" value="5" name="rating" checked>
                                                        &nbsp;Good
                                                    </div>
                                                </div>
                                                <div class="buttons">
                                                    <button class="btn btn-sqr" type="submit">Continue</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <section class="product-gallery section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3 class="title">RELATED PRODUCT</h3>
                        <h4 class="sub-title">Investigationes demonstraverunt lectores legere me lius quod ii legunt
                            saepius claritas est etiam processus dynamicus, qui sequitur mutationem.</h4>
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
                                        <a href="javascript:void(0);" class="quick-view-btn"
                                            data-id="{{ $item->id }}" data-name="{{ $item->name }}"
                                            data-price="{{ $item->sellprice }}" data-oldprice="{{ $item->mrp }}"
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
                                        {{-- <a class="add-to-cart" href="cart.html"><i class="fa fa-shopping-cart"></i></a> --}}
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
                        {{-- <div class="product-item">
                    <div class="product-thumb">
                        <a href="{{route('shop.shopdetail',$item->id)}}">
                            <img src="{{url('assets/img/product/product-2.jpg')}}" alt="product thumb">
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
                                <a href="{{route('shop.shopdetail',$item->id)}}">Womens High Hills</a>
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
                            <img src="{{url('assets/img/product/product-3.jpg')}}" alt="product thumb">
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
                            <img src="{{url('assets/img/product/product-4.jpg')}}" alt="product thumb">
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
                            <img src="{{url('assets/img/product/product-5.jpg')}}" alt="product thumb">
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
                </div> --}}

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        // Hide flash messages after 2 seconds
        setTimeout(function() {
            let message = document.getElementById('flash-message');
            if (message) {
                message.style.transition = "opacity 0.5s ease";
                message.style.opacity = "0";
                setTimeout(() => message.remove(), 500); // remove after fade out
            }
        }, 2000);
    </script>
@endsection
