<template>
  <!-- header section start -->
  <div class="header_section header_bg">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a href="javascript:void(0)" class="logo">
        <img
          :src="companyLogo"
          width="50"
          class="logo"
          :alt="user_template.company_name"
        />
      </a>
      <div
        class="position-absolute top-0 start-0 ms-2 mt-5"
        title="Logo settings"
      >
        <div
          class="bg-primary text-white text-center rounded-circle cursor-pointer"
          style="width: 30px; height: 30px"
          data-bs-toggle="modal"
          data-bs-target="#logoImageModal"
        >
          <i class="fas fa-cog" style="font-size: 20px; margin-top: 5px"></i>
        </div>
      </div>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#testimonial">Testimonial</a>
          </li>
        </ul>
      </div>
      <div id="main">
        <span
          style="font-size: 36px; cursor: pointer; color: #fff"
          onclick="openNav()"
        >
          <!-- <img src="cycle/images/toggle-icon.png" style="height: 30px;"> -->
        </span>
      </div>
    </nav>
    <!-- banner section start -->
    <div class="banner_section layout_padding">
      <div id="" class="" data-ride="">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <!-- <div class="best_text">Best</div> -->
                  <div class="image_1">
                    <div
                      class="position-absolute top-0 end-0 mt-2"
                      title="Image settings"
                    >
                      <div
                        class="bg-primary text-white text-center rounded-circle cursor-pointer"
                        style="width: 30px; height: 30px"
                        data-bs-toggle="modal"
                        data-bs-target="#heroImageModal"
                      >
                        <i
                          class="fas fa-cog"
                          style="font-size: 20px; margin-top: 5px"
                        ></i>
                      </div>
                    </div>
                    <img :src="heroImage" alt="Image" />
                  </div>
                </div>
                <div class="col-md-5">
                  <h2
                    class="banner_taital"
                    contenteditable="true"
                    @blur="updateHeroTitle"
                  >
                    {{ heroTitle }}
                  </h2>
                  <p
                    class="banner_text"
                    contenteditable="true"
                    @blur="updateHeroDescription"
                  >
                    {{ heroDescription }}
                  </p>

                  <!-- <div class="contact_bt">
                    
                    <a  href="#"> Buy Now
                    </a>
                     <div class="position-absolute top-0 end-0 mt-2"
                                    title="Button settings"
                                >
                   <div class="bg-primary text-white text-center rounded-circle cursor-pointer"
                                        style="width: 30px; height: 30px"
                                        data-bs-toggle="modal"
                                        data-bs-target="#heroButtonModal"
                                    >
                                        <i
                                            class="fas fa-cog"
                                            style="
                                                font-size: 20px;
                                                margin-top: 5px;
                                            "
                                        ></i>
                                    </div>
                      </div>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <div class="best_text">Best</div>
                  <div class="image_1"><img src="cycle/images/img-1.png"></div>
                </div>
                <div class="col-md-5">
                  <h1 class="banner_taital">New Model Cycle</h1>
                  <p class="banner_text">
                    It is a long established fact that a reader will be
                    distracted by the readable content
                  </p>
                  <div class="contact_bt">
                    <a href="contact.html">Shop Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
        <!-- <a
          class="carousel-control-prev"
          href="#main_slider"
          role="button"
          data-slide="prev"
        >
          <i class="fa fa-angle-left"></i>
        </a>
        <a
          class="carousel-control-next"
          href="#main_slider"
          role="button"
          data-slide="next"
        >
          <i class="fa fa-angle-right"></i>
        </a> -->
      </div>
    </div>
    <!-- banner section end -->
  </div>
  <!-- header section end -->
  <!-- cycle section start -->
  <div class="cycle_section layout_padding">
    <div class="container">
      <h1 class="cycle_taital">Our Cycle</h1>
      <p class="cycle_text">
        It is a long established fact that a reader will be distracted by the
      </p>
      <div class="cycle_section_2 layout_padding">
        <div class="row">
          <div class="col-md-6">
            <div class="box_main">
              <h6 class="number_text">01</h6>
              <div class="image_2">
                <img :src="`${appUrl}/cycle/images/img-2.png`" alt="Image" />
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <h1 class="cycles_text">Cycles</h1>
            <p class="lorem_text">
              It is a long established fact that a reader will be distracted by
              the readable content of a page when looking at its layout. The
              point of using Lorem Ipsum is that it has a more-or-less normal
              distribution of letters
            </p>
            <div class="btn_main">
              <div class="buy_bt"><a href="#">Buy Now</a></div>
              <h4 class="price_text">
                Price <span style="color: #f7c17b">$</span>
                <span style="color: #325662">200</span>
              </h4>
            </div>
          </div>
        </div>
      </div>
      <div class="cycle_section_3 layout_padding">
        <div class="row">
          <div class="col-md-6">
            <h1 class="cycles_text">Stylis Cycle</h1>
            <p class="lorem_text">
              It is a long established fact that a reader will be distracted by
              the readable content of a page when looking at its layout. The
              point of using Lorem Ipsum is that it has a more-or-less normal
              distribution of letters
            </p>
            <div class="btn_main">
              <div class="buy_bt"><a href="#">Buy Now</a></div>
              <h4 class="price_text">
                Price <span style="color: #f7c17b">$</span>
                <span style="color: #325662">200</span>
              </h4>
            </div>
          </div>
          <div class="col-md-6">
            <div class="box_main_3">
              <h6 class="number_text_2">02</h6>
              <div class="image_2">
                <img :src="`${appUrl}/cycle/images/img-3.png`" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- cycle section end -->
  <!-- about section start -->
  <div class="about_section layout_padding" id="about" data-target="about">
    <div class="container">
      <h1 class="about_taital" contenteditable="true" @blur="updateAboutTitle">
       {{ aboutTitle }}
      </h1>
      <p class="about_text" contenteditable="true" @blur="updateAboutDescription">
        {{ aboutDescription }}
      </p>
      <div class="about_main">
        <div
          class="position-absolute top-0 end-0 mt-2"
          title="About Image settings"
        >
          <div
            class="bg-primary text-white text-center rounded-circle cursor-pointer"
            style="width: 30px; height: 30px;margin-left:280px;"
            data-bs-toggle="modal"
            data-bs-target="#aboutImageModal"
          >
            <i class="fas fa-cog" style="font-size: 20px; margin-top: 5px;"></i>
          </div>
        </div>
        <img :src="aboutImage" class="image_5" />
      </div>
    </div>
  </div>
  <!-- about section end -->
  <!-- client section start -->
  <div
    class="client_section layout_padding"
    id="testimonial"
    data-target="testimonial"
  >
    <div id="my_slider" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <div class="client_main">
              <h1 class="client_taital">Says Customers</h1>
              <div class="client_section_2">
                <div class="client_left">
                  <div>
                    <img
                      :src="`${appUrl}/cycle/images/client-img.png`"
                      class="client_img"
                    />
                  </div>
                </div>
                <div class="client_right">
                  <div class="quote_icon">
                    <img :src="`${appUrl}/cycle/images/quote-icon.png`" />
                  </div>
                  <p class="client_text">
                    It is a long established fact that a reader will be
                    distracted by the readable content of a page when looking at
                    its layout. The point of using Lorem Ipsum is that it has a
                    more-or-less normal distribution of letters
                  </p>
                  <h3 class="client_name">Channery</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="client_main">
              <h1 class="client_taital">Says Customers</h1>
              <div class="client_section_2">
                <div class="client_left">
                  <div>
                    <img
                      :src="`${appUrl}/cycle/images/client-img.png`"
                      class="client_img"
                    />
                  </div>
                </div>
                <div class="client_right">
                  <div class="quote_icon">
                    <img :src="`${appUrl}/cycle/images/quote-icon.png`" />
                  </div>
                  <p class="client_text">
                    It is a long established fact that a reader will be
                    distracted by the readable content of a page when looking at
                    its layout. The point of using Lorem Ipsum is that it has a
                    more-or-less normal distribution of letters
                  </p>
                  <h3 class="client_name">Channery</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="client_main">
              <h1 class="client_taital">Says Customers</h1>
              <div class="client_section_2">
                <div class="client_left">
                  <!-- <div><img src="cycle/images/client-img.png" class="client_img"></div> -->
                </div>
                <div class="client_right">
                  <!-- <div class="quote_icon"><img src="cycle/images/quote-icon.png"></div> -->
                  <p class="client_text">
                    It is a long established fact that a reader will be
                    distracted by the readable content of a page when looking at
                    its layout. The point of using Lorem Ipsum is that it has a
                    more-or-less normal distribution of letters
                  </p>
                  <h3 class="client_name">Channery</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a
        class="carousel-control-prev"
        href="#my_slider"
        role="button"
        data-slide="prev"
      >
        <i class="fa fa-angle-left"></i>
      </a>
      <a
        class="carousel-control-next"
        href="#my_slider"
        role="button"
        data-slide="next"
      >
        <i class="fa fa-angle-right"></i>
      </a>
    </div>
  </div>
  <!-- client section end -->
  <!-- contact section start -->
  <div class="contact_section layout_padding" id="order" data-target="order">
    <div class="container">
      <div class="contact_main">
        <h1 class="request_text">Order Now</h1>
        <form action="/action_page.php">
          <div class="form-group">
            <input
              type="text"
              class="email-bt"
              placeholder="Name"
              name="Name"
            />
          </div>
          <div class="form-group">
            <input
              type="text"
              class="email-bt"
              placeholder="Email"
              name="Name"
            />
          </div>
          <div class="form-group">
            <input
              type="text"
              class="email-bt"
              placeholder="Phone Numbar"
              name="Email"
            />
          </div>
          <div class="form-group">
            <textarea
              class="massage-bt"
              placeholder="Address"
              rows="5"
              id="comment"
              name="Address"
            ></textarea>
          </div>
        </form>
        <div class="send_btn"><a href="#">Order Now</a></div>
      </div>
    </div>
  </div>
  <!-- contact section end -->
  <!-- footer section start -->
  <div class="footer_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 col-sm-12 padding_0">
          <div class="map_main">
            <div class="map-responsive">
              <div class="bg-primary text-white text-center rounded-circle cursor-pointer"
                style="width: 30px; height: 30px"
                data-bs-toggle="modal"
                data-bs-target="#mapModal"
              >
               <i class="fas fa-cog" style="font-size: 20px; margin-top: 5px"></i>
              </div>
               <div v-html="mapIframe"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-12">
          <div class="call_text"><span class="padding_left_0"
                contenteditable="true" @blur="updateAddress">{{address}}</span
              >
          </div>
          <div class="call_text"><span class="padding_left_0" contenteditable="true" @blur="updatePhone">{{phone}}</span>
          </div>
          <div class="call_text">
            <span class="padding_left_0" contenteditable="true" @blur="updateEmail">{{email}}</span>
          </div>
          <div class="social_icon">
            <!--<ul>
                        <li><a href="#"><img src="cycle/images/fb-icon1.png"></a></li>
                        <li><a href="#"><img src="cycle/images/twitter-icon.png"></a></li>
                        <li><a href="#"><img src="cycle/images/linkedin-icon.png"></a></li>
                        <li><a href="#"><img src="cycle/images/instagram-icon.png"></a></li> 
                     </ul>
                     -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- footer section end -->
  <!-- copyright section start -->
  <div class="copyright_section">
    <div class="container">
      <p class="copyright_text">
        Copyright 2019 All Right Reserved By.<a href="#"> 1commerce </a>
      </p>
      <p class="copyright_text">Disrtributed By. <a href="#">1commerce </a></p>
    </div>
  </div>
  <!-- copyright section end -->
  <ImageModal
    modalId="logoImageModal"
    modalTitle="logo Image"
    section="logo"
    :previewURL="companyLogo"
    @update="updateImage"
  />
  <ImageModal
    modalId="heroImageModal"
    modalTitle="Hero Image"
    section="hero"
    :previewURL="heroImage"
    @update="updateImage"
  />
  <ImageModal
    modalId="aboutImageModal"
    modalTitle="About Image"
    section="about"
    :previewURL="aboutImage"
    @update="updateImage"
  />
  <MapModal
    modalId="mapModal"
    modalTitle="Iframe Map"
    mapSize="(900*500)"
    section="map"
    :previewURL="mapIframe"
    @update="updateMap"
  />
  <ButtonModal
    modalId="heroButtonModal"
    modalTitle="Hero Button"
    section="hero"
    @update="updateButton"
    :buttonData="heroButton"
  />
