<template>
    <div class="form-group mb-3">
        <label :for="field.name">{{ field.name }}</label>
        <input
            v-if="['text', 'number'].includes(field.type)"
            :type="field.type"
            :name="field.name"
            class="form-control"
            :required="field.required"
        />

        <!-- Select Input -->
        <select
            v-if="field.type === 'select'"
            :name="field.name"
            class="form-control"
            :required="field.required"
        >
            <option v-for="(option, index) in field.options" :key="index">
                {{ option }}
            </option>
        </select>

        <!-- Radio Inputs -->
        <div v-if="field.type === 'radio'">
            <div
                v-for="(option, index) in field.options"
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
                v-for="(option, index) in field.options"
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
            type: Object,
            required: true,
        },
    },
};
</script>

<style scoped></style>
