<template>
    <div
        class="modal fade"
        id="footerModal"
        tabindex="1"
        aria-labelledby="footerModalLabel"
        aria-hidden="true"
    >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="footerModalLabel">
                        Footer Setup
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
                        <label for="text" class="form-label"> Title: </label>
                        <input
                            type="text"
                            placeholder="white"
                            v-model="footerData.title"
                            class="form-control"
                        />
                    </div>
                    <div class="form-group mb-2">
                        <label for="text" class="form-label">
                            Text Color:
                        </label>
                        <div class="row">
                            <div class="col">
                                <input
                                    type="color"
                                    placeholder="white"
                                    v-model="footerData.color"
                                    class="form-control h-100"
                                />
                            </div>
                            <div class="col">
                                <input
                                    type="text"
                                    placeholder="white"
                                    v-model="footerData.color"
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
                                    v-model="footerData.background_color"
                                    class="form-control h-100"
                                />
                            </div>
                            <div class="col">
                                <input
                                    type="text"
                                    placeholder="white"
                                    v-model="footerData.background_color"
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
    props: ["footerData"],
    emits: ["save"],
    methods: {
        saveChanges() {
            this.$emit("save", this.footerData);

            const modalElement = document.getElementById("footerModal");
            const modal = bootstrap.Modal.getInstance(modalElement);
            if (modal) {
                modal.hide();
            }
        },
    },
};
</script>

<style scoped>

</style>
