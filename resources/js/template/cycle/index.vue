<template>
<!-- header section start -->
      <div class="header_section header_bg">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a href="index.html" class="logo"><img src="{{ asset($template->assets_path . '/images/logo.png')}}"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
               <span style="font-size:36px;cursor:pointer; color: #fff" onclick="openNav()"><img src="{{ asset($template->assets_path . '/images/toggle-icon.png')}}" style="height: 30px;"></span>
            </div>
         </nav>
         <!-- banner section start -->
         <div class="banner_section layout_padding">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-7">
                              <div class="best_text">Best</div>
                              <div class="image_1"><img src="{{ asset($template->assets_path . '/images/img-1.png')}}"></div>
                           </div>
                           <div class="col-md-5">
                              <h1 class="banner_taital">New Model Cycle</h1>
                              <p class="banner_text">It is a long established fact that a reader will be distracted by the readable content </p>
                              <div class="contact_bt"><a href="contact.html">Shop Now</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-7">
                              <div class="best_text">Best</div>
                              <div class="image_1"><img src="{{ asset($template->assets_path . '/images/img-1.png')}}"></div>
                           </div>
                           <div class="col-md-5">
                              <h1 class="banner_taital">New Model Cycle</h1>
                              <p class="banner_text">It is a long established fact that a reader will be distracted by the readable content </p>
                              <div class="contact_bt"><a href="contact.html">Shop Now</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-7">
                              <div class="best_text">Best</div>
                              <div class="image_1"><img src="{{ asset($template->assets_path . '/images/img-1.png')}}"></div>
                           </div>
                           <div class="col-md-5">
                              <h1 class="banner_taital">New Model Cycle</h1>
                              <p class="banner_text">It is a long established fact that a reader will be distracted by the readable content </p>
                              <div class="contact_bt"><a href="contact.html">Shop Now</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- cycle section start -->
      <div class="cycle_section layout_padding">
         <div class="container">
            <h1 class="cycle_taital">Our Cycle</h1>
            <p class="cycle_text">It is a long established fact that a reader will be distracted by the </p>
            <div class="cycle_section_2 layout_padding">
               <div class="row">
                  <div class="col-md-6">
                     <div class="box_main">
                        <h6 class="number_text">01</h6>
                        <div class="image_2"><img src="{{ asset($template->assets_path . '/images/img-2.png')}}"></div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <h1 class="cycles_text">Cycles</h1>
                     <p class="lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                     <div class="btn_main">
                        <div class="buy_bt"><a href="#">Buy Now</a></div>
                        <h4 class="price_text">Price <span style=" color: #f7c17b">$</span> <span style=" color: #325662">200</span></h4>
                     </div>
                  </div>
               </div>
            </div>
            <div class="cycle_section_3 layout_padding">
               <div class="row">
                  <div class="col-md-6">
                     <h1 class="cycles_text">Stylis Cycle</h1>
                     <p class="lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                     <div class="btn_main">
                        <div class="buy_bt"><a href="#">Buy Now</a></div>
                        <h4 class="price_text">Price <span style=" color: #f7c17b">$</span> <span style=" color: #325662">200</span></h4>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="box_main_3">
                        <h6 class="number_text_2">02</h6>
                        <div class="image_2"><img src="{{ asset($template->assets_path . '/images/img-3.png')}}"></div>
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
            <h1 class="about_taital">About Our cycle Store</h1>
            <p class="about_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters
            </p>
            <div class="about_main">
               <img src="{{ asset($template->assets_path . '/images/img-5.png')}}" class="image_5">
            </div>
         </div>
      </div>
      <!-- about section end -->
      <!-- client section start -->
      <div class="client_section layout_padding" id="testimonial" data-target="testimonial">
         <div id="my_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="client_main">
                        <h1 class="client_taital">Says Customers</h1>
                        <div class="client_section_2">
                           <div class="client_left">
                              <div><img src="{{ asset($template->assets_path . '/images/client-img.png')}}" class="client_img"></div>
                           </div>
                           <div class="client_right">
                              <div class="quote_icon"><img src="{{ asset($template->assets_path . '/images/quote-icon.png')}}"></div>
                              <p class="client_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
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
                              <div><img src="{{ asset($template->assets_path . '/images/client-img.png')}}" class="client_img"></div>
                           </div>
                           <div class="client_right">
                              <div class="quote_icon"><img src="{{ asset($template->assets_path . '/images/quote-icon.png')}}"></div>
                              <p class="client_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
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
                              <div><img src="{{ asset($template->assets_path . '/images/client-img.png')}}" class="client_img"></div>
                           </div>
                           <div class="client_right">
                              <div class="quote_icon"><img src="{{ asset($template->assets_path . '/images/quote-icon.png')}}"></div>
                              <p class="client_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                              <h3 class="client_name">Channery</h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
              <i class="fa fa-angle-right"></i>
            </a>
         </div>
      </div>
      <!-- client section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="contact_main">
               <h1 class="request_text">Order Now</h1>
               <form action="/action_page.php">
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Name" name="Name">
                  </div>
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Email" name="Name">
                  </div>
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Phone Numbar" name="Email">
                  </div>
                  <div class="form-group">
                     <textarea class="massage-bt" placeholder="Address" rows="5" id="comment" name="Address"></textarea>
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
                       <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-12">
                  <div class="call_text"><a href="#"><img src="{{ asset($template->assets_path . '/images/map-icon.png')}}"><span class="padding_left_0">Page when looking at its layou</span></a></div>
                  <div class="call_text"><a href="#"><img src="{{ asset($template->assets_path . '/images/call-icon.png')}}"><span class="padding_left_0">Call Now  +01 123467890</span></a></div>
                  <div class="call_text"><a href="#"><img src="{{ asset($template->assets_path . '/images/mail-icon.png')}}"><span class="padding_left_0">demo@gmail.com</span></a></div>
                  <div class="social_icon">
                     <ul>
                        <li><a href="#"><img src="{{ asset($template->assets_path . '/images/fb-icon1.png')}}"></a></li>
                        <li><a href="#"><img src="{{ asset($template->assets_path . '/images/twitter-icon.png')}}"></a></li>
                        <li><a href="#"><img src="{{ asset($template->assets_path . '/images/linkedin-icon.png')}}"></a></li>
                        <li><a href="#"><img src="{{ asset($template->assets_path . '/images/instagram-icon.png')}}"></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">Copyright 2019 All Right Reserved By.<a href="#"> 1commerce</p><p class="copyright_text">Disrtributed By. <a href="#">1commerce </a></p>
         </div>
      </div>
      <!-- copyright section end -->    
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
    },
    data() {
        return {
        };
    },
    computed: {
    },
    mounted() {
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
                    is_required: field.is_required,
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

        updateField(index, field) {
            axios
                .post(`${this.appUrl}/app/dynamic-form/update-input-field`, {
                    id: field.id,
                    title: field.title,
                    name: field.name,
                    type: field.type,
                    is_required: field.is_required,
                    options:
                        field.options.length > 0
                            ? JSON.stringify(field.options)
                            : null,
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
    },
};
</script>

<style scoped>
</style>
