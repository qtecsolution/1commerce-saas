<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Placed</title>
    {{-- favicon --}}
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/icon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <style>
        body {
            background: rgb(213, 217, 233);
            min-height: 100vh;
            vertical-align: middle;
            display: flex;
            font-family: Muli;
            font-size: 14px
        }

        .card {
            margin: auto;
            max-width: 600px;
            max-height: 772px;
            border-radius: 20px
        }

        .mt-50 {
            margin-top: 50px;
        }

        .mb-50 {
            margin-bottom: 50px;
        }

        @media(max-width:767px) {
            .card {
                width: 80%
            }
        }

        @media(height:1366px) {
            .card {
                width: 75%
            }
        }

        #orderno {
            padding: 1vh 2vh 0;
            font-size: smaller
        }

        .gap .col-2 {
            background-color: rgb(213, 217, 233);
            width: 1.2rem;
            padding: 1.2rem;
            margin-top: -2.5rem;
            border-radius: 1.2rem
        }

        .title {
            display: block;
            text-align: center;
            font-size: 2rem;
            font-weight: bold;
            padding: 12%
        }

        .main {
            padding: 0 2rem
        }

        .main img {
            border-radius: 7px
        }

        .main p {
            margin-bottom: 0;
            font-size: 0.75rem
        }

        #sub-title p {
            margin: 1vh 0 2vh 0;
            font-size: 1rem
        }

        .row-main {
            padding: 1.5vh 0;
            align-items: center
        }

        hr {
            margin: 1rem -1vh;
            border-top: 1px solid rgb(214, 214, 214)
        }

        .total {
            font-size: 1rem
        }

        @media(height: 1366px) {
            .main p {
                margin-bottom: 0;
                font-size: 1.2rem
            }

            .total {
                font-size: 1.5rem
            }
        }

        .btn {
            background-color: rgb(3, 122, 219);
            border-color: rgb(3, 122, 219);
            color: white;
            margin: 7vh 0;
            border-radius: 7px;
            width: 60%;
            font-size: 0.8rem;
            padding: 0.8rem;
            justify-content: center
        }

        .btn:focus {
            box-shadow: none;
            outline: none;
            box-shadow: none;
            color: white;
            -webkit-box-shadow: none;
            -webkit-user-select: none;
            transition: none
        }

        .btn:hover {
            color: white
        }
    </style>
</head>

<body>
    <div class="card mt-50 mb-50">
        <div class="col d-flex"><span class="text-muted" id="orderno">order #{{ $order->id }}</span></div>
        <div class="gap">
            <div class="col-2 d-flex mx-auto"> </div>
        </div>
        <div class="title mx-auto">
            Thank you for your order!
            <br>
            <small style="font-size: 40%">Our agent will contact you soon.</small>
        </div>
        <div class="main"> <span id="sub-title">
                <p><b>Payment Summary</b></p>
            </span>
            <div class="px-2">
                <div class="row row-main">
                    <div class="col-9">
                        <div class="row d-flex">
                            <h2><b>{{ $order->product_name }}</b></h2>
                        </div>
                        <div class="row d-flex">
                            <p class="text-muted">Qty: {{ $order->quantity }}</p>
                        </div>
                    </div>
                    <div class="col-3 d-flex justify-content-end">
                        <p>
                            <b>
                                {{ $order->currency }} {{ number_format($order->product_price) }}
                            </b>
                        </p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="total">
                <div class="row">
                    <div class="col"> <b> Sub-Total:</b> </div>
                    <div class="col d-flex justify-content-end">
                        <b>{{ $order->currency }} {{ number_format($order->product_price * $order->quantity) }}</b>
                    </div>
                </div>
                <div class="row">
                    <div class="col"> <b> Shipping Cost:</b> </div>
                    <div class="col d-flex justify-content-end">
                        <b>{{ $order->currency }} {{ number_format($order->shipping_cost) }}</b>
                    </div>
                </div>
                <div class="row">
                    <div class="col"> <b> Total:</b> </div>
                    <div class="col d-flex justify-content-end">
                        <b>{{ $order->currency }} {{ number_format($order->total_amount) }}</b>
                    </div>
                </div>
                <button class="btn d-flex mx-auto"> Pay Now </button>
            </div>
        </div>
        <div class="col d-flex mx-auto" style="padding: 0px 0px 14px 14px">
            <a href="{{ route('user_shop', $order->userTemplate->company_slug) }}">
                Continue Shopping ...
            </a>
        </div>
    </div>
</body>

</html>
