@php
    $hero_area = $ulaunch->hero_area != null ? json_decode($ulaunch->hero_area, true) : null;
    $feature_area = $ulaunch->features_area ? json_decode($ulaunch->features_area, true) : null;
    $features =
        $feature_area != null
            ? array_chunk($ulaunch->features->toArray(), ceil(count($ulaunch->features->toArray()) / 2))
            : null;
    $about_area = $ulaunch->about_area != null ? json_decode($ulaunch->about_area, true) : null;
    $testimonials_area = $ulaunch->testimonials_area != null ? json_decode($ulaunch->testimonials_area, true) : null;
    $info_area = $ulaunch->info_area != null ? json_decode($ulaunch->info_area, true) : null;
    $order_area = $ulaunch->order_area != null ? json_decode($ulaunch->order_area, true) : null;
    $footer_area = $ulaunch->footer_area != null ? json_decode($ulaunch->footer_area, true) : null;

    $areas = [
        $hero_area,
        $feature_area,
        $features,
        $about_area,
        $testimonials_area,
        $info_area,
        $order_area,
        $footer_area,
    ];
    foreach ($areas as $area) {
        if ($area === null || empty($area)) {
            abort(500);
        }
    }
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page Title -->
    <title>{{ $userTemplate->company_name }}</title>
    {{-- fav icon --}}
    <link rel="shortcut icon"
        href="{{ $userTemplate->company_logo ? asset('storage/' . $userTemplate->company_logo) : asset($userTemplate->template->assets_path . '/images/logo.png') }}"
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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- button styles -->
    @php
        $abouts = $about_area['items'];
        $hero_area_button = $hero_area['button'];
    @endphp
    <style>
        .btn-buynow {
            background-color: {{ $hero_area_button['color'] }};
            color: {{ $hero_area_button['text_color'] }};
            border-color: {{ $hero_area_button['border_color'] }};
        }

        .btn-buynow:hover {
            background-color: {{ $hero_area_button['hover_color'] }} !important;
            color: {{ $hero_area_button['hover_text_color'] }};
            border-color: {{ $hero_area_button['hover_border_color'] }};
        }

        .about-1 .btn-buynow {
            background-color: {{ $abouts[0]['button']['color'] }};
            color: {{ $abouts[0]['button']['text_color'] }};
            border-color: {{ $abouts[0]['button']['border_color'] }};
        }

        .about-1 .btn-buynow:hover {
            background-color: {{ $abouts[0]['button']['hover_color'] }} !important;
            color: {{ $abouts[0]['button']['hover_text_color'] }};
            border-color: {{ $abouts[0]['button']['hover_border_color'] }};
        }

        .about-2 .btn-buynow {
            background-color: {{ $abouts[1]['button']['color'] }};
            color: {{ $abouts[1]['button']['text_color'] }};
            border-color: {{ $abouts[1]['button']['border_color'] }};
        }

        .about-2 .btn-buynow:hover {
            background-color: {{ $abouts[1]['button']['hover_color'] }} !important;
            color: {{ $abouts[1]['button']['hover_text_color'] }};
            border-color: {{ $abouts[1]['button']['hover_border_color'] }};
        }

        .buynow-infobar .btn-buynow {
            background-color: {{ $info_area['button']['color'] }};
            color: {{ $info_area['button']['text_color'] }};
            border-color: {{ $info_area['button']['border_color'] }};
        }

        .buynow-infobar .btn-buynow:hover {
            background-color: {{ $info_area['button']['hover_color'] }} !important;
            color: {{ $info_area['button']['hover_text_color'] }};
            border-color: {{ $info_area['button']['hover_border_color'] }};
        }

        nav.navbar.main-menu.sticky-header {
            background: {{ $ulaunch->nav_color }} !important;
        }

        .jumptotop a {
            background: {{ $ulaunch->nav_color }};
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

    <!-- Header Section Starts-->
    <header>
        <nav class="navbar navbar-expand-lg fixed-top navbar-scrollspy main-menu">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="javascript:void(0)">
                        <img src="{{ $userTemplate->company_logo ? asset('storage/' . $userTemplate->company_logo) : asset($userTemplate->template->assets_path . '/images/logo.png') }}"
                            class="logo" width="50" alt="{{ $userTemplate->company_name }}">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbar-menu" aria-controls="ftco-nav" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="fas fa-bars"></span>
                    </button>
                </div>
                <!-- End Header Navigation -->
                <!-- Navbar Start -->
                <div class="collapse navbar-collapse main-nav" id="navbar-menu">
                    <ul class="navbar-nav nav ml-auto mr-md-3">
                        @foreach (json_decode($ulaunch->menu_area, true) as $menu)
                            <li class="nav-item {{ $loop->first ? 'active' : '' }}">
                                <a href="{{ $menu['url'] }}" class="nav-link">{{ $menu['title'] }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!-- Navbar End -->
            </div>
        </nav>
    </header>
    <!-- Header Section Ends-->

    <!-- Banner Section Starts -->
    <section class="banner parallaxie" id="home" style="background-color: {{ $hero_area['background_color'] }}">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="header-content wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <h2>
                            {{ $hero_area['title'] }}
                        </h2>
                        <p>
                            {{ $hero_area['description'] }}
                        </p>
                        <div class="buy-button">
                            <a href="{{ $hero_area_button['url'] }}"
                                class="btn-buynow">{{ $hero_area_button['title'] }}</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="slider-image wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                        @php
                            if ($hero_area['image']) {
                                $link = asset('storage/' . $hero_area['image']);
                            } else {
                                $link = asset($userTemplate->template->assets_path . '/images/header.png');
                            }
                        @endphp
                        <img src="{{ $link }}" alt="{{ $userTemplate->company_name }}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section Ends -->

    <!-- Step Section starts -->
    <div class="step-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="step-container">
                        <div class="row">
                            <!-- Step start -->
                            @foreach ($ulaunch->steps as $step)
                                <div class="col-md-4 col-sm-4">
                                    <div class="step-single wow fadeInUp" data-wow-delay="0.2s"
                                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                        <div class="icon-box">
                                            <i class="{{ $step['icon'] }}"></i>
                                        </div>
                                        <h3>{{ $step['title'] }}</h3>
                                        <p>{{ $step['description'] }}</p>
                                    </div>
                                </div>
                            @endforeach
                            <!-- Step end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Step Section ends -->

    <!-- Features section starts -->
    <section class="features" id="features" style="background-color: {{ $feature_area['background_color'] }}">
        <div class="container">
            <!-- Section Title start -->
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <p>{{ $feature_area['sub_title'] }}</p>
                        <h2>{{ $feature_area['title'] }}</h2>
                    </div>
                </div>
            </div>
            <!-- Section Title end -->

            <div class="row">
                <div class="col-lg-4">
                    <!-- Feature single start -->
                    @foreach ($features[0] as $key => $feature)
                        <div class="feature-single feature-right wow fadeInLeft" data-wow-delay="0.2s"
                            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                            <div class="icon-box">
                                <i class="{{ $feature['icon'] }}"></i>
                            </div>

                            <h3>{{ $feature['title'] }}</h3>
                            <p>{{ $feature['description'] }}</p>
                        </div>
                    @endforeach
                    <!-- Feature single end -->
                </div>

                <div class="col-lg-4">
                    <div class="feature-image wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        @php
                            if ($feature_area['image']) {
                                $link = asset('storage/' . $feature_area['image']);
                            } else {
                                $link = asset($userTemplate->template->assets_path . '/images/feature.png');
                            }
                        @endphp
                        <img src="{{ $link }}" alt="{{ $userTemplate->company_name }}">
                    </div>
                </div>

                <div class="col-lg-4">
                    <!-- Feature single start -->
                    @foreach ($features[1] as $key => $feature)
                        <div class="feature-single feature-right wow fadeInLeft" data-wow-delay="0.2s"
                            style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                            <div class="icon-box">
                                <i class="{{ $feature['icon'] }}"></i>
                            </div>

                            <h3>{{ $feature['title'] }}</h3>
                            <p>{{ $feature['description'] }}</p>
                        </div>
                    @endforeach
                    <!-- Feature single end -->
                </div>
            </div>
        </div>
    </section>
    <!-- Features section ends -->

    <!-- About Product section starts -->
    <section class="about-product" id="about" style="background-color: {{ $about_area['background_color'] }}">
        <div class="container">
            <!-- Section Title start -->
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <p>{{ $about_area['sub_title'] }}</p>
                        <h2>{{ $about_area['title'] }}</h2>
                    </div>
                </div>
            </div>
            <!-- Section Title end -->

            <div class="row">
                <div class="col-md-12">
                    <div class="about-product-single about-1">
                        <div class="row">
                            <div class="col-md-7 col-sm-7">
                                <div class="about-entry">
                                    <h4>{{ $about_area['items'][0]['sub_title'] }}</h4>
                                    <h3>{{ $about_area['items'][0]['title'] }}</h3>
                                    <p>{{ $about_area['items'][0]['description'] }}</p>

                                    @php
                                        $about_button_1 = $about_area['items'][0]['button'];
                                    @endphp
                                    <a href="{{ $about_button_1['url'] }}"
                                        class="btn-buynow">{{ $about_button_1['title'] }}</a>
                                </div>
                            </div>

                            <div class="col-md-5 col-sm-5">
                                <div class="about-image wow fadeInRight" data-wow-delay="0.2s"
                                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">
                                    @php
                                        if ($about_area['items'][0]['image']) {
                                            $link = asset('storage/' . $about_area['items'][0]['image']);
                                        } else {
                                            $link = asset($userTemplate->template->assets_path . '/images/about-1.png');
                                        }
                                    @endphp
                                    <img src="{{ $link }}" alt="{{ $userTemplate->company_name }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="about-product-single about-2">
                        <div class="row">
                            <div class="col-md-7 col-sm-7 order-md-2">
                                <div class="about-entry">
                                    <h4>{{ $about_area['items'][1]['sub_title'] }}</h4>
                                    <h3>{{ $about_area['items'][1]['title'] }}</h3>
                                    <p>{{ $about_area['items'][1]['description'] }}</p>

                                    @php
                                        $about_button_2 = $about_area['items'][1]['button'];
                                    @endphp
                                    <a href="{{ $about_button_2['url'] }}"
                                        class="btn-buynow">{{ $about_button_2['title'] }}</a>
                                </div>
                            </div>

                            <div class="col-md-5 col-sm-5 order-md-1">
                                <div class="about-image wow fadeInLeft" data-wow-delay="0.4s"
                                    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                                    @php
                                        if ($about_area['items'][1]['image']) {
                                            $link = asset('storage/' . $about_area['items'][1]['image']);
                                        } else {
                                            $link = asset($userTemplate->template->assets_path . '/images/about-2.png');
                                        }
                                    @endphp
                                    <img src="{{ $link }}" alt="{{ $userTemplate->company_name }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Product section ends -->

    <!-- Testimonials starts -->
    <section class="testimonials parallaxie" id="testimonial"
        style="background-color: {{ $testimonials_area['background_color'] }}">
        <div class="container">
            <!-- Section Title start -->
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <p>{{ $testimonials_area['sub_title'] }}</p>
                        <h2>{{ $testimonials_area['title'] }}</h2>
                    </div>
                </div>
            </div>
            <!-- Section Title end -->

            <div class="row mt-5">
                <!-- Client Review slide start -->
                @foreach ($ulaunch->testimonials as $key => $testimonial)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="author-info">
                                    @php
                                        if ($testimonial->reviewer_image) {
                                            $link = asset('storage/' . $testimonial->reviewer_image);
                                        } else {
                                            $link = asset(
                                                $userTemplate->template->assets_path . '/images/author-1.jpg',
                                            );
                                        }
                                    @endphp
                                    <img src="{{ $link }}" alt="{{ $userTemplate->company_name }}">
                                </div>

                                <div class="testimonial-entry mt-5">
                                    <p>{{ $testimonial['review'] }}</p>

                                    <h4 class="d-inline">{{ $testimonial['reviewer_name'] }}</h4>
                                    <span class="d-inline mx-1">/</span>
                                    <p class="d-inline">{{ $testimonial['reviewer_bio'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- Client Review slide end -->
            </div>
        </div>
    </section>
    <!-- Testimonials ends -->

    <!-- Buy Now infobar section starts -->
    <div class="buynow-infobar parallaxie" style="background-color: {{ $info_area['background_color'] }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                    <div class="section-title wow fadeInUp text-center"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <p>{{ $info_area['sub_title'] }}</p>
                        <h2>{{ $info_area['title'] }}</h2>
                    </div>

                    <div class="buynow-entry text-center">
                        <p>{{ $info_area['description'] }}</p>

                        <a href="{{ $info_area['button']['url'] }}"
                            class="btn-buynow">{{ $info_area['button']['title'] }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Buy Now infobar section ends -->

    <!-- Order Now section starts -->
    <section class="order_area" style="{{ $order_area['background_color'] }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-title wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <p>{{ $order_area['sub_title'] }}</p>
                        <h2>{{ $order_area['title'] }}</h2>
                    </div>

                    <!-- Contact Form start -->
                    <div class="card bg-white shadow border-0 mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    {{ $userTemplate->product_name }}
                                </div>
                                <div class="col-md-4 text-end">
                                    <span style="margin-right: 5px">{{ $userTemplate->product_currency }}</span>
                                    <span>{{ $userTemplate->product_price }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form">
                        <form id="order-form" action="{{ route('place_order') }}" method="post"
                            data-toggle="validator" novalidate="true">
                            @csrf
                            <input type="hidden" name="user_template_id" value="{{ $userTemplate->id }}">

                            <div class="row">
                                <div class="form-group mb-3 col-md-6 col-sm-6">
                                    <label for="name" class="form-label">Name:</label>
                                    <input type="text" name="customer_name" value="{{ old('customer_name') }}"
                                        id="name" class="form-control" placeholder="Enter Your Name"
                                        required="">
                                    <div class="help-block with-errors"></div>
                                    @error('customer_name')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group mb-3 col-md-6 col-sm-6">
                                    <label for="mobile" class="form-label">Mobile:</label>
                                    <input type="number" name="customer_phone" value="{{ old('customer_phone') }}"
                                        id="mobile" class="form-control" placeholder="Your Mobile Number"
                                        required="">
                                    <div class="help-block with-errors"></div>
                                    @error('customer_phone')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group mb-3 col-md-12 col-sm-12">
                                    <label for="quantity" class="form-label">Quantity:</label>
                                    <input type="number" name="quantity" id="quantity" class="form-control"
                                        placeholder="Quantity" min="1" value="1" required="">
                                    <div class="help-block with-errors"></div>
                                    @error('quantity')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group mb-3 col-md-12 col-sm-12">
                                    <label for="address" class="form-label">Address:</label>
                                    <textarea rows="8" name="customer_address" id="address" placeholder="Address" class="form-control"
                                        required="">{{ old('customer_address') }}</textarea>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="col-md-12 col-sm-12">
                                    <button type="submit" class="btn-contact disabled">Order Now</button>
                                    <div id="msgSubmit" class="h3 text-left hidden"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Contact Form end -->
                </div>
            </div>
        </div>
    </section>
    <!-- Order Now section ends -->

    <!-- Footer section starts -->
    <footer style="background-color: {{ $footer_area['background_color'] }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="jumptotop" id="back-to-top">
                        <a href="javascript:void(0);"><i class="fas fa-arrow-up"></i></a>
                    </div>
                    <div class="footer-siteinfo">
                        <p>{{ $footer_area['text'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer section ends -->

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
    <!-- Sweet Alert -->
    @include('sweetalert::alert')

</body>

</html>
