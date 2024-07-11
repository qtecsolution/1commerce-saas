@php
    $title = !empty($shop) ? $shop->name : 'Landing Page 01';
@endphp
@extends('customer.template.templates.layouts.app')

@section('page_content')
    <div class="Landing__14">
        <section>
            <div class="Conpad container-fluid"><img class="BannerAbs1"
                    src="{{ asset('template/media/banner/ak-banner3.png') }}" alt="alt" /><img class="BannerAbs2"
                    src="{{ asset('template/media/banner/ak-banner2.png') }}" alt="alt" />
                <div class="BannerBg" style="background-image: url('{{ asset('template/media/background/ak-bg1.png') }}')">
                    <img class="BannerBgAbsImg1" src="{{ asset('template/media/background/ak-bg1s.png') }}"
                        alt="alt" />
                    <div class="BannerToptxt">
                        <h4>Welcome to {{ !empty($shop) ? $shop->name : 'My Saree House ' }}</h4>
                    </div>
                    <section class="Menubar">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="MenubarContent">

                                        <div class="Logo"><img
                                                src="{{ asset(!empty($shop) ? 'storage/' . $shop->logo : 'template/media/logo/ak-logo6.png') }}"
                                                src="{{ asset('template/media/logo/ak-logo6.png') }}" width="301"
                                                height="75" decoding="async" data-nimg="1" loading="lazy"
                                                style="color:transparent" /></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="BannerToptxtBox">
                        <div class="BannertxtBoxRel"><img src="{{ asset('template/media/other-images/ak-img3s.svg') }}"
                                alt="img" />
                            <div class="BannertxtBoxAbs">
                                <h1 class="BannertxtBoxAbs1">শাড়িতেই নারী! </h1>
                                <h1 class="BannertxtBoxAbs2"> এক্সক্লুসিভ মসলিন জামদানি শাড়ি</h1>
                            </div>
                            <p>শাড়ি কার না ভালো লাগে? বাঙালি মেয়েদের শাড়িতেই সবচেয়ে সুন্দর দেখায় কোটি টাকার বাড়ির
                                চেয়েও একটি জামদানিতেই অনেক বেশি খুশি হন বেশিরভাগ নারী</p><a class="bg"
                                href="#placeAnOrder"> অর্ডার করুন <svg stroke="currentColor" fill="currentColor"
                                    stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M922.9 701.9H327.4l29.9-60.9 496.8-.9c16.8 0 31.2-12 34.2-28.6l68.8-385.1c1.8-10.1-.9-20.5-7.5-28.4a34.99 34.99 0 0 0-26.6-12.5l-632-2.1-5.4-25.4c-3.4-16.2-18-28-34.6-28H96.5a35.3 35.3 0 1 0 0 70.6h125.9L246 312.8l58.1 281.3-74.8 122.1a34.96 34.96 0 0 0-3 36.8c6 11.9 18.1 19.4 31.5 19.4h62.8a102.43 102.43 0 0 0-20.6 61.7c0 56.6 46 102.6 102.6 102.6s102.6-46 102.6-102.6c0-22.3-7.4-44-20.6-61.7h161.1a102.43 102.43 0 0 0-20.6 61.7c0 56.6 46 102.6 102.6 102.6s102.6-46 102.6-102.6c0-22.3-7.4-44-20.6-61.7H923c19.4 0 35.3-15.8 35.3-35.3a35.42 35.42 0 0 0-35.4-35.2zM305.7 253l575.8 1.9-56.4 315.8-452.3.8L305.7 253zm96.9 612.7c-17.4 0-31.6-14.2-31.6-31.6 0-17.4 14.2-31.6 31.6-31.6s31.6 14.2 31.6 31.6a31.6 31.6 0 0 1-31.6 31.6zm325.1 0c-17.4 0-31.6-14.2-31.6-31.6 0-17.4 14.2-31.6 31.6-31.6s31.6 14.2 31.6 31.6a31.6 31.6 0 0 1-31.6 31.6z">
                                    </path>
                                </svg> </a><a class="bg2" href="#placeAnOrder"> +8801799733234 </a>
                            <h2>ডিস্কাউন্ট মূল্যঃ ১৬৫০ টাকা</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="Sharee_houseRow row">
                    <div class="col-md-6 col-sm-12">
                        <div class="Sharee_house">
                            <h2>কেন আপনার জন্য এই রয়্যাল শাড়ি চয়ন করবেন ?</h2>
                            <p>কোটি টাকার বাড়ির চেয়েও একটি জামদানিতেই অনেক বেশি খুশি হন বেশিরভাগ নারী। প্রিয় পোশাকের
                                নাম জানতে চাইলে, সব বাঙালি নারী মূহুর্তেই উত্তর দেবেন ‘শাড়ি’। প্রতিটি শাড়িই নারীর
                                কাছে অনেক অনেক প্রিয়। তাই তো বেশ কয়েক বছরও যদি পরা না হয়, তবুও শাড়িটি ফেলে দিতে মন
                                চায় না কারোই। হবেই বা না কেন, প্রতিটি শাড়ির সঙ্গে যে জড়িয়ে থাকে উপলক্ষ, উৎসব, প্রিয়
                                মানুষের ভালোবাসা, অনেক অনেক স্মৃতি। তাই তো নারীর এত প্রিয় শাড়ি।</p><br />
                            <p>প্রতিটি শাড়ির সঙ্গে যে জড়িয়ে থাকে উপলক্ষ, উৎসব, প্রিয় মানুষের ভালোবাসা, অনেক অনেক
                                স্মৃতি। তাই তো নারীর এত প্রিয় শাড়ি।</p><a class="bg" href="#placeAnOrder"> অর্ডার করুন
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024"
                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M922.9 701.9H327.4l29.9-60.9 496.8-.9c16.8 0 31.2-12 34.2-28.6l68.8-385.1c1.8-10.1-.9-20.5-7.5-28.4a34.99 34.99 0 0 0-26.6-12.5l-632-2.1-5.4-25.4c-3.4-16.2-18-28-34.6-28H96.5a35.3 35.3 0 1 0 0 70.6h125.9L246 312.8l58.1 281.3-74.8 122.1a34.96 34.96 0 0 0-3 36.8c6 11.9 18.1 19.4 31.5 19.4h62.8a102.43 102.43 0 0 0-20.6 61.7c0 56.6 46 102.6 102.6 102.6s102.6-46 102.6-102.6c0-22.3-7.4-44-20.6-61.7h161.1a102.43 102.43 0 0 0-20.6 61.7c0 56.6 46 102.6 102.6 102.6s102.6-46 102.6-102.6c0-22.3-7.4-44-20.6-61.7H923c19.4 0 35.3-15.8 35.3-35.3a35.42 35.42 0 0 0-35.4-35.2zM305.7 253l575.8 1.9-56.4 315.8-452.3.8L305.7 253zm96.9 612.7c-17.4 0-31.6-14.2-31.6-31.6 0-17.4 14.2-31.6 31.6-31.6s31.6 14.2 31.6 31.6a31.6 31.6 0 0 1-31.6 31.6zm325.1 0c-17.4 0-31.6-14.2-31.6-31.6 0-17.4 14.2-31.6 31.6-31.6s31.6 14.2 31.6 31.6a31.6 31.6 0 0 1-31.6 31.6z">
                                    </path>
                                </svg> </a>
                        </div>
                    </div>
                    <div class="BordarMainDivCol col-md-6 col-sm-12">
                        <div class="BordarMainDiv">
                            <div class="BordarMainDiv1"></div>
                            <div class="BordarMainDiv2"></div>
                            <div class="BordarMainDiv3"></div>
                            <div class="BordarMainDiv4"></div>
                        </div>
                        <div class="Sharee_Row row">
                            <div class="col-6"><img src="{{ asset('template/media/other-images/ak-img4s.png') }}"
                                    alt="img" /></div>
                            <div class="col-6"><img src="{{ asset('template/media/other-images/ak-img5s.png') }}"
                                    alt="img" /></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="FloatSolve"></div>
        <div class="section_gap"></div>
        <section class="BggImg" style="background-image: url('{{ asset('template/media/background/ak-bg3.png') }}')">
            <section class="ShippingAddress">
                <div class="container">
                    <div class="d_flex row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="ShippingAddressItem">
                                <div class="img"><img src="{{ asset('template/media/delivery/ak-delivary1.png') }}"
                                        src="{{ asset('template/media/delivery/ak-delivary1.png') }}" width="100"
                                        height="100" decoding="async" data-nimg="1" loading="lazy"
                                        style="color:transparent" />
                                </div>
                                <div class="text">
                                    <p>Free 2 Days Shipping</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="ShippingAddressItem">
                                <div class="img"><img src="{{ asset('template/media/delivery/ak-delivary2.png') }}"
                                        src="{{ asset('template/media/delivery/ak-delivary2.png') }}" width="100"
                                        height="100" decoding="async" data-nimg="1" loading="lazy"
                                        style="color:transparent" />
                                </div>
                                <div class="text">
                                    <p>Money Back Gurantee</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="ShippingAddressItem">
                                <div class="img"><img src="{{ asset('template/media/delivery/ak-delivary3.png') }}"
                                        src="{{ asset('template/media/delivery/ak-delivary3.png') }}" width="76"
                                        height="88" decoding="async" data-nimg="1" loading="lazy"
                                        style="color:transparent" />
                                </div>
                                <div class="text">
                                    <p>Return Upto 30 Days</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="ShippingAddressItem">
                                <div class="img"><img src="{{ asset('template/media/delivery/ak-delivary4.png') }}"
                                        src="{{ asset('template/media/delivery/ak-delivary4.png') }}" width="82"
                                        height="82" decoding="async" data-nimg="1" loading="lazy"
                                        style="color:transparent" />
                                </div>
                                <div class="text">
                                    <p>24/7 Customer Support</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <section>
            <div class="ConPad CardConBg container-fluid">
                <div class="container">
                    <h2 class="CardTopH2">আমাদের প্রিমিয়াম মানের নতুন শাড়ি গুলো সম্পর্কে আরো বিস্তারির জানুন </h2>
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div class="row">
                                <div class="col-12">
                                    <div class="CardImgRel"><img class="CardImg"
                                            src="{{ asset('template/media/other-images/ak-img16s.png') }}"
                                            alt="" />
                                        <div class="Cardpad">
                                            <h4 class="CardImgAbs1">জামদানি শাড়ি</h4>
                                            <p class="CardImgAbs2">ভালোমানের একটি জামদানি শাড়ির দাম প্রায় ১০ হাজার
                                                টাকা। এত দামি শাড়ি কখনোই বাড়িতে ধোবেন না, লন্ড্রিতে কাটা ওয়াশ করিয়ে
                                                নেবেন। জামদানি শাড়ি ভাঁজ করে না রেখে হ্যাঙ্গারে ঝুলিয়ে অথবা রোল করে
                                                মুড়িয়ে রাখা ভালো। </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="CardImgRel"><img class="CardImg"
                                            src="{{ asset('template/media/other-images/ak-img16s.png') }}"
                                            alt="" />
                                        <div class="Cardpad">
                                            <h4 class="CardImgAbs1">সিল্ক শাড়ি</h4>
                                            <p class="CardImgAbs2">ভালোমানের একটি জামদানি শাড়ির দাম প্রায় ১০ হাজার
                                                টাকা। এত দামি শাড়ি কখনোই বাড়িতে ধোবেন না, লন্ড্রিতে কাটা ওয়াশ করিয়ে
                                                নেবেন। জামদানি শাড়ি ভাঁজ করে না রেখে হ্যাঙ্গারে ঝুলিয়ে অথবা রোল করে
                                                মুড়িয়ে রাখা ভালো।</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="CardImgRel"><img class="CardImg"
                                            src="{{ asset('template/media/other-images/ak-img16s.png') }}"
                                            alt="" />
                                        <div class="Cardpad">
                                            <h4 class="CardImgAbs1">জরির কাজের শাড়ি</h4>
                                            <p class="CardImgAbs2">ভালোমানের একটি জামদানি শাড়ির দাম প্রায় ১০ হাজার
                                                টাকা। এত দামি শাড়ি কখনোই বাড়িতে ধোবেন না, লন্ড্রিতে কাটা ওয়াশ করিয়ে
                                                নেবেন। জামদানি শাড়ি ভাঁজ করে না রেখে হ্যাঙ্গারে ঝুলিয়ে অথবা রোল করে
                                                মুড়িয়ে রাখা ভালো।</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12"><img class="CardMidImg"
                                src="{{ asset('template/media/other-images/ak-img10s.png') }}" alt="" />
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="row">
                                <div class="col-12">
                                    <div class="CardImgRel"><img class="CardImg"
                                            src="{{ asset('template/media/other-images/ak-img16s.png') }}"
                                            alt="" />
                                        <div class="Cardpad">
                                            <h4 class="CardImgAbs1">কাতান, বেনারসি</h4>
                                            <p class="CardImgAbs2">ভালোমানের একটি জামদানি শাড়ির দাম প্রায় ১০ হাজার
                                                টাকা। এত দামি শাড়ি কখনোই বাড়িতে ধোবেন না, লন্ড্রিতে কাটা ওয়াশ করিয়ে
                                                নেবেন। জামদানি শাড়ি ভাঁজ করে না রেখে হ্যাঙ্গারে ঝুলিয়ে অথবা রোল করে
                                                মুড়িয়ে রাখা ভালো। </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="CardImgRel"><img class="CardImg"
                                            src="{{ asset('template/media/other-images/ak-img16s.png') }}"
                                            alt="" />
                                        <div class="Cardpad">
                                            <h4 class="CardImgAbs1">সুতি-জর্জেট শাড়ি</h4>
                                            <p class="CardImgAbs2">ভালোমানের একটি জামদানি শাড়ির দাম প্রায় ১০ হাজার
                                                টাকা। এত দামি শাড়ি কখনোই বাড়িতে ধোবেন না, লন্ড্রিতে কাটা ওয়াশ করিয়ে
                                                নেবেন। জামদানি শাড়ি ভাঁজ করে না রেখে হ্যাঙ্গারে ঝুলিয়ে অথবা রোল করে
                                                মুড়িয়ে রাখা ভালো।</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="CardImgRel"><img class="CardImg"
                                            src="{{ asset('template/media/other-images/ak-img16s.png') }}"
                                            alt="" />
                                        <div class="Cardpad">
                                            <h4 class="CardImgAbs1">মনিপুরী তাঁতের শাড়ি</h4>
                                            <p class="CardImgAbs2">ভালোমানের একটি জামদানি শাড়ির দাম প্রায় ১০ হাজার
                                                টাকা। এত দামি শাড়ি কখনোই বাড়িতে ধোবেন না, লন্ড্রিতে কাটা ওয়াশ করিয়ে
                                                নেবেন। জামদানি শাড়ি ভাঁজ করে না রেখে হ্যাঙ্গারে ঝুলিয়ে অথবা রোল করে
                                                মুড়িয়ে রাখা ভালো।</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="section_gap"></div>
        <div class="container">
            <div class="BggImg2">
                <div class="BggImgFlex2">
                    <div>
                        <h3>মুল্য-1,500.00 টাকা</h3>
                        <h5>সারা দেশে ফ্রি হোম ডেলিভারি</h5><a class="bg bg3" href="#placeAnOrder">
                            অর্ডার করতে এখানে ক্লিক করুন<svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                viewBox="0 0 1024 1024" height="1em" width="1em"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M922.9 701.9H327.4l29.9-60.9 496.8-.9c16.8 0 31.2-12 34.2-28.6l68.8-385.1c1.8-10.1-.9-20.5-7.5-28.4a34.99 34.99 0 0 0-26.6-12.5l-632-2.1-5.4-25.4c-3.4-16.2-18-28-34.6-28H96.5a35.3 35.3 0 1 0 0 70.6h125.9L246 312.8l58.1 281.3-74.8 122.1a34.96 34.96 0 0 0-3 36.8c6 11.9 18.1 19.4 31.5 19.4h62.8a102.43 102.43 0 0 0-20.6 61.7c0 56.6 46 102.6 102.6 102.6s102.6-46 102.6-102.6c0-22.3-7.4-44-20.6-61.7h161.1a102.43 102.43 0 0 0-20.6 61.7c0 56.6 46 102.6 102.6 102.6s102.6-46 102.6-102.6c0-22.3-7.4-44-20.6-61.7H923c19.4 0 35.3-15.8 35.3-35.3a35.42 35.42 0 0 0-35.4-35.2zM305.7 253l575.8 1.9-56.4 315.8-452.3.8L305.7 253zm96.9 612.7c-17.4 0-31.6-14.2-31.6-31.6 0-17.4 14.2-31.6 31.6-31.6s31.6 14.2 31.6 31.6a31.6 31.6 0 0 1-31.6 31.6zm325.1 0c-17.4 0-31.6-14.2-31.6-31.6 0-17.4 14.2-31.6 31.6-31.6s31.6 14.2 31.6 31.6a31.6 31.6 0 0 1-31.6 31.6z">
                                </path>
                            </svg> </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section_gap"></div>
        <section>
            <div class="container">
                <h2 class="VideoDivh2"> আমাদের এই সর্বাধিক প্রিমিয়াম মানের শাড়ি গুলোর ওভারভিউ দেখুন </h2>
                <div class="VideoDiv"><iframe width="560" height="315"
                        src="https://www.youtube.com/embed/lB-xm0dBBUQ" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"></iframe>
                </div>
            </div>
        </section>
        <div class="section_gap"></div>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div
                            class="swiper product-slider swiper-initialized swiper-horizontal swiper-pointer-events mySwiper">
                            <div class="swiper-wrapper"
                                style="transition-duration: 1ms; transform: translate3d(-2306px, 0px, 0px);">
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active SliderImg"
                                    data-swiper-slide-index="4" style="width: 258.25px; margin-right: 30px;"><a
                                        href="#">
                                        <div class="ClipBox"> </div><img class="imgHouse img21"
                                            src="{{ asset('template/media/slider/ak-slider1.png') }}" alt="">
                                    </a></div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next SliderImg"
                                    data-swiper-slide-index="5" style="width: 258.25px; margin-right: 30px;"><a
                                        href="#">
                                        <div class="ClipBox"> </div><img class="imgHouse img22"
                                            src="{{ asset('template/media/slider/ak-slider2.png') }}" alt="">
                                    </a></div>
                                <div class="swiper-slide swiper-slide-duplicate SliderImg" data-swiper-slide-index="6"
                                    style="width: 258.25px; margin-right: 30px;"><a href="#">
                                        <div class="ClipBox"> </div><img class="imgHouse img21"
                                            src="{{ asset('template/media/slider/ak-slider3.png') }}" alt="">
                                    </a></div>
                                <div class="swiper-slide swiper-slide-duplicate SliderImg" data-swiper-slide-index="7"
                                    style="width: 258.25px; margin-right: 30px;"><a href="#">
                                        <div class="ClipBox"> </div><img class="imgHouse img22"
                                            src="{{ asset('template/media/slider/ak-slider4.png') }}" alt="">
                                    </a></div>
                                <div class="swiper-slide SliderImg" data-swiper-slide-index="0"
                                    style="width: 258.25px; margin-right: 30px;"><a href="#">
                                        <div class="ClipBox"> </div><img class="imgHouse img21"
                                            src="{{ asset('template/media/slider/ak-slider1.png') }}" alt="">
                                    </a></div>
                                <div class="swiper-slide SliderImg" data-swiper-slide-index="1"
                                    style="width: 258.25px; margin-right: 30px;"><a href="#">
                                        <div class="ClipBox"> </div><img class="imgHouse img22"
                                            src="{{ asset('template/media/slider/ak-slider2.png') }}" alt="">
                                    </a></div>
                                <div class="swiper-slide SliderImg" data-swiper-slide-index="2"
                                    style="width: 258.25px; margin-right: 30px;"><a href="#">
                                        <div class="ClipBox"> </div><img class="imgHouse img23"
                                            src="{{ asset('template/media/slider/ak-slider3.png') }}" alt="">
                                    </a></div>
                                <div class="swiper-slide swiper-slide-prev SliderImg" data-swiper-slide-index="3"
                                    style="width: 258.25px; margin-right: 30px;"><a href="#">
                                        <div class="ClipBox"> </div><img class="imgHouse img24"
                                            src="{{ asset('template/media/slider/ak-slider4.png') }}" alt="">
                                    </a></div>
                                <div class="swiper-slide swiper-slide-active SliderImg" data-swiper-slide-index="4"
                                    style="width: 258.25px; margin-right: 30px;"><a href="#">
                                        <div class="ClipBox"> </div><img class="imgHouse img21"
                                            src="{{ asset('template/media/slider/ak-slider1.png') }}" alt="">
                                    </a></div>
                                <div class="swiper-slide swiper-slide-next SliderImg" data-swiper-slide-index="5"
                                    style="width: 258.25px; margin-right: 30px;"><a href="#">
                                        <div class="ClipBox"> </div><img class="imgHouse img22"
                                            src="{{ asset('template/media/slider/ak-slider2.png') }}" alt="">
                                    </a></div>
                                <div class="swiper-slide SliderImg" data-swiper-slide-index="6"
                                    style="width: 258.25px; margin-right: 30px;"><a href="#">
                                        <div class="ClipBox"> </div><img class="imgHouse img21"
                                            src="{{ asset('template/media/slider/ak-slider3.png') }}" alt="">
                                    </a></div>
                                <div class="swiper-slide SliderImg" data-swiper-slide-index="7"
                                    style="width: 258.25px; margin-right: 30px;"><a href="#">
                                        <div class="ClipBox"> </div><img class="imgHouse img22"
                                            src="{{ asset('template/media/slider/ak-slider4.png') }}" alt="">
                                    </a></div>
                                <div class="swiper-slide swiper-slide-duplicate SliderImg" data-swiper-slide-index="0"
                                    style="width: 258.25px; margin-right: 30px;"><a href="#">
                                        <div class="ClipBox"> </div><img class="imgHouse img21"
                                            src="{{ asset('template/media/slider/ak-slider1.png') }}" alt="">
                                    </a></div>
                                <div class="swiper-slide swiper-slide-duplicate SliderImg" data-swiper-slide-index="1"
                                    style="width: 258.25px; margin-right: 30px;"><a href="#">
                                        <div class="ClipBox"> </div><img class="imgHouse img22"
                                            src="{{ asset('template/media/slider/ak-slider2.png') }}" alt="">
                                    </a></div>
                                <div class="swiper-slide swiper-slide-duplicate SliderImg" data-swiper-slide-index="2"
                                    style="width: 258.25px; margin-right: 30px;"><a href="#">
                                        <div class="ClipBox"> </div><img class="imgHouse img23"
                                            src="{{ asset('template/media/slider/ak-slider3.png') }}" alt="">
                                    </a></div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev SliderImg"
                                    data-swiper-slide-index="3" style="width: 258.25px; margin-right: 30px;"><a
                                        href="#">
                                        <div class="ClipBox"> </div><img class="imgHouse img24"
                                            src="{{ asset('template/media/slider/ak-slider4.png') }}" alt="">
                                    </a></div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <div class="section_gap"></div>
        <section>
            <div class="GiftMain">
                <div class="container">
                    <h2 class="GiftH2">চোখ ধাঁধানো রঙ যেই কোন পার্টি, ওকেশন, বিবাহের পোশাক আপনার প্রিয়জনের জন্য
                        সেরা উপহার!</h2>
                    <div class="GiftRow row">
                        <div class="col-lg-6 col-md-12 col-sm-12"><img class="GiftImg"
                                src="{{ asset('template/media/other-images/ak-img13s.png') }}" alt="img" /></div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="GiftUlBox">
                                <ul>
                                    <li><img src="{{ asset('template/media/check/ak-checks.svg') }}" alt="alt" />
                                        <p>কালো এবং সাদা কালার ফ্লোরাল গোটা প্যাটি ভেলভেট শাড়ি</p>
                                    </li>
                                    <li><img src="{{ asset('template/media/check/ak-checks.svg') }}" alt="alt" />
                                        <p>আমাদের শাড়ির প্রধান উপাদান ধুপিয়ান</p>
                                    </li>
                                    <li><img src="{{ asset('template/media/check/ak-checks.svg') }}" alt="alt" />
                                        <p>অতিরিক্ত ব্লাউজ পিস থাকবে</p>
                                    </li>
                                    <li><img src="{{ asset('template/media/check/ak-checks.svg') }}" alt="alt" />
                                        <p>12 হাট বোহর</p>
                                    </li>
                                    <li><img src="{{ asset('template/media/check/ak-checks.svg') }}" alt="alt" />
                                        <p>ক্যাজুয়াল , পার্টি , এন্ড ফেস্টিভ্যাল ওকেশন পড়ার মত শাড়ি</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="section_gap"></div>
                    <h3 class="GiftH3">আমাদের এই প্রিমিয়াম মানের শাড়ি গুলো 10,000+ পিচ বিক্রি হয়েছে</h3>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="PriceBox"><img class="priceImgBg"
                        src="{{ asset('template/media/other-images/ak-img14s.png') }}" alt="" />
                    <div class="PriceBoxTxtDiv">
                        <h4>451+ রেগুলার ক্রেতা</h4><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                            viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                            </path>
                        </svg> <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024"
                            height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                            </path>
                        </svg> <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024"
                            height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                            </path>
                        </svg> <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024"
                            height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                            </path>
                        </svg> <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024"
                            height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M908.1 353.1l-253.9-36.9L540.7 86.1c-3.1-6.3-8.2-11.4-14.5-14.5-15.8-7.8-35-1.3-42.9 14.5L369.8 316.2l-253.9 36.9c-7 1-13.4 4.3-18.3 9.3a32.05 32.05 0 0 0 .6 45.3l183.7 179.1-43.4 252.9a31.95 31.95 0 0 0 46.4 33.7L512 754l227.1 119.4c6.2 3.3 13.4 4.4 20.3 3.2 17.4-3 29.1-19.5 26.1-36.9l-43.4-252.9 183.7-179.1c5-4.9 8.3-11.3 9.3-18.3 2.7-17.5-9.5-33.7-27-36.3z">
                            </path>
                        </svg> <br />
                        <h3>1,500.00 টাকা</h3><a class="bg bg4" href="#placeAnOrder"> অর্ডার করুন
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <div class="section_gap GapNone"></div>
        <section class=" OrderBg">
            <img class="FooterAbs1" src="{{ asset('template/media/other-images/ak-img20s.png') }}" alt="img" />
            <img class="FooterAbs2" src="{{ asset('template/media/other-images/ak-img20s.png') }}" alt="img" />
            {{-- place order --}}
            @include('customer.template.templates.layouts.place-order')
            <div class="section_gap"></div>
            <div class="FooterBg" style="background-image: url('{{ asset('template/media/background/ak-bg2.png') }}')">
                <div class="container">
                    <div class="footerLogoDiv"><img class="footerLogo"
                            src="{{ asset(!empty($shop) ? 'storage/' . $shop->logo : 'template/media/logo/ak-logo3.png') }}"
                            alt="" width="150" />
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="FooterUlBox">
                                    <h4>Contact Us</h4>
                                    <ul>
                                        <li> <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 512 512" height="1em" width="1em"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M391 480c-19.52 0-46.94-7.06-88-30-49.93-28-88.55-53.85-138.21-103.38C116.91 298.77 93.61 267.79 61 208.45c-36.84-67-30.56-102.12-23.54-117.13C45.82 73.38 58.16 62.65 74.11 52a176.3 176.3 0 0128.64-15.2c1-.43 1.93-.84 2.76-1.21 4.95-2.23 12.45-5.6 21.95-2 6.34 2.38 12 7.25 20.86 16 18.17 17.92 43 57.83 52.16 77.43 6.15 13.21 10.22 21.93 10.23 31.71 0 11.45-5.76 20.28-12.75 29.81-1.31 1.79-2.61 3.5-3.87 5.16-7.61 10-9.28 12.89-8.18 18.05 2.23 10.37 18.86 41.24 46.19 68.51s57.31 42.85 67.72 45.07c5.38 1.15 8.33-.59 18.65-8.47 1.48-1.13 3-2.3 4.59-3.47 10.66-7.93 19.08-13.54 30.26-13.54h.06c9.73 0 18.06 4.22 31.86 11.18 18 9.08 59.11 33.59 77.14 51.78 8.77 8.84 13.66 14.48 16.05 20.81 3.6 9.53.21 17-2 22-.37.83-.78 1.74-1.21 2.75a176.49 176.49 0 01-15.29 28.58c-10.63 15.9-21.4 28.21-39.38 36.58A67.42 67.42 0 01391 480z">
                                                </path>
                                            </svg>
                                            @php
                                                $phone = !empty($shop) ? $shop->user_details->phone : '01234-567890';
                                            @endphp
                                            <a href="tel:{{ $phone }}">{{ $phone }}</a>
                                        </li>
                                        <li> <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 512 512" height="1em" width="1em"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M460.6 147.3L353 256.9c-.8.8-.8 2 0 2.8l75.3 80.2c5.1 5.1 5.1 13.3 0 18.4-2.5 2.5-5.9 3.8-9.2 3.8s-6.7-1.3-9.2-3.8l-75-79.9c-.8-.8-2.1-.8-2.9 0L313.7 297c-15.3 15.5-35.6 24.1-57.4 24.2-22.1.1-43.1-9.2-58.6-24.9l-17.6-17.9c-.8-.8-2.1-.8-2.9 0l-75 79.9c-2.5 2.5-5.9 3.8-9.2 3.8s-6.7-1.3-9.2-3.8c-5.1-5.1-5.1-13.3 0-18.4l75.3-80.2c.7-.8.7-2 0-2.8L51.4 147.3c-1.3-1.3-3.4-.4-3.4 1.4V368c0 17.6 14.4 32 32 32h352c17.6 0 32-14.4 32-32V148.7c0-1.8-2.2-2.6-3.4-1.4z">
                                                </path>
                                                <path
                                                    d="M256 295.1c14.8 0 28.7-5.8 39.1-16.4L452 119c-5.5-4.4-12.3-7-19.8-7H79.9c-7.5 0-14.4 2.6-19.8 7L217 278.7c10.3 10.5 24.2 16.4 39 16.4z">
                                                </path>
                                            </svg>
                                            @php
                                                $email = !empty($shop) ? $shop->user_details->email : 'example@example';
                                            @endphp
                                            <a href="mailto:{{ $email }}">{{ $email }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="FooterUlBox midUl text-center">
                                    <h4>অর্ডার পেতে কল করুন এই নাম্বারে</h4>
                                    <h5>
                                        {{ $phone }}
                                    </h5>
                                    <div class="social_icons mt-3">
                                        <a href="#" class="text-center mx-2">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 16 16" height="1em" width="1em"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                                                </path>
                                            </svg>
                                        </a>
                                        <a href="#" class="text-center mx-2">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 16 16" height="1em" width="1em"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                                                </path>
                                            </svg>
                                        </a>
                                        <a href="#" class="text-center mx-2">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 16 16" height="1em" width="1em"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z">
                                                </path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="FooterUlBox text-end">
                                    <h4>Important Link</h4>
                                    <ul>
                                        <li>
                                            <img src="{{ asset('template/media/check/ak-checks.svg') }}"
                                                alt="alt" />
                                            <a href="#">
                                                Refund Policy </a>
                                        </li>
                                        <li>
                                            <img src="{{ asset('template/media/check/ak-checks.svg') }}"
                                                alt="alt" />
                                            <a href="#">Privacy Policy</a>
                                        </li>
                                        <li>
                                            <img src="{{ asset('template/media/check/ak-checks.svg') }}"
                                                alt="alt" />
                                            <a href="#">Terms and Conditions</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="HrTxt"><span>KEEP IN TOUCH</span></div>
                    <div class="Hr"> </div>
                    <div class="tinyFooter">
                        <p>&copy;{{ now()->year }} all rights reserved by <strong>{{ $title }}</strong></p>
                        <p>Developed with ❤️ by <a href="https://globalfastcoder.com/">Global Fast Coder</a></p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
