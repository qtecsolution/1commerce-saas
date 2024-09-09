@php
    // dd($userTemplate);

    $trackingApi = trackingApi($userTemplate->id);
    $sections = $userTemplate->templateSections;

    $headerSection = $sections->where('section', 'header')->first();
    $headerElement = json_decode($headerSection->elements->first()->data);

    $heroSection = $sections->where('section', 'hero')->first();
    $heroElement = json_decode($heroSection->elements->first()->data);

    $informationSection = $sections->where('section', 'information')->first();
    $informationElement = json_decode($informationSection->elements->first()->data);

    $sliderSection = $sections->where('section', 'slider')->first();
    $sliderElement = json_decode($sliderSection->elements->first()->data);

    $reviewSection = $sections->where('section', 'review')->first();
    $reviewElement = json_decode($reviewSection->elements->first()->data);

    $orderSection = $sections->where('section', 'order')->first();
    $orderElement = json_decode($orderSection->elements->first()->data);

    $footerSection = $sections->where('section', 'footer')->first();
    $footerElement = json_decode($footerSection->elements->first()->data);

    // @dd($orderElement->button)

@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    {!! renderSeoTags($userTemplate->id) !!}

    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset($template->assets_path . '/css/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset($template->assets_path . '/css/style.css') }}">
    <!-- Responsive-->
    <link rel="stylesheet" href="{{ asset($template->assets_path . '/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset($template->assets_path . '/css/owl.carousel.min.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="{{ asset($template->assets_path . '/images/fevicon.png') }}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ asset($template->assets_path . '/css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link href="{{ asset('assets/font-awesome/css/all.min.css') }}" rel="stylesheet" media="screen">
    {{-- <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    <style>
        /* Button Styles */
        #hero .btnStyle {
            background-color: {{ $heroElement->button->color }};
            color: {{ $heroElement->button->text_color }};
            border-color: {{ $heroElement->button->border_color }};
        }

        #hero .btnStyle:hover {
            background-color: {{ $heroElement->button->hover_color }};
            color: {{ $heroElement->button->hover_text_color }};
            border-color: {{ $heroElement->button->hover_border_color }};
        }

        #order .btnStyle {
            background-color: {{ $orderElement->button->color }};
            color: {{ $orderElement->button->text_color }};
            border-color: {{ $orderElement->button->border_color }};
        }

        #order .btnStyle:hover {
            background-color: {{ $orderElement->button->hover_color }};
            color: {{ $orderElement->button->hover_text_color }};
            border-color: {{ $orderElement->button->hover_border_color }};
        }
    </style>
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    {{-- <div class="loader_bg">
        <div class="loader"><img src="{{ asset($template->assets_path . '/images/loading.gif') }}" alt="#" />
        </div>
    </div> --}}
    <!-- end loader -->

    <!-- hero area start -->
    <header id="hero">
        <div class="header_bg">
            <!-- header inner -->
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                            <div class="full">
                                <div class="center-desk">
                                    <div class="logo">
                                        @php
                                            if ($userTemplate->company_logo) {
                                                $link = asset('storage/' . $userTemplate->company_logo);
                                            } else {
                                                $link = asset(
                                                    $userTemplate->template->assets_path . '/images/logo.png',
                                                );
                                            }
                                        @endphp
                                        <a href="#"><img src="{{ $link }}" alt="logo"
                                                width="80px" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                            <ul class="customer">
                                <li>{{ $headerElement->contact }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end header inner -->

            <!-- banner -->
            <section class="banner_main">
                <div class="container-fluid">
                    <div class="row d_flex">
                        <div class="col-md-6">
                            <div class="text-bg">
                                <span>{{ $heroSection->sub_title }}</span>
                                <h1>{{ $heroSection->title }}</h1>
                                <p>{{ $heroElement->description }}</p>
                                <a href="{{ $heroElement->button->url }}"
                                    class="btnStyle">{{ $heroElement->button->title }}</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-img">
                                <figure>
                                    @php
                                        if ($heroElement->image) {
                                            $link = asset('storage/' . $heroElement->image);
                                        } else {
                                            $link = asset($userTemplate->template->assets_path . '/images/img.png');
                                        }
                                    @endphp
                                    <img src="{{ $link }}" style="border-radius: 50%;width: 600px" />
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </header>
    <!-- hero area end -->

    <!-- quality  -->
    <div class="quality ">
        <div class="container">
            <div class="row d_flex">
                <div class="col-md-8">
                    <div class="quality_box">
                        <figure>
                            @php
                                if ($informationElement->image) {
                                    $link = asset('storage/' . $informationElement->image);
                                } else {
                                    $link = asset($userTemplate->template->assets_path . '/images/qt.jpg');
                                }
                            @endphp
                            <img src="{{ $link }}" alt="product" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="quality_text">
                        <h3>{{ $informationSection->title }}</h3>
                        <p>
                        <ul>
                            @foreach ($informationElement->items as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end quality  -->

    <div class="customers">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>{{ $sliderSection->title }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="myCarousel" class="carousel slide banner2" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        @foreach ($sliderElement->items as $key => $sliderItem)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                <div class="container">
                                    <div class="carousel-caption">
                                        <figure>
                                            @php
                                                if ($sliderItem->image) {
                                                    $link = asset('storage/' . $sliderItem->image);
                                                } else {
                                                    $link = asset(
                                                        $userTemplate->template->assets_path . '/images/banner1.jpg',
                                                    );
                                                }
                                            @endphp
                                            <img src="{{ $link }}" alt="banner 2"
                                                style="height: 500px; width: 900px; border-radius: 20px" />
                                        </figure>
                                        <p>{{ $sliderItem->description }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- testimonial -->
    <div class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>{{ $reviewSection->title }}</h2>
                        <p>{{ $reviewElement->description }}</p>
                    </div>
                </div>
            </div>
            <section id="demos">
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme">
                            @foreach ($template->testimonials as $reviewItem)
                                <div class="item">
                                    <span style="text-align: center; color: #000000; font-size: 30px;"><i
                                            class="fas fa-quote-left"></i></span>
                                    <h3>{{ $reviewItem->reviewer_name }}</h3>
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is
                                        that
                                        it has a more-or-less normal distribution of letters,</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- end testimonial -->

    <div class="bg_ba">
        <!-- order section-->
        <div id="order" class="order">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage">
                            <h2>Order Now</h2>
                        </div>
                        <form action="{{ route('place_order') }}" method="POST" class="main_form card p-5">
                            @csrf
                            <input type="hidden" name="user_template_id" value="{{ $userTemplate->id }}">

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="row">
                                        <!-- Product Information -->
                                        <div class="col-sm-12 order-product-info mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <img src="{{ asset($template->assets_path . '/images/img.png') }}"
                                                        class="order-product-image">
                                                </div>
                                                <div class="order-product-name">
                                                    <h3>{{ $orderSection->title }}</h3>
                                                </div>
                                                <div class="order-product-price">
                                                    <h3>
                                                        <span class="order-product-price">
                                                            {{ $userTemplate->product_price }}
                                                        </span>
                                                        {{ $userTemplate->product_currency }}
                                                    </h3>
                                                </div>
                                                <div class="ml-3">
                                                    <h1 class="order-multiplier">
                                                        x
                                                    </h1>
                                                </div>
                                                <div class="order-quantity-input">
                                                    <input class="orderfield" placeholder="Qty" type="number"
                                                        name="quantity" min="1" value="1" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <label class="order-shipping-option d-flex p-3">
                                                <input class="order-custom-radio" type="radio" name="shipping_cost"
                                                    value="{{ $userTemplate->shipping_cost_inside_dhaka }}" checked />
                                                <div class="order-form-check-label">
                                                    <h3>
                                                        Shipping Cost (Inside
                                                        Dhaka)
                                                    </h3>
                                                </div>
                                                <div class="order-shipping-price">
                                                    <h3>
                                                        <span class="mr-2">
                                                            {{ $userTemplate->shipping_cost_inside_dhaka }}
                                                        </span>
                                                        <span>
                                                            {{ $userTemplate->product_currency }}
                                                        </span>
                                                    </h3>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="col-sm-12">
                                            <label class="order-shipping-option d-flex p-3">
                                                <input class="order-custom-radio" type="radio" name="shipping_cost"
                                                    value="{{ $userTemplate->shipping_cost_outside_dhaka }}" />
                                                <div class="order-form-check-label">
                                                    <h3>
                                                        Shipping Cost (Outside
                                                        Dhaka)
                                                    </h3>
                                                </div>
                                                <div class="order-shipping-price">
                                                    <h3>
                                                        <span class="mr-2">
                                                            {{ $userTemplate->shipping_cost_outside_dhaka }}
                                                        </span>
                                                        <span>
                                                            {{ $userTemplate->product_currency }}
                                                        </span>
                                                    </h3>
                                                </div>
                                            </label>
                                        </div>

                                        <!-- Divider -->
                                        <div class="col-sm-12">
                                            <hr class="order-divider">
                                        </div>

                                        <!-- Subtotal -->
                                        <div class="col-sm-12">
                                            <div
                                                class="d-flex align-items-center justify-content-between order-subtotal">
                                                <div>
                                                    <h3>Total</h3>
                                                </div>
                                                <div>
                                                    <h3>
                                                        <span id="subtotal">100</span>
                                                        {{ $userTemplate->product_currency }}
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    @foreach ($userTemplate->fields as $field)
                                        <x-form-field :field="$field" :styles="[
                                            'color' => '#000',
                                            'background_color' => '#fff',
                                        ]" />

                                        @error($field->name)
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    @endforeach
                                </div>

                                <div class="col-sm-12 mt-2">
                                    <button class="order btnStyle"
                                        type="submit">{{ $orderElement->button->title }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end order -->
    <!--  footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>{{ $footerElement->text }}</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="{{ asset($template->assets_path . '/js/jquery.min.js') }}"></script>
    <script src="{{ asset($template->assets_path . '/js/popper.min.js') }}"></script>
    <script src="{{ asset($template->assets_path . '/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset($template->assets_path . '/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset($template->assets_path . '/js/plugin.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset($template->assets_path . '/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset($template->assets_path . '/js/custom.js') }}"></script>
    <script src="{{ asset($template->assets_path . '/js/owl.carousel.min.js') }}"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                margin: 10,
                nav: true,
                loop: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            })
        })
    </script>

    <script>
        $('.content').hide();

        $('.slider').click(function() {
            $(this).next('.content').slideToggle();
            this.toggle = !this.toggle;
            $(this).children("span").text(this.toggle ? "-" : "+");
            return false;
        });
    </script>

    <script>
        $(document).ready(function() {
            $("input[name='quantity'], input[name='shipping_cost']").on("input", function() {
                calculateTotal();
            });

            function calculateTotal() {
                var price = parseFloat({{ json_encode($userTemplate['product_price']) }}) || 0;
                var shipping = parseFloat($("input[name='shipping_cost']:checked").val()) || 0;
                var quantity = parseFloat($("input[name='quantity']").val()) || 1;
                var total = (price * quantity + shipping).toFixed(2);
                $("#subtotal").html(total);
            }

            @if (old('quantity'))
                $(window).on("load", calculateTotal);
            @endif

            calculateTotal();
        });
    </script>
</body>

</html>
