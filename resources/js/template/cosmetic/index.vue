<template>
    <!-- hero area start -->
    <header id="hero">
        <div class="header_bg">
            <!-- header inner -->
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div
                            class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section"
                        >
                            <div class="full">
                                <div class="center-desk">
                                    <div class="logo">
                                        <a href="javascript:void(0)">
                                            <img
                                                :src="
                                                    imageSource(
                                                        headerAreaLogo
                                                            ? headerAreaLogo
                                                            : '/images/logo.png',
                                                        headerAreaLogo
                                                            ? 'storage'
                                                            : 'public'
                                                    )
                                                "
                                                alt="logo"
                                                width="80px"
                                            />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                            <ul class="customer">
                                <li
                                    contenteditable="true"
                                    @blur="
                                        updateResource({
                                            section: 'header',
                                            element: 'header',
                                            storeData: 'headerAreaContact',
                                            prefix: 'contact',
                                            value: $event.target.innerText,
                                        })
                                    "
                                >
                                    {{ headerAreaContact }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end header inner -->

            <!-- banner -->
            <section class="banner_main">
                <div class="container-fluid">
                    <div class="row d_flex">
                        <div class="col-md-6">
                            <div class="text-bg">
                                <span
                                    contenteditable="true"
                                    @blur="
                                        updateSubTitle(
                                            'hero',
                                            'heroAreaSubTitle',
                                            $event
                                        )
                                    "
                                    >{{ heroAreaSubTitle }}</span
                                >
                                <h1
                                    contenteditable="true"
                                    @blur="
                                        updateTitle(
                                            'hero',
                                            'heroAreaTitle',
                                            $event
                                        )
                                    "
                                >
                                    {{ heroAreaTitle }}
                                </h1>
                                <p
                                    contenteditable="true"
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
                                <a :href="heroAreaButton.url" class="btnStyle"
                                    >{{ heroAreaButton.title }}
                                </a>
                                <ButtonModal
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
                        <div class="col-md-6">
                            <div class="text-img">
                                <figure>
                                    <img
                                        :src="
                                            imageSource(
                                                heroAreaImage
                                                    ? heroAreaImage
                                                    : '/images/img.png',
                                                heroAreaImage
                                                    ? 'storage'
                                                    : 'public'
                                            )
                                        "
                                        style="border-radius: 50%; width: 600px"
                                    />
                                    <ImageModal
                                        :modalId="'heroImageModal'"
                                        :modalTitle="'Edit Hero Area Image'"
                                        :image="
                                            imageSource(
                                                heroAreaImage
                                                    ? heroAreaImage
                                                    : '/images/img.png',
                                                heroAreaImage
                                                    ? 'storage'
                                                    : 'public'
                                            )
                                        "
                                        section="hero"
                                        element="hero"
                                        storeData="heroAreaImage"
                                        @save="updateResource"
                                    />
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end banner -->
        </div>
    </header>
    <!-- hero area end -->

    <!-- information area start -->
    <div class="quality">
        <div class="container">
            <div class="row d_flex">
                <div class="col-md-8">
                    <div class="quality_box">
                        <figure>
                            <img
                                :src="
                                    imageSource(
                                        informationImage
                                            ? informationImage
                                            : '/images/qt.jpg',
                                        informationImage ? 'storage' : 'public'
                                    )
                                "
                                alt="product"
                            />
                            <ImageModal
                                :modalId="'informationImageModal'"
                                :modalTitle="'Edit Information Area Image'"
                                :image="
                                    imageSource(
                                        informationImage
                                            ? informationImage
                                            : '/images/qt.jpg',
                                        informationImage ? 'storage' : 'public'
                                    )
                                "
                                section="information"
                                element="information"
                                storeData="informationImage"
                                @save="updateResource"
                            />
                        </figure>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="quality_text position-relative">
                        <h3
                            contenteditable="true"
                            @blur="
                                updateTitle(
                                    'information',
                                    'informationTitle',
                                    $event
                                )
                            "
                        >
                            {{ informationTitle }}
                        </h3>
                        <ul>
                            <li
                                v-for="(item, index) in informationItems"
                                :key="index"
                            >
                                <span
                                    contenteditable="true"
                                    v:alue="item"
                                    @blur="updateInformation(index, $event)"
                                    >{{ item }}</span
                                >
                                <i
                                    @click="removeInformation(index)"
                                    class="fas fa-times ml-2"
                                ></i>
                            </li>
                        </ul>

                        <!-- Input to add new ingredients -->
                        <div class="row mt-5">
                            <div class="col">
                                <input
                                    v-model="newInformation"
                                    placeholder="Add new information"
                                    class="form-control"
                                />
                            </div>

                            <div
                                @click="addInformation"
                                class="bg-primary py-1 px-2 rounded text-white"
                            >
                                Add
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- information area end -->

    <!-- slider area start -->
    <div class="customers">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2
                            contenteditable="true"
                            @blur="
                                updateTitle('slider', 'sliderAreaTitle', $event)
                            "
                        >
                            {{ sliderAreaTitle }}
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div
                    id="myCarousel"
                    class="carousel slide banner2"
                    data-ride="carousel"
                >
                    <ol class="carousel-indicators">
                        <li
                            data-target="#myCarousel"
                            data-slide-to="0"
                            class="active"
                        ></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div
                            v-for="(item, index) in sliderItems"
                            :key="index"
                            :class="['carousel-item', { active: index === 0 }]"
                        >
                            <div
                                class="slider-update-btn"
                                data-toggle="modal"
                                :data-target="'#sliderModal' + index"
                            >
                                <i class="fas fa-pen"></i>
                            </div>
                            <!-- <div
                                class="slider-add-btn"
                                data-toggle="modal"
                                :data-target="'#sliderAddModal' + index"
                            >
                                <i class="fas fa-plus"></i>
                            </div> -->
                            <div class="container">
                                <div class="carousel-caption">
                                    <figure>
                                        <img
                                            :src="
                                                imageSource(
                                                    item.image
                                                        ? item.image
                                                        : '/images/banner' +
                                                              (index + 1) +
                                                              '.jpg',
                                                    item.image
                                                        ? 'storage'
                                                        : 'public'
                                                )
                                            "
                                            :alt="'banner ' + (index + 1)"
                                            style="
                                                height: 500px;
                                                width: 900px;
                                                border-radius: 20px;
                                            "
                                        />
                                    </figure>
                                    <p>{{ item.description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div
        class="modal fade"
        :id="'sliderModal' + index"
        tabindex="-1"
        :aria-labelledby="'sliderModalLabel' + index"
        aria-hidden="true"
        v-for="(item, index) in sliderItems"
        :key="index"
    >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" :id="'sliderModalLabel' + index">
                        Slider {{ index + 1 }}
                    </h5>
                    <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                    >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <img
                            :src="
                                imageSource(
                                    item.image
                                        ? item.image
                                        : '/images/banner' +
                                              (index + 1) +
                                              '.jpg',
                                    item.image ? 'storage' : 'public'
                                )
                            "
                            alt=""
                            class="img-fluid"
                        />
                        <label for="" class="mt-2 d-block">Image:</label>
                        <input
                            type="file"
                            class="form-control"
                            accept="image/*"
                            @change="updateSlidersImage(index, $event)"
                        />
                    </div>
                    <div class="form-group">
                        <label for="">Description:</label>
                        <textarea
                            rows="5"
                            class="form-control"
                            v-model="item.description"
                            >{{ item.description }}</textarea
                        >
                    </div>
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-dismiss="modal"
                    >
                        Close
                    </button>
                    <button
                        type="button"
                        class="btn btn-primary"
                        @click="updateSliders(index)"
                    >
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- slider area end -->

    <!-- testimonial area start -->
    <div class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2
                            contenteditable="true"
                            @blur="
                                updateTitle(
                                    'review',
                                    'clientSaysAreaTitle',
                                    $event
                                )
                            "
                        >
                            {{ clientSaysAreaTitle }}
                        </h2>
                        <p
                            contenteditable="true"
                            @blur="
                                updateDescription(
                                    'review',
                                    'review',
                                    'clientSaysDescription',
                                    $event
                                )
                            "
                        >
                            {{ clientSaysDescription }}
                        </p>
                    </div>
                </div>
            </div>
            <section id="demos">
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme">
                            <div
                                v-for="(item, index) in reviews"
                                :key="index"
                                class="item"
                                :style="{
                                    backgroundColor: item.bg_color,
                                    color: item.text_color,
                                }"
                            >
                                <div
                                    class="review-update-btn"
                                    data-toggle="modal"
                                    :data-target="'#reviewModal' + index"
                                >
                                    <i class="fas fa-pen"></i>
                                </div>
                                <span
                                    style="
                                        text-align: center;
                                        color: #000000;
                                        font-size: 30px;
                                    "
                                    ><i class="fas fa-quote-left"></i
                                ></span>
                                <h3 style="font-size: 20px">
                                    {{ item.reviewer_name }}
                                </h3>
                                <p>{{ item.review }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Modal -->
    <div
        class="modal fade"
        :id="'reviewModal' + index"
        tabindex="-1"
        :aria-labelledby="'reviewModalLabel' + index"
        aria-hidden="true"
        v-for="(item, index) in reviews"
        :key="index"
    >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" :id="'reviewModalLabel' + index">
                        Review {{ index + 1 }}
                    </h5>
                    <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                    >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Reviewer Name:</label>
                        <input
                            type="text"
                            class="form-control"
                            v-model="item.reviewer_name"
                        />
                    </div>
                    <div class="form-group">
                        <label for="">Review:</label>
                        <textarea
                            rows="5"
                            class="form-control"
                            v-model="item.review"
                        ></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-dismiss="modal"
                    >
                        Close
                    </button>
                    <button
                        type="button"
                        class="btn btn-primary"
                        @click="updateReviews(index, item)"
                    >
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial area end -->

    <!-- order area start -->
    <div class="bg_ba">
        <div id="order" class="order">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage">
                            <h2
                                contenteditable="true"
                                @blur="
                                    updateTitle(
                                        'order',
                                        'orderAreaTitle',
                                        $event
                                    )
                                "
                            >
                                {{ orderAreaTitle }}
                            </h2>
                        </div>
                        <form class="main_form card p-5">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="row">
                                        <!-- Product Information -->
                                        <div
                                            class="col-sm-12 order-product-info mb-3"
                                        >
                                            <div
                                                class="d-flex align-items-center justify-content-between"
                                            >
                                                <div>
                                                    <img
                                                        :src="
                                                            imageSource(
                                                                user_template.product_image ??
                                                                    '/images/img.png',
                                                                user_template.product_image
                                                                    ? 'storage'
                                                                    : 'public'
                                                            )
                                                        "
                                                        class="order-product-image"
                                                    />
                                                </div>
                                                <div class="order-product-name">
                                                    <h3
                                                        @blur="
                                                            updateProductDetails(
                                                                'product_name',
                                                                $event
                                                            )
                                                        "
                                                        contenteditable="true"
                                                    >
                                                        {{
                                                            user_template.product_name
                                                        }}
                                                    </h3>
                                                </div>
                                                <div
                                                    class="order-product-price"
                                                >
                                                    <h3>
                                                        <span
                                                            class="order-product-currency"
                                                            @blur="
                                                                updateProductDetails(
                                                                    'product_price',
                                                                    $event
                                                                )
                                                            "
                                                            contenteditable="true"
                                                        >
                                                            {{
                                                                user_template.product_price
                                                            }}
                                                        </span>
                                                        {{
                                                            user_template.product_currency
                                                        }}
                                                    </h3>
                                                </div>
                                                <div class="ml-3">
                                                    <h1
                                                        class="order-multiplier"
                                                    >
                                                        x
                                                    </h1>
                                                </div>
                                                <div
                                                    class="order-quantity-input"
                                                >
                                                    <input
                                                        class="orderfield"
                                                        placeholder="Qty"
                                                        type="number"
                                                        name="Quantity"
                                                        min="1"
                                                        v-model="orderQuantity"
                                                    />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <label
                                                class="order-shipping-option d-flex p-3"
                                            >
                                                <input
                                                    class="order-custom-radio"
                                                    type="radio"
                                                    name="shippingOption"
                                                    :checked="
                                                        selectedShippingOption ===
                                                        'inside_dhaka'
                                                    "
                                                />
                                                <div
                                                    class="order-form-check-label"
                                                >
                                                    <h3>
                                                        Shipping Cost (Inside
                                                        Dhaka)
                                                    </h3>
                                                </div>
                                                <div
                                                    class="order-shipping-price"
                                                >
                                                    <h3>
                                                        <span
                                                            class="mr-2"
                                                            @blur="
                                                                updateProductDetails(
                                                                    'shipping_cost_inside_dhaka',
                                                                    $event
                                                                )
                                                            "
                                                            contenteditable="true"
                                                        >
                                                            {{
                                                                user_template.shipping_cost_inside_dhaka
                                                            }}
                                                        </span>
                                                        <span>
                                                            {{
                                                                user_template.product_currency
                                                            }}
                                                        </span>
                                                    </h3>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="col-sm-12">
                                            <label
                                                class="order-shipping-option d-flex p-3"
                                            >
                                                <input
                                                    class="order-custom-radio"
                                                    type="radio"
                                                    name="shippingOption"
                                                    :checked="
                                                        selectedShippingOption ===
                                                        'outside_dhaka'
                                                    "
                                                />
                                                <div
                                                    class="order-form-check-label"
                                                >
                                                    <h3>
                                                        Shipping Cost (Outside
                                                        Dhaka)
                                                    </h3>
                                                </div>
                                                <div
                                                    class="order-shipping-price"
                                                >
                                                    <h3>
                                                        <span
                                                            class="mr-2"
                                                            @blur="
                                                                updateProductDetails(
                                                                    'shipping_cost_outside_dhaka',
                                                                    $event
                                                                )
                                                            "
                                                            contenteditable="true"
                                                        >
                                                            {{
                                                                user_template.shipping_cost_outside_dhaka
                                                            }}
                                                        </span>
                                                        <span>
                                                            {{
                                                                user_template.product_currency
                                                            }}
                                                        </span>
                                                    </h3>
                                                </div>
                                            </label>
                                        </div>

                                        <!-- Divider -->
                                        <div class="col-sm-12">
                                            <hr class="order-divider" />
                                        </div>

                                        <!-- Subtotal -->
                                        <div class="col-sm-12">
                                            <div
                                                class="d-flex align-items-center justify-content-between order-subtotal"
                                            >
                                                <div>
                                                    <h3>Total</h3>
                                                </div>
                                                <div>
                                                    <h3>
                                                        {{ subtotal }}
                                                        {{
                                                            user_template.product_currency
                                                        }}
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="row d-none">
                                        <div class="col-sm-12">
                                            <input
                                                class="orderfield"
                                                placeholder="Full Name"
                                                type="text"
                                                name="Full Name"
                                            />
                                        </div>
                                        <div class="col-sm-12">
                                            <input
                                                class="orderfield"
                                                placeholder="Email"
                                                type="text"
                                                name=" Email"
                                            />
                                        </div>
                                        <div class="col-sm-12">
                                            <input
                                                class="orderfield"
                                                placeholder="Phone"
                                                type="text"
                                                name="Phone"
                                            />
                                        </div>

                                        <div class="col-sm-12">
                                            <textarea
                                                class="textarea"
                                                placeholder="Address"
                                                type="text"
                                                name="Address"
                                            ></textarea>
                                        </div>
                                    </div>

                                    <FormField
                                        :styles="{
                                            color: orderAreaTextColor,
                                            backgroundColor: orderAreaBgColor,
                                        }"
                                        v-for="(
                                            field, index
                                        ) in orderAreaFields"
                                        :key="index"
                                        :field="field"
                                        @delete="
                                            deleteOrderAreaField(index, $event)
                                        "
                                        @update="
                                            updateOrderAreaField(index, $event)
                                        "
                                        :isDeletable="index >= 4"
                                        :isEditable="true"
                                    />

                                    <AddFieldModal
                                        :modalId="'AddFieldModal'"
                                        :modalTitle="'Add Dynamic Form'"
                                        @save="addOrderAreaField"
                                    />
                                </div>

                                <div class="col-sm-12 mt-2">
                                    <button class="order btnStyle">
                                        {{ orderAreaButton.title }}
                                    </button>
                                    <ButtonModal
                                        :modalId="'orderAreaButton'"
                                        :modalTitle="'Edit Order Area Button'"
                                        :buttonData="orderAreaButton"
                                        section="order"
                                        element="order"
                                        storeData="orderAreaButton"
                                        @save="updateButton"
                                        :style="{
                                            top: 0,
                                            right: '25%',
                                        }"
                                    />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- order area end -->

    <!--  footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p
                            contenteditable="true"
                            @blur="
                                updateFooterText(
                                    'text',
                                    'footerAreaText',
                                    $event
                                )
                            "
                        >
                            {{ footerAreaText }}
                        </p>
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
import ColorPicker from "../1Builder/components/ColorPicker.vue";
("../1Builder/components/ColorPicker.vue");
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
        FormField,
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
            newInformation: "",

            // slider area
            sliderAreaTitle: "",
            sliderItems: [],
            sliderAreaImage: "",
            sliderAreaBgColor: "",
            sliderAreaTextColor: "",
            newSlider: [],

            // client says area
            clientSaysAreaTitle: "",
            clientSaysAreaTextColor: "",
            clientSaysDescription: [],
            reviews: [],
            clientSaysAreaBgColor: "",

            // order area
            orderAreaTitle: "",
            orderAreaBgColor: "",
            orderAreaTextColor: "",
            orderAreaFields: [],
            orderAreaButton: [],
            selectedShippingOption: "inside_dhaka",
            orderQuantity: 1,

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
        this.informationTitle = information.title;
        this.informationItems = informationElement.items;
        this.informationImage = informationElement.image;
        this.informationImageBorderColor =
            informationElement.image_border_color;

        // slider area
        let sliderArea = this.getSection("slider");
        let sliderAreaElement = this.decodedData(
            this.getElement("slider", "slider").data
        );

        this.sliderAreaTitle = sliderArea.title;
        this.sliderItems = sliderAreaElement.items;

        // client says area
        let clientSaysArea = this.getSection("review");
        let clientSaysAreaElement = this.decodedData(
            this.getElement("review", "review").data
        );

        this.clientSaysAreaTitle = clientSaysArea.title;
        this.clientSaysAreaBgColor = clientSaysArea.bg_color;
        this.clientSaysAreaTextColor = clientSaysArea.text_color;
        this.clientSaysDescription = clientSaysAreaElement.description;
        this.reviews = this.user_template.template.testimonials;

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
    watch: {
        selectedShippingOption(newVal, oldVal) {
            this.calculateSubtotal();
        },

        orderQuantity(newVal, oldVal) {
            this.calculateSubtotal();
        },
    },

    computed: {
        subtotal() {
            return this.calculateSubtotal();
        },
    },

    methods: {
        ...DynamicFormMethods,
        ...OneBuilder,

        calculateSubtotal() {
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

            return (productPrice * this.orderQuantity + shippingCost).toFixed(
                2
            );
        },

        addInformation() {
            if (this.newInformation.trim()) {
                this.informationItems.push(this.newInformation.trim());
                this.newInformation = "";
            }

            this.updateInformations();
        },

        removeInformation(index) {
            this.informationItems.splice(index, 1);
            this.updateInformations();
        },

        updateInformation(index, event) {
            this.informationItems[index] = event.target.innerText;
            this.updateInformations();
        },

        updateInformations() {
            this.updateResource({
                section: "information",
                element: "information",
                storeData: "informationItems",
                prefix: "items",
                value: this.informationItems,
            });
        },

        addSlider() {
            if (this.newSlider) {
                this.sliderItems.push(this.newSlider);
                this.newSlider = "";
            }

            this.updateSliders();
        },

        removeSlider(index) {
            this.sliderItems.splice(index, 1);
            this.updateSliders();
        },

        updateSliders(index) {
            this.updateResource({
                section: "slider",
                element: "slider",
                storeData: "sliderItems",
                prefix: "items",
                value: this.sliderItems,
            });

            const modalElement = document.getElementById("sliderModal" + index);
            const modal = bootstrap.Modal.getInstance(modalElement);
            if (modal) {
                modal.hide();
            }
        },

        async updateSlidersImage(index, event) {
            const file = event.target.files[0];
            if (!file) {
                this.toast("error", "No file selected.");
                return;
            }

            // Trigger image save and update process
            await this.saveImage({
                storeData: `sliderItems[${index}]`, // path to the image in data
                image: file, // actual image file
            });

            this.newSliderImage = this.sliderItems[index].image;
        },

        updateReviews(index, item) {
            this.saveReview({
                id: item.id,
                template_id: item.template_id,
                index,
                reviewer_name: item.reviewer_name,
                review: item.review,
            });

            const modalElement = document.getElementById("reviewModal" + index);
            const modal = bootstrap.Modal.getInstance(modalElement);
            if (modal) {
                modal.hide();
            }
        },
    },
};
</script>

<style scoped>
.slider-update-btn {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background-color: #ffffff;
    text-align: center;
    line-height: 30px;
    color: #000000;
    position: absolute;
    top: 0;
    right: 40px;
    cursor: pointer;
}

.slider-add-btn {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background-color: #ffffff;
    text-align: center;
    line-height: 30px;
    color: #000000;
    position: absolute;
    top: 0;
    right: 0;
    cursor: pointer;
}

.review-update-btn {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background-color: #ffffff;
    text-align: center;
    line-height: 30px;
    color: #000000;
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
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
</style>
