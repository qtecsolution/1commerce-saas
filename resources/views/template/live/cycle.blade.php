@php
    $trackingApi = trackingApi($userTemplate->id);

    $hero_area = $cycle->hero_area != null ? json_decode($cycle->hero_area, true) : null;
    $feature_area = $cycle->features_area ? json_decode($cycle->features_area, true) : null;
    $feature_area = $cycle->features_area ? json_decode($cycle->features_area, true) : null;
    $feature_area_button = $feature_area['button'];
    $testimonial_area = $cycle->testimonials_area != null ? json_decode($cycle->testimonials_area) : null;
    $about_area = $cycle->about_area != null ? json_decode($cycle->about_area, true) : null;
    $order_area = $cycle->order_area != null ? json_decode($cycle->order_area, true) : null;
    $order_area_button = $order_area['button'];
    $footer_area = $cycle->footer_area != null ? json_decode($cycle->footer_area, true) : null;
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">

    {!! renderSeoTags($userTemplate->id) !!}

    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css"
        href="{{ asset($userTemplate->template->assets_path . '/css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{ asset($userTemplate->template->assets_path . '/css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset($userTemplate->template->assets_path . '/css/responsive.css') }}">
    {{-- fevicon icon --}}
    <link rel="shortcut icon"
        href="{{ $userTemplate->fav_icon ? asset('storage/' . $userTemplate->fav_icon) : asset($userTemplate->template->assets_path . '/images/logo.png') }}"
        type="image/x-icon">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet"
        href="{{ asset($userTemplate->template->assets_path . '/css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset($userTemplate->template->assets_path . '/css/owl.carousel.min.css') }}">
    <link rel="stylesoeet" href="{{ asset($userTemplate->template->assets_path . '/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <!-- inject:vite (css/js) -->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <!-- /inject:vite (css/js) -->
    @include('template.live.styles.cycle')

    {!! $trackingApi['head_code'] !!}
</head>

