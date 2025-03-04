<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {!! renderSeoTags($userTemplate->id) !!}

    {{-- fav icon --}}
    <link rel="shortcut icon"
        href="{{ $userTemplate->fav_icon ? asset('storage/' . $userTemplate->fav_icon) : asset($userTemplate->template->assets_path . '/images/favicon.png') }}"
        type="image/x-icon">
    <!-- Bootstrap css -->
    <link href="{{ asset($userTemplate->template->assets_path . '/css/bootstrap.min.css') }}" rel="stylesheet"
        media="screen">
    <!-- Font Awesome icon css-->
    <link href="{{ asset('assets/font-awesome/css/all.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset($userTemplate->template->assets_path . '/css/flaticon.css') }}" rel="stylesheet"
        media="screen">
    <!-- Swiper's CSS -->
    <link rel="stylesheet" href="{{ asset($userTemplate->template->assets_path . '/css/swiper.min.css') }}">
    <!-- Animated css -->
    <link href="{{ asset($userTemplate->template->assets_path . '/css/animate.css') }}" rel="stylesheet">
    <!-- Magnific Popup CSS -->
    <link href="{{ asset($userTemplate->template->assets_path . '/css/magnific-popup.css') }}" rel="stylesheet">
    <!-- Main custom css -->
    <link href="{{ asset($userTemplate->template->assets_path . '/css/custom.css') }}" rel="stylesheet" media="screen">

    <!-- inject:vite (css/js) -->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <!-- /inject:vite (css/js) -->

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

    <x-template-edit-bar :userTemplate="$userTemplate" />

    <main id="app">
        <ulaunch :user_template="{{ json_encode($userTemplate) }}" :template="{{ json_encode($template) }}" />
    </main>

    <!-- Jquery Library File -->
    <script src="{{ asset($userTemplate->template->assets_path . '/js/jquery-3.6.0.min.js') }}"></script>
    <!-- Bootstrap js file -->
    <script src="{{ asset($userTemplate->template->assets_path . '/js/bootstrap.min.js') }}"></script>
    <!-- Bootstrap form validator -->
    <script src="{{ asset($userTemplate->template->assets_path . '/js/validator.min.js') }}"></script>
    <!-- Counterup js file -->
    <script src="{{ asset($userTemplate->template->assets_path . '/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset($userTemplate->template->assets_path . '/js/jquery.counterup.min.js') }}"></script>
    <!-- Wow js file -->
    <script src="{{ asset($userTemplate->template->assets_path . '/js/wow.js') }}"></script>
    <!-- Swiper Carousel js file -->
    <script src="{{ asset($userTemplate->template->assets_path . '/js/swiper.min.js') }}"></script>
    <!-- Magnific Popup core JS file -->
    <script src="{{ asset($userTemplate->template->assets_path . '/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Parallaxie js file -->
    <script src="{{ asset($userTemplate->template->assets_path . '/js/parallaxie.js') }}"></script>
    <!-- SmoothScroll -->
    <script src="{{ asset($userTemplate->template->assets_path . '/js/SmoothScroll.js') }}"></script>
    <!-- Main Custom js file -->
    <script src="{{ asset($userTemplate->template->assets_path . '/js/function.js') }}"></script>
</body>

</html>
