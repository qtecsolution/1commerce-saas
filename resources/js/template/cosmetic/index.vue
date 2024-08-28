<template>
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img :src="imageSource('/images/loading.gif','public')" alt="#" />
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
                                        <a href="#"><img
                                                :src="imageSource('/images/logo.png','public')"
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
                                <figure><img :src="
                                    imageSource('/images/img.png','public')"
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
                        <figure><img :src="imageSource('/images/qt.jpg','public')" alt="product" />
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
                                    <figure><img :src="imageSource('/images/banner1.jpg','public')"
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
                                    <figure><img :src="imageSource('/images/banner2.jpg','public')"
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
                                    <figure><img :src=" imageSource('/images/banner3.png','public')"
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
                                                    <img :src="imageSource('/images/img.png','public')"
                                                        class="order-product-image">
                                                </div>
                                                <div class="order-product-name">
                                                    <h3>Lakmē Glycolic Night Cream 15g</h3>
                                                </div>
                                                <div>
                                                    <h1 class="order-multiplier">x</h1>
                                                </div>
                                                <div class="order-quantity-input">
                                                    <input class="orderfield" placeholder="Qty"
                                                        type="number" name="Quantity" min="1"
                                                        value="1">
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
                                                name="
                                  Full Name">
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
</template>

<script>
import AddInputModal from "../components/add-input-modal.vue";
import FormField from "../components/form-field.vue";
import DynamicFormMethods from "../components/DynamicFormMethods";

export default {
    name: "Cosmetic",
    props: ["user_template", "template"],
    components: {
        AddInputModal,
        FormField,
    },
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
            ingredientAreaTitle: "",
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
            featuresAreaTextColor: "",

            // review area
            reviewAreaTitle: "",
            reviewAreaImage: "",
            reviewItems: [],
            reviewAreaBgColor: "",
            reviewAreaTextColor: "",

            // order area
            orderAreaTitle: "",
            orderAreaSubTitle: "",
            orderAreaButton: [],
            orderAreaBgColor: "",
            orderAreaTextColor: "",
            orderAreaFields: [],

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

        this.ingredientAreaTitle = ingredientsArea.title;
        this.ingredientItems = ingredientsAreaElement.items;
        this.ingredientAreaButton = ingredientsAreaElement.button;
        this.ingredientAreaImage = ingredientsAreaElement.image;
        this.ingredientAreaBgColor = ingredientsArea.bg_color;
        this.ingredientAreaTextColor = ingredientsArea.text_color;

        // features area
        let featuresArea = this.getSection("features");

        this.featuresAreaTitle = featuresArea.title;
        this.featuresAreaSubTitle = featuresArea.sub_title;
        this.featureItems = this.user_template.template.features;
        this.featuresAreaBgColor = featuresArea.bg_color;
        this.featuresAreaTextColor = featuresArea.text_color;

        // review area
        let reviewArea = this.getSection("review");
        let reviewAreaElement = this.decodedData(
            this.getElement("review", "review").data
        );

        this.reviewAreaTitle = reviewAreaElement.title;
        this.reviewAreaImage = reviewAreaElement.image;
        this.reviewItems = this.user_template.template.testimonials[0];
        this.reviewAreaBgColor = reviewArea.bg_color;
        this.reviewAreaTextColor = reviewArea.text_color;

        // order area
        let orderArea = this.getSection("order");

        this.orderAreaTitle = orderArea.title;
        this.orderAreaSubTitle = orderArea.sub_title;
        this.orderAreaBgColor = orderArea.bg_color;
        this.orderAreaTextColor = orderArea.text_color;
        this.orderAreaFields = this.user_template.fields;

        // footer area
        let footerArea = this.getSection("footer");
        let footerAreaElement = this.decodedData(
            this.getElement("footer", "footer").data
        );

        this.footerAreaText = footerAreaElement.text;
        this.footerAreaBgColor = footerArea.bg_color;
        this.footerAreaLinks = footerAreaElement.links;
    },
    methods: {
        ...DynamicFormMethods,

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
</style>
