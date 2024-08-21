<template>
    <!-- Modal -->
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
                    <div class="text-center mb-3">
                        <img :src="image" width="300" class="img-fluid" />
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Image:</label>
                        <input
                            type="file"
                            class="form-control"
                            accept="image/*"
                            @change="onFileChange"
                        />
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
                        Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "ImageModal",
    props: ["modalId", "modalTitle", "section", "previewURL"],
    data() {
        return {
            image: "",
            image_raw: [],
        };
    },
    watch: {
        previewURL: {
            immediate: true,
            handler(newValue) {
                this.image = newValue || null;
            },
        },
    },
    methods: {
        sendToParent() {
            this.$emit("update", {
                image: this.image,
                image_raw: this.image_raw,
                section: this.section,
            });

            const modalElement = document.getElementById(this.modalId);
            const modal = bootstrap.Modal.getInstance(modalElement);
            if (modal) {
                modal.hide();
            }
        },

        onFileChange(event) {
            const file = event.target.files[0];
            if (file && file.type.startsWith("image/")) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    this.image = e.target.result;
                    this.image_raw = file;
                };
                reader.readAsDataURL(file);
            }
        },
    },
};
</script>
