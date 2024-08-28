export default {
    addOrderAreaField(field) {
        axios
            .post(`${this.appUrl}/app/dynamic-form/add-input-field`, {
                user_template_id: this.user_template.id,
                title: field.title,
                name: field.name,
                type: field.type,
                is_required: field.is_required,
                options:
                    field.options.length > 0
                        ? JSON.stringify(field.options)
                        : null,
            })
            .then((response) => {
                // console.log(response.data);

                if (response.data.success) {
                    this.orderAreaFields.push(response.data.field);
                    this.toast("success", "Resource updated successfully.");
                } else {
                    this.toast("error", "Something went wrong. Please try again.");
                }
            })
            .catch((error) => {
                // console.error(error);
                this.toast("error", "Error updating:", error);
            });
    },

    deleteOrderAreaField(index, field) {
        axios
            .post(`${this.appUrl}/app/dynamic-form/delete-input-field`, {
                id: field.id,
            })
            .then((response) => {
                // console.log(response.data);

                if (response.data.success) {
                    this.orderAreaFields.splice(index, 1);
                    this.toast("success", "Resource updated successfully.");
                } else {
                    this.toast("error", "Something went wrong. Please try again.");
                }
            });
    },

    updateOrderAreaField(index, field) {
        axios
            .post(`${this.appUrl}/app/dynamic-form/update-input-field`, {
                id: field.id,
                title: field.title,
                name: field.name,
                type: field.type,
                is_required: field.is_required,
                options:
                    field.options.length > 0
                        ? JSON.stringify(field.options)
                        : null,
            })
            .then((response) => {
                // console.log(response.data);

                if (response.data.success) {
                    this.orderAreaFields = [
                        ...this.orderAreaFields.slice(0, index),
                        response.data.field,
                        ...this.orderAreaFields.slice(index + 1),
                    ];

                    this.toast("success", "Resource updated successfully.");
                } else {
                    this.toast("error", "Something went wrong. Please try again.");
                }
            });
    }
}