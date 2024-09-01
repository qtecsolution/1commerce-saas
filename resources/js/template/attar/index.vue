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
                        :contenteditable="isEditable"
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
            class="m-center text-center full-height"
            style="height: 752px"
            :style="{ 'background-color': heroAreaBgColor }"
        >
            <ColorPicker
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
                        <a class="btn white" :href="heroAreaButton.url">{{
                            heroAreaButton.title
                        }}</a>
                    </div>
                </div>
                <div class="col-md-8 offset-md-2 img-hero mb-4">
                    <img
                        :src="
                            imageSource(
                                heroAreaImage
                                    ? heroAreaImage
                                    : '/images/mockup4.png',
                                heroAreaImage ? 'storage' : 'public'
                            )
                        "
                        alt=""
                        class="img-fluid"
                    />
                    <ImageModal
                        :modalId="'heroImageModal'"
                        :modalTitle="'Edit Hero Area Image'"
                        :image="
                            imageSource(
                                heroAreaImage
                                    ? heroAreaImage
                                    : '/images/mockup4.png',
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
                                        : '/images/cup4.jpg',
                                    ingredientAreaImage ? 'storage' : 'public'
                                )
                            "
                            alt=""
                            height="100%"
                        />

                        <ImageModal
                            :modalId="'ingredientImageModal'"
                            :modalTitle="'Edit Ingredient Area Image'"
                            :image="
                                imageSource(
                                    ingredientAreaImage
                                        ? ingredientAreaImage
                                        : '/images/cup4.jpg',
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
                                            :contenteditable="isEditable"
                                            v-for="ingredient in ingredientItems"
                                            :key="ingredient.id"
                                            v-on:change="updateIngredients"
                                        >
                                            {{ ingredient }}
                                        </li>
                                    </ul>

                                    <!-- Input to add new ingredients -->
                                    <div class="row mb-5">
                                        <div class="col">
                                            <input
                                            v-model="newIngredient"
                                            placeholder="Add new ingredient"
                                            @keyup.enter="addIngredient"
                                            class="form-control"
                                        />
                                        </div>

                                        <div @click="addIngredient" class="bg-primary py-1 px-2 rounded text-white">
                                            Add Ingredient
                                        </div>
                                    </div>
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
        <section
            id="features"
            class="features-1"
            :style="{ 'background-color': featuresAreaBgColor }"
        >
            <ColorPicker
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
                                <div>
                                    <img
                                        :src="getFeatureImage(feature, index)"
                                        alt="#"
                                        class="zoom-img img-fluid center-block"
                                    />

                                    <ImageModal
                                        :modalId="`feature${
                                            index + 1
                                        }ImageModal`"
                                        modalTitle="Edit Feature Area Image"
                                        :image="getFeatureImage(feature, index)"
                                        section="features"
                                        element="features"
                                        :storeData="`featureItems[${index}]`"
                                        @save="saveFeature"
                                    />
                                </div>
                                <h3 :contenteditable="isEditable">
                                    ​{{ feature.title }}
                                </h3>
                                <p :contenteditable="isEditable">
                                    {{ feature.description }}
                                </p>
                            </article>
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
                        <div id="alert-contact">
                            <div class="alert alert-success" role="alert">
                                <strong>Order placed successfully.</strong>
                            </div>
                        </div>

                        <div class="ms-card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div
                                        class="col-md-8"
                                        :contenteditable="isEditable"
                                    >
                                        {{
                                            this.user_template.product_name ??
                                            ""
                                        }}
                                    </div>
                                    <div class="col-md-4 text-right">
                                        <span
                                            style="margin-right: 5px"
                                            :contenteditable="isEditable"
                                            >{{
                                                this.user_template
                                                    .product_currency ?? "৳"
                                            }}</span
                                        >
                                        <span :contenteditable="isEditable">{{
                                            this.user_template.product_price ??
                                            0
                                        }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <form
                            id="contact-form"
                            action="#"
                            class="myform"
                            method="post"
                            novalidate=""
                        >
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
                                :is_deletable="index >= 4"
                            />

                            <AddInputModal
                                :modalId="'addInputModal'"
                                :modalTitle="'Add Dynamic Form'"
                                @save="addOrderAreaField"
                            />

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
        <div
            class="footer-1 text-center position-relative"
            :style="{ 'background-color': footerAreaBgColor }"
        >
            <ColorPicker
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
import AddInputModal from "../components/add-input-modal.vue";
import FormField from "../components/form-field.vue";
import DynamicFormMethods from "../components/DynamicFormMethods";
import ButtonModal from "../components/button-modal.vue";
import ImageModal from "../components/ImageModal.vue";
import ColorPicker from "../components/ColorPicker.vue";

export default {
    name: "Attar",
    props: ["user_template", "template"],
    components: {
        AddInputModal,
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

            // footer area
            footerAreaText: "",
            footerAreaBgColor: "",
        };
    },
    mounted() {
        this.isEditable = true;
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

        getFeatureImage(feature, index) {
            const imagePath = feature.image
                ? feature.image
                : `/images/demo${index + 1}.jpg`;
            const storageType = feature.image ? "storage" : "public";
            return this.imageSource(imagePath, storageType);
        },

        updateImage(data) {
            console.log(data);

            let section = data.section;
            let element = data.element;
            let imageFile = data.image;
            let storeData = data.storeData;

            // check if element is exist or not
            let findSection = this.getSection(section);
            let findElement = this.getElement(section, element);
            if (!findElement) {
                this.toast("error", "Element not found.");
                return false;
            }

            const formData = new FormData();
            formData.append("image", imageFile);
            formData.append("name", element);

            axios
                .post(
                    `${this.appUrl}/app/templates/element/update/${findElement.template_section_id}`,
                    formData
                )
                .then((response) => {
                    console.log(response.data);

                    (this[storeData] = response.data.image), "storage";

                    this.toast("success", "Resource updated successfully.");
                })
                .catch((error) => {
                    console.error(error);

                    this.toast(
                        "error",
                        "Something went wrong. Please try again."
                    );
                });
        },

        saveFeature(data) {
            console.log(data);

            let section = data.section;
            let element = data.element;
            let imageFile = data.image;
            let storeData = data.storeData;

            // Check if the feature exists
            let findFeature = this.getNestedProperty(this, storeData) ?? null;
            if (!findFeature) {
                this.toast("error", "Feature not found.");
                return false;
            }

            const formData = new FormData();
            formData.append("id", findFeature.id ?? null);
            formData.append("image", imageFile);

            axios
                .post(`${this.appUrl}/app/templates/feature/save`, formData)
                .then((response) => {
                    console.log(response.data);
                    let updatedFeature = response.data.feature;

                    // Find the index of the feature in the featureItems array
                    const featureIndex = this.featureItems.findIndex(
                        (item) => item.id === findFeature.id
                    );

                    if (featureIndex !== -1) {
                        // Directly update the feature at the found index
                        this.featureItems.splice(
                            featureIndex,
                            1,
                            updatedFeature
                        );
                    } else {
                        // If not found, push the new feature
                        this.featureItems.push(updatedFeature);
                    }

                    this.toast("success", "Resource updated successfully.");
                })
                .catch((error) => {
                    console.error(error);
                    this.toast(
                        "error",
                        "Something went wrong. Please try again."
                    );
                });
        },

        getNestedProperty(obj, path) {
            // Split the string path into segments, e.g., 'featureItems[0]' becomes ['featureItems', '0']
            const keys = path.replace(/\[(\w+)\]/g, ".$1").split(".");

            // Traverse through the object based on the keys
            return keys.reduce((o, key) => (o ? o[key] : undefined), obj);
        },

        updateContent(event) {
            const rawContent =
                event.target.innerHTML ?? event.target.textContent;
            const sanitizedContent = rawContent.replace(/&nbsp;/g, " ");

            return sanitizedContent;
        },

        updateTitle(section, storeData, event) {
            const newValue = event.target.textContent.trim();
            if (this.orderSubTitle == newValue) {
                return;
            }

            this[storeData] = this.updateContent(event);
            // console.log(this[storeData]);

            this.updateSection(section, "title", this[storeData]);
        },

        updateSubTitle(section, storeData, event) {
            const newValue = event.target.textContent.trim();
            if (this.orderSubTitle == newValue) {
                return;
            }

            this[storeData] = this.updateContent(event);
            // console.log(this[storeData]);

            this.updateSection(section, "sub_title", this[storeData]);
        },

        updateDescription(section, element, storeData, event) {
            const newValue = event.target.textContent.trim();
            if (this.orderSubTitle == newValue) {
                return;
            }

            this[storeData] = this.updateContent(event);
            // console.log(this[storeData]);

            this.updateResource({
                section: section,
                element: element,
                storeData: storeData,
                image: null,
                prefix: "description",
                value: this[storeData]
            });
        },

        addIngredient() {
            if (this.newIngredient.trim()) {
                this.ingredientItems.push(this.newIngredient.trim());
                this.newIngredient = ""; // Clear the input after adding
            }

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

        updateBgColor(data) {
            this.updateSection(data.section, "bg_color", data.color);
        },

        updateSection(section, prefix, data) {
            let findSection = this.getSection(section);
            if (!findSection) {
                this.toast("error", "Section not found.");
                return false;
            }

            let formData = new FormData();
            formData.append(prefix, data);

            axios
                .post(
                    `${this.appUrl}/app/templates/section/update/${findSection.id}`,
                    formData
                )
                .then((response) => {
                    console.log(response.data);
                    this.toast("success", "Section updated successfully.");
                })
                .catch((error) => {
                    console.error(error);
                    this.toast(
                        "error",
                        "Something went wrong. Please try again."
                    );
                });
        },

        updateResource(data) {
            // console.log(data);

            let section = data.section;
            let element = data.element;
            let imageFile = data.image || null;
            let prefix = data.prefix || "image"; // Default to "image" if prefix isn't provided
            let value = data.value || null;
            let storeData = data.storeData || null;

            // Check if section exists
            let findSection = this.getSection(section);
            if (!findSection) {
                this.toast("error", "Section not found.");
                return false;
            }

            // Check if element exists
            let findElement = this.getElement(findSection.section, element);
            if (!findElement) {
                this.toast("error", "Element not found.");
                return false;
            }

            const formData = new FormData();
            if (imageFile) {
                formData.append("image", imageFile);
            }
            formData.append("name", element);
            formData.append("prefix", prefix);
            formData.append("value", value);

            axios
                .post(
                    `${this.appUrl}/app/templates/element/update/${findSection.id}`,
                    formData
                )
                .then((response) => {
                    console.log(response.data);
                    this[storeData] = response.data[prefix];

                    this.toast("success", `${prefix} updated successfully.`);
                })
                .catch((error) => {
                    console.error(error);
                    this.toast(
                        "error",
                        "Something went wrong. Please try again."
                    );
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
</style>
