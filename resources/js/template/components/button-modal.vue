<template>
    <i
        class="fas fa-pen-nib gear-icon"
        data-bs-toggle="modal"
        :data-bs-target="'#' + modalId"
        :title="modalTitle"
    ></i>

    <div
        class="modal fade"
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
                <div class="modal-footer d-flex justify-content-center">
                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal"
                    >
                        Close
                    </button>
                    <button
                        type="button"
                        class="btn btn-dark"
                        @click="saveChanges"
                    >
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["modalId", "modalTitle", "buttonData"],
    emits: ["save"],
    methods: {
        saveChanges() {
            this.$emit("save", this.buttonData);
            const modalElement = document.getElementById(this.modalId);
            const modal = bootstrap.Modal.getInstance(modalElement);
            if (modal) {
                modal.hide();
            }
        },
    },
};
</script>

<style scoped>
.gear-icon {
    position: absolute;
    margin-top: -12px;
    margin-left: 2px;
    background: #000000;
    color: #ffffff;
    padding: 5px;
    border-radius: 50%;
    cursor: pointer;
    transition: box-shadow 0.3s ease;
}

.gear-icon:hover {
    box-shadow: 0 4px 8px rgba(135, 135, 135, 0.6),
        0 6px 20px rgba(145, 145, 145, 0.5);
}
</style>
