<template>
    <!-- Modal -->
    <div
        class="modal fade modal-lg"
        :id="modalId"
        tabindex="-1"
        :aria-labelledby="modalId + 'Label'"
        aria-hidden="true"
    >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" :id="modalId + 'Label'">
                        {{ modalTitle }}
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
                                    v-model="title"
                                    class="form-control"
                                />
                            </div>
                        </div>

                        <div class="col-md-6" v-if="section != 'order'">
                            <div class="form-group mb-2">
                                <label for="text" class="form-label"
                                    >Button URL:</label
                                >
                                <input
                                    type="text"
                                    placeholder="https://example.com | #order"
                                    v-model="url"
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
                                    v-model="color"
                                    class="form-control"
                                />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="text" class="form-label"
                                    >Button Hover Color:</label
                                >
                                <input
                                    type="text"
                                    placeholder="white"
                                    v-model="hover_color"
                                    class="form-control"
                                />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="text" class="form-label"
                                    >Button Text Color:</label
                                >
                                <input
                                    type="text"
                                    placeholder="white"
                                    v-model="text_color"
                                    class="form-control"
                                />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="text" class="form-label"
                                    >Button Hover Text Color:</label
                                >
                                <input
                                    type="text"
                                    placeholder="black"
                                    v-model="hover_text_color"
                                    class="form-control"
                                />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="text" class="form-label"
                                    >Button Border Color:</label
                                >
                                <input
                                    type="text"
                                    placeholder="white"
                                    v-model="border_color"
                                    class="form-control"
                                />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="text" class="form-label"
                                    >Button Hover Border Color:</label
                                >
                                <input
                                    type="text"
                                    placeholder="white"
                                    v-model="hover_border_color"
                                    class="form-control"
                                />
                            </div>
                        </div>
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
    name: "ButtonModal",
    props: ["modalId", "modalTitle", "section"],
    data() {
        return {
            title: "",
            url: "",
            color: "",
            text_color: "",
            border_color: "",
            hover_color: "",
            hover_text_color: "",
            hover_border_color: "",
        };
    },
    watch: {
        title: function (newValue, oldValue) {
            // console.log(newValue, oldValue);
            this.sendToParent();
        },
        url: function (newValue, oldValue) {
            // console.log(newValue, oldValue);
            this.sendToParent();
        },
        color: function (newValue, oldValue) {
            // console.log(newValue, oldValue);
            this.sendToParent();
        },
        text_color: function (newValue, oldValue) {
            // console.log(newValue, oldValue);
            this.sendToParent();
        },
        border_color: function (newValue, oldValue) {
            // console.log(newValue, oldValue);
            this.sendToParent();
        },
        hover_color: function (newValue, oldValue) {
            // console.log(newValue, oldValue);
            this.sendToParent();
        },
        hover_text_color: function (newValue, oldValue) {
            // console.log(newValue, oldValue);
            this.sendToParent();
        },
        hover_border_color: function (newValue, oldValue) {
            // console.log(newValue, oldValue);
            this.sendToParent();
        },
    },
    methods: {
        sendToParent() {
            this.$emit("update", {
                title: this.title,
                url: this.url,
                color: this.color,
                text_color: this.text_color,
                border_color: this.border_color,
                hover_color: this.hover_color,
                hover_text_color: this.hover_text_color,
                hover_border_color: this.hover_border_color,
                section: this.section,
            });
        },
    },
};
</script>
