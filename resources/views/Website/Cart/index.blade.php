@extends('Website.layout.app')

@section('title', 'Add to Cart page ')
@section('content')
    <div class="breadcrumb-area breadcrumb-img bg-img" data-bg="assets/img/banner/shop.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <h3 class="breadcrumb-title">CART</h3>
                            <ul class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('home.index') }}"><i
                                            class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="{{ route('shop.shop') }}">Shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Cart</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cart-main-wrapper section-padding">
        <div class="container">
            <div class="section-bg-color">
                <div class="row">
                    <div class="col-lg-12">


                        <div class="cart-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Thumbnail</th>
                                        <th class="pro-title">Product</th>
                                        <th class="pro-price">Price</th>
                                        <th class="pro-quantity">Quantity</th>
                                        <th class="pro-subtotal">Total</th>
                                        <th class="pro-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $totalPrice = 0;

                                    @endphp
                                    @foreach ($carts as $item)
                                        @php
                                            $totalPrice += $item->price * $item->quantity;
                                        @endphp
                                        <tr>
                                            <td class="pro-thumbnail"><a
                                                    href="{{ route('shop.shopdetail', $item->product->id) }}"><img
                                                        class="img-fluid"
                                                        src="{{ url('assets/img/product/' . $item->product->image) }}"
                                                        alt="Product" /></a></td>
                                            <td class="pro-title"><a href="#">{{ $item->product->name }}</a></td>
                                            <td class="pro-price"><span>${{ number_format($item->price, 2) }}</span></td>
                                            <td class="pro-quantity">
                                                <div class="input-group">
                                                    <button
                                                        type="button"style="width:27px!important;height:37px!important;"
                                                        class="btn btn-lg btn-outline-secondary quantity-left-minus">-</button>
                                                    <input type="text" name="quantity" data-cart-id="{{ $item->id }}"
                                                        class="form-control cart-quantitys text-center"
                                                        value="{{ $item->quantity ?? 1 }}">
                                                    <button type="button"
                                                        style="width:27px!important;height:37px!important;"
                                                        class="btn btn-lg btn-outline-secondary quantity-right-plus">+</button>
                                                </div>
                                            </td>

                                            <td class="pro-subtotal"><span class="money text-dark item-cart-total">
                                                    ${{ number_format($item->price * $item->quantity, 2) }}
                                                </span></td>

                                            <td class="pro-remove"><a href="#" class="delete-cart"
                                                    data-cart-id="{{ $item->id }}"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="cart-update-option d-block d-md-flex justify-content-between">
                            <div class="apply-coupon-wrapper">
                                <form action="#" method="post" class=" d-block d-md-flex">
                                    <input type="text" placeholder="Enter Your Coupon Code" required />
                                    <button class="btn btn-sqr">Apply Coupon</button>
                                </form>
                            </div>
                            {{-- <div class="cart-update">
                                <a href="#" class="btn btn-sqr">Update Cart</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 ms-auto">
                        <div class="cart-calculator-wrapper">
                            <div class="cart-calculate-items">
                                <h6>Cart Totals</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <td>Sub Total</td>
                                            <td class="totalprice">${{ number_format($totalPrice, 2) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Shipping</td>
                                            <td>$70</td>
                                        </tr>
                                        <tr class="total">
                                            <td>Total</td>
                                            <td class="totalprice">${{ number_format($totalPrice, 2) }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <a href="{{ route('checkout') }}" class="btn btn-sqr d-block">Proceed Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
