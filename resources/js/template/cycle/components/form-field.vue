<template>
    <div
        class="form-group"
        style="color: #ffffff !important; text-align: left !important;"
    >
        <!-- <label :for="field.name" :style="{ color: styles.color }">{{
            field.title
        }}</label> -->
        <input
            v-if="
                ['text', 'number', 'date', 'time', 'datetime-local'].includes(
                    field.type
                )
            "
            :type="field.type"
            :name="field.title"
            class="email-bt"
            :placeholder="formattedPlaceholder"
            :required="field.is_required == 1 ? true : false"
        />

        <!-- Textarea Input -->
        <textarea
            v-if="field.type === 'textarea'"
            :name="field.name"
            class="massage-bt"
            rows="5"
            :placeholder="formattedPlaceholder"
            :required="field.is_required == 1 ? true : false"
        ></textarea
        >

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
            <label :for="field.name">{{ field.title }}</label>
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
                    :placeholder="formattedPlaceholder"
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
            <label :for="field.name">{{ field.title }}</label>
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
                    :placeholder="formattedPlaceholder"
                    class="form-check-input"
                    :required="field.is_required == 1 ? true : false"
                />
                <label :for="field.name + index" class="form-check-label">
                    {{ option }}
                </label>
            </div>
        </div>

        <div class="mt-1 d-flex justify-content-end">
            <EditInputModal
                :modalId="'editModal' + field.id"
                modalTitle="Edit Input Field"
                :field="field"
                @save="updateField($event)"
            />
            <button
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
import EditInputModal from "./edit-input-modal.vue";
export default {
    components: {
        EditInputModal,
    },
    props: {
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
        formattedPlaceholder() {
            return (
                this.field.title.charAt(0).toUpperCase() +
                this.field.title.slice(1)
            );
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
