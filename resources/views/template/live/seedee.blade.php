@php
    $trackingApi = trackingApi($userTemplate->id);

    $site_color = $seedee->color != null ? json_decode($seedee->color, true) : null;
    $hero_area = $seedee->hero_area != null ? json_decode($seedee->hero_area, true) : null;
    $feature_area = $seedee->features_area ? json_decode($seedee->features_area, true) : null;
    $features = $feature_area != null ? $seedee->features->toArray() : null;
    $about_area = $seedee->about_area != null ? json_decode($seedee->about_area, true) : null;
    $steps = $about_area != null ? $seedee->steps->toArray() : null;
    $order_area = $seedee->order_area != null ? json_decode($seedee->order_area, true) : null;
    $footer_area = $seedee->footer_area != null ? json_decode($seedee->footer_area, true) : null;

    $areas = [$site_color, $hero_area, $feature_area, $features, $about_area, $steps, $order_area, $footer_area];

    foreach ($areas as $area) {
        if ($area === null || empty($area)) {
            abort(500);
        }
    }
@endphp
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! renderSeoTags($userTemplate->id) !!}

    <link href="{{ asset($userTemplate->template->assets_path . '/css/icon.css') }}" rel="stylesheet">
    {{-- fevicon icon --}}
    <link rel="shortcut icon"
        href="{{ $userTemplate->fav_icon ? asset('storage/' . $userTemplate->fav_icon) : asset($userTemplate->template->assets_path . '/images/favicon.png') }}"
        type="image/x-icon">
    <link href="{{ asset($userTemplate->template->assets_path . '/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset($userTemplate->template->assets_path . '/css/main.min.css') }}">
    <script src="{{ asset($userTemplate->template->assets_path . '/js/bootstrap.bundle.min.js') }}"></script>

    @include('template.live.styles.seedee')

    {!! $trackingApi['head_code'] !!}
</head>

