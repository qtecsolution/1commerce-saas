<template>
    <div id="wrap">
        <!-- hero section start -->
        <section
            id="hero"
            class="m-center text-center full-height"
            style="height: 752px"
            :style="{ 'background-color': heroAreaBgColor }"
        >
            <ColorPicker
                v-if="isEditable"
                style="margin-top: 40px; margin-left: 10px"
                :color="heroAreaBgColor"
                section="hero"
                @update="heroAreaBgColor = $event"
                @save="updateBgColor($event)"
            />
            <div class="center-box">
                <div class="hero-unit">
                    <div class="container">
                        <h1
                            class="title"
                            :contenteditable="isEditable"
                            @blur="updateTitle('hero', 'heroAreaTitle', $event)"
                        >
                            {{ heroAreaTitle }}
                        </h1>
                        <h3
                            class="fw-bold"
                            :contenteditable="isEditable"
                            @blur="
                                updateSubTitle(
                                    'hero',
                                    'heroAreaSubTitle',
                                    $event
                                )
                            "
                        >
                            {{ heroAreaSubTitle }}
                        </h3>
                        <p
                            class="mx-md-5"
                            :contenteditable="isEditable"
                            @blur="
                                updateDescription(
                                    'hero',
                                    'hero',
                                    'heroAreaDescription',
                                    $event
                                )
                            "
                        >
                            {{ heroAreaDescription }}
                        </p>
                        <br />
                        <a
                            class="btn white btnStyle"
                            :href="heroAreaButton.url"
                            >{{ heroAreaButton.title }}</a
                        >
                        <ButtonModal
                            v-if="isEditable"
                            :modalId="'heroAreaButton'"
                            :modalTitle="'Edit Hero Area Button'"
                            :buttonData="heroAreaButton"
                            section="hero"
                            element="hero"
                            storeData="heroAreaButton"
                            @save="updateButton"
                        />
                    </div>
                </div>
                <div class="col-md-8 offset-md-2 img-hero mb-4">
                    <img
                        :src="
                            imageSource(
                                heroAreaImage
                                    ? heroAreaImage
                                    : '/images/attar.png',
                                heroAreaImage ? 'storage' : 'public'
                            )
                        "
                        alt=""
                        class="img-fluid"
                    />
                    <ImageModal
                        v-if="isEditable"
                        :modalId="'heroImageModal'"
                        :modalTitle="'Edit Hero Area Image'"
                        :image="
                            imageSource(
                                heroAreaImage
                                    ? heroAreaImage
                                    : '/images/attar.png',
                                heroAreaImage ? 'storage' : 'public'
                            )
                        "
                        section="hero"
                        element="hero"
                        storeData="heroAreaImage"
                        @save="updateResource"
                    />
                </div>

                <a
                    href="#start"
                    class="hero-start-link smooth-scroll anchor-link"
                    ><i class="fa fa-angle-double-down"></i
                ></a>
            </div>
        </section>
        <!-- hero section end -->

        <!-- about section start -->
        <section
            id="about"
            class="padding-top-bottom text-center"
            :style="{ 'background-color': aboutAreaBgColor }"
        >
            <ColorPicker
                v-if="isEditable"
                style="margin-top: -40px; margin-left: 10px"
                :color="aboutAreaBgColor"
                section="about"
                @update="aboutAreaBgColor = $event"
                @save="updateBgColor($event)"
            />
            <div class="container">
                <div class="row header">
                    <div class="col-md-12">
                        <h2
                            :contenteditable="isEditable"
                            @blur="
                                updateTitle('about', 'aboutAreaTitle', $event)
                            "
                        >
                            {{ aboutAreaTitle }}
                        </h2>
                        <p
                            :contenteditable="isEditable"
                            @blur="
                                updateSubTitle(
                                    'about',
                                    'aboutAreaSubTitle',
                                    $event
                                )
                            "
                        >
                            {{ aboutAreaSubTitle }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <p
                            :contenteditable="isEditable"
                            @blur="
                                updateDescription(
                                    'about',
                                    'about',
                                    'aboutAreaDescription',
                                    $event
                                )
                            "
                        >
                            {{ aboutAreaDescription }}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- about section end -->

        <!-- ingredients section start -->
        <section id="ingredients">
            <ColorPicker
                v-if="isEditable"
                style="top: 10px; right: 10px; z-index: 1"
                :color="ingredientAreaBgColor"
                section="ingredients"
                @update="ingredientAreaBgColor = $event"
                @save="updateBgColor($event)"
            />
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-6 slider">
                        <img
                            :src="
                                imageSource(
                                    ingredientAreaImage
                                        ? ingredientAreaImage
                                        : '/images/attar.jpg',
                                    ingredientAreaImage ? 'storage' : 'public'
                                )
                            "
                            alt=""
                            height="100%"
                        />

                        <ImageModal
                            v-if="isEditable"
                            :modalId="'ingredientImageModal'"
                            :modalTitle="'Edit Ingredient Area Image'"
                            :image="
                                imageSource(
                                    ingredientAreaImage
                                        ? ingredientAreaImage
                                        : '/images/attar.jpg',
                                    ingredientAreaImage ? 'storage' : 'public'
                                )
                            "
                            section="ingredients"
                            element="ingredients"
                            storeData="ingredientAreaImage"
                            @save="updateResource"
                        />
                    </div>
                    <div
                        class="col-sm-6"
                        style="height: 500px"
                        :style="{ 'background-color': ingredientAreaBgColor }"
                    >
                        <div class="half-box-right">
                            <div class="center-vertical">
                                <div class="center-vertical-box">
                                    <h1
                                        class="fw-bold"
                                        :contenteditable="isEditable"
                                        @blur="
                                            updateTitle(
                                                'ingredients',
                                                'ingredientAreaTitle',
                                                $event
                                            )
                                        "
                                    >
                                        {{ ingredientAreaTitle }}
                                    </h1>
                                    <ul style="padding: 20px">
                                        <li
                                            v-for="(
                                                ingredient, index
                                            ) in ingredientItems"
                                            :key="ingredient.id"
                                        >
                                            <span
                                                :contenteditable="isEditable"
                                                @blur="updateIngredients"
                                            >
                                                {{ ingredient }}
                                            </span>
                                            <i
                                                v-if="isEditable"
                                                @click="removeIngredient(index)"
                                                class="fas fa-times ml-2"
                                            ></i>
                                        </li>
                                    </ul>

                                    <!-- Input to add new ingredients -->
                                    <div class="row mb-5" v-if="isEditable">
                                        <div class="col">
                                            <input
                                                v-model="newIngredient"
                                                placeholder="Add new ingredient"
                                                class="form-control"
                                            />
                                        </div>

                                        <div
                                            @click="addIngredient"
                                            class="bg-primary py-1 px-2 rounded text-white"
                                        >
                                            Add Ingredient
                                        </div>
                                    </div>
                                    <a
                                        :href="ingredientAreaButton.url"
                                        class="btn dark btnStyle"
                                        >{{ ingredientAreaButton.title }}</a
                                    >

                                    <ButtonModal
                                        v-if="isEditable"
                                        :modalId="'ingredientButtonModal'"
                                        :modalTitle="'Edit Ingredient Area Button'"
                                        :buttonData="ingredientAreaButton"
                                        section="ingredients"
                                        element="ingredients"
                                        storeData="ingredientAreaButton"
                                        @save="updateButton"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ingredients section end -->

        <!-- features section start -->
        <section
            id="features"
            class="features-1"
            :style="{ 'background-color': featuresAreaBgColor }"
        >
            <ColorPicker
                v-if="isEditable"
                style="top: 10px; left: 10px"
                :color="featuresAreaBgColor"
                section="features"
                @update="featuresAreaBgColor = $event"
                @save="updateBgColor($event)"
            />
            <div class="container padding-top-bottom">
                <div class="row header">
                    <div class="col-md-12">
                        <h2
                            :contenteditable="isEditable"
                            @blur="
                                updateTitle(
                                    'features',
                                    'featuresAreaTitle',
                                    $event
                                )
                            "
                        >
                            {{ featuresAreaTitle }}
                        </h2>
                        <p
                            :contenteditable="isEditable"
                            @blur="
                                updateSubTitle(
                                    'features',
                                    'featuresAreaSubTitle',
                                    $event
                                )
                            "
                        >
                            {{ featuresAreaSubTitle }}
                        </p>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div
                            class="col-md-4"
                            v-for="(feature, index) in featureItems"
                            :key="feature.id"
                        >
                            <article class="text-center">
                                <div
                                    class="remove-feature"
                                    @click="removeFeature(index)"
                                    v-if="index > 2"
                                >
                                    <i class="fas fa-times"></i>
                                </div>
                                <div>
                                    <img
                                        :src="getFeatureImage(feature, index)"
                                        alt="#"
                                        class="zoom-img img-fluid center-block"
                                    />

                                    <ImageModal
                                        v-if="isEditable"
                                        :modalId="`feature${
                                            index + 1
                                        }ImageModal`"
                                        :modalTitle="`Edit Feature ${
                                            index + 1
                                        } Image`"
                                        :image="getFeatureImage(feature, index)"
                                        :storeData="`featureItems[${index}]`"
                                        @save="
                                            saveFeature({
                                                id: feature.id,
                                                template_id:
                                                    feature.template_id,
                                                index,
                                                image: $event['image'],
                                            })
                                        "
                                    />
                                </div>
                                <h3
                                    :contenteditable="isEditable"
                                    @blur="
                                        saveFeature({
                                            id: feature.id,
                                            template_id: feature.template_id,
                                            title: $event.target.innerText,
                                            index,
                                        })
                                    "
                                >
                                    {{ feature.title }}
                                </h3>
                                <p
                                    :contenteditable="isEditable"
                                    @blur="
                                        saveFeature({
                                            id: feature.id,
                                            template_id: feature.template_id,
                                            description:
                                                $event.target.innerText,
                                            index,
                                        })
                                    "
                                >
                                    {{ feature.description }}
                                </p>
                            </article>
                        </div>

                        <div class="col-12">
                            <button
                                class="btn btn-primary col-12"
                                @click="copyFeature"
                            >
                                Add Feature
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- features section end -->

        <!-- order section start -->
        <section
            id="order"
            class="padding-top-bottom"
            :style="{ 'background-color': orderAreaBgColor }"
        >
            <ColorPicker
                v-if="isEditable"
                style="top: 10px; left: 10px"
                :color="orderAreaBgColor"
                section="order"
                @update="orderAreaBgColor = $event"
                @save="updateBgColor($event)"
            />
            <div class="container">
                <div class="row header">
                    <div class="col-md-12">
                        <h2
                            :contenteditable="isEditable"
                            @blur="
                                updateTitle('order', 'orderAreaTitle', $event)
                            "
                        >
                            {{ orderAreaTitle }}
                        </h2>
                        <p
                            :contenteditable="isEditable"
                            @blur="
                                updateSubTitle(
                                    'order',
                                    'orderAreaSubTitle',
                                    $event
                                )
                            "
                        >
                            {{ orderAreaSubTitle }}
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto contact-info">
                        <div class="ms-card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div
                                        class="col-md-8"
                                        :contenteditable="isEditable"
                                        @blur="
                                            updateProductDetails(
                                                'product_name',
                                                $event
                                            )
                                        "
                                    >
                                        {{
                                            this.user_template.product_name ??
                                            ""
                                        }}
                                    </div>
                                    <div class="col-md-4 text-right">
                                        <span style="margin-right: 5px">{{
                                            this.user_template
                                                .product_currency ?? "৳"
                                        }}</span>
                                        <span
                                            :contenteditable="isEditable"
                                            @blur="
                                                updateProductDetails(
                                                    'product_price',
                                                    $event
                                                )
                                            "
                                            >{{
                                                this.user_template
                                                    .product_price ?? 0
                                            }}</span
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>

                        <form action="#" method="post" novalidate="">
                            <div class="ms-card mb-3">
                                <div class="card-body">
                                    <div
                                        class="form-check d-flex justify-content-between pl-0"
                                    >
                                        <div>
                                            <input
                                                class="form-check-input"
                                                type="radio"
                                                name="flexRadioDefault"
                                                id="flexRadioDefault1"
                                                :checked="
                                                    selectedShippingOption ===
                                                    'inside_dhaka'
                                                "
                                            />
                                            <label
                                                class="form-check-label"
                                                for="flexRadioDefault1"
                                            >
                                                Shipping Cost (Inside Dhaka)
                                            </label>
                                        </div>
                                        <span
                                            @blur="
                                                updateProductDetails(
                                                    'shipping_cost_inside_dhaka',
                                                    $event
                                                )
                                            "
                                        >
                                            {{ user_template.product_currency }}
                                            {{
                                                user_template.shipping_cost_inside_dhaka
                                            }}
                                        </span>
                                    </div>
                                    <div
                                        class="form-check d-flex justify-content-between pl-0"
                                    >
                                        <div>
                                            <input
                                                class="form-check-input"
                                                type="radio"
                                                name="flexRadioDefault"
                                                id="flexRadioDefault2"
                                                :checked="
                                                    selectedShippingOption ===
                                                    'outside_dhaka'
                                                "
                                            />
                                            <label
                                                class="form-check-label"
                                                for="flexRadioDefault2"
                                            >
                                                Shipping Cost (Outside Dhaka)
                                            </label>
                                        </div>
                                        <span
                                            @blur="
                                                updateProductDetails(
                                                    'shipping_cost_inside_dhaka',
                                                    $event
                                                )
                                            "
                                        >
                                            {{ user_template.product_currency }}
                                            {{
                                                user_template.shipping_cost_outside_dhaka
                                            }}
                                        </span>
                                    </div>
                                    <hr />
                                    <div
                                        class="d-flex justify-content-between total"
                                    >
                                        <span>Subtotal</span>
                                        <span class="product-price">
                                            {{ user_template.product_currency }}
                                            {{ subtotal }}
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <FormField
                                :styles="{
                                    color: orderAreaTextColor,
                                    backgroundColor: orderAreaBgColor,
                                }"
                                v-for="(field, index) in orderAreaFields"
                                :key="index"
                                :field="field"
                                @delete="deleteOrderAreaField(index, $event)"
                                @update="updateOrderAreaField(index, $event)"
                                :isDeletable="index >= 4"
                                :isEditable="isEditable"
                            />

                            <AddFieldModal
                                v-if="isEditable"
                                :modalId="'AddFieldModal'"
                                :modalTitle="'Add Dynamic Form'"
                                @save="addOrderAreaField"
                            />

                            <div class="mt-2">
                                <button
                                    name="submit"
                                    type="submit"
                                    class="btn btn-store btn-block btnStyle"
                                >
                                    Order Now
                                </button>

                                <ButtonModal
                                    v-if="isEditable"
                                    :modalId="'orderAreaButtonModal'"
                                    :modalTitle="'Edit Order Area Button'"
                                    :buttonData="orderAreaButton"
                                    section="order"
                                    element="order"
                                    storeData="orderAreaButton"
                                    @save="updateButton"
                                />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- order section end -->

        <!-- footer section start -->
        <div
            class="footer-1 text-center position-relative"
            :style="{ 'background-color': footerAreaBgColor }"
        >
            <ColorPicker
                v-if="isEditable"
                style="top: 10px; left: 10px"
                :color="footerAreaBgColor"
                section="footer"
                @update="footerAreaBgColor = $event"
                @save="updateBgColor($event)"
            />
            <div class="container-fluid">
                <a href="#home" class="back-to-top smooth-scroll"
                    ><i class="fa fa-chevron-up"></i
                ></a>
                <p :contenteditable="isEditable">{{ footerAreaText }}</p>
            </div>
        </div>
        <!-- footer section end -->
    </div>
</template>

<script>
import axios from "axios";
import AddFieldModal from "../1Builder/components/form/AddFieldModal.vue";
import FormField from "../1Builder/components/form/FormField.vue";
import ButtonModal from "../1Builder/components/ButtonModal.vue";
import ImageModal from "../1Builder/components/ImageModal.vue";
import ColorPicker from "../1Builder/components/ColorPicker.vue";
import DynamicFormMethods from "../1Builder/components/form/DynamicFormMethods.js";
import OneBuilder from "../1Builder/1Builder.js";

export default {
    name: "Attar",
    props: ["user_template", "template", "is_editable"],
    components: {
        AddFieldModal,
        FormField,
        ButtonModal,
        ImageModal,
        ColorPicker,
    },
    data() {
        return {
            appUrl: window.location.origin,
            isEditable: false,

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
            newIngredient: "",

            // features area
            featuresAreaTitle: "",
            featuresAreaSubTitle: "",
            featureItems: [],
            featuresAreaBgColor: "",
            featuresAreaTextColor: "",

            // order area
            orderAreaTitle: "",
            orderAreaSubTitle: "",
            orderAreaButton: [],
            orderAreaBgColor: "",
            orderAreaTextColor: "",
            orderAreaFields: [],
            selectedShippingOption: "inside_dhaka",

            // footer area
            footerAreaText: "",
            footerAreaBgColor: "",
        };
    },
    computed: {
        subtotal() {
            const productPrice =
                parseFloat(this.user_template.product_price) || 0;
            const shippingCostInsideDhaka =
                parseFloat(this.user_template.shipping_cost_inside_dhaka) || 0;
            const shippingCostOutsideDhaka =
                parseFloat(this.user_template.shipping_cost_outside_dhaka) || 0;
            const shippingCost =
                this.selectedShippingOption === "inside_dhaka"
                    ? shippingCostInsideDhaka
                    : shippingCostOutsideDhaka;

            return (productPrice + shippingCost).toFixed(2);
        },
    },
    mounted() {
        this.isEditable = this.is_editable;
        let sections = this.user_template.template_sections;
        // console.log(sections);

        // menu area
        // this.menuItems = this.decodedData(
        //     this.getElement("header", "menu").data
        // );

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

        // order area
        let orderArea = this.getSection("order");
        let orderAreaElement = this.decodedData(
            this.getElement("order", "order").data
        );

        this.orderAreaTitle = orderArea.title;
        this.orderAreaSubTitle = orderArea.sub_title;
        this.orderAreaBgColor = orderArea.bg_color;
        this.orderAreaTextColor = orderArea.text_color;
        this.orderAreaFields = this.user_template.fields;
        this.orderAreaButton = orderAreaElement.button;

        // footer area
        let footerArea = this.getSection("footer");
        let footerAreaElement = this.decodedData(
            this.getElement("footer", "footer").data
        );

        this.footerAreaText = footerAreaElement.text;
        this.footerAreaBgColor = footerArea.bg_color;
    },
    methods: {
        ...DynamicFormMethods,
        ...OneBuilder,

        addIngredient() {
            if (this.newIngredient.trim()) {
                this.ingredientItems.push(this.newIngredient.trim());
                this.newIngredient = "";
            }

            this.updateIngredients();
        },

        removeIngredient(index) {
            this.ingredientItems.splice(index, 1);
            this.updateIngredients();
        },

        updateIngredients() {
            this.updateResource({
                section: "ingredients",
                element: "ingredients",
                storeData: "ingredientItems",
                image: null,
                prefix: "items",
                value: this.ingredientItems,
            });
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

/* Button Styles */
#hero .btnStyle {
    background-color: v-bind("heroAreaButton.color");
    color: v-bind("heroAreaButton.text_color");
    border-color: v-bind("heroAreaButton.border_color");
}

#hero .btnStyle:hover {
    background-color: v-bind("heroAreaButton.hover_color") !important;
    color: v-bind("heroAreaButton.hover_text_color");
    border-color: v-bind("heroAreaButton.hover_border_color");
}

#ingredients .btnStyle {
    background-color: v-bind("ingredientAreaButton.color");
    color: v-bind("ingredientAreaButton.text_color");
    border-color: v-bind("ingredientAreaButton.border_color");
}

#ingredients .btnStyle:hover {
    background-color: v-bind("ingredientAreaButton.hover_color") !important;
    color: v-bind("ingredientAreaButton.hover_text_color");
    border-color: v-bind("ingredientAreaButton.hover_border_color");
}

#order .btnStyle {
    background-color: v-bind("orderAreaButton.color");
    color: v-bind("orderAreaButton.text_color");
    border-color: v-bind("orderAreaButton.border_color");
}

#order .btnStyle:hover {
    background-color: v-bind("orderAreaButton.hover_color") !important;
    color: v-bind("orderAreaButton.hover_text_color");
    border-color: v-bind("orderAreaButton.hover_border_color");
}

.remove-feature {
    position: absolute;
    top: -12px;
    right: 30px;
    width: 26px;
    height: 26px;
    background: #000;
    color: #fff;
    border-radius: 50%;
    line-height: 25px;
    cursor: pointer;
}
</style>
