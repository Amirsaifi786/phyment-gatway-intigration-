@extends('Website.layout.app')
@section('title', 'Checkout page')
@section('content')
    <div class="breadcrumb-area breadcrumb-img bg-img" data-bg="assets/img/banner/shop.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <h3 class="breadcrumb-title">Checkout</h3>
                            <ul class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="{{ route('home.index') }}"><i
                                            class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="{{ route('shop.shop') }}">Shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="checkout-page-wrapper section-padding">
        <div class="container">
            {{-- <div class="row">
              <div class="col-12">
                  
                  <div class="checkoutaccordion" id="checkOutAccordion">
                      <div class="card">
                          <h6>Returning Customer? <span data-bs-toggle="collapse" data-bs-target="#logInaccordion">Click
                                      Here To Login</span></h6>
                          <div id="logInaccordion" class="collapse" data-bs-parent="#checkOutAccordion">
                              <div class="card-body">
                                  <p>If you have shopped with us before, please enter your details in the boxes
                                      below. If you are a new customer, please proceed to the Billing &amp;
                                      Shipping section.</p>
                                  <div class="login-reg-form-wrap mt-20">
                                      <div class="row">
                                          <div class="col-lg-7 m-auto">
                                              <form action="#" method="post">
                                                  <div class="row">
                                                      <div class="col-md-12">
                                                          <div class="single-input-item">
                                                              <input type="email" placeholder="Enter your Email" required />
                                                          </div>
                                                      </div>

                                                      <div class="col-md-12">
                                                          <div class="single-input-item">
                                                              <input type="password" placeholder="Enter your Password" required />
                                                          </div>
                                                      </div>
                                                  </div>

                                                  <div class="single-input-item">
                                                      <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                                          <div class="remember-meta">
                                                              <div class="custom-control custom-checkbox">
                                                                  <input type="checkbox" class="custom-control-input" id="rememberMe" required />
                                                                  <label class="custom-control-label" for="rememberMe">Remember
                                                                      Me</label>
                                                              </div>
                                                          </div>

                                                          <a href="#" class="forget-pwd">Forget Password?</a>
                                                      </div>
                                                  </div>

                                                  <div class="single-input-item">
                                                      <button class="btn btn-sqr">Login</button>
                                                  </div>
                                              </form>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="card">
                          <h6>Have A Coupon? <span data-bs-toggle="collapse" data-bs-target="#couponaccordion">Click
                                      Here To Enter Your Code</span></h6>
                          <div id="couponaccordion" class="collapse" data-bs-parent="#checkOutAccordion">
                              <div class="card-body">
                                  <div class="cart-update-option">
                                      <div class="apply-coupon-wrapper">
                                          <form action="#" method="post" class=" d-block d-md-flex">
                                              <input type="text" placeholder="Enter Your Coupon Code" required />
                                              <button class="btn btn-sqr">Apply Coupon</button>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>                  
              </div>
          </div> --}}
            <div class="row">

                <div class="col-lg-6">
                    <div class="checkout-billing-details-wrap">
                        <h5 class="checkout-title">Billing Details</h5>
                        <div class="billing-form-wrap">
                            {{-- <form action="#" id="paymentForm" method="POST"> --}}
                            <form action="{{ route('phonepe.pay') }}" id="paymentForm" method="POST">
                                @csrf
                                <input type="hidden" name="amount" id="amount" placeholder="Enter Amount"
                                    value="{{ $subtotal }}" >

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single-input-item">
                                            <label for="f_name" class="required"> Name</label>
                                            <input type="text" name="name"  value="{{ $user->name ?? '' }}" value="" id="f_name" placeholder="First Name"
                                                required />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="single-input-item">
                                            <label for="email" class="required">Email Address</label>
                                            <input type="email" value="{{ $user->email ?? '' }}" name="email" id="email" placeholder="Email Address"
                                                required />
                                        </div>
                                    </div>
                                </div>



                                <div class="single-input-item">
                                    <label for="country" class="required">Country</label>
                                    <select name="country" id="country">
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option selected value="India">India</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="England">England</option>
                                        <option value="London">London</option>
                                        <option value="London">London</option>
                                        <option value="Chaina">China</option>
                                    </select>
                                </div>

                                <div class="single-input-item">
                                    <label for="street-address" class="required mt-20">Street address</label>
                                    <input type="text" name="address1" id="address1"  value="{{ $user->address ?? '' }}"  placeholder="Street address Line 1"
                                        required />
                                </div>

                                <div class="single-input-item">
                                    <label for="street-address" class="required mt-20">Street address1</label>
                                    <input type="text" name="address2"  value="{{ $user->address2 ?? '' }}"  id="address2"  placeholder="Street address Line 2 (Optional)" />
                                </div>

                                <div class="single-input-item">
                                    <label for="town" class="required">Town / City</label>
                                    <input type="text" id="city" name="city" value="{{ $user->city ?? '' }}"  placeholder="Town / City"
                                        required />
                                </div>

                                <div class="single-input-item">
                                    <label for="state">State / Divition</label>
                                    <input type="text" name="state" id="state"value="{{ $user->state ?? '' }}" placeholder="State / Divition" />
                                </div>

                                <div class="single-input-item">
                                    <label for="postcode" class="required">Postcode / ZIP</label>
                                    <input type="text" name="zip" id="zip" value="{{ $user->pincode ?? '' }}"  placeholder="Postcode / ZIP"
                                        required />
                                </div>

                                <div class="single-input-item">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" id="phone" value="{{ $user->phone ?? '' }}"
                                        placeholder="Phone" />
                                </div>

                                <div class="single-input-item">
                                    <label for="ordernote">Order Note</label>
                                    <textarea name="ordernote" id="ordernote" cols="30" rows="3"
                                        placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="order-summary-details">
                        <h5 class="checkout-title">Your Order Summary</h5>
                        <div class="order-summary-content">

                            <div class="order-summary-table table-responsive text-center">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th><b>Products</b></th>
                                            <th><b>Total</b></th>
                                        </tr>
                                    </thead>

                                    <tfoot>
                                        <tr>
                                            <td>Sub Total</td>
                                            <td>${{ number_format($subtotal, 2) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Shipping</td>
                                            <td class="d-flex justify-content-center">
                                                <ul class="shipping-type">
                                                    <li>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="flatrate" name="shipping"
                                                                class="custom-control-input" checked />
                                                            <label class="custom-control-label" for="flatrate">Flat
                                                                Rate: $70.00</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="freeshipping" name="shipping"
                                                                class="custom-control-input" />
                                                            <label class="custom-control-label" for="freeshipping">Free
                                                                Shipping</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Total Amount</td>
                                            <td>${{ number_format($subtotal, 2) }}</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <div class="order-payment-method">
                                <div class="single-payment-method show">
                                    <div class="payment-method-name">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="cashon" name="paymentmethod" value="cash"
                                                class="custom-control-input" checked />
                                            <label class="custom-control-label" for="cashon">Cash On Delivery</label>
                                        </div>
                                    </div>
                                    <div class="payment-method-details" data-method="cash">
                                        <p>Pay with cash upon delivery.</p>
                                    </div>
                                </div>
                                <div class="single-payment-method">
                                    <div class="payment-method-name">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="directbank" name="paymentmethod" value="bank"
                                                class="custom-control-input" />
                                            <label class="custom-control-label" for="directbank">Direct Bank
                                                Transfer</label>
                                        </div>
                                    </div>
                                    <div class="payment-method-details" data-method="bank">
                                        <p>Make your payment directly into our bank account. Please use your Order
                                            ID as the payment reference. Your order will not be shipped until the
                                            funds have cleared in our account..</p>
                                    </div>
                                </div>
                                <div class="single-payment-method">
                                    <div class="payment-method-name">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="checkpayment" name="paymentmethod" value="check"
                                                class="custom-control-input" />
                                            <label class="custom-control-label" for="checkpayment">Pay with
                                                Check</label>
                                        </div>
                                    </div>
                                    <div class="payment-method-details" data-method="check">
                                        <p>Please send a check to Store Name, Store Street, Store Town, Store State
                                            / County, Store Postcode.</p>
                                    </div>
                                </div>
                                <div class="single-payment-method">
                                    <div class="payment-method-name">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="paypalpayment" name="paymentmethod" value="paypal"
                                                class="custom-control-input" />
                                            <label class="custom-control-label" for="paypalpayment">Paypal <img
                                                    src="assets/img/paypal-card.jpg" class="img-fluid paypal-card"
                                                    alt="Paypal" /></label>
                                        </div>
                                    </div>
                                    <div class="payment-method-details" data-method="paypal">
                                        <p>Pay via PayPal; you can pay with your credit card if you don’t have a
                                            PayPal account.</p>
                                    </div>
                                </div>
                                <div class="summary-footer-area">
                                    <div class="custom-control custom-checkbox mb-20">
                                        <input type="checkbox" class="custom-control-input" id="terms" required />
                                        <label class="custom-control-label" for="terms">I have read and agree to
                                            the website <a href="index-2.html">terms and conditions.</a></label>
                                    </div>
                                    <button type="button" class="btn btn-sqr"
                                        onclick="document.getElementById('paymentForm').submit();">
                                        Place Order
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
