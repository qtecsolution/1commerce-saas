<template>
    <!-- Modal -->
    <div
        class="modal fade modal-lg"
        id="heroButtonModal"
        tabindex="-1"
        aria-labelledby="heroButtonModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="heroButtonModalLabel">
                        Hero Area Button Settings
                    </h1>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="text" class="form-label"
                                    >Button Text:</label
                                >
                                <input
                                    type="text"
                                    placeholder="Get Started"
                                    v-model="hero_button_title"
                                    class="form-control"
                                />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="text" class="form-label"
                                    >Button URL:</label
                                >
                                <input
                                    type="text"
                                    placeholder="https://example.com"
                                    v-model="hero_button_url"
                                    class="form-control"
                                />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="text" class="form-label"
                                    >Button Color:</label
                                >
                                <input
                                    type="text"
                                    placeholder="transparent"
                                    v-model="hero_button_color"
                                    class="form-control"
                                />
                            </div>
                        </div>

                        <!-- <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="text" class="form-label"
                                    >Button Hover Color:</label
                                >
                                <input
                                    type="text"
                                    placeholder="white"
                                    v-model="hero_button_hover_color"
                                    class="form-control"
                                />
                            </div>
                        </div> -->

                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="text" class="form-label"
                                    >Button Text Color:</label
                                >
                                <input
                                    type="text"
                                    placeholder="white"
                                    v-model="hero_button_text_color"
                                    class="form-control"
                                />
                            </div>
                        </div>

                        <!-- <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="text" class="form-label"
                                    >Button Hover Text Color:</label
                                >
                                <input
                                    type="text"
                                    placeholder="black"
                                    v-model="hero_button_hover_text_color"
                                    class="form-control"
                                />
                            </div>
                        </div> -->

                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="text" class="form-label"
                                    >Button Border Color:</label
                                >
                                <input
                                    type="text"
                                    placeholder="white"
                                    v-model="hero_button_border_color"
                                    class="form-control"
                                />
                            </div>
                        </div>

                        <!-- <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="text" class="form-label"
                                    >Button Hover Border Color:</label
                                >
                                <input
                                    type="text"
                                    placeholder="white"
                                    v-model="hero_button_hover_border_color"
                                    class="form-control"
                                />
                            </div>
                        </div> -->
                    </div>
                </div>
                <!-- <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal"
                    >
                        Close
                    </button>
                    <button type="button" class="btn btn-primary" @click="sendToParent">
                        Save
                    </button>
                </div> -->
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "HeroButton",
    data() {
        return {
            hero_button_title: "",
            hero_button_url: "",
            hero_button_color: "",
            hero_button_text_color: "",
            hero_button_border_color: "",
            hero_button_hover_color: "",
            hero_button_hover_text_color: "",
            hero_button_hover_border_color: "",
        };
    },
    watch: {
        hero_button_title: function (newValue, oldValue) {
            // console.log(newValue, oldValue);
            this.sendToParent();
        },
        hero_button_url: function (newValue, oldValue) {
            // console.log(newValue, oldValue);
            this.sendToParent();
        },
        hero_button_color: function (newValue, oldValue) {
            // console.log(newValue, oldValue);
            this.sendToParent();
        },
        hero_button_text_color: function (newValue, oldValue) {
            // console.log(newValue, oldValue);
            this.sendToParent();
        },
        hero_button_border_color: function (newValue, oldValue) {
            // console.log(newValue, oldValue);
            this.sendToParent();
        },
        hero_button_hover_color: function (newValue, oldValue) {
            // console.log(newValue, oldValue);
            this.sendToParent();
        },
        hero_button_hover_text_color: function (newValue, oldValue) {
            // console.log(newValue, oldValue);
            this.sendToParent();
        },
        hero_button_hover_border_color: function (newValue, oldValue) {
            // console.log(newValue, oldValue);
            this.sendToParent();
        },
    },
    methods: {
        sendToParent() {
            this.$emit("update", {
                hero_button_title: this.hero_button_title,
                hero_button_url: this.hero_button_url,
                hero_button_color: this.hero_button_color,
                hero_button_text_color: this.hero_button_text_color,
                hero_button_border_color: this.hero_button_border_color,
                hero_button_hover_color: this.hero_button_hover_color,
                hero_button_hover_text_color: this.hero_button_hover_text_color,
                hero_button_hover_border_color: this.hero_button_hover_border_color,
            });
        }
    },
};
</script>
