<template>
    <i
        class="fas fa-pen-nib gear-icon"
        data-bs-toggle="modal"
        data-bs-target="#seedeePageSetupModal"
        title="Page Setup"
    ></i>

    <div
        class="modal fade"
        id="seedeePageSetupModal"
        tabindex="-1"
        aria-labelledby="seedeePageSetupModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="seedeePageSetupModalLabel">
                        Page Setup
                    </h1>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <div v-if="previewUrl" class="text-center">
                            <img
                                :src="previewUrl"
                                alt="Preview Image"
                                class="img-fluid mb-3"
                                width="50px"
                            />
                        </div>
                        <label for="logoImageInput" class="form-label">
                            Favicon:
                            <small class="text-muted">
                                (Max size: 100 KB. 1:1 aspect ratio.)
                            </small>
                        </label>
                        <input
                            type="file"
                            id="logoImageInput"
                            @change="previewImage"
                            class="form-control"
                        />
                    </div>
                    <div class="form-group mb-2">
                        <label for="logoImageInput" class="form-label">
                            Site Title:
                        </label>
                        <input
                            type="text"
                            v-model="siteTitle"
                            class="form-control"
                        />
                    </div>

                    <div class="form-group mb-2">
                        <label for="text" class="form-label">
                            Foreground Color:
                        </label>
                        <div class="row">
                            <div class="col">
                                <input
                                    type="color"
                                    placeholder="white"
                                    v-model="colorData.foreground_color"
                                    class="form-control h-100"
                                />
                            </div>
                            <div class="col">
                                <input
                                    type="text"
                                    placeholder="white"
                                    v-model="colorData.foreground_color"
                                    class="form-control"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="text" class="form-label">
                            Background Color:
                        </label>
                        <div class="row">
                            <div class="col">
                                <input
                                    type="color"
                                    placeholder="white"
                                    v-model="colorData.background_color"
                                    class="form-control h-100"
                                />
                            </div>
                            <div class="col">
                                <input
                                    type="text"
                                    placeholder="white"
                                    v-model="colorData.background_color"
                                    class="form-control"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="text" class="form-label">
                            Primary Text Color:
                        </label>
                        <div class="row">
                            <div class="col">
                                <input
                                    type="color"
                                    placeholder="white"
                                    v-model="colorData.primary_text_color"
                                    class="form-control h-100"
                                />
                            </div>
                            <div class="col">
                                <input
                                    type="text"
                                    placeholder="white"
                                    v-model="colorData.primary_text_color"
                                    class="form-control"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="text" class="form-label">
                            Secondary Text Color:
                        </label>
                        <div class="row">
                            <div class="col">
                                <input
                                    type="color"
                                    placeholder="white"
                                    v-model="colorData.secondary_text_color"
                                    class="form-control h-100"
                                />
                            </div>
                            <div class="col">
                                <input
                                    type="text"
                                    placeholder="white"
                                    v-model="colorData.secondary_text_color"
                                    class="form-control"
                                />
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
    props: ["colorData", "logoData", "companyName"],
    emits: ["save"],
    data() {
        return {
            selectedImage: null,
            previewUrl: null,
            siteTitle: this.companyName,
        };
    },
    watch: {
        logoData: {
            immediate: true,
            handler(newValue) {
                this.previewUrl = newValue || null;
            },
        },
    },
    methods: {
        previewImage(event) {
            const file = event.target.files[0];
            this.selectedImage = file;
            this.previewUrl = URL.createObjectURL(file);
        },
        saveChanges() {
            const dataToSave = {
                siteTitle: this.siteTitle,
            };

            if (this.selectedImage) {
                dataToSave.selectedImage = this.selectedImage;
            }

            this.$emit("save", dataToSave);

            const modalElement = document.getElementById(
                "seedeePageSetupModal"
            );
            const modal = bootstrap.Modal.getInstance(modalElement);
            if (modal) {
                modal.hide();
            }
            // Clear the file input after saving
            const fileInput = document.getElementById("logoImageInput");
            if (fileInput) {
                fileInput.value = null;
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
