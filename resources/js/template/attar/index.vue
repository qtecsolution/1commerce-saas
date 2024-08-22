<template>
    <a id="menu-link" href="#" class="">
        <span class="menu-icon"></span>
    </a>

    <div class="overlay" id="overlay">
        <nav class="overlay-menu">
            <ul>
                <li><a href="#" class="smooth-scroll">Home</a></li>
                <li>
                    <a href="#start" class="smooth-scroll">About product</a>
                </li>
                <li><a href="#showcase" class="smooth-scroll">Showcase</a></li>
                <li>
                    <a href="#requirements" class="smooth-scroll"
                        >Requirements</a
                    >
                </li>
                <li><a href="#features" class="smooth-scroll">Features</a></li>
                <li><a href="#contact" class="smooth-scroll">Contact</a></li>
            </ul>
        </nav>
    </div>

    <div id="wrap">
        <section
            id="hero"
            class="m-center text-center bg-shop full-height"
            style="height: 752px"
        >
            <div class="center-box">
                <div class="hero-unit">
                    <div class="container">
                        <h1 class="title"><b>1E-Shop</b> Template</h1>
                        <h3><b>OnePage / OneProduct / OneTemplate</b></h3>
                        <p>
                            <br />
                            If you want sell only one digital product,
                            <b>1E-shop</b> template is for you.<br />
                            <b>1E-shop</b> is onePage full responsive bootstrap
                            template.<br />
                        </p>
                        <br />
                        <a
                            class="btn white"
                            href="#"
                            data-toggle="modal"
                            data-target="#product-modal"
                            ><b>$5</b> BUY NOW</a
                        >
                    </div>
                </div>
                <div class="col-sm-12 img-hero"></div>

                <a
                    href="#start"
                    class="hero-start-link smooth-scroll anchor-link"
                    ><i class="fa fa-angle-double-down"></i
                ></a>
            </div>
        </section>

        <section id="start" class="padding-top-bottom text-center">
            <div class="container">
                <div class="row header">
                    <div class="col-md-12">
                        <h2>PAPER CUP</h2>
                        <p>HQ PSD Mock-up</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <p>
                            Assault voodoo god paranoid tattoo modem kanji
                            <a href="#" title="">drone</a> urban hotdog uplink
                            computer. Dome car papier-mache geodesic wonton soup
                            RAF warehouse woman military-grade numinous shrine
                            nodality pre. Physical drone chrome sunglasses
                            footage vinyl disposable office denim youtube.
                            Systemic-ware advert geodesic alcohol assassin
                            monofilament shrine Chiba voodoo god film
                            convenience store disposable industrial grade camera
                            cartel. Artisanal marketing RAF into advert geodesic
                            sprawl realism woman dome footage courier table
                            drone media youtube ablative.
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
                        <img
                            :src="imageSource('/images/cup4.jpg')"
                            alt=""
                            height="100%"
                        />
                    </div>
                    <div class="col-sm-6 bg-shop" style="height: 500px">
                        <div class="half-box-right">
                            <div class="center-vertical">
                                <div class="center-vertical-box">
                                    <h1><b>See what's included</b></h1>
                                    <ul style="padding: 20px">
                                        <li>Changeable lid color</li>
                                        <li>Changeable cup color</li>
                                        <li>
                                            Changeable cup label via smart
                                            object
                                        </li>
                                        <li>On/off shadows</li>
                                        <li>On/off specular</li>
                                        <li>Changeable background</li>
                                        <li>High resolution 3000 × 1875px</li>
                                    </ul>
                                    <a
                                        href="#"
                                        data-toggle="modal"
                                        data-target="#product-modal"
                                        class="btn dark"
                                        ><b>$5</b> BUY NOW</a
                                    >
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
                        <p>We are here for you</p>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 anima scale-in">
                            <article class="text-center">
                                <img
                                    :src="imageSource('/images/demo1.jpg')"
                                    alt="#"
                                    class="zoom-img img-fluid center-block"
                                />
                                <h3>​ORGANISED LAYERS</h3>
                                <p>
                                    Nodal point courier towards decay dome
                                    advert wonton soup chrome voodoo.
                                </p>
                            </article>
                        </div>
                        <div class="col-md-4 anima scale-in d1">
                            <article class="text-center">
                                <img
                                    :src="imageSource('/images/demo2.jpg')"
                                    alt="#"
                                    class="zoom-img img-fluid center-block"
                                />
                                <h3>​SMART OBJECT</h3>
                                <p>
                                    Table plastic concrete silent nano-dome
                                    industrial grade. Hotdog marketing.
                                </p>
                            </article>
                        </div>
                        <div class="col-md-4 anima scale-in d2">
                            <article class="text-center">
                                <img
                                    :src="imageSource('/images/demo3.jpg')"
                                    alt="#"
                                    class="zoom-img img-fluid center-block"
                                />
                                <h3>TRANSPARENT BG</h3>
                                <p>
                                    Grenade wonton soup faded disposable dome
                                    cardboard spook refrigerator dolphin.
                                </p>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="cta-1 bg-dark padding-top-bottom text-center white-text">
            <div class="container-fluid anima scale-in">
                <span>​Do you like PAPER CUP - Mockup? </span>
                <a
                    class="btn"
                    href="#"
                    data-toggle="modal"
                    data-target="#product-modal"
                    ><b>$5</b> Buy now</a
                >
            </div>
        </div>

        <section id="news" class="content-1 bg-image-2 padding-top-bottom">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-md-6">
                        <div class="white-box">
                            <h2><b>NICE Product :)</b></h2>
                            <p>
                                Scelerisque pulvinar praesent ultrices, amet
                                condimentum wisi felis et. At lobortis risus
                                ipsum praesent urna. Metus lectus duis
                                porttitor. Tellus debitis suspendisse feugiat,
                                non tellus in sed luctus lacus rutrum, iaculis
                                at risus cras vel sit, qui morbi lacus,
                                ultricies semper. Odio ac, diam donec. Tincidunt
                                cursus vel nulla tincidunt, vitae ut tempor ut
                                orci tortor mi
                            </p>
                            <blockquote class="blockquote">
                                <p>Jessica Red</p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="facts" class="numbers-1 padding-top-bottom text-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="numbers-item">
                            <h2 class="counter">367</h2>
                            <h4>Purchases</h4>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="numbers-item">
                            <h2>
                                <span class="counter">99.1</span> <span>%</span>
                            </h2>
                            <h4>User Ratings</h4>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="numbers-item">
                            <h2>
                                <span class="counter">17</span> <span>k</span>
                            </h2>
                            <h4>Followers</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="cta-1 bg-shop padding-top-bottom text-center">
            <div class="container-fluid anima scale-in">
                <span>​Email for a custom and/or unlimited license.</span>
                <a
                    class="btn dark"
                    href="#"
                    data-toggle="modal"
                    data-target=".text-modal"
                    >Mock-up License</a
                >
            </div>
        </div>

        <section class="parallax-container white-text">
            <div class="dark-overlay"></div>
            <div class="parallax">
                <img
                    :src="imageSource('/images/creator.jpg')"
                    alt="About the creator"
                    style="display: block"
                />
            </div>
            <div class="container">
                <div class="row">
                    <div
                        class="col-md-8 mx-auto text-center"
                        style="height: 500px"
                    >
                        <div class="center-vertical">
                            <div class="center-vertical-box">
                                <h2>ABOUT THE CREATOR</h2>
                                <p>
                                    Many desktop publishing packages and web
                                    page editors now use Lorem Ipsum as their
                                    default model text, and a search for 'lorem
                                    ipsum' will uncover many web sites still in
                                    their infancy. Various versions have evolved
                                    over the years, sometimes by accident,
                                    sometimes on purpose (injected humour and
                                    the like).
                                </p>
                                <br />
                                <a
                                    class="btn"
                                    href="#"
                                    data-toggle="modal"
                                    data-target="#product-modal"
                                    ><b>$5</b> Buy now</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="padding-top-bottom">
            <div class="container">
                <div class="row header">
                    <div class="col-md-12">
                        <h2>Contact me</h2>
                        <p>
                            For any questions fill in the form below &amp; we'll
                            get back to you ASAP!
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto contact-info">
                        <div id="alert-contact">
                            <div class="alert alert-success" role="alert">
                                <strong>Your message has been sent.</strong>
                            </div>
                        </div>
                        <form
                            id="contact-form"
                            action="#"
                            class="myform"
                            method="post"
                            novalidate=""
                        >
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <input
                                                name="contactName"
                                                placeholder="Your name"
                                                class="form-control input-lg requiredField"
                                                type="text"
                                                data-error-empty="Enter name"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="controls">
                                            <input
                                                name="email"
                                                placeholder="Your email"
                                                class="form-control input-lg requiredField"
                                                type="email"
                                                data-error-invalid="Invalid email address"
                                                data-error-empty="Enter email"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="controls">
                                    <textarea
                                        name="comments"
                                        placeholder="Your message"
                                        class="form-control input-lg requiredField"
                                        rows="5"
                                        data-error-empty="Enter message"
                                    ></textarea>
                                </div>
                            </div>
                            <p>
                                <button
                                    name="submit"
                                    type="submit"
                                    class="btn btn-store btn-block"
                                    data-error-message="Error!"
                                    data-sending-message="Sending..."
                                    data-ok-message="Email Sent"
                                >
                                    Send Message
                                </button>
                            </p>
                            <input
                                type="hidden"
                                name="submitted"
                                id="submitted3"
                                value="true"
                            />
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <div class="footer-1 text-center">
            <div class="container-fluid">
                <a href="#home" class="back-to-top smooth-scroll"
                    ><i class="fa fa-chevron-up"></i
                ></a>
                <p>
                    Made with <i class="fa fa-heart color-text"></i> by
                    <a href="#">ANGELO Studio</a>.
                </p>
                <ul class="social-links-2">
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                </ul>
            </div>
        </div>

        <div
            class="modal fade text-modal"
            id="text-modal"
            tabindex="-1"
            role="dialog"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-shop">
                        <a class="close-modal" href="#" data-dismiss="modal">
                            <span class="menu-icon"></span>
                        </a>
                        <h2 class=""><b>License</b></h2>
                    </div>
                    <div class="modal-body">
                        <p>
                            In order to simplify the legal terms, here are the
                            rules of the game written in plain English, that you
                            are obliged to follow when using the digital goods
                            at 1E-shop.
                        </p>
                        <p><br /><strong>You are free to…</strong></p>
                        <ul>
                            <li>
                                Use the digital goods in a website for yourself
                                or a client for personal, open-source or
                                commercial use.
                            </li>
                            <li>
                                Use the digital goods to create an icon for your
                                app or button icons.
                            </li>
                            <li>
                                Use the digital goods to create a logo or other
                                brand material.
                            </li>
                        </ul>
                        <p><br /><strong>You are forbidden to…</strong></p>
                        <ul>
                            <li>
                                Re-sell the digital goods, host the digital
                                goods or rent the digital goods (either in
                                existing or modiﬁed form).
                            </li>
                            <li>
                                Include the digital goods with a website offered
                                for sale or distributed for free.
                            </li>
                            <li>
                                Convert the digital goods to a theme to sell or
                                distribute for free.
                            </li>
                        </ul>
                        <br />
                        <p>
                            While attribution is optional, it is always
                            appreciated. Intellectual property rights are not
                            transferred with the download of the icons.
                        </p>
                        <p>
                            Should you happen to lost the purchased good, let me
                            know the email you've used upon your purchase, and I
                            will provide you with the new files.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="modal fade"
            id="product-modal"
            tabindex="-1"
            role="dialog"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <a class="close-modal" href="#" data-dismiss="modal">
                            <span class="menu-icon"></span>
                        </a>
                        <img
                            :src="imageSource('/images/demo1.jpg')"
                            alt=""
                            class="img-fluid"
                        />
                    </div>
                    <div class="modal-body">
                        <h3 class="text-center">
                            <b>PaperCup - Mockup </b>($5,00)
                        </h3>
                    </div>
                    <div class="modal-footer">
                        <div class="container">
                            <form
                                id="buy"
                                action="#"
                                class="myform"
                                method="post"
                                novalidate=""
                            >
                                <div class="form-group">
                                    <div class="controls">
                                        <input
                                            name="email"
                                            placeholder="PayPal Email"
                                            class="form-control input-lg requiredField"
                                            type="email"
                                            data-error-invalid="Invalid email address"
                                            data-error-empty="Enter email"
                                        />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="controls">
                                        <input
                                            id="password"
                                            class="form-control"
                                            type="password"
                                            placeholder="PayPal Password"
                                            name="password"
                                        />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-block">
                                        PAY NOW
                                    </button>
                                </div>
                                <p class="text-center">
                                    <a href="#" data-dismiss="modal">Cancel</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Attar",
    props: ["user_template", "template"],
    data() {
        return {
            appUrl: window.location.origin,
        };
    },
    methods: {
        toast(icon, title) {
            this.$swal({
                toast: true,
                icon: icon,
                title: title,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
            });
        },

        imageSource(path, disk = "public") {
            if (disk == "storage" && path) {
                return `${this.appUrl}/storage/${path}`;
            }

            return `${this.appUrl}/${this.user_template.template.assets_path}/${path}`;
        },
    }
};
</script>

<style></style>