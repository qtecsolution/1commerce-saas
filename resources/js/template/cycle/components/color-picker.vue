<template>
    <div>
        <button
            class="d-flex align-items-center gap-2 btn btn-primary position-absolute top-0 start-0"
            type="button"
            :style="style"
            title="Color settings"
            @click="showPicker = !showPicker"
            v-if="!showPicker"
        >
            <div
                class="color-preview"
                :style="{ backgroundColor: updatedColor }"
            ></div>
            <label style="margin: 0">{{ updatedColor }}</label>
        </button>
        <button
            v-else
            class="d-flex align-items-center gap-2 btn btn-primary position-absolute top-0 start-0"
            type="button"
            :style="style"
            title="Color settings"
        >
            <input type="color" v-model="updatedColor" />
            <input type="text" v-model="updatedColor" />
            <button @click="updateColor" class="btn btn-light btn-sm">
                Save
            </button>
            <button
                class="btn btn-danger btn-sm"
                @click="showPicker = !showPicker"
            >
                Cancel
            </button>
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
            showPicker: false,
        };
    },
    watch: {
        color(newValue) {
            this.updatedColor = newValue;
        },

        updatedColor(newValue, oldValue) {
            this.$emit("instantUpdate", {
                color: this.updatedColor,
                section: this.section,
            });
            
        },
    },
    methods: {
        updateColor() {
            this.$emit("update", {
                color: this.updatedColor,
                section: this.section,
            });

            this.showPicker = !this.showPicker;
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

input[type="text"] {
    width: 80px;
    height: 30px;
    border-radius: 4px;
    outline: 0;
    border: none;
}

input[type="text"]::focus {
    outline: 0;
    border: none;
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

.color-preview {
    background: #fff;
    width: 25px;
    height: 25px;
    border-radius: 50%;
}
</style>
