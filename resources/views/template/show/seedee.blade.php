<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Seedee</title>

    <link href="{{ asset($template->assets_path . '/css/icon.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset($template->assets_path . '/images/favicon.png') }}" type="image/x-icon">
    <link href="{{ asset($template->assets_path . '/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset($template->assets_path . '/css/main.min.css') }}">
    <script src="{{ asset($template->assets_path . '/js/bootstrap.bundle.min.js') }}"></script>

    <style>
        .call-to-btn {
            position: fixed;
            z-index: 99;
            bottom: 100px;
            right: 30px;
            padding: 10px 10px;
            background: #86CD91;
            border-radius: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #004111;
            font-size: 17px;
        }

        .call-to-btn .material-icons-outlined {
            font-size: 17px;
        }

        @media only screen and (max-width: 575px) {
            .call-to-btn {
                bottom: 60px;
                right: 15px;
                padding: 5px 8px;
                font-size: 14px;
            }

            .call-to-btn .material-icons-outlined {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    <div>
        <a class="call-to-btn" href="tel:01230 42 42 42">
            <span class="material-icons-outlined me-1">
                call
            </span>
            01230 42 42 42
        </a>
    </div>
    <section id="single1">
        <div class="container">
            <div class="content">
                <div class="text-center">
                    <div class="title">
                        <h2 class="elementor-heading-title elementor-size-default">
                            সুপার &ldquo;সিড&ldquo; শরীরের শক্তি ও কর্মক্ষমতা বাড়ানোর জন্য খুবই উপকারী
                        </h2>
                    </div>
                    <h2 class="tagline">
                        <p class="elementor-heading-title elementor-size-default">
                            এতে আছে প্রচুর ওমেগা-৩ ফ্যাটি অ্যাসিড, কোয়েরসেটিন, কেম্পফেরল, ক্লোরোজেনিক অ্যাসিড ও ক্যাফিক
                            অ্যাসিড নামক অ্যান্টি-অক্সিডেন্ট, পটাশিয়াম, ম্যাগনেশিয়াম, আয়রন, ক্যালসিয়াম এবং দ্রবণীয়
                        </p>
                    </h2>

                    <a href="#orderForm" class="btn btn-order">অর্ডার করতে চাই</a>
                    <img class="banner-img" src="{{ asset($template->assets_path . '/images/product1.png') }}"
                        alt="image">

                    <h2 class="tagline">
                        <p class="elementor-heading-title elementor-size-default">
                            সিড পুষ্টিকর খাবার। এতে আছে দুধের চেয়ে ৫ গুণ বেশি ক্যালসিয়াম, কমলার চেয়ে ৭ গুণ বেশি ভিটামিন
                            সি, পালং শাকের চেয়ে ৩ গুণ বেশি আয়রন, কলার চেয়ে দ্বিগুণ পটাশিয়াম, মুরগির ডিম থেকে ৩ গুণ বেশি
                            প্রোটিন, স্যামন মাছের চেয়ে ৮ গুণ বেশি
                            ওমেগা-৩।
                        </p>
                    </h2>

                    <a href="#orderForm" class="btn btn-order">অর্ডার করতে চাই</a>

                    <div class="facility-title">
                        সিড খাওয়ার উপকারিতা
                    </div>

                    <div class="facilities">
                        <div class="left">
                            <div class="facilities">
                                <div class="row row-cols-1  ">
                                    <div>
                                        <div class="left">
                                            <ul class="elementor-icon-list-items">
                                                <li class="elementor-icon-list-item"><span
                                                        class="elementor-icon-list-text">সিডে থাকা ওমেগা-৩
                                                        হৃদরোগের ঝুঁকি কমাতে এবং ক্ষতিকর কোলেস্টেরল দূর করতে কাজ
                                                        করে।</span></li>
                                                <li class="elementor-icon-list-item"><span
                                                        class="elementor-icon-list-text">দিনে দুই চা চামচ
                                                        সিড শরীরের শক্তি দেয় এবং কর্মক্ষমতা বাড়ায়।</span></li>
                                                <li class="elementor-icon-list-item"><span
                                                        class="elementor-icon-list-text">প্রচুর পরিমাণে
                                                        অ্যান্টি-অক্সিডেন্ট থাকায় সিড রোগ প্রতিরোধ ক্ষমতাকে
                                                        আরও শক্তিশালী করে।</span></li>
                                                <li class="elementor-icon-list-item"><span
                                                        class="elementor-icon-list-text">মেটাবলিক সিস্টেমকে
                                                        উন্নত করার মাধ্যমে এটি ওজন কমাতে সহায়তা করে।</span></li>
                                                <li class="elementor-icon-list-item"><span
                                                        class="elementor-icon-list-text">সিড ব্লাড সুগার
                                                        (রক্তের চিনি) স্বাভাবিক রাখে, যা ডায়াবেটিস হওয়ার ঝুঁকি
                                                        কমায়</span></li>
                                                <li class="elementor-icon-list-item"><span
                                                        class="elementor-icon-list-text">হাড়ের স্বাস্থ্য রক্ষায়
                                                        সিড দারুণ কাজ করে। কারণ এতে আছে প্রচুর পরিমাণ
                                                        ক্যালসিয়াম।</span></li>
                                                <li class="elementor-icon-list-item"><span
                                                        class="elementor-icon-list-text">সিড কোলন পরিষ্কার
                                                        রাখতে কাজ করে বলে কোলন ক্যানসারের ঝুঁকি কমে।</span></li>
                                                <li class="elementor-icon-list-item"><span
                                                        class="elementor-icon-list-text">সিড শরীর থেকে
                                                        বিষাক্ত পদার্থ বের করে আনে। দূর করে অ্যাসিডিটির সমস্যা।
                                                        সিড পেটের প্রদাহজনিত বা গ্যাসের সমস্যা দূর
                                                        করে।</span></li>
                                                <li class="elementor-icon-list-item"><span
                                                        class="elementor-icon-list-text">সিড ভালো ঘুম হতেও
                                                        সাহায্য করে। সিড ক্যানসার রোধ করে।</span></li>
                                                <li class="elementor-icon-list-item"><span
                                                        class="elementor-icon-list-text">সিড হজমে সহায়তা
                                                        করে।</span></li>
                                                <li class="elementor-icon-list-item"><span
                                                        class="elementor-icon-list-text">বীজ হাঁটু ও
                                                        জয়েন্টের ব্যথা দূর করে।</span></li>
                                                <li class="elementor-icon-list-item"><span
                                                        class="elementor-icon-list-text">এটি ত্বক, চুল ও নখ
                                                        সুন্দর রাখে।</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="right">
                                            <p class="info-source">&nbsp;</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <img class="benifits-img shadow-lg"
                        src="{{ asset($template->assets_path . '/images/product2.jpg') }}" alt="image">

                    <div class="facility-title mt-4">
                        আমাদের উপর কেন আস্থা রাখবেন ??
                    </div>

                    <div class="facilities">
                        <div class="left">
                            <ul class="elementor-icon-list-items">
                                <li class="elementor-icon-list-item"><span class="elementor-icon-list-text">প্রোডাক্ট
                                        হাতে পেয়ে, দেখে, কোয়ালিটি চেক
                                        করে পেমেন্টে করার সুবিধা ।</span></li>
                                <li class="elementor-icon-list-item"><span class="elementor-icon-list-text">প্রোডাক্ট
                                        পছন্দ না হলে সাথে সাথে
                                        রিটার্ন দিতে পারবেন ।</span></li>
                                <li class="elementor-icon-list-item"><span class="elementor-icon-list-text">সারা
                                        বাংলাদেশে কুরিয়ারের মাধ্যমে হোম ডেলিভারি পাবেন ।</span></li>
                                <li class="elementor-icon-list-item"><span class="elementor-icon-list-text">যে
                                        কোন সময় আমাদের সাথে যোগাযোগ করতে পারবেন ।</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="price-detail">
                        <div class="contact">
                            প্রয়োজনে কল করুন-
                            <a href="callto:01230 42 42 42">
                                01230 42 42 42
                            </a>,
                            <a href="callto:01234 56 78 90">
                                01234 56 78 90
                            </a>
                        </div>
                    </div>
                    <form action="javascript:void(0)" method="POST" id="orderForm" class="order-form">
                        <legend>
                            &ldquo;সিড&ldquo; নেয়ার জন্য, নিচের ফর্মটি সম্পূর্ণ পূরণ করুন
                        </legend>

                        <div class="form-content text-start">
                            <div class="row row-cols-1 row-cols-md-2 gx-3 gy-2">
                                <div class="right">
                                    <div class="product content-section">
                                        <table class="w-100">
                                            <tr>
                                                <td width="50">
                                                    <img class="w-100 banner-img"
                                                        src="{{ asset($template->assets_path . '/images/product1.png') }}"
                                                        alt="image">
                                                </td>
                                                <td>
                                                    <div class="ps-2">
                                                        <div class="name">
                                                            Seedee
                                                        </div>
                                                        <div class="tag">
                                                            400 g
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    &times;
                                                </td>
                                                <td width="30" class="text-center">
                                                    <input type="number" min="1" name="quantity"
                                                        value="1" style="width: 50px; border: none">
                                                </td>
                                                <td width="50" class="total-price text-end">
                                                    Tk 1100
                                                </td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div class="content-section vat">
                                        <div class="d-flex justify-content-between top">
                                            <span>Shipping Cost</span>
                                            <span>Tk 50.00</span>
                                        </div>
                                        <div class="d-flex justify-content-between total">
                                            <span>Subtotal</span>
                                            <span class="product-price">
                                                Tk 1,150.00
                                            </span>
                                        </div>
                                    </div>

                                    <div class="content-section payment">
                                        <div class="d-flex align-items-center head">
                                            <span class="material-icons-outlined">
                                                paid
                                            </span>
                                            Payment Type
                                        </div>

                                        <div class="d-flex align-items-start">
                                            <input type="radio" checked name="delivery-area"
                                                class="form-check-input me-2" id="cashOnDelivery">
                                            <div>
                                                <label class="label m-0" for="cashOnDelivery">
                                                    Cash On Delivery
                                                </label>
                                                <div class="tagline">
                                                    Pay with cash upon delivery.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="left">
                                    <div class="form">
                                        <div class="form-group">
                                            <label for="">নাম (Name)*</label>
                                            <input type="text" name="name" class="form-control ">
                                        </div>
                                        <div class="form-group">
                                            <label for="">মোবাইল নাম্বার (Mobile No)*</label>
                                            <input type="text" name="billing_phone" pattern="^0\d{8,11}$"
                                                title="বাংলাদেশের ফোন নম্বর লিখুন, 0xxxxxxxxxx এই ফরম্যাটে"
                                                class="form-control ">
                                            <small class="text-dark">মোবাইল নম্বরটি অবশ্যই শূন্য থেকে শুরু
                                                হবে</small>
                                        </div>

                                        <div class="form-group">
                                            <label for="">ডেলিভারি ঠিকানা (Delivery Address)*</label>
                                            <textarea name="address" rows="2" class="form-control "></textarea>
                                        </div>
                                        <div class="right">
                                            <button class="btn submit-btn bg-danger">
                                                Place Order
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
    <script src="{{ asset($template->assets_path . '/js/jquery-3.7.1.min.js') }}"></script>
</body>

</html>
