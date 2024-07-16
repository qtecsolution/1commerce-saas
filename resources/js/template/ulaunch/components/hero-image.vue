<template>
    <!-- Modal -->
    <div
        class="modal fade"
        id="heroImageModal"
        tabindex="-1"
        aria-labelledby="heroImageModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="heroImageModalLabel">
                        Hero Area Image Settings
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
                            id=""
                            class="form-control"
                            accept="image/*"
                            @change="onFileChange"
                        />
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
    name: "HeroImage",
    data() {
        return {
            hero_image: [],
            hero_image_raw: [],
        };
    },
    watch: {
        hero_image(newValue, oldValue) {
            this.sendToParent();
        },
    },
    methods: {
        sendToParent() {
            this.$emit("update", {
                hero_image: this.hero_image,
                hero_image_raw: this.hero_image_raw
            });
        },

        onFileChange(event) {
            const file = event.target.files[0];
            if (file && file.type.startsWith("image/")) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    this.hero_image = e.target.result;
                    this.hero_image_raw = file;
                    this.sendToParent();
                };
                reader.readAsDataURL(file);
            } else {
                this.hero_image = null;
            }
        },
    },
};
</script>
