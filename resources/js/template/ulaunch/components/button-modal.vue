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
                                    v-model="buttonData.title"
                                    class="form-control"
                                />
                            </div>
                            <span class="text-danger" v-if="titleError">
                                This field is required
                            </span>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="text" class="form-label"
                                    >Button URL:</label
                                >
                                <input
                                    type="text"
                                    placeholder="https://example.com | #order"
                                    v-model="buttonData.url"
                                    class="form-control"
                                />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="text" class="form-label">
                                    Button Color:
                                </label>
                                <div class="row">
                                    <div class="col">
                                        <input
                                            type="color"
                                            placeholder="transparent"
                                            v-model="buttonData.color"
                                            class="form-control h-100"
                                        />
                                    </div>
                                    <div class="col">
                                        <input
                                            type="text"
                                            placeholder="transparent"
                                            v-model="buttonData.color"
                                            class="form-control"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="text" class="form-label">
                                    Button Hover Color:
                                </label>
                                <div class="row">
                                    <div class="col">
                                        <input
                                            type="color"
                                            placeholder="transparent"
                                            v-model="buttonData.hover_color"
                                            class="form-control h-100"
                                        />
                                    </div>
                                    <div class="col">
                                        <input
                                            type="text"
                                            placeholder="transparent"
                                            v-model="buttonData.hover_color"
                                            class="form-control"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="text" class="form-label">
                                    Button Text Color:
                                </label>
                                <div class="row">
                                    <div class="col">
                                        <input
                                            type="color"
                                            placeholder="transparent"
                                            v-model="buttonData.text_color"
                                            class="form-control h-100"
                                        />
                                    </div>
                                    <div class="col">
                                        <input
                                            type="text"
                                            placeholder="transparent"
                                            v-model="buttonData.text_color"
                                            class="form-control"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="text" class="form-label">
                                    Button Hover Text Color:
                                </label>
                                <div class="row">
                                    <div class="col">
                                        <input
                                            type="color"
                                            placeholder="transparent"
                                            v-model="
                                                buttonData.hover_text_color
                                            "
                                            class="form-control h-100"
                                        />
                                    </div>
                                    <div class="col">
                                        <input
                                            type="text"
                                            placeholder="transparent"
                                            v-model="
                                                buttonData.hover_text_color
                                            "
                                            class="form-control"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="text" class="form-label">
                                    Button Border Color:
                                </label>
                                <div class="row">
                                    <div class="col">
                                        <input
                                            type="color"
                                            placeholder="transparent"
                                            v-model="buttonData.border_color"
                                            class="form-control h-100"
                                        />
                                    </div>
                                    <div class="col">
                                        <input
                                            type="text"
                                            placeholder="transparent"
                                            v-model="buttonData.border_color"
                                            class="form-control"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-2">
                                <label for="text" class="form-label">
                                    Button Hover Border Color:
                                </label>
                                <div class="row">
                                    <div class="col">
                                        <input
                                            type="color"
                                            placeholder="transparent"
                                            v-model="
                                                buttonData.hover_border_color
                                            "
                                            class="form-control h-100"
                                        />
                                    </div>
                                    <div class="col">
                                        <input
                                            type="text"
                                            placeholder="transparent"
                                            v-model="
                                                buttonData.hover_border_color
                                            "
                                            class="form-control"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal"
                    >
                        Close
                    </button>
                    <button
                        type="button"
                        class="btn btn-primary"
                        @click="sendToParent"
                    >
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "ButtonModal",
    props: ["modalId", "modalTitle", "section", "buttonData"],
    emits: ["update"],
    data() {
        return {
            titleError: false,
        };
    },
    methods: {
        sendToParent() {
            if (this.buttonData.title == "" || this.buttonData.title == null) {
                this.titleError = true;
                this.buttonData.title = "Untitled";
                return;
            }

            this.$emit("update", {
                section: this.section,
                button: this.buttonData,
            });

            const modalElement = document.getElementById(this.modalId);
            const modal = bootstrap.Modal.getInstance(modalElement);
            if (modal) {
                modal.hide();
            }
        },
    },
};
</script>
