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
                    <div class="form-group">
                        <div v-if="previewUrl">
                            <img
                                :src="previewUrl"
                                alt="Preview Image"
                                class="img-fluid mb-3"
                            />
                        </div>
                        <label :for="modalId + 'imageInput'" class="form-label">
                            Upload Image:
                        </label>
                        <input
                            type="file"
                            :id="modalId + 'imageInput'"
                            @change="previewImage"
                            class="form-control"
                        />
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
                        @click="saveImage"
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
    props: ["modalId", "modalTitle", "imgData"],
    emits: ["save"],
    data() {
        return {
            selectedImage: null,
            previewUrl: null,
        };
    },
    watch: {
        imgData: {
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
        saveImage() {
            if (this.selectedImage) {
                this.$emit("save", this.selectedImage);

                const modalElement = document.getElementById(this.modalId);
                const modal = bootstrap.Modal.getInstance(modalElement);
                if (modal) {
                    modal.hide();
                }
                // Clear the file input after saving
                const fileInput = document.getElementById(
                    this.modalId + "imageInput"
                );
                if (fileInput) {
                    fileInput.value = null;
                }
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
