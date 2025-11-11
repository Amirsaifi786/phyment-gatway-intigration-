@extends('Website.layout.app')
@section('style')
    <style>
        .otp-container {
            width: 100%;
            max-width: 400px;
            margin: 0 auto;
            padding: 30px 15px;
        }

        .otp-form {
            /* display: none; */
            background-color: #ffffff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .otp-form h5 {
            text-align: center;
            margin-bottom: 20px;
        }

        .otp-input-group {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .otp-input {
            width: 45px;
            height: 50px;
            text-align: center;
            font-size: 18px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .otp-input:focus {
            border-color: #007bff;
            outline: none;

        }

        .veryfybtn {
            background-color: red;
        }

        @media (max-width: 480px) {
            .otp-container {
                padding: 20px 10px;
            }

            .otp-input-group {
                gap: 6px;
                flex-wrap: wrap;
            }

            .otp-input {
                width: 40px;
                height: 45px;
                font-size: 16px;
            }
        }
    </style>
@endsection
@section('content')
    <div class="breadcrumb-area breadcrumb-img bg-img" data-bg="assets/img/banner/shop.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <h3 class="breadcrumb-title">LOGIN </h3>
                            <ul class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="index-2.html"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Login </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="login-register-wrapper section-padding">
        <div class="container">
            <div class="member-area-from-wrap">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="login-reg-form-wrap">

                            <h4 class="text-center">Sign In with Mobile</h4>
                            <form id="mobile-form"action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="single-input-item">
                                    <input type="number" id="mobile" name="mobile"
                                        placeholder="Enter your Mobile number" required />
                                </div>
                                <div class="single-input-item text-center">
                                    <button type="submit" id="generate-otp-btn" class="btn btn-sqr">Generate OTP</button>
                                </div>
                            </form>

                            @if (session('success'))
                                <p style="color: green">{{ session('success') }}</p>
                            @endif
                            @if (session('error'))
                                <p style="color: red">{{ session('error') }}</p>
                            @endif
                              @if (session('success'))
                            <div id="otp-section" class="otp-form text-center mt-4 ">
                                <h5>
                                    Please enter the OTP sent to <span id="otp-mobiles">{{ session('otp_mobile') }}</span>
                                </h5>
                                <form id="otp-form" action="{{ route('verifyOtp') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="mobile" id="otp-mobile"value="{{ session('otp_mobile') }}">
                                    <div class="otp-input-group mb-4">
                                        <input type="text" class="otp-input" maxlength="1" required>
                                        <input type="text" class="otp-input" maxlength="1" required>
                                        <input type="text" class="otp-input" maxlength="1" required>
                                        <input type="text" class="otp-input" maxlength="1" required>
                                        <input type="text" class="otp-input" maxlength="1" required>
                                        <input type="text" class="otp-input" maxlength="1" required>
                                    </div>
                                    <input type="hidden" name="otp" id="otp-value">
                                    <div class="single-input-item text-center">
                                        <button type="submit" class="btn btn-sqr">veryfy otp</button>
                                    </div>
                                    {{-- <div class="mt-3">
                                        <a href="#" id="back-to-mobile">Back to Mobile</a>
                                    </div> --}}
                                </form>
                            </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const mobileForm = document.getElementById("mobile-form");
            const otpSection = document.getElementById("otp-section");
            const generateBtn = document.getElementById("generate-otp-btn");
            // const backToMobile = document.getElementById("back-to-mobile");
            const inputs = document.querySelectorAll(".otp-input");
            const otpValue = document.getElementById("otp-value");
            const otpMobile = document.getElementById("otp-mobile");

            // Show OTP form on Generate click
            generateBtn.addEventListener("click", function() {
                const mobile = mobileForm.querySelector("input[name='mobile']").value;
                if (mobile.length !== 10) {
                    alert("Please enter a valid 10-digit mobile number");
                    return;
                }
                mobileForm.style.display = "none";
                otpSection.style.display = "block";
                otpMobile.value = mobile; // Pass mobile to hidden input
                document.getElementById("otp-mobiles").textContent = mobile;
            });

            // Back to mobile form
            // backToMobile.addEventListener("click", function(e) {
            //     e.preventDefault();
            //     otpSection.style.display = "none";
            //     mobileForm.style.display = "block";
            // });

            // OTP auto move
            inputs.forEach((input, index) => {
                input.addEventListener("keyup", function(e) {
                    if (e.key >= "0" && e.key <= "9") {
                        if (index < inputs.length - 1) inputs[index + 1].focus();
                    } else if (e.key === "Backspace" && index > 0) {
                        inputs[index - 1].focus();
                    }
                    otpValue.value = Array.from(inputs).map(i => i.value).join("");
                });
            });
        });
    </script>
@endsection
