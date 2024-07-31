<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page Title -->
    <title>{{ $template->name }}</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset($template->assets_path . '/images/logo.png') }}">
    <!-- Bootstrap css -->
    <link href="{{ asset($template->assets_path . '/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <!-- Font Awesome icon css-->
    <link href="{{ asset($template->assets_path . '/css/font-awesome.all.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset($template->assets_path . '/css/flaticon.css') }}" rel="stylesheet" media="screen">
    <!-- Swiper's CSS -->
    <link rel="stylesheet" href="{{ asset($template->assets_path . '/css/swiper.min.css') }}">
    <!-- Animated css -->
    <link href="{{ asset($template->assets_path . '/css/animate.css') }}" rel="stylesheet">
    <!-- Magnific Popup CSS -->
    <link href="{{ asset($template->assets_path . '/css/magnific-popup.css') }}" rel="stylesheet">
    <!-- Main custom css -->
    <link href="{{ asset($template->assets_path . '/css/custom.css') }}" rel="stylesheet" media="screen">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
                    <a class="navbar-brand" href="#"><img
                            src="{{ asset($template->assets_path . '/images/logo.png') }}" class="logo"
                            alt=""></a>
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
                        <li class="nav-item active"><a href="#home" class="nav-link active">Home</a></li>
                        <li class="nav-item"><a href="#features" class="nav-link">Features</a></li>
                        <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="#testimonial" class="nav-link">Testimonial</a></li>
                    </ul>
                </div>
                <!-- Navbar End -->
            </div>
        </nav>
    </header>
    <!-- Header Section Ends-->

    <!-- Banner Section Starts -->
    <section class="banner parallaxie" id="home">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="header-content wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <h2>Best quality smart watch only at Tk 2000.</h2>
                        <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum necessitatibus
                            praesentium voluptatum deleniti atque corrupti, quos dolores eos.</p>
                        <div class="buy-button">
                            <a href="#" class="btn-buynow">Purchase Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="slider-image wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
                        <img src="{{ asset($template->assets_path . '/images/header.png') }}" alt="">
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
                            <div class="col-md-4 col-sm-4">
                                <div class="step-single wow fadeInUp" data-wow-delay="0.2s"
                                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                    <div class="icon-box">
                                        <i class="flaticon-login"></i>
                                    </div>
                                    <h3>Create a Account</h3>
                                    <p>The alien mothership is in orbit here. If we can hit that bullseye.</p>
                                </div>
                            </div>
                            <!-- Step end -->

                            <!-- Step start -->
                            <div class="col-md-4 col-sm-4">
                                <div class="step-single wow fadeInUp" data-wow-delay="0.4s"
                                    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                    <div class="icon-box">
                                        <i class="flaticon-login-1"></i>
                                    </div>
                                    <h3>Login in Website</h3>
                                    <p>The alien mothership is in orbit here. If we can hit that bullseye.</p>
                                </div>
                            </div>
                            <!-- Step end -->

                            <!-- Step start -->
                            <div class="col-md-4 col-sm-4">
                                <div class="step-single wow fadeInUp" data-wow-delay="0.6s"
                                    style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                                    <div class="icon-box">
                                        <i class="flaticon-shopping-cart"></i>
                                    </div>
                                    <h3>Purchase Now</h3>
                                    <p>The alien mothership is in orbit here. If we can hit that bullseye.</p>
                                </div>
                            </div>
                            <!-- Step end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Step Section ends -->

    <!-- Features section starts -->
    <section class="features" id="features">
        <div class="container">
            <!-- Section Title start -->
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <p>Explore the Awesome</p>
                        <h2>Product Features</h2>
                    </div>
                </div>
            </div>
            <!-- Section Title end -->

            <div class="row">
                <div class="col-lg-4">
                    <!-- Feature single start -->
                    <div class="feature-single feature-right wow fadeInLeft" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                        <div class="icon-box">
                            <i class="flaticon-cpu"></i>
                        </div>

                        <h3>Dual Processor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et</p>
                    </div>
                    <!-- Feature single end -->

                    <!-- Feature single start -->
                    <div class="feature-single feature-right wow fadeInLeft" data-wow-delay="0.6s"
                        style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                        <div class="icon-box">
                            <i class="flaticon-gold-medal"></i>
                        </div>

                        <h3>Gold aluminum</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et</p>
                    </div>
                    <!-- Feature single end -->

                    <!-- Feature single start -->
                    <div class="feature-single feature-right wow fadeInLeft" data-wow-delay="0.8s"
                        style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                        <div class="icon-box">
                            <i class="flaticon-loupe"></i>
                        </div>

                        <h3>Ion-X glass</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et</p>
                    </div>
                    <!-- Feature single end -->

                    <!-- Feature single start -->
                    <div class="feature-single feature-right wow fadeInLeft" data-wow-delay="1s"
                        style="visibility: visible; animation-delay: 1s; animation-name: fadeInLeft;">
                        <div class="icon-box">
                            <i class="flaticon-sensor"></i>
                        </div>

                        <h3>Heart rate sensor</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et</p>
                    </div>
                    <!-- Feature single end -->
                </div>

                <div class="col-lg-4">
                    <div class="feature-image wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <img src="{{ asset($template->assets_path . '/images/feature.png') }}" alt="">
                    </div>
                </div>

                <div class="col-lg-4">
                    <!-- Feature single start -->
                    <div class="feature-single feature-left wow fadeInRight" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">
                        <div class="icon-box">
                            <i class="flaticon-torch-top-view"></i>
                        </div>

                        <h3>Force Touch</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et</p>
                    </div>
                    <!-- Feature single end -->

                    <!-- Feature single start -->
                    <div class="feature-single feature-left wow fadeInRight" data-wow-delay="0.4s"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
                        <div class="icon-box">
                            <i class="flaticon-eye"></i>
                        </div>

                        <h3>Retina display</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et</p>
                    </div>
                    <!-- Feature single end -->

                    <!-- Feature single start -->
                    <div class="feature-single feature-left wow fadeInRight" data-wow-delay="0.6s"
                        style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInRight;">
                        <div class="icon-box">
                            <i class="flaticon-speaker"></i>
                        </div>

                        <h3>Fire Speaker</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et</p>
                    </div>
                    <!-- Feature single end -->

                    <!-- Feature single start -->
                    <div class="feature-single feature-left wow fadeInRight" data-wow-delay="1s"
                        style="visibility: visible; animation-delay: 1s; animation-name: fadeInRight;">
                        <div class="icon-box">
                            <i class="flaticon-wifi"></i>
                        </div>

                        <h3>Bluetooth &amp; Wi-Fi</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et</p>
                    </div>
                    <!-- Feature single end -->
                </div>
            </div>
        </div>
    </section>
    <!-- Features section ends -->

    <!-- About Product section starts -->
    <section class="about-product" id="about">
        <div class="container">
            <!-- Section Title start -->
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <p>Beauty meets functionality</p>
                        <h2>About Product</h2>
                    </div>
                </div>
            </div>
            <!-- Section Title end -->

            <div class="row">
                <div class="col-md-12">
                    <div class="about-product-single">
                        <div class="row">
                            <div class="col-md-7 col-sm-7">
                                <div class="about-entry">
                                    <h4>Fresh News From The Labs</h4>
                                    <h3>Different preset Signup &amp; Order forms ready to use.</h3>
                                    <p>Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an
                                        eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu,
                                        vide oporteat vix eu, id illud principes has.</p>
                                    <a href="#" class="btn-buynow">Purchase Now</a>
                                </div>
                            </div>

                            <div class="col-md-5 col-sm-5">
                                <div class="about-image wow fadeInRight" data-wow-delay="0.2s"
                                    style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">
                                    <img src="{{ asset($template->assets_path . '/images/about-1.png') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="about-product-single">
                        <div class="row">
                            <div class="col-md-7 col-sm-7 order-md-2">
                                <div class="about-entry">
                                    <h4>Fresh News From The Labs</h4>
                                    <h3>Different preset Signup &amp; Order forms ready to use.</h3>
                                    <p>Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an
                                        eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu,
                                        vide oporteat vix eu, id illud principes has.</p>
                                    <a href="#" class="btn-buynow">Purchase Now</a>
                                </div>
                            </div>

                            <div class="col-md-5 col-sm-5 order-md-1">
                                <div class="about-image wow fadeInLeft" data-wow-delay="0.4s"
                                    style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                                    <img src="{{ asset($template->assets_path . '/images/about-2.png') }}"
                                        alt="">
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
    <section class="testimonials parallaxie position-relative" id="testimonial">
        <div class="container">
            <!-- Section Title start -->
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <p>Feedback</p>
                        <h2>What our clients say</h2>
                    </div>
                </div>
            </div>
            <!-- Section Title end -->

            <div class="row mt-5">
                <!-- Client Review slide start -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="author-info">
                                <img src="{{ asset('ULaunch/images/author-1.jpg') }}" />
                            </div>

                            <div class="testimonial-entry mt-5">
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>

                                <h4 class="d-inline">
                                    Harshad Patel
                                </h4>
                                <span class="d-inline mx-1">/</span>
                                <p class="d-inline">
                                    NM Babor
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="author-info">
                                <img src="{{ asset('ULaunch/images/author-2.jpg') }}" />
                            </div>

                            <div class="testimonial-entry mt-5">
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>

                                <h4 class="d-inline">
                                    Harshad Patel
                                </h4>
                                <span class="d-inline mx-1">/</span>
                                <p class="d-inline">
                                    NM Babor
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="author-info">
                                <img src="{{ asset('ULaunch/images/author-3.jpg') }}" />
                            </div>

                            <div class="testimonial-entry mt-5">
                                <p>
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                    unknown printer took a galley of type and scrambled it to make a type specimen book.
                                </p>

                                <h4 class="d-inline">
                                    Harshad Patel
                                </h4>
                                <span class="d-inline mx-1">/</span>
                                <p class="d-inline">
                                    NM Babor
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Client Review slide end -->
            </div>
        </div>
    </section>
    <!-- Testimonials ends -->

    <!-- Buy Now infobar section starts -->
    <div class="buynow-infobar parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <div class="section-title wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <p>Get it Today</p>
                        <h2>Get your Product today!</h2>
                    </div>

                    <div class="buynow-entry">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't look
                            even slightly believable.</p>

                        <a href="#" class="btn-buynow">Orderer Now</a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-4">
                    <div class="buynow-video">
                        <a href="http://www.youtube.com/watch?v=JrbJ8dXzmnE" class="popup-video"><i
                                class="flaticon-play-button"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Buy Now infobar section ends -->

    <!-- Order Now section starts -->
    <section class="order_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-title wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <p>Get your Product</p>
                        <h2>Order Now</h2>
                    </div>

                    <!-- Contact Form start -->
                    <div class="card bg-white shadow border-0 mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    Smart Watch Pro
                                </div>
                                <div class="col-md-4 text-end">
                                    <span style="margin-right: 5px">BDT</span>
                                    <span>2000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-form">
                        <form id="contactForm" action="#" method="post" data-toggle="validator"
                            novalidate="true">
                            <div class="row">
                                <div class="form-group mb-3 col-md-6 col-sm-6">
                                    <label for="name" class="form-label">Name:</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Enter Your Name" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group mb-3 col-md-6 col-sm-6">
                                    <label for="mobile" class="form-label">Mobile:</label>
                                    <input type="number" name="mobile" id="mobile" class="form-control"
                                        placeholder="Your Mobile Number" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group mb-3 col-md-12 col-sm-12">
                                    <label for="quantity" class="form-label">Quantity:</label>
                                    <input type="number" name="quantity" id="quantity" class="form-control"
                                        placeholder="Quantity" min="1" value="1" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group mb-3 col-md-12 col-sm-12">
                                    <label for="address" class="form-label">Address:</label>
                                    <textarea rows="8" name="address" id="address" placeholder="Address" class="form-control" required=""></textarea>
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
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="jumptotop" id="back-to-top">
                        <a href="javascript:void(0);"><i class="fa-solid fa-chevron-up"></i></a>
                    </div>
                    <div class="footer-siteinfo">
                        <p>Copyright © 2023, All Rights Reserved by {{ config('app.name') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer section ends -->

    <!-- Jquery Library File -->
    <script src="{{ asset($template->assets_path . '/js/jquery-3.6.0.min.js') }}"></script>
    <!-- Bootstrap js file -->
    <script src="{{ asset($template->assets_path . '/js/bootstrap.min.js') }}"></script>
    <!-- Bootstrap form validator -->
    <script src="{{ asset($template->assets_path . '/js/validator.min.js') }}"></script>
    <!-- Counterup js file -->
    <script src="{{ asset($template->assets_path . '/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset($template->assets_path . '/js/jquery.counterup.min.js') }}"></script>
    <!-- Wow js file -->
    <script src="{{ asset($template->assets_path . '/js/wow.js') }}"></script>
    <!-- Swiper Carousel js file -->
    <script src="{{ asset($template->assets_path . '/js/swiper.min.js') }}"></script>
    <!-- Magnific Popup core JS file -->
    <script src="{{ asset($template->assets_path . '/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Parallaxie js file -->
    <script src="{{ asset($template->assets_path . '/js/parallaxie.js') }}"></script>
    <!-- SmoothScroll -->
    <script src="{{ asset($template->assets_path . '/js/SmoothScroll.js') }}"></script>
    <!-- Main Custom js file -->
    <script src="{{ asset($template->assets_path . '/js/function.js') }}"></script>

</body>

</html>
