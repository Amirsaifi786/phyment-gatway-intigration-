<!DOCTYPE html>
<html>
<head>
    <title>404 Not Found</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="">
  <meta name="keywords" content="">
  <meta name="description" content="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Fixed paths -->
    {{-- <link rel="stylesheet" href="assets/css/vendor.css"> --}}
  <link rel="stylesheet" href="assets/css/style.css">
     {{--<link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&amp;family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap"
    rel="stylesheet"> --}}
</head>
<body>
<div class="error-page bg-light content-light d-flex align-items-center" style="height: 100vh;">
    <div class="container">
      <div class="page-content text-center">
        <h1>Error 404</h1>
        <p>Sorry, the page that you’re looking for doesn’t exist.</p>
        <a href="{{url('/')}}" class="btn btn-primary btn-lg text-uppercase mt-3">Go back to home</a>
      </div>
    </div>
  </div>
</body>
</html>
