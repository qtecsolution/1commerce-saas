<template>
    <div>
        <button
            class="d-flex align-items-center gap-2 btn btn-primary position-absolute top-0 start-0"
            type="button"
            :style="style"
            title="Color settings"
        >
            <input type="color" v-model="updatedColor" />
            <label style="margin: 0">{{ updatedColor }}</label>
        </button>
    </div>
</template>

<script>
export default {
    name: "ColorPicker",
    props: ["style", "section", "color"],
    data() {
        return {
            updatedColor: this.color || "",
        };
    },
    watch: {
        color(newValue) {
            this.updatedColor = newValue;
        },
        updatedColor(newValue, oldValue) {
            if (oldValue !== "") {
                this.updateColor();
            }
        },
    },
    methods: {
        updateColor() {
            this.$emit("update", {
                color: this.updatedColor,
                section: this.section,
            });
        },
    },
};
</script>

<style scoped>
input[type="color"] {
    width: 25px;
    height: 25px;
    border-radius: 50%;
    padding: 0;
    border: 0px solid transparent;
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    cursor: pointer;
}

input[type="color"]::-webkit-color-swatch-wrapper {
    padding: 0;
    border-radius: 50%;
    border: 0px solid transparent;
}

input[type="color"]::-webkit-color-swatch {
    border-radius: 50%;
    border: 0px solid transparent;
}

button {
    /* z-index: 1500; */
    cursor: pointer;
}
</style>
