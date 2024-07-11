@php
    $title = !empty($shop) ? $shop->name : 'Landing Page 06';
@endphp
@extends('customer.template.templates.layouts.app')

@section('page_content')
    <div class="Landing__Ten">
        <div class="landing_ten_LandingTen__MJlRa">
            <section class="landing_ten_banner__GvniL">
                <div class="container">
                    <div class="landing_ten_Rowrvs__K6tCG row">
                        <div class="landing_ten_ClmPad__3sxEU col-md-6 col-sm-12 col-12">
                            <div class="landing_ten_topImg__ybZSc"><img class="landing_ten_topImg1__s58DM"
                                    src="{{ asset('template/media/background/ak-b1.svg') }}" alt="img" /></div>
                            <div class="landing_ten_TopTxtdev__8zwYZ">
                                <div class="landing_ten_logo__ju8RE">
                                    <section class="Menubar">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="MenubarContent">
                                                        <div class="LogoLeft">
                                                            <img src="{{ asset(!empty($shop) ? 'storage/' . $shop->logo : 'template/media/logo/ak-logo1.svg') }}"
                                                                width="150" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <h1>জান্নাতে চাবি কুরআন মজিদ পড়ুন সহজ সরল পবিত্র জীবন গড়ুন</h1><span
                                    class="landing_ten_span1__9WePv">বাংলা অনুবাদ ও সংক্ষিপ্ত তফসীর</span>
                                <h5>পূর্বের হাদিয়া ১,৭৯০/- টাকা</h5>
                                <h4>অফারে হাদিয়া <span class="landing_ten_span2__MKGxl">১,৪৮০ টাকা</span></h4>
                            </div>
                        </div>
                        <div class="landing_ten_ClmPad__3sxEU col-md-6 col-sm-12 col-12">
                            <div class="landing_ten_logo2__p_Y4n">
                                <section class="Menubar">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="MenubarContent">
                                                    <div class="LogoLeft"><img
                                                            srcSet="{{ asset('template/media/logo/ak-logo1.svg') }}"
                                                            src="{{ asset('template/media/logo/ak-logo1.svg') }}"
                                                            width="252" height="93" decoding="async" data-nimg="1"
                                                            loading="lazy" style="color:transparent" /></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div>
                                <div class="landing_ten_mainImglogo__2HJqK"><img
                                        src="{{ asset('template/media/background/ak-b.png') }}" alt="img" />
                                    <div class="landing_ten_Imgrelativ__3PG5y">
                                        <div class="landing_ten_ImgAbsolote__4cNjZ"><span
                                                class="landing_ten_persentxt__urpUf"> 40% <br /> ছাড় </span><img
                                                src="{{ asset('template/media/background/ak-b4.svg') }}" alt="img" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="landing_ten_topImg3__SYPP2"><img class="landing_ten_topImg4__uSZqG"
                                    src="{{ asset('template/media/background/ak-b3.svg') }}" alt="img" /></div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="landing_ten_secBanner2__skk9l container-fluid">
                    <div class="landing_ten_banner2__RocFa">
                        <ul>
                            <li> <a class="landing_ten_bg__KtjCw" href="#placeAnOrder"> <svg
                                        stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024"
                                        height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M922.9 701.9H327.4l29.9-60.9 496.8-.9c16.8 0 31.2-12 34.2-28.6l68.8-385.1c1.8-10.1-.9-20.5-7.5-28.4a34.99 34.99 0 0 0-26.6-12.5l-632-2.1-5.4-25.4c-3.4-16.2-18-28-34.6-28H96.5a35.3 35.3 0 1 0 0 70.6h125.9L246 312.8l58.1 281.3-74.8 122.1a34.96 34.96 0 0 0-3 36.8c6 11.9 18.1 19.4 31.5 19.4h62.8a102.43 102.43 0 0 0-20.6 61.7c0 56.6 46 102.6 102.6 102.6s102.6-46 102.6-102.6c0-22.3-7.4-44-20.6-61.7h161.1a102.43 102.43 0 0 0-20.6 61.7c0 56.6 46 102.6 102.6 102.6s102.6-46 102.6-102.6c0-22.3-7.4-44-20.6-61.7H923c19.4 0 35.3-15.8 35.3-35.3a35.42 35.42 0 0 0-35.4-35.2zM305.7 253l575.8 1.9-56.4 315.8-452.3.8L305.7 253zm96.9 612.7c-17.4 0-31.6-14.2-31.6-31.6 0-17.4 14.2-31.6 31.6-31.6s31.6 14.2 31.6 31.6a31.6 31.6 0 0 1-31.6 31.6zm325.1 0c-17.4 0-31.6-14.2-31.6-31.6 0-17.4 14.2-31.6 31.6-31.6s31.6 14.2 31.6 31.6a31.6 31.6 0 0 1-31.6 31.6z">
                                        </path>
                                    </svg>Order Now</a></li>
                            <li>হটলাইন: 01600-324567</li>
                            <li> <span class="landing_ten_myWhatsapp__I4iLx">Whats App:</span> 01600-324567</li>
                        </ul>
                    </div>
                </div>
            </section>
            <section>
                <div class="landing_ten_PaddCon__ZzGzE container-fluid">
                    <div class="landing_ten_banner3bg__dbb_V">
                        <h2>আল-কুরআনুল-কারীম কিতাব কেন পড়বেন? কেন প্রত্যেক মুসলমান জানা দরকার বা পরিবারে থাকা উচিত?
                        </h2>
                        <div class="landing_ten_banAbsoluteMain1__TZi9S">
                            <div class="landing_ten_banAbsoluteMain__idGWu container-fluid">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6 col-12">
                                            <div>
                                                <div class="landing_ten_cardDiv__pdu6K"><img
                                                        src="{{ asset('template/media/background/ak-b5.svg') }}"
                                                        alt="img" />
                                                    <p> ব্যস্ততার কারণে যারা কোরআন শিখতে পারছেন না তাদের কথা মাথায়
                                                        রেখে খুব সহজ পদ্ধতিতে কুরআনের কায়দা কানুন শিখতে পারবেন ।
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-12">
                                            <div>
                                                <div class="landing_ten_cardDiv__pdu6K"><img
                                                        src="{{ asset('template/media/background/ak-b5.svg') }}"
                                                        alt="img" />
                                                    <p> যারা আল্লাহর সান্নিধ্য পেতে চান দুনিয়া ও আখেরাতে সহী ভাবে
                                                        নামাজ পড়তে চান এই কিতাব তাদের জন্য। </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-12">
                                            <div>
                                                <div class="landing_ten_cardDiv__pdu6K"><img
                                                        src="{{ asset('template/media/background/ak-b5.svg') }}"
                                                        alt="img" />
                                                    <p> সর্বস্তরের মানুয়ের কথা বিবেচনায় রেখে আনুবাদটি করা হয়েছে।
                                                        ভাষাকে এতটুকু সহজ-সরল ও প্রাঞ্জল রাখার চেষ্টা করা হয়েছে ।
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-12">
                                            <div>
                                                <div class="landing_ten_cardDiv__pdu6K"><img
                                                        src="{{ asset('template/media/background/ak-b5.svg') }}"
                                                        alt="img" />
                                                    <p> মা-বাবা, আত্বীয় স্বজন, সহকর্মী শ্রেষ্ট উপহার হিসেবে আল কুরআন
                                                        দিতে পারেন। আপনার জন্য সদকায়ে জারিয়ার উছিলা হবে। </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-12">
                                            <div>
                                                <div class="landing_ten_cardDiv__pdu6K"><img
                                                        src="{{ asset('template/media/background/ak-b5.svg') }}"
                                                        alt="img" />
                                                    <p> মানব জীবনের বিভিন্ন বিষয় নিয়ে কুরআনে আল্লাহপাক কি বলেছেন
                                                        সেই বিষয়ের নিয়ে সহজেই সূচি পত্র থেকে খুঁজে পাবেন। </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6 col-12">
                                            <div>
                                                <div class="landing_ten_cardDiv__pdu6K"><img
                                                        src="{{ asset('template/media/background/ak-b5.svg') }}"
                                                        alt="img" />
                                                    <p> ব্যস্ততার কারণে যারা কোরআন শিখতে পারছেন না তাদের কথা মাথায়
                                                        রেখে খুব সহজ পদ্ধতিতে কুরআনের কায়দা কানুন শিখতে পারবেন ।
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="landing_ten_FloatSolve__XTR71"></div>
                    </div>
                </div>
            </section>
            <section class="landing_ten_section3__NSC5D">
                <div class="container">
                    <div class="landing_ten_sec3txtDiv__T5gVA">
                        <div class="landing_ten_linkdiv__p4ahI"><a class="landing_ten_bg__KtjCw"
                                href="#placeAnOrder"> <svg stroke="currentColor" fill="currentColor"
                                    stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M922.9 701.9H327.4l29.9-60.9 496.8-.9c16.8 0 31.2-12 34.2-28.6l68.8-385.1c1.8-10.1-.9-20.5-7.5-28.4a34.99 34.99 0 0 0-26.6-12.5l-632-2.1-5.4-25.4c-3.4-16.2-18-28-34.6-28H96.5a35.3 35.3 0 1 0 0 70.6h125.9L246 312.8l58.1 281.3-74.8 122.1a34.96 34.96 0 0 0-3 36.8c6 11.9 18.1 19.4 31.5 19.4h62.8a102.43 102.43 0 0 0-20.6 61.7c0 56.6 46 102.6 102.6 102.6s102.6-46 102.6-102.6c0-22.3-7.4-44-20.6-61.7h161.1a102.43 102.43 0 0 0-20.6 61.7c0 56.6 46 102.6 102.6 102.6s102.6-46 102.6-102.6c0-22.3-7.4-44-20.6-61.7H923c19.4 0 35.3-15.8 35.3-35.3a35.42 35.42 0 0 0-35.4-35.2zM305.7 253l575.8 1.9-56.4 315.8-452.3.8L305.7 253zm96.9 612.7c-17.4 0-31.6-14.2-31.6-31.6 0-17.4 14.2-31.6 31.6-31.6s31.6 14.2 31.6 31.6a31.6 31.6 0 0 1-31.6 31.6zm325.1 0c-17.4 0-31.6-14.2-31.6-31.6 0-17.4 14.2-31.6 31.6-31.6s31.6 14.2 31.6 31.6a31.6 31.6 0 0 1-31.6 31.6z">
                                    </path>
                                </svg>Order Now</a></div>
                        <h2>দেশজুড়ে সারা বাংলাদেশে ফ্রি হোম ডেলিভারি এবং কুরিয়ার মাধ্যমেও বই পাঠানো হয়</h2>
                    </div>
                </div>
            </section>
            <section class="landing_ten_section4__bDgn8">
                <div class="landing_ten_Consection4__m4Vhn container-fluid">
                    <div class="row">
                        <div class="col-sm-6 col-12">
                            <div class="landing_ten_Sec4Img__4E5uk"><img
                                    src="{{ asset('template/media/background/ak-b6.png') }}" alt="img" />
                            </div>
                        </div>
                        <div class="col-sm-6 col-12">
                            <div class="landing_ten_B4reltive__ti7W4">
                                <div class="landing_ten_B4Absolutimg__B4Li0"><img
                                        src="{{ asset('template/media/background/ak-b10.svg') }}" alt="img" /></div>
                            </div>
                            <div class="landing_ten_Sec4ul__I8hgL">
                                <ul>
                                    <li><img src="{{ asset('template/media/background/ak-b7.svg') }}" alt="img" />
                                        <span class="landing_ten_liTxt___qyOG">প্রকাশকঃ সৌদি কিং ফাহাদ অরজিনাল </span>
                                    </li>
                                    <li><img src="{{ asset('template/media/background/ak-b7.svg') }}" alt="img" />
                                        <span class="landing_ten_liTxt___qyOG">বাংলা অনুবাদ</span>
                                    </li>
                                    <li><img src="{{ asset('template/media/background/ak-b7.svg') }}" alt="img" />
                                        <span class="landing_ten_liTxt___qyOG">ভাষাঃ আরবী ও বাংলা </span>
                                    </li>
                                    <li><img src="{{ asset('template/media/background/ak-b7.svg') }}" alt="img" />
                                        <span class="landing_ten_liTxt___qyOG">সাইজঃ লার্জ</span>
                                    </li>
                                    <li><img src="{{ asset('template/media/background/ak-b7.svg') }}" alt="img" />
                                        <span class="landing_ten_liTxt___qyOG">পেইজ সংখ্যাঃ ১৪৯০ পাতা</span>
                                    </li>
                                    <li><img src="{{ asset('template/media/background/ak-b7.svg') }}" alt="img" />
                                        <span class="landing_ten_liTxt___qyOG">পারা ৩০</span>
                                    </li>
                                    <li><img src="{{ asset('template/media/background/ak-b7.svg') }}" alt="img" />
                                        <span class="landing_ten_liTxt___qyOG">ডাইমেনশন ৯.৫*৬.৫ ইঞ্চি</span>
                                    </li>
                                    <li><img src="{{ asset('template/media/background/ak-b7.svg') }}" alt="img" />
                                        <span class="landing_ten_liTxt___qyOG">১০০% নির্ভুল ছাপা </span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="landing_ten_ban5Txtbox__1G0at">
                        <h2>কেন এই আল-কুরআনুল-কারীম কিতাব শিক্ষা করবেন তার সম্পর্ক ভিডিও বিস্তারিত আলোচনা করা হয়েছে
                        </h2>
                    </div>
                    <div class="landing_ten_banner5Img__C1f_U"><img
                            src="{{ asset('template/media/background/ak-b8.png') }}" alt="" /></div>
                    <div class="landing_ten_banner5Button__n6nSE">
                        <div>
                            <h2>নিচের বাটনে ক্লিক করে এখুনি অর্ডার করুন</h2><a class="landing_ten_bg__KtjCw"
                                href="#placeAnOrder"> <svg stroke="currentColor" fill="currentColor"
                                    stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M922.9 701.9H327.4l29.9-60.9 496.8-.9c16.8 0 31.2-12 34.2-28.6l68.8-385.1c1.8-10.1-.9-20.5-7.5-28.4a34.99 34.99 0 0 0-26.6-12.5l-632-2.1-5.4-25.4c-3.4-16.2-18-28-34.6-28H96.5a35.3 35.3 0 1 0 0 70.6h125.9L246 312.8l58.1 281.3-74.8 122.1a34.96 34.96 0 0 0-3 36.8c6 11.9 18.1 19.4 31.5 19.4h62.8a102.43 102.43 0 0 0-20.6 61.7c0 56.6 46 102.6 102.6 102.6s102.6-46 102.6-102.6c0-22.3-7.4-44-20.6-61.7h161.1a102.43 102.43 0 0 0-20.6 61.7c0 56.6 46 102.6 102.6 102.6s102.6-46 102.6-102.6c0-22.3-7.4-44-20.6-61.7H923c19.4 0 35.3-15.8 35.3-35.3a35.42 35.42 0 0 0-35.4-35.2zM305.7 253l575.8 1.9-56.4 315.8-452.3.8L305.7 253zm96.9 612.7c-17.4 0-31.6-14.2-31.6-31.6 0-17.4 14.2-31.6 31.6-31.6s31.6 14.2 31.6 31.6a31.6 31.6 0 0 1-31.6 31.6zm325.1 0c-17.4 0-31.6-14.2-31.6-31.6 0-17.4 14.2-31.6 31.6-31.6s31.6 14.2 31.6 31.6a31.6 31.6 0 0 1-31.6 31.6z">
                                    </path>
                                </svg>Order Now</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="landing_ten_section_gaps__t7MbF"></section>
            {{-- place order --}}
            @include('customer.template.templates.layouts.place-order')
            <section class="landing_ten_footerSec__KajhX">
                <div class="landing_ten_Footpad__bLDtq container-fluid">
                    <div class="landing_ten_footerRel__GCNjo">
                        <div class="landing_ten_lastImg__8OyMC"><img
                                src="{{ asset('template/media/background/ak-b9.png') }}" alt="img" />
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 col-12">
                            <div class="landing_ten_footerh4__i207E">
                                <h4>যোগাযোগ</h4>
                                <div class="landing_ten_hr__7KHih"></div>
                                <ul>
                                    <li>
                                        @php
                                                $phone = !empty($shop) ? $shop->user_details->phone : '01234-567890';
                                            @endphp
                                        <a href="tel:{{ $phone }}">
                                            <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                            viewBox="0 0 512 512" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill="none" stroke-miterlimit="10" stroke-width="32"
                                                d="M451 374c-15.88-16-54.34-39.35-73-48.76-24.3-12.24-26.3-13.24-45.4.95-12.74 9.47-21.21 17.93-36.12 14.75s-47.31-21.11-75.68-49.39-47.34-61.62-50.53-76.48 5.41-23.23 14.79-36c13.22-18 12.22-21 .92-45.3-8.81-18.9-32.84-57-48.9-72.8C119.9 44 119.9 47 108.83 51.6A160.15 160.15 0 0083 65.37C67 76 58.12 84.83 51.91 98.1s-9 44.38 23.07 102.64 54.57 88.05 101.14 134.49S258.5 406.64 310.85 436c64.76 36.27 89.6 29.2 102.91 23s22.18-15 32.83-31a159.09 159.09 0 0013.8-25.8C465 391.17 468 391.17 451 374z">
                                            </path>
                                        </svg>
                                        </a>
                                        {{ $phone }}
                                    </li>
                                    <li>
                                        @php
                                                $email = !empty($shop) ? $shop->user_details->email : 'example@example';
                                            @endphp
                                        <a href="mailto:{{ $email }}">
                                            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24"
                                            stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                            </path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg>
                                        {{ $email }}
                                        </a>
                                    </li>
                                </ul>
                                <div class="landing_ten_footericon3__Xa3U1"><a href="#"> <svg
                                            stroke="currentColor" fill="currentColor" stroke-width="0"
                                            viewBox="0 0 1024 1024" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M512 306.9c-113.5 0-205.1 91.6-205.1 205.1S398.5 717.1 512 717.1 717.1 625.5 717.1 512 625.5 306.9 512 306.9zm0 338.4c-73.4 0-133.3-59.9-133.3-133.3S438.6 378.7 512 378.7 645.3 438.6 645.3 512 585.4 645.3 512 645.3zm213.5-394.6c-26.5 0-47.9 21.4-47.9 47.9s21.4 47.9 47.9 47.9 47.9-21.3 47.9-47.9a47.84 47.84 0 0 0-47.9-47.9zM911.8 512c0-55.2.5-109.9-2.6-165-3.1-64-17.7-120.8-64.5-167.6-46.9-46.9-103.6-61.4-167.6-64.5-55.2-3.1-109.9-2.6-165-2.6-55.2 0-109.9-.5-165 2.6-64 3.1-120.8 17.7-167.6 64.5C132.6 226.3 118.1 283 115 347c-3.1 55.2-2.6 109.9-2.6 165s-.5 109.9 2.6 165c3.1 64 17.7 120.8 64.5 167.6 46.9 46.9 103.6 61.4 167.6 64.5 55.2 3.1 109.9 2.6 165 2.6 55.2 0 109.9.5 165-2.6 64-3.1 120.8-17.7 167.6-64.5 46.9-46.9 61.4-103.6 64.5-167.6 3.2-55.1 2.6-109.8 2.6-165zm-88 235.8c-7.3 18.2-16.1 31.8-30.2 45.8-14.1 14.1-27.6 22.9-45.8 30.2C695.2 844.7 570.3 840 512 840c-58.3 0-183.3 4.7-235.9-16.1-18.2-7.3-31.8-16.1-45.8-30.2-14.1-14.1-22.9-27.6-30.2-45.8C179.3 695.2 184 570.3 184 512c0-58.3-4.7-183.3 16.1-235.9 7.3-18.2 16.1-31.8 30.2-45.8s27.6-22.9 45.8-30.2C328.7 179.3 453.7 184 512 184s183.3-4.7 235.9 16.1c18.2 7.3 31.8 16.1 45.8 30.2 14.1 14.1 22.9 27.6 30.2 45.8C844.7 328.7 840 453.7 840 512c0 58.3 4.7 183.2-16.2 235.8z">
                                            </path>
                                        </svg></a> <a href="#"> <svg stroke="currentColor" fill="none"
                                            stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                                            stroke-linejoin="round" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                            </path>
                                        </svg></a> <a href="#"><svg stroke="currentColor" fill="none"
                                            stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                                            stroke-linejoin="round" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                            </path>
                                        </svg> </a></div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-12">
                            <div class="landing_ten_footerh4__i207E">
                                <h4>প্রয়োজনীয় লিংক</h4>
                                <div class="landing_ten_hr__7KHih"></div>
                                <ul>
                                    <li> <span><a href="#"> প্রাইভেসী পলিসি </a></span></li>
                                    <li> <span><a href="#"> শর্তাবলী</a></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="landing_ten_tinyFooter__ImCPv">
                        <p>&copy;{{ now()->year }} all rights reserved by <strong>{{ $title }}</strong></p>
                        <p>Developed with ❤️ by <a href="https://globalfastcoder.com/">Global Fast Coder</a></p>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
