<template>
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
