<template>
    <!-- loader  -->
    <!-- <div class="loader_bg">
        <div class="loader"><img :src="imageSource('/images/loading.gif', 'public')" alt="#" />
        </div>
    </div> -->
    <!-- end loader -->

    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header_bg" :style="headerBgStyle">
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                            <div class="full">
                                <div class="center-desk">
                                    <div class="logo">
                                        <a href="#"><img
                                                :src="imageSource(headerAreaLogo ? headerAreaLogo : '/images/logo.png', headerAreaLogo ? 'storage' : 'public')"
                                                alt="logo" width="80px" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                            <ul class="costomer">
                                <li>{{ headerAreaContact }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end header inner -->
            <!-- end header -->
            <!-- banner -->
            <section class="banner_main" :style="heroAreaStyles">
                <div class="container-fluid">
                    <div class="row d_flex">
                        <div class="col-md-6">
                            <div class="text-bg">
                                <span>{{ heroAreaSubTitle }}</span>
                                <h1>{{ heroAreaTitle }}</h1>
                                <p>{{ heroAreaDescription }}</p>
                                <a :href="heroAreaButton.url">{{ heroAreaButton.title }} </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-img">
                                <figure><img
                                        :src="imageSource(heroAreaImage ? heroAreaImage : '/images/img.png', heroAreaImage ? 'storage' : 'public')"
                                        style="border-radius: 50%;width: 600px" /></figure>
                    <ImageModal
                        :modalId="'heroImageModal'"
                        :modalTitle="'Edit Hero Area Image'"
                        :image="
                            imageSource(
                                heroAreaImage
                                    ? heroAreaImage
                                    : '/images/img.png',
                                heroAreaImage ? 'storage' : 'public'
                            )
                        "
                        section="hero"
                        element="hero"
                        storeData="heroAreaImage"
                        @save="updateImage"
                    />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </header>
    <!-- end banner -->

    <!-- quality  -->
    <div class="quality" :style="informationAreaStyles">
        <div class="container">
            <div class="row d_flex">
                <div class="col-md-8">
                    <div class="quality_box">
                        <figure><img
                                :src="imageSource(informationImage ? informationImage : '/images/qt.jpg', informationImage ? 'storage' : 'public')"
                                alt="product" />
                        </figure>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="quality_text">
                        <h3>{{ informationTitle }}</h3>
                        <p>
                        <ul>
                            <li v-for="(item, index) in informationItems" :key="index">{{ item }}</li>
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
                        <h2>{{ sliderAreaTitle }}</h2>
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
                        <div v-for="(item, index) in sliderItems" :key="index"
                            :class="['carousel-item', { active: index === 0 }]">
                            <div class="container">
                                <div class="carousel-caption">
                                    <figure>
                                        <img :src="imageSource(item.image ? item.image : '/images/banner' + (index + 1) + '.jpg', item.image ? 'storage' : 'public')"
                                            :alt="'banner ' + (index + 1)"
                                            style="height: 500px; width: 900px; border-radius: 20px" />
                                    </figure>
                                    <p>{{ item.description }}</p>
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
                        <p>
                            {{ clientSaysDescription }}
                        </p>
                    </div>
                </div>
            </div>
            <section id="demos">
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme">
                            <div v-for="(item, index) in clientSaysItems" :key="index" class="item"
                                :style="{ backgroundColor: item.bg_color, color: item.text_color }">
                                <span></span>
                                <h3>{{ item.title }}</h3>
                                <p>{{ item.description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- end testimonial -->

    <div class="bg_ba" :style="orderAreaStyles">
        <!-- order section-->
        <div id="order" class="order">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage">
                            <h2>{{ orderAreaTitle }}</h2>
                        </div>
                        <form class="main_form card p-5">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="row">
                                        <!-- Product Information -->
                                        <div class="col-sm-12 order-product-info mb-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <img :src="imageSource('/images/img.png', 'public')"
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
                                                <input class="order-custom-radio " type="radio" name="shippingOption"
                                                    id="shippingOption1" checked>
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
                                                <input class="order-custom-radio " type="radio" name="shippingOption"
                                                    id="shippingOption2">
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
                                            <input class="orderfield" placeholder="Full Name" type="text" name="
                                  Full Name">
                                        </div>
                                        <div class="col-sm-12">
                                            <input class="orderfield" placeholder="Email" type="text" name=" Email">
                                        </div>
                                        <div class="col-sm-12">
                                            <input class="orderfield" placeholder="Phone" type="text" name="Phone">
                                        </div>

                                        <div class="col-sm-12">
                                            <textarea class="textarea" placeholder="Address" type="text"
                                                name="Address"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 mt-2">
                                    <button class="order">{{ orderAreaButton.title }}</button>
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
    <footer :style="footerAreaStyles">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>{{ footerAreaText }}</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
</template>

<script>
import OneBuilder from "../1Builder/1Builder.js";
import ButtonModal from "../1Builder/components/ButtonModal.vue";
import ColorPicker from "../1Builder/components/ColorPicker.vue"; "../1Builder/components/ColorPicker.vue";
import ImageModal from "../1Builder/components/ImageModal.vue";
import DynamicFormMethods from "../1Builder/components/form/DynamicFormMethods.js";
import AddFieldModal from "../1Builder/components/form/AddFieldModal.vue";
import FormField from "../1Builder/components/form/FormField.vue";

export default {
    name: "Cosmetic",
    props: ["user_template", "template"],
    components: {
        ButtonModal,
        ColorPicker,
        ImageModal,
        AddFieldModal,
        FormField
    },
    data() {
        return {
            appUrl: window.location.origin,

            // header area
            headerAreaLogo: "",
            headerAreaBgImage: "",
            headerAreaContact: "",

            // hero area
            heroAreaTitle: "",
            heroAreaSubTitle: "",
            heroAreaDescription: "",
            heroAreaButton: [],
            heroAreaImage: "",
            heroAreaBgColor: "",
            heroAreaTextColor: "",

            // Information area
            informationBgColor: "",
            informationTextColor: "",
            informationTitle: "",
            informationItems: [],
            informationImage: "",
            informationImageBorderColor: "",

            // slider area
            sliderAreaTitle: "",
            sliderItems: [],
            sliderAreaImage: "",
            sliderAreaBgColor: "",
            sliderAreaTextColor: "",

            // client says area
            clientSaysAreaTitle: "",
            clientSaysAreaTextColor: "",
            clientSaysDescription: [],
            clientSaysItems: [],
            clientSaysAreaBgColor: "",

            // order area
            orderAreaTitle: "",
            orderAreaBgColor: "",
            orderAreaTextColor: "",
            orderAreaFields: [],
            orderAreaButton: [],

            // footer area
            footerAreaTextColor: "",
            footerAreaBgColor: "",
            footerAreaText: "",
            footerAreaLinks: [],
        };
    },
    mounted() {
        let sections = this.user_template.template_sections;
        // console.log(sections);

        // header area
        let headerAreaElement = this.decodedData(
            this.getElement("header", "header").data
        );

        this.headerAreaLogo = headerAreaElement.image;
        this.headerAreaBgImage = headerAreaElement.bg_image;
        this.headerAreaContact = headerAreaElement.contact;

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

        // information area
        let information = this.getSection("information");
        let informationElement = this.decodedData(
            this.getElement("information", "information").data
        );

        this.informationBgColor = information.bg_color;
        this.informationTextColor = information.text_color;
        this.informationTitle = informationElement.title;
        this.informationItems = informationElement.items;
        this.informationImage = informationElement.image;
        this.informationImageBorderColor = informationElement.image_border_color;

        // slider area
        let sliderArea = this.getSection("slider");
        let sliderAreaElement = this.decodedData(
            this.getElement("slider", "slider").data
        );

        this.sliderAreaTitle = sliderArea.title;
        this.sliderItems = sliderAreaElement.items;

        // client says area
        let clientSaysArea = this.getSection("clients_says");
        let clientSaysAreaElement = this.decodedData(
            this.getElement("clients_says", "clients_says").data
        );

        this.clientSaysAreaTitle = clientSaysArea.title;
        this.clientSaysAreaBgColor = clientSaysArea.bg_color;
        this.clientSaysAreaTextColor = clientSaysArea.text_color;
        this.clientSaysDescription = clientSaysAreaElement.description;
        this.clientSaysItems = clientSaysAreaElement.items;

        // order area
        let orderArea = this.getSection("order");
        let orderAreaElement = this.decodedData(
            this.getElement("order", "order").data
        );

        this.orderAreaTitle = orderArea.title;
        this.orderAreaBgColor = orderArea.bg_color;
        this.orderAreaTextColor = orderArea.text_color;
        this.orderAreaFields = this.user_template.fields;
        this.orderAreaButton = orderAreaElement.button;
        
        // footer area
        let footerArea = this.getSection("footer");
        let footerAreaElement = this.decodedData(
            this.getElement("footer", "footer").data
        );

        this.footerAreaTextColor = footerArea.text_color;
        this.footerAreaText = footerAreaElement.text;
        this.footerAreaBgColor = footerArea.bg_color;
        // this.footerAreaLinks = footerAreaElement.links;
    },
    methods: {
        ...DynamicFormMethods,
        ...OneBuilder,
        
    },
};
</script>

<style scoped>
.text-bg a {
    border: 2px solid var(--hero-border-color);
    background-color: var(--hero-bg-color);
    color: var(--hero-text-color);
}

.text-bg a:hover {
    border: 2px solid var(--hero-hover-border-color);
    background-color: var(--hero-hover-bg-color);
    color: var(--hero-hover-text-color);
}

.quality {
    background: var(--information-bg-color);
}

.quality .quality_box::before {
    position: absolute;
    content: "";
    left: 15px;
    border-top: 20px;
    height: 20px;
    background: var(--information-img-border-color);
    width: 77%;
    top: -5px;
}

.quality .quality_box::after {
    position: absolute;
    content: "";
    left: 10px;
    height: 80%;
    background: var(--information-img-border-color);
    width: 20px;
    top: -5px;
}

.bg_ba {
    font-family: Poppins;
    background: var(--order-bg-color);
}
.order .titlepage h2 {color: var(--order-text-color); font-weight: bold;}
.order .main_form .order {
    font-size: 16px;
    transition: ease-in all 0.5s;
    border: 2px solid var(--order-button-border-color);
    background: var(--order-button-bg-color);
    color: var(--order-button-text-color);
    padding: 10px 70px;
    margin: 0 auto;
    display: block;
    border-radius: 25px;
    font-weight: bold;
    letter-spacing: 5px;
    text-transform: uppercase;
}

.order .main_form .order:hover {
    background-color: var(--order-button-hover-color);
    transition: ease-in all 0.5s;
    color: var(--order-button-hover-text-color);
    font-weight: bold;
}

.footer {
    padding: 20px 0px;
    background: var(--footer-bg-color);
}

.footer p {
    color: var(--footer-text-color);
    font-size: 18px;
    line-height: 22px;
    text-align: center;
}
</style>
