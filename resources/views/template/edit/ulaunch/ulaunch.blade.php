<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page Title -->
    <title>{{ $userTemplate['company_name'] }} :: Live Edit</title>
    <!-- Bootstrap css -->
    <link href="{{ asset($template['assets'] . '/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <!-- Font Awesome icon css-->
    <link href="{{ asset('assets/font-awesome/css/all.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset($template['assets'] . '/css/flaticon.css') }}" rel="stylesheet" media="screen">
    <!-- Swiper's CSS -->
    <link rel="stylesheet" href="{{ asset($template['assets'] . '/css/swiper.min.css') }}">
    <!-- Animated css -->
    <link href="{{ asset($template['assets'] . '/css/animate.css') }}" rel="stylesheet">
    <!-- Magnific Popup CSS -->
    <link href="{{ asset($template['assets'] . '/css/magnific-popup.css') }}" rel="stylesheet">
    <!-- Main custom css -->
    <link href="{{ asset($template['assets'] . '/css/custom.css') }}" rel="stylesheet" media="screen">

    <!-- inject:vite (css/js) -->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <!-- /inject:vite (css/js) -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- custom css -->
    <style>
        .cursor-pointer {
            cursor: pointer !important;
        }
    </style>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar-scrollspy" data-bs-offset="0">
    <!-- Preloader starts -->
    <div class="preloader" style="display: none;">
        <span class="loader">
            <span class="loader-inner"></span>
        </span>
    </div>
    <!-- Preloader Ends -->

    <main id="app">
        <ulaunch :user_template="{{ json_encode($userTemplate) }}" :template="{{ json_encode($template) }}" />
    </main>

    <!-- Jquery Library File -->
    <script src="{{ asset($template['assets'] . '/js/jquery-3.6.0.min.js') }}"></script>
    <!-- Bootstrap js file -->
    <script src="{{ asset($template['assets'] . '/js/bootstrap.min.js') }}"></script>
    <!-- Bootstrap form validator -->
    <script src="{{ asset($template['assets'] . '/js/validator.min.js') }}"></script>
    <!-- Counterup js file -->
    <script src="{{ asset($template['assets'] . '/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset($template['assets'] . '/js/jquery.counterup.min.js') }}"></script>
    <!-- Wow js file -->
    <script src="{{ asset($template['assets'] . '/js/wow.js') }}"></script>
    <!-- Swiper Carousel js file -->
    <script src="{{ asset($template['assets'] . '/js/swiper.min.js') }}"></script>
    <!-- Magnific Popup core JS file -->
    <script src="{{ asset($template['assets'] . '/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Parallaxie js file -->
    <script src="{{ asset($template['assets'] . '/js/parallaxie.js') }}"></script>
    <!-- SmoothScroll -->
    <script src="{{ asset($template['assets'] . '/js/SmoothScroll.js') }}"></script>
    <!-- Main Custom js file -->
    <script src="{{ asset($template['assets'] . '/js/function.js') }}"></script>
</body>

</html>
