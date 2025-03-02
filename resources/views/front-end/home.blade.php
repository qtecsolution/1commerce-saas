@extends('layouts.landing')
@section('page_content')
    <!-- HERO-SECTION-START -->
    <section class="hero_section" id="hero_section">
        <div class="container hero_Container">
            <div class="hero_wrapper position-relative">
                <figure class="Hero_Arrow position-absolute">
                    <img src="{{ asset('1commerce-landing') }}/assets/images/Home/Hero_Arrow.png" alt="Hero_Arrow" />
                </figure>
                <div class="row g-5 g-lg-3">
                    <div class="col-lg-6">
                        <div class="hero_left_content">

                            <h1 class="hero_title">
                                মিনিটের মধ্যে নিজের
                                ওয়েবসাইট তৈরি করুন
                                – চিরদিনের জন্য ফ্রি!
                            </h1>
                            <p class="hero_description">
                                সহজেই তৈরি করুন, কাস্টমাইজ করুন, এবং আপনার ওয়েবসাইট চালু করুন। কোনো কোডিং প্রয়োজন নেই।
                            </p>

                            <div>
                                <a href="#" class="primary_btn">
                                    ফ্রি শুরু করুন
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero_right_content position-relative">
                            <figure class="hero_image_wrapper">
                                <img class="hero_image"
                                    src="{{ asset('1commerce-landing') }}/assets/images/Home/HeroImage.webp"
                                    alt="HeroImage" />
                            </figure>

                            <figure class="hero_dots_wrapper position-absolute">
                                <img class="hero_dots" src="{{ asset('1commerce-landing') }}/assets/images/Home/dots.png"
                                    alt="dots" />
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HERO-SECTION-END -->

    <!-- OUR-SERVICES-START -->
    <section class="our_services">
        <div class="container">
            <div class="our_services_wrapper">
                <div class="row g-3">
                    <div class="col-md-6 col-lg-4">
                        <div class="service_item">
                            <figure class="service_image_wrapper">
                                <img src="{{ asset('1commerce-landing') }}/assets/images/Home/নো-কোডিং.png"
                                    alt="নো-কোডিং" />
                            </figure>
                            <div class="service_content">
                                <h2 class="service_title">নো কোডিং</h2>
                                <p class="service_description">
                                    কোডিং ছাড়াই ওয়েবসাইট বিল্ডার দিয়ে
                                    ওয়েবসাইট তৈরির অপশন।
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service_item data">
                            <figure class="service_image_wrapper">
                                <img src="{{ asset('1commerce-landing') }}/assets/images/Home/ডাটা-সিকিউরিটি.png"
                                    alt="১০০% ডাটা সিকিউরিটি" />
                            </figure>
                            <div class="service_content">
                                <h2 class="service_title">১০০% ডাটা সিকিউরিটি</h2>
                                <p class="service_description">
                                    কাস্টমারের ডাটা ১০০% সিকিউরড
                                    দেখতে পাবে শুধুমাত্র স্টোর মালিক
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service_item marketing">
                            <figure class="service_image_wrapper">
                                <img src="{{ asset('1commerce-landing') }}/assets/images/Home/ফ্রেন্ডলি-ডিজিটাল-মার্কেটিং.png"
                                    alt="ফ্রেন্ডলি ডিজিটাল মার্কেটিং " />
                            </figure>
                            <div class="service_content">
                                <h2 class="service_title">ফ্রেন্ডলি ডিজিটাল মার্কেটিং </h2>
                                <p class="service_description">
                                    গুগল/ ফেসবুক কোড ইন্ট্রিগ্রেড সিস্টেম
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- OUR-SERVICES-END -->

    <!-- Features-Section-START -->
    <section class="features_section" id="features_section">
        <div class="container">
            <div class="features_section_wrapper">
                <div class="features_section_header">
                    <div class="d-flex justify-content-center">
                        <div class="features_section_title">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10"
                                fill="none">
                                <circle cx="5" cy="5" r="5" fill="#FFB700" />
                            </svg>
                            <h3 class="sub_title">
                                ফিচারস
                            </h3>
                        </div>
                    </div>
                    <div class="d-flex flex-column gap-4">
                        <h1 class="title">
                            আমাদের মূল <span>বৈশিষ্ট্যগুলো</span>
                        </h1>
                        <p class="description">
                            আপনার প্ল্যাটফর্মের আকর্ষণীয় বৈশিষ্ট্যগুলি তুলে ধরুন।আপনার প্ল্যাটফর্মের আকর্ষণীয়
                            বৈশিষ্ট্যগুলি তুলে
                            ধরুন।
                        </p>
                    </div>
                </div>
                <div class="section_image_content">
                    <div class="row g-5">
                        <div class="col-lg-6">
                            <figure class="section_image_wrapper">
                                <img src="{{ asset('1commerce-landing') }}/assets/images/Home/Make_website.png"
                                    alt="Make_website" />
                            </figure>
                        </div>
                        <div class="col-lg-6 align-self-center">
                            <div class="section_content_wrapper d-flex flex-column gap-4  ps-xl-5">
                                <div class="section_title_wrapper position-relative">
                                    <h1 class="title">
                                        নিজের ওয়েবসাইট তৈরি করুন, কোনো কোডিং ছাড়াই
                                    </h1>
                                    <figure class="title_arrow position-absolute">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="179" height="8"
                                            viewBox="0 0 179 8" fill="none">
                                            <path
                                                d="M-0.0605469 5.61081C-0.0605469 5.61081 55.0706 2.06399 90.4395 2.11081C124.638 2.15609 143.742 5.85989 177.939 5.61081C206.87 5.4001 251.939 2.11081 251.939 2.11081"
                                                stroke="#DE00A5" stroke-width="3" stroke-linecap="round" />
                                        </svg>
                                    </figure>
                                </div>
                                <p class="description">
                                    আমাদের ইন্টার‍্যাকটিভ ওয়েবসাইট বিল্ডার দিয়ে আপনার ওয়েবসাইটের প্রতিটি অংশ নিজেই
                                    তৈরি ও কাস্টমাইজ
                                    করুন
                                    ।
                                    কোনো কোডিং ছাড়াই নিজের ওয়েবসাইট তৈরি করা সম্ভব বর্তমানে বেশ কিছু সহজ টুল এবং
                                    প্ল্যাটফর্মের মাধ্যমে।
                                    এসব
                                    প্ল্যাটফর্ম কোডিং না জানা লোকদের জন্য ওয়েবসাইট তৈরি করা সহজ করে তোলে।
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section_image_content upload_product">
                    <div class="row g-5">
                        <div class="col-lg-6 align-self-center order-2 order-lg-1">
                            <div class="section_content_wrapper d-flex flex-column gap-4  pe-xl-5">
                                <div class="section_title_wrapper position-relative">
                                    <h1 class="title">
                                        সহজে পণ্য আপলোড করুন
                                    </h1>
                                    <figure class="upload position-absolute">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="179" height="8"
                                            viewBox="0 0 179 8" fill="none">
                                            <path
                                                d="M-0.0605469 5.61081C-0.0605469 5.61081 55.0706 2.06399 90.4395 2.11081C124.638 2.15609 143.742 5.85989 177.939 5.61081C206.87 5.4001 251.939 2.11081 251.939 2.11081"
                                                stroke="#DE00A5" stroke-width="3" stroke-linecap="round" />
                                        </svg>
                                    </figure>
                                </div>
                                <p class="description">
                                    সহজে পণ্য আপলোড করুন" বলতে এমন একটি প্রক্রিয়াকে বোঝায় যেখানে আপনি কোনো ই-কমার্স বা
                                    অনলাইন স্টোর
                                    প্ল্যাটফর্মে খুব সহজে এবং দ্রুত আপনার পণ্যগুলিকে আপলোড করতে পারবেন।মাত্র কয়েকটি
                                    ক্লিকের মাধ্যমে আপনার
                                    পণ্য আপলোড করুন এবং সাথে সাথেই বিক্রি শুরু করুন।
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-6 order-1 order-lg-2">
                            <figure class="section_image_wrapper">
                                <img src="{{ asset('1commerce-landing') }}/assets/images/Home/upload_product.jpg"
                                    alt="upload_product" />
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features-Section-END -->

    <!-- CHOOSING-TEMPLATE-SECTION-START -->
    <section class="choosing_template">
        <div class="container">
            <div class="choosing_template_wrapper">
                <div class="choosing_template_header">
                    <div class="title_wrapper position-relative">
                        <h1 class="title">
                            দারুণ টেমপ্লেট বেছে নিন
                        </h1>
                        <figure class="title_arrow position-absolute">
                            <svg xmlns="http://www.w3.org/2000/svg" width="104" height="8" viewBox="0 0 104 8"
                                fill="none">
                                <path
                                    d="M0.00390625 5.98631C0.00390625 5.98631 22.3189 1.9472 36.6349 2.00052C50.477 2.05208 58.2098 6.26996 72.0515 5.98631C83.7614 5.74635 102.004 2.00052 102.004 2.00052"
                                    stroke="#DE00A5" stroke-width="3" stroke-linecap="round" />
                            </svg>
                        </figure>
                    </div>
                    <p class="description">
                        আমাদের ইন্টার‍্যাকটিভ ওয়েবসাইট বিল্ডার দিয়ে আপনার ওয়েবসাইটের প্রতিটি অংশ নিজেই তৈরি ও
                        কাস্টমাইজ করুন ।
                        কোনো
                        কোডিং ছাড়াই নিজের ওয়েবসাইট তৈরি করা সম্ভব বর্তমানে বেশ কিছু সহজ টুল এবং প্ল্যাটফর্মের মাধ্যমে।
                        এসব
                        প্ল্যাটফর্ম কোডিং না জানা লোকদের জন্য ওয়েবসাইট তৈরি করা সহজ করে তোলে।
                    </p>
                </div>

                <div class="choosing_template_content">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4">
                            <a href="#" class="template_card position-relative">
                                <img class="template_image"
                                    src="{{ asset('1commerce-landing') }}/assets/images/Home/template_image_1.png"
                                    alt="choosing_template_image_1" />
                                <h3 class="template_title">
                                    বিউটি প্রোডাক্ট ওয়েবসাইট ডিজাইন
                                </h3>
                            </a>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <a href="#" class="template_card position-relative">
                                <img class="template_image"
                                    src="{{ asset('1commerce-landing') }}/assets/images/Home/template_image_2.png"
                                    alt="choosing_template_image_1" />
                                <h3 class="template_title">
                                    ই- কমার্স ওয়েবসাইট ডিজাইন
                                </h3>
                            </a>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <a href="#" class="template_card position-relative">
                                <img class="template_image"
                                    src="{{ asset('1commerce-landing') }}/assets/images/Home/template_image_3.png"
                                    alt="choosing_template_image_1" />
                                <h3 class="template_title">
                                    হানি/মধু ওয়েবসাইট ডিজাইন
                                </h3>
                            </a>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <a href="#" class="template_card position-relative">
                                <img class="template_image"
                                    src="{{ asset('1commerce-landing') }}/assets/images/Home/template_image_6.png"
                                    alt="choosing_template_image_1" />
                                <h3 class="template_title">
                                    মেডিকেল ওয়েবসাইট ডিজাইন
                                </h3>
                            </a>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <a href="#" class="template_card position-relative">
                                <img class="template_image"
                                    src="{{ asset('1commerce-landing') }}/assets/images/Home/template_image_5.png"
                                    alt="choosing_template_image_1" />
                                <h3 class="template_title">
                                    বাইসাইকেল ওয়েবসাইট ডিজাইন
                                </h3>
                            </a>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <a href="#" class="template_card position-relative">
                                <img class="template_image"
                                    src="{{ asset('1commerce-landing') }}/assets/images/Home/template_image_4.png"
                                    alt="choosing_template_image_1" />
                                <h3 class="template_title">
                                    ঘড়ি ওয়েবসাইট ডিজাইন
                                </h3>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-center">
                    <a href="#" class="primary_btn">
                        আরো টেমপ্লেট দেখুন
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- CHOOSING-TEMPLATE-SECTION-END -->

    <!-- ORDER-SECTION-START -->
    <section class="order_section">
        <div class="container">
            <div class="order_section_wrapper">
                <div class="section_image_content">
                    <div class="row g-5">
                        <div class="col-lg-6 align-self-center order-2 order-lg-1">
                            <div class="section_content_wrapper d-flex flex-column gap-4  pe-xl-5">
                                <div class="section_title_wrapper position-relative">
                                    <h1 class="title">
                                        অর্ডার গ্রহণ করুন সহজে
                                    </h1>
                                    <figure class="order position-absolute">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="83" height="8"
                                            viewBox="0 0 83 8" fill="none">
                                            <path
                                                d="M0 5.98631C0 5.98631 21.6587 1.9472 35.5536 2.00052C48.9886 2.05208 56.4939 6.26996 69.9286 5.98631C81.2941 5.74635 99 2.00052 99 2.00052"
                                                stroke="#DE00A5" stroke-width="3" stroke-linecap="round" />
                                        </svg>
                                    </figure>
                                </div>
                                <p class="description">
                                    সহজে পণ্য আপলোড করুন" বলতে এমন একটি প্রক্রিয়াকে বোঝায় যেখানে আপনি কোনো ই-কমার্স বা
                                    অনলাইন স্টোর
                                    প্ল্যাটফর্মে খুব সহজে এবং দ্রুত আপনার পণ্যগুলিকে আপলোড করতে পারবেন।মাত্র কয়েকটি
                                    ক্লিকের মাধ্যমে আপনার
                                    পণ্য আপলোড করুন এবং সাথে সাথেই বিক্রি শুরু করুন।
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-6 order-1 order-lg-2">
                            <figure class="section_image_wrapper">
                                <img src="{{ asset('1commerce-landing') }}/assets/images/Home/order.webp"
                                    alt="order" />
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ORDER-SECTION-END -->

    <!-- Domain-Section-START -->
    <section class="domain_section">
        <div class="container">
            <div class="domain_section_wrapper">
                <div class="section_image_content">
                    <div class="row g-5">
                        <div class="col-lg-6">
                            <figure class="section_image_wrapper">
                                <img src="{{ asset('1commerce-landing') }}/assets/images/Home/domain.webp"
                                    alt="domain" />
                            </figure>
                        </div>
                        <div class="col-lg-6 align-self-center">
                            <div class="section_content_wrapper d-flex flex-column gap-4  ps-xl-5">
                                <div class="section_title_wrapper position-relative">
                                    <h1 class="title">
                                        নিজস্ব ডোমেইন পান
                                    </h1>
                                    <figure class="domain_arrow position-absolute">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="104" height="8"
                                            viewBox="0 0 104 8" fill="none">
                                            <path
                                                d="M0.00390625 5.98631C0.00390625 5.98631 22.3189 1.9472 36.6349 2.00052C50.477 2.05208 58.2098 6.26996 72.0515 5.98631C83.7614 5.74635 102.004 2.00052 102.004 2.00052"
                                                stroke="#DE00A5" stroke-width="3" stroke-linecap="round" />
                                        </svg>
                                    </figure>
                                </div>
                                <p class="description">
                                    আপনার ব্র্যান্ডকে আরও শক্তিশালী করতে একটি ব্যক্তিগত ডোমেইন সেট আপ করুন, খুবই সহজ
                                    উপায়ে।নিজস্ব ডোমেইন
                                    পাওয়ার অর্থ হলো একটি বিশেষ ও অনন্য ওয়েব ঠিকানা (যেমন: www.yourbusiness.com) তৈরি
                                    করা, যা আপনার
                                    ওয়েবসাইটের জন্য বরাদ্দ থাকবে। এটি আপনার ওয়েবসাইটকে পেশাদারভাবে উপস্থাপন করে এবং
                                    ব্র্যান্ডিংয়ের জন্য
                                    গুরুত্বপূর্ণ। নিচে ধাপে ধাপে কীভাবে নিজস্ব ডোমেইন পেতে হয় তা ব্যাখ্যা করা হলো
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Domain-Section-END -->

    <!-- PAYMENT-SECTION-START -->
    <section class="payment_section">
        <div class="container">
            <div class="payment_section_wrapper">
                <div class="section_image_content">
                    <div class="row g-5">
                        <div class="col-lg-6 align-self-center order-2 order-lg-1">
                            <div class="section_content_wrapper d-flex flex-column gap-4  pe-xl-5">
                                <div class="section_title_wrapper position-relative">
                                    <h1 class="title">
                                        ইন্টিগ্রেটেড পেমেন্ট গেটওয়ে
                                    </h1>
                                    <figure class="payment_arrow position-absolute">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="83" height="8"
                                            viewBox="0 0 83 8" fill="none">
                                            <path
                                                d="M0 5.98875C0 5.98875 21.6587 1.94964 35.5536 2.00296C48.9886 2.05452 56.4939 6.2724 69.9286 5.98875C81.2941 5.74879 99 2.00296 99 2.00296"
                                                stroke="#DE00A5" stroke-width="3" stroke-linecap="round" />
                                        </svg>
                                    </figure>
                                </div>
                                <p class="description">
                                    আপনার সাইটে জনপ্রিয় পেমেন্ট গেটওয়েগুলোর মাধ্যমে নিরাপদে পেমেন্ট গ্রহণ করতে পারবেন।
                                    ইন্টিগ্রেটেড পেমেন্ট গেটওয়ে হলো এমন একটি সিস্টেম যা আপনার ওয়েবসাইট বা অ্যাপের সাথে
                                    সংযুক্ত থাকে এবং
                                    গ্রাহকদের থেকে অনলাইনে পেমেন্ট গ্রহণ করতে সাহায্য করে। এটি একটি নিরাপদ প্রক্রিয়া
                                    যেখানে গ্রাহকের
                                    ক্রেডিট কার্ড, ডেবিট কার্ড, মোবাইল ব্যাংকিং, এবং অন্যান্য পেমেন্ট মাধ্যম থেকে অর্থ
                                    গ্রহণ করা হয়।
                                    ইন্টিগ্রেটেড পেমেন্ট গেটওয়ে সরাসরি আপনার ওয়েবসাইটে বা অ্যাপে বিল্ট-ইন হয়, যাতে
                                    পেমেন্ট প্রসেসটি
                                    স্বয়ংক্রিয়ভাবে এবং ঝামেলাবিহীনভাবে সম্পন্ন হয়।
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-6 order-1 order-lg-2">
                            <figure class="section_image_wrapper">
                                <img src="{{ asset('1commerce-landing') }}/assets/images/Home/payment.webp"
                                    alt="payment" />
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PAYMENT-SECTION-END -->

    <!-- FREE-PLAN-SECTION-START -->
    <section class="free_plan_section">
        <div class="container">
            <div class="free_plan_section_wrapper">
                <div class="section_image_content">
                    <div class="row g-5">
                        <div class="col-lg-6">
                            <figure class="section_image_wrapper">
                                <img src="{{ asset('1commerce-landing') }}/assets/images/Home/plan.webp"
                                    alt="plan" />
                            </figure>
                        </div>
                        <div class="col-lg-6 align-self-center">
                            <div class="section_content_wrapper d-flex flex-column gap-4  ps-xl-5">
                                <div class="section_title_wrapper position-relative">
                                    <h1 class="title">
                                        চিরকাল ফ্রি প্ল্যান
                                    </h1>
                                    <figure class="free_plan_arrow position-absolute">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="104" height="8"
                                            viewBox="0 0 104 8" fill="none">
                                            <path
                                                d="M0 5.98845C0 5.98845 22.315 1.94933 36.631 2.00266C50.4731 2.05422 58.2059 6.27209 72.0476 5.98845C83.7575 5.74849 102 2.00266 102 2.00266"
                                                stroke="#DE00A5" stroke-width="3" stroke-linecap="round" />
                                        </svg>
                                    </figure>
                                </div>
                                <p class="description">
                                    আমাদের ইন্টার‍্যাকটিভ ওয়েবসাইট বিল্ডার দিয়ে আপনার ওয়েবসাইটের প্রতিটি অংশ নিজেই
                                    তৈরি ও কাস্টমাইজ
                                    করুন। কোনো কোডিং ছাড়াই নিজের ওয়েবসাইট তৈরি করা সম্ভব বর্তমানে বেশ কিছু সহজ টুল এবং
                                    প্ল্যাটফর্মের
                                    মাধ্যমে। এসব প্ল্যাটফর্ম কোডিং না জানা লোকদের জন্য ওয়েবসাইট তৈরি করা সহজ করে তোলে।
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FREE-PLAN-SECTION-END -->

    <!-- PROCESS-SECTION-START -->
    <section class="process_section" id="process_section">
        <div class="container">
            <div class="process_section_wrapper">
                <div class="process_section_header">
                    <div class="d-flex justify-content-center">
                        <div class="process_section_title">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10"
                                fill="none">
                                <circle cx="5.00012" cy="5.00146" r="5" fill="#FD1774" />
                            </svg>
                            <h3 class="sub_title">
                                প্রক্রিয়া
                            </h3>
                        </div>
                    </div>
                    <div class="d-flex flex-column gap-4">
                        <h1 class="title">
                            কিভাবে <span>কাজ</span> করে
                        </h1>
                        <p class="description">
                            সহজে প্ল্যাটফর্মটি ব্যবহারের প্রক্রিয়া বুঝিয়ে দিন।
                        </p>
                    </div>
                </div>

                <div class="process_section_content">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4">
                            <div class="process_card">
                                <figure class="icon_wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                        viewBox="0 0 40 40" fill="none">
                                        <path
                                            d="M35.8335 40.0015H4.16679C3.61961 40.0015 3.0778 39.8937 2.57227 39.6843C2.06675 39.4749 1.60742 39.168 1.22051 38.7811C0.8336 38.3942 0.526685 37.9348 0.317291 37.4293C0.107896 36.9238 0.00012207 36.382 0.00012207 35.8348L0.00012207 4.16813C0.00012207 3.06306 0.439109 2.00325 1.22051 1.22185C2.00191 0.440452 3.06172 0.00146484 4.16679 0.00146484L35.8335 0.00146484C36.3806 0.00146484 36.9224 0.109239 37.428 0.318633C37.9335 0.528028 38.3928 0.834942 38.7797 1.22185C39.1666 1.60876 39.4736 2.06809 39.683 2.57362C39.8923 3.07914 40.0001 3.62096 40.0001 4.16813V35.8348C40.0001 36.382 39.8923 36.9238 39.683 37.4293C39.4736 37.9348 39.1666 38.3942 38.7797 38.7811C38.3928 39.168 37.9335 39.4749 37.428 39.6843C36.9224 39.8937 36.3806 40.0015 35.8335 40.0015ZM4.16679 1.66813C3.50375 1.66813 2.86786 1.93152 2.39902 2.40036C1.93018 2.86921 1.66679 3.50509 1.66679 4.16813V35.8348C1.66679 36.4978 1.93018 37.1337 2.39902 37.6026C2.86786 38.0714 3.50375 38.3348 4.16679 38.3348H35.8335C36.4965 38.3348 37.1324 38.0714 37.6012 37.6026C38.0701 37.1337 38.3335 36.4978 38.3335 35.8348V4.16813C38.3335 3.50509 38.0701 2.86921 37.6012 2.40036C37.1324 1.93152 36.4965 1.66813 35.8335 1.66813H4.16679Z"
                                            fill="white" />
                                        <path
                                            d="M4.1669 5.00153C4.058 5.00022 3.95042 4.97757 3.85023 4.93487C3.74932 4.89252 3.65633 4.83335 3.57523 4.75987C3.49713 4.6824 3.43513 4.59023 3.39282 4.48868C3.35052 4.38713 3.32874 4.27821 3.32874 4.1682C3.32874 4.05819 3.35052 3.94927 3.39282 3.84772C3.43513 3.74617 3.49713 3.654 3.57523 3.57653C3.65623 3.50292 3.74925 3.44374 3.85023 3.40153C4.00109 3.33159 4.16941 3.30837 4.33357 3.33487C4.3858 3.34387 4.43638 3.36072 4.48357 3.38487C4.53667 3.40311 4.58711 3.42833 4.63357 3.45987L4.75857 3.55987C4.83667 3.63734 4.89867 3.7295 4.94098 3.83105C4.98328 3.9326 5.00507 4.04152 5.00507 4.15153C5.00507 4.26154 4.98328 4.37047 4.94098 4.47201C4.89867 4.57356 4.83667 4.66573 4.75857 4.7432L4.63357 4.8432C4.58711 4.87474 4.53667 4.89996 4.48357 4.9182L4.33357 5.00153H4.1669Z"
                                            fill="white" />
                                        <path
                                            d="M7.5004 5.00153C7.3915 5.00022 7.28392 4.97757 7.18373 4.93487C7.08282 4.89252 6.98983 4.83335 6.90873 4.75987C6.83062 4.6824 6.76863 4.59023 6.72632 4.48868C6.68401 4.38713 6.66223 4.27821 6.66223 4.1682C6.66223 4.05819 6.68401 3.94927 6.72632 3.84772C6.76863 3.74617 6.83062 3.654 6.90873 3.57653C6.98973 3.50292 7.08274 3.44374 7.18373 3.40153C7.33458 3.33159 7.50291 3.30837 7.66706 3.33487C7.7193 3.34387 7.76987 3.36072 7.81706 3.38487C7.87017 3.40311 7.92061 3.42833 7.96706 3.45987L8.09206 3.55987C8.17017 3.63734 8.23217 3.7295 8.27447 3.83105C8.31678 3.9326 8.33856 4.04152 8.33856 4.15153C8.33856 4.26154 8.31678 4.37047 8.27447 4.47201C8.23217 4.57356 8.17017 4.66573 8.09206 4.7432L7.96706 4.8432C7.92061 4.87474 7.87017 4.89996 7.81706 4.9182L7.66706 5.00153H7.5004Z"
                                            fill="white" />
                                        <path
                                            d="M10.8334 5.00153C10.7245 5.00022 10.6169 4.97757 10.5167 4.93487C10.4158 4.89252 10.3228 4.83335 10.2417 4.75987C10.1636 4.6824 10.1016 4.59023 10.0593 4.48868C10.017 4.38713 9.99524 4.27821 9.99524 4.1682C9.99524 4.05819 10.017 3.94927 10.0593 3.84772C10.1016 3.74617 10.1636 3.654 10.2417 3.57653C10.3227 3.50292 10.4158 3.44374 10.5167 3.40153C10.6676 3.33159 10.8359 3.30837 11.0001 3.33487C11.0523 3.34387 11.1029 3.36072 11.1501 3.38487C11.2032 3.40311 11.2536 3.42833 11.3001 3.45987L11.4251 3.55987C11.5032 3.63734 11.5652 3.7295 11.6075 3.83105C11.6498 3.9326 11.6716 4.04152 11.6716 4.15153C11.6716 4.26154 11.6498 4.37047 11.6075 4.47201C11.5652 4.57356 11.5032 4.66573 11.4251 4.7432L11.3001 4.8432C11.2536 4.87474 11.2032 4.89996 11.1501 4.9182L11.0001 5.00153H10.8334Z"
                                            fill="white" />
                                        <path
                                            d="M39.1668 8.33488H0.833455C0.612442 8.33488 0.40048 8.24708 0.2442 8.0908C0.0879195 7.93452 0.00012207 7.72256 0.00012207 7.50155C0.00012207 7.28053 0.0879195 7.06857 0.2442 6.91229C0.40048 6.75601 0.612442 6.66821 0.833455 6.66821H39.1668C39.3878 6.66821 39.5998 6.75601 39.756 6.91229C39.9123 7.06857 40.0001 7.28053 40.0001 7.50155C40.0001 7.72256 39.9123 7.93452 39.756 8.0908C39.5998 8.24708 39.3878 8.33488 39.1668 8.33488Z"
                                            fill="white" />
                                        <path
                                            d="M35.8331 23.3348H4.16646C3.94545 23.3348 3.73349 23.247 3.57721 23.0907C3.42093 22.9344 3.33313 22.7225 3.33313 22.5015V10.8348C3.33313 10.6138 3.42093 10.4018 3.57721 10.2455C3.73349 10.0893 3.94545 10.0015 4.16646 10.0015H35.8331C36.0541 10.0015 36.2661 10.0893 36.4224 10.2455C36.5787 10.4018 36.6665 10.6138 36.6665 10.8348V22.5015C36.6665 22.7225 36.5787 22.9344 36.4224 23.0907C36.2661 23.247 36.0541 23.3348 35.8331 23.3348ZM4.9998 21.6681H34.9998V11.6681H4.9998V21.6681Z"
                                            fill="white" />
                                        <path
                                            d="M35.8338 36.6681H25.0004C24.7794 36.6681 24.5675 36.5803 24.4112 36.4241C24.2549 36.2678 24.1671 36.0558 24.1671 35.8348V25.8348C24.1671 25.6138 24.2549 25.4018 24.4112 25.2455C24.5675 25.0893 24.7794 25.0015 25.0004 25.0015H35.8338C36.0548 25.0015 36.2668 25.0893 36.423 25.2455C36.5793 25.4018 36.6671 25.6138 36.6671 25.8348V35.8348C36.6671 36.0558 36.5793 36.2678 36.423 36.4241C36.2668 36.5803 36.0548 36.6681 35.8338 36.6681ZM25.8338 35.0015H35.0004V26.6681H25.8338V35.0015Z"
                                            fill="white" />
                                        <path
                                            d="M21.6665 26.6681H4.16646C3.94545 26.6681 3.73349 26.5803 3.57721 26.4241C3.42093 26.2678 3.33313 26.0558 3.33313 25.8348C3.33313 25.6138 3.42093 25.4018 3.57721 25.2455C3.73349 25.0893 3.94545 25.0015 4.16646 25.0015H21.6665C21.8875 25.0015 22.0994 25.0893 22.2557 25.2455C22.412 25.4018 22.4998 25.6138 22.4998 25.8348C22.4998 26.0558 22.412 26.2678 22.2557 26.4241C22.0994 26.5803 21.8875 26.6681 21.6665 26.6681Z"
                                            fill="white" />
                                        <path
                                            d="M21.6665 30.0014H4.16646C3.94545 30.0014 3.73349 29.9136 3.57721 29.7573C3.42093 29.601 3.33313 29.3891 3.33313 29.1681C3.33313 28.947 3.42093 28.7351 3.57721 28.5788C3.73349 28.4225 3.94545 28.3347 4.16646 28.3347H21.6665C21.8875 28.3347 22.0994 28.4225 22.2557 28.5788C22.412 28.7351 22.4998 28.947 22.4998 29.1681C22.4998 29.3891 22.412 29.601 22.2557 29.7573C22.0994 29.9136 21.8875 30.0014 21.6665 30.0014Z"
                                            fill="white" />
                                        <path
                                            d="M21.6665 33.3349H4.16646C3.94545 33.3349 3.73349 33.2471 3.57721 33.0908C3.42093 32.9345 3.33313 32.7226 3.33313 32.5015C3.33313 32.2805 3.42093 32.0686 3.57721 31.9123C3.73349 31.756 3.94545 31.6682 4.16646 31.6682H21.6665C21.8875 31.6682 22.0994 31.756 22.2557 31.9123C22.412 32.0686 22.4998 32.2805 22.4998 32.5015C22.4998 32.7226 22.412 32.9345 22.2557 33.0908C22.0994 33.2471 21.8875 33.3349 21.6665 33.3349Z"
                                            fill="white" />
                                        <path
                                            d="M21.6665 36.6681H14.1665C13.9454 36.6681 13.7335 36.5803 13.5772 36.4241C13.4209 36.2678 13.3331 36.0558 13.3331 35.8348C13.3331 35.6138 13.4209 35.4018 13.5772 35.2455C13.7335 35.0893 13.9454 35.0015 14.1665 35.0015H21.6665C21.8875 35.0015 22.0994 35.0893 22.2557 35.2455C22.412 35.4018 22.4998 35.6138 22.4998 35.8348C22.4998 36.0558 22.412 36.2678 22.2557 36.4241C22.0994 36.5803 21.8875 36.6681 21.6665 36.6681Z"
                                            fill="white" />
                                    </svg>
                                </figure>
                                <div class="d-flex flex-column gap-2">
                                    <h3 class="sub_title">
                                        টেমপ্লেট বাছাই করুন
                                    </h3>
                                    <p class="description">
                                        আমাদের বিশাল টেমপ্লেট লাইব্রেরি থেকে আপনার ব্যবসার জন্য সঠিক ডিজাইনটি বাছাই
                                        করুন।
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="process_card">
                                <figure class="icon_wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="38"
                                        viewBox="0 0 44 38" fill="none">
                                        <path
                                            d="M24.995 8.06162H1.20497V29.6764H36.1857V18.0059C36.137 18.062 36.0985 18.1283 36.0761 18.1985C36.0741 18.2086 36.068 18.2186 36.066 18.2286L36.0498 18.2788L35.9625 18.5517C35.7352 19.2582 35.0695 19.7359 34.3206 19.7278H33.7422C32.9933 19.7359 32.3276 19.2582 32.1023 18.5517L31.9866 18.1985C31.9623 18.1203 31.9176 18.046 31.8568 17.9858C31.7959 17.9296 31.7208 17.8874 31.6376 17.8654C31.3555 17.7831 31.0754 17.6847 30.8014 17.5723C30.5294 17.462 30.2635 17.3355 30.0038 17.195C29.9307 17.1529 29.8475 17.1288 29.7623 17.1268C29.677 17.1288 29.5938 17.1489 29.5187 17.189L29.1859 17.3556V17.3576C28.5202 17.6948 27.7084 17.5683 27.1807 17.0425L26.7728 16.6391V16.6371C26.241 16.1173 26.1132 15.3145 26.4561 14.6562L26.6266 14.3271C26.6672 14.2528 26.6875 14.1705 26.6875 14.0862C26.6855 14.002 26.6632 13.9217 26.6226 13.8494C26.4805 13.5925 26.3526 13.3276 26.239 13.0587C26.1253 12.7877 26.0259 12.5108 25.9427 12.2298C25.898 12.0652 25.7702 11.9348 25.6058 11.8866L25.2506 11.7722V11.7742C24.5362 11.5514 24.0532 10.8932 24.0593 10.1506V9.58056C24.0572 9.22132 24.1709 8.8681 24.384 8.5771C24.5443 8.36034 24.7534 8.18373 24.9969 8.06131L24.995 8.06162ZM15.3468 21.4379C15.0951 21.6547 14.7136 21.6286 14.4964 21.3797C14.2773 21.1308 14.3036 20.7535 14.5553 20.5388L16.5077 18.869L14.5553 17.2032C14.3036 16.9865 14.2752 16.6112 14.4944 16.3603C14.7116 16.1115 15.0931 16.0854 15.3468 16.3001L17.8147 18.4135V18.4155C17.9507 18.5258 18.0298 18.6904 18.0319 18.865C18.0319 19.0396 17.9547 19.2062 17.8208 19.3186L15.3468 21.4379ZM13.7313 14.4156C13.8977 14.1306 14.265 14.0322 14.5553 14.1968C14.8435 14.3614 14.9429 14.7266 14.7765 15.0116L9.91981 23.3225C9.84472 23.467 9.71279 23.5734 9.55652 23.6195C9.39822 23.6657 9.22977 23.6456 9.0877 23.5654C8.94564 23.4851 8.84213 23.3506 8.80357 23.1941C8.76298 23.0375 8.78936 22.8709 8.87663 22.7325L13.7313 14.4156ZM9.09382 20.5388C9.34549 20.7535 9.3739 21.1288 9.15674 21.3777C8.93755 21.6266 8.55805 21.6526 8.30638 21.4379L5.83038 19.3186C5.71063 19.2162 5.63554 19.0697 5.62539 18.9132C5.61322 18.7546 5.66599 18.6001 5.77152 18.4797C5.78979 18.4556 5.81211 18.4335 5.83646 18.4154L8.30639 16.3021V16.3001C8.56008 16.0853 8.93963 16.1134 9.15675 16.3623C9.37391 16.6112 9.34753 16.9885 9.09384 17.2032L7.14347 18.869L9.09382 20.5388ZM4.3752 10.9033H19.2761C19.609 10.9033 19.8789 11.1703 19.8789 11.4994V26.2388C19.8789 26.5659 19.609 26.8328 19.2761 26.8328H4.3752C4.21487 26.8328 4.06063 26.7706 3.94697 26.6602C3.83535 26.5478 3.77041 26.3953 3.77041 26.2388V11.5015C3.77244 11.1723 4.04237 10.9074 4.37523 10.9074L4.3752 10.9033ZM18.6734 12.0975L4.98049 12.0995V25.6402H18.6734V12.0975ZM34.0326 4.35685C36.6933 4.35886 38.9805 6.2173 39.4983 8.79623C40.0159 11.3772 38.6175 13.9582 36.1598 14.9637C33.702 15.9671 30.8686 15.1162 29.3936 12.9286C27.916 10.741 28.2083 7.82693 30.0917 5.96843C31.1369 4.93285 32.5551 4.35284 34.0326 4.35685ZM37.1195 6.81334C35.6481 5.35431 33.3365 5.12752 31.6033 6.27146C29.8681 7.41544 29.1923 9.61304 29.9899 11.5177C30.7875 13.4243 32.8332 14.506 34.879 14.1047C36.9248 13.7033 38.3961 11.9291 38.3982 9.86597C38.3982 8.72198 37.9394 7.62414 37.1195 6.81334ZM37.3955 17.5164L37.3975 30.2746C37.3955 30.6038 37.1256 30.8727 36.7927 30.8727H24.9302V33.831H31.7598C31.9201 33.831 32.0723 33.8932 32.186 34.0056C32.2996 34.118 32.3625 34.2705 32.3605 34.429V37.4034C32.3605 37.7325 32.0926 37.9995 31.7598 38.0015H5.63176C5.47143 38.0015 5.31718 37.9392 5.20353 37.8269C5.09191 37.7145 5.02696 37.5619 5.02899 37.4034V34.4291C5.02696 34.2705 5.0919 34.118 5.20353 34.0056C5.31718 33.8932 5.47142 33.831 5.63176 33.831H12.4613V30.8727H0.600882C0.268043 30.8707 0.000169685 30.6038 0.000169685 30.2747V7.4674C-0.00185971 7.30886 0.0610566 7.15633 0.17471 7.04394C0.288363 6.93155 0.440578 6.86933 0.600908 6.86933H26.1585C26.1828 6.80511 26.2092 6.73888 26.2376 6.67666V6.67466C26.3492 6.40572 26.4771 6.14079 26.6192 5.8839C26.6618 5.81165 26.6841 5.73137 26.6861 5.64708C26.6861 5.56278 26.6638 5.4805 26.6252 5.40624L26.4548 5.0771H26.4527C26.1097 4.41679 26.2396 3.61601 26.7714 3.09221L27.1793 2.68881C27.707 2.16501 28.5168 2.04057 29.1825 2.37773L29.5153 2.54431C29.5904 2.58445 29.6756 2.60653 29.7609 2.60653C29.8461 2.60452 29.9293 2.58043 30.0024 2.53829C30.522 2.25932 31.0699 2.03454 31.6361 1.86996C31.7194 1.84588 31.7944 1.80373 31.8553 1.74553C31.9142 1.68733 31.9588 1.61508 31.9852 1.5348L32.1009 1.18157C32.3282 0.477129 32.9918 -0.000532602 33.7407 0.00147114H34.3171C35.066 -0.000535685 35.7297 0.477119 35.959 1.18157L36.0747 1.5348H36.0727C36.097 1.61508 36.1417 1.68733 36.2006 1.74553C36.2614 1.80373 36.3365 1.84588 36.4197 1.86996C36.7039 1.95024 36.9819 2.04858 37.2559 2.15897C37.5279 2.27135 37.7958 2.39779 38.0556 2.53828C38.1286 2.57842 38.2118 2.6025 38.2951 2.60651C38.3803 2.60451 38.4655 2.58444 38.5406 2.54229L38.8755 2.37571C39.5391 2.03855 40.3489 2.16498 40.8766 2.6888L41.0816 2.8915L41.2866 3.0922C41.5464 3.34708 41.7168 3.67621 41.7737 4.03344C41.8285 4.38868 41.7696 4.75392 41.6052 5.07503L41.4347 5.40417C41.3475 5.55268 41.3495 5.73733 41.4388 5.88383C41.5829 6.14473 41.7128 6.41164 41.8224 6.67459H41.8203C41.934 6.94553 42.0335 7.22048 42.1167 7.50147C42.1593 7.66805 42.2892 7.79649 42.4556 7.84265L42.8108 7.95905H42.8087C43.5231 8.18182 44.0061 8.84008 44.0001 9.58065V10.1526C44.0062 10.8932 43.5231 11.5515 42.8087 11.7742L42.4536 11.8886H42.4556C42.3724 11.9127 42.2993 11.9569 42.2384 12.0171C42.1796 12.0773 42.139 12.1515 42.1167 12.2338C42.0314 12.5188 41.9299 12.7958 41.8203 13.0607C41.7108 13.3276 41.5809 13.5885 41.4368 13.8515H41.4388C41.3982 13.9237 41.3738 14.006 41.3698 14.0883C41.3718 14.1726 41.3941 14.2549 41.4347 14.3311L41.6052 14.6603V14.6583C41.7696 14.9814 41.8285 15.3446 41.7737 15.7019C41.7148 16.0571 41.5443 16.3862 41.2845 16.6391L41.0796 16.8418V16.8438C41.0694 16.8538 41.0593 16.8639 41.0471 16.8719L40.8746 17.0425V17.0445C40.349 17.5703 39.5371 17.6968 38.8735 17.3596L38.5386 17.193V17.191C38.4635 17.1509 38.3783 17.1308 38.293 17.1288C38.2098 17.1308 38.1266 17.1549 38.0535 17.197C37.8343 17.3154 37.6152 17.4218 37.3899 17.5181L37.3955 17.5164ZM36.7968 3.26311C36.5634 3.16678 36.3239 3.08249 36.0824 3.01225C35.8125 2.93598 35.5649 2.79549 35.364 2.60082C35.1631 2.40815 35.0129 2.16933 34.9276 1.90439L34.8119 1.55317C34.7795 1.45082 34.7145 1.3585 34.6273 1.29227C34.5359 1.23006 34.4284 1.19594 34.3188 1.19795H33.7424C33.6328 1.19594 33.5252 1.23006 33.4339 1.29227C33.3466 1.3585 33.2817 1.44882 33.2492 1.55317L33.1335 1.90439C33.0483 2.16931 32.8981 2.40814 32.6972 2.60082C32.4942 2.7955 32.2486 2.93598 31.9767 3.01225C31.7352 3.08249 31.4977 3.16678 31.2664 3.26311C31.0309 3.35945 30.8016 3.46582 30.5784 3.58624C30.0811 3.86119 29.4763 3.86922 28.971 3.61032L28.6361 3.44374C28.5387 3.39156 28.427 3.37149 28.3175 3.38955C28.2099 3.40561 28.1104 3.4598 28.0353 3.53807L27.6254 3.94347C27.459 4.096 27.4204 4.34085 27.53 4.5375L27.7005 4.86664H27.7025C27.9623 5.36638 27.9521 5.96244 27.6782 6.45618C27.5564 6.67695 27.4468 6.90373 27.3494 7.13452C27.252 7.36532 27.1687 7.60215 27.0977 7.84097C27.0186 8.1079 26.8765 8.35074 26.6817 8.54942C26.4848 8.75012 26.2433 8.89864 25.9733 8.98293L25.6182 9.09733H25.6202C25.5147 9.12944 25.4233 9.19567 25.3584 9.28397C25.2935 9.37027 25.259 9.47664 25.261 9.58502V10.157C25.259 10.2654 25.2935 10.3718 25.3584 10.4601C25.4233 10.5484 25.5147 10.6146 25.6202 10.6447L25.9754 10.7611H25.9733C26.2412 10.8454 26.4848 10.9919 26.6817 11.1886C26.8765 11.3893 27.0186 11.6341 27.0977 11.901C27.1687 12.1399 27.252 12.3767 27.3494 12.6075C27.4468 12.8383 27.5564 13.0651 27.6782 13.2838C27.9521 13.7775 27.9623 14.3736 27.7025 14.8754L27.532 15.2045H27.53C27.4204 15.4012 27.459 15.646 27.6254 15.7985L28.0353 16.2039C28.1896 16.3685 28.4372 16.4087 28.6361 16.2983L28.9709 16.1317C29.2206 16.0033 29.4966 15.939 29.7767 15.943C30.0567 15.9471 30.3327 16.0193 30.5783 16.1518C30.8016 16.2722 31.0289 16.3806 31.2643 16.4769C31.4977 16.5732 31.7352 16.6555 31.9767 16.7257C32.2466 16.804 32.4942 16.9445 32.6971 17.1372C32.8981 17.3319 33.0483 17.5707 33.1335 17.8356L33.2492 18.1868C33.3141 18.4016 33.515 18.5461 33.7424 18.5421H34.3187C34.4283 18.5441 34.5379 18.5099 34.6272 18.4457C34.7145 18.3815 34.7794 18.2912 34.8119 18.1868L34.8992 17.9159L34.9134 17.8657H34.9154C34.9195 17.8557 34.9235 17.8477 34.9256 17.8376C35.0128 17.5727 35.163 17.3319 35.3639 17.1372C35.5649 16.9445 35.8104 16.804 36.0804 16.7298C36.3219 16.6575 36.5614 16.5752 36.7948 16.4769C37.0282 16.3806 37.2575 16.2742 37.4807 16.1538C37.7283 16.0213 38.0023 15.9491 38.2844 15.943C38.5645 15.939 38.8405 16.0052 39.0881 16.1317L39.423 16.2983C39.5204 16.3504 39.63 16.3685 39.7396 16.3525C39.8492 16.3344 39.9507 16.2822 40.0278 16.2019L40.1983 16.0333C40.2084 16.0233 40.2186 16.0113 40.2267 16.0012L40.4317 15.7985H40.4337C40.5129 15.7223 40.5636 15.6239 40.5798 15.5176C40.5961 15.4112 40.5778 15.3008 40.525 15.2025L40.3546 14.8733V14.8753C40.0948 14.3736 40.1029 13.7775 40.3789 13.2838C40.5007 13.063 40.6083 12.8383 40.7036 12.6055C40.8011 12.3747 40.8863 12.1398 40.9573 11.899C41.1136 11.3571 41.5358 10.9277 42.0797 10.759L42.4369 10.6426V10.6446C42.5404 10.6125 42.6337 10.5483 42.6967 10.46C42.7616 10.3717 42.7961 10.2653 42.7961 10.1549V9.58094C42.7961 9.47256 42.7616 9.36619 42.6967 9.27789C42.6317 9.19159 42.5404 9.12536 42.4369 9.09324L42.0797 8.97885C41.8118 8.89456 41.5703 8.74604 41.3754 8.54534C41.1786 8.34665 41.0365 8.10381 40.9573 7.83689C40.8153 7.35723 40.6204 6.89164 40.3789 6.4521C40.1029 5.95839 40.0948 5.36232 40.3546 4.86256L40.525 4.53342C40.5778 4.43709 40.5961 4.32671 40.5798 4.21833C40.5636 4.11197 40.5108 4.01362 40.4317 3.93736L40.0237 3.53396H40.0217C39.8654 3.36939 39.6178 3.33126 39.4189 3.43964L39.0841 3.60621H39.082C38.8344 3.73265 38.5584 3.79687 38.2783 3.79487C37.9982 3.79086 37.7222 3.7166 37.4766 3.58213C37.2534 3.46372 37.0241 3.35535 36.7886 3.26102L36.7968 3.26311ZM29.8051 26.5656H30.7265V27.7618H29.8051V26.5656ZM27.6965 26.5656H28.6199V27.7618H27.6965V26.5656ZM23.9236 26.5656H26.6573V27.7618H23.9236V26.5656ZM23.9236 22.2306L30.7267 22.2326V23.4228L23.9215 23.4207L23.9236 22.2306ZM23.9236 24.3982L30.7267 24.4002V25.5943H23.9215L23.9236 24.3982ZM6.30123 4.59961H8.29217V5.79374L6.30123 5.79575V4.59961ZM0.598047 4.59961H4.53125V5.79374L0.600074 5.79575L0.598047 4.59961ZM0.598047 2.30163H14.9326V3.49576L0.600126 3.49776L0.598047 2.30163ZM0.598047 0.00163382H14.9326V1.19777H0.600126L0.598047 0.00163382ZM24.3231 35.025H6.23629V36.8052H31.1548V35.025H24.3231ZM23.7203 30.8727H13.6679V33.8309H23.7203V30.8727Z"
                                            fill="white" />
                                    </svg>
                                </figure>
                                <div class="d-flex flex-column gap-2">
                                    <h3 class="sub_title">
                                        আপনার ওয়েবসাইট কাস্টমাইজ করুন
                                    </h3>
                                    <p class="description">
                                        পণ্য যোগ করুন, আপনার পৃষ্ঠাগুলো কাস্টমাইজ করুন, এবং পেমেন্ট গেটওয়ে ইন্টিগ্রেট
                                        করুন।
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="process_card">
                                <figure class="icon_wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="41" height="41"
                                        viewBox="0 0 41 41" fill="none">
                                        <path
                                            d="M40.3201 34.0013H39.6401V11.4866C39.6208 10.9586 39.3973 10.4588 39.0168 10.0922C38.6363 9.72569 38.1285 9.52106 37.6001 9.52142H26.7202C26.5447 7.2089 25.7586 4.98439 24.4422 3.07505C23.837 2.15025 22.239 0.00146484 20.6002 0.00146484C18.9614 0.00146484 17.3634 2.14345 16.7582 3.06825C15.4574 4.98805 14.6729 7.21046 14.4802 9.52142H3.6003C3.07198 9.52106 2.56412 9.72569 2.18362 10.0922C1.80313 10.4588 1.57968 10.9586 1.56031 11.4866V34.0013H0.880314C0.699968 34.0013 0.527008 34.0729 0.399484 34.2005C0.27196 34.328 0.200317 34.5009 0.200317 34.6813V37.4013C0.200317 38.303 0.558529 39.1678 1.19615 39.8054C1.83377 40.4431 2.69857 40.8013 3.6003 40.8013H37.6001C38.5019 40.8013 39.3667 40.4431 40.0043 39.8054C40.6419 39.1678 41.0001 38.303 41.0001 37.4013V34.6813C41.0001 34.5009 40.9285 34.328 40.801 34.2005C40.6734 34.0729 40.5005 34.0013 40.3201 34.0013ZM26.489 12.6766C27.5046 14.0038 28.2024 15.546 28.529 17.185C27.8587 16.4275 27.0541 15.8004 26.1558 15.3354C26.2782 14.3154 26.3938 13.4314 26.489 12.6766ZM20.6002 1.36146C21.0626 1.36146 21.9602 1.98026 22.953 3.31985C22.2664 3.81101 21.4444 4.0771 20.6002 4.08145C19.7545 4.08014 18.9309 3.81116 18.2474 3.31305C19.1926 2.04146 20.1174 1.36146 20.6002 1.36146ZM17.4926 4.45544C18.4009 5.09891 19.4871 5.44353 20.6002 5.44144C21.7122 5.44284 22.7975 5.10086 23.7078 4.46224C24.6976 6.0798 25.2657 7.91983 25.3602 9.81382C25.3602 9.92262 25.3602 10.0382 25.3602 10.1674C25.3602 10.419 25.3602 10.7114 25.299 11.0174C25.197 12.0986 25.0066 13.6014 24.721 15.621C24.4762 17.321 24.2314 18.9054 24.1022 19.701H17.0982C16.969 18.885 16.7242 17.3074 16.4794 15.621C16.289 14.3086 16.0374 12.4454 15.9082 11.0242V10.8542C15.9082 10.6026 15.8606 10.3646 15.8538 10.1742C15.8618 8.15324 16.429 6.1739 17.4926 4.45544ZM17.8802 21.0814H23.3202V22.4414H17.8802V21.0814ZM14.7182 12.6766C14.827 13.5878 14.9494 14.5398 15.065 15.349C14.1682 15.8162 13.364 16.443 12.6919 17.1986C13.0121 15.556 13.7054 14.0089 14.7182 12.6766ZM2.9203 11.4866C2.93879 11.3195 3.01852 11.1652 3.1441 11.0534C3.26967 10.9417 3.4322 10.8804 3.6003 10.8814H14.4802C12.2392 13.273 11.0194 16.4444 11.0803 19.7214V19.8778C11.0767 20.0359 11.1285 20.1903 11.2265 20.3144C11.3246 20.4385 11.4628 20.5246 11.6175 20.5578H11.7603C11.8911 20.5575 12.019 20.5195 12.1288 20.4483C12.2385 20.3772 12.3254 20.2759 12.3791 20.1566C12.9758 18.7547 13.9865 17.5684 15.2758 16.7566C15.575 18.7966 15.847 20.4626 15.847 20.483C15.8669 20.6477 15.9464 20.7994 16.0704 20.9096C16.1943 21.0198 16.3543 21.0809 16.5202 21.0814V23.1214C16.5202 23.3017 16.5919 23.4747 16.7194 23.6022C16.8469 23.7297 17.0199 23.8013 17.2002 23.8013H24.0002C24.1805 23.8013 24.3535 23.7297 24.481 23.6022C24.6086 23.4747 24.6802 23.3017 24.6802 23.1214V21.0814C24.8432 21.0835 25.0015 21.0269 25.1263 20.9221C25.2511 20.8173 25.3341 20.6711 25.3602 20.5102C25.3602 20.5102 25.6322 18.817 25.9382 16.7702C27.227 17.5807 28.2358 18.7676 28.8282 20.1702C28.8818 20.2895 28.9687 20.3908 29.0785 20.4619C29.1882 20.5331 29.3162 20.5711 29.447 20.5714H29.5898C29.7444 20.5382 29.8827 20.4521 29.9807 20.328C30.0788 20.2039 30.1305 20.0495 30.127 19.8914V19.7214C30.1752 16.7878 29.2151 13.9265 27.407 11.6158C27.2098 11.371 26.9922 11.133 26.7678 10.9018H37.6001C37.7682 10.9008 37.9308 10.9621 38.0563 11.0738C38.1819 11.1856 38.2616 11.3399 38.2801 11.507V34.0013H2.9203V11.4866ZM25.9178 35.3613C25.7775 35.7581 25.5179 36.1018 25.1746 36.3453C24.8313 36.5888 24.4211 36.7201 24.0002 36.7213H17.2002C16.7794 36.7201 16.3691 36.5888 16.0258 36.3453C15.6825 36.1018 15.4229 35.7581 15.2826 35.3613H25.9178ZM39.6401 37.4013C39.6401 37.9423 39.4252 38.4612 39.0426 38.8438C38.6601 39.2263 38.1412 39.4413 37.6001 39.4413H3.6003C3.05926 39.4413 2.54038 39.2263 2.15781 38.8438C1.77524 38.4612 1.56031 37.9423 1.56031 37.4013V35.3613H13.8683C14.025 36.1293 14.4423 36.8195 15.0495 37.3151C15.6567 37.8108 16.4164 38.0814 17.2002 38.0813H24.0002C24.784 38.0814 25.5438 37.8108 26.151 37.3151C26.7581 36.8195 27.1754 36.1293 27.3322 35.3613H39.6401V37.4013ZM17.2002 25.9365C17.175 25.7562 17.2224 25.5732 17.3321 25.4278C17.4418 25.2824 17.6047 25.1866 17.785 25.1613C17.9654 25.1361 18.1484 25.1835 18.2937 25.2932C18.4391 25.4029 18.535 25.5658 18.5602 25.7461C18.805 27.4257 19.621 29.9213 20.6002 29.9213C21.5794 29.9213 22.4022 27.4257 22.6402 25.7461C22.6527 25.6568 22.6827 25.5709 22.7284 25.4932C22.7741 25.4154 22.8347 25.3475 22.9067 25.2932C22.9787 25.2389 23.0606 25.1993 23.1479 25.1767C23.2352 25.1541 23.3261 25.1488 23.4154 25.1613C23.5047 25.1738 23.5907 25.2038 23.6684 25.2495C23.7461 25.2953 23.8141 25.3558 23.8684 25.4278C23.9227 25.4998 23.9622 25.5818 23.9849 25.6691C24.0075 25.7564 24.0127 25.8472 24.0002 25.9365C23.8642 26.8273 23.1026 31.2813 20.6002 31.2813C18.0978 31.2813 17.3362 26.8273 17.2002 25.9365ZM19.9202 27.2013V25.8413C19.9202 25.661 19.9919 25.488 20.1194 25.3605C20.2469 25.233 20.4199 25.1613 20.6002 25.1613C20.7806 25.1613 20.9535 25.233 21.0811 25.3605C21.2086 25.488 21.2802 25.661 21.2802 25.8413V27.2013C21.2802 27.3817 21.2086 27.5546 21.0811 27.6822C20.9535 27.8097 20.7806 27.8813 20.6002 27.8813C20.4199 27.8813 20.2469 27.8097 20.1194 27.6822C19.9919 27.5546 19.9202 27.3817 19.9202 27.2013ZM20.6002 12.9214C21.1382 12.9214 21.6641 12.7619 22.1114 12.463C22.5587 12.1641 22.9073 11.7393 23.1132 11.2423C23.319 10.7453 23.3729 10.1984 23.2679 9.67077C23.163 9.14315 22.9039 8.65849 22.5235 8.27809C22.1431 7.8977 21.6585 7.63864 21.1309 7.53369C20.6032 7.42874 20.0563 7.48261 19.5593 7.68848C19.0623 7.89434 18.6375 8.24297 18.3386 8.69027C18.0398 9.13757 17.8802 9.66345 17.8802 10.2014C17.8802 10.9228 18.1668 11.6146 18.6769 12.1247C19.187 12.6348 19.8788 12.9214 20.6002 12.9214ZM20.6002 8.84142C20.8692 8.84142 21.1321 8.92118 21.3558 9.07062C21.5794 9.22006 21.7538 9.43246 21.8567 9.68097C21.9596 9.92947 21.9866 10.2029 21.9341 10.4667C21.8816 10.7305 21.7521 10.9729 21.5619 11.1631C21.3717 11.3533 21.1294 11.4828 20.8655 11.5353C20.6017 11.5878 20.3283 11.5608 20.0798 11.4579C19.8313 11.355 19.6189 11.1806 19.4694 10.957C19.32 10.7333 19.2402 10.4704 19.2402 10.2014C19.2402 9.84072 19.3835 9.4948 19.6386 9.23976C19.8936 8.98471 20.2395 8.84142 20.6002 8.84142Z"
                                            fill="white" />
                                    </svg>
                                </figure>
                                <div class="d-flex flex-column gap-2">
                                    <h3 class="sub_title">
                                        চালু করুন এবং বৃদ্ধি করুন
                                    </h3>
                                    <p class="description">
                                        আপনার নতুন ওয়েবসাইট চালু করুন, অর্ডার ম্যানেজ করুন এবং আপনার ব্যবসা বাড়ান।
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PROCESS-SECTION-END -->

    <!-- FACILITIES-SECTION-START -->
    <section class="facilities_section" id="facilities_section">
        <div class="container">
            <div class="facilities_section_wrapper">
                <div class="facilities_section_header">
                    <div class="d-flex justify-content-center">
                        <div class="process_section_title">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10"
                                fill="none">
                                <circle cx="5" cy="5" r="5" fill="#DE00A5" />
                            </svg>
                            <h3 class="sub_title">
                                বেনেফিটস
                            </h3>
                        </div>
                    </div>
                    <div class="d-flex flex-column gap-4">
                        <h1 class="title">
                            <span>সুবিধা</span>সমূহ
                        </h1>
                        <p class="description">
                            কেন ব্যবহারকারীরা এই প্ল্যাটফর্ম বেছে নেবে, তার কারণগুলি
                        </p>
                    </div>
                </div>

                <div class="facilities_content position-relative">
                    <div class="row g-4 facilities_card_inner">
                        <div class="col-md-6 col-lg-4">
                            <div class="facilities_card">
                                <figure class="icon_wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                                        viewBox="0 0 80 80" fill="none">
                                        <rect width="80" height="80" rx="40"
                                            fill="url(#paint0_linear_1_1288)" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M30.761 41.2741C33.8104 41.2741 36.2836 43.6934 36.2836 46.6744C36.2836 49.657 33.8101 52.076 30.761 52.076C27.7118 52.076 25.2384 49.6567 25.2384 46.6744C25.2403 43.6936 27.7118 41.2741 30.761 41.2741ZM32.6242 46.6758C32.6242 45.6704 31.7908 44.8534 30.761 44.8534C29.733 44.8534 28.8978 45.6685 28.8978 46.6758C28.8978 47.6812 29.7311 48.4982 30.761 48.4982C31.7908 48.4982 32.6242 47.6831 32.6242 46.6758ZM50.7376 41.0726C49.6106 41.3879 48.5998 41.9717 47.7779 42.7458C47.7569 42.7663 47.7283 42.7738 47.6997 42.7682L45.6648 42.3448C45.6267 42.3373 45.5905 42.3541 45.5714 42.3858L44.4005 44.3704C44.3814 44.404 44.3852 44.4432 44.4119 44.4712L45.8022 45.9821C45.8212 46.0045 45.8289 46.0306 45.8212 46.0604C45.5428 47.1554 45.5428 48.3118 45.8212 49.4049C45.8289 49.4329 45.8212 49.4608 45.8022 49.4832L44.4119 50.9941C44.3852 51.0221 44.3814 51.0613 44.4005 51.0948L45.5714 53.0795C45.5905 53.1131 45.6286 53.128 45.6648 53.1205L47.6997 52.6971C47.7283 52.6915 47.7569 52.699 47.7779 52.7195C48.5979 53.4936 49.6106 54.0755 50.7376 54.3926C50.7662 54.4001 50.7872 54.4206 50.7967 54.4486L51.4394 56.3811C51.4509 56.4165 51.4833 56.4408 51.5233 56.4408H53.8652C53.9034 56.4408 53.9358 56.4165 53.9491 56.3811L54.5918 54.4486C54.6013 54.4206 54.6223 54.4001 54.6509 54.3926C55.778 54.0774 56.7887 53.4936 57.6107 52.7195C57.6317 52.699 57.6603 52.6915 57.6889 52.6971L59.7237 53.1205C59.7619 53.128 59.7981 53.1112 59.8172 53.0795L60.9881 51.0948C61.0072 51.0613 61.0033 51.0221 60.9766 50.9941L59.5864 49.4832C59.5673 49.4608 59.5597 49.4347 59.5673 49.4049C59.8457 48.3099 59.8457 47.1535 59.5673 46.0604C59.5597 46.0324 59.5673 46.0045 59.5864 45.9821L60.9766 44.4712C61.0033 44.4432 61.0072 44.404 60.9881 44.3704L59.8172 42.3858C59.7981 42.3522 59.76 42.3373 59.7237 42.3448L57.6889 42.7682C57.6603 42.7738 57.6317 42.7663 57.6107 42.7458C56.7906 41.9717 55.778 41.3898 54.6509 41.0726C54.6223 41.0652 54.6013 41.0447 54.5918 41.0167L53.9491 39.0842C53.9377 39.0488 53.9053 39.0245 53.8652 39.0245H51.5233C51.4852 39.0245 51.4528 39.0488 51.4394 39.0842L50.7967 41.0167C50.7872 41.0447 50.7662 41.0652 50.7376 41.0726ZM48.7924 47.7316C48.7924 45.6238 50.5393 43.9152 52.6943 43.9152C54.8493 43.9152 56.5961 45.6238 56.5961 47.7316C56.5961 49.8394 54.8493 51.548 52.6943 51.548C50.5393 51.548 48.7924 49.8394 48.7924 47.7316ZM39.5624 35.8572L38.4162 36.096C38.3781 36.1034 38.3418 36.0867 38.3228 36.0549L37.1518 34.0703C37.1328 34.0367 37.1366 33.9976 37.1633 33.9696L38.5536 32.4587C38.5726 32.4363 38.5802 32.4102 38.5726 32.3803C38.2942 31.2854 38.2942 30.129 38.5726 29.0359C38.5802 29.0079 38.5726 28.9799 38.5536 28.9575L37.1633 27.4466C37.1366 27.4187 37.1328 27.3795 37.1518 27.3459L38.3228 25.3613C38.3418 25.3277 38.38 25.3128 38.4162 25.3202L40.4511 25.7436C40.4797 25.7492 40.5083 25.7418 40.5292 25.7213C41.3493 24.9472 42.3619 24.3652 43.489 24.0481C43.5176 24.0406 43.5386 24.0201 43.5481 23.9921L44.1908 22.0597C44.2022 22.0242 44.2347 22 44.2747 22H46.6166C46.6547 22 46.6871 22.0242 46.7005 22.0597L47.3432 23.9921C47.3527 24.0201 47.3737 24.0406 47.4023 24.0481C48.5294 24.3633 49.5401 24.9472 50.362 25.7213C50.383 25.7418 50.4116 25.7492 50.4402 25.7436L52.4751 25.3202C52.5132 25.3128 52.5495 25.3296 52.5685 25.3613L53.7394 27.3459C53.7585 27.3795 53.7547 27.4186 53.728 27.4466L52.3377 28.9575C52.3187 28.9799 52.311 29.006 52.3187 29.0359C52.5971 30.1308 52.5971 31.2873 52.3187 32.3803C52.311 32.4083 52.3187 32.4363 52.3377 32.4587L53.728 33.9696C53.7547 33.9976 53.7585 34.0367 53.7394 34.0703L52.5685 36.0549C52.5495 36.0885 52.5113 36.1034 52.4751 36.096L50.4402 35.6726C50.4116 35.667 50.383 35.6744 50.362 35.6949C49.542 36.469 48.5294 37.051 47.4023 37.3681C47.3737 37.3756 47.3527 37.3961 47.3432 37.4241L46.7005 39.3565C46.689 39.392 46.6566 39.4162 46.6166 39.4162H44.2747C44.2366 39.4162 44.2041 39.392 44.1908 39.3565L43.5481 37.4241C43.5386 37.3961 43.5176 37.3756 43.489 37.3681C42.3619 37.051 41.3512 36.469 40.5292 35.6949C40.5083 35.6744 40.4797 35.667 40.4511 35.6726L39.5624 35.8572ZM45.4458 34.5254C47.6008 34.5254 49.3476 32.8168 49.3476 30.709C49.3476 28.6012 47.6008 26.8926 45.4458 26.8926C43.2908 26.8926 41.5439 28.6012 41.5439 30.709C41.5439 32.8168 43.2908 34.5254 45.4458 34.5254ZM19.853 40.5168L19.0119 41.9437C18.9928 41.9773 18.9967 42.0165 19.0234 42.0444L21.022 44.2157C21.0411 44.238 21.0487 44.266 21.0411 44.294C20.6425 45.8552 20.6425 47.5042 21.0411 49.0636C21.0487 49.0915 21.0411 49.1195 21.022 49.1419L19.0234 51.3131C18.9967 51.3411 18.9928 51.3802 19.0119 51.4138L20.6958 54.2659C20.7149 54.2995 20.7531 54.3144 20.7893 54.3069L23.7147 53.6988C23.7433 53.6932 23.7719 53.7007 23.7948 53.7212C24.9638 54.8273 26.4075 55.6593 28.0151 56.1069C28.0437 56.1144 28.0647 56.1349 28.0742 56.1629L28.9973 58.9403C29.0087 58.9757 29.0411 59 29.0812 59H32.449C32.4872 59 32.5196 58.9757 32.5329 58.9403L33.4559 56.1629C33.4655 56.1349 33.4864 56.1144 33.515 56.1069C35.1227 55.6593 36.5663 54.8273 37.7354 53.7212C37.7563 53.7007 37.7849 53.6932 37.8155 53.6988L40.7409 54.3069C40.779 54.3144 40.8153 54.2976 40.8343 54.2659L42.5183 51.4138C42.5373 51.3803 42.5335 51.3411 42.5068 51.3131L40.5082 49.1419C40.4872 49.1195 40.4815 49.0915 40.4891 49.0636C40.8877 47.5042 40.8877 45.8534 40.4891 44.294C40.4815 44.266 40.4891 44.238 40.5082 44.2157L42.5068 42.0444C42.5335 42.0165 42.5373 41.9773 42.5183 41.9437L40.8343 39.0917C40.8153 39.0581 40.7771 39.0432 40.7409 39.0506L37.8155 39.6587C37.7868 39.6643 37.7582 39.6568 37.7354 39.6363C36.5663 38.5302 35.1227 37.6983 33.515 37.2506C33.4864 37.2431 33.4655 37.2226 33.4559 37.1946L32.5329 34.4172C32.5215 34.3818 32.4891 34.3575 32.449 34.3575H29.0812C29.043 34.3575 29.0106 34.3818 28.9973 34.4172L28.0742 37.1946C28.0647 37.2226 28.0437 37.2431 28.0151 37.2506C26.4075 37.6983 24.9638 38.5302 23.7948 39.6363C23.7738 39.6568 23.7452 39.6643 23.7147 39.6587L20.7893 39.0506C20.7512 39.0432 20.7149 39.06 20.6958 39.0917L19.853 40.5168Z"
                                            fill="url(#paint1_linear_1_1288)" />
                                        <defs>
                                            <linearGradient id="paint0_linear_1_1288" x1="40" y1="23.5"
                                                x2="40" y2="99" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FFF0FB" />
                                                <stop offset="1" stop-color="#FFA7E8" />
                                            </linearGradient>
                                            <linearGradient id="paint1_linear_1_1288" x1="40" y1="22"
                                                x2="40" y2="59" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FF56D4" />
                                                <stop offset="1" stop-color="#DE00A5" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </figure>
                                <div class="d-flex flex-column gap-2">
                                    <h3 class="sub_title">
                                        অসীম কাস্টমাইজেশন
                                    </h3>
                                    <p class="description">
                                        আপনার ওয়েবসাইটকে আপনার ইচ্ছামত ডিজাইন করুন, লেআউট থেকে শুরু করে ব্র্যান্ডিং
                                        পর্যন্ত।।
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="facilities_card">
                                <figure class="icon_wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                                        viewBox="0 0 80 80" fill="none">
                                        <rect width="80" height="80" rx="40"
                                            fill="url(#paint0_linear_1_1298)" />
                                        <path
                                            d="M50.3337 17C52.4573 17 54.167 18.7097 54.167 20.8333V21.381H26.786V20.8333C26.786 18.7097 28.4957 17 30.6194 17H50.3337ZM54.167 23.5714V55.3333H26.786V23.5714H54.167ZM40.4765 31.2381L38.0807 37.0736L31.7146 37.5186L36.609 41.5573L35.0688 47.6667L40.4765 44.3296L45.8843 47.6667L44.3441 41.5573L49.2384 37.5186L42.8723 37.0736L40.4765 31.2381ZM54.167 57.5238V59.1667C54.167 61.2903 52.4573 63 50.3337 63H30.6194C28.4957 63 26.786 61.2903 26.786 59.1667V57.5238H54.167Z"
                                            fill="url(#paint1_linear_1_1298)" />
                                        <defs>
                                            <linearGradient id="paint0_linear_1_1298" x1="40" y1="23.5"
                                                x2="40" y2="99" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#F9F5FF" />
                                                <stop offset="1" stop-color="#CFB1FF" />
                                            </linearGradient>
                                            <linearGradient id="paint1_linear_1_1298" x1="40.4765" y1="17"
                                                x2="40.4765" y2="63" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#7024EC" />
                                                <stop offset="1" stop-color="#8E48FF" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </figure>
                                <div class="d-flex flex-column gap-2">
                                    <h3 class="sub_title">
                                        মোবাইল-ফ্রেন্ডলি ডিজাইন
                                    </h3>
                                    <p class="description">
                                        আপনার ওয়েবসাইট যেকোনো ডিভাইসে চমৎকারভাবে প্রদর্শিত হবে।
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="facilities_card">
                                <figure class="icon_wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                                        viewBox="0 0 80 80" fill="none">
                                        <rect width="80" height="80" rx="40"
                                            fill="url(#paint0_linear_1_1308)" />
                                        <path
                                            d="M56.6338 23.7336H52.2215C48.16 23.7336 44.1908 22.5247 40.7754 20.2371C40.3138 19.921 39.7046 19.921 39.2431 20.2371C35.8277 22.5247 31.8769 23.7336 27.7969 23.7336H23.3846C22.6277 23.7336 22 24.3659 22 25.1284V36.2873C22 46.5349 29.6246 58.8469 39.8523 60C39.9077 60 39.9631 60 40 60C40.0369 60 40.1108 60 40.1477 60C50.3569 58.8469 58 46.5349 58 36.2873V25.1284C58 24.3659 57.3723 23.7336 56.6154 23.7336H56.6338ZM48.6585 35.5806L38.8738 45.4376C38.5969 45.7166 38.2462 45.8468 37.8954 45.8468C37.5446 45.8468 37.1938 45.7166 36.9169 45.4376L31.3785 39.8582C30.8431 39.3188 30.8431 38.4261 31.3785 37.8868C31.9138 37.3474 32.8 37.3474 33.3354 37.8868L37.8954 42.4805L46.7015 33.6092C47.2369 33.0699 48.1231 33.0699 48.6585 33.6092C49.1938 34.1486 49.1938 35.0413 48.6585 35.5806Z"
                                            fill="url(#paint1_linear_1_1308)" />
                                        <defs>
                                            <linearGradient id="paint0_linear_1_1308" x1="40" y1="-4.5"
                                                x2="40" y2="100.5" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FFFBF7" />
                                                <stop offset="1" stop-color="#F8D3B1" />
                                            </linearGradient>
                                            <linearGradient id="paint1_linear_1_1308" x1="27.5" y1="20"
                                                x2="42.9751" y2="62.9204" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#F39200" />
                                                <stop offset="1" stop-color="#FFBB54" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </figure>
                                <div class="d-flex flex-column gap-2">
                                    <h3 class="sub_title">
                                        নিরাপদ ও দ্রুত
                                    </h3>
                                    <p class="description">
                                        দ্রুত লোড টাইম এবং নিরাপদ পেমেন্ট প্রসেসিং উপভোগ করুন।
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="facilities_card">
                                <figure class="icon_wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                                        viewBox="0 0 80 80" fill="none">
                                        <rect width="80" height="80" rx="40"
                                            fill="url(#paint0_linear_1_1319)" />
                                        <path
                                            d="M55.3039 33.8794C53.7268 30.9487 50.0684 32.8525 50.0684 32.8525C52.485 33.5771 53.4315 34.8453 53.4315 34.8453C53.5541 33.6181 52.4445 33.0739 52.465 33.0739C54.9287 33.0388 55.44 34.1315 55.3039 33.8794Z"
                                            fill="url(#paint1_linear_1_1319)" />
                                        <path
                                            d="M40.0006 18.9999C28.4026 18.9999 19 28.4009 19 39.9999C19 51.5973 28.4026 60.9999 40.0006 60.9999C51.5985 60.9999 61.0011 51.5978 61.0011 39.9999C61.0011 28.4014 51.5985 18.9999 40.0006 18.9999ZM22.9376 39.9999C22.9376 30.5768 30.5769 22.9364 40.0006 22.9364C43.3124 22.9364 46.4029 23.8813 49.0204 25.5145L26.412 50.3193C24.2323 47.4534 22.9376 43.8776 22.9376 39.9999ZM40.0006 57.0623C36.0964 57.0623 32.4984 55.7503 29.6234 53.5432L52.5266 28.4149C55.3417 31.4584 57.0635 35.5278 57.0635 39.9999C57.0635 49.4231 49.4237 57.0623 40.0006 57.0623Z"
                                            fill="url(#paint2_linear_1_1319)" />
                                        <path
                                            d="M49.6591 32.7256C49.6591 32.7256 51.7524 32.4923 51.5234 30.5994L46.0784 36.5557C46.7673 36.7485 47.4233 37.1928 47.8941 38.0669C48.0226 38.3061 47.5702 37.3391 45.4294 37.2657L45.2879 37.4207C45.6006 37.6609 46.1059 38.183 46.0211 39.0339C46.0211 39.0339 45.6486 38.534 44.7739 37.9838L44.1088 38.7105C44.9321 39.6311 45.7901 40.8205 46.3996 42.2529C46.4563 42.1579 46.5665 42.0915 46.6971 42.0915H50.5743V41.4965H47.1026H46.9341H46.6631C46.4758 41.4965 46.324 41.3637 46.324 41.199V39.5792V39.3725V39.2089C46.324 39.0442 46.4758 38.9114 46.6631 38.9114H48.4405V37.6037C48.4405 37.439 48.5922 37.3062 48.7801 37.3062H49.2191C49.4064 37.3062 49.5581 37.439 49.5581 37.6037V38.9114H51.369C51.5564 38.9114 51.7081 39.0442 51.7081 39.2089V39.5792C51.7081 39.745 51.5564 39.8767 51.369 39.8767H47.4417V40.4717H51.369C51.5564 40.4717 51.7081 40.6045 51.7081 40.7692V41.1995C51.7081 41.2325 51.7021 41.2638 51.6913 41.2924V42.8047C51.6913 42.9694 51.5396 43.1022 51.3523 43.1022H51.1833H50.9133H49.6089V44.3645C49.6089 44.5292 49.4572 44.6631 49.2698 44.6631H48.7974C48.61 44.6631 48.4578 44.5292 48.4578 44.3645V43.1022H46.7182C47.156 44.4244 47.3699 45.9233 47.1685 47.5862C50.5856 47.8826 54.3018 46.948 54.8655 44.1982C56.3406 37.0038 49.6591 32.7256 49.6591 32.7256Z"
                                            fill="url(#paint3_linear_1_1319)" />
                                        <path
                                            d="M38.5227 33.8297C36.93 30.973 33.3158 32.8519 33.3158 32.8519C35.7325 33.5765 36.6789 34.8447 36.6789 34.8447C36.8015 33.6175 35.692 33.0733 35.7125 33.0733C37.485 33.0479 38.2436 33.6046 38.4812 33.8254C37.9008 33.7957 37.4494 34.131 37.336 34.6914C37.2048 35.3409 37.5844 35.9813 37.9715 36.4407L39.7975 34.4436C39.7473 34.4069 39.6976 34.3685 39.6468 34.3275C39.257 34.0133 38.8683 33.8583 38.5227 33.8297Z"
                                            fill="url(#paint4_linear_1_1319)" />
                                        <path d="M31.2448 43.8004L31.295 43.7458H31.2448V43.8004Z"
                                            fill="url(#paint5_linear_1_1319)" />
                                        <path
                                            d="M40.5177 42.6385V43.4219H42.3286C42.516 43.4219 42.6677 43.5547 42.6677 43.7194V44.0909C42.6677 44.2545 42.516 44.3884 42.3286 44.3884H38.9196L38.4013 44.9558V44.9823H42.3286C42.516 44.9823 42.6677 45.1151 42.6677 45.2798V45.7101C42.6677 45.743 42.6618 45.7732 42.651 45.8029V47.3152C42.651 47.4799 42.4987 47.6127 42.3119 47.6127H42.1429H41.8729H40.5685V48.8751C40.5685 49.0397 40.4162 49.1736 40.2289 49.1736H39.7559C39.5686 49.1736 39.4169 49.0397 39.4169 48.8751V47.6127H37.6562C37.4688 47.6127 37.3171 47.4799 37.3171 47.3152V46.8995C37.3171 46.7348 37.4694 46.602 37.6562 46.602H41.5333V46.007H38.0617H37.8932H37.6227C37.5671 46.007 37.5158 45.9946 37.4694 45.9741L33.8951 49.8842C36.4992 52.5519 45.6351 52.918 46.5346 48.4129C47.3752 44.2064 45.4969 40.9955 43.7929 39.0562L40.5177 42.6385Z"
                                            fill="url(#paint6_linear_1_1319)" />
                                        <path
                                            d="M32.9067 32.7257C32.9067 32.7257 35.0328 32.4903 34.7667 30.5574C34.7602 30.5088 33.2171 31.8186 31.0429 30.1114C29.9474 29.2508 28.8584 29.5715 28.671 30.4753C28.4162 31.7036 30.0392 32.9017 30.0392 32.9017C30.0392 32.9017 23.7092 34.8945 24.4359 44.2853C24.539 45.6194 26.1048 46.6431 28.1457 47.1906L30.0991 45.0541C30.0964 45.0384 30.0937 45.0233 30.0937 45.0077V43.7454H28.3336C28.1462 43.7454 27.9945 43.6125 27.9945 43.4479V43.0321C27.9945 42.8674 28.1468 42.7346 28.3336 42.7346H32.2102V42.1396H28.7385H28.57H28.299C28.1117 42.1396 27.9599 42.0068 27.9599 41.8421V40.2224V40.0156V39.852C27.9599 39.6873 28.1117 39.5545 28.299 39.5545H30.0764V38.2468C30.0764 38.0822 30.2281 37.9494 30.4155 37.9494H30.8544C31.0423 37.9494 31.194 38.0822 31.194 38.2468V39.5545H33.0049C33.1923 39.5545 33.344 39.6873 33.344 39.852V40.2224C33.344 40.3871 33.1917 40.5199 33.0049 40.5199H29.0776V41.1149H33.0049C33.1923 41.1149 33.344 41.2477 33.344 41.4124V41.5031L34.1182 40.6554C35.0307 39.0114 36.1937 37.9888 37.1034 37.3905L37.1045 37.3895C35.5069 34.3908 32.9067 32.7257 32.9067 32.7257Z"
                                            fill="url(#paint7_linear_1_1319)" />
                                        <defs>
                                            <linearGradient id="paint0_linear_1_1319" x1="0" y1="10.5"
                                                x2="0" y2="86.5" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#ECF6FB" />
                                                <stop offset="1" stop-color="#B2E3FB" />
                                            </linearGradient>
                                            <linearGradient id="paint1_linear_1_1319" x1="50.1935" y1="32.5542"
                                                x2="50.1935" y2="34.5667" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#88D9FF" />
                                                <stop offset="1" stop-color="#00ADFE" />
                                            </linearGradient>
                                            <linearGradient id="paint2_linear_1_1319" x1="20" y1="23.9999"
                                                x2="20" y2="56.4999" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#88D9FF" />
                                                <stop offset="1" stop-color="#00ADFE" />
                                            </linearGradient>
                                            <linearGradient id="paint3_linear_1_1319" x1="44.3699" y1="32.6279"
                                                x2="44.3699" y2="45.8131" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#88D9FF" />
                                                <stop offset="1" stop-color="#00ADFE" />
                                            </linearGradient>
                                            <linearGradient id="paint4_linear_1_1319" x1="33.4701" y1="32.7449"
                                                x2="33.4701" y2="35.9912" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#88D9FF" />
                                                <stop offset="1" stop-color="#00ADFE" />
                                            </linearGradient>
                                            <linearGradient id="paint5_linear_1_1319" x1="31.2459" y1="43.7523"
                                                x2="31.2459" y2="43.7945" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#88D9FF" />
                                                <stop offset="1" stop-color="#00ADFE" />
                                            </linearGradient>
                                            <linearGradient id="paint6_linear_1_1319" x1="34.201" y1="40.5798"
                                                x2="34.201" y2="50.4832" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#88D9FF" />
                                                <stop offset="1" stop-color="#00ADFE" />
                                            </linearGradient>
                                            <linearGradient id="paint7_linear_1_1319" x1="24.6808" y1="31.7005"
                                                x2="24.6808" y2="45.3066" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#88D9FF" />
                                                <stop offset="1" stop-color="#00ADFE" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </figure>
                                <div class="d-flex flex-column gap-2">
                                    <h3 class="sub_title">
                                        গোপন খরচ নেই
                                    </h3>
                                    <p class="description">
                                        আপনার কোনো প্রশ্ন থাকলে, আমরা সবসময় আপনাকে সাহায্য করতে প্রস্তুত।
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="facilities_card">
                                <figure class="icon_wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                                        viewBox="0 0 80 80" fill="none">
                                        <rect width="80" height="80" rx="40"
                                            fill="url(#paint0_linear_1_1335)" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M27.2252 41.691H36.1496C36.4961 41.691 36.8284 41.8284 37.0734 42.073C37.3184 42.3176 37.4561 42.6493 37.4561 42.9952V51.9114C37.4561 52.0827 37.4223 52.2523 37.3566 52.4105C37.291 52.5687 37.1947 52.7125 37.0734 52.8336C36.9521 52.9547 36.8081 53.0508 36.6496 53.1163C36.4911 53.1819 36.3212 53.2156 36.1496 53.2156H27.2252C26.8794 53.2133 26.5485 53.0751 26.304 52.831C26.0595 52.5869 25.9211 52.2566 25.9187 51.9114V42.998C25.9211 42.6528 26.0595 42.3224 26.304 42.0783C26.5485 41.8342 26.8794 41.6961 27.2252 41.6937V41.691ZM25.4415 27.4343C26.0187 27.5645 26.5697 27.7912 27.0711 28.1049L27.3524 27.9594L28.0895 27.5826L28.6815 28.1695L29.2729 28.7564L28.8947 29.4957L28.7489 29.7819C29.0574 30.282 29.2835 30.8283 29.4186 31.3999L29.7191 31.498L30.5147 31.7547V33.4146L29.7191 33.6706L29.4186 33.7701C29.2832 34.3416 29.0571 34.8878 28.7489 35.3881L28.8947 35.6736L29.2729 36.4129L28.6815 36.9998L28.0895 37.5861L27.3524 37.2099L27.0711 37.0644C26.5697 37.3781 26.0187 37.6048 25.4415 37.735L25.3439 38.0391L25.0922 38.8285H23.422L23.1697 38.0391L23.0727 37.735C22.499 37.6058 21.9514 37.3801 21.4534 37.0678L21.1625 37.2133L20.4254 37.5895L19.8334 37.0033L19.2517 36.4164L19.6202 35.6771L19.7653 35.3915C19.4574 34.8912 19.2315 34.345 19.0963 33.7736L18.7958 33.674L18.0002 33.418V31.7547L18.7958 31.498L19.0963 31.3999C19.2312 30.8283 19.4571 30.2821 19.7653 29.7819L19.6202 29.4957L19.2531 28.7564L19.8348 28.1695L20.4268 27.5826L21.1639 27.9594L21.4548 28.1049C21.9528 27.7913 22.5006 27.5645 23.0748 27.4343L23.1717 27.1302L23.4241 26.3408H25.0908L25.3425 27.1302L25.4401 27.4343H25.4415ZM24.2575 30.1286C23.771 30.1294 23.2958 30.2741 22.8917 30.5445C22.4877 30.8149 22.173 31.1987 21.9874 31.6476C21.8018 32.0965 21.7537 32.5902 21.8491 33.0663C21.9445 33.5425 22.1791 33.9797 22.5234 34.3228C22.8676 34.6659 23.306 34.8994 23.7831 34.9938C24.2603 35.0883 24.7547 35.0394 25.204 34.8534C25.6534 34.6674 26.0373 34.3526 26.3075 33.9488C26.5777 33.5449 26.7218 33.0702 26.7218 32.5847C26.7209 31.9328 26.4609 31.308 25.9988 30.8475C25.5367 30.387 24.9104 30.1284 24.2575 30.1286ZM42.3965 20.4134C43.139 20.5817 43.8474 20.8746 44.4917 21.2797L44.8602 21.0916L45.8229 20.6049L46.5792 21.3634L47.3356 22.1219L46.8543 23.0775L46.6693 23.4461C47.0733 24.0884 47.3638 24.7951 47.5281 25.5356L47.9263 25.664L48.9446 25.9948V28.1441L47.9263 28.4736L47.5281 28.6012C47.3627 29.3428 47.0706 30.0503 46.6645 30.6928L46.8495 31.0614L47.3308 32.017L46.5744 32.7721L45.8181 33.5271L44.8554 33.0398L44.4868 32.8524C43.8426 33.2575 43.1342 33.5504 42.3917 33.7187L42.2659 34.112L41.9441 35.1389H39.7871L39.457 34.1188L39.3312 33.7262C38.5888 33.5573 37.8804 33.2642 37.236 32.8592L36.8675 33.0466L35.9048 33.534L35.1485 32.7789L34.3921 32.0238L34.8775 31.0683L35.0611 30.6997C34.6556 30.057 34.3636 29.3495 34.1982 28.6081L33.8001 28.4804L32.7831 28.1441V25.9969L33.8014 25.666L34.1996 25.5377C34.3653 24.7965 34.6572 24.0893 35.0625 23.4468L34.8789 23.0781L34.3935 22.1226L35.1498 21.3641L35.9062 20.6056L36.8689 21.0923L37.2374 21.2804C37.8812 20.8753 38.5892 20.5821 39.3312 20.4134L39.457 20.0207L39.7871 19H41.9441L42.2741 20.0207L42.4 20.4134H42.3965ZM40.8638 23.1331C40.0839 23.1322 39.3212 23.3624 38.6723 23.7944C38.0233 24.2264 37.5173 24.8408 37.2183 25.56C36.9192 26.2791 36.8406 27.0707 36.9922 27.8345C37.1439 28.5983 37.5191 29.3 38.0703 29.8509C38.6216 30.4017 39.3241 30.777 40.089 30.9292C40.8539 31.0814 41.6469 31.0037 42.3676 30.7059C43.0883 30.4081 43.7043 29.9037 44.1377 29.2563C44.5711 28.6089 44.8025 27.8478 44.8025 27.0691C44.8026 26.0259 44.3879 25.0252 43.6493 24.2872C42.9108 23.5491 41.9089 23.134 40.8638 23.1331ZM32.88 54.5768V59.8748C32.88 60.1297 32.7786 60.3741 32.5981 60.5543C32.4176 60.7345 32.1727 60.8358 31.9174 60.8358H29.9412C29.6859 60.8358 29.4411 60.7345 29.2605 60.5543C29.08 60.3741 28.9786 60.1297 28.9786 59.8748V54.5768H32.88ZM59.082 42.3671C60.2055 42.6653 61.1988 43.3259 61.9074 44.2459C62.6161 45.166 63.0002 46.2941 63.0002 47.4547C63.0002 48.6153 62.6161 49.7433 61.9074 50.6634C61.1988 51.5835 60.2055 52.244 59.082 52.5422V42.3671ZM55.0774 32.9093C55.7786 32.9111 56.4506 33.1897 56.9468 33.6843C57.443 34.1789 57.7231 34.8494 57.726 35.5494V59.3599C57.7231 60.06 57.443 60.7304 56.9468 61.225C56.4506 61.7196 55.7786 61.9982 55.0774 62C54.3772 61.9978 53.7065 61.7188 53.212 61.224C52.7175 60.7292 52.4396 60.0589 52.439 59.3599V35.5494C52.4396 34.8504 52.7175 34.1802 53.212 33.6854C53.7065 33.1906 54.3772 32.9115 55.0774 32.9093ZM24.5573 44.2068H22.0035V50.7067H24.5552V44.2068H24.5573ZM38.7495 42.3925L41.077 41.0883L51.0789 35.4807V59.4375L41.077 53.8245L38.7495 52.5203C38.7996 52.3216 38.8254 52.1176 38.8265 51.9128V42.998C38.8254 42.7931 38.7995 42.5891 38.7495 42.3905V42.3925ZM28.9806 50.2982H34.2676C34.3648 50.3012 34.4616 50.2847 34.5523 50.2496C34.643 50.2146 34.7257 50.1617 34.7955 50.0941C34.8653 50.0265 34.9208 49.9456 34.9587 49.8563C34.9966 49.7669 35.0161 49.6708 35.0161 49.5737C35.0161 49.4766 34.9966 49.3806 34.9587 49.2912C34.9208 49.2018 34.8653 49.1209 34.7955 49.0533C34.7257 48.9857 34.643 48.9329 34.5523 48.8978C34.4616 48.8627 34.3648 48.8462 34.2676 48.8492H28.9806C28.8834 48.8462 28.7866 48.8627 28.696 48.8978C28.6053 48.9329 28.5226 48.9857 28.4528 49.0533C28.383 49.1209 28.3275 49.2018 28.2896 49.2912C28.2517 49.3806 28.2322 49.4766 28.2322 49.5737C28.2322 49.6708 28.2517 49.7669 28.2896 49.8563C28.3275 49.9456 28.383 50.0265 28.4528 50.0941C28.5226 50.1617 28.6053 50.2146 28.696 50.2496C28.7866 50.2847 28.8834 50.3012 28.9806 50.2982ZM29.1065 46.0602H34.401C34.4982 46.0632 34.595 46.0466 34.6857 46.0116C34.7764 45.9765 34.859 45.9236 34.9289 45.856C34.9987 45.7884 35.0542 45.7076 35.0921 45.6182C35.13 45.5288 35.1495 45.4327 35.1495 45.3356C35.1495 45.2386 35.13 45.1425 35.0921 45.0531C35.0542 44.9637 34.9987 44.8828 34.9289 44.8152C34.859 44.7477 34.7764 44.6948 34.6857 44.6597C34.595 44.6246 34.4982 44.6081 34.401 44.6111H29.1065C29.0093 44.6081 28.9125 44.6246 28.8218 44.6597C28.7311 44.6948 28.6484 44.7477 28.5786 44.8152C28.5088 44.8828 28.4533 44.9637 28.4154 45.0531C28.3775 45.1425 28.358 45.2386 28.358 45.3356C28.358 45.4327 28.3775 45.5288 28.4154 45.6182C28.4533 45.7076 28.5088 45.7884 28.5786 45.856C28.6484 45.9236 28.7311 45.9765 28.8218 46.0116C28.9125 46.0466 29.0093 46.0632 29.1065 46.0602Z"
                                            fill="url(#paint1_linear_1_1335)" />
                                        <defs>
                                            <linearGradient id="paint0_linear_1_1335" x1="40" y1="23.5"
                                                x2="40" y2="97.5" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#F2F8FF" />
                                                <stop offset="1" stop-color="#A4CEFF" />
                                            </linearGradient>
                                            <linearGradient id="paint1_linear_1_1335" x1="63.0002" y1="26"
                                                x2="63.0002" y2="67.5" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#92C2F8" />
                                                <stop offset="1" stop-color="#0A7CFF" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </figure>
                                <div class="d-flex flex-column gap-2">
                                    <h3 class="sub_title">
                                        মার্কেটিং অটোমেশন
                                    </h3>
                                    <p class="description">
                                        একটি প্রক্রিয়া যেখানে সফটওয়্যার বা টুল ব্যবহার করে বিভিন্ন মার্কেটিং কার্যক্রম
                                        অটোমেট করা হয়।
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="facilities_card">
                                <figure class="icon_wrapper">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80"
                                        viewBox="0 0 80 80" fill="none">
                                        <rect width="80" height="80" rx="40"
                                            fill="url(#paint0_linear_1_1345)" />
                                        <path
                                            d="M44.3314 36.5461C44.3314 37.0301 43.9397 37.4218 43.4576 37.4218C42.9755 37.4218 42.5817 37.0301 42.5817 36.5461C42.5817 36.0621 42.9735 35.6725 43.4576 35.6725C43.9417 35.6725 44.3314 36.0642 44.3314 36.5461ZM40.9018 53.6533C40.711 53.844 40.4279 53.9055 40.1756 53.8132C37.2813 52.753 34.2065 50.731 31.7389 48.2641C29.2733 45.7992 27.2507 42.725 26.1884 39.8297C26.0961 39.5775 26.1576 39.2925 26.3484 39.1038L30.656 34.7993L25.9709 26.8259C22.6171 27.1417 20.4487 28.5444 19.5239 31.0032C17.3701 36.7187 22.1906 46.4104 27.8913 52.1112C33.5936 57.8099 43.288 62.6293 49.005 60.4763C51.4645 59.5515 52.8676 57.3839 53.1834 54.0311L45.2078 49.3472L40.9018 53.6533ZM55.8678 24.1392C62.7107 30.9802 62.7107 42.1136 55.8678 48.9552C54.7478 50.0749 53.4925 51.0326 52.1304 51.8077L45.4471 47.8826C45.1764 47.7227 44.8297 47.7678 44.6081 47.9893L40.241 52.3573C37.6502 51.3279 34.9304 49.4986 32.7149 47.2859C30.5036 45.0752 28.6739 42.3559 27.6421 39.7618L32.0113 35.3958C32.2349 35.1723 32.2779 34.8278 32.1179 34.557L28.1918 27.8755C28.9672 26.5118 29.9272 25.2568 31.0451 24.1391C34.36 20.8252 38.7681 19 43.4575 19C48.1467 19 52.5527 20.8252 55.8699 24.1391L55.8678 24.1392ZM33.7039 25.8187L32.8177 24.9328C32.5469 24.6621 32.11 24.6621 31.8392 24.9328C31.5685 25.2035 31.5685 25.6403 31.8392 25.911L32.7254 26.7969C32.8608 26.9322 33.0372 26.9999 33.2136 26.9999C33.39 26.9999 33.5685 26.9322 33.7018 26.7969C33.9726 26.5262 33.9726 26.0894 33.7018 25.8187H33.7039ZM42.7665 22.0639C42.7665 22.4453 43.0762 22.7549 43.4577 22.7549C43.8393 22.7549 44.149 22.4453 44.149 22.0639V20.8109C44.149 20.4294 43.8393 20.1198 43.4577 20.1198C43.0762 20.1198 42.7665 20.4294 42.7665 20.8109V22.0639ZM48.5308 38.677L45.6611 37.0221C45.6939 36.8683 45.7123 36.7083 45.7123 36.5443C45.7123 35.5414 45.0539 34.6904 44.1472 34.3972V29.1781C44.1472 28.7967 43.8375 28.487 43.4559 28.487C43.0744 28.487 42.7647 28.7967 42.7647 29.1781V34.3972C41.8559 34.6904 41.1975 35.5415 41.1975 36.5443C41.1975 37.7891 42.2108 38.8021 43.4559 38.8021C44.0365 38.8021 44.5677 38.5806 44.9698 38.2176L47.8395 39.8726C47.9482 39.9361 48.0672 39.9648 48.1841 39.9648C48.422 39.9648 48.6559 39.8418 48.783 39.6183C48.9738 39.2881 48.861 38.8656 48.5307 38.6749L48.5308 38.677ZM55.0744 47.1833L54.1882 46.2974C53.9174 46.0267 53.4805 46.0267 53.2097 46.2974C52.939 46.5681 52.939 47.0049 53.2097 47.2756L54.0959 48.1615C54.2313 48.2969 54.4077 48.3645 54.5841 48.3645C54.7605 48.3645 54.939 48.2969 55.0723 48.1615C55.3431 47.8908 55.3431 47.454 55.0723 47.1833H55.0744ZM55.0744 24.9308C54.8036 24.6601 54.3666 24.6601 54.0959 24.9308L53.2097 25.8167C52.939 26.0874 52.939 26.5242 53.2097 26.7949C53.3451 26.9303 53.5215 26.9979 53.6979 26.9979C53.8744 26.9979 54.0528 26.9303 54.1861 26.7949L55.0723 25.909C55.3431 25.6383 55.3431 25.2015 55.0723 24.9308H55.0744ZM57.2507 36.544C57.2507 36.9254 57.5605 37.2351 57.942 37.2351H59.1953C59.5769 37.2351 59.8866 36.9254 59.8866 36.544C59.8866 36.1625 59.5769 35.8529 59.1953 35.8529H57.942C57.5605 35.8529 57.2507 36.1625 57.2507 36.544Z"
                                            fill="url(#paint1_linear_1_1345)" />
                                        <defs>
                                            <linearGradient id="paint0_linear_1_1345" x1="0" y1="36"
                                                x2="0" y2="103.5" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#F8EEFF" />
                                                <stop offset="1" stop-color="#D9A6FD" />
                                            </linearGradient>
                                            <linearGradient id="paint1_linear_1_1345" x1="18.9995" y1="19"
                                                x2="18.9995" y2="66.25" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#9403FD" />
                                                <stop offset="1" stop-color="#CB89FB" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </figure>
                                <div class="d-flex flex-column gap-2">
                                    <h3 class="sub_title">
                                        ২৪/৭ সাপোর্ট
                                    </h3>
                                    <p class="description">
                                        আপনার কোনো প্রশ্ন থাকলে, আমরা সবসময় আপনাকে সাহায্য করতে প্রস্তুত।
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="process_section_bg position-absolute"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- FACILITIES-SECTION-END -->

    <!-- TESTMONIAL-SECTION-START -->
    <section class="testimonial_section" id="testimonial_section">
        <div class="container">
            <div class="testimonial_section_wrapper">
                <div class="testimonial_section_header">
                    <div class="d-flex justify-content-center">
                        <div class="testimonial_section_title">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10"
                                fill="none">
                                <circle cx="5" cy="5" r="5" fill="white" />
                            </svg>
                            <h3 class="sub_title">
                                প্রতিক্রিয়া
                            </h3>
                        </div>
                    </div>
                    <div class="d-flex flex-column gap-4">
                        <h1 class="title">
                            টেস্টিমোনিয়ালস
                        </h1>
                        <p class="description">
                            বিশ্বস্ততা বাড়ানোর জন্য সন্তুষ্ট ব্যবহারকারীদের পর্যালোচনা
                        </p>
                    </div>
                </div>


                <div class="testimonial_slider_wrapper">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial_card">
                                    <div class="d-flex align-items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M11.44 2.87047L12.9065 5.82772C13.1065 6.23938 13.6398 6.63424 14.0897 6.70985L16.7478 7.15512C18.4476 7.44076 18.8475 8.68415 17.6227 9.91074L15.5562 11.9943C15.2063 12.3471 15.0146 13.0276 15.1229 13.5149L15.7146 16.0941C16.1812 18.1356 15.1063 18.9253 13.3148 17.8583L10.8234 16.3713C10.3735 16.1025 9.63189 16.1025 9.17361 16.3713L6.68222 17.8583C4.89908 18.9253 3.81587 18.1272 4.28248 16.0941L4.87408 13.5149C4.9824 13.0276 4.79076 12.3471 4.4408 11.9943L2.37436 9.91074C1.15783 8.68415 1.54945 7.44076 3.24926 7.15512L5.9073 6.70985C6.34892 6.63424 6.88219 6.23938 7.08217 5.82772L8.54868 2.87047C9.34859 1.26583 10.6484 1.26583 11.44 2.87047Z"
                                                fill="#FFC800" />
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M11.44 2.87047L12.9065 5.82772C13.1065 6.23938 13.6398 6.63424 14.0897 6.70985L16.7478 7.15512C18.4476 7.44076 18.8475 8.68415 17.6227 9.91074L15.5562 11.9943C15.2063 12.3471 15.0146 13.0276 15.1229 13.5149L15.7146 16.0941C16.1812 18.1356 15.1063 18.9253 13.3148 17.8583L10.8234 16.3713C10.3735 16.1025 9.63189 16.1025 9.17361 16.3713L6.68222 17.8583C4.89908 18.9253 3.81587 18.1272 4.28248 16.0941L4.87408 13.5149C4.9824 13.0276 4.79076 12.3471 4.4408 11.9943L2.37436 9.91074C1.15783 8.68415 1.54945 7.44076 3.24926 7.15512L5.9073 6.70985C6.34892 6.63424 6.88219 6.23938 7.08217 5.82772L8.54868 2.87047C9.34859 1.26583 10.6484 1.26583 11.44 2.87047Z"
                                                fill="#FFC800" />
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M11.44 2.87047L12.9065 5.82772C13.1065 6.23938 13.6398 6.63424 14.0897 6.70985L16.7478 7.15512C18.4476 7.44076 18.8475 8.68415 17.6227 9.91074L15.5562 11.9943C15.2063 12.3471 15.0146 13.0276 15.1229 13.5149L15.7146 16.0941C16.1812 18.1356 15.1063 18.9253 13.3148 17.8583L10.8234 16.3713C10.3735 16.1025 9.63189 16.1025 9.17361 16.3713L6.68222 17.8583C4.89908 18.9253 3.81587 18.1272 4.28248 16.0941L4.87408 13.5149C4.9824 13.0276 4.79076 12.3471 4.4408 11.9943L2.37436 9.91074C1.15783 8.68415 1.54945 7.44076 3.24926 7.15512L5.9073 6.70985C6.34892 6.63424 6.88219 6.23938 7.08217 5.82772L8.54868 2.87047C9.34859 1.26583 10.6484 1.26583 11.44 2.87047Z"
                                                fill="#FFC800" />
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M11.44 2.87047L12.9065 5.82772C13.1065 6.23938 13.6398 6.63424 14.0897 6.70985L16.7478 7.15512C18.4476 7.44076 18.8475 8.68415 17.6227 9.91074L15.5562 11.9943C15.2063 12.3471 15.0146 13.0276 15.1229 13.5149L15.7146 16.0941C16.1812 18.1356 15.1063 18.9253 13.3148 17.8583L10.8234 16.3713C10.3735 16.1025 9.63189 16.1025 9.17361 16.3713L6.68222 17.8583C4.89908 18.9253 3.81587 18.1272 4.28248 16.0941L4.87408 13.5149C4.9824 13.0276 4.79076 12.3471 4.4408 11.9943L2.37436 9.91074C1.15783 8.68415 1.54945 7.44076 3.24926 7.15512L5.9073 6.70985C6.34892 6.63424 6.88219 6.23938 7.08217 5.82772L8.54868 2.87047C9.34859 1.26583 10.6484 1.26583 11.44 2.87047Z"
                                                fill="#FFC800" />
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M11.44 2.87047L12.9065 5.82772C13.1065 6.23938 13.6398 6.63424 14.0897 6.70985L16.7478 7.15512C18.4476 7.44076 18.8475 8.68415 17.6227 9.91074L15.5562 11.9943C15.2063 12.3471 15.0146 13.0276 15.1229 13.5149L15.7146 16.0941C16.1812 18.1356 15.1063 18.9253 13.3148 17.8583L10.8234 16.3713C10.3735 16.1025 9.63189 16.1025 9.17361 16.3713L6.68222 17.8583C4.89908 18.9253 3.81587 18.1272 4.28248 16.0941L4.87408 13.5149C4.9824 13.0276 4.79076 12.3471 4.4408 11.9943L2.37436 9.91074C1.15783 8.68415 1.54945 7.44076 3.24926 7.15512L5.9073 6.70985C6.34892 6.63424 6.88219 6.23938 7.08217 5.82772L8.54868 2.87047C9.34859 1.26583 10.6484 1.26583 11.44 2.87047Z"
                                                fill="#FFC800" />
                                        </svg>
                                    </div>

                                    <p class="text mt-4">
                                        আমি এক ঘন্টারও কম সময়ের মধ্যে একটি পেশাদার-
                                        দেখানো ওয়েবসাইট তৈরি করতে পেরেছি। প্ল্যাটফর্মটি
                                        ব্যবহার করা খুবই সহজ!
                                    </p>

                                    <div class="d-flex gap-3 align-items-center mt-5">
                                        <figure>
                                            <img class="user_image"
                                                src="https://images.unsplash.com/photo-1508921340878-ba53e1f016ec?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                alt="" />
                                        </figure>
                                        <div class="">
                                            <h3 class="title">জেন ডি.</h3>
                                            <p class="subtitle">অনলাইন স্টোর মালিক</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial_card">
                                    <div class="d-flex align-items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M11.44 2.87047L12.9065 5.82772C13.1065 6.23938 13.6398 6.63424 14.0897 6.70985L16.7478 7.15512C18.4476 7.44076 18.8475 8.68415 17.6227 9.91074L15.5562 11.9943C15.2063 12.3471 15.0146 13.0276 15.1229 13.5149L15.7146 16.0941C16.1812 18.1356 15.1063 18.9253 13.3148 17.8583L10.8234 16.3713C10.3735 16.1025 9.63189 16.1025 9.17361 16.3713L6.68222 17.8583C4.89908 18.9253 3.81587 18.1272 4.28248 16.0941L4.87408 13.5149C4.9824 13.0276 4.79076 12.3471 4.4408 11.9943L2.37436 9.91074C1.15783 8.68415 1.54945 7.44076 3.24926 7.15512L5.9073 6.70985C6.34892 6.63424 6.88219 6.23938 7.08217 5.82772L8.54868 2.87047C9.34859 1.26583 10.6484 1.26583 11.44 2.87047Z"
                                                fill="#FFC800" />
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M11.44 2.87047L12.9065 5.82772C13.1065 6.23938 13.6398 6.63424 14.0897 6.70985L16.7478 7.15512C18.4476 7.44076 18.8475 8.68415 17.6227 9.91074L15.5562 11.9943C15.2063 12.3471 15.0146 13.0276 15.1229 13.5149L15.7146 16.0941C16.1812 18.1356 15.1063 18.9253 13.3148 17.8583L10.8234 16.3713C10.3735 16.1025 9.63189 16.1025 9.17361 16.3713L6.68222 17.8583C4.89908 18.9253 3.81587 18.1272 4.28248 16.0941L4.87408 13.5149C4.9824 13.0276 4.79076 12.3471 4.4408 11.9943L2.37436 9.91074C1.15783 8.68415 1.54945 7.44076 3.24926 7.15512L5.9073 6.70985C6.34892 6.63424 6.88219 6.23938 7.08217 5.82772L8.54868 2.87047C9.34859 1.26583 10.6484 1.26583 11.44 2.87047Z"
                                                fill="#FFC800" />
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M11.44 2.87047L12.9065 5.82772C13.1065 6.23938 13.6398 6.63424 14.0897 6.70985L16.7478 7.15512C18.4476 7.44076 18.8475 8.68415 17.6227 9.91074L15.5562 11.9943C15.2063 12.3471 15.0146 13.0276 15.1229 13.5149L15.7146 16.0941C16.1812 18.1356 15.1063 18.9253 13.3148 17.8583L10.8234 16.3713C10.3735 16.1025 9.63189 16.1025 9.17361 16.3713L6.68222 17.8583C4.89908 18.9253 3.81587 18.1272 4.28248 16.0941L4.87408 13.5149C4.9824 13.0276 4.79076 12.3471 4.4408 11.9943L2.37436 9.91074C1.15783 8.68415 1.54945 7.44076 3.24926 7.15512L5.9073 6.70985C6.34892 6.63424 6.88219 6.23938 7.08217 5.82772L8.54868 2.87047C9.34859 1.26583 10.6484 1.26583 11.44 2.87047Z"
                                                fill="#FFC800" />
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M11.44 2.87047L12.9065 5.82772C13.1065 6.23938 13.6398 6.63424 14.0897 6.70985L16.7478 7.15512C18.4476 7.44076 18.8475 8.68415 17.6227 9.91074L15.5562 11.9943C15.2063 12.3471 15.0146 13.0276 15.1229 13.5149L15.7146 16.0941C16.1812 18.1356 15.1063 18.9253 13.3148 17.8583L10.8234 16.3713C10.3735 16.1025 9.63189 16.1025 9.17361 16.3713L6.68222 17.8583C4.89908 18.9253 3.81587 18.1272 4.28248 16.0941L4.87408 13.5149C4.9824 13.0276 4.79076 12.3471 4.4408 11.9943L2.37436 9.91074C1.15783 8.68415 1.54945 7.44076 3.24926 7.15512L5.9073 6.70985C6.34892 6.63424 6.88219 6.23938 7.08217 5.82772L8.54868 2.87047C9.34859 1.26583 10.6484 1.26583 11.44 2.87047Z"
                                                fill="#FFC800" />
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M11.44 2.87047L12.9065 5.82772C13.1065 6.23938 13.6398 6.63424 14.0897 6.70985L16.7478 7.15512C18.4476 7.44076 18.8475 8.68415 17.6227 9.91074L15.5562 11.9943C15.2063 12.3471 15.0146 13.0276 15.1229 13.5149L15.7146 16.0941C16.1812 18.1356 15.1063 18.9253 13.3148 17.8583L10.8234 16.3713C10.3735 16.1025 9.63189 16.1025 9.17361 16.3713L6.68222 17.8583C4.89908 18.9253 3.81587 18.1272 4.28248 16.0941L4.87408 13.5149C4.9824 13.0276 4.79076 12.3471 4.4408 11.9943L2.37436 9.91074C1.15783 8.68415 1.54945 7.44076 3.24926 7.15512L5.9073 6.70985C6.34892 6.63424 6.88219 6.23938 7.08217 5.82772L8.54868 2.87047C9.34859 1.26583 10.6484 1.26583 11.44 2.87047Z"
                                                fill="#FFC800" />
                                        </svg>
                                    </div>

                                    <p class="text mt-4">
                                        আমি এক ঘন্টারও কম সময়ের মধ্যে একটি পেশাদার-
                                        দেখানো ওয়েবসাইট তৈরি করতে পেরেছি। প্ল্যাটফর্মটি
                                        ব্যবহার করা খুবই সহজ!
                                    </p>

                                    <div class="d-flex gap-3 align-items-center mt-5">
                                        <figure>
                                            <img class="user_image"
                                                src="https://images.unsplash.com/photo-1508921340878-ba53e1f016ec?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                alt="" />
                                        </figure>
                                        <div class="">
                                            <h3 class="title">জেন ডি.</h3>
                                            <p class="subtitle">অনলাইন স্টোর মালিক</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial_card">
                                    <div class="d-flex align-items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M11.44 2.87047L12.9065 5.82772C13.1065 6.23938 13.6398 6.63424 14.0897 6.70985L16.7478 7.15512C18.4476 7.44076 18.8475 8.68415 17.6227 9.91074L15.5562 11.9943C15.2063 12.3471 15.0146 13.0276 15.1229 13.5149L15.7146 16.0941C16.1812 18.1356 15.1063 18.9253 13.3148 17.8583L10.8234 16.3713C10.3735 16.1025 9.63189 16.1025 9.17361 16.3713L6.68222 17.8583C4.89908 18.9253 3.81587 18.1272 4.28248 16.0941L4.87408 13.5149C4.9824 13.0276 4.79076 12.3471 4.4408 11.9943L2.37436 9.91074C1.15783 8.68415 1.54945 7.44076 3.24926 7.15512L5.9073 6.70985C6.34892 6.63424 6.88219 6.23938 7.08217 5.82772L8.54868 2.87047C9.34859 1.26583 10.6484 1.26583 11.44 2.87047Z"
                                                fill="#FFC800" />
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M11.44 2.87047L12.9065 5.82772C13.1065 6.23938 13.6398 6.63424 14.0897 6.70985L16.7478 7.15512C18.4476 7.44076 18.8475 8.68415 17.6227 9.91074L15.5562 11.9943C15.2063 12.3471 15.0146 13.0276 15.1229 13.5149L15.7146 16.0941C16.1812 18.1356 15.1063 18.9253 13.3148 17.8583L10.8234 16.3713C10.3735 16.1025 9.63189 16.1025 9.17361 16.3713L6.68222 17.8583C4.89908 18.9253 3.81587 18.1272 4.28248 16.0941L4.87408 13.5149C4.9824 13.0276 4.79076 12.3471 4.4408 11.9943L2.37436 9.91074C1.15783 8.68415 1.54945 7.44076 3.24926 7.15512L5.9073 6.70985C6.34892 6.63424 6.88219 6.23938 7.08217 5.82772L8.54868 2.87047C9.34859 1.26583 10.6484 1.26583 11.44 2.87047Z"
                                                fill="#FFC800" />
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M11.44 2.87047L12.9065 5.82772C13.1065 6.23938 13.6398 6.63424 14.0897 6.70985L16.7478 7.15512C18.4476 7.44076 18.8475 8.68415 17.6227 9.91074L15.5562 11.9943C15.2063 12.3471 15.0146 13.0276 15.1229 13.5149L15.7146 16.0941C16.1812 18.1356 15.1063 18.9253 13.3148 17.8583L10.8234 16.3713C10.3735 16.1025 9.63189 16.1025 9.17361 16.3713L6.68222 17.8583C4.89908 18.9253 3.81587 18.1272 4.28248 16.0941L4.87408 13.5149C4.9824 13.0276 4.79076 12.3471 4.4408 11.9943L2.37436 9.91074C1.15783 8.68415 1.54945 7.44076 3.24926 7.15512L5.9073 6.70985C6.34892 6.63424 6.88219 6.23938 7.08217 5.82772L8.54868 2.87047C9.34859 1.26583 10.6484 1.26583 11.44 2.87047Z"
                                                fill="#FFC800" />
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M11.44 2.87047L12.9065 5.82772C13.1065 6.23938 13.6398 6.63424 14.0897 6.70985L16.7478 7.15512C18.4476 7.44076 18.8475 8.68415 17.6227 9.91074L15.5562 11.9943C15.2063 12.3471 15.0146 13.0276 15.1229 13.5149L15.7146 16.0941C16.1812 18.1356 15.1063 18.9253 13.3148 17.8583L10.8234 16.3713C10.3735 16.1025 9.63189 16.1025 9.17361 16.3713L6.68222 17.8583C4.89908 18.9253 3.81587 18.1272 4.28248 16.0941L4.87408 13.5149C4.9824 13.0276 4.79076 12.3471 4.4408 11.9943L2.37436 9.91074C1.15783 8.68415 1.54945 7.44076 3.24926 7.15512L5.9073 6.70985C6.34892 6.63424 6.88219 6.23938 7.08217 5.82772L8.54868 2.87047C9.34859 1.26583 10.6484 1.26583 11.44 2.87047Z"
                                                fill="#FFC800" />
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M11.44 2.87047L12.9065 5.82772C13.1065 6.23938 13.6398 6.63424 14.0897 6.70985L16.7478 7.15512C18.4476 7.44076 18.8475 8.68415 17.6227 9.91074L15.5562 11.9943C15.2063 12.3471 15.0146 13.0276 15.1229 13.5149L15.7146 16.0941C16.1812 18.1356 15.1063 18.9253 13.3148 17.8583L10.8234 16.3713C10.3735 16.1025 9.63189 16.1025 9.17361 16.3713L6.68222 17.8583C4.89908 18.9253 3.81587 18.1272 4.28248 16.0941L4.87408 13.5149C4.9824 13.0276 4.79076 12.3471 4.4408 11.9943L2.37436 9.91074C1.15783 8.68415 1.54945 7.44076 3.24926 7.15512L5.9073 6.70985C6.34892 6.63424 6.88219 6.23938 7.08217 5.82772L8.54868 2.87047C9.34859 1.26583 10.6484 1.26583 11.44 2.87047Z"
                                                fill="#FFC800" />
                                        </svg>
                                    </div>

                                    <p class="text mt-4">
                                        আমি এক ঘন্টারও কম সময়ের মধ্যে একটি পেশাদার-
                                        দেখানো ওয়েবসাইট তৈরি করতে পেরেছি। প্ল্যাটফর্মটি
                                        ব্যবহার করা খুবই সহজ!
                                    </p>

                                    <div class="d-flex gap-3 align-items-center mt-5">
                                        <figure>
                                            <img class="user_image"
                                                src="https://images.unsplash.com/photo-1508921340878-ba53e1f016ec?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                alt="" />
                                        </figure>
                                        <div class="">
                                            <h3 class="title">জেন ডি.</h3>
                                            <p class="subtitle">অনলাইন স্টোর মালিক</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial_card">
                                    <div class="d-flex align-items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M11.44 2.87047L12.9065 5.82772C13.1065 6.23938 13.6398 6.63424 14.0897 6.70985L16.7478 7.15512C18.4476 7.44076 18.8475 8.68415 17.6227 9.91074L15.5562 11.9943C15.2063 12.3471 15.0146 13.0276 15.1229 13.5149L15.7146 16.0941C16.1812 18.1356 15.1063 18.9253 13.3148 17.8583L10.8234 16.3713C10.3735 16.1025 9.63189 16.1025 9.17361 16.3713L6.68222 17.8583C4.89908 18.9253 3.81587 18.1272 4.28248 16.0941L4.87408 13.5149C4.9824 13.0276 4.79076 12.3471 4.4408 11.9943L2.37436 9.91074C1.15783 8.68415 1.54945 7.44076 3.24926 7.15512L5.9073 6.70985C6.34892 6.63424 6.88219 6.23938 7.08217 5.82772L8.54868 2.87047C9.34859 1.26583 10.6484 1.26583 11.44 2.87047Z"
                                                fill="#FFC800" />
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M11.44 2.87047L12.9065 5.82772C13.1065 6.23938 13.6398 6.63424 14.0897 6.70985L16.7478 7.15512C18.4476 7.44076 18.8475 8.68415 17.6227 9.91074L15.5562 11.9943C15.2063 12.3471 15.0146 13.0276 15.1229 13.5149L15.7146 16.0941C16.1812 18.1356 15.1063 18.9253 13.3148 17.8583L10.8234 16.3713C10.3735 16.1025 9.63189 16.1025 9.17361 16.3713L6.68222 17.8583C4.89908 18.9253 3.81587 18.1272 4.28248 16.0941L4.87408 13.5149C4.9824 13.0276 4.79076 12.3471 4.4408 11.9943L2.37436 9.91074C1.15783 8.68415 1.54945 7.44076 3.24926 7.15512L5.9073 6.70985C6.34892 6.63424 6.88219 6.23938 7.08217 5.82772L8.54868 2.87047C9.34859 1.26583 10.6484 1.26583 11.44 2.87047Z"
                                                fill="#FFC800" />
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M11.44 2.87047L12.9065 5.82772C13.1065 6.23938 13.6398 6.63424 14.0897 6.70985L16.7478 7.15512C18.4476 7.44076 18.8475 8.68415 17.6227 9.91074L15.5562 11.9943C15.2063 12.3471 15.0146 13.0276 15.1229 13.5149L15.7146 16.0941C16.1812 18.1356 15.1063 18.9253 13.3148 17.8583L10.8234 16.3713C10.3735 16.1025 9.63189 16.1025 9.17361 16.3713L6.68222 17.8583C4.89908 18.9253 3.81587 18.1272 4.28248 16.0941L4.87408 13.5149C4.9824 13.0276 4.79076 12.3471 4.4408 11.9943L2.37436 9.91074C1.15783 8.68415 1.54945 7.44076 3.24926 7.15512L5.9073 6.70985C6.34892 6.63424 6.88219 6.23938 7.08217 5.82772L8.54868 2.87047C9.34859 1.26583 10.6484 1.26583 11.44 2.87047Z"
                                                fill="#FFC800" />
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M11.44 2.87047L12.9065 5.82772C13.1065 6.23938 13.6398 6.63424 14.0897 6.70985L16.7478 7.15512C18.4476 7.44076 18.8475 8.68415 17.6227 9.91074L15.5562 11.9943C15.2063 12.3471 15.0146 13.0276 15.1229 13.5149L15.7146 16.0941C16.1812 18.1356 15.1063 18.9253 13.3148 17.8583L10.8234 16.3713C10.3735 16.1025 9.63189 16.1025 9.17361 16.3713L6.68222 17.8583C4.89908 18.9253 3.81587 18.1272 4.28248 16.0941L4.87408 13.5149C4.9824 13.0276 4.79076 12.3471 4.4408 11.9943L2.37436 9.91074C1.15783 8.68415 1.54945 7.44076 3.24926 7.15512L5.9073 6.70985C6.34892 6.63424 6.88219 6.23938 7.08217 5.82772L8.54868 2.87047C9.34859 1.26583 10.6484 1.26583 11.44 2.87047Z"
                                                fill="#FFC800" />
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M11.44 2.87047L12.9065 5.82772C13.1065 6.23938 13.6398 6.63424 14.0897 6.70985L16.7478 7.15512C18.4476 7.44076 18.8475 8.68415 17.6227 9.91074L15.5562 11.9943C15.2063 12.3471 15.0146 13.0276 15.1229 13.5149L15.7146 16.0941C16.1812 18.1356 15.1063 18.9253 13.3148 17.8583L10.8234 16.3713C10.3735 16.1025 9.63189 16.1025 9.17361 16.3713L6.68222 17.8583C4.89908 18.9253 3.81587 18.1272 4.28248 16.0941L4.87408 13.5149C4.9824 13.0276 4.79076 12.3471 4.4408 11.9943L2.37436 9.91074C1.15783 8.68415 1.54945 7.44076 3.24926 7.15512L5.9073 6.70985C6.34892 6.63424 6.88219 6.23938 7.08217 5.82772L8.54868 2.87047C9.34859 1.26583 10.6484 1.26583 11.44 2.87047Z"
                                                fill="#FFC800" />
                                        </svg>
                                    </div>

                                    <p class="text mt-4">
                                        আমি এক ঘন্টারও কম সময়ের মধ্যে একটি পেশাদার-
                                        দেখানো ওয়েবসাইট তৈরি করতে পেরেছি। প্ল্যাটফর্মটি
                                        ব্যবহার করা খুবই সহজ!
                                    </p>

                                    <div class="d-flex gap-3 align-items-center mt-5">
                                        <figure>
                                            <img class="user_image"
                                                src="https://images.unsplash.com/photo-1508921340878-ba53e1f016ec?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                alt="" />
                                        </figure>
                                        <div class="">
                                            <h3 class="title">জেন ডি.</h3>
                                            <p class="subtitle">অনলাইন স্টোর মালিক</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial_card">
                                    <div class="d-flex align-items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M11.44 2.87047L12.9065 5.82772C13.1065 6.23938 13.6398 6.63424 14.0897 6.70985L16.7478 7.15512C18.4476 7.44076 18.8475 8.68415 17.6227 9.91074L15.5562 11.9943C15.2063 12.3471 15.0146 13.0276 15.1229 13.5149L15.7146 16.0941C16.1812 18.1356 15.1063 18.9253 13.3148 17.8583L10.8234 16.3713C10.3735 16.1025 9.63189 16.1025 9.17361 16.3713L6.68222 17.8583C4.89908 18.9253 3.81587 18.1272 4.28248 16.0941L4.87408 13.5149C4.9824 13.0276 4.79076 12.3471 4.4408 11.9943L2.37436 9.91074C1.15783 8.68415 1.54945 7.44076 3.24926 7.15512L5.9073 6.70985C6.34892 6.63424 6.88219 6.23938 7.08217 5.82772L8.54868 2.87047C9.34859 1.26583 10.6484 1.26583 11.44 2.87047Z"
                                                fill="#FFC800" />
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M11.44 2.87047L12.9065 5.82772C13.1065 6.23938 13.6398 6.63424 14.0897 6.70985L16.7478 7.15512C18.4476 7.44076 18.8475 8.68415 17.6227 9.91074L15.5562 11.9943C15.2063 12.3471 15.0146 13.0276 15.1229 13.5149L15.7146 16.0941C16.1812 18.1356 15.1063 18.9253 13.3148 17.8583L10.8234 16.3713C10.3735 16.1025 9.63189 16.1025 9.17361 16.3713L6.68222 17.8583C4.89908 18.9253 3.81587 18.1272 4.28248 16.0941L4.87408 13.5149C4.9824 13.0276 4.79076 12.3471 4.4408 11.9943L2.37436 9.91074C1.15783 8.68415 1.54945 7.44076 3.24926 7.15512L5.9073 6.70985C6.34892 6.63424 6.88219 6.23938 7.08217 5.82772L8.54868 2.87047C9.34859 1.26583 10.6484 1.26583 11.44 2.87047Z"
                                                fill="#FFC800" />
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M11.44 2.87047L12.9065 5.82772C13.1065 6.23938 13.6398 6.63424 14.0897 6.70985L16.7478 7.15512C18.4476 7.44076 18.8475 8.68415 17.6227 9.91074L15.5562 11.9943C15.2063 12.3471 15.0146 13.0276 15.1229 13.5149L15.7146 16.0941C16.1812 18.1356 15.1063 18.9253 13.3148 17.8583L10.8234 16.3713C10.3735 16.1025 9.63189 16.1025 9.17361 16.3713L6.68222 17.8583C4.89908 18.9253 3.81587 18.1272 4.28248 16.0941L4.87408 13.5149C4.9824 13.0276 4.79076 12.3471 4.4408 11.9943L2.37436 9.91074C1.15783 8.68415 1.54945 7.44076 3.24926 7.15512L5.9073 6.70985C6.34892 6.63424 6.88219 6.23938 7.08217 5.82772L8.54868 2.87047C9.34859 1.26583 10.6484 1.26583 11.44 2.87047Z"
                                                fill="#FFC800" />
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M11.44 2.87047L12.9065 5.82772C13.1065 6.23938 13.6398 6.63424 14.0897 6.70985L16.7478 7.15512C18.4476 7.44076 18.8475 8.68415 17.6227 9.91074L15.5562 11.9943C15.2063 12.3471 15.0146 13.0276 15.1229 13.5149L15.7146 16.0941C16.1812 18.1356 15.1063 18.9253 13.3148 17.8583L10.8234 16.3713C10.3735 16.1025 9.63189 16.1025 9.17361 16.3713L6.68222 17.8583C4.89908 18.9253 3.81587 18.1272 4.28248 16.0941L4.87408 13.5149C4.9824 13.0276 4.79076 12.3471 4.4408 11.9943L2.37436 9.91074C1.15783 8.68415 1.54945 7.44076 3.24926 7.15512L5.9073 6.70985C6.34892 6.63424 6.88219 6.23938 7.08217 5.82772L8.54868 2.87047C9.34859 1.26583 10.6484 1.26583 11.44 2.87047Z"
                                                fill="#FFC800" />
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M11.44 2.87047L12.9065 5.82772C13.1065 6.23938 13.6398 6.63424 14.0897 6.70985L16.7478 7.15512C18.4476 7.44076 18.8475 8.68415 17.6227 9.91074L15.5562 11.9943C15.2063 12.3471 15.0146 13.0276 15.1229 13.5149L15.7146 16.0941C16.1812 18.1356 15.1063 18.9253 13.3148 17.8583L10.8234 16.3713C10.3735 16.1025 9.63189 16.1025 9.17361 16.3713L6.68222 17.8583C4.89908 18.9253 3.81587 18.1272 4.28248 16.0941L4.87408 13.5149C4.9824 13.0276 4.79076 12.3471 4.4408 11.9943L2.37436 9.91074C1.15783 8.68415 1.54945 7.44076 3.24926 7.15512L5.9073 6.70985C6.34892 6.63424 6.88219 6.23938 7.08217 5.82772L8.54868 2.87047C9.34859 1.26583 10.6484 1.26583 11.44 2.87047Z"
                                                fill="#FFC800" />
                                        </svg>
                                    </div>

                                    <p class="text mt-4">
                                        আমি এক ঘন্টারও কম সময়ের মধ্যে একটি পেশাদার-
                                        দেখানো ওয়েবসাইট তৈরি করতে পেরেছি। প্ল্যাটফর্মটি
                                        ব্যবহার করা খুবই সহজ!
                                    </p>

                                    <div class="d-flex gap-3 align-items-center mt-5">
                                        <figure>
                                            <img class="user_image"
                                                src="https://images.unsplash.com/photo-1508921340878-ba53e1f016ec?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                alt="" />
                                        </figure>
                                        <div class="">
                                            <h3 class="title">জেন ডি.</h3>
                                            <p class="subtitle">অনলাইন স্টোর মালিক</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial_card">
                                    <div class="d-flex align-items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M11.44 2.87047L12.9065 5.82772C13.1065 6.23938 13.6398 6.63424 14.0897 6.70985L16.7478 7.15512C18.4476 7.44076 18.8475 8.68415 17.6227 9.91074L15.5562 11.9943C15.2063 12.3471 15.0146 13.0276 15.1229 13.5149L15.7146 16.0941C16.1812 18.1356 15.1063 18.9253 13.3148 17.8583L10.8234 16.3713C10.3735 16.1025 9.63189 16.1025 9.17361 16.3713L6.68222 17.8583C4.89908 18.9253 3.81587 18.1272 4.28248 16.0941L4.87408 13.5149C4.9824 13.0276 4.79076 12.3471 4.4408 11.9943L2.37436 9.91074C1.15783 8.68415 1.54945 7.44076 3.24926 7.15512L5.9073 6.70985C6.34892 6.63424 6.88219 6.23938 7.08217 5.82772L8.54868 2.87047C9.34859 1.26583 10.6484 1.26583 11.44 2.87047Z"
                                                fill="#FFC800" />
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M11.44 2.87047L12.9065 5.82772C13.1065 6.23938 13.6398 6.63424 14.0897 6.70985L16.7478 7.15512C18.4476 7.44076 18.8475 8.68415 17.6227 9.91074L15.5562 11.9943C15.2063 12.3471 15.0146 13.0276 15.1229 13.5149L15.7146 16.0941C16.1812 18.1356 15.1063 18.9253 13.3148 17.8583L10.8234 16.3713C10.3735 16.1025 9.63189 16.1025 9.17361 16.3713L6.68222 17.8583C4.89908 18.9253 3.81587 18.1272 4.28248 16.0941L4.87408 13.5149C4.9824 13.0276 4.79076 12.3471 4.4408 11.9943L2.37436 9.91074C1.15783 8.68415 1.54945 7.44076 3.24926 7.15512L5.9073 6.70985C6.34892 6.63424 6.88219 6.23938 7.08217 5.82772L8.54868 2.87047C9.34859 1.26583 10.6484 1.26583 11.44 2.87047Z"
                                                fill="#FFC800" />
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M11.44 2.87047L12.9065 5.82772C13.1065 6.23938 13.6398 6.63424 14.0897 6.70985L16.7478 7.15512C18.4476 7.44076 18.8475 8.68415 17.6227 9.91074L15.5562 11.9943C15.2063 12.3471 15.0146 13.0276 15.1229 13.5149L15.7146 16.0941C16.1812 18.1356 15.1063 18.9253 13.3148 17.8583L10.8234 16.3713C10.3735 16.1025 9.63189 16.1025 9.17361 16.3713L6.68222 17.8583C4.89908 18.9253 3.81587 18.1272 4.28248 16.0941L4.87408 13.5149C4.9824 13.0276 4.79076 12.3471 4.4408 11.9943L2.37436 9.91074C1.15783 8.68415 1.54945 7.44076 3.24926 7.15512L5.9073 6.70985C6.34892 6.63424 6.88219 6.23938 7.08217 5.82772L8.54868 2.87047C9.34859 1.26583 10.6484 1.26583 11.44 2.87047Z"
                                                fill="#FFC800" />
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M11.44 2.87047L12.9065 5.82772C13.1065 6.23938 13.6398 6.63424 14.0897 6.70985L16.7478 7.15512C18.4476 7.44076 18.8475 8.68415 17.6227 9.91074L15.5562 11.9943C15.2063 12.3471 15.0146 13.0276 15.1229 13.5149L15.7146 16.0941C16.1812 18.1356 15.1063 18.9253 13.3148 17.8583L10.8234 16.3713C10.3735 16.1025 9.63189 16.1025 9.17361 16.3713L6.68222 17.8583C4.89908 18.9253 3.81587 18.1272 4.28248 16.0941L4.87408 13.5149C4.9824 13.0276 4.79076 12.3471 4.4408 11.9943L2.37436 9.91074C1.15783 8.68415 1.54945 7.44076 3.24926 7.15512L5.9073 6.70985C6.34892 6.63424 6.88219 6.23938 7.08217 5.82772L8.54868 2.87047C9.34859 1.26583 10.6484 1.26583 11.44 2.87047Z"
                                                fill="#FFC800" />
                                        </svg>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 20 20" fill="none">
                                            <path
                                                d="M11.44 2.87047L12.9065 5.82772C13.1065 6.23938 13.6398 6.63424 14.0897 6.70985L16.7478 7.15512C18.4476 7.44076 18.8475 8.68415 17.6227 9.91074L15.5562 11.9943C15.2063 12.3471 15.0146 13.0276 15.1229 13.5149L15.7146 16.0941C16.1812 18.1356 15.1063 18.9253 13.3148 17.8583L10.8234 16.3713C10.3735 16.1025 9.63189 16.1025 9.17361 16.3713L6.68222 17.8583C4.89908 18.9253 3.81587 18.1272 4.28248 16.0941L4.87408 13.5149C4.9824 13.0276 4.79076 12.3471 4.4408 11.9943L2.37436 9.91074C1.15783 8.68415 1.54945 7.44076 3.24926 7.15512L5.9073 6.70985C6.34892 6.63424 6.88219 6.23938 7.08217 5.82772L8.54868 2.87047C9.34859 1.26583 10.6484 1.26583 11.44 2.87047Z"
                                                fill="#FFC800" />
                                        </svg>
                                    </div>

                                    <p class="text mt-4">
                                        আমি এক ঘন্টারও কম সময়ের মধ্যে একটি পেশাদার-
                                        দেখানো ওয়েবসাইট তৈরি করতে পেরেছি। প্ল্যাটফর্মটি
                                        ব্যবহার করা খুবই সহজ!
                                    </p>

                                    <div class="d-flex gap-3 align-items-center mt-5">
                                        <figure>
                                            <img class="user_image"
                                                src="https://images.unsplash.com/photo-1508921340878-ba53e1f016ec?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                                alt="" />
                                        </figure>
                                        <div class="">
                                            <h3 class="title">জেন ডি.</h3>
                                            <p class="subtitle">অনলাইন স্টোর মালিক</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="position-relative">
                    <div id="swiper-button-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 54 54"
                            fill="none">
                            <rect x="3" y="3" width="48" height="48" rx="4" fill="white"
                                fill-opacity="0.35" />
                            <path d="M31.125 34L38 27M38 27L31.125 20M38 27H16" stroke="white" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>

                    <div id="swiper-button-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" viewBox="0 0 54 54"
                            fill="none">
                            <rect width="48" height="48" rx="4" transform="matrix(-1 0 0 1 51 3)"
                                fill="white" fill-opacity="0.35" />
                            <path d="M22.875 34L16 27M16 27L22.875 20M16 27H38" stroke="white" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!-- TESTMONIAL-SECTION-END -->

    <!-- PRICE-SECTION-START -->
    <section class="price_section">
        <div class="container">
            <div class="price_section_wrapper">
                <div class="price_section_header">
                    <div class="d-flex justify-content-center">
                        <div class="process_section_title">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10"
                                fill="none">
                                <circle cx="5" cy="5" r="5" fill="#64D71F" />
                            </svg>
                            <h3 class="sub_title">
                                প্রাইসিং
                            </h3>
                        </div>
                    </div>
                    <div class="d-flex flex-column gap-4">
                        <h1 class="title">
                            <span>মূল্য</span> পরিকল্পনা
                        </h1>
                        <p class="description">
                            ফ্রি প্ল্যান এবং আপগ্রেডের অপশন
                        </p>
                    </div>
                </div>

                <div class="price_section_content">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <div class="inner_tabs">
                                <button class="monthly active" id="monthly-tab" data-bs-toggle="tab"
                                    data-bs-target="#monthly" type="button" role="tab" aria-controls="monthly"
                                    aria-selected="true">
                                    মাসিক
                                </button>

                                <button class="monthly" id="yearly-tab" data-bs-toggle="tab" data-bs-target="#yearly"
                                    type="button" role="tab" aria-controls="yearly" aria-selected="false">
                                    বার্ষিক
                                </button>
                            </div>
                        </div>
                    </nav>

                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="monthly" role="tabpanel"
                            aria-labelledby="monthly-tab">
                            <div class="price_section_card_inner">
                                @foreach ($packages as $package)
                                    @include('front-end.components.home.pricing', ['item' => $package])
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-pane fade" id="yearly" role="tabpanel" aria-labelledby="yearly-tab">
                            <div class="price_section_card_inner">
                                @foreach ($packages as $package)
                                    @include('front-end.components.home.pricing', ['item' => $package])
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PRICE-SECTION-END -->

    <!-- QUESTIONS-SECTION-START -->
    <section class="questions_section">
        <div class="container">
            <div class="questions_section_wrapper">
                <div class="questions_section_header">
                    <div class="d-flex justify-content-center">
                        <div class="questions_section_title">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10"
                                fill="none">
                                <circle cx="5" cy="5" r="5" fill="#DE00A5" />
                            </svg>
                            <h3 class="sub_title">
                                প্রশ্ন
                            </h3>
                        </div>
                    </div>
                    <div class="d-flex flex-column gap-4">
                        <h1 class="title">
                            সাধারণ <span>প্রশ্নোত্তর</span>
                        </h1>
                        <p class="description">
                            ব্যবহারকারীদের সাধারণ প্রশ্নগুলি
                        </p>
                    </div>
                </div>

                <div class="questions_section_content">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    আমি কি সত্যিই ফ্রি ব্যবহার করতে পারবো?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <h2 class="accordion-body">
                                    হ্যাঁ! আমাদের ফ্রি প্ল্যানের মাধ্যমে আপনি ওয়েবসাইট তৈরির জন্য প্রয়োজনীয় সবকিছু
                                    পাবেন।
                                </h2>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    আমাকে কি কোড জানতে হবে?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <h2 class="accordion-body">
                                    না ! আমাদের ফ্রি প্ল্যানের মাধ্যমে আপনি ওয়েবসাইট তৈরির জন্য প্রয়োজনীয় সবকিছু
                                    পাবেন।
                                </h2>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="true"
                                    aria-controls="collapseThree">
                                    আমি কি পরে আপগ্রেড করতে পারবো?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <h2 class="accordion-body">
                                    হ্যাঁ! আমাদের ফ্রি প্ল্যানের মাধ্যমে আপনি ওয়েবসাইট তৈরির জন্য প্রয়োজনীয় সবকিছু
                                    পাবেন।
                                </h2>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    আমাকে কি কোড জানতে হবে?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <h2 class="accordion-body">
                                    হ্যাঁ! আমাদের ফ্রি প্ল্যানের মাধ্যমে আপনি ওয়েবসাইট তৈরির জন্য প্রয়োজনীয় সবকিছু
                                    পাবেন।
                                </h2>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                    আমি কি সত্যিই ফ্রি ব্যবহার করতে পারবো?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <h2 class="accordion-body">
                                    হ্যাঁ! আমাদের ফ্রি প্ল্যানের মাধ্যমে আপনি ওয়েবসাইট তৈরির জন্য প্রয়োজনীয় সবকিছু
                                    পাবেন।
                                </h2>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- QUESTIONS-SECTION-END -->
@endsection
