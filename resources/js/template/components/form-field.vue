<template>
    <div class="form-group mb-3">
        <label :for="field.name" :style="{ color: styles.color }">{{
            field.title
        }}</label>
        <input
            v-if="['text', 'number', 'date', 'time', 'datetime-local'].includes(field.type)"
            :type="field.type"
            :name="field.title"
            class="form-control"
            :required="field.required"
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
            :required="field.required"
        ></textarea>

        <!-- Select Input -->
        <select
            v-if="field.type === 'select'"
            :name="field.name"
            class="form-control"
            :required="field.required"
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
                    :required="field.required"
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
                    :required="field.required"
                />
                <label :for="field.name + index" class="form-check-label">
                    {{ option }}
                </label>
            </div>
        </div>
    </div>
</template>

<script>
export default {
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
};
</script>

<style scoped></style>
