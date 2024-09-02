<template>
    <div class="col-12 p-0">
        <button
            type="button"
            class="btn btn-info btn-sm my-2 col-12"
            data-bs-toggle="modal"
            :data-bs-target="'#' + modalId"
            :title="modalTitle"
        >
            Add New Input
        </button>
    </div>

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
                    <!-- Name and Type Fields -->
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group mb-2">
                                <label for="name" class="form-label">
                                    Field Name:
                                </label>
                                <input
                                    v-model="field.title"
                                    type="text"
                                    placeholder="Enter field name"
                                    class="form-control"
                                />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mb-2">
                                <label for="type" class="form-label">
                                    Field Type:
                                </label>
                                <select
                                    v-model="field.type"
                                    class="form-control"
                                >
                                    <option value="text">Text</option>
                                    <option value="textarea">Textarea</option>
                                    <option value="number">Number</option>
                                    <option value="date">Date</option>
                                    <option value="time">Time</option>
                                    <option value="datetime-local">
                                        DateTime
                                    </option>
                                    <option value="select">Select</option>
                                    <option value="radio">Radio</option>
                                    <option value="checkbox">Checkbox</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Required Checkbox -->
                    <div class="form-check mb-2">
                        <input
                            v-model="field.is_required"
                            class="form-check-input"
                            type="checkbox"
                            id="isRequired"
                        />
                        <label class="form-check-label" for="isRequired">
                            Required
                        </label>
                    </div>

                    <!-- Options Section for Select, Radio, Checkbox -->
                    <div
                        v-if="
                            ['select', 'radio', 'checkbox'].includes(field.type)
                        "
                    >
                        <div
                            class="form-group mb-2 row"
                            v-for="(option, index) in field.options"
                            :key="index"
                        >
                            <div class="col-8">
                                <input
                                    v-model="field.options[index]"
                                    type="text"
                                    class="form-control"
                                    :placeholder="'Enter option ' + (index + 1)"
                                />
                            </div>
                            <div class="col-2 d-flex align-items-center">
                                <button
                                    type="button"
                                    class="btn btn-danger btn-sm"
                                    @click="removeOption(index)"
                                >
                                    Remove
                                </button>
                            </div>
                        </div>
                        <button
                            type="button"
                            class="btn btn-link"
                            @click="addOption"
                        >
                            Add Option
                        </button>
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
    props: ["modalId", "modalTitle"],
    emits: ["save"],
    data() {
        return {
            field: {
                title: "",
                name: "",
                type: "text",
                is_required: false,
                options: [],
            },
        };
    },
    watch: {
        "field.title": {
            handler(newValue) {
                this.field.name = newValue
                    .toLowerCase()
                    .replace(/([a-z])([A-Z])/g, "$1_$2") // Separate camelCase with an underscore
                    .replace(/\s+/g, "_") // Replace spaces with underscores
                    .replace(/[\/\(\)\[\]\.]/g, "_") // Replace special characters with underscores
                    .replace(/_+/g, "_"); // Replace multiple underscores with a single underscore
            },
            deep: true,
        },
    },
    methods: {
        addOption() {
            this.field.options.push("");
        },
        removeOption(index) {
            this.field.options.splice(index, 1);
        },
        saveChanges() {
            this.$emit("save", this.field);
            this.resetForm(); // Reset the form after saving

            // Hide the modal
            const modalElement = document.getElementById(this.modalId);
            const modal = bootstrap.Modal.getInstance(modalElement);
            if (modal) {
                modal.hide();
            }
        },
        resetForm() {
            // Reset the form fields to their initial state
            this.field.title = "";
            this.field.name = "";
            this.field.type = "text";
            this.field.is_required = false;
            this.field.options = [];
        },
    },
};
</script>

<style scoped></style>
