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
                            <form class="mobile-form" id="mobile-form" method="post">
                                @csrf
                                <div class="single-input-item">
                                    <input type="number" id="mobile" name="mobile"
                                        placeholder="Enter your Mobile number" required />
                                </div>
                                <div class="single-input-item text-center">
                                    <button type="submit" id="generate-otp-btn" class="btn btn-sqr">Generate OTP</button>
                                </div>
                            </form>
                            <div id="otp-section" class="otp-form text-center mt-4 ">
                                <h5>
                                    Please enter the OTP sent to <span id="otp-mobiles"></span>
                                </h5>
                                <form id="otp-form" method="post">
                                    @csrf
                                    <input type="hidden" name="mobile" id="otp-mobile">
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
                                </form>
                            </div>

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
            const inputs = document.querySelectorAll(".otp-input");
            const otpValue = document.getElementById("otp-value");
            const otpMobile = document.getElementById("otp-mobile");
            const otpForm = document.getElementById("otp-form");

            otpSection.style.display = "none";

            // Mobile Form
            mobileForm.addEventListener("submit", function(e) {
                e.preventDefault();
                const mobile = mobileForm.querySelector("input[name='mobile']").value;

                fetch(mobileForm.action, {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
                        },
                        body: JSON.stringify({
                            mobile: mobile
                        })
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.success) {
                            mobileForm.style.display = "none";
                            otpSection.style.display = "block";
                            otpMobile.value = mobile;
                            document.getElementById("otp-mobiles").textContent = mobile;
                            alert("OTP sent successfully!");
                        } else {
                            alert(data.error);
                        }
                    })
                    .catch(err => {
                        console.error(err);
                        alert("Something went wrong while sending OTP");
                    });
            });

            // OTP input auto-focus
            inputs.forEach((input, index) => {
                input.addEventListener("keyup", function(e) {
                    if (/^[0-9]$/.test(e.key)) {
                        if (index < inputs.length - 1) inputs[index + 1].focus();
                    } else if (e.key === "Backspace" && index > 0) {
                        inputs[index - 1].focus();
                    }
                    otpValue.value = Array.from(inputs).map(i => i.value).join("");
                });
            });

            // OTP Form
            otpForm.addEventListener("submit", function(e) {
                e.preventDefault();
                const mobile = otpMobile.value;
                const otp = otpValue.value;

                fetch("{{ route('verifyOtp') }}", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
                        },
                        body: JSON.stringify({
                            mobile: mobile,
                            otp: otp
                        })
                    })
                    .then(res => res.json())
                    .then(data => {
                        if (data.success) {
                            alert("Logged in successfully!");
                            window.location.href = "{{ route('home.index') }}";
                        } else {
                            alert(data.error);
                        }
                    })
                    .catch(err => {
                        console.error(err);
                        alert("Something went wrong during OTP verification");
                    });
            });
        });
    </script>
@endsection
