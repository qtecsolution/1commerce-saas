<template>
    <button
        type="button"
        class="button1"
        data-bs-toggle="modal"
        :data-bs-target="'#' + modalId"
        :title="modalTitle"
    >
        Edit
    </button>

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
                                    v-model="editableField.title"
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
                                    v-model="editableField.type"
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
                            v-model="editableField.is_required"
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
                            ['select', 'radio', 'checkbox'].includes(
                                editableField.type
                            )
                        "
                    >
                        <div
                            class="form-group mb-2 row"
                            v-for="(option, index) in editableField.options"
                            :key="index"
                        >
                            <div class="col-10">
                                <input
                                    v-model="editableField.options[index]"
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
    props: ["modalId", "modalTitle", "field"],
    emits: ["save"],
    data() {
        return {
            editableField: {
                ...this.field,
                options: this.field.options
                    ? JSON.parse(this.field.options)
                    : [],
                is_required: this.field.is_required == 1 ? true : false,
            },
        };
    },
    watch: {
        "editableField.title": {
            handler(newValue) {
                this.editableField.name = newValue
                    .toLowerCase()
                    .replace(/([a-z])([A-Z])/g, "$1_$2")
                    .replace(/\s+/g, "_")
                    .replace(/[\/\(\)\[\]\.]/g, "_")
                    .replace(/_+/g, "_");
            },
            deep: true,
        },
    },
    methods: {
        addOption() {
            this.editableField.options.push("");
        },
        removeOption(index) {
            this.editableField.options.splice(index, 1);
        },
        saveChanges() {
            // Convert options array back to string if needed
            this.$emit("save", this.editableField);

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
.button1 {
    background-color: #4caf50;
    color: white;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    margin: 2px;
    font-size: 12px;
}

.button1:hover {
    background-color: #45a049;
}
</style>
