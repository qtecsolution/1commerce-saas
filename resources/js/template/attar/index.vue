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
        <!-- hero section start -->
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
                            heroAreaImage
                                ? heroAreaImage
                                : '/images/mockup4.png',
                            heroAreaImage ? 'storage' : 'public'
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
        <!-- hero section end -->

        <!-- about section start -->
        <section id="about" class="padding-top-bottom text-center">
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
        <!-- about section end -->

        <!-- ingredients section start -->
        <section id="ingredients" class="">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-6 slider">
                        <img
                            :src="
                                imageSource(
                                    ingredientAreaImage
                                        ? ingredientAreaImage
                                        : '/images/cup4.jpg',
                                    ingredientAreaImage ? 'storage' : 'public'
                                )
                            "
                            alt=""
                            height="100%"
                        />
                    </div>
                    <div class="col-sm-6 bg-shop" style="height: 500px">
                        <div class="half-box-right">
                            <div class="center-vertical">
                                <div class="center-vertical-box">
                                    <h1>
                                        <b>{{ ingredientAreaTitle }}</b>
                                    </h1>
                                    <ul style="padding: 20px">
                                        <li
                                            v-for="ingredient in ingredientItems"
                                            :key="ingredient.id"
                                        >
                                            {{ ingredient }}
                                        </li>
                                    </ul>
                                    <a
                                        :href="ingredientAreaButton.url"
                                        class="btn dark"
                                        >{{ ingredientAreaButton.title }}</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ingredients section end -->

        <!-- features section start -->
        <section id="features" class="features-1">
            <div class="container padding-top-bottom">
                <div class="row header">
                    <div class="col-md-12">
                        <h2>{{ featuresAreaTitle }}</h2>
                        <p>{{ featuresAreaSubTitle }}</p>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div
                            class="col-md-4 anima scale-in"
                            v-for="(feature, index) in featureItems"
                            :key="feature.id"
                        >
                            <article class="text-center">
                                <img
                                    :src="
                                        imageSource(
                                            feature.image
                                                ? feature.image
                                                : `/images/demo${
                                                      index + 1
                                                  }.jpg`,
                                            feature.image ? 'storage' : 'public'
                                        )
                                    "
                                    alt="#"
                                    class="zoom-img img-fluid center-block"
                                />
                                <h3>​{{ feature.title }}</h3>
                                <p>{{ feature.description }}</p>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- features section end -->

        <!-- review section start -->
        <section
            id="review"
            class="content-1 bg-image-2 padding-top-bottom"
            :style="{
                backgroundImage: `url(${imageSource(
                    reviewAreaImage ? reviewAreaImage : '/images/mockup5.png',
                    reviewAreaImage ? 'storage' : 'public'
                )})`,
            }"
        >
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-md-6">
                        <div class="white-box">
                            <h2>
                                <b>{{ reviewAreaTitle }}</b>
                            </h2>
                            <p>
                                {{ reviewItems.review }}
                            </p>
                            <blockquote class="blockquote">
                                <p>{{ reviewItems.reviewer_name }}</p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- review section end -->

        <!-- order section start -->
        <section id="order" class="padding-top-bottom">
            <div class="container">
                <div class="row header">
                    <div class="col-md-12">
                        <h2>{{ orderTitle }}</h2>
                        <p>
                            {{ orderSubTitle }}
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
                                                name="phone"
                                                placeholder="Your phone"
                                                class="form-control input-lg requiredField"
                                                type="text"
                                                data-error-invalid="Invalid phone"
                                                data-error-empty="Enter phone"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="controls">
                                            <input
                                                name="quantity"
                                                placeholder="Quantity"
                                                class="form-control input-lg requiredField"
                                                type="number"
                                                data-error-invalid="Invalid quantity"
                                                data-error-empty="Enter quantity"
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

                            <!-- :styles="{
                                    color: siteColor?.primary_text_color,
                                    background_color:
                                        siteColor?.background_color,
                                }" -->
                            <!-- <FormField
                                v-for="(field, index) in fields"
                                :key="index"
                                :field="field"
                            /> -->
                            <!-- @delete="deleteField(index, $event)"
                                @update="updateField(index, $event)" -->

                            <!-- <AddInputModal
                                :modalId="'addInputModal'"
                                :modalTitle="'Add Dynamic Form'"
                            /> -->
                            <!-- @save="addField" -->

                            <p>
                                <button
                                    name="submit"
                                    type="submit"
                                    class="btn btn-store btn-block"
                                    data-error-message="Error!"
                                    data-sending-message="Sending..."
                                    data-ok-message="Order submitted successfully!"
                                >
                                    Order Now
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
        <!-- order section end -->

        <!-- footer section start -->
        <div class="footer-1 text-center">
            <div class="container-fluid">
                <a href="#home" class="back-to-top smooth-scroll"
                    ><i class="fa fa-chevron-up"></i
                ></a>
                <p>{{ footerAreaText }}</p>
                <ul class="social-links-2">
                    <li v-for="link in footerAreaLinks" :key="link.id">
                        <a :href="link.url"><i :class="link.icon"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- footer section end -->
    </div>
</template>

<script>
import AddInputModal from "../components/add-input-modal.vue";
import FormField from "../components/form-field.vue";

export default {
    name: "Attar",
    props: ["user_template", "template"],
    components: [FormField, AddInputModal],
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
            orderTitle: "",
            orderSubTitle: "",
            orderButton: [],
            orderBgColor: "",
            orderTextColor: "",
            fields: [],

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

        this.orderTitle = orderArea.title;
        this.orderSubTitle = orderArea.sub_title;
        this.orderBgColor = orderArea.bg_color;
        this.orderTextColor = orderArea.text_color;
        this.fields = this.user_template.fields;

        // console.log(this.user_template.fields);

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
