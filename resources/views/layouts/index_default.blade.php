
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doob || Doob Business and Consulting Bootstrap5 Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- CSS ============================================ -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/animation.css">
    <link rel="stylesheet" href="assets/css/plugins/feature.css">
    <link rel="stylesheet" href="assets/css/plugins/magnify.min.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/slick-theme.css">
    <link rel="stylesheet" href="assets/css/plugins/lightbox.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="active-dark-mode">
    <!-- Start Main Wrapper  -->

    <main class="page-wrapper">
        <!-- Start Header Top Area  -->
        {{-- @include('components.headerTop') --}}
        <!-- End Header Top Area  -->  

        <!-- Start Header Area  -->
        @include('components.header')
        <!-- End Header Area  -->
        @yield('content')
     
        <!-- Start Footer Area  -->
        @include('components.index_footer')
        <!-- End Footer Area  -->

    </main>
    <!-- Start Main Wrapper  -->

    <!-- All Scripts  -->
    <!-- Start Top To Bottom Area  -->
    <div class="rn-back-top">
        <i class="feather-arrow-up"></i>
    </div>
    <!-- End Top To Bottom Area  -->
    <!-- JS
============================================ -->
    <script src="assets/js/vendor/modernizr.min.js"></script>
    <script src="assets/js/vendor/jquery.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/waypoint.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/counterup.min.js"></script>
    <script src="assets/js/vendor/feather.min.js"></script>
    <script src="assets/js/vendor/sal.min.js"></script>
    <script src="assets/js/vendor/masonry.js"></script>
    <script src="assets/js/vendor/imageloaded.js"></script>
    <script src="assets/js/vendor/magnify.min.js"></script>
    <script src="assets/js/vendor/lightbox.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/easypie.js"></script>
    <script src="assets/js/vendor/text-type.js"></script>
    <script src="assets/js/vendor/jquery.style.swicher.js"></script>
    <script src="assets/js/vendor/js.cookie.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
</body>

</html>