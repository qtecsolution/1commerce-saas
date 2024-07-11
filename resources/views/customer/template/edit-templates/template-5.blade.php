@php
    $title = !empty($shop) ? $shop->name : 'Landing Page 05';
@endphp
@extends('customer.template.templates.layouts.app')

@section('page_content')
    <div class="Landing__18">
        <section class="Landing__18__Banner"
            style="background-image: url('{{ asset('template/media/banner/af_banner1.png') }}');">
            <div class="Landing__18__Banner__Content">
                <div class="container container-fluid">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="Landing__18__Banner__Left">
                                <div class="Landing__18__Banner__Img d_flex d_justify">
                                    <div class="">
                                        <img src="{{ asset('template/media/banner/af_banner2.png') }}" alt="" />
                                    </div>
                                </div>
                                <div class="Landing__18__Banner__Text">
                                    <h1>আমরা দিচ্ছি সকল ধরনের খাঁটি গুঁড়া মশলা যা রান্নার জন্য ব্যবহার করা যায়
                                        কোনো চিন্তা ছাড়াই।</h1>
                                    <h3>মূল্যঃ ১,৫৮৭ টাকা</h3><a class="bg" href="#">অর্ডার করুন</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="Landing__18__Banner__Right"><img
                                    src="{{ asset('template/media/banner/af_banner4.png') }}" alt="" /></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="Section_gaps"></div>
        <section class="Landing__18__Delivay">
            <section class="ShippingAddress">
                <div class="container">
                    <div class="d_flex row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="ShippingAddressItem">
                                <div class="img"><img src="{{ asset('template/media/delivery/af_delivary1.png') }}"
                                        width="155" height="155" decoding="async" data-nimg="1" loading="lazy"
                                        style="color:transparent" /></div>
                                <div class="text">
                                    <p>Free 2 Days Shipping</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="ShippingAddressItem">
                                <div class="img"><img src="{{ asset('template/media/delivery/af_delivary2.png') }}"
                                        width="155" height="155" decoding="async" data-nimg="1" loading="lazy"
                                        style="color:transparent" /></div>
                                <div class="text">
                                    <p>Sourced From Best Farms</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="ShippingAddressItem">
                                <div class="img"><img src="{{ asset('template/media/delivery/af_delivary3.png') }}"
                                        width="155" height="155" decoding="async" data-nimg="1" loading="lazy"
                                        style="color:transparent" /></div>
                                <div class="text">
                                    <p>Packed Hygienically</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="ShippingAddressItem">
                                <div class="img"><img src="{{ asset('template/media/delivery/af_delivary4.png') }}"
                                        width="155" height="155" decoding="async" data-nimg="1" loading="lazy"
                                        style="color:transparent" /></div>
                                <div class="text">
                                    <p>24/7 Customer Support</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <div class="Section_gaps"></div>
        <section class="Landing__18__Welcome">
            <div class="Landing__18__Welcome__bg"><img src="{{ asset('template/media/background/af_bg2.png') }}"
                    alt="" /></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="Landing__18__Welcome__Img"><img
                                src="{{ asset('template/media/background/af_bg1.png') }}" alt="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="Landing__18__Welcome__Text">
                            <h2>আপনাকে স্বাগত আমাদের খাঁটি গুঁড়া মশলার মার্কেটে...</h2>
                            <p>আমাদের খাঁটি গুঁড়া মশলা কাঁচামাল সংগ্রহ থেকে শুরু করে প্যাকেজিং পর্যন্ত প্রত্যেকটি
                                ধাপ নিজস্ব টিম দ্বারা মনিটরিং করা হয়। ফলে মান নিয়ে নিঃসঙ্কোচ থাকা যায়। আর প্যাকেজিং
                                এর তারিখ হতে এক বছর পর্যন্ত এর মেয়াদ থাকে। ফলে সঠিক ভাবে সংরক্ষণ করলে অনেকদিন
                                পর্যন্ত ব্যবহার করা যায়। তাছাড়া অন্য কোন অপদ্রব্যের সংমিশ্রণ করা হয় না বলে এর
                                স্বাস্থ্য ঝুঁকিও নেই বললেই চলে।</p>
                            <h4>AVAILABLE SIZES</h4>
                            <ul>
                                <li>500g</li>
                                <li>200g</li>
                                <li>100g</li>
                                <li>50g</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="Landing__18__WhyBuy">
            <div class="Landing__18__whybuy__bg"><img src="{{ asset('template/media/background/af_bg4.png') }}"
                    alt="" /></div>
            <div class="container">
                <div class="d_flex row">
                    <div class="col-lg-6">
                        <div class="Landing__18__WhyBuy__Content">
                            <h2>কেনো নিবেন আমাদের খাঁটি গুঁড়া মশলা এবং অন্য মশলা থেকে আলাদা?</h2>
                            <ul>
                                <li> <img src="{{ asset('template/media/other-images/af_tik.png') }}" alt="" />
                                    গুঁড়া করার জন্য
                                    ব্যবহৃত বিভিন্ন
                                    আইটেম খাঁটি গুঁড়া মশলা আমাদের দেশের বিভিন্ন জায়গা থেকে সংগ্রহ করা হয়। নিজেরা
                                    সংগ্রহ করা হয় বলে এর গুণগত মান নিয়ে কোন প্রকার সন্দেহের অবকাশ থাকে না। </li>
                                <li> <img src="{{ asset('template/media/other-images/af_tik.png') }}" alt="" /> রঙ
                                    সহ বিভিন্ন প্রকার
                                    কমদামি
                                    উপকরণের মিশ্রণ থেকে সম্পূর্ণ নিরাপদ। </li>
                                <li> <img src="{{ asset('template/media/other-images/af_tik.png') }}" alt="" /> এই
                                    গুঁড়া BSTI
                                    (Bangladesh
                                    Standard and Testing Institution) অনুমোদিত। </li>
                                <li> <img src="{{ asset('template/media/other-images/af_tik.png') }}" alt="" />
                                    সম্পূর্ণ নিজস্ব
                                    তত্ত্বাবধানে
                                    পরিষ্কার করে শুকানো হয়। এরপর ভাঙানো হয়। </li>
                                <li> <img src="{{ asset('template/media/other-images/af_tik.png') }}" alt="" />
                                    বাজারের খোলা পণ্যে
                                    অনেক
                                    ক্ষেত্রেই কাঠের গুঁড়া ও আটার ভুষির মতন উপাদানের মিশ্রণ যোগ করে গুঁড়ার পরিমাণ
                                    বৃদ্ধি করা হয়। কিন্তু আমাদের খাঁটি গুঁড়া মশলা কিছু মেশানো হয় না। </li>
                                <li> <img src="{{ asset('template/media/other-images/af_tik.png') }}" alt="" />
                                    রান্নায় আনবে পারফেক্ট
                                    স্বাদ,
                                    সুগন্ধ ও তৃপ্তি </li>
                                <li> <img src="{{ asset('template/media/other-images/af_tik.png') }}" alt="" />
                                    অনেকদিন সংরক্ষণ করতে
                                    পারবেন
                                </li>
                                <li> <img src="{{ asset('template/media/other-images/af_tik.png') }}" alt="" />
                                    শতভাগ নিরাপদ ও
                                    বিশুদ্ধ </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="Landing__18__WhyBuy__Img"><img
                                src="{{ asset('template/media/background/af_bg3.png') }}" alt="" />
                            <div class="Order"><a href="tel:01894844452">01894844452</a>
                                <p>ফোন অর্ডার করতে কল করুন </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Landing__18__StartingPrice">
            <div class="Landing__18__StartingPrice__bg"><img src="{{ asset('template/media/background/af_bg6.png') }}"
                    alt="" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="Landing__18__StartingPrice__Img"><img
                                src="{{ asset('template/media/background/af_bg5.png') }}" alt="" />
                            <div class="Landing__18__StartingPrice__Text">
                                <div class="">
                                    <h2>৳120 টাকা থেকে শুরু </h2>
                                    <p>সারা দেশে ফ্রি হোম ডেলিভারি</p><a class="bg" href="#">অর্ডার
                                        করুন</a>
                                </div>
                            </div>
                        </div>
                        <div class="Landing__18__StartingPrice__Slider">
                            <div class="swiper product-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="Landing__18__Slider__Item">
                                            <div class="Landing__18__Slider__Img"><img
                                                    src="{{ asset('template/media/slider/af_slider1.png') }}"
                                                    alt="" /></div>
                                            <div class="Landing__18__Slider__Text">
                                                <h4>এলাচ</h4>
                                                <p>­Cardamom 50 gram</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="Landing__18__Slider__Item">
                                            <div class="Landing__18__Slider__Img"><img
                                                    src="{{ asset('template/media/slider/af_slider2.png') }}"
                                                    alt="" /></div>
                                            <div class="Landing__18__Slider__Text">
                                                <h4>হলুদ গুঁড়া</h4>
                                                <p>­Cardamom 50 gram</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="Landing__18__Slider__Item">
                                            <div class="Landing__18__Slider__Img"><img
                                                    src="{{ asset('template/media/slider/af_slider3.png') }}"
                                                    alt="" /></div>
                                            <div class="Landing__18__Slider__Text">
                                                <h4>মরিচ গুঁড়া</h4>
                                                <p>­Cardamom 50 gram</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="Landing__18__Slider__Item">
                                            <div class="Landing__18__Slider__Img"><img
                                                    src="{{ asset('template/media/slider/af_slider4.png') }}"
                                                    alt="" /></div>
                                            <div class="Landing__18__Slider__Text">
                                                <h4>ধনিয়া গুঁড়া</h4>
                                                <p>­Cardamom 50 gram</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="Landing__18__Slider__Item">
                                            <div class="Landing__18__Slider__Img"><img
                                                    src="{{ asset('template/media/slider/af_slider1.png') }}"
                                                    alt="" /></div>
                                            <div class="Landing__18__Slider__Text">
                                                <h4>এলাচ</h4>
                                                <p>­Cardamom 50 gram</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="Landing__18__Slider__Item">
                                            <div class="Landing__18__Slider__Img"><img
                                                    src="{{ asset('template/media/slider/af_slider2.png') }}"
                                                    alt="" /></div>
                                            <div class="Landing__18__Slider__Text">
                                                <h4>হলুদ গুঁড়া</h4>
                                                <p>­Cardamom 50 gram</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="Landing__18__Slider__Item">
                                            <div class="Landing__18__Slider__Img"><img
                                                    src="{{ asset('template/media/slider/af_slider3.png') }}"
                                                    alt="" /></div>
                                            <div class="Landing__18__Slider__Text">
                                                <h4>মরিচ গুঁড়া</h4>
                                                <p>­Cardamom 50 gram</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="Landing__18__Slider__Item">
                                            <div class="Landing__18__Slider__Img"><img
                                                    src="{{ asset('template/media/slider/af_slider4.png') }}"
                                                    alt="" /></div>
                                            <div class="Landing__18__Slider__Text">
                                                <h4>ধনিয়া গুঁড়া</h4>
                                                <p>­Cardamom 50 gram</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Section_gaps"></div>
        <section class="Landing__18__Feature"><img src="{{ asset('template/media/background/af_feature_bg.png') }}"
                alt="" />
            <div class="Landing__18__Feature__Content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2>আমাদের সেরা খাঁটি গুঁড়া মশলা এর উপকারিতা</h2>
                            <ul>
                                <li> <img src="{{ asset('template/media/other-images/af_li.png') }}" alt="" />
                                    এতে আছে নাইজেরিসিন
                                    নামক
                                    যৌগ যা ইনসুলিন রেজিস্ট্যান্স কমিয়ে ডায়াবেটিস নিয়ন্ত্রণে সাহায্য করে।</li>
                                <li> <img src="{{ asset('template/media/other-images/af_li.png') }}" alt="" />
                                    আমাদের সেরা খাঁটি
                                    গুঁড়া
                                    মশলা দাঁতের ব্যথা উপশমে বেশ কার্যকরী। </li>
                                <li> <img src="{{ asset('template/media/other-images/af_li.png') }}" alt="" />
                                    এতে
                                    অ্যান্টিমাইক্রোবিয়াল
                                    উপাদান – ক্যারিওফিলিন বিদ্যমান। </li>
                                <li> <img src="{{ asset('template/media/other-images/af_li.png') }}" alt="" />
                                    এতে বিদ্যমান ইউজেনল
                                    খাদ্যে
                                    বিষক্রিয়া সারাতে সহায়তা করে। </li>
                                <li> <img src="{{ asset('template/media/other-images/af_li.png') }}" alt="" />
                                    সর্দি – কাশি কমাতে
                                    দারুণভাবে কাজ করে। খাঁটি গুঁড়ো যা কোনো চিন্তা ছাড়াই ব্যবহার করা যেতে পারে।
                                </li>
                                <li> <img src="{{ asset('template/media/other-images/af_li.png') }}" alt="" />
                                    সাইনাসের ব্যথা উপশমে
                                    কাজ
                                    করে। আপনি গুণমান সম্পর্কে আত্মবিশ্বাসী হতে পারেন </li>
                                <li> <img src="{{ asset('template/media/other-images/af_li.png') }}" alt="" />
                                    এতে আছে নাইজেরিসিন
                                    নামক
                                    যৌগ যা ইনসুলিন রেজিস্ট্যান্স কমিয়ে ডায়াবেটিস নিয়ন্ত্রণে সাহায্য করে। </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- place order --}}
        @include('customer.template.templates.layouts.place-order')

        <footer class="Landing__18__Footer">
            <img class="footer_bg"
                src="{{ asset('template/media/background/af_footer_bg.png') }}" alt="" />
            <div class="Landing__18__Footer__Content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="Landing__18__Footer__Content"><img
                                    src="{{ asset(!empty($shop) ? 'storage/' . $shop->logo : 'template/media/banner/af_banner3.png') }}" alt="" width="150" />
                                <ul>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms and Conditions</a></li>
                                    <li><a href="#">Refund Policy </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
