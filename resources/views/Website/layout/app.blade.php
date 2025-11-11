<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pullman - eCommerce Bootstrap 5 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    @include('Website.layout.style')
    @yield('style')
</head>

<body>
    {{-- <div class="preloader">
        <img class="preloader__image" src="assets/images/loader.png" alt="">
    </div> --}}
    <div class="page-wrapper">
        @include('Website.layout.header')
        @include('Website.layout.topheader')
        @yield('content')
        @include('Website.layout.footer')
        {{-- @include('Website.layout.footerbottom') --}}
    </div>
    @include('Website.layout.scripts')
    @yield('script')
    <script>
        $(document).on('click', '.delete-cart', function(e) {
            e.preventDefault();
            let cartId = $(this).data('cart-id');

            $.ajax({
                url: "{{ route('cart.delete', ':id') }}".replace(':id', cartId),
                type: 'DELETE',
                data: {
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    if (response.success) {
                        // remove row dynamically
                        $('a.delete-cart[data-cart-id="' + cartId + '"]').closest('tr').remove();

                        // 🔥 update subtotal on page
                        $('.totalprice').text('$' + response.subtotal);

                        // show message
                        $('#cart-message').text(response.message).fadeIn().delay(2000).fadeOut();
                    }
                }
            });
        });


        $('#zip').on('keyup', function() {
            let pincode = $(this).val();

            if (pincode.length === 6) { // check length to avoid early requests
                $.ajax({
                    url: "{{ url('/get-location') }}/" + pincode,
                    method: "GET",
                    success: function(response) {
                        if (response.success) {
                            $('#city').val(response.city);
                            $('#state').val(response.state);
                            $('.cityerror').style.display = 'none';
                            $('.stateerror').style.display = 'none';
                            // $('.zipcodeerror').style.display="none";
                        } else {
                            $('#city').val('');
                            $('#state').val('');
                            $('.cityerror').text('City not found related pincode');
                            $('.stateerror').text('State not found related pincode');
                        }
                    }
                });
            } else {
                $('.zipcodeerror').text('zipcode should be 6 charactor');
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            // Plus button
            $('.quantity-right-plus').click(function() {
                let input = $(this).closest('.input-group').find('.cart-quantitys');
                let quantity = parseInt(input.val()) || 0;
                input.val(quantity + 1);
                updateCart(input);
            });

            // Minus button
            $('.quantity-left-minus').click(function() {
                let input = $(this).closest('.input-group').find('.cart-quantitys');
                let quantity = parseInt(input.val()) || 1;
                if (quantity > 1) {
                    input.val(quantity - 1);
                    updateCart(input);
                }
            });

            // Manual change
            $('.cart-quantitys').on('change', function() {
                updateCart($(this));
            });

            // AJAX update function
            function updateCart(input) {
                let cartId = input.data('cart-id');
                let quantity = parseInt(input.val());
                let row = input.closest('tr');

                $.ajax({
                    url: "{{ route('cartUpdate') }}",
                    method: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        cart_id: cartId,
                        quantity: quantity
                    },
                    success: function(response) {
                        if (response.success) {
                            row.find('.item-cart-total').text('$' + response.item_total);
                            $('.totalprice').text('$' + response.subtotal);
                            $('#cart-message').text(response.message).fadeIn().delay(2000).fadeOut();
                        }
                    }
                });
            }
        });
    </script>

</body>

</html>
