<template>
    <div class="form-group mb-3">
        <label :for="field.name" :style="{ color: styles.color }">{{
            field.title
        }}</label>
        <input
            v-if="
                ['text', 'number', 'date', 'time', 'datetime-local'].includes(
                    field.type
                )
            "
            :type="field.type"
            :name="field.title"
            class="form-control"
            :required="field.is_required == 1 ? true : false"
            :style="{
                background_color: styles.background_color + ' !important',
            }"
        />

        <!-- Textarea Input -->
        <textarea
            v-if="field.type === 'textarea'"
            :name="field.name"
            rows="2"
            class="form-control"
            :required="field.is_required == 1 ? true : false"
        ></textarea>

        <!-- Select Input -->
        <select
            v-if="field.type === 'select'"
            :name="field.name"
            class="form-control"
            :required="field.is_required == 1 ? true : false"
        >
            <option v-for="(option, index) in parsedOptions" :key="index">
                {{ option }}
            </option>
        </select>

        <!-- Radio Inputs -->
        <div v-if="field.type === 'radio'">
            <div
                v-for="(option, index) in parsedOptions"
                :key="index"
                class="form-check"
            >
                <input
                    type="radio"
                    :name="field.name"
                    :id="field.name + index"
                    :value="option"
                    class="form-check-input"
                    :required="field.is_required == 1 ? true : false"
                />
                <label :for="field.name + index" class="form-check-label">
                    {{ option }}
                </label>
            </div>
        </div>

        <!-- Checkbox Inputs -->
        <div v-if="field.type === 'checkbox'">
            <div
                v-for="(option, index) in parsedOptions"
                :key="index"
                class="form-check"
            >
                <input
                    type="checkbox"
                    :name="field.name + '[]'"
                    :id="field.name + index"
                    :value="option"
                    class="form-check-input"
                    :required="field.is_required == 1 ? true : false"
                />
                <label :for="field.name + index" class="form-check-label">
                    {{ option }}
                </label>
            </div>
        </div>

        <div class="mt-1 d-flex justify-content-end" v-if="isEditable">
            <EditFieldModal
                :modalId="'editModal' + field.id"
                modalTitle="Edit Input Field"
                :field="field"
                @save="updateField($event)"
            />
            <button
                v-if="isDeletable"
                type="button"
                class="button2"
                @click="deleteField"
                title="Delete this field"
            >
                Delete
            </button>
        </div>
    </div>
</template>

<script>
import EditFieldModal from "./EditFieldModal.vue";
export default {
    components: {
        EditFieldModal,
    },
    props: {
        isEditable: Boolean,
        isDeletable: Boolean,
        field: {
            title: String,
            name: String,
            type: Object,
            required: true,
            options: {
                type: [Array, String],
                default: () => [],
            },
        },
        styles: Object,
    },
    emits: ["update", "delete"],
    data() {
        return {};
    },
    computed: {
        parsedOptions() {
            if (typeof this.field.options === "string") {
                try {
                    return JSON.parse(this.field.options);
                } catch (e) {
                    console.error("Failed to parse options:", e);
                    return [];
                }
            }
            return this.field.options;
        },
    },
    methods: {
        deleteField() {
            this.$emit("edit");
        },
        deleteField() {
            this.$emit("delete", this.field);
        },
        updateField(updatedField) {
            this.$emit("update", updatedField);
        },
    },
};
</script>

<style scoped>
.button2 {
    background-color: #f44336;
    color: white;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    margin: 2px;
    font-size: 12px;
}

.button2 {
    background-color: #d32f2f;
}
</style>
