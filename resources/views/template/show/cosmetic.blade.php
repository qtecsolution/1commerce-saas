<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Cosmetic</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
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
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{ asset($template->assets_path . '/images/loading.gif') }}" alt="#" />
        </div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header_bg">
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                            <div class="full">
                                <div class="center-desk">
                                    <div class="logo">
                                        <a href="javascript:void(0)"><img
                                                src="{{ asset($template->assets_path . '/images/logo.png') }}"
                                                alt="logo" width="80px" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                            <ul class="costomer">
                                <li>Call Us : +880 160000000</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end header inner -->
            <!-- end header -->
            <!-- banner -->
            <section class="banner_main">
                <div class="container-fluid">
                    <div class="row d_flex">
                        <div class="col-md-6">
                            <div class="text-bg">
                                <span>Cream</span>
                                <h1>Lakmē Glycolic Night Cream 15g </h1>
                                <p>Wake up to brighter, illuminated skin! Experience the restorative power of Glycolic
                                    Acid as your sleep. Introducing our masterfully crafted Lakmé Glycolic Illuminate
                                    Night Crème, an exceptional night cream enriched with the goodness of Glycolic Acid
                                    and Niacinamide, a true beauty sleep experience.</p>
                                <a href="#order">Order Now</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-img">
                                <figure><img src="{{ asset($template->assets_path . '/images/img.png') }}"
                                        style="border-radius: 50%;width: 600px" /></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </header>
    <!-- end banner -->

    <!-- quality  -->
    <div class="quality ">
        <div class="container">
            <div class="row d_flex">
                <div class="col-md-8">
                    <div class="quality_box">
                        <figure><img src="{{ asset($template->assets_path . '/images/qt.jpg') }}" alt="product" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="quality_text">
                        <h3>Information</h3>
                        <p>
                        <ul>
                            <li>Net Quantity: 15g</li>
                            <li>Manufacturer/Company Name : Nutracos</li>
                            <li>Commodity: Night Cream</li>
                            <li>Expiry Date: 30 Months (From date of Manufacturing)</li>
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
                        <h2>Product Details</h2>
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
                        <div class="carousel-item active">

                            <div class="container">
                                <div class="carousel-caption">
                                    <figure><img src="{{ asset($template->assets_path . '/images/banner1.jpg') }}"
                                            alt="banner 2" style="height: 500px; width: 900px; border-radius: 20px" />
                                    </figure>
                                    <p>The results are astounding – 90% of women witnessed visibly smoother and more
                                        radiant skin. This crème's transformative powers extend to improving radiance,
                                        deeply nourishing your skin, and leaving it silky smooth. Tested by
                                        dermatologists, this crème is suitable for all skin types. Its non-sticky,
                                        easy-to-blend formula ensures that your skin's unique needs are met, whether you
                                        have normal, dry, oily, or combination skin.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">

                            <div class="container">
                                <div class="carousel-caption">
                                    <figure><img src="{{ asset($template->assets_path . '/images/banner2.jpg') }}"
                                            alt="banner 2" style="height: 500px; width: 900px; border-radius: 20px" />
                                    </figure>
                                    <p>The results are astounding – 90% of women witnessed visibly smoother and more
                                        radiant skin. This crème's transformative powers extend to improving radiance,
                                        deeply nourishing your skin, and leaving it silky smooth. Tested by
                                        dermatologists, this crème is suitable for all skin types. Its non-sticky,
                                        easy-to-blend formula ensures that your skin's unique needs are met, whether you
                                        have normal, dry, oily, or combination skin.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">

                            <div class="container">
                                <div class="carousel-caption">
                                    <figure><img src="{{ asset($template->assets_path . '/images/banner3.jpg') }}"
                                            alt="banner 2" style="height: 500px; width: 900px; border-radius: 20px" />
                                    </figure>
                                    <p>The results are astounding – 90% of women witnessed visibly smoother and more
                                        radiant skin. This crème's transformative powers extend to improving radiance,
                                        deeply nourishing your skin, and leaving it silky smooth. Tested by
                                        dermatologists, this crème is suitable for all skin types. Its non-sticky,
                                        easy-to-blend formula ensures that your skin's unique needs are met, whether you
                                        have normal, dry, oily, or combination skin.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
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
                        <h2>Says Clients </h2>
                        <p>use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
                            the<br>
                            middle of text. All the Lorem Ipsum generators on the
                        </p>
                    </div>
                </div>
            </div>
            <section id="demos">
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <span></span>
                                <h3>when looking </h3>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of letters,</p>
                            </div>
                            <div class="item">
                                <span></span>
                                <h3>when looking </h3>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of letters,</p>
                            </div>
                            <div class="item">
                                <span></span>
                                <h3>when looking </h3>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of letters,</p>
                            </div>
                            <div class="item">
                                <span></span>
                                <h3>when looking </h3>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of letters,</p>
                            </div>
                            <div class="item">
                                <span></span>
                                <h3>when looking </h3>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of letters,</p>
                            </div>
                            <div class="item">
                                <span></span>
                                <h3>when looking </h3>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of letters,</p>
                            </div>
                            <div class="item">
                                <span></span>
                                <h3>when looking </h3>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of letters,</p>
                            </div>
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
                        <form class="main_form card p-5">
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
                                                    <h3>Lakmē Glycolic Night Cream 15g</h3>
                                                </div>
                                                <div>
                                                    <h1 class="order-multiplier">x</h1>
                                                </div>
                                                <div class="order-quantity-input">
                                                    <input class="orderfield" placeholder="Qty" type="number"
                                                        name="Quantity" min="1" value="1">
                                                </div>
                                                <div class="order-product-price">
                                                    <h3>500.00 TK.</h3>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <label class="order-shipping-option d-flex p-3">
                                                <input class="order-custom-radio " type="radio"
                                                    name="shippingOption" id="shippingOption1" checked>
                                                <div class="order-form-check-label">
                                                    <h3>Shipping Cost (Inside Dhaka)</h3>
                                                </div>
                                                <div class="order-shipping-price">
                                                    <h3>50.00 TK.</h3>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="col-sm-12">
                                            <label class="order-shipping-option d-flex p-3">
                                                <input class="order-custom-radio " type="radio"
                                                    name="shippingOption" id="shippingOption2">
                                                <div class="order-form-check-label">
                                                    <h3>Shipping Cost (Outside Dhaka)</h3>
                                                </div>
                                                <div class="order-shipping-price">
                                                    <h3>100.00 TK.</h3>
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
                                                    <h3>550.00 TK.</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <input class="orderfield" placeholder="Full Name" type="text"
                                                name="Full Name">
                                        </div>
                                        <div class="col-sm-12">
                                            <input class="orderfield" placeholder="Email" type="text"
                                                name=" Email">
                                        </div>
                                        <div class="col-sm-12">
                                            <input class="orderfield" placeholder="Phone" type="text"
                                                name="Phone">
                                        </div>

                                        <div class="col-sm-12">
                                            <textarea class="textarea" placeholder="Address" type="text" name="Address"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 mt-2">
                                    <button class="order">PLACE ORDER</button>
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
                        <p>© 2024 All Rights Reserved. QTEC SL</p>
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
</body>

</html>
