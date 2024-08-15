<template>
    <div>
        <div class="call-to-btn">
            <span class="material-icons-outlined me-1"> call </span>
            {{ footerArea.title }}
            <i
                class="fas fa-cog footer-gear-icon"
                data-bs-toggle="modal"
                data-bs-target="#footerModal"
                title="Footer Setup"
            ></i>
        </div>
    </div>
    <FooterModal :footerData="footerArea" @save="saveFooterArea" />

    <section id="single1">
        <div class="container">
            <SetupModal
                :colorData="siteColor"
                :logoData="favIcon"
                :companyName="userTemplate.company_name"
                @save="savePageSetup"
            />

            <div class="content">
                <div class="text-center">
                    <img
                        class="img-fluid mb-2"
                        width="100px"
                        :src="siteLogo"
                        alt="image"
                    />
                    <ImageModal
                        :modalId="'siteLogoUpdate'"
                        :modalTitle="'Edit Logo'"
                        :imgData="siteLogo"
                        @save="updateSiteLogo"
                    />

                    <div class="title primary_text_color">
                        <h2
                            class="elementor-heading-title elementor-size-default"
                            contenteditable="true"
                            @blur="updateHeroArea('title', $event)"
                        >
                            {{ heroArea.title }}
                        </h2>
                    </div>
                    <h2 class="tagline secondary_text_color">
                        <p
                            class="elementor-heading-title elementor-size-default"
                            contenteditable="true"
                            @blur="updateHeroArea('description', $event)"
                        >
                            {{ heroArea.description }}
                        </p>
                    </h2>

                    <a :href="heroArea?.button?.url" class="btn btn-order btn1">
                        {{ heroArea?.button?.title }}
                    </a>
                    <ButtonModal
                        :modalId="'heroAreaButton'"
                        :modalTitle="'Edit Hero Area Button'"
                        :buttonData="heroArea?.button"
                        @save="saveHeroArea"
                    />

                    <img class="banner-img" :src="heroImage" alt="image" />
                    <ImageModal
                        :modalId="'heroAreaImage'"
                        :modalTitle="'Edit Hero Area Image'"
                        :imgData="heroImage"
                        @save="updateHeroImage"
                    />

                    <h2 class="tagline secondary_text_color">
                        <p
                            class="elementor-heading-title elementor-size-default"
                            contenteditable="true"
                            @blur="updateHeroArea('bottom_description', $event)"
                        >
                            {{ heroArea.bottom_description }}
                        </p>
                    </h2>

                    <a
                        :href="heroArea?.bottom_button?.url"
                        class="btn btn-order btn2"
                    >
                        {{ heroArea?.bottom_button?.title }}
                    </a>
                    <ButtonModal
                        :modalId="'heroAreaBottomButton'"
                        :modalTitle="'Edit Hero Area Button'"
                        :buttonData="heroArea?.bottom_button"
                        @save="saveHeroArea"
                    />

                    <div
                        class="facility-title feature-title"
                        contenteditable="true"
                        @blur="updateFeaturesArea('title', $event)"
                    >
                        {{ featuresArea?.title }}
                    </div>
                    <ColorPicker
                        style="margin-top: -47px; margin-left: 10px"
                        :color="featuresArea?.background_color"
                        @update="featuresArea.background_color = $event"
                        @save="saveFeatureBgColor('background_color', $event)"
                    />

                    <div class="facilities">
                        <div class="left">
                            <div class="facilities">
                                <div class="row row-cols-1">
                                    <div>
                                        <div class="left">
                                            <ul
                                                class="elementor-icon-list-items"
                                            >
                                                <li
                                                    v-for="(
                                                        item, index
                                                    ) in featureList"
                                                    :key="item.id"
                                                    class="elementor-icon-list-item secondary_text_color"
                                                    contenteditable="true"
                                                    @blur="
                                                        updateFeatureAndStep(
                                                            item,
                                                            'feature'
                                                        )
                                                    "
                                                >
                                                    <span
                                                        class="elementor-icon-list-text"
                                                    >
                                                        {{ item.title }}
                                                    </span>
                                                    <div class="text-center">
                                                        <button
                                                            @click="
                                                                deleteFeatureOrStep(
                                                                    index,
                                                                    item.id,
                                                                    'feature'
                                                                )
                                                            "
                                                            class="btn btn-sm btn-danger rounded-circle ms-2"
                                                            title="Remove Item"
                                                        >
                                                            <i
                                                                class="fas fa-trash"
                                                            ></i>
                                                        </button>
                                                    </div>
                                                </li>
                                            </ul>
                                            <button
                                                @click="
                                                    addFeatureAndStepItem(
                                                        'feature'
                                                    )
                                                "
                                                class="btn btn-sm btn-info rounded"
                                                title="Add New Item"
                                            >
                                                <i class="fas fa-plus"></i>
                                                Add More
                                            </button>
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

                    <img
                        class="benifits-img shadow-lg"
                        :src="featureImage"
                        alt="image"
                    />
                    <ImageModal
                        :modalId="'featuresAreaImage'"
                        :modalTitle="'Edit Feature Area Image'"
                        :imgData="featureImage"
                        @save="updateFeaturesImage"
                    />

                    <div
                        class="facility-title mt-4 about-title"
                        contenteditable="true"
                        @blur="updateAboutArea('title', $event)"
                    >
                        {{ aboutArea?.title }}
                    </div>
                    <ColorPicker
                        style="margin-top: -47px; margin-left: 10px"
                        :color="aboutArea?.title_background_color"
                        @update="aboutArea.title_background_color = $event"
                        @save="
                            saveAboutBgColor('title_background_color', $event)
                        "
                    />

                    <div class="facilities">
                        <div class="left">
                            <ul class="elementor-icon-list-items">
                                <li
                                    v-for="(item, index) in stepList"
                                    :key="item.id"
                                    class="elementor-icon-list-item secondary_text_color"
                                    contenteditable="true"
                                    @blur="updateFeatureAndStep(item, 'step')"
                                >
                                    <span class="elementor-icon-list-text">
                                        {{ item.title }}
                                    </span>
                                    <div class="text-center">
                                        <button
                                            @click="
                                                deleteFeatureOrStep(
                                                    index,
                                                    item.id,
                                                    'step'
                                                )
                                            "
                                            class="btn btn-sm btn-danger rounded-circle ms-2"
                                            title="Remove Item"
                                        >
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </li>
                            </ul>
                            <button
                                @click="addFeatureAndStepItem('step')"
                                class="btn btn-sm btn-info rounded mb-2"
                                title="Add New Item"
                            >
                                <i class="fas fa-plus"></i>
                                Add More
                            </button>
                        </div>
                    </div>

                    <div class="price-detail">
                        <div
                            class="contact"
                            contenteditable="true"
                            @blur="updateAboutArea('sub_title', $event)"
                        >
                            {{ aboutArea?.sub_title }}
                        </div>
                        <ColorPicker
                            style="margin-top: -39px"
                            :color="aboutArea?.sub_title_background_color"
                            @update="
                                aboutArea.sub_title_background_color = $event
                            "
                            @save="
                                saveAboutBgColor(
                                    'sub_title_background_color',
                                    $event
                                )
                            "
                        />
                    </div>
                    <form
                        action="javascript:void(0)"
                        method="POST"
                        id="order"
                        class="order-form"
                    >
                        <legend
                            class="primary_text_color"
                            contenteditable="true"
                            @blur="updateOrderArea('title', $event)"
                        >
                            {{ orderArea?.title }}
                        </legend>

                        <div class="form-content text-start">
                            <div class="row row-cols-1 row-cols-md-2 gx-3 gy-2">
                                <div class="right">
                                    <div class="product content-section">
                                        <table class="w-100">
                                            <tr>
                                                <td width="50">
                                                    <img
                                                        class="w-100 banner-img"
                                                        :src="orderImage"
                                                        alt="image"
                                                    />
                                                </td>
                                                <div
                                                    style="position; relative; margin-left: -75px"
                                                >
                                                    <ImageModal
                                                        :modalId="'orderAreaImage'"
                                                        :modalTitle="'Edit Order Area Image'"
                                                        :imgData="orderImage"
                                                        @save="updateOrderImage"
                                                    />
                                                </div>
                                                <td>
                                                    <div class="ps-2">
                                                        <div
                                                            class="name secondary_text_color"
                                                            contenteditable="true"
                                                            @blur="
                                                                updateProductDetails(
                                                                    'product_name',
                                                                    $event
                                                                )
                                                            "
                                                        >
                                                            {{
                                                                userTemplate.product_name
                                                            }}
                                                        </div>
                                                        <div
                                                            class="tag secondary_text_color"
                                                            contenteditable="true"
                                                            @blur="
                                                                updateOrderArea(
                                                                    'product_tag',
                                                                    $event
                                                                )
                                                            "
                                                        >
                                                            {{
                                                                orderArea.product_tag
                                                            }}
                                                        </div>
                                                    </div>
                                                </td>
                                                <td
                                                    class="text-center secondary_text_color"
                                                >
                                                    &times;
                                                </td>
                                                <td
                                                    width="30"
                                                    class="text-center"
                                                >
                                                    <input
                                                        type="number"
                                                        min="1"
                                                        name="quantity"
                                                        value="1"
                                                        style="
                                                            width: 50px;
                                                            border: none;
                                                        "
                                                        class="secondary_text_color"
                                                        readonly
                                                    />
                                                </td>
                                                <td
                                                    width="50"
                                                    class="total-price text-end secondary_text_color"
                                                >
                                                    <span
                                                        class="me-1"
                                                        contenteditable="true"
                                                        @blur="
                                                            updateProductDetails(
                                                                'product_currency',
                                                                $event
                                                            )
                                                        "
                                                    >
                                                        {{
                                                            userTemplate.product_currency
                                                        }}
                                                    </span>
                                                    <span
                                                        contenteditable="true"
                                                        @blur="
                                                            updateProductDetails(
                                                                'product_price',
                                                                $event
                                                            )
                                                        "
                                                    >
                                                        {{
                                                            userTemplate.product_price
                                                        }}
                                                    </span>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div
                                        class="content-section vat primary_text_color"
                                    >
                                        <div
                                            class="d-flex justify-content-between top"
                                        >
                                            <span
                                                contenteditable="true"
                                                @blur="
                                                    updateOrderArea(
                                                        'shipping_charge_text',
                                                        $event
                                                    )
                                                "
                                            >
                                                {{
                                                    orderArea.shipping_charge_text
                                                }}
                                            </span>
                                            <span>
                                                {{
                                                    userTemplate.product_currency
                                                }}
                                                <span
                                                    contenteditable="true"
                                                    @blur="
                                                        updateProductDetails(
                                                            'shipping_cost',
                                                            $event
                                                        )
                                                    "
                                                >
                                                    {{
                                                        userTemplate.shipping_cost
                                                    }}
                                                </span>
                                            </span>
                                        </div>
                                        <div
                                            class="d-flex justify-content-between total secondary_text_color"
                                        >
                                            <span
                                                contenteditable="true"
                                                @blur="
                                                    updateOrderArea(
                                                        'subtotal_text',
                                                        $event
                                                    )
                                                "
                                            >
                                                {{ orderArea.subtotal_text }}
                                            </span>
                                            <span class="product-price">
                                                {{
                                                    userTemplate.product_currency
                                                }}
                                                {{ subtotal }}
                                            </span>
                                        </div>
                                    </div>

                                    <div class="content-section payment">
                                        <div
                                            class="d-flex align-items-center head secondary_text_color"
                                        >
                                            <span
                                                class="material-icons-outlined"
                                            >
                                                paid
                                            </span>
                                            <span
                                                contenteditable="true"
                                                @blur="
                                                    updateOrderArea(
                                                        'payment_title',
                                                        $event
                                                    )
                                                "
                                            >
                                                {{ orderArea.payment_title }}
                                            </span>
                                        </div>

                                        <div class="d-flex align-items-start">
                                            <input
                                                type="radio"
                                                checked
                                                name="delivery-area"
                                                class="form-check-input me-2"
                                                id="cashOnDelivery"
                                            />
                                            <div>
                                                <label
                                                    class="label m-0 secondary_text_color"
                                                    for="cashOnDelivery"
                                                    contenteditable="true"
                                                    @blur="
                                                        updateOrderArea(
                                                            'payment_sub_title',
                                                            $event
                                                        )
                                                    "
                                                >
                                                    {{
                                                        orderArea.payment_sub_title
                                                    }}
                                                </label>
                                                <div
                                                    class="tagline secondary_text_color"
                                                    contenteditable="true"
                                                    @blur="
                                                        updateOrderArea(
                                                            'payment_tag',
                                                            $event
                                                        )
                                                    "
                                                >
                                                    {{ orderArea.payment_tag }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="left">
                                    <div class="form">
                                        <div class="form-group">
                                            <label
                                                for=""
                                                class="primary_text_color"
                                                contenteditable="true"
                                                @blur="
                                                    updateOrderArea(
                                                        'customer_name_text',
                                                        $event
                                                    )
                                                "
                                            >
                                                {{
                                                    orderArea.customer_name_text
                                                }}
                                            </label>
                                            <input
                                                type="text"
                                                name="name"
                                                class="form-control"
                                            />
                                        </div>
                                        <div class="form-group">
                                            <label
                                                for=""
                                                class="primary_text_color"
                                                contenteditable="true"
                                                @blur="
                                                    updateOrderArea(
                                                        'customer_phone_text',
                                                        $event
                                                    )
                                                "
                                            >
                                                {{
                                                    orderArea.customer_phone_text
                                                }}
                                            </label>
                                            <input
                                                type="text"
                                                name="billing_phone"
                                                class="form-control"
                                            />
                                        </div>

                                        <div class="form-group">
                                            <label
                                                for=""
                                                class="primary_text_color"
                                                contenteditable="true"
                                                @blur="
                                                    updateOrderArea(
                                                        'delivery_address_text',
                                                        $event
                                                    )
                                                "
                                            >
                                                {{
                                                    orderArea.delivery_address_text
                                                }}
                                            </label>
                                            <textarea
                                                name="address"
                                                rows="2"
                                                class="form-control"
                                            ></textarea>
                                        </div>

                                        <!-- <div
                                            v-for="(field, index) in fields"
                                            :key="index"
                                        >
                                            <p>Field Name: {{ field.name }}</p>
                                            <p>Field Type: {{ field.type }}</p>
                                            <p v-if="field.options.length">
                                                Options:
                                                {{ field.options.join(", ") }}
                                            </p>
                                        </div> -->
                                        <FormField
                                            :styles="{
                                                color: siteColor?.primary_text_color,
                                                background_color:
                                                    siteColor?.background_color,
                                            }"
                                            v-for="(field, index) in fields"
                                            :key="index"
                                            :field="field"
                                            @delete="deleteField(index, $event)"
                                        />

                                        <AddInputModal
                                            :modalId="'addInputModal'"
                                            :modalTitle="'Edit Dynamic Form'"
                                            @save="addField"
                                        />

                                        <div class="right">
                                            <button
                                                class="btn submit-btn bg-danger"
                                            >
                                                {{ orderArea?.button?.title }}
                                            </button>
                                            <ButtonModal
                                                :modalId="'orderAreaBottomButton'"
                                                :modalTitle="'Edit Order Area Button'"
                                                :buttonData="orderArea?.button"
                                                @save="saveOrderArea"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <p class="p-5">
                <!-- empty -->
            </p>
        </div>
    </section>
