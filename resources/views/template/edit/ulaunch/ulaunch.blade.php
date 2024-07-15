<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page Title -->
    <title>{{ $userTemplate['company_name'] }}</title>
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

    <main id="app">
        <!-- Header Section Starts-->
        <header>
            <nav class="navbar navbar-expand-lg fixed-top navbar-scrollspy main-menu">
                <div class="container">
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">
                            <img src="{{ asset('storage/' . $userTemplate['company_logo']) }}" width="100"
                                class="logo" alt="">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbar-menu" aria-controls="ftco-nav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="fa-solid fa-bars"></span>
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
                            <h2 contenteditable="true" @input="heroTitle">@{{ hero_title }}</h2>
                            <p contenteditable="true" @input="heroDescription">@{{ hero_description }}</p>
                            <div class="buy-button position-relative">
                                <a href="@{{ hero_button_url }}" class="btn-buynow">@{{ hero_button_txt }}</a>

                                <div class="position-absolute top-0 end-0 mt-2" title="Button settings">
                                    <div class="bg-primary text-white text-center rounded-circle"
                                        style="width: 30px; height: 30px;">
                                        <i class="fas fa-cog" style="font-size: 20px; margin-top: 5px;"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div class="position-absolute top-0 end-0 mt-2" title="Image settings">
                            <div class="bg-primary text-white text-center rounded-circle"
                                style="width: 30px; height: 30px;">
                                <i class="fas fa-cog" style="font-size: 20px; margin-top: 5px;"></i>
                            </div>
                        </div>
                        <div class="slider-image wow fadeInRight"
                            style="visibility: visible; animation-name: fadeInRight;">
                            <img src="{{ asset($template['assets'] . '/images/header.png') }}" alt="">
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
                                    <div class="position-absolute top-0 mt-2" title="Icon settings">
                                        <div class="bg-primary text-white text-center rounded-circle"
                                            style="width: 30px; height: 30px;">
                                            <i class="fas fa-cog" style="font-size: 20px; margin-top: 5px;"></i>
                                        </div>
                                    </div>
                                    <div class="step-single wow fadeInUp" data-wow-delay="0.2s"
                                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                        <div class="icon-box" contenteditable="true" @input="stepIcon($event, 0)">
                                            <i class="fas fa-search-dollar"></i>
                                        </div>
                                        <h3 contenteditable="true" @input="stepTitle($event, 0)">
                                            @{{ steps[0].title }}</h3>
                                        <p contenteditable="true" @input="stepDescription($event, 0)">
                                            @{{ steps[0].description }}</p>
                                    </div>
                                </div>
                                <!-- Step end -->
                                <!-- Step start -->
                                <div class="col-md-4 col-sm-4">
                                    <div class="position-absolute top-0 mt-2" title="Icon settings">
                                        <div class="bg-primary text-white text-center rounded-circle"
                                            style="width: 30px; height: 30px;">
                                            <i class="fas fa-cog" style="font-size: 20px; margin-top: 5px;"></i>
                                        </div>
                                    </div>
                                    <div class="step-single wow fadeInUp" data-wow-delay="0.2s"
                                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                        <div class="icon-box">
                                            <i class="fas fa-bicycle"></i>
                                        </div>
                                        <h3 contenteditable="true" @input="stepTitle($event, 1)">
                                            @{{ steps[1].title }}</h3>
                                        <p contenteditable="true" @input="stepDescription($event, 1)">
                                            @{{ steps[1].description }}</p>
                                    </div>
                                </div>
                                <!-- Step end -->
                                <!-- Step start -->
                                <div class="col-md-4 col-sm-4">
                                    <div class="position-absolute top-0 mt-2" title="Icon settings">
                                        <div class="bg-primary text-white text-center rounded-circle"
                                            style="width: 30px; height: 30px;">
                                            <i class="fas fa-cog" style="font-size: 20px; margin-top: 5px;"></i>
                                        </div>
                                    </div>
                                    <div class="step-single wow fadeInUp" data-wow-delay="0.2s"
                                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                                        <div class="icon-box">
                                            <i class="fas fa-fingerprint"></i>
                                        </div>
                                        <h3 contenteditable="true" @input="stepTitle($event, 2)">
                                            @{{ steps[2].title }}</h3>
                                        <p contenteditable="true" @input="stepDescription($event, 2)">
                                            @{{ steps[2].description }}</p>
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
                        <div class="section-title wow fadeInUp"
                            style="visibility: visible; animation-name: fadeInUp;">
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore et</p>
                        </div>
                        <!-- Feature single end -->
                    </div>

                    <div class="col-lg-4">
                        <div class="feature-image wow fadeInUp"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <img src="{{ asset($template['assets'] . '/images/feature.png') }}" alt="">
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
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
                        <div class="section-title wow fadeInUp"
                            style="visibility: visible; animation-name: fadeInUp;">
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
                                            eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id
                                            usu,
                                            vide oporteat vix eu, id illud principes has.</p>
                                        <a href="#" class="btn-buynow">Purchase Now</a>
                                    </div>
                                </div>

                                <div class="col-md-5 col-sm-5">
                                    <div class="about-image wow fadeInRight" data-wow-delay="0.2s"
                                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">
                                        <img src="{{ asset($template['assets'] . '/images/about-1.png') }}"
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
                                            eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id
                                            usu,
                                            vide oporteat vix eu, id illud principes has.</p>
                                        <a href="#" class="btn-buynow">Purchase Now</a>
                                    </div>
                                </div>

                                <div class="col-md-5 col-sm-5 order-md-1">
                                    <div class="about-image wow fadeInLeft" data-wow-delay="0.4s"
                                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                                        <img src="{{ asset($template['assets'] . '/images/about-2.png') }}"
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
        <section class="testimonials parallaxie" id="testimonial"
            style="background-image: url('{{ asset($template['assets'] . '/images/header-bg.jpg') }}'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center 1842.29px;">
            <div class="container">
                <!-- Section Title start -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title wow fadeInUp"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <p>Feedback</p>
                            <h2>What our clients say</h2>
                        </div>
                    </div>
                </div>
                <!-- Section Title end -->

                <div class="row">
                    <div class="col-md-12">
                        <div
                            class="swiper testimonials-slider swiper-coverflow swiper-3d swiper-initialized swiper-horizontal swiper-watch-progress">
                            <div class="swiper-wrapper" id="swiper-wrapper-7863bf9ad17d8bbf" aria-live="off"
                                style="cursor: grab; transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
                                <!-- Client Review slide start -->
                                <div class="swiper-slide swiper-slide-visible swiper-slide-prev"
                                    style="width: 378.667px; transition-duration: 0ms; transform: translate3d(0px, 0px, -100px) rotateX(0deg) rotateY(50deg) scale(1); z-index: 0;"
                                    role="group" aria-label="1 / 6">
                                    <div class="testimonial-slide">
                                        <div class="author-info">
                                            <img src="{{ asset($template['assets'] . '/images/author-1.jpg') }}"
                                                alt="">
                                        </div>

                                        <div class="testimonial-entry">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of type and scrambled it to
                                                make a type specimen book.</p>

                                            <h4>Harshad Patel <span>/ Web Designer</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- Client Review slide end -->

                                <!-- Client Review slide start -->
                                <div class="swiper-slide swiper-slide-visible swiper-slide-active"
                                    style="width: 378.667px; transition-duration: 0ms; transform: translate3d(0px, 0px, -0.0880282px) rotateX(0deg) rotateY(-0.0440141deg) scale(1); z-index: 1;"
                                    role="group" aria-label="2 / 6">
                                    <div class="testimonial-slide">
                                        <div class="author-info">
                                            <img src="{{ asset($template['assets'] . '/images/author-2.jpg') }}"
                                                alt="">
                                        </div>

                                        <div class="testimonial-entry">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of type and scrambled it to
                                                make a type specimen book.</p>

                                            <h4>Jasmin Joshph <span>/ Front end</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- Client Review slide end -->

                                <!-- Client Review slide start -->
                                <div class="swiper-slide swiper-slide-visible swiper-slide-next"
                                    style="width: 378.667px; transition-duration: 0ms; transform: translate3d(0px, 0px, -99.912px) rotateX(0deg) rotateY(-49.956deg) scale(1); z-index: 0;"
                                    role="group" aria-label="3 / 6">
                                    <div class="testimonial-slide">
                                        <div class="author-info">
                                            <img src="{{ asset($template['assets'] . '/images/author-3.jpg') }}"
                                                alt="">
                                        </div>

                                        <div class="testimonial-entry">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry.
                                                Lorem Ipsum has been the industry's standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of type and scrambled it to
                                                make a type specimen book.</p>

                                            <h4>Sweta Silva <span>/ Back end</span></h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- Client Review slide end -->

                            </div>

                            <div
                                class="testimonial-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                                <span class="swiper-pagination-bullet" tabindex="0" role="button"
                                    aria-label="Go to slide 1"></span><span
                                    class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                                    role="button" aria-label="Go to slide 2" aria-current="true"></span><span
                                    class="swiper-pagination-bullet" tabindex="0" role="button"
                                    aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet"
                                    tabindex="0" role="button" aria-label="Go to slide 4"></span><span
                                    class="swiper-pagination-bullet" tabindex="0" role="button"
                                    aria-label="Go to slide 5"></span><span class="swiper-pagination-bullet"
                                    tabindex="0" role="button" aria-label="Go to slide 6"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials ends -->

        <!-- Buy Now infobar section starts -->
        <div class="buynow-infobar parallaxie">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-8">
                        <div class="section-title wow fadeInUp"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <p>Get it Today</p>
                            <h2>Get your Product today!</h2>
                        </div>

                        <div class="buynow-entry">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised words which don't
                                look
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
                        <div class="section-title wow fadeInUp"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <p>Get your Product</p>
                            <h2>Order Now</h2>
                        </div>

                        <!-- Contact Form start -->
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
    </main>

    <div class="offcanvas offcanvas-start z-5" style="z-index: 2000 !important" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
                Some text as placeholder. In real life you can have the elements you have chosen. Like,
                text, images, lists, etc.
            </div>
            <div class="dropdown mt-3">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                    Dropdown button
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

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
    <script src="{{ asset('js/ulaunch.js') }}"></script>
</body>

</html>
