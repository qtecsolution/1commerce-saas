<template>
    <div id="main-wrapper">
        <!-- Header Section Starts-->
        <header>
            <nav
                class="navbar navbar-expand-lg fixed-top navbar-scrollspy main-menu"
            >
                <div class="container">
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">
                            <img
                                :src="
                                    appUrl +
                                    '/storage/' +
                                    user_template.company_logo
                                "
                                width="100"
                                class="logo"
                                alt=""
                            />
                        </a>
                        <button
                            class="navbar-toggler"
                            type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#navbar-menu"
                            aria-controls="ftco-nav"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                        >
                            <span class="fa-solid fa-bars"></span>
                        </button>
                    </div>
                    <!-- End Header Navigation -->

                    <!-- Navbar Start -->
                    <div
                        class="collapse navbar-collapse main-nav"
                        id="navbar-menu"
                    >
                        <ul class="navbar-nav nav ml-auto mr-md-3">
                            <li class="nav-item active">
                                <a href="#home" class="nav-link active">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#features" class="nav-link"
                                    >Features</a
                                >
                            </li>
                            <li class="nav-item">
                                <a href="#about" class="nav-link">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="#testimonial" class="nav-link"
                                    >Testimonial</a
                                >
                            </li>
                        </ul>
                    </div>
                    <!-- Navbar End -->
                </div>
            </nav>
        </header>
        <!-- Header Section Ends-->

        <!-- Banner Section Starts -->
        <section class="banner parallaxie" id="home">
            <!-- <div class="position-relative mx-2 mb-4" title="Hero settings">
                <div
                    class="bg-primary text-white text-center rounded-circle cursor-pointer"
                    style="width: 30px; height: 30px"
                    @click="heroSettings"
                >
                    <i
                        class="fas fa-cog"
                        style="font-size: 20px; margin-top: 5px"
                    ></i>
                </div>
            </div> -->

            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div
                            class="header-content wow fadeInUp"
                            style="
                                visibility: visible;
                                animation-name: fadeInUp;
                            "
                        >
                            <h2 contenteditable="true" @input="updateHeroTitle">
                                {{ heroTitle }}
                            </h2>
                            <p
                                contenteditable="true"
                                @input="updateHeroDescription"
                            >
                                {{ heroDescription }}
                            </p>
                            <div class="buy-button position-relative">
                                <a
                                    :href="heroButton.hero_button_url"
                                    class="btn-buynow"
                                    :style="{
                                        background:
                                            heroButton.hero_button_color,
                                        borderColor:
                                            heroButton.hero_button_border_color,
                                        color: heroButton.hero_button_text_color,
                                    }"
                                >
                                    {{ heroButton.hero_button_title }}
                                </a>

                                <div
                                    class="position-absolute top-0 end-0 mt-2"
                                    title="Button settings"
                                >
                                    <div
                                        class="bg-primary text-white text-center rounded-circle cursor-pointer"
                                        style="width: 30px; height: 30px"
                                        data-bs-toggle="modal"
                                        data-bs-target="#heroButtonModal"
                                    >
                                        <i
                                            class="fas fa-cog"
                                            style="
                                                font-size: 20px;
                                                margin-top: 5px;
                                            "
                                        ></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6">
                        <div
                            class="position-absolute top-0 end-0 mt-2"
                            title="Image settings"
                        >
                            <div
                                class="bg-primary text-white text-center rounded-circle cursor-pointer"
                                style="width: 30px; height: 30px"
                                data-bs-toggle="modal"
                                data-bs-target="#heroImageModal"
                            >
                                <i
                                    class="fas fa-cog"
                                    style="font-size: 20px; margin-top: 5px"
                                ></i>
                            </div>
                        </div>
                        <div
                            class="slider-image wow fadeInRight"
                            style="
                                visibility: visible;
                                animation-name: fadeInRight;
                            "
                        >
                            <img :src="heroImage" alt="" />
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
                                    <div
                                        class="position-absolute top-0 mt-2"
                                        title="Icon settings"
                                    >
                                        <div
                                            class="bg-primary text-white text-center rounded-circle"
                                            style="width: 30px; height: 30px"
                                        >
                                            <i
                                                class="fas fa-cog"
                                                style="
                                                    font-size: 20px;
                                                    margin-top: 5px;
                                                "
                                            ></i>
                                        </div>
                                    </div>
                                    <div
                                        class="step-single wow fadeInUp"
                                        data-wow-delay="0.2s"
                                        style="
                                            visibility: visible;
                                            animation-delay: 0.2s;
                                            animation-name: fadeInUp;
                                        "
                                    >
                                        <div
                                            class="icon-box"
                                            contenteditable="true"
                                            @input="stepIcon($event, 0)"
                                        >
                                            <i class="fas fa-search-dollar"></i>
                                        </div>
                                        <h3
                                            contenteditable="true"
                                            @input="stepTitle($event, 0)"
                                        >
                                            {{ steps[0].title }}
                                        </h3>
                                        <p
                                            contenteditable="true"
                                            @input="stepDescription($event, 0)"
                                        >
                                            {{ steps[0].description }}
                                        </p>
                                    </div>
                                </div>
                                <!-- Step end -->
                                <!-- Step start -->
                                <div class="col-md-4 col-sm-4">
                                    <div
                                        class="position-absolute top-0 mt-2"
                                        title="Icon settings"
                                    >
                                        <div
                                            class="bg-primary text-white text-center rounded-circle"
                                            style="width: 30px; height: 30px"
                                        >
                                            <i
                                                class="fas fa-cog"
                                                style="
                                                    font-size: 20px;
                                                    margin-top: 5px;
                                                "
                                            ></i>
                                        </div>
                                    </div>
                                    <div
                                        class="step-single wow fadeInUp"
                                        data-wow-delay="0.2s"
                                        style="
                                            visibility: visible;
                                            animation-delay: 0.2s;
                                            animation-name: fadeInUp;
                                        "
                                    >
                                        <div class="icon-box">
                                            <i class="fas fa-bicycle"></i>
                                        </div>
                                        <h3
                                            contenteditable="true"
                                            @input="stepTitle($event, 1)"
                                        >
                                            {{ steps[1].title }}
                                        </h3>
                                        <p
                                            contenteditable="true"
                                            @input="stepDescription($event, 1)"
                                        >
                                            {{ steps[1].description }}
                                        </p>
                                    </div>
                                </div>
                                <!-- Step end -->
                                <!-- Step start -->
                                <div class="col-md-4 col-sm-4">
                                    <div
                                        class="position-absolute top-0 mt-2"
                                        title="Icon settings"
                                    >
                                        <div
                                            class="bg-primary text-white text-center rounded-circle"
                                            style="width: 30px; height: 30px"
                                        >
                                            <i
                                                class="fas fa-cog"
                                                style="
                                                    font-size: 20px;
                                                    margin-top: 5px;
                                                "
                                            ></i>
                                        </div>
                                    </div>
                                    <div
                                        class="step-single wow fadeInUp"
                                        data-wow-delay="0.2s"
                                        style="
                                            visibility: visible;
                                            animation-delay: 0.2s;
                                            animation-name: fadeInUp;
                                        "
                                    >
                                        <div class="icon-box">
                                            <i class="fas fa-fingerprint"></i>
                                        </div>
                                        <h3
                                            contenteditable="true"
                                            @input="stepTitle($event, 2)"
                                        >
                                            {{ steps[2].title }}
                                        </h3>
                                        <p
                                            contenteditable="true"
                                            @input="stepDescription($event, 2)"
                                        >
                                            {{ steps[2].description }}
                                        </p>
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
                        <div
                            class="section-title wow fadeInUp"
                            style="
                                visibility: visible;
                                animation-name: fadeInUp;
                            "
                        >
                            <p>Explore the Awesome</p>
                            <h2>Product Features</h2>
                        </div>
                    </div>
                </div>
                <!-- Section Title end -->

                <div class="row">
                    <div class="col-lg-4">
                        <!-- Feature single start -->
                        <div
                            class="feature-single feature-right wow fadeInLeft"
                            data-wow-delay="0.2s"
                            style="
                                visibility: visible;
                                animation-delay: 0.2s;
                                animation-name: fadeInLeft;
                            "
                        >
                            <div class="icon-box">
                                <i class="flaticon-cpu"></i>
                            </div>

                            <h3>Dual Processor</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et
                            </p>
                        </div>
                        <!-- Feature single end -->

                        <!-- Feature single start -->
                        <div
                            class="feature-single feature-right wow fadeInLeft"
                            data-wow-delay="0.6s"
                            style="
                                visibility: visible;
                                animation-delay: 0.6s;
                                animation-name: fadeInLeft;
                            "
                        >
                            <div class="icon-box">
                                <i class="flaticon-gold-medal"></i>
                            </div>

                            <h3>Gold aluminum</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et
                            </p>
                        </div>
                        <!-- Feature single end -->

                        <!-- Feature single start -->
                        <div
                            class="feature-single feature-right wow fadeInLeft"
                            data-wow-delay="0.8s"
                            style="
                                visibility: visible;
                                animation-delay: 0.8s;
                                animation-name: fadeInLeft;
                            "
                        >
                            <div class="icon-box">
                                <i class="flaticon-loupe"></i>
                            </div>

                            <h3>Ion-X glass</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et
                            </p>
                        </div>
                        <!-- Feature single end -->

                        <!-- Feature single start -->
                        <div
                            class="feature-single feature-right wow fadeInLeft"
                            data-wow-delay="1s"
                            style="
                                visibility: visible;
                                animation-delay: 1s;
                                animation-name: fadeInLeft;
                            "
                        >
                            <div class="icon-box">
                                <i class="flaticon-sensor"></i>
                            </div>

                            <h3>Heart rate sensor</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et
                            </p>
                        </div>
                        <!-- Feature single end -->
                    </div>

                    <div class="col-lg-4">
                        <div
                            class="feature-image wow fadeInUp"
                            style="
                                visibility: visible;
                                animation-name: fadeInUp;
                            "
                        >
                            <!-- <img
                                src="{{ asset($template['assets'] . '/images/feature.png') }}"
                                alt=""
                            /> -->
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <!-- Feature single start -->
                        <div
                            class="feature-single feature-left wow fadeInRight"
                            data-wow-delay="0.2s"
                            style="
                                visibility: visible;
                                animation-delay: 0.2s;
                                animation-name: fadeInRight;
                            "
                        >
                            <div class="icon-box">
                                <i class="flaticon-torch-top-view"></i>
                            </div>

                            <h3>Force Touch</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et
                            </p>
                        </div>
                        <!-- Feature single end -->

                        <!-- Feature single start -->
                        <div
                            class="feature-single feature-left wow fadeInRight"
                            data-wow-delay="0.4s"
                            style="
                                visibility: visible;
                                animation-delay: 0.4s;
                                animation-name: fadeInRight;
                            "
                        >
                            <div class="icon-box">
                                <i class="flaticon-eye"></i>
                            </div>

                            <h3>Retina display</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et
                            </p>
                        </div>
                        <!-- Feature single end -->

                        <!-- Feature single start -->
                        <div
                            class="feature-single feature-left wow fadeInRight"
                            data-wow-delay="0.6s"
                            style="
                                visibility: visible;
                                animation-delay: 0.6s;
                                animation-name: fadeInRight;
                            "
                        >
                            <div class="icon-box">
                                <i class="flaticon-speaker"></i>
                            </div>

                            <h3>Fire Speaker</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et
                            </p>
                        </div>
                        <!-- Feature single end -->

                        <!-- Feature single start -->
                        <div
                            class="feature-single feature-left wow fadeInRight"
                            data-wow-delay="1s"
                            style="
                                visibility: visible;
                                animation-delay: 1s;
                                animation-name: fadeInRight;
                            "
                        >
                            <div class="icon-box">
                                <i class="flaticon-wifi"></i>
                            </div>

                            <h3>Bluetooth &amp; Wi-Fi</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et
                            </p>
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
                        <div
                            class="section-title wow fadeInUp"
                            style="
                                visibility: visible;
                                animation-name: fadeInUp;
                            "
                        >
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
                                        <h3>
                                            Different preset Signup &amp; Order
                                            forms ready to use.
                                        </h3>
                                        <p>
                                            Pri quas audiam virtute ut, case
                                            utamur fuisset eam ut, iisque
                                            accommodare an eam. Reque blandit
                                            qui eu, cu vix nonumy volumus.
                                            Legendos intellegam id usu, vide
                                            oporteat vix eu, id illud principes
                                            has.
                                        </p>
                                        <a href="#" class="btn-buynow"
                                            >Purchase Now</a
                                        >
                                    </div>
                                </div>

                                <div class="col-md-5 col-sm-5">
                                    <div
                                        class="about-image wow fadeInRight"
                                        data-wow-delay="0.2s"
                                        style="
                                            visibility: visible;
                                            animation-delay: 0.2s;
                                            animation-name: fadeInRight;
                                        "
                                    >
                                        <!-- <img
                                            src="{{ asset($template['assets'] . '/images/about-1.png') }}"
                                            alt=""
                                        /> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="about-product-single">
                            <div class="row">
                                <div class="col-md-7 col-sm-7 order-md-2">
                                    <div class="about-entry">
                                        <h4>Fresh News From The Labs</h4>
                                        <h3>
                                            Different preset Signup &amp; Order
                                            forms ready to use.
                                        </h3>
                                        <p>
                                            Pri quas audiam virtute ut, case
                                            utamur fuisset eam ut, iisque
                                            accommodare an eam. Reque blandit
                                            qui eu, cu vix nonumy volumus.
                                            Legendos intellegam id usu, vide
                                            oporteat vix eu, id illud principes
                                            has.
                                        </p>
                                        <a href="#" class="btn-buynow"
                                            >Purchase Now</a
                                        >
                                    </div>
                                </div>

                                <div class="col-md-5 col-sm-5 order-md-1">
                                    <div
                                        class="about-image wow fadeInLeft"
                                        data-wow-delay="0.4s"
                                        style="
                                            visibility: visible;
                                            animation-delay: 0.4s;
                                            animation-name: fadeInLeft;
                                        "
                                    >
                                        <!-- <img
                                            src="{{ asset($template['assets'] . '/images/about-2.png') }}"
                                            alt=""
                                        /> -->
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
        <section class="testimonials parallaxie" id="testimonial">
            <div class="container">
                <!-- Section Title start -->
                <div class="row">
                    <div class="col-md-12">
                        <div
                            class="section-title wow fadeInUp"
                            style="
                                visibility: visible;
                                animation-name: fadeInUp;
                            "
                        >
                            <p>Feedback</p>
                            <h2>What our clients say</h2>
                        </div>
                    </div>
                </div>
                <!-- Section Title end -->

                <div class="row">
                    <div class="col-md-12">
                        <div
                            class="swiper testimonials-slider swiper-coverflow swiper-3d swiper-initialized swiper-horizontal swiper-watch-progress"
                        >
                            <div
                                class="swiper-wrapper"
                                id="swiper-wrapper-7863bf9ad17d8bbf"
                                aria-live="off"
                                style="
                                    cursor: grab;
                                    transition-duration: 0ms;
                                    transform: translate3d(0px, 0px, 0px);
                                "
                            >
                                <!-- Client Review slide start -->
                                <div
                                    class="swiper-slide swiper-slide-visible swiper-slide-prev"
                                    style="
                                        width: 378.667px;
                                        transition-duration: 0ms;
                                        transform: translate3d(0px, 0px, -100px)
                                            rotateX(0deg) rotateY(50deg)
                                            scale(1);
                                        z-index: 0;
                                    "
                                    role="group"
                                    aria-label="1 / 6"
                                >
                                    <div class="testimonial-slide">
                                        <div class="author-info">
                                            <!-- <img
                                                src="{{ asset($template['assets'] . '/images/author-1.jpg') }}"
                                                alt=""
                                            /> -->
                                        </div>

                                        <div class="testimonial-entry">
                                            <p>
                                                Lorem Ipsum is simply dummy text
                                                of the printing and typesetting
                                                industry. Lorem Ipsum has been
                                                the industry's standard dummy
                                                text ever since the 1500s, when
                                                an unknown printer took a galley
                                                of type and scrambled it to make
                                                a type specimen book.
                                            </p>

                                            <h4>
                                                Harshad Patel
                                                <span>/ Web Designer</span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- Client Review slide end -->

                                <!-- Client Review slide start -->
                                <div
                                    class="swiper-slide swiper-slide-visible swiper-slide-active"
                                    style="
                                        width: 378.667px;
                                        transition-duration: 0ms;
                                        transform: translate3d(
                                                0px,
                                                0px,
                                                -0.0880282px
                                            )
                                            rotateX(0deg) rotateY(-0.0440141deg)
                                            scale(1);
                                        z-index: 1;
                                    "
                                    role="group"
                                    aria-label="2 / 6"
                                >
                                    <div class="testimonial-slide">
                                        <div class="author-info">
                                            <!-- <img
                                                src="{{ asset($template['assets'] . '/images/author-2.jpg') }}"
                                                alt=""
                                            /> -->
                                        </div>

                                        <div class="testimonial-entry">
                                            <p>
                                                Lorem Ipsum is simply dummy text
                                                of the printing and typesetting
                                                industry. Lorem Ipsum has been
                                                the industry's standard dummy
                                                text ever since the 1500s, when
                                                an unknown printer took a galley
                                                of type and scrambled it to make
                                                a type specimen book.
                                            </p>

                                            <h4>
                                                Jasmin Joshph
                                                <span>/ Front end</span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- Client Review slide end -->

                                <!-- Client Review slide start -->
                                <div
                                    class="swiper-slide swiper-slide-visible swiper-slide-next"
                                    style="
                                        width: 378.667px;
                                        transition-duration: 0ms;
                                        transform: translate3d(
                                                0px,
                                                0px,
                                                -99.912px
                                            )
                                            rotateX(0deg) rotateY(-49.956deg)
                                            scale(1);
                                        z-index: 0;
                                    "
                                    role="group"
                                    aria-label="3 / 6"
                                >
                                    <div class="testimonial-slide">
                                        <div class="author-info">
                                            <!-- <img
                                                src="{{ asset($template['assets'] . '/images/author-3.jpg') }}"
                                                alt=""
                                            /> -->
                                        </div>

                                        <div class="testimonial-entry">
                                            <p>
                                                Lorem Ipsum is simply dummy text
                                                of the printing and typesetting
                                                industry. Lorem Ipsum has been
                                                the industry's standard dummy
                                                text ever since the 1500s, when
                                                an unknown printer took a galley
                                                of type and scrambled it to make
                                                a type specimen book.
                                            </p>

                                            <h4>
                                                Sweta Silva
                                                <span>/ Back end</span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- Client Review slide end -->
                            </div>

                            <div
                                class="testimonial-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"
                            >
                                <span
                                    class="swiper-pagination-bullet"
                                    tabindex="0"
                                    role="button"
                                    aria-label="Go to slide 1"
                                ></span
                                ><span
                                    class="swiper-pagination-bullet swiper-pagination-bullet-active"
                                    tabindex="0"
                                    role="button"
                                    aria-label="Go to slide 2"
                                    aria-current="true"
                                ></span
                                ><span
                                    class="swiper-pagination-bullet"
                                    tabindex="0"
                                    role="button"
                                    aria-label="Go to slide 3"
                                ></span
                                ><span
                                    class="swiper-pagination-bullet"
                                    tabindex="0"
                                    role="button"
                                    aria-label="Go to slide 4"
                                ></span
                                ><span
                                    class="swiper-pagination-bullet"
                                    tabindex="0"
                                    role="button"
                                    aria-label="Go to slide 5"
                                ></span
                                ><span
                                    class="swiper-pagination-bullet"
                                    tabindex="0"
                                    role="button"
                                    aria-label="Go to slide 6"
                                ></span>
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
                        <div
                            class="section-title wow fadeInUp"
                            style="
                                visibility: visible;
                                animation-name: fadeInUp;
                            "
                        >
                            <p>Get it Today</p>
                            <h2>Get your Product today!</h2>
                        </div>

                        <div class="buynow-entry">
                            <p>
                                There are many variations of passages of Lorem
                                Ipsum available, but the majority have suffered
                                alteration in some form, by injected humour, or
                                randomised words which don't look even slightly
                                believable.
                            </p>

                            <a href="#" class="btn-buynow">Orderer Now</a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-4">
                        <div class="buynow-video">
                            <a
                                href="http://www.youtube.com/watch?v=JrbJ8dXzmnE"
                                class="popup-video"
                                ><i class="flaticon-play-button"></i
                            ></a>
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
                        <div
                            class="section-title wow fadeInUp"
                            style="
                                visibility: visible;
                                animation-name: fadeInUp;
                            "
                        >
                            <p>Get your Product</p>
                            <h2>Order Now</h2>
                        </div>

                        <!-- Contact Form start -->
                        <div class="contact-form">
                            <form
                                id="contactForm"
                                action="#"
                                method="post"
                                data-toggle="validator"
                                novalidate="true"
                            >
                                <div class="row">
                                    <div
                                        class="form-group mb-3 col-md-6 col-sm-6"
                                    >
                                        <label for="name" class="form-label"
                                            >Name:</label
                                        >
                                        <input
                                            type="text"
                                            name="name"
                                            id="name"
                                            class="form-control"
                                            placeholder="Enter Your Name"
                                            required=""
                                        />
                                        <div
                                            class="help-block with-errors"
                                        ></div>
                                    </div>

                                    <div
                                        class="form-group mb-3 col-md-6 col-sm-6"
                                    >
                                        <label for="mobile" class="form-label"
                                            >Mobile:</label
                                        >
                                        <input
                                            type="number"
                                            name="mobile"
                                            id="mobile"
                                            class="form-control"
                                            placeholder="Your Mobile Number"
                                            required=""
                                        />
                                        <div
                                            class="help-block with-errors"
                                        ></div>
                                    </div>

                                    <div
                                        class="form-group mb-3 col-md-12 col-sm-12"
                                    >
                                        <label for="quantity" class="form-label"
                                            >Quantity:</label
                                        >
                                        <input
                                            type="number"
                                            name="quantity"
                                            id="quantity"
                                            class="form-control"
                                            placeholder="Quantity"
                                            min="1"
                                            value="1"
                                            required=""
                                        />
                                        <div
                                            class="help-block with-errors"
                                        ></div>
                                    </div>

                                    <div
                                        class="form-group mb-3 col-md-12 col-sm-12"
                                    >
                                        <label for="address" class="form-label"
                                            >Address:</label
                                        >
                                        <textarea
                                            rows="8"
                                            name="address"
                                            id="address"
                                            placeholder="Address"
                                            class="form-control"
                                            required=""
                                        ></textarea>
                                        <div
                                            class="help-block with-errors"
                                        ></div>
                                    </div>

                                    <div class="col-md-12 col-sm-12">
                                        <button
                                            type="submit"
                                            class="btn-contact disabled"
                                        >
                                            Order Now
                                        </button>
                                        <div
                                            id="msgSubmit"
                                            class="h3 text-left hidden"
                                        ></div>
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
                            <a href="javascript:void(0);"
                                ><i class="fa-solid fa-chevron-up"></i
                            ></a>
                        </div>
                        <div class="footer-siteinfo">
                            <p>
                                Copyright © 2023, All Rights Reserved by
                                {{ user_template.company_name }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer section ends -->

        <!-- Modals -->
        <HeroButton @update="heroButtonSettings" />
        <HeroImage @update="heroImageSettings" />
    </div>
</template>

<script>
import HeroButton from "./components/hero-button.vue";
import HeroImage from "./components/hero-image.vue";

export default {
    name: "Ulaunch",
    props: ["user_template", "template"],
    components: {
        HeroButton,
        HeroImage,
    },
    data() {
        return {
            apiUrl: "",
            appUrl: "",
            heroTitle: "Hi! Welcome to Ulaunch.",
            heroDescription:
                "This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.",
            heroButton: [],
            heroImage: "",
            heroImageRaw: [],
            steps: [
                {
                    title: "Step 1",
                    description:
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                    icon: "uil uil-rocket",
                },
                {
                    title: "Step 2",
                    description:
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                    icon: "uil uil-rocket",
                },
                {
                    title: "Step 3",
                    description:
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                    icon: "uil uil-rocket",
                },
            ],
        };
    },
    mounted() {
        this.apiUrl = `${window.location.origin}/app/templates/ulaunch`;
        this.appUrl = `${window.location.origin}`;

        this.heroButton = {
            hero_button_title: "Product Details",
            hero_button_url: "#about",
            hero_button_color: "transparent",
            her_button_text_color: "white",
            hero_button_border_color: "white",
            hero_button_hover_color: "white",
            hero_button_hover_text_color: "black",
            hero_button_hover_border_color: "white",
        };

        this.heroImage = this.imageSource("images/header.png");
    },
    methods: {
        updateContent(event) {
            const rawContent = event.target.innerHTML;
            const sanitizedContent = rawContent.replace(/&nbsp;/g, " ");

            return sanitizedContent;
        },

        imageSource(path) {
            return `${this.appUrl}/${this.template.assets}/${path}`;
        },

        openModal(component) {},

        updateHeroTitle(event) {
            this.heroTitle = this.updateContent(event);
            this.updateHeroArea();
        },

        updateHeroDescription(event) {
            this.heroDescription = this.updateContent(event);
            this.updateHeroArea();
        },

        heroButtonSettings(data) {
            this.heroButton = {
                hero_button_title:
                    data.hero_button_title !== null &&
                    data.hero_button_title !== ""
                        ? data.hero_button_title
                        : this.heroButton.hero_button_title,
                hero_button_url:
                    data.hero_button_url !== null && data.hero_button_url !== ""
                        ? data.hero_button_url
                        : this.heroButton.hero_button_url,
                hero_button_color:
                    data.hero_button_color !== null &&
                    data.hero_button_color !== ""
                        ? data.hero_button_color
                        : this.heroButton.hero_button_color,
                hero_button_text_color:
                    data.hero_button_text_color !== null &&
                    data.hero_button_text_color !== ""
                        ? data.hero_button_text_color
                        : this.heroButton.hero_button_text_color,
                hero_button_border_color:
                    data.hero_button_border_color !== null &&
                    data.hero_button_border_color !== ""
                        ? data.hero_button_border_color
                        : this.heroButton.hero_button_border_color,
                hero_button_hover_color:
                    data.hero_button_hover_color !== null &&
                    data.hero_button_hover_color !== ""
                        ? data.hero_button_hover_color
                        : this.heroButton.hero_button_hover_color,
                hero_button_hover_text_color:
                    data.hero_button_hover_text_color !== null &&
                    data.hero_button_hover_text_color !== ""
                        ? data.hero_button_hover_text_color
                        : this.heroButton.hero_button_hover_text_color,
                hero_button_hover_border_color:
                    data.hero_button_hover_border_color !== null &&
                    data.hero_button_hover_border_color !== ""
                        ? data.hero_button_hover_border_color
                        : this.heroButton.hero_button_hover_border_color,
            };

            this.updateHeroArea();
        },

        heroImageSettings(data) {
            this.heroImage =
                data.hero_image !== null && data.hero_image !== ""
                    ? data.hero_image
                    : this.heroImage;
            this.heroImageRaw =
                data.hero_image_raw !== null && data.hero_image_raw !== ""
                    ? data.hero_image_raw
                    : this.heroImageRaw;
            this.updateHeroArea();
        },

        updateHeroArea() {
            const formData = new FormData();
            formData.append("hero_title", this.heroTitle);
            formData.append("hero_description", this.heroDescription);
            formData.append("hero_button", JSON.stringify(this.heroButton));
            formData.append("hero_image", this.heroImageRaw);

            axios
                .post(`${this.apiUrl}/update-hero-area`, formData, {
                    headers: {
                        "Content-Type": "multipart/form-data",
                    },
                })
                .then((response) => {
                    console.log(response.data);
                })
                .catch((error) => {
                    console.log(error);
                });
        },

        stepTitle(event, index) {
            this.steps[index].title = this.updateContent(event);
        },

        stepDescription(event, index) {
            this.steps[index].description = this.updateContent(event);
        },

        stepIcon(event, index) {
            this.steps[index].icon = event.target.innerHTML;
        },
    },
};
</script>
