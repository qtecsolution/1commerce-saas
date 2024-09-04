@php
    // dd($userTemplate);

    $trackingApi = trackingApi($userTemplate->id);
    $sections = $userTemplate->templateSections;

    $heroSection = $sections->where('section', 'hero')->first();
    $heroElement = json_decode($heroSection->elements->first()->data);

    $aboutSection = $sections->where('section', 'about')->first();
    $aboutElement = json_decode($aboutSection->elements->first()->data);

    $ingredientsSection = $sections->where('section', 'ingredients')->first();
    $ingredientsElement = json_decode($ingredientsSection->elements->first()->data);

    $featuresSection = $sections->where('section', 'features')->first();
    $features = $userTemplate->template->features;

    $orderSection = $sections->where('section', 'order')->first();
    $orderElement = json_decode($orderSection->elements->first()->data);

    $footerSection = $sections->where('section', 'footer')->first();
    $footerElement = json_decode($footerSection->elements->first()->data);
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {!! renderSeoTags($userTemplate->id) !!}

    <link rel="shortcut icon"
        href="{{ $userTemplate->fav_icon ? asset('storage/' . $userTemplate->fav_icon) : asset($userTemplate->template->assets_path . '/images/favicon.png') }}"
        type="image/x-icon">

    <link rel="stylesheet" href="{{ asset($template->assets_path . '/css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset($template->assets_path . '/css/font-awesome.min.css') }}"> --}}
    <link href="{{ asset('assets/font-awesome/css/all.min.css') }}" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="{{ asset($template->assets_path . '/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset($template->assets_path . '/css/style.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset($template->assets_path . '/css/turquoise.css') }}" class="colors"> --}}

    <style>
        #menu-link {
            top: 80px;
        }
    </style>

    <style>
        /* Custom Card Styles */
        .ms-card {
            border-radius: 6px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        /* Card Header */
        .ms-card .card-header {
            background-color: #f8f9fa;
            border-bottom: none;
            border-radius: 15px 15px 0 0;
        }

        /* Card Body */
        .ms-card .card-body {
            padding: 20px;
        }

        .fw-bold {
            font-weight: bold;
        }

        .form-check-label {
            margin-left: 25px;
        }

        input[type="checkbox"],
        input[type="radio"] {
            margin: 6px 7px 0 0;
        }

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

        #ingredients .btnStyle {
            background-color: {{ $ingredientsElement->button->color }};
            color: {{ $ingredientsElement->button->text_color }};
            border-color: {{ $ingredientsElement->button->border_color }};
        }

        #ingredients .btnStyle:hover {
            background-color: {{ $ingredientsElement->button->hover_color }};
            color: {{ $ingredientsElement->button->hover_text_color }};
            border-color: {{ $ingredientsElement->button->hover_border_color }};
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


    {!! $trackingApi['head_code'] !!}
</head>

