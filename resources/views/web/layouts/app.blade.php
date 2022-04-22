<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="assets/libs/owl-carousel/owl.carousel.min.css">
    <script src="assets/libs/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/js/time.js"></script> 
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/general.min.css">
    <script src="assets/js/owl_carousel.js"></script> 
    <title>Trang chủ</title>
</head>

<body>
    <div class="site">
       <!-- cOMMENT CÁI THỬ  -->
       @include('web.layouts.header')
        <main class="site_main">
                @yield('content')
        </main>
        @include('web.layouts.footer')
    </div>
</body>