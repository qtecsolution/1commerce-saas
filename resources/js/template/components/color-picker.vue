<template>
    <div class="color-picker-wrapper">
        <div v-if="showPicker" class="color-picker-content">
            <input type="color" v-model="updatedColor" />
            <input type="text" v-model="updatedColor" />
            <button @click="saveColor">Save</button>
            <button @click="closePicker">Close</button>
        </div>
        <div v-else class="d-flex">
            <button
                class="color-picker-button"
                @click="togglePicker"
                :style="{ backgroundColor: updatedColor }"
                title="Color settings"
            ></button>
            <label>{{ updatedColor }}</label>
        </div>
    </div>
</template>

<script>
export default {
    props: ["color"],
    emits: ["save"],
    data() {
        return {
            updatedColor: this.color,
            showPicker: false,
        };
    },
    watch: {
        color(newValue) {
            this.updatedColor = newValue;
        },
        updatedColor(newValue) {
            this.$emit("update", this.updatedColor)
        },
    },
    methods: {
        togglePicker() {
            this.showPicker = !this.showPicker;
        },
        closePicker() {
            this.showPicker = false;
        },
        saveColor() {
            this.$emit("save", this.updatedColor);
            this.closePicker();
        },
    },
};
</script>

<style scoped>
.color-picker-wrapper {
    position: absolute;
    padding: 8px;
    border-radius: 5px;
    background: #0d6efd;
}

.color-picker-button {
    border: none;
    padding: 13px;
    border-radius: 50%;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 8px;
}

.color-picker-content {
    display: flex;
    align-items: center;
    gap: 5px;
    margin-left: 10px;
}

.color-picker-content input[type="text"] {
    width: 80px;
}

.color-picker-content button {
    padding: 3px 8px;
    background-color: #4caf50;
    color: white;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

.color-picker-content button:hover {
    background-color: #45a049;
}

.color-picker-content button:last-child {
    background-color: #f44336;
}

.color-picker-content button:last-child:hover {
    background-color: #d32f2f;
}

label {
    color: white;
    padding: 2px;
}
</style>