<body id="home">
    {!! $trackingApi['head_code'] !!}

    {{-- <a id="menu-link" href="#" class="">
        <span class="menu-icon"></span>
    </a>

    <div class="overlay" id="overlay">
        <nav class="overlay-menu">
            <ul>
                <li><a href="#" class="smooth-scroll">Home</a></li>
                <li><a href="#start" class="smooth-scroll">About product</a>
                </li>
                <li><a href="#showcase" class="smooth-scroll">Showcase</a>
                </li>
                <li><a href="#requirements" class="smooth-scroll">Requirements</a></li>
                <li><a href="#features" class="smooth-scroll">Features</a>
                </li>
                <li><a href="#contact" class="smooth-scroll">Contact</a></li>
            </ul>
        </nav>
    </div> --}}

    <div id="wrap">
        <section id="hero" class="m-center text-center full-height"
            style="height: 752px; background-color: {{ $heroSection->bg_color }}">
            <div class="center-box">

                <div class="hero-unit ">
                    <div class="container ">
                        <h1 class="title">{{ $heroSection->title }}</h1>
                            <h3>{{ $heroSection->sub_title }}</h3>
                            <p>{{ $heroElement->description }}</p>
                            <br>
                            <a class="btn white btnStyle"
                                href="{{ $heroElement->button->url }}">{{ $heroElement->button->title }}</a>
                    </div>
                </div>

                <div class="col-sm-12 img-hero">
                    @php
                        if ($heroElement->image) {
                            $link = asset('storage/' . $heroElement->image);
                        } else {
                            $link = asset($userTemplate->template->assets_path . '/images/attar.png');
                        }
                    @endphp
                    <img src="{{ $link }}" alt="image" class="img-fluid">
                </div>

                <a href="#about" class="hero-start-link smooth-scroll anchor-link"><i
                        class="fa fa-angle-double-down"></i></a>
            </div>
        </section>

        <section id="about" class="padding-top-bottom text-center"
            style="background-color: {{ $aboutSection->bg_color }}">
            <div class="container">
                <div class="row header">
                    <div class="col-md-12">
                        <h2>{{ $aboutSection->title }}</h2>
                        <p>{{ $aboutSection->sub_title }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <p>{{ $aboutElement->description }}</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="ingredients">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-6 slider">
                        @php
                            if ($ingredientsElement->image) {
                                $link = asset('storage/' . $ingredientsElement->image);
                            } else {
                                $link = asset($userTemplate->template->assets_path . '/images/attar.jpg');
                            }
                        @endphp
                        <img src="{{ $link }}" alt="" height="100%">
                    </div>
                    <div class="col-sm-6" style="height:500px; background-color: {{ $ingredientsSection->bg_color }}">
                        <div class="half-box-right">
                            <div class="center-vertical">
                                <div class="center-vertical-box">
                                    <h1 class="fw-bold">{{ $ingredientsSection->title }}</h1>
                                    <ul style="padding: 20px;">
                                        @foreach ($ingredientsElement->items as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                    <a href="{{ $ingredientsElement->button->url }}"
                                        class="btn dark btnStyle">{{ $ingredientsElement->button->title }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="features" class="features-1" style="background-color: {{ $featuresSection->bg_color }}">
            <div class="container padding-top-bottom">
                <div class="row header">
                    <div class="col-md-12">
                        <h2>{{ $featuresSection->title }}</h2>
                        <p>{{ $featuresSection->sub_title }}</p>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        @foreach ($features as $key => $feature)
                            <div class="col-md-4 anima scale-in">
                                <article class="text-center">
                                    @php
                                        if ($feature->image) {
                                            $link = asset('storage/' . $feature->image);
                                        } else {
                                            $link = asset(
                                                $userTemplate->template->assets_path .
                                                    '/images/feature' .
                                                    $key +
                                                    1 .
                                                    '.png',
                                            );
                                        }
                                    @endphp
                                    <img src="{{ $link }}" alt="#"
                                        class="zoom-img img-fluid center-block">
                                    <h3>{{ $feature->title }}</h3>
                                    <p>{{ $feature->description }}</p>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section id="order" class="padding-top-bottom" style="background-color: {{ $orderSection->bg_color }}">
            <div class="container">
                <div class="row header">
                    <div class="col-md-12">
                        <h2>{{ $orderSection->title }}</h2>
                        <p>{{ $orderSection->sub_title }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto contact-info">
                        <div class="ms-card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        {{ $userTemplate->product_name }}
                                    </div>
                                    <div class="col-md-4 text-right">
                                        <span style="margin-right: 5px">{{ $userTemplate->product_currency }}</span>
                                        <span>{{ number_format($userTemplate->product_price, 2) }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <form id="order" action="{{ route('place_order') }}" class="myform" method="post"
                            novalidate="">
                            @csrf
                            <input type="hidden" name="user_template_id" value="{{ $userTemplate->id }}">

                            <div class="ms-card mb-3">
                                <div class="card-body">
                                    <div class="form-check d-flex justify-content-between pl-0">
                                        <div>
                                            <input class="form-check-input" type="radio" name="shipping_cost"
                                                value="{{ $userTemplate->shipping_cost_inside_dhaka }}" checked />
                                            <label class="form-check-label">
                                                Shipping Cost (Inside Dhaka)
                                            </label>
                                        </div>
                                        <span>
                                            {{ $userTemplate->product_currency }}
                                            {{ number_format($userTemplate->shipping_cost_inside_dhaka, 2) }}
                                        </span>
                                    </div>
                                    <div class="form-check d-flex justify-content-between pl-0">
                                        <div>
                                            <input class="form-check-input" type="radio"
                                                value="{{ $userTemplate->shipping_cost_outside_dhaka }}"
                                                name="shipping_cost" />
                                            <label class="form-check-label">
                                                Shipping Cost (Outside Dhaka)
                                            </label>
                                        </div>
                                        <span>
                                            {{ $userTemplate->product_currency }}
                                            {{ number_format($userTemplate->shipping_cost_outside_dhaka, 2) }}
                                        </span>
                                    </div>
                                    <hr />
                                    <div class="d-flex justify-content-between total">
                                        <span>Subtotal</span>
                                        <span class="product-price">
                                            {{ $userTemplate->product_currency }}
                                            <span id="subtotal">0.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            @foreach ($userTemplate->fields as $field)
                                <x-form-field :field="$field" :styles="[
                                    'color' => '#000',
                                    'background_color' => '#fff',
                                ]" />

                                @error($field->name)
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            @endforeach

                            <button type="submit" class="btn btn-store btn-block btnStyle">Order
                                Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <div class="footer-1 text-center" style="background-color: {{ $footerSection->bg_color }}">
            <div class="container-fluid">
                <a href="#home" class="back-to-top smooth-scroll"><i class="fa fa-chevron-up"></i></a>
                <p>{{ $footerElement->text }}</p>
            </div>
        </div>
    </div>

    <!-- Core scrips -->
    <script type="text/javascript" src="{{ asset($template->assets_path . '/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset($template->assets_path . '/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset($template->assets_path . '/js/waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset($template->assets_path . '/js/core.js') }}"></script>
    <script type="text/javascript" src="{{ asset($template->assets_path . '/js/menu-overlay.js') }}"></script>
    <script type="text/javascript" src="{{ asset($template->assets_path . '/js/placeholders.min.js') }}"></script>
    <!-- end core scripts -->

    <!-- sliders -->
    {{-- <script type="text/javascript" src="{{ asset($template->assets_path . '/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset($template->assets_path . '/js/jquery.waitforimages.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset($template->assets_path . '/js/sliders.js') }}"></script>
    <script type="text/javascript" src="{{ asset($template->assets_path . '/js/jquery.counterup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset($template->assets_path . '/js/numbers.js') }}"></script>
    <script type="text/javascript" src="{{ asset($template->assets_path . '/js/contact.js') }}"></script>
    <script type="text/javascript" src="{{ asset($template->assets_path . '/js/parallax.js') }}"></script> --}}

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