</template>

<script>
import axios from "axios";
import ButtonModal from "../components/button-modal.vue";
import ImageModal from "../components/image-modal.vue";
import ColorPicker from "../components/color-picker.vue";
import SetupModal from "./components/setup-modal.vue";
import FooterModal from "./components/footer-modal.vue";
import AddInputModal from "../components/add-input-modal.vue";
import FormField from "../components/form-field.vue";

export default {
    name: "Seedee",
    props: ["user_template", "template"],
    components: {
        ButtonModal,
        ImageModal,
        ColorPicker,
        SetupModal,
        FooterModal,
        AddInputModal,
        FormField,
    },
    data() {
        return {
            userTemplate:
                this.user_template != null ? this.user_template : null,
            heroArea:
                this.template.hero_area != null
                    ? JSON.parse(this.template.hero_area)
                    : null,
            featuresArea:
                this.template.features_area != null
                    ? JSON.parse(this.template.features_area)
                    : null,
            aboutArea:
                this.template.about_area != null
                    ? JSON.parse(this.template.about_area)
                    : null,
            orderArea:
                this.template.order_area != null
                    ? JSON.parse(this.template.order_area)
                    : null,
            footerArea:
                this.template.footer_area != null
                    ? JSON.parse(this.template.footer_area)
                    : null,
            heroImage: "",
            featureImage: "",
            orderImage: "",
            appUrl: `${window.location.origin}`,
            apiUrl: `${window.location.origin}/app/templates/seedee`,
            featureList: this.template?.features,
            stepList: this.template?.steps,
            siteColor:
                this.template.color != null
                    ? JSON.parse(this.template.color)
                    : null,
            siteLogo: "",
            favIcon: "",
            fields: [],
        };
    },
    computed: {
        subtotal() {
            const productPrice =
                parseFloat(this.userTemplate.product_price) || 0;
            const shippingCost =
                parseFloat(this.userTemplate.shipping_cost) || 0;
            return (productPrice + shippingCost).toFixed(2);
        },
    },
    mounted() {
        this.heroImage =
            this.heroArea != null && this.heroArea.image
                ? this.imageSource(this.heroArea.image, "storage")
                : this.imageSource("images/product1.png");
        this.featureImage =
            this.featuresArea != null && this.featuresArea.image
                ? this.imageSource(this.featuresArea.image, "storage")
                : this.imageSource("images/product2.jpg");
        this.orderImage =
            this.orderArea != null && this.orderArea.image
                ? this.imageSource(this.orderArea.image, "storage")
                : this.imageSource("images/product1.png");
        this.siteLogo =
            this.user_template != null && this.user_template.company_logo
                ? this.imageSource(this.user_template.company_logo, "storage")
                : this.imageSource("images/favicon.png");
        this.favIcon =
            this.user_template != null && this.user_template.fav_icon
                ? this.imageSource(this.user_template.fav_icon, "storage")
                : this.imageSource("images/favicon.png");

        this.fields = this.userTemplate?.fields;
    },
    beforeDestroy() {},
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

        updateHeroArea(key, event) {
            const newValue = event.target.textContent.trim();
            if (this.heroArea[key] == newValue) {
                return;
            }
            this.heroArea[key] = newValue;

            // Save the updated hero area when the user blurs out
            this.saveHeroArea();
        },

        updateFeaturesArea(key, event) {
            const newValue = event.target.textContent.trim();
            if (this.featuresArea[key] == newValue) {
                return;
            }
            this.featuresArea[key] = newValue;

            // Save the updated features area when the user blurs out
            this.saveFeaturesArea();
        },

        updateAboutArea(key, event) {
            const newValue = event.target.textContent.trim();
            if (this.aboutArea[key] == newValue) {
                return;
            }
            this.aboutArea[key] = newValue;

            // Save the updated about area when the user blurs out
            this.saveAboutArea();
        },

        updateOrderArea(key, event) {
            const newValue = event.target.textContent.trim();
            if (this.orderArea[key] == newValue) {
                return;
            }
            this.orderArea[key] = newValue;

            // Save the updated about area when the user blurs out
            this.saveOrderArea();
        },

        saveHeroArea() {
            axios
                .post(`${this.apiUrl}/update-content-area`, {
                    hero_area: JSON.stringify(this.heroArea),
                })
                .then((response) => {
                    if (response.data.success) {
                        this.toast("success", "Updated successfully");
                    } else {
                        this.toast("error", "Failed to update");
                    }
                })
                .catch((error) => {
                    this.toast("error", "Error updating:", error);
                });
        },

        saveFeaturesArea() {
            axios
                .post(`${this.apiUrl}/update-content-area`, {
                    features_area: JSON.stringify(this.featuresArea),
                })
                .then((response) => {
                    if (response.data.success) {
                        this.toast("success", "Updated successfully");
                    } else {
                        this.toast("error", "Failed to update");
                    }
                })
                .catch((error) => {
                    this.toast("error", "Error updating:", error);
                });
        },

        saveAboutArea() {
            axios
                .post(`${this.apiUrl}/update-content-area`, {
                    about_area: JSON.stringify(this.aboutArea),
                })
                .then((response) => {
                    if (response.data.success) {
                        this.toast("success", "Updated successfully");
                    } else {
                        this.toast("error", "Failed to update");
                    }
                })
                .catch((error) => {
                    this.toast("error", "Error updating:", error);
                });
        },

        saveOrderArea() {
            axios
                .post(`${this.apiUrl}/update-content-area`, {
                    order_area: JSON.stringify(this.orderArea),
                })
                .then((response) => {
                    if (response.data.success) {
                        this.toast("success", "Updated successfully");
                    } else {
                        this.toast("error", "Failed to update");
                    }
                })
                .catch((error) => {
                    this.toast("error", "Error updating:", error);
                });
        },

        updateSiteLogo(imageFile) {
            const formData = new FormData();
            formData.append("image", imageFile);

            axios
                .post(`${this.apiUrl}/update-site-logo`, formData)
                .then((response) => {
                    this.siteLogo = this.imageSource(
                        response.data.imagePath,
                        "storage"
                    );
                    this.toast("success", "Updated successfully");
                })
                .catch((error) => {
                    this.toast("error", "Error updating the image:", error);
                });
        },

        updateHeroImage(imageFile) {
            const formData = new FormData();
            formData.append("image", imageFile);

            axios
                .post(`${this.apiUrl}/update-hero-image`, formData)
                .then((response) => {
                    this.heroArea.image = response.data.imagePath;
                    this.saveHeroArea();
                    this.heroImage = this.imageSource(
                        this.heroArea.image,
                        "storage"
                    );
                })
                .catch((error) => {
                    this.toast("error", "Error updating the image:", error);
                });
        },

        updateFeaturesImage(imageFile) {
            const formData = new FormData();
            formData.append("image", imageFile);

            axios
                .post(`${this.apiUrl}/update-feature-image`, formData)
                .then((response) => {
                    this.featuresArea.image = response.data.imagePath;
                    this.saveFeaturesArea();
                    this.featureImage = this.imageSource(
                        this.featuresArea.image,
                        "storage"
                    );
                })
                .catch((error) => {
                    this.toast("error", "Error updating the image:", error);
                });
        },

        updateOrderImage(imageFile) {
            const formData = new FormData();
            formData.append("image", imageFile);

            axios
                .post(`${this.apiUrl}/update-order-image`, formData)
                .then((response) => {
                    this.orderArea.image = response.data.imagePath;
                    this.saveOrderArea();
                    this.orderImage = this.imageSource(
                        this.orderArea.image,
                        "storage"
                    );
                })
                .catch((error) => {
                    this.toast("error", "Error updating the image:", error);
                });
        },

        updateProductDetails(key, event) {
            const newValue = event.target.textContent.trim();
            if (this.userTemplate[key] == newValue) {
                return;
            }
            this.userTemplate[key] = newValue;

            // Save the updated product area when the user blurs out
            this.saveProductDetails();
        },

        saveProductDetails() {
            axios
                .post(`${this.apiUrl}/update-product-details`, {
                    product_name: this.userTemplate.product_name,
                    product_price: this.userTemplate.product_price,
                    product_currency: this.userTemplate.product_currency,
                    shipping_cost: this.userTemplate.shipping_cost,
                })
                .then((response) => {
                    if (response.data.success) {
                        this.toast("success", "Updated successfully");
                    } else {
                        this.toast("error", "Failed to update");
                    }
                })
                .catch((error) => {
                    this.toast("error", "Error updating:", error);
                });
        },

        updateFeatureAndStep(item, type) {
            const updatedTitle = event.target.textContent.trim();
            if (item.title == updatedTitle) {
                return;
            }
            item.title = updatedTitle;

            axios
                .post(`${this.apiUrl}/update-feature-and-step`, {
                    id: item.id,
                    title: updatedTitle,
                    type: type,
                })
                .then((response) => {
                    if (response.data.success) {
                        this.toast("success", "Updated successfully");
                    } else {
                        this.toast("error", "Failed to update");
                    }
                })
                .catch((error) => {
                    this.toast("error", "Error updating:", error);
                });
        },

        addFeatureAndStepItem(type) {
            axios
                .post(`${this.apiUrl}/add-feature-or-step`, {
                    type: type,
                })
                .then((response) => {
                    // Add the new item to the list
                    if (type == "feature") {
                        this.featureList.push(response.data.newItem);
                    } else {
                        this.stepList.push(response.data.newItem);
                    }
                    this.toast("success", "Item added successfully");
                })
                .catch((error) => {
                    this.toast("error", "Error adding item");
                });
        },

        deleteFeatureOrStep(index, id, type) {
            // Optionally delete the item from the database
            axios
                .post(`${this.apiUrl}/delete-feature-or-step`, {
                    id: id,
                    type: type,
                })
                .then((response) => {
                    // Remove the item from the list
                    if (type == "feature") {
                        this.featureList.splice(index, 1);
                    } else {
                        this.stepList.splice(index, 1);
                    }
                    this.toast("success", "Item deleted successfully");
                })
                .catch((error) => {
                    this.toast("error", "Error deleting item:", error);
                });
        },

        saveAboutBgColor(key, data) {
            this.aboutArea[key] = data;
            this.saveAboutArea();
        },

        saveFeatureBgColor(key, data) {
            this.featuresArea[key] = data;
            this.saveFeaturesArea();
        },

        savePageSetup(data) {
            const { siteTitle, selectedImage } = data;

            const formData = new FormData();
            formData.append("image", selectedImage);
            formData.append("company_name", siteTitle);
            formData.append("color", JSON.stringify(this.siteColor));

            axios
                .post(`${this.apiUrl}/update-page-setup`, formData)
                .then((response) => {
                    if (response.data.success) {
                        if (response.data.imagePath) {
                            this.favicon = this.imageSource(
                                response.data.imagePath,
                                "storage"
                            );
                        }
                        this.toast("success", "Updated successfully");
                    } else {
                        this.toast(
                            "error",
                            "Failed to update: " + response.data.message
                        );
                    }
                })
                .catch((error) => {
                    this.toast("error", "Error updating:", error);
                });
        },

        saveFooterArea() {
            axios
                .post(`${this.apiUrl}/update-content-area`, {
                    footer_area: JSON.stringify(this.footerArea),
                })
                .then((response) => {
                    if (response.data.success) {
                        this.toast("success", "Updated successfully");
                    } else {
                        this.toast("error", "Failed to update");
                    }
                })
                .catch((error) => {
                    this.toast("error", "Error updating:", error);
                });
        },

        addField(field) {
            // console.log(field, field.name, field.title);

            axios
                .post(`${this.appUrl}/app/dynamic-form/add-input-field`, {
                    user_template_id: this.userTemplate.id,
                    title: field.title,
                    name: field.name,
                    type: field.type,
                    is_required: field.required,
                    options:
                        field.options.length > 0
                            ? JSON.stringify(field.options)
                            : null,
                })
                .then((response) => {
                    // console.log(response);
                    if (response.data.success) {
                        this.fields.push(response.data.field);
                        this.toast("success", "Updated successfully");
                    } else {
                        this.toast("error", "Failed to update");
                    }
                })
                .catch((error) => {
                    this.toast("error", "Error updating:", error);
                });
        },
        deleteField(index, field) {
            axios
                .post(`${this.appUrl}/app/dynamic-form/delete-input-field`, {
                    id: field.id,
                })
                .then((response) => {
                    if (response.data.success) {
                        this.fields.splice(index, 1);
                        this.toast("success", "Updated successfully");
                    } else {
                        this.toast("error", "Failed to update");
                    }
                });
        },
    },
};
</script>