</template>

<script>
import axios from "axios";
import ButtonModal from "./components/button-modal.vue";
import ImageModal from "./components/image-modal.vue";
import MapModal from "../components/map-modal.vue";
import ColorPicker from "../components/color-picker.vue";
import SetupModal from "./components/setup-modal.vue";
import FooterModal from "./components/footer-modal.vue";
import AddInputModal from "../components/add-input-modal.vue";
import FormField from "../components/form-field.vue";
import UpdateImage from "./components/updateImage.js";
import UpdateButton from "./components/updateButton.js";
export default {
  name: "Cycle",
  props: ["user_template", "template"],
  components: {
    ButtonModal,
    ImageModal,
    ColorPicker,
    SetupModal,
    FooterModal,
    AddInputModal,
    FormField,
    MapModal,
  },
  data() {
    return {
      apiUrl: "",
      appUrl: "",

      // menu area
      menus: [
        {
          title: "Home",
          url: "#home",
        },
        {
          title: "Features",
          url: "#features",
        },
        {
          title: "About",
          url: "#about",
        },
        {
          title: "Testimonials",
          url: "#testimonials",
        },
        {
          title: "Order",
          url: "#order",
        },
      ],

      // hero area
      heroTitle: "",
      heroDescription: "",
      heroButton: [],
      heroImage: "",
      heroImageRaw: [],
      heroBg: "#274d5a",
      navBg: "#20bea7",

      // steps area
      steps: [
        {
          title: "Step 1",
          description:
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
          icon: "flaticon-login",
        },
        {
          title: "Step 2",
          description:
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
          icon: "flaticon-login-1",
        },
        {
          title: "Step 3",
          description:
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
          icon: "flaticon-shopping-cart",
        },
      ],

      // feature area
      featureTitle: "Product Features",
      featureSubTitle: "Explore the awesome",
      featureImage: "",
      featureImageRaw: "",
      featureBg: "#f7f7f7",

      // about area
      aboutTitle: "",
      aboutDescription: "",
      aboutBg: "",
      aboutImage: "",
      aboutImageRaw: [],

      // testimonial area
      testimonialSubTitle: "FEEDBACK",
      testimonialTitle: "What our clients say",
      testimonialBg: "#20bea7",
      testimonials: [
        {
          review:
            "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
          reviewer_name: "Muhaimin Shihab",
          reviewer_bio: "Customer",
          reviewer_image: "",
          reviewer_image_raw: [],
        },
        {
          review:
            "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
          reviewer_name: "Asaduzzaman",
          reviewer_bio: "Customer",
          reviewer_image: "",
          reviewer_image_raw: [],
        },
        {
          review:
            "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
          reviewer_name: "Harshad Patel",
          reviewer_bio: "NM Babor",
          reviewer_image: "",
          reviewer_image_raw: [],
        },
      ],

      // info area
      infoSubTitle: "GET IT TODAY",
      infoTitle: "Get your Product today!",
      infoDescription:
        "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.",
      infoButton: [],
      infoVideo: "https://youtube.com",
      infoBg: "#f7f7f7",

      // order area
      orderTitle: "Order Now",
      orderSubTitle: "GET YOUR PRODUCT",
      orderBg: "#ffffff",
      orderButton: [],
      siteColor:
        this.template.color != null ? JSON.parse(this.template.color) : null,
      fields: [],

      // prduct info
      productName: "",
      productPrice: "",
      productCurrency: "",
      companyLogo: "",
      companyLogoRaw: "",

      // footer area
      address: "4347 Stone Lane,Pennsylvania,USA",
      phone: "Call Now +01 123467890",
      email: "demo@gmail.com",
      mapIframe: `<iframe
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France"
                    width="600"
                    height="400"
                    frameborder="0"
                    style="border: 0; width: 100%"
                    allowfullscreen
                  ></iframe>`,
      footerBg:"#FFFFFF",
    };
  },
  computed: {},
  mounted() {
    this.companyLogo = this.appUrl + "/" + this.user_template.company_logo;
    this.companyLogo =
      this.user_template.company_logo != null && this.user_template.company_logo
        ? this.imageSource(this.user_template.company_logo, "storage")
        : this.imageSource("images/logo.png");
    this.appUrl = `${window.location.origin}`;
    this.apiUrl = `${window.location.origin}/app/templates/cycle`;

    // hero area
    const heroArea =
      this.template.hero_area != null
        ? JSON.parse(this.template.hero_area)
        : null;
    this.heroBg = heroArea != null ? heroArea.background_color : this.heroBg;
    this.heroTitle = heroArea.title;
    this.heroDescription =
      heroArea != null ? heroArea.description : this.heroDescription;
    this.heroImage =
      heroArea != null && heroArea.image
        ? this.imageSource(heroArea.image, "storage")
        : this.appUrl + "/cycle/images/img-1.png";

    // about area
    const aboutArea = this.template.about_area
      ? JSON.parse(this.template.about_area)
      : null;

    this.aboutBg =
      aboutArea != null ? aboutArea.background_color : this.aboutBg;
    this.aboutTitle = aboutArea?.title || this.aboutTitle;
    this.aboutDescription = aboutArea?.description || this.aboutDescription;
    this.aboutImage =
      aboutArea != null && aboutArea.image
        ? this.imageSource(aboutArea.image, "storage")
        : this.appUrl + "/cycle/images/img-5.png";

    const defaultHeroButton = {
      title: "Buy Now",
      url: "#buy",
      color: "transparent",
      text_color: "white",
      border_color: "white",
      hover_color: "white",
      hover_text_color: "black",
      hover_border_color: "white",
    };
    this.heroButton = heroArea != null ? heroArea.button : defaultHeroButton;
  
  
  //foooter area 
  const footerArea =
      this.template.footer_area != null
        ? JSON.parse(this.template.footer_area)
        : null;
     this.address =
      (footerArea != null && footerArea.address) ? footerArea.address : this.address;
    this.phone = (footerArea != null && footerArea.phone)? footerArea.phone : this.phone;
    this.email = (footerArea != null && footerArea.email) ? footerArea.email: this.email;
    this.mapIframe =
      (footerArea != null && footerArea.mapIframe) ? footerArea.mapIframe : this.mapIframe;
    this.footerBg =
      footerArea != null ? footerArea.footerBg : this.footerBg;

  
  
  
  },
  beforeDestroy() {},
  methods: {
    ...UpdateImage,
    ...UpdateButton,
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
    updateContent(event) {
      const rawContent = event.target.innerHTML ?? event.target.textContent;
      const sanitizedContent = rawContent.replace(/&nbsp;/g, " ");

      return sanitizedContent;
    },
    updateLogo() {
      const formData = new FormData();
      formData.append("image", this.companyLogoRaw);
      axios
        .post(`${this.apiUrl}/update-company-logo`, formData, {
          headers: {
            "Content-Type": "multipart/form-data",
          },
        })
        .then((response) => {
          console.log("response:", response);
          this.toast("success", "Logo Updated.");
        })
        .catch((error) => {
          console.error("error:", error);
        });
    },
    updateHeroArea() {
      const formData = new FormData();
      formData.append("title", this.heroTitle);
      formData.append("description", this.heroDescription);
      formData.append("button", JSON.stringify(this.heroButton));
      formData.append("image", this.heroImageRaw);
      formData.append("background_color", this.heroBg);

      axios
        .post(`${this.apiUrl}/update-hero-area`, formData, {
          headers: {
            "Content-Type": "multipart/form-data",
          },
        })
        .then((response) => {
          console.log(response.data);
          this.toast("success", "Resources Updated.");
        })
        .catch((error) => {
          console.error(error);
        });
    },
    updateHeroTitle(event) {
      const newValue = event.target.textContent.trim();
      if (this.heroTitle == newValue) {
        return;
      }

      this.heroTitle = this.updateContent(event);
      this.updateHeroArea();
    },

    updateHeroDescription(event) {
      const newValue = event.target.textContent.trim();
      if (this.heroDescription == newValue) {
        return;
      }

      this.heroDescription = this.updateContent(event);
      this.updateHeroArea();
    },
    imageSource(path, disk = "public") {
      if (disk == "storage" && path) {
        return `${this.appUrl}/storage/${path}`;
      }

      return `${this.appUrl}/${this.user_template.template.assets_path}/${path}`;
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

    updateOrderArea(key, event) {
      const newValue = event.target.textContent.trim();
      if (this.orderArea[key] == newValue) {
        return;
      }
      this.orderArea[key] = newValue;

      // Save the updated about area when the user blurs out
      this.saveOrderArea();
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

    updateAboutDescription(event) {
      const newValue = event.target.textContent.trim();
      if (this.aboutDescription == newValue) {
        return;
      }

      this.aboutDescription = this.updateContent(event);
      this.updateAboutArea();
    },

    updateAboutTitle(event) {
      const newValue = event.target.textContent.trim();
      if (this.aboutTitle == newValue) {
        return;
      }

      this.aboutTitle = this.updateContent(event);
      this.updateAboutArea();
    },

    updateAboutArea() {
      const formData = new FormData();
      formData.append("title", this.aboutTitle);
      formData.append("description", this.aboutDescription);
      formData.append("image", this.aboutImageRaw);
      formData.append("background_color", this.aboutBg);
      axios
        .post(`${this.apiUrl}/update-about-area`, formData, {
          headers: {
            "Content-Type": "multipart/form-data",
          },
        })
        .then((response) => {
          this.aboutImage = this.imageSource(response.data.aboutImage, "storage");
          this.toast("success", "Resources Updated.");
        })
        .catch((error) => {
          console.error(error);
        });
    },

    updateSiteLogo(imageFile) {
      const formData = new FormData();
      formData.append("image", imageFile);

      axios
        .post(`${this.apiUrl}/update-site-logo`, formData)
        .then((response) => {
          this.siteLogo = this.imageSource(response.data.imagePath, "storage");
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
          this.heroImage = this.imageSource(this.heroArea.image, "storage");
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
          this.orderImage = this.imageSource(this.orderArea.image, "storage");
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
            this.toast("error", "Failed to update: " + response.data.message);
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
          is_required: field.is_required,
          options:
            field.options.length > 0 ? JSON.stringify(field.options) : null,
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

    updateField(index, field) {
      axios
        .post(`${this.appUrl}/app/dynamic-form/update-input-field`, {
          id: field.id,
          title: field.title,
          name: field.name,
          type: field.type,
          is_required: field.is_required,
          options:
            field.options.length > 0 ? JSON.stringify(field.options) : null,
        })
        .then((response) => {
          if (response.data.success) {
            this.fields = [
              ...this.fields.slice(0, index),
              response.data.field,
              ...this.fields.slice(index + 1),
            ];

            this.toast("success", "Updated successfully");
          } else {
            this.toast("error", "Failed to update");
          }
        });
    },

    saveFooterArea() {
       const formData = new FormData();
      formData.append("address", this.address);
      formData.append("phone", this.phone);
      formData.append("email", this.email);
      formData.append("mapIframe", this.mapIframe);
      formData.append("footerBg", this.footerBg);
      axios
        .post(`${this.apiUrl}/update-footer-area`,formData)
        .then((response) => {
          console.log("res:",response.data);
            this.toast("success", "Updated successfully");
        
        })
        .catch((error) => {
          console.log("error:",error);
          this.toast("error", "Error updating:", error);
        });
    },
    updateMap(iframetag){
      if (this.mapIframe == iframetag) {
        return;
      }
      this.mapIframe = iframetag;
      this.saveFooterArea();
    },
    updateAddress(event){
       const newValue = event.target.textContent.trim();
      if (this.address == newValue) {
        return;
      }

      this.address = this.updateContent(event);
      this.saveFooterArea();
    },
    updatePhone(event){
       const newValue = event.target.textContent.trim();
      if (this.phone == newValue) {
        return;
      }

      this.phone = this.updateContent(event);
      this.saveFooterArea();
    },
    updateEmail(event){
       const newValue = event.target.textContent.trim();
      if (this.email == newValue) {
        return;
      }

      this.email = this.updateContent(event);
      this.saveFooterArea();
    },
    updateFooterBg(event){
       const newValue = event.target.textContent.trim();
      if (this.footerBg == newValue) {
        return;
      }

      this.footerBg = this.updateContent(event);
      this.saveFooterArea();
    },

  },
};
</script>

<style scoped>
.btn-buynow {
  background-color: v-bind("heroButton.color");
  color: v-bind("heroButton.text_color");
  border-color: v-bind("heroButton.border_color");
}

.btn-buynow:hover {
  background-color: v-bind("heroButton.hover_color") !important;
  color: v-bind("heroButton.hover_text_color");
  border-color: v-bind("heroButton.hover_border_color");
}
.header_section {
  width: 100%;
  float: left;
  background-image: linear-gradient(-13deg, #ffffff 30%, heroBg 20%) !important;
  position: relative;
  overflow-x: hidden;
}
</style>