<body>
    {!! $trackingApi['body_code'] !!}
    
    <!-- header section start -->
    <div class="header_section header_bg">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a href="#" class="logo">
                <img class="logo" width="50" height="40"
                    src="{{ fetchImage($userTemplate->company_logo, $userTemplate->template->assets_path . '/images/logo.png') }}">
            </a>
        </nav>
        <!-- banner section start -->
        <div class="banner_section layout_padding">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    {{-- <div class="best_text">Best</div> --}}
                                    <div class="image_1"><img
                                            src="{{ fetchImage($hero_area['image'] ?? '', $userTemplate->template->assets_path . '/images/img-1.png') }}">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <h1 class="banner_taital">{{ $hero_area['title'] }}</h1>
                                    <p class="banner_text">{{ $hero_area['description'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner section end -->
    </div>
    <!-- header section end -->
    <!-- cycle section start -->
    <div class="cycle_section layout_padding">
        <div class="container">
            <h1 class="cycle_taital">{{ $feature_area['feature_title'] }}</h1>
            <p class="cycle_text">{{ $feature_area['feature_subtitle'] }}</p>
            <div class="cycle_section_3 layout_padding">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="cycles_text">{{ $userTemplate->product_name }}</h1>
                        <p class="lorem_text">{{ $feature_area['feature_product_description'] }}</p>
                        <div class="btn_main">
                            <div class="buy_bt"><a href="">Buy Now</a></div>
                            {{-- <h4 class="price_text">Price
                                <span style="margin-right:8px !important;">{{ $userTemplate->product_currency }}</span>
                                <span>{{ $userTemplate->product_price }}</span>
                            </h4> --}}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box_main_3">
                            {{-- <h6 class="number_text_2">02</h6> --}}
                            <div class="image_2" style="margin-top: 100px!important"><img
                                    src="{{ fetchImage($feature_area['image'], $userTemplate->template->assets_path . '/images/img-1.png') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cycle section end -->
    <!-- about section start -->
    <div class="about_section layout_padding" id="about" data-target="about">
        <div class="container">
            <h1 class="about_taital">{{ $about_area['title'] }}</h1>
            <p class="about_text">{{ $about_area['description'] }}
            </p>
            <div class="about_main">
                <img src="{{ fetchImage($about_area['image'] ?? '', $userTemplate->template->assets_path . '/images/img-1.png') }}"
                    class="image_5">
            </div>
        </div>
    </div>
    <!-- about section end -->
    <!-- client section start -->
    <div class="client_section layout_padding" id="testimonial" data-target="testimonial">
        <div id="my_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <h1 class="client_taital">{{ $testimonial_area->title }} </h1>
                @foreach ($cycle->testimonials as $key => $testimonial)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <div class="container">
                            <div class="client_main">
                                <div class="client_section_2">
                                    <div class="client_left">
                                        <div>
                                            <img src="{{ fetchImage($testimonial['reviewer_image'] ?? '', $userTemplate->template->assets_path . '/images/client-img.png') }}"
                                                class="client_img">
                                        </div>
                                    </div>
                                    <div class="client_right">
                                        <div class="quote_icon"><img
                                                src="{{ asset($userTemplate->template->assets_path . '/images/quote-icon.png') }}">
                                        </div>
                                        <p class="">{{ $testimonial['review'] }}</p>
                                        <h3 class="">{{ $testimonial['reviewer_name'] }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>
    <!-- client section end -->
    <!-- contact section start -->
    <div class="contact_section layout_padding">
        <div class="container">
            <div class="contact_main">
                <h1 class="request_text">Order Now</h1>
                <div class="row">
                    <div class="col-md-8 justify-content-start">
                        <p class="about_text">{{ $userTemplate->product_name }}</p>
                    </div>
                    <div class="col-md-4 text-end">
                        <span style="margin-right: 5px">
                            <p class="about_text">{{ $userTemplate->product_currency }}
                                {{ $userTemplate->product_price }}</p>
                        </span>
                    </div>
                </div>

                <form action="{{ route('place_order') }}" method="POST" id="order" class="order-form">
                    @csrf
                    <input type="hidden" name="user_template_id" value="{{ $userTemplate->id }}">

                    <div class="form-group">
                        <input type="text" class="email-bt" value="{{ old('customer_name') }}"
                            placeholder="Name" name="customer_name"required>
                        <div class="help-block with-errors"></div>
                        @error('customer_name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="text" class="email-bt" placeholder="Phone" name="customer_phone"
                            value="{{ old('customer_phone') }}" required>
                        <div class="help-block with-errors"></div>
                        @error('customer_phone')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input class="email-bt" type="number" name="quantity" id="quantity" class="form-control"
                            placeholder="Quantity" min="1" value="{{ old('quantity') ?? 1 }}" required>
                        <div class="help-block with-errors"></div>
                        @error('quantity')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group" style="color: #ffffff !important">
                        <div class="form-check d-flex justify-content-between">
                            <div>
                                <input class="form-check-input" type="radio" name="shipping_cost"
                                    id="flexRadioDefault1" checked
                                    value="{{ $userTemplate['shipping_cost_inside_dhaka'] }}">
                                <label class="form-check-label" for="flexRadioDefault1"> Shiping Cost (Inside Dhaka)
                                </label>
                            </div>
                            {{ $userTemplate['product_currency'] . ' ' . $userTemplate['shipping_cost_inside_dhaka'] }}
                        </div>
                        <div class="form-check d-flex justify-content-between">
                            <div>
                                <input class="form-check-input" type="radio" name="shipping_cost"
                                    id="flexRadioDefault2"
                                    value="{{ $userTemplate['shipping_cost_outside_dhaka'] }}">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Shipping Cost (Outside Dhaka)
                                </label>
                            </div>
                            {{ $userTemplate['product_currency'] . ' ' . $userTemplate['shipping_cost_outside_dhaka'] }}
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="massage-bt" placeholder="Address" rows="5" id="customer_address" name="customer_address"
                            required>{{ old('customer_address') }}</textarea>
                        @error('customer_address')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    @foreach ($userTemplate->fields as $field)
                        <x-cycle-form-field :field="$field" />
                    @endforeach
                    <div class="send_btn">
                        <button type="submit">Order Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- contact section end -->
    <!-- footer section start -->
    <div class="footer_section layout_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-sm-12 padding_0">
                    <div class="map_main">
                        <div class="map-responsive">
                            {!! $footer_area['mapIframe'] !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="call_text"><a href="#"><span
                                class="padding_left_0">{{ $footer_area['address'] }}</span></a></div>
                    <div class="call_text"><a href="#"><span
                                class="padding_left_0">{{ $footer_area['phone'] }}</span></a></div>
                    <div class="call_text"><a href="#"><span
                                class="padding_left_0">{{ $footer_area['email'] }}</span></a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">Copyright 2019 All Right Reserved By.<a href="#"> 1commerce</p>
            <p class="copyright_text">Disrtributed By. <a href="#">1commerce </a></p>
        </div>
    </div>
    <!-- copyright section end -->

    <!-- Javascript files-->
    <script src="{{ asset($userTemplate->template->assets_path . '/js/jquery.min.js') }}"></script>
    <script src="{{ asset($userTemplate->template->assets_path . '/js/popper.min.js') }}"></script>
    <script src="{{ asset($userTemplate->template->assets_path . '/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset($userTemplate->template->assets_path . '/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset($userTemplate->template->assets_path . '/js/plugin.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset($userTemplate->template->assets_path . '/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset($userTemplate->template->assets_path . '/js/custom.js') }}"></script>
    <!-- javascript -->
    <script src="{{ asset($userTemplate->template->assets_path . '/js/owl.carousel.js') }}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>
