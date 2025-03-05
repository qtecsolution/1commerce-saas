<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>One-Commerce</title>
    <!-- FAVICON-ICON -->
    <link rel="shortcut icon" href="{{ asset('1commerce-landing') }}/assets/images/favicon_io/icon.png"
        type="image/svg+xml" />
    <!-- BACK-TO-TOP-CSS -->
    <link rel="stylesheet" href="{{ asset('1commerce-landing') }}/assets/css/back-top/back-top.css" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- BOOTSTRAP-CSS -->
    <link rel="stylesheet" href="{{ asset('1commerce-landing') }}/assets/css/bootstrap/bootstrap.min.css" />
    <!-- CUSTOM-CSS -->
    <link rel="stylesheet" href="{{ asset('1commerce-landing') }}/assets/css/style.css" />
</head>

<body>
    <!-- PRELOADER-START -->
    <div class="preloader" id="preloader">
        <div class="loader">
            <div class="loader-7"></div>
        </div>
    </div>
    <!-- PRELOADER-END -->

    @include('layouts.partials.landing.header')

    @yield('page_content')

    @include('layouts.partials.landing.footer')
    <!-- PRELOADER-JS -->
    <script src="{{ asset('1commerce-landing') }}/assets/js/loader/loader.js"></script>
    <!-- BOOTSTRAP-JS -->
    <script src="{{ asset('1commerce-landing') }}/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- BACK-TO-TOP-JS -->
    <script src="{{ asset('1commerce-landing') }}/assets/js/back-top/back-top.js"></script>
    <script src="{{ asset('1commerce-landing') }}/assets/js/back-top/backtotop.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Main Js -->
    <script src="{{ asset('1commerce-landing') }}/assets/js/main.js"></script>
</body>

</html>
