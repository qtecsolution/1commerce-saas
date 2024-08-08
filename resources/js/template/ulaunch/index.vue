<template>
    <div id="main-wrapper">
        <!-- Header Section Starts-->
        <header>
            <nav
                class="navbar navbar-expand-lg fixed-top navbar-scrollspy main-menu"
                ref="navbarMenu"
            >
                <div class="container">
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="javascript:void(0)">
                            <img
                                :src="companyLogo"
                                width="50"
                                class="logo"
                                :alt="user_template.company_name"
                            />

                            <div
                                class="position-absolute top-0 start-0 ms-2 mt-2"
                                title="Logo settings"
                            >
                                <div
                                    class="bg-primary text-white text-center rounded-circle cursor-pointer"
                                    style="width: 30px; height: 30px"
                                    data-bs-toggle="modal"
                                    data-bs-target="#logoImageModal"
                                >
                                    <i
                                        class="fas fa-cog"
                                        style="font-size: 20px; margin-top: 5px"
                                    ></i>
                                </div>
                            </div>
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
                            <span class="fas fa-bars"></span>
                        </button>
                    </div>
                    <ColorPicker
                        section="nav"
                        :color="navBg"
                        @update="updateColor"
                        v-if="stickyHeader"
                        :style="{ margin: '15px 0 0 25%' }"
                    />
                    <!-- End Header Navigation -->

                    <!-- Navbar Start -->
                    <div class="collapse navbar-collapse main-nav">
                        <ul class="navbar-nav nav ml-auto mr-md-3">
                            <li
                                class="nav-item"
                                v-for="(menu, index) in menus"
                                :key="index"
                                :class="{ active: index == 0 }"
                            >
                                <a
                                    :href="menu.url"
                                    class="nav-link"
                                    contenteditable="true"
                                    @blur="updateMenuItem($event, index)"
                                    >{{ menu.title }}</a
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
        <section
            class="banner parallaxie position-relative"
            id="home"
            :style="{ backgroundColor: heroBg }"
        >
            <ColorPicker
                section="hero"
                :color="heroBg"
                @update="updateColor"
                :style="{ margin: '100px 0 0 10px' }"
            />
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
                                <div
                                    class="col-md-4 col-sm-4"
                                    v-for="(step, index) in steps"
                                    :key="index"
                                >
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
                                            <IconPicker
                                                v-model="step.icon"
                                                @update="updateStepsArea"
                                            />
                                        </div>
                                        <h3
                                            contenteditable="true"
                                            @blur="
                                                updateStepItem(
                                                    $event,
                                                    'title',
                                                    index + 1
                                                )
                                            "
                                        >
                                            {{ step.title }}
                                        </h3>
                                        <p
                                            contenteditable="true"
                                            @blur="
                                                updateStepItem(
                                                    $event,
                                                    'description',
                                                    index + 1
                                                )
                                            "
                                        >
                                            {{ step.description }}
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
        <section
            class="features position-relative"
            id="features"
            :style="{ backgroundColor: featureBg }"
        >
            <ColorPicker
                section="feature"
                :color="featureBg"
                @update="updateColor"
                :style="{ margin: '50px 0 0 10px' }"
            />
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
                                contenteditable="true"
                                @blur="updateFeatureSubTitle"
                            >
                                {{ featureSubTitle }}
                            </p>
                            <h2
                                contenteditable="true"
                                @blur="updateFeatureTitle"
                            >
                                {{ featureTitle }}
                            </h2>
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
                            :key="item.id"
                        >
                            <div class="icon-box">
                                <iconPicker
                                    v-model="item.icon"
                                    @update="updateFeaturesArea"
                                />
                            </div>

                            <h3
                                contenteditable="true"
                                @blur="
                                    updateFeatureItem($event, 'title', index)
                                "
                            >
                                {{ item.title }}
                            </h3>
                            <p
                                contenteditable="true"
                                @blur="
                                    updateFeatureItem(
                                        $event,
                                        'description',
                                        index
                                    )
                                "
                            >
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
                            :key="item.id"
                        >
                            <div class="icon-box">
                                <iconPicker
                                    v-model="item.icon"
                                    @update="updateFeaturesArea"
                                />
                            </div>

                            <h3
                                contenteditable="true"
                                @blur="
                                    updateFeatureItem(
                                        $event,
                                        'title',
                                        index + 4
                                    )
                                "
                            >
                                {{ item.title }}
                            </h3>
                            <p
                                contenteditable="true"
                                @blur="
                                    updateFeatureItem(
                                        $event,
                                        'description',
                                        index + 4
                                    )
                                "
                            >
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
        <section
            class="about-product position-relative"
            id="about"
            :style="{ backgroundColor: aboutBg }"
        >
            <ColorPicker
                section="about"
                :color="aboutBg"
                @update="updateColor"
                :style="{ margin: '100px 0 0 10px' }"
            />
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
        <section
            class="testimonials parallaxie position-relative"
            id="testimonials"
            :style="{ backgroundColor: testimonialBg }"
        >
            <ColorPicker
                section="testimonials"
                :color="testimonialBg"
                @update="updateColor"
                :style="{ margin: '100px 0 0 10px' }"
            />
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
                                contenteditable="true"
                                @blur="updateTestimonialSubTitle"
                            >
                                {{ testimonialSubTitle }}
                            </p>
                            <h2
                                contenteditable="true"
                                @blur="updateTestimonialTitle"
                            >
                                {{ testimonialTitle }}
                            </h2>
                        </div>
                    </div>
                </div>
                <!-- Section Title end -->

                <div class="row mt-5">
                    <!-- Client Review slide start -->
                    <div
                        class="col-md-4"
                        v-for="(testimonial, index) in testimonials"
                        :key="index"
                    >
                        <div class="card">
                            <div class="card-body">
                                <div class="author-info">
                                    <div
                                        class="position-absolute top-0 end-0 mt-2"
                                        title="Image settings"
                                    >
                                        <div
                                            class="bg-primary text-white text-center rounded-circle cursor-pointer"
                                            style="width: 30px; height: 30px"
                                            data-bs-toggle="modal"
                                            :data-bs-target="
                                                '#testimonial' +
                                                (index + 1) +
                                                'ImageModal'
                                            "
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
                                        :src="testimonial.reviewer_image"
                                        :alt="user_template.company_name"
                                    />
                                </div>

                                <div class="testimonial-entry mt-5">
                                    <p
                                        contenteditable="true"
                                        @blur="
                                            updateTestimonialItem(
                                                $event,
                                                'review',
                                                index
                                            )
                                        "
                                    >
                                        {{ testimonial.review }}
                                    </p>

                                    <h4
                                        class="d-inline"
                                        contenteditable="true"
                                        @blur="
                                            updateTestimonialItem(
                                                $event,
                                                'reviewer_name',
                                                index
                                            )
                                        "
                                    >
                                        {{ testimonial.reviewer_name }}
                                    </h4>
                                    <span class="d-inline mx-1">/</span>
                                    <p
                                        class="d-inline"
                                        contenteditable="true"
                                        @blur="
                                            updateTestimonialItem(
                                                $event,
                                                'reviewer_bio',
                                                index
                                            )
                                        "
                                    >
                                        {{ testimonial.reviewer_bio }}
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
        <div
            class="buynow-infobar parallaxie position-relative"
            :style="{ backgroundColor: infoBg }"
        >
            <ColorPicker
                section="info"
                :color="infoBg"
                @update="updateColor"
                :style="{ margin: '20px 0 0 10px' }"
            />
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                        <div
                            class="section-title wow fadeInUp text-center"
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

                        <div class="buynow-entry text-center">
                            <p
                                @blur="updateInfoDescription"
                                contenteditable="true"
                            >
                                {{ infoDescription }}
                            </p>

                            <div class="btn-wrapper position-relative">
                                <a :href="infoButton.url" class="btn-buynow">{{
                                    infoButton.title
                                }}</a>

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
                </div>
            </div>
        </div>
        <!-- Buy Now infobar section ends -->

        <!-- Order Now section starts -->
        <section
            class="order_area position-relative"
            id="order"
            :style="{ backgroundColor: orderBg }"
        >
            <ColorPicker
                section="order"
                :color="orderBg"
                @update="updateColor"
                :style="{ margin: '100px 0 0 10px' }"
            />
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
                        <div class="card bg-white shadow border-0 mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div
                                        class="col-md-8"
                                        contenteditable="true"
                                        @blur="updateProductName"
                                    >
                                        {{
                                            this.user_template.product_name ??
                                            ""
                                        }}
                                    </div>
                                    <div class="col-md-4 text-end">
                                        <span
                                            style="margin-right: 5px"
                                            contenteditable="true"
                                            @blur="updateProductCurrency"
                                            >{{
                                                this.user_template
                                                    .product_currency ?? "৳"
                                            }}</span
                                        >
                                        <span
                                            contenteditable="true"
                                            @blur="updateProductPrice"
                                            >{{
                                                this.user_template
                                                    .product_price ?? 0
                                            }}</span
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
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

                                    <div
                                        class="col-md-6 col-sm-12 position-relative"
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
                                                data-bs-target="#orderButtonModal"
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
                                        <button
                                            type="button"
                                            class="btn-contact disabled"
                                        >
                                            {{ orderButton.title }}
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
        <footer
            class="position-relative"
            id="footer"
            :style="{ backgroundColor: footerBg }"
        >
            <ColorPicker
                section="footer"
                :color="footerBg"
                @update="updateColor"
                :style="{ margin: '10px 0 0 10px' }"
            />
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
            modalId="logoImageModal"
            modalTitle="logo Image"
            section="logo"
            @update="updateImage"
        />
        <ImageModal
            modalId="heroImageModal"
            modalTitle="Hero Image"
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
        <ImageModal
            v-for="(testimonial, index) in testimonials"
            :key="index"
            :modalId="'testimonial' + (index + 1) + 'ImageModal'"
            :modalTitle="'Testimonial Image ' + (index + 1)"
            :section="'testimonial-' + (index + 1)"
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
        <ButtonModal
            modalId="orderButtonModal"
            modalTitle="Order Button"
            section="order"
            @update="updateButton"
        />
    </div>