<style scoped>
#single1 .content .btn-order.btn1 {
    background-color: v-bind("heroArea.button.color");
    color: v-bind("heroArea.button.text_color");
    border-color: v-bind("heroArea.button.border_color");
}

#single1 .content .btn-order.btn1:hover {
    background-color: v-bind("heroArea.button.hover_color") !important;
    color: v-bind("heroArea.button.hover_text_color");
    border-color: v-bind("heroArea.button.hover_border_color");
}

#single1 .content .btn-order.btn2 {
    background-color: v-bind("heroArea.bottom_button.color");
    color: v-bind("heroArea.bottom_button.text_color");
    border-color: v-bind("heroArea.bottom_button.border_color");
}

#single1 .content .btn-order.btn2:hover {
    background-color: v-bind("heroArea.bottom_button.hover_color") !important;
    color: v-bind("heroArea.bottom_button.hover_text_color");
    border-color: v-bind("heroArea.bottom_button.hover_border_color");
}

#single1 .content .form-content .right .submit-btn {
    background-color: v-bind("orderArea.button.color") !important;
    color: v-bind("orderArea.button.text_color") !important;
    border-color: v-bind("orderArea.button.border_color") !important;
}

#single1 .content .form-content .right .submit-btn:hover {
    background-color: v-bind("orderArea.button.hover_color") !important;
    color: v-bind("orderArea.button.hover_text_color") !important;
    border-color: v-bind("orderArea.button.hover_border_color") !important;
}

