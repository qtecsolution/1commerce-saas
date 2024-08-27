<template>
    <a id="menu-link" href="#" class="">
        <span class="menu-icon"></span>
    </a>

    <div class="overlay" id="overlay">
        <nav class="overlay-menu">
            <ul>
                <li v-for="menu in menuItems" :key="menu.id">
                    <a
                        :href="menu.url"
                        class="smooth-scroll"
                        contenteditable="true"
                        >{{ menu.label }}</a
                    >
                </li>
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
                        <h1 class="title">{{ heroAreaTitle }}</h1>
                        <h3>
                            <b>{{ heroAreaSubTitle }}</b>
                        </h3>
                        <p class="mx-md-5">
                            <br />
                            {{ heroAreaDescription }}
                        </p>
                        <br />
                        <a class="btn white" :href="heroAreaButton.url">{{
                            heroAreaButton.title
                        }}</a>
                    </div>
                </div>
                <div
                    class="col-sm-12 img-hero"
                    :style="{
                        backgroundImage: `url(${imageSource(
                            heroAreaImage || '/images/mockup4.png'
                        )})`,
                    }"
                ></div>

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
                        <h2>{{ aboutAreaTitle }}</h2>
                        <p>{{ aboutAreaSubTitle }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <p>
                            {{ aboutAreaDescription }}
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
                                    <h1><b>{{ ingredientsAreaTitle }}</b></h1>
                                    <ul style="padding: 20px">
                                        <li v-for="ingredient in ingredientItems" :key="ingredient.id">{{ ingredient }}</li>
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
    </div>
</template>

<script>
export default {
    name: "Attar",
    props: ["user_template", "template"],
    data() {
        return {
            appUrl: window.location.origin,

            // menu items
            menuItems: [],

            // hero area
            heroAreaTitle: "",
            heroAreaSubTitle: "",
            heroAreaDescription: "",
            heroAreaButton: [],
            heroAreaImage: "",
            heroAreaBgColor: "",
            heroAreaTextColor: "",

            // about area
            aboutAreaTitle: "",
            aboutAreaSubTitle: "",
            aboutAreaDescription: "",
            aboutAreaBgColor: "",
            aboutAreaTextColor: "",

            // ingredients area
            ingredientsAreaTitle: "",
            ingredientItems: [],
            ingredientAreaButton: [],
            ingredientAreaImage: "",
            ingredientAreaBgColor: "",
            ingredientAreaTextColor: "",

            // features area
            featuresAreaTitle: "",
            featuresAreaSubTitle: "",
            featureItems: [],
            featuresAreaBgColor: "",

            // review area
            reviewAreaTitle: "",
            reviewAreaImage: "",
            reviewItems: [],
            reviewAreaBgColor: "",

            // order area
            orderTitle: "",
            orderSubTitle: "",
            orderButton: [],
            orderBgColor: "",

            // footer area
            footerAreaText: "",
            footerAreaBgColor: "",
            footerAreaLinks: [],
        };
    },
    mounted() {
        let sections = this.user_template.template_sections;
        // console.log(sections);

        // menu area
        this.menuItems = this.decodedData(
            this.getElement("header", "menu").data
        );

        // hero area
        let heroArea = this.getSection("hero");
        let heroAreaElement = this.decodedData(
            this.getElement("hero", "hero").data
        );

        this.heroAreaTitle = heroArea.title;
        this.heroAreaSubTitle = heroArea.sub_title;
        this.heroAreaDescription = heroAreaElement.description;
        this.heroAreaButton = heroAreaElement.button;
        this.heroAreaImage = heroAreaElement.image;
        this.heroAreaBgColor = heroArea.bg_color;
        this.heroAreaTextColor = heroArea.text_color;

        // about area
        let aboutArea = this.getSection("about");
        let aboutAreaElement = this.decodedData(
            this.getElement("about", "about").data
        );

        this.aboutAreaTitle = aboutArea.title;
        this.aboutAreaSubTitle = aboutArea.sub_title;
        this.aboutAreaDescription = aboutAreaElement.description;
        this.aboutAreaBgColor = aboutArea.bg_color;
        this.aboutAreaTextColor = aboutArea.text_color;

        // ingredients area
        let ingredientsArea = this.getSection("ingredients");
        let ingredientsAreaElement = this.decodedData(
            this.getElement("ingredients", "ingredients").data
        );

        this.ingredientsAreaTitle = ingredientsArea.title;
        this.ingredientItems = ingredientsAreaElement.items;
        this.ingredientAreaButton = ingredientsAreaElement.button;
        this.ingredientAreaImage = ingredientsAreaElement.image;
        this.ingredientAreaBgColor = ingredientsArea.bg_color;
        this.ingredientAreaTextColor = ingredientsArea.text_color;

        // features area
        let featuresArea = this.getSection("features");
        let featuresAreaElement = this.decodedData(
            this.getElement("features", "features").data
        );

        console.log(featuresArea, featuresAreaElement);
        
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

        getSection(section) {
            return this.user_template.template_sections.find(
                (item) => item.section === section
            );
        },

        getElement(section, element) {
            let filteredSection = this.user_template.template_sections.find(
                (item) => item.section === section
            );

            return filteredSection.elements.find(
                (item) => item.name === element
            );
        },

        decodedData(data) {
            return JSON.parse(data);
        },
    },
};
</script>

<style></style>
