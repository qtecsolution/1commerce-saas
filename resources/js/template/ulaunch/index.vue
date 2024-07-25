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
                                width="50"
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
                            <h2 contenteditable="true" @blur="updateHeroTitle">
                                {{ heroTitle }}
                            </h2>
                            <p
                                contenteditable="true"
                                @blur="updateHeroDescription"
                            >
                                {{ heroDescription }}
                            </p>
                            <div class="buy-button position-relative">
                                <a :href="heroButton.url" class="btn-buynow">
                                    {{ heroButton.title }}
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
                            <img
                                :src="heroImage"
                                :alt="user_template.company_name"
                            />
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
                                        class="step-single wow fadeInUp"
                                        data-wow-delay="0.2s"
                                        style="
                                            visibility: visible;
                                            animation-delay: 0.2s;
                                            animation-name: fadeInUp;
                                        "
                                    >
                                        <div class="icon-box">
                                            <IconPicker v-model="steps[0].icon" />
                                        </div>
                                        <h3
                                            contenteditable="true"
                                            @blur="
                                                updateStepItem(
                                                    $event,
                                                    'title',
                                                    1
                                                )
                                            "
                                        >
                                            {{ steps[0].title }}
                                        </h3>
                                        <p
                                            contenteditable="true"
                                            @blur="
                                                updateStepItem(
                                                    $event,
                                                    'description',
                                                    1
                                                )
                                            "
                                        >
                                            {{ steps[0].description }}
                                        </p>
                                    </div>
                                </div>
                                <!-- Step end -->
                                <!-- Step start -->
                                <div class="col-md-4 col-sm-4">
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
                                            <IconPicker v-model="steps[1].icon" />
                                        </div>
                                        <h3
                                            contenteditable="true"
                                            @blur="
                                                updateStepItem(
                                                    $event,
                                                    'title',
                                                    2
                                                )
                                            "
                                        >
                                            {{ steps[1].title }}
                                        </h3>
                                        <p
                                            contenteditable="true"
                                            @blur="
                                                updateStepItem(
                                                    $event,
                                                    'description',
                                                    2
                                                )
                                            "
                                        >
                                            {{ steps[1].description }}
                                        </p>
                                    </div>
                                </div>
                                <!-- Step end -->
                                <!-- Step start -->
                                <div class="col-md-4 col-sm-4">
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
                                            <IconPicker v-model="steps[2].icon" />
                                        </div>
                                        <h3
                                            contenteditable="true"
                                            @blur="stepTitle($event, 2)"
                                        >
                                            {{ steps[2].title }}
                                        </h3>
                                        <p
                                            contenteditable="true"
                                            @blur="stepDescription($event, 2)"
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
                            <p>{{ featureSubTitle }}</p>
                            <h2>{{ featureTitle }}</h2>
                        </div>
                    </div>
                </div>
                <!-- Section Title end -->

                <div class="row align-items-center">
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
                            v-for="(item, index) in featureList[0]"
                        >
                            <div class="icon-box">
                                <iconPicker v-model="features[index].icon" />
                            </div>

                            <h3 contenteditable="true" @blur="updateFeatureItem($event, 'title', index)">{{ item.title }}</h3>
                            <p contenteditable="true" @blur="updateFeatureItem($event, 'description', index)">
                                {{ item.description }}
                            </p>
                        </div>
                        <!-- Feature single end -->
                    </div>

                    <div class="col-lg-4">
                        <div
                            class="feature-image wow fadeInUp position-relative"
                            style="
                                visibility: visible;
                                animation-name: fadeInUp;
                            "
                        >
                            <div
                                class="position-absolute top-0 end-0 mt-2"
                                title="Image settings"
                            >
                                <div
                                    class="bg-primary text-white text-center rounded-circle cursor-pointer"
                                    style="width: 30px; height: 30px"
                                    data-bs-toggle="modal"
                                    data-bs-target="#featureImageModal"
                                >
                                    <i
                                        class="fas fa-cog"
                                        style="font-size: 20px; margin-top: 5px"
                                    ></i>
                                </div>
                            </div>
                            <img
                                :src="featureImage"
                                :alt="user_template.company_name"
                            />
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
                            v-for="(item, index) in featureList[1]"
                        >
                            <div class="icon-box">
                                <iconPicker v-model="features[index + 4].icon" />
                            </div>

                            <h3 contenteditable="true" @blur="updateFeatureItem($event, 'title', index + 4)">{{ item.title }}</h3>
                            <p contenteditable="true" @blur="updateFeatureItem($event, 'description', index + 4)">
                                {{ item.description }}
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
                            <p
                                @blur="updateAboutSubTitle"
                                contenteditable="true"
                            >
                                {{ aboutSubTitle }}
                            </p>
                            <h2 @blur="updateAboutTitle" contenteditable="true">
                                {{ aboutTitle }}
                            </h2>
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
                                        <h4
                                            @blur="
                                                updateAboutItem(
                                                    $event,
                                                    'sub_title',
                                                    1
                                                )
                                            "
                                            contenteditable="true"
                                        >
                                            {{ abouts[0].sub_title }}
                                        </h4>
                                        <h3
                                            @blur="
                                                updateAboutItem(
                                                    $event,
                                                    'title',
                                                    1
                                                )
                                            "
                                            contenteditable="true"
                                        >
                                            {{ abouts[0].title }}
                                        </h3>
                                        <p
                                            @blur="
                                                updateAboutItem(
                                                    $event,
                                                    'description',
                                                    1
                                                )
                                            "
                                            contenteditable="true"
                                        >
                                            {{ abouts[0].description }}
                                        </p>
                                        <div
                                            class="btn-wrapper position-relative"
                                        >
                                            <a
                                                :href="abouts[0].button.url"
                                                class="btn-buynow"
                                                >{{ abouts[0].button.title }}</a
                                            >

                                            <div
                                                class="position-absolute top-0 end-0 mt-2"
                                                title="Button settings"
                                            >
                                                <div
                                                    class="bg-primary text-white text-center rounded-circle cursor-pointer"
                                                    style="
                                                        width: 30px;
                                                        height: 30px;
                                                    "
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#about1ButtonModal"
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

                                <div class="col-md-5 col-sm-5">
                                    <div
                                        class="about-image wow fadeInRight position-relative"
                                        data-wow-delay="0.2s"
                                        style="
                                            visibility: visible;
                                            animation-delay: 0.2s;
                                            animation-name: fadeInRight;
                                        "
                                    >
                                        <div
                                            class="position-absolute top-0 end-0 mt-2"
                                            title="Image settings"
                                        >
                                            <div
                                                class="bg-primary text-white text-center rounded-circle cursor-pointer"
                                                style="
                                                    width: 30px;
                                                    height: 30px;
                                                "
                                                data-bs-toggle="modal"
                                                data-bs-target="#about1ImageModal"
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
                                        <img
                                            :src="abouts[0].image"
                                            :alt="user_template.company_name"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="about-product-single about-2">
                            <div class="row">
                                <div class="col-md-7 col-sm-7 order-md-2">
                                    <div class="about-entry">
                                        <h4
                                            @blur="
                                                updateAboutItem(
                                                    $event,
                                                    'sub_title',
                                                    2
                                                )
                                            "
                                            contenteditable="true"
                                        >
                                            {{ abouts[1].sub_title }}
                                        </h4>
                                        <h3
                                            @blur="
                                                updateAboutItem(
                                                    $event,
                                                    'title',
                                                    2
                                                )
                                            "
                                            contenteditable="true"
                                        >
                                            {{ abouts[1].title }}
                                        </h3>
                                        <p
                                            @blur="
                                                updateAboutItem(
                                                    $event,
                                                    'description',
                                                    2
                                                )
                                            "
                                            contenteditable="true"
                                        >
                                            {{ abouts[1].description }}
                                        </p>
                                        <div
                                            class="btn-wrapper position-relative"
                                        >
                                            <a
                                                :href="abouts[1].button.url"
                                                class="btn-buynow"
                                                >{{ abouts[1].button.title }}</a
                                            >

                                            <div
                                                class="position-absolute top-0 end-0 mt-2"
                                                title="Button settings"
                                            >
                                                <div
                                                    class="bg-primary text-white text-center rounded-circle cursor-pointer"
                                                    style="
                                                        width: 30px;
                                                        height: 30px;
                                                    "
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#about2ButtonModal"
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

                                <div class="col-md-5 col-sm-5 order-md-1">
                                    <div
                                        class="about-image wow fadeInLeft position-relative"
                                        data-wow-delay="0.4s"
                                        style="
                                            visibility: visible;
                                            animation-delay: 0.4s;
                                            animation-name: fadeInLeft;
                                        "
                                    >
                                        <div
                                            class="position-absolute top-0 start-0 mt-2"
                                            title="Image settings"
                                        >
                                            <div
                                                class="bg-primary text-white text-center rounded-circle cursor-pointer"
                                                style="
                                                    width: 30px;
                                                    height: 30px;
                                                "
                                                data-bs-toggle="modal"
                                                data-bs-target="#about2ImageModal"
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
                                        <img
                                            :src="abouts[1].image"
                                            :alt="user_template.company_name"
                                        />
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
                            <p
                                @blur="updateInfoSubTitle"
                                contenteditable="true"
                            >
                                {{ infoSubTitle }}
                            </p>
                            <h2 @blur="updateInfoTitle" contenteditable="true">
                                {{ infoTitle }}
                            </h2>
                        </div>

                        <div class="buynow-entry">
                            <p
                                @blur="updateInfoDescription"
                                contenteditable="true"
                            >
                                {{ infoDescription }}
                            </p>

                            <div class="btn-wrapper position-relative">
                                <a :href="infoButton.url" class="btn-buynow">{{ infoButton.title }}</a>

                                <div
                                    class="position-absolute top-0 end-0 mt-2"
                                    title="Button settings"
                                >
                                    <div
                                        class="bg-primary text-white text-center rounded-circle cursor-pointer"
                                        style="width: 30px; height: 30px"
                                        data-bs-toggle="modal"
                                        data-bs-target="#infoButtonModal"
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

                    <div class="col-lg-6 col-md-4">
                        <div class="buynow-video">
                            <a :href="infoVideo" class="popup-video"
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
                            <p
                                @blur="updateOrderSubTitle"
                                contenteditable="true"
                            >
                                {{ orderSubTitle }}
                            </p>
                            <h2 @blur="updateOrderTitle" contenteditable="true">
                                {{ orderTitle }}
                            </h2>
                        </div>

                        <!-- Contact Form start -->
                        <div class="alert alert-info">
                            <i class="fas fa-exclamation-triangle"></i>
                            Order Form is not editable.
                        </div>
                        <div class="contact-form">
                            <form
                                id="contactForm"
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
                                            id="name"
                                            class="form-control"
                                            placeholder="Muhaimin Shihab"
                                            readonly
                                        />
                                    </div>

                                    <div
                                        class="form-group mb-3 col-md-6 col-sm-6"
                                    >
                                        <label for="mobile" class="form-label"
                                            >Mobile:</label
                                        >
                                        <input
                                            type="number"
                                            id="mobile"
                                            class="form-control"
                                            placeholder="+880 1xxx-xxxxx3"
                                            readonly
                                        />
                                    </div>

                                    <div
                                        class="form-group mb-3 col-md-12 col-sm-12"
                                    >
                                        <label for="quantity" class="form-label"
                                            >Quantity:</label
                                        >
                                        <input
                                            type="number"
                                            id="quantity"
                                            class="form-control"
                                            value="1"
                                            readonly
                                        />
                                    </div>

                                    <div
                                        class="form-group mb-3 col-md-12 col-sm-12"
                                    >
                                        <label for="address" class="form-label"
                                            >Address:</label
                                        >
                                        <textarea
                                            rows="8"
                                            id="address"
                                            placeholder="DNCC, Dhaka-1229, Bangladesh"
                                            class="form-control"
                                            readonly
                                        ></textarea>
                                    </div>

                                    <div class="col-md-12 col-sm-12">
                                        <button
                                            type="button"
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
                                ><i class="fas fa-arrow-up"></i
                            ></a>
                        </div>
                        <div class="footer-siteinfo">
                            <p @blur="updateFooterText" contenteditable="true">
                                {{ footerText }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer section ends -->

        <!-- Modals -->
        <ImageModal
            modalId="heroImageModal"
            modalTitle="Horo Image"
            section="hero"
            @update="updateImage"
        />
        <ImageModal
            modalId="featureImageModal"
            modalTitle="Feature Image"
            section="feature"
            @update="updateImage"
        />
        <ImageModal
            modalId="about1ImageModal"
            modalTitle="About Image"
            section="about-1"
            @update="updateImage"
        />
        <ImageModal
            modalId="about2ImageModal"
            modalTitle="About Image"
            section="about-2"
            @update="updateImage"
        />

        <ButtonModal
            modalId="heroButtonModal"
            modalTitle="Hero Button"
            section="hero"
            @update="updateButton"
        />
        <ButtonModal
            modalId="about1ButtonModal"
            modalTitle="About Button"
            section="about-1"
            @update="updateButton"
        />
        <ButtonModal
            modalId="about2ButtonModal"
            modalTitle="About Button"
            section="about-2"
            @update="updateButton"
        />
        <ButtonModal
            modalId="infoButtonModal"
            modalTitle="Info Button"
            section="info"
            @update="updateButton"
        />
    </div>
</template>

<script>
import ButtonModal from "./components/button-modal.vue";
import ImageModal from "./components/image-modal.vue";
import IconPicker from "../../icon-picker/IconPicker.vue";

export default {
    name: "Ulaunch",
    props: ["user_template", "template"],
    components: {
        ImageModal,
        ButtonModal,
        IconPicker
    },
    data() {
        return {
            apiUrl: "",
            appUrl: "",

            heroTitle: "Present your awesome product.",
            heroDescription:
                "Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum necessitatibus praesentium voluptatum deleniti atque corrupti, quos dolores eos.",
            heroButton: [],
            heroImage: "",
            heroImageRaw: [],

            steps: [
                {
                    title: "Step 1",
                    description:
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                    icon: "flaticon-login",
                },
                {
                    title: "Step 2",
                    description:
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                    icon: "flaticon-login-1",
                },
                {
                    title: "Step 3",
                    description:
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                    icon: "flaticon-shopping-cart",
                },
            ],

            featureTitle: "Product Features",
            featureSubTitle: "Explore the awesome",
            featureImage: "",
            featureImageRaw: "",
            features: [
                {
                    title: "Dual Processor",
                    description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et",
                    icon: "flaticon-cpu"
                },
                {
                    title: "Gold aluminum",
                    description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et",
                    icon: "flaticon-cpu"
                },
                {
                    title: "Ion-X glass",
                    description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et",
                    icon: "flaticon-cpu"
                },
                {
                    title: "Heart rate sensor",
                    description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et",
                    icon: "flaticon-cpu"
                },
                {
                    title: "Force Touch",
                    description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et",
                    icon: "flaticon-cpu"
                },
                {
                    title: "Retina display",
                    description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et",
                    icon: "flaticon-cpu"
                },
                {
                    title: "Fire Speaker",
                    description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et",
                    icon: "flaticon-cpu"
                },
                {
                    title: "Bluetooth & Wi-Fi",
                    description: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et",
                    icon: "flaticon-cpu"
                }
            ],

            aboutTitle: "About Product",
            aboutSubTitle: "BEAUTY MEETS FUNCTIONALITY",
            abouts: [
                {
                    title: "Different preset Signup & Order forms ready to use.",
                    sub_title: "FRESH NEWS FROM THE LABS",
                    description:
                        "Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has.",
                    button: [],
                    image: "",
                    image_raw: [],
                },
                {
                    title: "Different preset Signup & Order forms ready to use.",
                    sub_title: "FRESH NEWS FROM THE LABS",
                    description:
                        "Pri quas audiam virtute ut, case utamur fuisset eam ut, iisque accommodare an eam. Reque blandit qui eu, cu vix nonumy volumus. Legendos intellegam id usu, vide oporteat vix eu, id illud principes has.",
                    button: [],
                    image: "",
                    image_raw: [],
                },
            ],

            infoSubTitle: "GET IT TODAY",
            infoTitle: "Get your Product today!",
            infoDescription:
                "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.",
            infoButton: [],
            infoVideo: "https://youtube.com",

            orderTitle: "Order Now",
            orderSubTitle: "GET YOUR PRODUCT",

            footerText: "Copyright © 2024, All Rights Reserved.",
        };
    },
    computed: {
        featureList: function () {
            const row_1 = this.features.slice(0, this.features.length / 2);
            const row_2 = this.features.slice(this.features.length / 2, this.features.length);

            return [row_1, row_2];
        }
    },
    mounted() {
        this.apiUrl = `${window.location.origin}/app/templates/ulaunch`;
        this.appUrl = `${window.location.origin}`;

        this.heroButton = {
            title: "Product Details",
            url: "#features",
            color: "transparent",
            text_color: "white",
            border_color: "white",
            hover_color: "white",
            hover_text_color: "black",
            hover_border_color: "white",
        };

        this.abouts[0].button = {
            title: "Purchase Now",
            url: "#order",
            color: "transparent",
            text_color: "#20bea7",
            border_color: "#20bea7",
            hover_color: "#20bea7",
            hover_text_color: "white",
            hover_border_color: "#20bea7",
        };

        this.abouts[1].button = {
            title: "Purchase Now",
            url: "#order",
            color: "transparent",
            text_color: "#20bea7",
            border_color: "#20bea7",
            hover_color: "#20bea7",
            hover_text_color: "white",
            hover_border_color: "#20bea7",
        };

        this.infoButton = {
            title: "Purchase Now",
            url: "#order",
            color: "transparent",
            text_color: "#20bea7",
            border_color: "#20bea7",
            hover_color: "#20bea7",
            hover_text_color: "white",
            hover_border_color: "#20bea7",
        };

        this.heroImage = this.imageSource("images/header.png");
        this.featureImage = this.imageSource("images/feature.png");
        this.abouts[0].image = this.imageSource("images/about-1.png");
        this.abouts[1].image = this.imageSource("images/about-2.png");
    },
    methods: {
        updateContent(event) {
            const rawContent = event.target.innerHTML;
            const sanitizedContent = rawContent.replace(/&nbsp;/g, " ");
            // const updatedContent = sanitizedContent.trim() + " ";

            return sanitizedContent;
        },

        updateImage(data) {
            switch (data.section) {
                case "hero":
                    this.heroImage =
                        data.image !== null && data.image !== ""
                            ? data.image
                            : this.heroImage;
                    this.heroImageRaw =
                        data.image_raw !== null && data.image_raw !== ""
                            ? data.image_raw
                            : this.heroImageRaw;

                    this.updateHeroArea();

                    break;

                case "feature":
                    this.featureImage =
                        data.image !== null && data.image !== ""
                            ? data.image
                            : this.featureImage;
                    this.featureImageRaw =
                        data.image_raw !== null && data.image_raw !== ""
                            ? data.image_raw
                            : this.featureImageRaw;

                    break;

                case "about-1":
                    this.abouts[0].image =
                        data.image !== null && data.image !== ""
                            ? data.image
                            : this.abouts[0].image;
                    this.abouts[0].image_raw =
                        data.image_raw !== null && data.image_raw !== ""
                            ? data.image_raw
                            : this.abouts[0].image_raw;

                    break;

                case "about-2":
                    this.abouts[1].image =
                        data.image !== null && data.image !== ""
                            ? data.image
                            : this.abouts[1].image;
                    this.abouts[1].image_raw =
                        data.image_raw !== null && data.image_raw !== ""
                            ? data.image_raw
                            : this.abouts[1].image_raw;

                    break;

                default:
                    console.warn("Something is wrong. Try again later.");
                    break;
            }
        },

        updateButton(data) {
            switch (data.section) {
                case "hero":
                    this.updateHeroButton(data);
                    break;

                case "about-1":
                    this.updateAboutButton(data, 0);
                    break;

                case "about-2":
                    this.updateAboutButton(data, 1);
                    break;

                case "info":
                    this.updateInfoButton(data);
                    break;

                default:
                    console.warn("Something is wrong. Try again later.");
                    break;
            }
        },

        imageSource(path) {
            return `${this.appUrl}/${this.template.assets}/${path}`;
        },

        updateHeroTitle(event) {
            this.heroTitle = this.updateContent(event);
            this.updateHeroArea();
        },

        updateHeroDescription(event) {
            this.heroDescription = this.updateContent(event);
            this.updateHeroArea();
        },

        updateHeroButton(data) {
            this.heroButton = {
                title:
                    data.title !== null && data.title !== ""
                        ? data.title
                        : this.heroButton.title,
                url:
                    data.url !== null && data.url !== ""
                        ? data.url
                        : this.heroButton.url,
                color:
                    data.color !== null && data.color !== ""
                        ? data.color
                        : this.heroButton.color,
                text_color:
                    data.text_color !== null && data.text_color !== ""
                        ? data.text_color
                        : this.heroButton.text_color,
                border_color:
                    data.border_color !== null && data.border_color !== ""
                        ? data.border_color
                        : this.heroButton.border_color,
                hover_color:
                    data.hover_color !== null && data.hover_color !== ""
                        ? data.hover_color
                        : this.heroButton.hover_color,
                hover_text_color:
                    data.hover_text_color !== null &&
                    data.hover_text_color !== ""
                        ? data.hover_text_color
                        : this.heroButton.hover_text_color,
                hover_border_color:
                    data.hover_border_color !== null &&
                    data.hover_border_color !== ""
                        ? data.hover_border_color
                        : this.heroButton.hover_border_color,
            };

            this.updateHeroArea();
        },

        updateHeroArea() {
            return false;

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

        updateStepItem(event, section, index) {
            this.steps[index - 1][section] = this.updateContent(event);
        },

        updateFeatureItem(event, section, index) {
            this.features[index][section] = this.updateContent(event);
        },

        updateAboutSubTitle(event) {
            this.aboutSubTitle = this.updateContent(event);
        },

        updateAboutTitle(event) {
            this.aboutTitle = this.updateContent(event);
        },

        updateAboutItem(event, section, index) {
            this.abouts[index - 1][section] = this.updateContent(event);
        },

        updateAboutButton(data, index) {
            this.abouts[index].button = {
                title:
                    data.title !== null && data.title !== ""
                        ? data.title
                        : this.abouts[index].button.title,
                url:
                    data.url !== null && data.url !== ""
                        ? data.url
                        : this.abouts[index].button.url,
                color:
                    data.color !== null && data.color !== ""
                        ? data.color
                        : this.abouts[index].button.color,
                text_color:
                    data.text_color !== null && data.text_color !== ""
                        ? data.text_color
                        : this.abouts[index].button.text_color,
                border_color:
                    data.border_color !== null && data.border_color !== ""
                        ? data.border_color
                        : this.abouts[index].button.border_color,
                hover_color:
                    data.hover_color !== null && data.hover_color !== ""
                        ? data.hover_color
                        : this.abouts[index].button.hover_color,
                hover_text_color:
                    data.hover_text_color !== null &&
                    data.hover_text_color !== ""
                        ? data.hover_text_color
                        : this.abouts[index].button.hover_text_color,
                hover_border_color:
                    data.hover_border_color !== null &&
                    data.hover_border_color !== ""
                        ? data.hover_border_color
                        : this.abouts[index].button.hover_border_color,
            };
        },

        updateInfoSubTitle(event) {
            this.infoSubTitle = this.updateContent(event);
        },

        updateInfoTitle(event) {
            this.infoTitle = this.updateContent(event);
        },

        updateInfoDescription(event) {
            this.infoDescription = this.updateContent(event);
        },

        updateInfoButton(data) {
            this.infoButton = {
                title:
                    data.title !== null && data.title !== ""
                        ? data.title
                        : this.infoButton.title,
                url:
                    data.url !== null && data.url !== ""
                        ? data.url
                        : this.infoButton.url,
                color:
                    data.color !== null && data.color !== ""
                        ? data.color
                        : this.infoButton.color,
                text_color:
                    data.text_color !== null && data.text_color !== ""
                        ? data.text_color
                        : this.infoButton.text_color,
                border_color:
                    data.border_color !== null && data.border_color !== ""
                        ? data.border_color
                        : this.infoButton.border_color,
                hover_color:
                    data.hover_color !== null && data.hover_color !== ""
                        ? data.hover_color
                        : this.infoButton.hover_color,
                hover_text_color:
                    data.hover_text_color !== null &&
                    data.hover_text_color !== ""
                        ? data.hover_text_color
                        : this.infoButton.hover_text_color,
                hover_border_color:
                    data.hover_border_color !== null &&
                    data.hover_border_color !== ""
                        ? data.hover_border_color
                        : this.infoButton.hover_border_color,
            };
        },

        updateOrderSubTitle(event) {
            this.orderSubTitle = this.updateContent(event);
        },

        updateOrderTitle(event) {
            this.orderTitle = this.updateContent(event);
        },

        updateFooterText(event) {
            this.footerText = this.updateContent(event);
        },
    },
};
</script>

<style scoped>
.btn-buynow {
    background-color: v-bind("heroButton.color");
    color: v-bind("heroButton.text_color");
    border-color: v-bind("heroButton.border_color");
}

.btn-buynow:hover {
    background-color: v-bind("heroButton.hover_color") !important;
    color: v-bind("heroButton.hover_text_color");
    border-color: v-bind("heroButton.hover_border_color");
}

.about-1 .btn-buynow {
    background-color: v-bind("abouts[0].button.color");
    color: v-bind("abouts[0].button.text_color");
    border-color: v-bind("abouts[0].button.border_color");
}

.about-1 .btn-buynow:hover {
    background-color: v-bind("abouts[0].button.hover_color") !important;
    color: v-bind("abouts[0].button.hover_text_color");
    border-color: v-bind("abouts[0].button.hover_border_color");
}

.about-2 .btn-buynow {
    background-color: v-bind("abouts[1].button.color");
    color: v-bind("abouts[1].button.text_color");
    border-color: v-bind("abouts[1].button.border_color");
}

.about-2 .btn-buynow:hover {
    background-color: v-bind("abouts[1].button.hover_color") !important;
    color: v-bind("abouts[1].button.hover_text_color");
    border-color: v-bind("abouts[1].button.hover_border_color");
}

.buynow-infobar .btn-buynow {
    background-color: v-bind("infoButton.color");
    color: v-bind("infoButton.text_color");
    border-color: v-bind("infoButton.border_color");
}

.buynow-infobar .btn-buynow:hover {
    background-color: v-bind("infoButton.hover_color") !important;
    color: v-bind("infoButton.hover_text_color");
    border-color: v-bind("infoButton.hover_border_color");
}
</style>
