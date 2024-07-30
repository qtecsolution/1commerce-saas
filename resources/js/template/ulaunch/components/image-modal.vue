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
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "ImageModal",
    props: ["modalId", "modalTitle", "section"],
    data() {
        return {
            image: [],
            image_raw: [],
        };
    },
    watch: {
        // image(newValue, oldValue) {
        //     this.sendToParent();
        // },
    },
    methods: {
        sendToParent() {
            this.$emit("update", {
                image: this.image,
                image_raw: this.image_raw,
                section: this.section
            });
        },

        onFileChange(event) {
            const file = event.target.files[0];
            if (file && file.type.startsWith("image/")) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    this.image = e.target.result;
                    this.image_raw = file;
                    this.sendToParent();
                };
                reader.readAsDataURL(file);
            }
        },
    },
};
</script>
