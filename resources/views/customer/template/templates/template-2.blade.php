@php
    $title = !empty($shop) ? $shop->name : 'Landing Page 02';
@endphp
@extends('customer.template.templates.layouts.app')

@section('page_content')
    <section class="Landing__Fifteen">
        <section class="landing_fifteen_LandingFifteen__VlZlD">
            <section>
                <div class="landing_fifteen_Conpad__ZdT14 container-fluid"><img class="landing_fifteen_img1__HBntM"
                        src="{{ asset('template/media/other-images/ak-img41.png') }}" alt="img" />
                    <div class="landing_fifteen_bgimg__E78kd"
                        style="background-image: url('{{ asset('template/media/background/ak-bg4.png') }}')">
                        <div class="container">
                            <div class="landing_fifteen_ColReverce__BZNpi row">
                                <div class="landing_fifteen_ColCenterMob__N9EnT col-lg-6 col-md-12">
                                    <img class="landing_fifteen_MobLogo__kQrIz"
                                        src="{{ asset(!empty($shop) ? 'storage/' . $shop->logo : 'template/media/logo/ak-logo4.svg') }}"
                                        alt="img" width="150" />
                                    <img class="landing_fifteen_imgMo2__d4iD9"
                                        src="{{ asset('template/media/other-images/ak-img41.png') }}" alt="img" />
                                    <h1>মধু বলতেই সুন্দরবনের মিশ্র ফুলের প্রাকৃতিক খাঁটি মধু অন্যতম.</h1><a
                                        class="landing_fifteen_bg__hRDsD" href="#placeAnOrder"><svg stroke="currentColor"
                                            fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em"
                                            width="1em" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M922.9 701.9H327.4l29.9-60.9 496.8-.9c16.8 0 31.2-12 34.2-28.6l68.8-385.1c1.8-10.1-.9-20.5-7.5-28.4a34.99 34.99 0 0 0-26.6-12.5l-632-2.1-5.4-25.4c-3.4-16.2-18-28-34.6-28H96.5a35.3 35.3 0 1 0 0 70.6h125.9L246 312.8l58.1 281.3-74.8 122.1a34.96 34.96 0 0 0-3 36.8c6 11.9 18.1 19.4 31.5 19.4h62.8a102.43 102.43 0 0 0-20.6 61.7c0 56.6 46 102.6 102.6 102.6s102.6-46 102.6-102.6c0-22.3-7.4-44-20.6-61.7h161.1a102.43 102.43 0 0 0-20.6 61.7c0 56.6 46 102.6 102.6 102.6s102.6-46 102.6-102.6c0-22.3-7.4-44-20.6-61.7H923c19.4 0 35.3-15.8 35.3-35.3a35.42 35.42 0 0 0-35.4-35.2zM305.7 253l575.8 1.9-56.4 315.8-452.3.8L305.7 253zm96.9 612.7c-17.4 0-31.6-14.2-31.6-31.6 0-17.4 14.2-31.6 31.6-31.6s31.6 14.2 31.6 31.6a31.6 31.6 0 0 1-31.6 31.6zm325.1 0c-17.4 0-31.6-14.2-31.6-31.6 0-17.4 14.2-31.6 31.6-31.6s31.6 14.2 31.6 31.6a31.6 31.6 0 0 1-31.6 31.6z">
                                            </path>
                                        </svg> অর্ডার করুন </a><a class="landing_fifteen_bg2__qKKij" href="#placeAnOrder">
                                        ১৬৫০ টাকা </a>
                                    <div class="landing_fifteen_uldiv__xFpbm">
                                        <div><img src="{{ asset('template/media/logo/ak-viver.svg') }}" alt="img" />
                                        </div>
                                        <div>
                                            <h5>ফোনে অর্ডার করতে</h5>
                                            <h6>+8801799733234</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="landing_fifteen_img2div__12tJ_"><img class="landing_fifteen_img2__eLERU"
                                            src="{{ asset('template/media/other-images/ak-img42.svg') }}" alt="img" />
                                        <div class="landing_fifteen_img2Abs__rzgFZ">
                                            <div class="landing_fifteen_img2AbsTxt__jcf1T">
                                                <div><span class="landing_fifteen_img2Span1__6a1fB">50</span></div>
                                                <div>
                                                    <h5 class="landing_fifteen_img2Span2__z4FLA">%</h5>
                                                    <h5 class="landing_fifteen_img2Span3__Vm58k">OFF</h5>
                                                </div>
                                            </div>
                                            <h6 class="landing_fifteen_img2Span4__OhI_v">500-গ্রাম</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="landing_fifteen_section_gap__McfqK"></section>
            <section class="landing_fifteen_StoreRel__i7t8N"><img class="landing_fifteen_StoreAbs1__23Rh3"
                    src="{{ asset('template/media/other-images/ak-img43.svg') }}" alt="img" /><img
                    class="landing_fifteen_StoreAbs2__q4Eqj" src="{{ asset('template/media/other-images/ak-img44.svg') }}"
                    alt="img" />
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-12"><img class="landing_fifteen_Storeimg1__VY_nX"
                                src="{{ asset('template/media/other-images/ak-img45.png') }}" alt="img" />
                            <div class="landing_fifteen_StoreRel__i7t8N"><img class="landing_fifteen_Storeimg2__2kEVs"
                                    src="{{ asset('template/media/banner/ak-banner4.png') }}" alt="img" />
                                <h5 class="landing_fifteen_Storeh5__cxPGC">Mixed Flowers</h5>
                            </div>
                        </div>
                        <div class="landing_fifteen_StoreCol2__1zDto col-md-8 col-sm-12 col-12">
                            <h2 class="landing_fifteen_StoreH2__4BdaR">কেন HONEY STORE খাঁটি ফুলের প্রাকৃতিক (mixed
                                flowers) মধু নিবেন?</h2>
                            <div class="landing_fifteen_StoreRow2__jgQ7A row">
                                <div sx="12" class="col-sm-6"><img class="landing_fifteen_Storeimg3__YRdj3"
                                        src="{{ asset('template/media/other-images/ak-img46.png') }}" alt="img" />
                                </div>
                                <div sx="12" class="col-sm-6">
                                    <div class="landing_fifteen_LitxtBox__VpZdU">
                                        <ul>
                                            <li><img src="{{ asset('template/media/other-images/ak-img48.svg') }}"
                                                    alt="img" />
                                                <p>আমাদের এই মধু প্রাকৃতিক চাক থেকে সংগৃহীত।</p>
                                            </li>
                                            <li><img src="{{ asset('template/media/other-images/ak-img48.svg') }}"
                                                    alt="img" />
                                                <p>আপনার আমাদের কাছে খাঁটি মধুর নিশ্চয়তা পাবেন।</p>
                                            </li>
                                            <li><img src="{{ asset('template/media/other-images/ak-img48.svg') }}"
                                                    alt="img" />
                                                <p>মধু সংগ্রহ থেকে প্যাকেজিং পর্যন্ত কার্যাবলী নিজস্ব তত্ত্বাবধানে
                                                    সম্পন্ন করা হয়।</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="landing_fifteen_section_gap__McfqK"></section>
            <section class="landing_fifteen_section_gap__McfqK"></section>
            <section>
                <div class="landing_fifteen_Conpad__ZdT14 container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="landing_fifteen_PriceBgBox__BgIGy"><img class="landing_fifteen_PriceBgBoxImg__m6MO0"
                                    src="{{ asset('template/media/other-images/ak-img49.png') }}" alt="img" />
                                <div class="landing_fifteen_PriceBgBoxTxt__lkAGv">
                                    <h5>মুল্য-1,500.00 টাকা</h5>
                                    <h6> সারা দেশে ফ্রি হোম ডেলিভারি </h6><a
                                        class="landing_fifteen_bg__hRDsD landing_fifteen_bg3__YoOYc"
                                        href="#placeAnOrder"><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                            viewBox="0 0 1024 1024" height="1em" width="1em"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M922.9 701.9H327.4l29.9-60.9 496.8-.9c16.8 0 31.2-12 34.2-28.6l68.8-385.1c1.8-10.1-.9-20.5-7.5-28.4a34.99 34.99 0 0 0-26.6-12.5l-632-2.1-5.4-25.4c-3.4-16.2-18-28-34.6-28H96.5a35.3 35.3 0 1 0 0 70.6h125.9L246 312.8l58.1 281.3-74.8 122.1a34.96 34.96 0 0 0-3 36.8c6 11.9 18.1 19.4 31.5 19.4h62.8a102.43 102.43 0 0 0-20.6 61.7c0 56.6 46 102.6 102.6 102.6s102.6-46 102.6-102.6c0-22.3-7.4-44-20.6-61.7h161.1a102.43 102.43 0 0 0-20.6 61.7c0 56.6 46 102.6 102.6 102.6s102.6-46 102.6-102.6c0-22.3-7.4-44-20.6-61.7H923c19.4 0 35.3-15.8 35.3-35.3a35.42 35.42 0 0 0-35.4-35.2zM305.7 253l575.8 1.9-56.4 315.8-452.3.8L305.7 253zm96.9 612.7c-17.4 0-31.6-14.2-31.6-31.6 0-17.4 14.2-31.6 31.6-31.6s31.6 14.2 31.6 31.6a31.6 31.6 0 0 1-31.6 31.6zm325.1 0c-17.4 0-31.6-14.2-31.6-31.6 0-17.4 14.2-31.6 31.6-31.6s31.6 14.2 31.6 31.6a31.6 31.6 0 0 1-31.6 31.6z">
                                            </path>
                                        </svg> অর্ডার করুন </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="landing_fifteen_Conpad__ZdT14 container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="landing_fifteen_VideoBgBox__rE5EO">
                                <div class="landing_fifteen_VideoBgBoxCon__J5fDv container">
                                    <h2>ফুলের নেক্টার থেকে সংগৃহীত সুন্দরবনের প্রাকৃতিক মধু সংগ্রহের কিছু সময়</h2>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/qgkVdMs5jMQ"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"></iframe>
                                </div>
                            </div><img class="landing_fifteen_VideoBgBoxImg1__mbcxW"
                                src="{{ asset('template/media/banner/ak-banner7.png') }}" alt="img" />
                        </div>
                    </div>
                </div>
            </section>
            <section class="landing_fifteen_section_gap__McfqK"></section>
            <section>
                <div class="container">
                    <div class="landing_fifteen_TableBoxH2__4RrDW">
                        <h2>ফুলের নেক্টার থেকে সংগৃহীত সুন্দরবনের প্রাকৃতিক মধু সংগ্রহের কিছু সময়</h2>
                    </div>
                    <div class="landing_fifteen_TableBoxRow__nTHul row"><img class="landing_fifteen_TableAbs3__L5Oug"
                            src="{{ asset('template/media/other-images/ak-img42.svg') }}" alt="img" /><img
                            class="landing_fifteen_TableAbs4__t0x8M"
                            src="{{ asset('template/media/other-images/ak-img43.svg') }}" alt="img" />
                        <div class="col-md-6 col-sm-12">
                            <div class="row">
                                <div class="landing_fifteen_TableBoxCol__BAR9X col-6">
                                    <p>এতে রয়েছে বেশ কিছু খনিজ উপাদান যা শারীরিক সুস্থতা প্রদানে বেশ গুরুত্বপূর্ণ
                                        ভূমিকা রাখে</p>
                                </div>
                                <div class="landing_fifteen_TableBoxCol__BAR9X col-6">
                                    <p>হাঁপানি ও ফুসফুসের সমস্যা সমাধানে কার্যকরী।</p>
                                </div>
                                <div class="landing_fifteen_TableBoxCol__BAR9X col-6">
                                    <p>অতিরিক্ত মেদ কমিয়ে ওজন হ্রাসে ভূমিকা রাখে।</p>
                                </div>
                                <div class="landing_fifteen_TableBoxCol__BAR9X col-6">
                                    <p>রক্তশূন্যতা দূর করে ভূমিকা রাখে।</p>
                                </div>
                                <div class="landing_fifteen_TableBoxCol__BAR9X col-6">
                                    <p>দেহের রোগ প্রতিরোধ ক্ষমতা বৃদ্ধি করে দেহকে সুরক্ষিত রাখে।</p>
                                </div>
                                <div class="landing_fifteen_TableBoxCol__BAR9X col-6">
                                    <p>হজমক্রিয়াকে ত্বরান্বিত করে হজমে সহায়তা করে।</p>
                                </div>
                                <div class="landing_fifteen_TableBoxCol__BAR9X col-6">
                                    <p>ত্বক মসৃণ ও সজীব রাখতে কাজ করে এটি।</p>
                                </div>
                                <div class="landing_fifteen_TableBoxCol__BAR9X col-6">
                                    <p>দেহের পানিশূন্যতা দূর করতে ভূমিকা রাখে।</p>
                                </div>
                                <div class="landing_fifteen_TableBoxCol__BAR9X col-6">
                                    <p>রূপচর্চায় এক বহুল ব্যবহৃত উপাদান।</p>
                                </div>
                                <div class="landing_fifteen_TableBoxCol__BAR9X col-6">
                                    <p>কোষ্ঠ্যকাঠিন্য এবং ডায়রিয়াতেও এটি বেশ উপযোগী।</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12"><img class="landing_fifteen_TableBoxImg__t8mMN"
                                src="{{ asset('template/media/other-images/ak-img53.png') }}" alt="img" />
                        </div>
                    </div>
                </div>
            </section>
            <section class="landing_fifteen_section_gap__McfqK"></section>
            <section>
                <div class="container">
                    <div class="landing_fifteen_PriceBoxTxt2__LQulU">
                        <h5>মুল্য-1,500.00 টাকা</h5>
                        <h6> সারা দেশে ফ্রি হোম ডেলিভারি </h6><a
                            class="landing_fifteen_bg__hRDsD landing_fifteen_bg3__YoOYc" href="#placeAnOrder"><svg
                                stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024"
                                height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M922.9 701.9H327.4l29.9-60.9 496.8-.9c16.8 0 31.2-12 34.2-28.6l68.8-385.1c1.8-10.1-.9-20.5-7.5-28.4a34.99 34.99 0 0 0-26.6-12.5l-632-2.1-5.4-25.4c-3.4-16.2-18-28-34.6-28H96.5a35.3 35.3 0 1 0 0 70.6h125.9L246 312.8l58.1 281.3-74.8 122.1a34.96 34.96 0 0 0-3 36.8c6 11.9 18.1 19.4 31.5 19.4h62.8a102.43 102.43 0 0 0-20.6 61.7c0 56.6 46 102.6 102.6 102.6s102.6-46 102.6-102.6c0-22.3-7.4-44-20.6-61.7h161.1a102.43 102.43 0 0 0-20.6 61.7c0 56.6 46 102.6 102.6 102.6s102.6-46 102.6-102.6c0-22.3-7.4-44-20.6-61.7H923c19.4 0 35.3-15.8 35.3-35.3a35.42 35.42 0 0 0-35.4-35.2zM305.7 253l575.8 1.9-56.4 315.8-452.3.8L305.7 253zm96.9 612.7c-17.4 0-31.6-14.2-31.6-31.6 0-17.4 14.2-31.6 31.6-31.6s31.6 14.2 31.6 31.6a31.6 31.6 0 0 1-31.6 31.6zm325.1 0c-17.4 0-31.6-14.2-31.6-31.6 0-17.4 14.2-31.6 31.6-31.6s31.6 14.2 31.6 31.6a31.6 31.6 0 0 1-31.6 31.6z">
                                </path>
                            </svg> অর্ডার করুন </a>
                    </div>
                </div>
            </section>
            <section class="landing_fifteen_section_gap__McfqK"></section>
            <section class="landing_fifteen_section_gap__McfqK"></section>
            <section class="landing_fifteen_section_gap__McfqK landing_fifteen_section_gap2__o2cIF"></section>
            <section>
                <div class="landing_fifteen_Conpad__ZdT14 container-fluid"><img class="landing_fifteen_HoneyAbs5__TA0ml"
                        src="{{ asset('template/media/other-images/ak-img54.png') }}" alt="img" /><img
                        class="landing_fifteen_HoneyAbs6__B2Ddr"
                        src="{{ asset('template/media/other-images/ak-img54.png') }}" alt="img" />
                    <div class="landing_fifteen_DiscussionBgBox__q707x"
                        style="background-image: url('{{ asset('template/media/background/ak-bg5.png') }}')"><img
                            class="landing_fifteen_Discussionimg1__jD8Nk"
                            src="{{ asset('template/media/other-images/ak-img56.png') }}" alt="img" />
                        <div class="landing_fifteen_DiscussionTxtBox__Rvwgl">
                            <h2> আমাদের প্রাকৃতিক খাঁটি মধুর সম্পর্ক কিছু কথা </h2>
                            <p>সুন্দরবনের প্রাকৃতিক মধুর চাহিদা বরাবরই ভিন্ন। খাঁটি মধু বলতেই সবার আগে এর কথাই মাথায়
                                আসে। HONEY STORE যাত্রার শুরু থেকেই আপনাদের জন্য সেরা মানের ব পণ্য নিয়ে হাজির হয়েছে,
                                যার মধ্যে মধু অন্যতম। প্রাকৃতিক মধু বলতে বুঝায় মৌচাক কেটে সংগ্রহ করা মধু।</p>
                            <p>প্রাকৃতিক মধু সংগ্রহের জন্য মৌয়ালরা সুন্দরবনের গহীনে চলে যায়। বছরের বিভিন্ন সময়
                                সংগ্রহ করা গেলেও ফেব্রুয়ারি. থেকে এপ্রিল মাস এর জন্য উৎকৃষ্ট সময়। মৌয়ালরা মধু
                                সংগ্রহের জন্য বিভিন্ন নৌকাতে করে চাকের খোঁজে পাড়ি জমায় বনের গহীনে। সুন্দরবনের মধুতে
                                খলিসা ফুলের নির্যাস বেশি থাকে। এই মধু অনেক পাতলা এবং সুস্বাদু হয়। তবে একটু পুরনো হয়ে
                                গেলে খানিকটা গন্ধ নাকে আসতে পারে। এক্ষেত্রে হালকা তাপ দিলে এই গন্ধ দূর হয়ে যায়।</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="landing_fifteen_section_gap__McfqK"></section>
            <section>
                <div class="container">
                    <div class="landing_fifteen_HoneyIdeaRow__CGoe8 row">
                        <div class="col-md-6 col-sm-12">
                            <div class="landing_fifteen_LitxtBox__VpZdU">
                                <h2 class="landing_fifteen_LitxtBoxTxtH2__0wuEu">নকল ও ভেজাল মধু চেনার উপায়</h2>
                                <ul>
                                    <li><img src="{{ asset('template/media/other-images/ak-img48.svg') }}"
                                            alt="img" />
                                        <p>সব মৌসুমে সারা বছর মধুর স্বাদ ও ঘ্রাণ প্রায় একই থাকে যা খাঁঁটি মধুর
                                            ক্ষেত্রে হয় না।</p>
                                    </li>
                                    <li><img src="{{ asset('template/media/other-images/ak-img48.svg') }}"
                                            alt="img" />
                                        <p>বৈজ্ঞানিক পরীক্ষারা দ্বারা নিশ্চিত হওয়া যায়।</p>
                                    </li>
                                    <li><img src="{{ asset('template/media/other-images/ak-img48.svg') }}"
                                            alt="img" />
                                        <p>এতে পোলেনের উপস্থিতি পাওয়া যায় না।</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12"><img class="landing_fifteen_HoneyIdeaImg__4hMnb"
                                src="{{ asset('template/media/other-images/ak-img57.png') }}" alt="img" />
                        </div>
                    </div>
                </div>
            </section>
            <section class="landing_fifteen_section_gap__McfqK"></section>
            <section>
                <div class="container">
                    <div class="landing_fifteen_LastOrderDiv__qrZvQ"><img
                            src="{{ asset('template/media/banner/ak-banner8.png') }}" alt="img" />
                        <h5 class="landing_fifteen_LastOrderDivAbs1__zug7t">সারা দেশে ফ্রি হোম ডেলিভারি</h5>
                        <h6 class="landing_fifteen_LastOrderDivAbs2__h7TFf">ডিস্কাউন্ট মূল্যঃ ১৬৫০ টাকা</h6><a
                            class=" landing_fifteen_bg3__YoOYc landing_fifteen_bg7__QGdKb undefined"
                            href="#placeAnOrder"><svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                viewBox="0 0 1024 1024" height="1em" width="1em"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M922.9 701.9H327.4l29.9-60.9 496.8-.9c16.8 0 31.2-12 34.2-28.6l68.8-385.1c1.8-10.1-.9-20.5-7.5-28.4a34.99 34.99 0 0 0-26.6-12.5l-632-2.1-5.4-25.4c-3.4-16.2-18-28-34.6-28H96.5a35.3 35.3 0 1 0 0 70.6h125.9L246 312.8l58.1 281.3-74.8 122.1a34.96 34.96 0 0 0-3 36.8c6 11.9 18.1 19.4 31.5 19.4h62.8a102.43 102.43 0 0 0-20.6 61.7c0 56.6 46 102.6 102.6 102.6s102.6-46 102.6-102.6c0-22.3-7.4-44-20.6-61.7h161.1a102.43 102.43 0 0 0-20.6 61.7c0 56.6 46 102.6 102.6 102.6s102.6-46 102.6-102.6c0-22.3-7.4-44-20.6-61.7H923c19.4 0 35.3-15.8 35.3-35.3a35.42 35.42 0 0 0-35.4-35.2zM305.7 253l575.8 1.9-56.4 315.8-452.3.8L305.7 253zm96.9 612.7c-17.4 0-31.6-14.2-31.6-31.6 0-17.4 14.2-31.6 31.6-31.6s31.6 14.2 31.6 31.6a31.6 31.6 0 0 1-31.6 31.6zm325.1 0c-17.4 0-31.6-14.2-31.6-31.6 0-17.4 14.2-31.6 31.6-31.6s31.6 14.2 31.6 31.6a31.6 31.6 0 0 1-31.6 31.6z">
                                </path>
                            </svg> অর্ডার করুন </a>
                    </div>
                </div>
            </section>
            <section class="landing_fifteen_section_gap__McfqK"></section>
            <section class="landing_fifteen_section_gap2__o2cIF"></section>
            {{-- place order --}}
            @include('customer.template.templates.layouts.place-order')
            <section class="landing_fifteen_section_gap__McfqK"></section>
            <section>
                <div class="container">
                    <div class="landing_fifteen_ShippingIconBox__uwyhG">
                        <div class="landing_fifteen_ShippingIcondev__6IVo3"><a href="#"><img
                                    src="{{ asset('template/media/delivery/ak-delivary5.svg') }}" alt="Img" />
                                <h5>Free 2 Days Shipping</h5>
                            </a></div>
                        <div class="landing_fifteen_ShippingIcondev__6IVo3"><a href="#"><img
                                    src="{{ asset('template/media/delivery/ak-delivary6.svg') }}" alt="Img" />
                                <h5>Money Back Gurantee</h5>
                            </a></div>
                        <div class="landing_fifteen_ShippingIcondev__6IVo3"><a href="#"><img
                                    src="{{ asset('template/media/delivery/ak-delivary7.svg') }}" alt="Img" />
                                <h5>Return Upto 30 Days</h5>
                            </a></div>
                        <div class="landing_fifteen_ShippingIcondev__6IVo3"><a href="#"><img
                                    src="{{ asset('template/media/delivery/ak-delivary8.svg') }}" alt="Img" />
                                <h5>24/7 Customer Support</h5>
                            </a></div>
                    </div>
                </div>
            </section>
            <section class="landing_fifteen_section_gap__McfqK"></section>
            <section>
                <div class="landing_fifteen_Conpad__ZdT14 container-fluid">
                    <div class="landing_fifteen_FooterBg__g3ZBA"
                        style="background-image: url('{{ asset('template/media/background/ak-Footerbg1.png') }}')">
                        <div class="container">
                            <img class="landing_fifteen_logo2__43oWO"
                                src="{{ asset(!empty($shop) ? 'storage/' . $shop->logo : 'template/media/logo/ak-logo5.svg') }}"
                                alt="img" width="150" />
                            <div class="landing_fifteen_Footerhrdiv__jlNif">
                                <h6 href="#">KEEP IN TOUCH </h6>
                                <div class="landing_fifteen_Footerhr__hk_4Y"> </div>
                            </div>
                            <div class="landing_fifteen_FooterdivRow___8Aud row">
                                <div class="col-lg-4 col-sm-12">
                                    <div class="landing_fifteen_FooterTxtdiv__ksGyv">
                                        <h5>Contact Us</h5>
                                        <ul>
                                            <li>
                                                <svg stroke="currentColor" fill="none" stroke-width="2"
                                                    viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"
                                                    class="landing_fifteen_FooterIcon__OdRTj" height="1em"
                                                    width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path
                                                        d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
                                                    </path>
                                                    <path d="M15 7a2 2 0 0 1 2 2"></path>
                                                    <path d="M15 3a6 6 0 0 1 6 6"></path>
                                                </svg>
                                                @php
                                                    $phone = !empty($shop) ? $shop->user_details->phone : '01234-567890';
                                                @endphp
                                                <a href="tel:{{ $phone }}">{{ $phone }}</a>
                                            </li>
                                            <li>
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                    viewBox="0 0 24 24" class="landing_fifteen_FooterIcon__OdRTj"
                                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill="none" d="M0 0h24v24H0V0z"></path>
                                                    <path
                                                        d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 14H4V8l8 5 8-5v10zm-8-7L4 6h16l-8 5z">
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
                                <div class="col-lg-4 col-sm-12">
                                    <div class="landing_fifteen_FooterTxtdiv__ksGyv">
                                        <h5>Important Link</h5>
                                        <ul>
                                            <li>
                                                <img src="{{ asset('template/media/check/ak-Check.png') }}"
                                                    alt="Img" />
                                                <a href="#">Refund Policy </a>
                                            </li>
                                            <li>
                                                <img src="{{ asset('template/media/check/ak-Check.png') }}"
                                                    alt="Img" />
                                                <a href="#">Privacy Policy</a>
                                            </li>
                                            <li>
                                                <img src="{{ asset('template/media/check/ak-Check.png') }}"
                                                    alt="Img" />
                                                <a href="#">Terms and
                                                    Conditions</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12">
                                    <div class="landing_fifteen_FooterTxtdiv__ksGyv">
                                        <h5>অর্ডার পেতে কল করুন এই নাম্বারে</h5>
                                        <h2>
                                            {{ $phone }}
                                        </h2>
                                        <div class="landing_fifteen_SocialIconBox__5dnDT">
                                            <a href="#">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                    viewBox="0 0 16 16" height="1em" width="1em"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <a href="#">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                    viewBox="0 0 16 16" height="1em" width="1em"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <a href="#">
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
                            </div>
                            <div class="landing_fifteen_Footerhr2__pbD9K"></div>
                            <div class="landing_fifteen_tinyFooter__lrU6C">
                                <p>&copy;{{ now()->year }} all rights reserved by <strong>{{ $title }}</strong>
                                </p>
                                <p>Developed with ❤️ by <a href="https://globalfastcoder.com/">Global Fast Coder</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </section>
@endsection
