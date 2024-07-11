@php
    $title = !empty($shop) ? $shop->name : 'Landing Page 03';
@endphp
@extends('customer.template.templates.layouts.app')

@section('page_content')
    <div class="Landing__Sixteen">
        <section class="landing_sixteen_LandingSixteen__OB9a5">
            <div class="landing_sixteen_ContainerPad__MuESn container-fluid">
                <div class="landing_sixteen_bgImgBox__AOYF_"
                    style="background-image: url('{{ asset('template/media/banner/ak-banner_img1.png') }}')">
                    <div class="landing_sixteen_LogoBox__aDiOj">
                        <img src="{{ asset(!empty($shop) ? 'storage/' . $shop->logo : 'template/media/logo/ak-logo2.svg') }}"
                            alt="Img" width="150" />
                    </div>
                    <div class="container">
                        <div class="landing_sixteen_BannerRow__0Le0e row">
                            <div class="col-lg-6 col-md-12 col-12">
                                <div class="landing_sixteen_Bannertxtbox__A1LvT">
                                    <h1> ড্রাই ফ্রুটের অনন্য স্বাদ আর ন্যাচারাল হানির পুষ্টিকর গুন এখন এক জায়গায়
                                    </h1>
                                    <h4>হানি বি <span>এর সাথে !</span></h4><a class="landing_sixteen_Btnbg__d7yhv"
                                        href="#placeAnOrder">অর্ডার করুন</a>
                                    <h5>১২০০ টাকা</h5>
                                </div>
                            </div>
                            <div class="landing_sixteen_BannerImgDiv__thOVB col-lg-6 col-md-12 col-12">
                                <div class="landing_sixteen_Banner2Rel__UiKsd"><img
                                        class="landing_sixteen_BannerMAbsImg__CIiIu"
                                        src="{{ asset('template/media/other-images/ak-img20.svg') }}" alt="img" /><img
                                        class="landing_sixteen_BannerMAbsImg2__vOdeC"
                                        src="{{ asset('template/media/other-images/ak-img21.svg') }}" alt="img" />
                                </div><img class="landing_sixteen_BannerImg__NnIgW"
                                    src="{{ asset('template/media/other-images/ak-img1.png') }} " alt="img" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section>
                <div class="landing_sixteen_Banner2Rel__UiKsd"><img class="landing_sixteen_Banner2AbsImg__0jNyS"
                        src="{{ asset('template/media/other-images/ak-img2.png') }}" alt="img" /></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="landing_sixteen_section_gap__Xpxcl"></div>
                            <div class="landing_sixteen_Banner2txtbox__LzEdN">
                                <h2>কেনো হানি বি থেকে প্রাকৃতিক হানি নাট কম্বো নিবেন ?</h2>
                                <ul>
                                    <li><img src="{{ asset('template/media/other-images/ak-img7.svg') }}" alt="img" />
                                        <p> আমাদের এই মধু প্রাকৃতিক চাক থেকে সংগৃহীত। </p>
                                    </li>
                                    <li><img src="{{ asset('template/media/other-images/ak-img7.svg') }}" alt="img" />
                                        <p> আপনার আমাদের কাছে খাঁটি মধুর নিশ্চয়তা পাবেন।</p>
                                    </li>
                                    <li><img src="{{ asset('template/media/other-images/ak-img7.svg') }}" alt="img" />
                                        <p>মধু সংগ্রহ থেকে প্যাকেজিং পর্যন্ত কার্যাবলী নিজস্ব তত্ত্বাবধানে সম্পন্ন
                                            করা হয়।</p>
                                    </li>
                                    <li><img src="{{ asset('template/media/other-images/ak-img7.svg') }}" alt="img" />
                                        <p> বেস্ট ড্রাই ফ্রুট এর কম্বিনেশন দিয়ে তৈরি করা। </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="landing_sixteen_Banner2imgbox__KTLHn"><img
                                    class="landing_sixteen_Banner2imgRel__S7Utb"
                                    src="{{ asset('template/media/other-images/ak-img3.png') }}" alt="img" /><img
                                    class="landing_sixteen_Banner2imgAbs__3jd_G"
                                    src="{{ asset('template/media/other-images/ak-img19.png') }}" alt="img" />
                                <div class="landing_sixteen_Container_gap__3viio"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="landing_sixteen_section_gap__Xpxcl"></div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide landing_sixteen_SliderImg__4Jy1j" data-swiper-slide-index="3"><a
                                        href="#"><img src="{{ asset('template/media/slider/ak-slider5.png') }}"
                                            alt="img" /></a>
                                </div>
                                <div class="swiper-slide landing_sixteen_SliderImg__4Jy1j" data-swiper-slide-index="4"><a
                                        href="#"><img src="{{ asset('template/media/slider/ak-slider6.png') }}"
                                            alt="img" /></a>
                                </div>
                                <div class="swiper-slide landing_sixteen_SliderImg__4Jy1j" data-swiper-slide-index="5"><a
                                        href="#"><img src="{{ asset('template/media/slider/ak-slider7.png') }}"
                                            alt="img" /></a>
                                </div>
                                <div class="swiper-slide landing_sixteen_SliderImg__4Jy1j" data-swiper-slide-index="0"><a
                                        href="#"><img src="{{ asset('template/media/slider/ak-slider5.png') }}"
                                            alt="img" /></a>
                                </div>
                                <div class="swiper-slide landing_sixteen_SliderImg__4Jy1j" data-swiper-slide-index="1"><a
                                        href="#"><img src="{{ asset('template/media/slider/ak-slider6.png') }}"
                                            alt="img" /></a>
                                </div>
                                <div class="swiper-slide landing_sixteen_SliderImg__4Jy1j" data-swiper-slide-index="2"><a
                                        href="#"><img src="{{ asset('template/media/slider/ak-slider7.png') }}"
                                            alt="img" /></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="landing_sixteen_section_gap__Xpxcl"></div>
            <section>
                <div class="landing_sixteen_Banner2Rel__UiKsd"><img class="landing_sixteen_Banner3AbsImg__qsnxp"
                        src="{{ asset('template/media/other-images/ak-img8.png') }}" alt="img" /></div>
                <div class="container">
                    <div class="row">
                        <div class="landing_sixteen_Banner2imgboxCol__TyoJ8 col-lg-6 col-md-12 col-12">
                            <div class="landing_sixteen_Banner2imgbox__KTLHn"><img
                                    class="landing_sixteen_Banner2imgRel__S7Utb"
                                    src="{{ asset('template/media/other-images/ak-img9.png') }}" alt="img" /><img
                                    class="landing_sixteen_Banner2imgAbs__3jd_G landing_sixteen_Banner2imgAbs2__WIMni"
                                    src="{{ asset('template/media/other-images/ak-img10.png') }}" alt="img" />
                                <div class="landing_sixteen_Container_gap__3viio"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="landing_sixteen_Banner2txtbox__LzEdN landing_sixteen_Banner2txtbox2__tLyKo">
                                <h2>হানি নাট (মধু ও বাদাম) এর সব গুনাগুন ও কার্যকারিতা </h2>
                                <ul>
                                    <li><img src="{{ asset('template/media/other-images/ak-img7.svg') }}"
                                            alt="img" />
                                        <p> শরীরে রো’গ প্রতিরো’ধ ক্ষম’তা বৃদ্ধিতে অতুলনীয়। </p>
                                    </li>
                                    <li><img src="{{ asset('template/media/other-images/ak-img7.svg') }}"
                                            alt="img" />
                                        <p>যারা শরী’র ফি’ট রাখতে চান তাদের জন্য খুবই উ’পকারী।</p>
                                    </li>
                                    <li><img src="{{ asset('template/media/other-images/ak-img7.svg') }}"
                                            alt="img" />
                                        <p>চেহারায় লাবণ্য ধরে রাখতে খুবই কার্যকর।</p>
                                    </li>
                                    <li><img src="{{ asset('template/media/other-images/ak-img7.svg') }}"
                                            alt="img" />
                                        <p> র’ক্তে কো’লেস্টরেল কমানোর পাশাপাশি ক্যা’ন্সার সৃষ্টি হতে বাধা দেয়। </p>
                                    </li>
                                    <li><img src="{{ asset('template/media/other-images/ak-img7.svg') }}"
                                            alt="img" />
                                        <p> কোলেস্টরেল, ব্লাড সুগার , মাইগ্রেন এবং উচ্চ রক্তচাপ নিয়ন্ত্রণ করে। </p>
                                    </li>
                                    <li><img src="{{ asset('template/media/other-images/ak-img7.svg') }}"
                                            alt="img" />
                                        <p> শ’রীরের দু’র্বলতা দূর করে শা’রীরিক শক্তি বৃদ্ধি করে। </p>
                                    </li>
                                    <li><img src="{{ asset('template/media/other-images/ak-img7.svg') }}"
                                            alt="img" />
                                        <p> স্মৃতিশক্তি বৃদ্ধি করে, তীক্ষ্ণ মেধা সম্পন্ন হতে সাহায্য করে। </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="landing_sixteen_Container_gap__3viio landing_sixteen_section_gapNone__1aIbi">
                        </div>
                    </div>
                </div>
                <div class="landing_sixteen_Banner2Rel__UiKsd"><img class="landing_sixteen_Banner3AbsImg2__MWR3T"
                        src="{{ asset('template/media/other-images/ak-img11.png') }}" alt="img" /></div>
            </section>
            <div class="landing_sixteen_section_gap__Xpxcl landing_sixteen_section_gapNone__1aIbi"></div>
            <div class="container-fluid">
                <div class="landing_sixteen_Banner4txth2__pxYJE"><img
                        src="{{ asset('template/media/banner/ak-banner6.png') }}" alt="" />
                    <div class="landing_sixteen_Banner4txtbox__wP6Es landing_sixteen_Bannertxtbox__A1LvT">
                        <h5>১২০০ টাকা</h5>
                        <p>সারা দেশে ফ্রি হোম ডেলিভারি</p><a class="landing_sixteen_Btnbg__d7yhv"
                            href="#placeAnOrder">অর্ডার করুন</a>
                    </div>
                </div>
            </div>
            <div class="landing_sixteen_section_gap__Xpxcl"></div>
            <div class="container">
                <div class="row">
                    <h2 class="landing_sixteen_slider2h2__54MsQ">কি কি আছে আমাদের <img
                            src="{{ asset('template/media/logo/ak-logo2.svg') }}" alt="Img" />এর হানি নাট
                        কম্বোতে ?</h2>
                    <div class="col-lg-12">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide landing_sixteen_SliderImg__4Jy1j" data-swiper-slide-index="3"><a
                                        href="#"><img src="{{ asset('template/media/slider/ak-slider11.png') }}"
                                            alt="img" /></a></div>
                                <div class="swiper-slide landing_sixteen_SliderImg__4Jy1j" data-swiper-slide-index="4"><a
                                        href="#"><img src="{{ asset('template/media/slider/ak-slider8.png') }}"
                                            alt="img" /></a></div>
                                <div class="swiper-slide landing_sixteen_SliderImg__4Jy1j" data-swiper-slide-index="5"><a
                                        href="#"><img src="{{ asset('template/media/slider/ak-slider9.png') }}"
                                            alt="img" /></a></div>
                                <div class="swiper-slide landing_sixteen_SliderImg__4Jy1j" data-swiper-slide-index="0"><a
                                        href="#"><img src="{{ asset('template/media/slider/ak-slider8.png') }}"
                                            alt="img" /></a></div>
                                <div class="swiper-slide landing_sixteen_SliderImg__4Jy1j" data-swiper-slide-index="1"><a
                                        href="#"><img src="{{ asset('template/media/slider/ak-slider9.png') }}"
                                            alt="img" /></a></div>
                                <div class="swiper-slide landing_sixteen_SliderImg__4Jy1j" data-swiper-slide-index="2"><a
                                        href="#"><img src="{{ asset('template/media//slider/ak-slider10.png') }}"
                                            alt="img" /></a></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="landing_sixteen_section_gap__Xpxcl"></div>
            <section>
                <div class="container">
                    <div class="landing_sixteen_BannerRow__0Le0e row">
                        <div class="col-lg-6 col-md-12 col-12"><img class="landing_sixteen_LoveImg__8asPg"
                                src="{{ asset('template/media/other-images/ak-img17.png') }}" alt="img" />
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="landing_sixteen_LoveTextBox__cC7Mx">
                                <h2> সুস্থ সবল জীবনযাপন করতে আর শারীরিক শক্তি বৃদ্ধি করতে অর্ডার করুন আজই </h2>
                                <h5>১২০০ টাকা</h5><a class="landing_sixteen_Btnbg__d7yhv" href="#placeAnOrder">অর্ডার
                                    করুন</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="landing_sixteen_section_gap__Xpxcl"></section>
            {{-- place order --}}
            @include('customer.template.templates.layouts.place-order')
            <div class="landing_sixteen_section_gap__Xpxcl"></div>
            <section>
                <div class="landing_sixteen_ContainerPad__MuESn container-fluid">
                    <div class="landing_sixteen_FooterBg__M0Kqa"
                        style="background-image: url('{{ asset('template/media/background/ak-footer_img2.png') }}')">
                        <div class="container">
                            <div class="row">
                                <div class="landing_sixteen_LogoBox__aDiOj">
                                    <img src="{{ asset(!empty($shop) ? 'storage/' . $shop->logo : 'template/media/logo/ak-logo2.svg') }}"
                                        alt="Img" width="150" />
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="landing_sixteen_FooterBgTxtBox__uh2IK">
                                        <h4>Contact Us</h4>
                                        <ul>
                                            <li>
                                                @php
                                                    $phone = !empty($shop) ? $shop->user_details->phone : '01234-567890';
                                                @endphp
                                                <a href="tel:{{ $phone }}">
                                                    <svg stroke="currentColor" fill="none" stroke-width="2"
                                                        viewBox="0 0 24 24" stroke-linecap="round"
                                                        stroke-linejoin="round" height="1em" width="1em"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                                        </path>
                                                    </svg>
                                                    {{ $phone }}
                                                </a>
                                            </li>
                                            <li>
                                                @php
                                                    $email = !empty($shop) ? $shop->user_details->email : 'example@example';
                                                @endphp
                                                <a href="mailto:{{ $email }}">
                                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                        viewBox="0 0 512 512" height="1em" width="1em"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M460.6 147.3L353 256.9c-.8.8-.8 2 0 2.8l75.3 80.2c5.1 5.1 5.1 13.3 0 18.4-2.5 2.5-5.9 3.8-9.2 3.8s-6.7-1.3-9.2-3.8l-75-79.9c-.8-.8-2.1-.8-2.9 0L313.7 297c-15.3 15.5-35.6 24.1-57.4 24.2-22.1.1-43.1-9.2-58.6-24.9l-17.6-17.9c-.8-.8-2.1-.8-2.9 0l-75 79.9c-2.5 2.5-5.9 3.8-9.2 3.8s-6.7-1.3-9.2-3.8c-5.1-5.1-5.1-13.3 0-18.4l75.3-80.2c.7-.8.7-2 0-2.8L51.4 147.3c-1.3-1.3-3.4-.4-3.4 1.4V368c0 17.6 14.4 32 32 32h352c17.6 0 32-14.4 32-32V148.7c0-1.8-2.2-2.6-3.4-1.4z">
                                                        </path>
                                                        <path
                                                            d="M256 295.1c14.8 0 28.7-5.8 39.1-16.4L452 119c-5.5-4.4-12.3-7-19.8-7H79.9c-7.5 0-14.4 2.6-19.8 7L217 278.7c10.3 10.5 24.2 16.4 39 16.4z">
                                                        </path>
                                                    </svg>
                                                    {{ $email }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="landing_sixteen_FooterBgTxtBox__uh2IK">
                                        <h4>Important Link</h4>
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                        viewBox="0 0 16 16" height="1em" width="1em"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.238 8l-2.31 4H5.31L3 8l2.31-4h4.618l2.31 4z">
                                                        </path>
                                                    </svg>
                                                    Refund Policy</a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                        viewBox="0 0 16 16" height="1em" width="1em"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.238 8l-2.31 4H5.31L3 8l2.31-4h4.618l2.31 4z">
                                                        </path>
                                                    </svg>
                                                    Privacy Policy</a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                        viewBox="0 0 16 16" height="1em" width="1em"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M12.238 8l-2.31 4H5.31L3 8l2.31-4h4.618l2.31 4z">
                                                        </path>
                                                    </svg>
                                                    Terms and Conditions</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="landing_sixteen_FooterBgTxtBox__uh2IK">
                                        <h4>অর্ডার পেতে কল করুন এই নাম্বারে</h4>
                                        <h5>{{ $phone }}</h5>
                                    </div>
                                    <div class="social_icons">
                                        <a href="#" class="mx-2">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 16 16" height="1em" width="1em"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                                                </path>
                                            </svg>
                                        </a>
                                        <a href="#" class="mx-2">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                viewBox="0 0 16 16" height="1em" width="1em"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                                                </path>
                                            </svg>
                                        </a>
                                        <a href="#" class="mx-2">
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
                                <div class="col-lg-2 col-md-6 col-sm-12">
                                    <div class="landing_sixteen_FooterBgTxtBox__uh2IK"><img
                                            src="{{ asset('template/media/other-images/ak-img19.png') }}"
                                            alt="" /></div>
                                </div>
                                <div class="landing_sixteen_tinyFooter__bABUC">
                                    <p>&copy;{{ now()->year }} all rights reserved by
                                        <strong>{{ $title }}</strong>
                                    </p>
                                    <p>Developed with ❤️ by <a href="https://globalfastcoder.com/">Global Fast Coder</a>
                                    </p>
                                </div>
                                <div class="landing_sixteen_Banner2Rel__UiKsd"><img
                                        class="landing_sixteen_BannerMAbsImgAll__4TaLh"
                                        src="{{ asset('template/media/other-images/ak-img20.svg') }}"
                                        alt="img" /><img class="landing_sixteen_BannerMAbsImgAll2__Mydkh"
                                        src="{{ asset('template/media/other-images/ak-img21.svg') }}" alt="img" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </div>
@endsection