<body class="site_background_color">
    {!! $trackingApi['body_code'] !!}

    <a class="call-to-btn" href="tel:{{ $footer_area['title'] }}">
        <span class="material-icons-outlined me-1">
            call
        </span>
        {{ $footer_area['title'] }}
    </a>
    <section id="single1">
        <div class="container">
            <div class="content site_foreground_color">
                <div class="text-center">
                    <img class="img-fluid mb-2" width="100px"
                        src="{{ fetchImage($userTemplate->company_logo, $userTemplate->template->assets_path . '/images/favicon.png') }}"
                        alt="image" />
                    <div class="title">
                        <h2 class="elementor-heading-title elementor-size-default primary_text_color">
                            {{ $hero_area['title'] }}
                        </h2>
                    </div>
                    <h2 class="tagline">
                        <p class="elementor-heading-title elementor-size-default secondary_text_color">
                            {{ $hero_area['description'] }}
                        </p>
                    </h2>
                    <a href="{{ $hero_area['button']['url'] }}" class="btn btn-order btn1">
                        {{ $hero_area['button']['title'] }}
                    </a>
                    <img class="banner-img"
                        src="{{ fetchImage($hero_area['image'], $userTemplate->template->assets_path . '/images/product1.png') }}"
                        alt="image">

                    <h2 class="tagline">
                        <p class="elementor-heading-title elementor-size-default secondary_text_color">
                            {{ $hero_area['bottom_description'] }}
                        </p>
                    </h2>

                    <a href="{{ $hero_area['bottom_button']['url'] }}" class="btn btn-order btn2">
                        {{ $hero_area['bottom_button']['title'] }}
                    </a>

                    <div class="facility-title text_foreground_color"
                        style="background-color: {{ $feature_area['background_color'] }}">
                        {{ $feature_area['title'] }}
                    </div>

                    <div class="facilities">
                        <div class="left">
                            <div class="facilities">
                                <div class="row row-cols-1">
                                    <div class="left">
                                        <ul class="elementor-icon-list-items">
                                            @foreach ($features as $feature)
                                                <li class="elementor-icon-list-item">
                                                    <span class="elementor-icon-list-text secondary_text_color">
                                                        {{ $feature['title'] }}
                                                    </span>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="right">
                                        <p class="info-source">&nbsp;</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <img class="benifits-img shadow-lg"
                        src="{{ fetchImage($feature_area['image'], $userTemplate->template->assets_path . '/images/product2.jpg') }}"
                        alt="image">

                    <div class="facility-title mt-4 text_foreground_color"
                        style="background-color: {{ $about_area['title_background_color'] }}">
                        {{ $about_area['title'] }}
                    </div>

                    <div class="facilities">
                        <div class="left">
                            <ul class="elementor-icon-list-items">
                                @foreach ($steps as $step)
                                    <li class="elementor-icon-list-item">
                                        <span class="elementor-icon-list-text secondary_text_color">
                                            {{ $step['title'] }}
                                        </span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="price-detail"
                        style="background-color: {{ $about_area['sub_title_background_color'] }}">
                        <div class="contact text_foreground_color">
                            {{ $about_area['sub_title'] }}
                        </div>
                    </div>
                    <form action="{{ route('place_order') }}" method="POST" id="order" class="order-form">
                        @csrf
                        <input type="hidden" name="user_template_id" value="{{ $userTemplate->id }}">

                        <legend class="primary_text_color">
                            {{ $order_area['title'] }}
                        </legend>

                        <div class="form-content text-start site_background_color">
                            <div class="row row-cols-1 row-cols-md-2 gx-3 gy-2">
                                <div class="right">
                                    <div class="product content-section site_foreground_color">
                                        <table class="w-100">
                                            <tr>
                                                <td width="50">
                                                    <img class="w-100 banner-img"
                                                        src="{{ fetchImage($order_area['image'], $userTemplate->template->assets_path . '/images/product1.png') }}"
                                                        alt="image">
                                                </td>
                                                <td>
                                                    <div class="ps-2">
                                                        <div class="name secondary_text_color">
                                                            {{ $userTemplate['product_name'] }}
                                                        </div>
                                                        <div class="tag secondary_text_color">
                                                            {{ $order_area['product_tag'] }}
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center secondary_text_color">
                                                    &times;
                                                </td>
                                                <td width="20" class="text-center">
                                                    <input type="number" min="1" name="quantity"
                                                        value="{{ old('quantity') ?? 1 }}" id="quantity"
                                                        class="site_foreground_color secondary_text_color"
                                                        style="width: 50px; border: none">
                                                </td>
                                                <td width="70" class="total-price text-end secondary_text_color">
                                                    {{ $userTemplate['product_currency'] . ' ' . $userTemplate['product_price'] }}
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="content-section vat site_foreground_color">
                                        <div class="form-check d-flex justify-content-between">
                                            <div>
                                                <input class="form-check-input" type="radio" name="shipping_cost"
                                                    id="flexRadioDefault1" checked
                                                    value="{{ $userTemplate['shipping_cost_inside_dhaka'] }}">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    {{ $order_area['shipping_charge_text'] }}
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

                                        <hr>
                                        <div class="d-flex justify-content-between total secondary_text_color">
                                            <span>{{ $order_area['subtotal_text'] }}</span>
                                            <span class="product-price">
                                                {{ $userTemplate['product_currency'] }}
                                                <span id="subtotal">
                                                    {{ $userTemplate['product_price'] + $userTemplate['shipping_cost_inside_dhaka'] }}
                                                </span>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="content-section payment site_foreground_color">
                                        <div class="d-flex align-items-center head secondary_text_color">
                                            <span class="material-icons-outlined">
                                                paid
                                            </span>
                                            Payment Type
                                        </div>

                                        <div class="d-flex align-items-start">
                                            <input type="radio" checked name="delivery-area"
                                                class="form-check-input me-2" id="cashOnDelivery">
                                            <div>
                                                <label class="label m-0 secondary_text_color" for="cashOnDelivery">
                                                    {{ $order_area['payment_title'] }}
                                                </label>
                                                <div class="tagline secondary_text_color">
                                                    {{ $order_area['payment_sub_title'] }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="left">
                                    <div class="form site_foreground_color">
                                        <div class="form-group">
                                            <label for="" class="primary_text_color">
                                                {{ $order_area['customer_name_text'] }}
                                            </label>
                                            <input type="text" name="customer_name"
                                                class="form-control site_background_color"
                                                value="{{ old('customer_name') }}" required>
                                            @error('customer_name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="primary_text_color">
                                                {{ $order_area['customer_phone_text'] }}
                                            </label>
                                            <input type="tel" name="customer_phone" pattern="^0\d{8,11}$"
                                                class="form-control site_background_color"
                                                value="{{ old('customer_phone') }}" required>
                                            @error('customer_phone')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="primary_text_color">
                                                {{ $order_area['delivery_address_text'] }}
                                            </label>
                                            <textarea name="customer_address" rows="2" class="form-control site_background_color" required>{{ old('customer_address') }}</textarea>
                                            @error('customer_address')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        @foreach ($userTemplate->fields as $field)
                                            <x-form-field :field="$field" :styles="[
                                                'color' => $site_color['primary_text_color'],
                                                'background_color' => $site_color['background_color'],
                                            ]" />
                                        @endforeach

                                        <div class="right">
                                            <button type="submit" class="btn submit-btn bg-danger">
                                                {{ $order_area['button']['title'] }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <p class="p-5">
                {{-- empty --}}
            </p>
        </div>
    </section>
    <script src="{{ asset($userTemplate->template->assets_path . '/js/jquery-3.7.1.min.js') }}"></script>
    
    <!-- Form Submit Handler -->
    <script type="text/javascript" src="{{ asset('assets/js/form-submit-handler.js') }}"></script>

    <script>
        $("#quantity").on("input", function() {
            calculateTotal();
        });

        function calculateTotal() {
            var price = {{ $userTemplate['product_price'] }};
            var shipping = $("input[name='shipping_cost']:checked").val() || 0;
            shipping = parseFloat(shipping);
            var quantity = $("#quantity").val();
            var total = (price * quantity + shipping).toFixed(2);
            $("#subtotal").html(total);
        }
        @if (old('quantity'))
            $(window).on("load", calculateTotal);
        @endif
    </script>
    <!-- Sweet Alert -->
    @include('sweetalert::alert')
</body>

</html>
