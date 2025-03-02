<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Attar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset($template->assets_path . '/css/bootstrap.min.css') }}">
    <link href="{{ asset('assets/font-awesome/css/all.min.css') }}" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="{{ asset($template->assets_path . '/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset($template->assets_path . '/css/style.css') }}">

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
    </style>
</head>

<body id="home">
    <div id="wrap">
        <section id="hero" class="m-center text-center bg-shop full-height" style="height: 752px;">
            <div class="center-box">

                <div class="hero-unit ">
                    <div class="container ">
                        <h1 class="title">Attar Perfume</h1>
                        <h3>The Essence of Purity</h3>
                        <p>
                            Experience the purity of natural essences with our exquisite collection of Attar Perfumes.
                            Each drop encapsulates the richness of tradition and the allure of nature.
                        </p>
                        <br>
                        <a class="btn white" href="javascript:void(0)">BUY NOW</a>
                    </div>
                </div>
                <div class="col-sm-12 img-hero">
                    <img src="{{ asset($template->assets_path . '/images/attar.png') }}" alt="" height="100%">
                </div>

                <a href="#about" class="hero-start-link smooth-scroll anchor-link"><i
                        class="fa fa-angle-double-down"></i></a>
            </div>
        </section>

        <section id="about" class="padding-top-bottom text-center">
            <div class="container">
                <div class="row header">
                    <div class="col-md-12">
                        <h2>About Attar Perfume</h2>
                        <p>Crafted with Tradition</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <p>
                            Our Attar Perfumes are crafted with the finest natural ingredients, embodying the rich
                            tradition of perfumery. Each scent is a journey through the lush gardens and exotic lands
                            where these essences originate.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- vertical center / slider -->
        <section id="showcase" class="">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-6 slider">
                        <img src="{{ asset($template->assets_path . '/images/attar.jpg') }}" alt=""
                            height="100%">
                    </div>
                    <div class="col-sm-6 bg-shop" style="height:500px;">
                        <div class="half-box-right">
                            <div class="center-vertical">
                                <div class="center-vertical-box">
                                    <h1><b>Our Ingredients</b></h1>
                                    <ul style="padding: 20px;">
                                        <li>Changeable lid color</li>
                                        <li>Changeable cup color</li>
                                        <li>Changeable cup label via smart object</li>
                                        <li>On/off shadows</li>
                                        <li>On/off specular</li>
                                        <li>Changeable background</li>
                                        <li>High resolution 3000 × 1875px</li>
                                    </ul>
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#product-modal"
                                        class="btn dark">BUY NOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end vertical center / slider -->


        <section id="features" class="features-1">
            <div class="container padding-top-bottom">
                <div class="row header">
                    <div class="col-md-12">
                        <h2>Features</h2>
                        <p>Our Attar Perfumes</p>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 anima scale-in ">
                            <article class="text-center">
                                <img src="{{ asset($template->assets_path . '/images/feature1.png') }}" alt="#"
                                    class="zoom-img img-fluid center-block">
                                <h3>​100% Natural</h3>
                                <p>Our Attar Perfumes are made from pure, natural ingredients without any synthetic
                                    additives.</p>
                            </article>
                        </div>
                        <div class="col-md-4 anima scale-in d1">
                            <article class="text-center">
                                <img src="{{ asset($template->assets_path . '/images/feature2.png') }}" alt="#"
                                    class="zoom-img img-fluid center-block">
                                <h3>Long-Lasting Fragrance</h3>
                                <p>Enjoy the lasting aroma of our perfumes that linger beautifully throughout the day.
                                </p>
                            </article>
                        </div>
                        <div class="col-md-4 anima scale-in d2">
                            <article class="text-center">
                                <img src="{{ asset($template->assets_path . '/images/feature3.png') }}" alt="#"
                                    class="zoom-img img-fluid center-block">
                                <h3>Handcrafted with Care</h3>
                                <p>Each perfume is meticulously handcrafted to preserve the integrity of its essence.
                                </p>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class=" padding-top-bottom">
            <div class="container">
                <div class="row header">
                    <div class="col-md-12">
                        <h2>Order Now</h2>
                        <p>Embrace the Essence of Purity</p>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-8 mx-auto contact-info">
                        <div id="alert-contact">
                            <div class="alert alert-success" role="alert"><strong>Your message has been sent.</strong>
                            </div>
                        </div>

                        <div class="ms-card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        Attar
                                    </div>
                                    <div class="col-md-4 text-right">
                                        <span style="margin-right: 5px">BDT</span>
                                        <span>599</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <form id="contact-form" action="#" class="myform" method="post" novalidate="">

                            <div class="ms-card mb-3">
                                <div class="card-body">
                                    <div class="form-check d-flex justify-content-between pl-0">
                                        <div>
                                            <input class="form-check-input" checked type="radio"
                                                name="shipping_cost" />
                                            <label class="form-check-label">
                                                Shipping Cost (Inside Dhaka)
                                            </label>
                                        </div>
                                        <span>
                                            BDT
                                            120.00
                                        </span>
                                    </div>
                                    <div class="form-check d-flex justify-content-between pl-0">
                                        <div>
                                            <input class="form-check-input" type="radio" name="shipping_cost" />
                                            <label class="form-check-label">
                                                Shipping Cost (Outside Dhaka)
                                            </label>
                                        </div>
                                        <span>
                                            BDT
                                            160.00
                                        </span>
                                    </div>
                                    <hr />
                                    <div class="d-flex justify-content-between total">
                                        <span>Subtotal</span>
                                        <span class="product-price">
                                            BDT
                                            <span id="subtotal">719.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class=" col-md-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <input name="contactName" placeholder="Your name"
                                                class="form-control input-lg requiredField" type="text"
                                                data-error-empty="Enter name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class=" controls">
                                            <input name="email" placeholder="Your email"
                                                class="form-control input-lg requiredField" type="email"
                                                data-error-invalid="Invalid email address"
                                                data-error-empty="Enter email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="controls">
                                    <textarea name="address" placeholder="Address" class="form-control input-lg requiredField" rows="5"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-store btn-block">Order Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <div class="footer-1 text-center">
            <div class="container-fluid">
                <a href="#home" class="back-to-top smooth-scroll"><i class="fa fa-chevron-up"></i></a>
                <p>Copyright © 2024 Attar Inc. All rights reserved.</p>
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
</body>

</html>