.btn-info:hover,
.btn-danger:hover,
.footer-gear-icon:hover {
    box-shadow: 0 4px 8px rgba(135, 135, 135, 0.6),
        0 6px 20px rgba(145, 145, 145, 0.5);
}

#single1 .content .price-detail {
    background: v-bind("aboutArea?.sub_title_background_color");
}

#single1 .content .about-title {
    background: v-bind("aboutArea?.title_background_color");
}

#single1 .content .feature-title {
    background: v-bind("featuresArea?.background_color");
}

#single1 {
    margin-top: -70px !important;
    padding-top: 70px !important;
    margin-bottom: -15px !important;
    background-color: v-bind("siteColor?.background_color") !important;
}

body {
    background-color: v-bind("siteColor?.background_color");
}

#single1 .content {
    background-color: v-bind("siteColor?.foreground_color");
}

#single1 .content .facility-title,
#single1 .content .price-detail .contact {
    color: v-bind("siteColor?.foreground_color");
}

#single1 .content .form-content,
#single1 .content .form-content .left .form .form-group .form-control {
    background-color: v-bind("siteColor?.background_color");
}

#single1 .content .form-content .right .content-section,
#single1 .content .form-content .left .form,
#single1 .content .form-content input {
    background-color: v-bind("siteColor?.foreground_color");
}

.footer-gear-icon {
    position: absolute;
    margin-top: -45px;
    right: 0;
    background: #0d6efd;
    color: #ffffff;
    padding: 5px;
    border-radius: 50%;
    cursor: pointer;
    transition: box-shadow 0.3s ease;
}

.call-to-btn {
    background: v-bind("footerArea?.background_color");
    color: v-bind("footerArea?.color");
}

.primary_text_color {
    color: v-bind("siteColor?.primary_text_color") !important;
}

.secondary_text_color {
    color: v-bind("siteColor?.secondary_text_color") !important;
}
</style>
