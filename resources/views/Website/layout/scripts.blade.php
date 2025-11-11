    <script src="{{url('assets/js/vendor/modernizr-3.6.0.min.js')}}"></script>    
    <script src="{{url('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>    
    <script src="{{url('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>    
    <script src="{{url('assets/js/plugins/slick.min.js')}}"></script>    
    <script src="{{url('assets/js/plugins/countdown.min.js')}}"></script>    
    <script src="{{url('assets/js/plugins/nice-select.min.js')}}"></script>    
    <script src="{{url('assets/js/plugins/jqueryui.min.js')}}"></script>    
    <script src="{{url('assets/js/plugins/image-zoom.min.js')}}"></script>    
    <script src="{{url('assets/js/plugins/imagesloaded.pkgd.min.js')}}"></script>    
    <script src="{{url('assets/js/plugins/masonry.pkgd.min.js')}}"></script>    
    <script src="{{url('assets/js/plugins/ajaxchimp.js')}}"></script>    
    <script src="{{url('assets/js/plugins/ajax-mail.js')}}"></script>    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfmCVTjRI007pC1Yk2o2d_EhgkjTsFVN8"></script>    
    <script src="{{url('assets/js/plugins/google-map.js')}}"></script>    
    <script src="{{url('assets/js/main.js')}}"></script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".quick-view-btn").forEach(function (button) {
        button.addEventListener("click", function () {
            let name = this.getAttribute("data-name");
            let price = this.getAttribute("data-price");
            let oldPrice = this.getAttribute("data-oldprice");
            // let desc = this.getAttribute("data-desc");
            let image = this.getAttribute("data-image");
            document.querySelector("#quick_view .product-name").innerText = name;
            document.querySelector("#quick_view .price-regular").innerText = "$" + price;
            document.querySelector("#quick_view .price-old del").innerText = "$" + oldPrice;
            // document.querySelector("#quick_view .pro-desc").innerText = desc;
            document.querySelector("#quick_view .pro-large-img img").src = image;
        });
    });
});
</script>
    