</template>

<script>
import ButtonModal from "./components/button-modal.vue";
import ImageModal from "./components/image-modal.vue";
import IconPicker from "../../icon-picker/IconPicker.vue";
import ColorPicker from "./components/color-picker.vue";

export default {
    name: "Ulaunch",
    props: ["user_template", "template"],
    components: {
        ImageModal,
        ButtonModal,
        IconPicker,
        ColorPicker,
    },
    data() {
        return {
            apiUrl: "",
            appUrl: "",

            // menu area
            menus: [
                {
                    title: "Home",
                    url: "#home",
                },
                {
                    title: "Features",
                    url: "#features",
                },
                {
                    title: "About",
                    url: "#about",
                },
                {
                    title: "Testimonials",
                    url: "#testimonials",
                },
                {
                    title: "Order",
                    url: "#order",
                },
            ],

            // hero area
            heroTitle: "Best quality smart watch only at Tk 2000.",
            heroDescription:
                "Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum necessitatibus praesentium voluptatum deleniti atque corrupti, quos dolores eos.",
            heroButton: [],
            heroImage: "",
            heroImageRaw: [],
            heroBg: "#20bea7",
            navBg: "#20bea7",

            // steps area
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

            // feature area
            featureTitle: "Product Features",
            featureSubTitle: "Explore the awesome",
            featureImage: "",
            featureImageRaw: "",
            featureBg: "#f7f7f7",
            features: [
                {
                    title: "Dual Processor",
                    description:
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et",
                    icon: "flaticon-cpu",
                },
                {
                    title: "Gold aluminum",
                    description:
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et",
                    icon: "flaticon-cpu",
                },
                {
                    title: "Ion-X glass",
                    description:
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et",
                    icon: "flaticon-cpu",
                },
                {
                    title: "Heart rate sensor",
                    description:
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et",
                    icon: "flaticon-cpu",
                },
                {
                    title: "Force Touch",
                    description:
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et",
                    icon: "flaticon-cpu",
                },
                {
                    title: "Retina display",
                    description:
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et",
                    icon: "flaticon-cpu",
                },
                {
                    title: "Fire Speaker",
                    description:
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et",
                    icon: "flaticon-cpu",
                },
                {
                    title: "Bluetooth & Wi-Fi",
                    description:
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et",
                    icon: "flaticon-cpu",
                },
            ],

            // about area
            aboutTitle: "About Product",
            aboutSubTitle: "BEAUTY MEETS FUNCTIONALITY",
            aboutBg: "#ffffff",
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

            // testimonial area
            testimonialSubTitle: "FEEDBACK",
            testimonialTitle: "What our clients say",
            testimonialBg: "#20bea7",
            testimonials: [
                {
                    review: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    reviewer_name: "Muhaimin Shihab",
                    reviewer_bio: "Customer",
                    reviewr_image: "",
                    reviewer_image_raw: [],
                },
                {
                    review: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    reviewer_name: "Asaduzzaman",
                    reviewer_bio: "Customer",
                    reviewr_image: "",
                    reviewer_image_raw: [],
                },
                {
                    review: "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
                    reviewer_name: "Harshad Patel",
                    reviewer_bio: "NM Babor",
                    reviewr_image: "",
                    reviewer_image_raw: [],
                },
            ],

            // info area
            infoSubTitle: "GET IT TODAY",
            infoTitle: "Get your Product today!",
            infoDescription:
                "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.",
            infoButton: [],
            infoVideo: "https://youtube.com",
            infoBg: "#f7f7f7",

            // order area
            orderTitle: "Order Now",
            orderSubTitle: "GET YOUR PRODUCT",
            orderBg: "#ffffff",
            orderButton: [],

            // prduct info
            productName: "",
            productPrice: "",
            productCurrency: "",
            companyLogo: "",
            companyLogoRaw: "",

            // footer area
            footerText: "Copyright © 2024, All Rights Reserved.",
            footerBg: "#263238",
            stickyHeader: false,
        };
    },
    computed: {
        featureList: function () {
            const row_1 = this.features.slice(0, this.features.length / 2);
            const row_2 = this.features.slice(
                this.features.length / 2,
                this.features.length
            );

            return [row_1, row_2];
        },
    },
    mounted() {
        window.addEventListener("scroll", this.checkStickyHeader);
        // console.log(this.features);

        this.appUrl = `${window.location.origin}`;
        this.apiUrl = `${window.location.origin}/app/templates/ulaunch`;

        // menu area
        const menuArea =
            this.template.menu_area != null
                ? JSON.parse(this.template.menu_area)
                : null;

        this.menus = menuArea != null ? menuArea : this.menus;

        // hero area
        const heroArea =
            this.template.hero_area != null
                ? JSON.parse(this.template.hero_area)
                : null;

        this.heroBg =
            heroArea != null ? heroArea.background_color : this.heroBg;
        this.heroTitle = heroArea != null ? heroArea.title : this.heroTitle;
        this.heroDescription =
            heroArea != null ? heroArea.description : this.heroDescription;
        this.heroImage =
            heroArea != null && heroArea.image
                ? this.imageSource(heroArea.image, "storage")
                : this.imageSource("images/header.png");

        const defaultHeroButton = {
            title: "Product Details",
            url: "#features",
            color: "transparent",
            text_color: "white",
            border_color: "white",
            hover_color: "white",
            hover_text_color: "black",
            hover_border_color: "white",
        };
        this.heroButton =
            heroArea != null ? heroArea.button : defaultHeroButton;

        // steps area
        this.steps =
            this.template.steps.length > 0 ? this.template.steps : this.steps;

        // feature area
        const featuresArea =
            this.template.features_area != null
                ? JSON.parse(this.template.features_area)
                : null;

        this.featureBg =
            featuresArea != null
                ? featuresArea.background_color
                : this.featureBg;
        this.featureTitle =
            featuresArea != null ? featuresArea.title : this.featureTitle;
        this.featureSubTitle =
            featuresArea != null
                ? featuresArea.sub_title
                : this.featureSubTitle;
        this.featureImage =
            featuresArea != null && featuresArea.image != null
                ? this.imageSource(featuresArea.image, "storage")
                : this.imageSource("images/feature.png");
        this.features =
            this.template.features.length > 0
                ? this.template.features
                : this.features;

        // about area
        const aboutArea = this.template.about_area
            ? JSON.parse(this.template.about_area)
            : null;

        this.aboutBg =
            aboutArea != null ? aboutArea.background_color : this.aboutBg;
        this.aboutTitle = aboutArea?.title || this.aboutTitle;
        this.aboutSubTitle = aboutArea?.sub_title || this.aboutSubTitle;
        this.abouts = aboutArea?.items || this.abouts;

        const defaultAboutButton = {
            title: "Purchase Now",
            url: "#order",
            color: "transparent",
            text_color: "#20bea7",
            border_color: "#20bea7",
            hover_color: "#20bea7",
            hover_text_color: "white",
            hover_border_color: "#20bea7",
        };

        if (!aboutArea) {
            this.abouts[0].button = defaultAboutButton;
            this.abouts[1].button = defaultAboutButton;
        }

        const defaultAboutImages = ["images/about-1.png", "images/about-2.png"];
        this.abouts.forEach((about, index) => {
            about.image = aboutArea?.items[index]?.image
                ? this.imageSource(aboutArea.items[index].image, "storage")
                : this.imageSource(defaultAboutImages[index]);
        });

        // info area
        const infoArea =
            this.template.info_area != null
                ? JSON.parse(this.template.info_area)
                : null;

        this.infoBg =
            infoArea != null ? infoArea.background_color : this.infoBg;
        this.infoTitle = infoArea != null ? infoArea.title : this.infoTitle;
        this.infoSubTitle =
            infoArea != null ? infoArea.sub_title : this.infoSubTitle;
        this.infoVideo = infoArea != null ? infoArea.video : this.infoVideo;

        const defaultInfoButton = {
            title: "Purchase Now",
            url: "#order",
            color: "transparent",
            text_color: "#20bea7",
            border_color: "#20bea7",
            hover_color: "#20bea7",
            hover_text_color: "white",
            hover_border_color: "#20bea7",
        };

        this.infoButton =
            infoArea != null ? infoArea.button : defaultInfoButton;

        // testimonial area
        const testimonialsArea =
            this.template.testimonials_area != null
                ? JSON.parse(this.template.testimonials_area)
                : null;

        this.testimonialBg =
            testimonialsArea != null
                ? testimonialsArea.background_color
                : this.testimonialBg;
        this.testimonialTitle =
            testimonialsArea != null
                ? testimonialsArea.title
                : this.testimonialTitle;

        this.testimonialSubTitle =
            testimonialsArea != null
                ? testimonialsArea.sub_title
                : this.testimonialSubTitle;

        this.testimonials =
            this.template.testimonials.length > 0
                ? this.template.testimonials
                : this.testimonials;

        const defaultTestimonialImages = [
            "images/author-1.jpg",
            "images/author-2.jpg",
            "images/author-3.jpg",
        ];

        this.testimonials.forEach((testimonial, index) => {
            testimonial.reviewer_image =
                this.template.testimonials.length > 0 &&
                this.template.testimonials[index].reviewer_image != null
                    ? this.imageSource(
                          this.template.testimonials[index].reviewer_image,
                          "storage"
                      )
                    : this.imageSource(defaultTestimonialImages[index]);
        });

        // order area
        const orderArea =
            this.template.order_area != null
                ? JSON.parse(this.template.order_area)
                : null;

        this.orderBg =
            orderArea != null ? orderArea.background_color : this.orderBg;
        this.orderTitle = orderArea != null ? orderArea.title : this.orderTitle;
        this.orderSubTitle =
            orderArea != null ? orderArea.sub_title : this.orderSubTitle;

        const defaultOrderButton = {
            title: "Place Order",
            url: null,
            color: "transparent",
            text_color: "white",
            border_color: "white",
            hover_color: "white",
            hover_text_color: "black",
            hover_border_color: "white",
        };

        this.orderButton =
            orderArea != null ? orderArea.button : defaultOrderButton;

        // product info
        this.productName = this.user_template.product_name;
        this.productPrice = this.user_template.product_price;
        this.productCurrency = this.user_template.product_currency;
        this.companyLogo = this.user_template.company_logo;
        // console.log(this.user_template);
        this.companyLogo =
            this.user_template.company_logo != null &&
            this.user_template.company_logo
                ? this.imageSource(this.user_template.company_logo, "storage")
                : this.imageSource("images/logo.png");

        this.navBg =
            this.template.nav_color != null
                ? this.template.nav_color
                : this.navBg;

        // footer area
        const footerArea =
            this.template.footer_area != null
                ? JSON.parse(this.template.footer_area)
                : null;

        this.footerBg =
            footerArea != null ? footerArea.background_color : this.footerBg;
        this.footerText =
            footerArea != null ? footerArea.text : this.footerText;
    },
    beforeDestroy() {
        window.removeEventListener("scroll", this.checkStickyHeader);
    },
    methods: {
        checkStickyHeader() {
            if (this.$refs.navbarMenu) {
                this.stickyHeader =
                    this.$refs.navbarMenu.classList.contains("sticky-header");
            }
        },

        updateContent(event) {
            const rawContent =
                event.target.innerHTML ?? event.target.textContent;
            const sanitizedContent = rawContent.replace(/&nbsp;/g, " ");
            // const updatedContent = sanitizedContent.trim() + " ";

            return sanitizedContent;
        },

        updateImage(data) {
            switch (data.section) {
                case "logo":
                    this.companyLogo =
                        data.image !== null && data.image !== ""
                            ? data.image
                            : this.companyLogo;

                    this.companyLogoRaw =
                        data.image_raw !== null && data.image_raw !== ""
                            ? data.image_raw
                            : this.companyLogoRaw;

                    this.updateLogo();

                    break;

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

                    this.updateFeaturesArea();

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

                    this.updateAboutArea();

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

                    this.updateAboutArea();

                    break;

                case "testimonial-1":
                    this.testimonials[0].reviewer_image =
                        data.image !== null && data.image !== ""
                            ? data.image
                            : this.testimonials[0].reviewer_image;
                    this.testimonials[0].reviewer_image_raw =
                        data.image_raw !== null && data.image_raw !== ""
                            ? data.image_raw
                            : this.testimonials[0].reviewer_image_raw;

                    this.updateTestimonialsArea();

                    break;

                case "testimonial-2":
                    this.testimonials[1].reviewer_image =
                        data.image !== null && data.image !== ""
                            ? data.image
                            : this.testimonials[1].reviewer_image;
                    this.testimonials[1].reviewer_image_raw =
                        data.image_raw !== null && data.image_raw !== ""
                            ? data.image_raw
                            : this.testimonials[1].reviewer_image_raw;

                    this.updateTestimonialsArea();

                    break;

                case "testimonial-3":
                    this.testimonials[2].reviewer_image =
                        data.image !== null && data.image !== ""
                            ? data.image
                            : this.testimonials[2].reviewer_image;
                    this.testimonials[2].reviewer_image_raw =
                        data.image_raw !== null && data.image_raw !== ""
                            ? data.image_raw
                            : this.testimonials[2].reviewer_image_raw;

                    this.updateTestimonialsArea();

                    break;

                default:
                    console.warn("Something is wrong on update image.");
                    break;
            }
        },

        updateColor(data) {
            switch (data.section) {
                case "nav":
                    this.navBg = data.color;
                    this.updateNavColor();
                    break;
                case "hero":
                    this.heroBg = data.color;
                    this.updateHeroArea();
                    break;
                case "feature":
                    this.featureBg = data.color;
                    this.updateFeaturesArea();
                    break;
                case "about":
                    this.aboutBg = data.color;
                    this.updateAboutArea();
                    break;
                case "testimonials":
                    this.testimonialBg = data.color;
                    this.updateTestimonialsArea();
                    break;
                case "info":
                    this.infoBg = data.color;
                    this.updateInfoArea();
                    break;
                case "order":
                    this.orderBg = data.color;
                    this.updateOrderArea();
                    break;
                case "footer":
                    this.footerBg = data.color;
                    this.updateFooterArea();
                    break;
                default:
                    console.warn("Something is wrong on update color.");
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

                case "order":
                    this.updateOrderButton(data);
                    break;

                default:
                    console.warn("Something is wrong on update button.");
                    break;
            }
        },

        imageSource(path, disk = "public") {
            if (disk == "storage" && path) {
                return `${this.appUrl}/storage/${path}`;
            }

            return `${this.appUrl}/${this.user_template.template.assets_path}/${path}`;
        },

        updateMenuItem(event, index) {
            this.menus[index].title = this.updateContent(event);
            this.updateMenuArea();
        },

        updateMenuArea() {
            const formData = new FormData();
            formData.append("items", JSON.stringify(this.menus));

            axios
                .post(`${this.apiUrl}/update-menu-area`, formData)
                .then((response) => {
                    // console.log(response.data);
                })
                .catch((error) => {
                    console.error(error);
                });
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

        updateLogo() {
            const formData = new FormData();
            formData.append("image", this.companyLogoRaw);
            axios
                .post(`${this.apiUrl}/update-company-logo`, formData, {
                    headers: {
                        "Content-Type": "multipart/form-data",
                    },
                })
                .then((response) => {
                    // console.log(response);
                })
                .catch((error) => {
                    console.error(error);
                });
        },

        updateHeroArea() {
            const formData = new FormData();
            formData.append("title", this.heroTitle);
            formData.append("description", this.heroDescription);
            formData.append("button", JSON.stringify(this.heroButton));
            formData.append("image", this.heroImageRaw);
            formData.append("background_color", this.heroBg);

            axios
                .post(`${this.apiUrl}/update-hero-area`, formData, {
                    headers: {
                        "Content-Type": "multipart/form-data",
                    },
                })
                .then((response) => {
                    // console.log(response.data);
                })
                .catch((error) => {
                    console.error(error);
                });
        },

        updateNavColor() {
            const formData = new FormData();
            formData.append("nav_color", this.navBg);

            axios
                .post(`${this.apiUrl}/update-nav-color`, formData, {
                    headers: {
                        "Content-Type": "multipart/form-data",
                    },
                })
                .then((response) => {
                    // console.log(response.data);
                })
                .catch((error) => {
                    console.error(error);
                });
        },

        updateStepItem(event, section, index) {
            this.steps[index - 1][section] = this.updateContent(event);
            this.updateStepsArea();
        },

        updateStepsArea() {
            const formData = new FormData();
            formData.append("items", JSON.stringify(this.steps));

            axios
                .post(`${this.apiUrl}/update-steps-area`, formData)
                .then((response) => {
                    // console.log(response.data);
                    this.steps = response.data.data;
                })
                .catch((error) => {
                    console.error(error);
                });
        },

        updateFeatureSubTitle(event) {
            this.featureSubTitle = this.updateContent(event);
            this.updateFeaturesArea();
        },

        updateFeatureTitle(event) {
            this.featureTitle = this.updateContent(event);
            this.updateFeaturesArea();
        },

        updateFeatureItem(event, section, index) {
            this.features[index][section] = this.updateContent(event);
            this.updateFeaturesArea();
        },

        updateFeaturesArea() {
            const formData = new FormData();
            formData.append("title", this.featureTitle);
            formData.append("sub_title", this.featureSubTitle);
            formData.append("items", JSON.stringify(this.features));
            formData.append("image", this.featureImageRaw);
            formData.append("background_color", this.featureBg);

            axios
                .post(`${this.apiUrl}/update-features-area`, formData, {
                    headers: {
                        "Content-Type": "multipart/form-data",
                    },
                })
                .then((response) => {
                    // console.log(response.data);
                    this.features = response.data.data;
                })
                .catch((error) => {
                    console.error(error);
                });
        },

        updateAboutSubTitle(event) {
            this.aboutSubTitle = this.updateContent(event);
            this.updateAboutArea();
        },

        updateAboutTitle(event) {
            this.aboutTitle = this.updateContent(event);
            this.updateAboutArea();
        },

        updateAboutItem(event, section, index) {
            this.abouts[index - 1][section] = this.updateContent(event);
            this.updateAboutArea();
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

            this.updateAboutArea();
        },

        updateAboutArea() {
            const formData = new FormData();
            formData.append("title", this.aboutTitle);
            formData.append("sub_title", this.aboutSubTitle);
            formData.append("items", JSON.stringify(this.abouts));
            formData.append("image_1", this.abouts[0].image_raw);
            formData.append("image_2", this.abouts[1].image_raw);
            formData.append("background_color", this.aboutBg);

            axios
                .post(`${this.apiUrl}/update-about-area`, formData, {
                    headers: {
                        "Content-Type": "multipart/form-data",
                    },
                })
                .then((response) => {
                    // console.log(response.data);
                })
                .catch((error) => {
                    console.error(error);
                });
        },

        updateTestimonialSubTitle(event) {
            this.testimonialSubTitle = this.updateContent(event);
            this.updateTestimonialsArea();
        },

        updateTestimonialTitle(event) {
            this.testimonialTitle = this.updateContent(event);
            this.updateTestimonialsArea();
        },

        updateTestimonialItem(event, section, index) {
            this.testimonials[index][section] = this.updateContent(event);
            this.updateTestimonialsArea();
        },

        updateTestimonialsArea() {
            const formData = new FormData();
            formData.append("title", this.testimonialTitle);
            formData.append("sub_title", this.testimonialSubTitle);
            formData.append("items", JSON.stringify(this.testimonials));
            formData.append("background_color", this.testimonialBg);
            formData.append("image_1", this.testimonials[0].reviewer_image_raw);
            formData.append("image_2", this.testimonials[1].reviewer_image_raw);
            formData.append("image_3", this.testimonials[2].reviewer_image_raw);

            axios
                .post(`${this.apiUrl}/update-testimonials-area`, formData, {
                    headers: {
                        "Content-Type": "multipart/form-data",
                    },
                })
                .then((response) => {
                    // console.log(response.data);
                    this.testimonials = response.data.data;

                    const defaultTestimonialImages = [
                        "images/author-1.jpg",
                        "images/author-2.jpg",
                        "images/author-3.jpg",
                    ];

                    this.testimonials.forEach((testimonial, index) => {
                        testimonial.reviewer_image =
                            testimonial.reviewer_image != null
                                ? this.imageSource(
                                      testimonial.reviewer_image,
                                      "storage"
                                  )
                                : this.imageSource(
                                      defaultTestimonialImages[index]
                                  );
                    });
                })
                .catch((error) => {
                    console.error(error);
                });
        },

        updateInfoSubTitle(event) {
            this.infoSubTitle = this.updateContent(event);
            this.updateInfoArea();
        },

        updateInfoTitle(event) {
            this.infoTitle = this.updateContent(event);
            this.updateInfoArea();
        },

        updateInfoDescription(event) {
            this.infoDescription = this.updateContent(event);
            this.updateInfoArea();
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

            this.updateInfoArea();
        },

        updateInfoArea() {
            const formData = new FormData();
            formData.append("title", this.infoTitle);
            formData.append("sub_title", this.infoSubTitle);
            formData.append("description", this.infoDescription);
            formData.append("button", JSON.stringify(this.infoButton));
            formData.append("video_url", this.infoVideo);
            formData.append("background_color", this.infoBg);

            axios
                .post(`${this.apiUrl}/update-info-area`, formData)
                .then((response) => {
                    // console.log(response.data);
                })
                .catch((error) => {
                    console.error(error);
                });
        },

        updateOrderSubTitle(event) {
            this.orderSubTitle = this.updateContent(event);
            this.updateOrderArea();
        },

        updateOrderTitle(event) {
            this.orderTitle = this.updateContent(event);
            this.updateOrderArea();
        },

        updateOrderButton(data) {
            this.orderButton = {
                title:
                    data.title !== null && data.title !== ""
                        ? data.title
                        : this.orderButton.title,
                url:
                    data.url !== null && data.url !== ""
                        ? data.url
                        : this.orderButton.url,
                color:
                    data.color !== null && data.color !== ""
                        ? data.color
                        : this.orderButton.color,
                text_color:
                    data.text_color !== null && data.text_color !== ""
                        ? data.text_color
                        : this.orderButton.text_color,
                border_color:
                    data.border_color !== null && data.border_color !== ""
                        ? data.border_color
                        : this.orderButton.border_color,
                hover_color:
                    data.hover_color !== null && data.hover_color !== ""
                        ? data.hover_color
                        : this.orderButton.hover_color,
                hover_text_color:
                    data.hover_text_color !== null &&
                    data.hover_text_color !== ""
                        ? data.hover_text_color
                        : this.orderButton.hover_text_color,
                hover_border_color:
                    data.hover_border_color !== null &&
                    data.hover_border_color !== ""
                        ? data.hover_border_color
                        : this.orderButton.hover_border_color,
            };

            this.updateOrderArea();
        },

        updateOrderArea() {
            const formData = new FormData();
            formData.append("title", this.orderTitle);
            formData.append("sub_title", this.orderSubTitle);
            formData.append("button", JSON.stringify(this.orderButton));
            formData.append("background_color", this.orderBg);

            axios
                .post(`${this.apiUrl}/update-order-area`, formData)
                .then((response) => {
                    // console.log(response.data);
                })
                .catch((error) => {
                    console.error(error);
                });
        },

        updateProductName(event) {
            this.productName = this.updateContent(event);
            this.updateProductInfo();
        },

        updateProductCurrency(event) {
            this.productCurrency = this.updateContent(event);
            this.updateProductInfo();
        },

        updateProductPrice(event) {
            this.productPrice = this.updateContent(event);
            this.updateProductInfo();
        },

        updateProductInfo() {
            const formData = new FormData();
            formData.append("product_name", this.productName);
            formData.append("product_currency", this.productCurrency);
            formData.append("product_price", this.productPrice);

            axios
                .post(`${this.apiUrl}/update-product-info`, formData)
                .then((response) => {
                    // console.log(response.data);
                })
                .catch((error) => {
                    console.error(error);
                });
        },

        updateFooterText(event) {
            this.footerText = this.updateContent(event);
            this.updateFooterArea();
        },

        updateFooterArea() {
            const formData = new FormData();
            formData.append("text", this.footerText);
            formData.append("background_color", this.footerBg);

            axios
                .post(`${this.apiUrl}/update-footer-area`, formData)
                .then((response) => {
                    // console.log(response.data);
                })
                .catch((error) => {
                    console.error(error);
                });
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

nav.navbar.main-menu.sticky-header {
    background: v-bind("navBg") !important;
}

.jumptotop a {
    background: v-bind("navBg") !important;
}

.step-section {
    background: v-bind("featureBg");
}

.order_area .btn-contact {
    background-color: v-bind("orderButton.color");
    color: v-bind("orderButton.text_color");
    border-color: v-bind("orderButton.border_color");
}

.order_area .btn-contact:hover {
    background-color: v-bind("orderButton.hover_color") !important;
    color: v-bind("orderButton.hover_text_color");
    border-color: v-bind("orderButton.hover_border_color");
}
</style>
