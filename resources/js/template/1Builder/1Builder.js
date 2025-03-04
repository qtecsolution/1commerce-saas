export default {
    toast(icon, title) {
        this.$swal({
            toast: true,
            icon: icon,
            title: title,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
        });
    },

    imageSource(path, disk = "public") {
        if (disk == "storage" && path) {
            return `${this.appUrl}/storage/${path}`;
        }

        return `${this.appUrl}/${this.user_template.template.assets_path}/${path}`;
    },

    getSection(section) {
        return this.user_template.template_sections.find(
            (item) => item.section === section
        );
    },

    getElement(section, element) {
        let filteredSection = this.user_template.template_sections.find(
            (item) => item.section === section
        );

        return filteredSection.elements.find(
            (item) => item.name === element
        );
    },

    decodedData(data) {
        return JSON.parse(data);
    },

    getFeatureImage(feature, index) {
        const imagePath = feature.image
            ? feature.image
            : `/images/feature${index > 2 ? 1 : index + 1}.png`;
        const storageType = feature.image ? "storage" : "public";
        return this.imageSource(imagePath, storageType);
    },

    saveFeature(data) {
        // console.log(data);

        const formData = new FormData();
        formData.append("id", data.id ?? null);
        formData.append("template_id", data.template_id);

        if (data.title) {
            formData.append("title", data.title);
        }

        if (data.description) {
            formData.append("description", data.description);
        }

        if (data.image) {
            formData.append("image", data.image);
        }

        axios
            .post(`${this.appUrl}/app/templates/feature/save`, formData)
            .then((response) => {
                // console.log(response.data);

                const updatedFeature = response.data.feature;

                // Update the feature in the featureItems array at the specified index
                if (typeof data.index !== "undefined") {
                    this.featureItems.splice(data.index, 1, updatedFeature);
                } else {
                    // If index isn't provided, find and update the feature by ID
                    const featureIndex = this.featureItems.findIndex(
                        (item) => item.id === updatedFeature.id
                    );

                    if (featureIndex !== -1) {
                        this.featureItems.splice(
                            featureIndex,
                            1,
                            updatedFeature
                        );
                    } else {
                        this.featureItems.push(updatedFeature);
                    }
                }

                this.toast("success", "Feature saved successfully.");
            })
            .catch((error) => {
                console.error(error);
                this.toast(
                    "error",
                    "Something went wrong. Please try again."
                );
            });
    },

    copyFeature() {
        let lastFeatureItem =
            this.featureItems[this.featureItems.length - 1];

        // console.log(lastFeatureItem);

        this.saveFeature({
            id: null,
            template_id: lastFeatureItem.template_id,
            index: this.featureItems.length + 1,
            title: lastFeatureItem.title,
            description: lastFeatureItem.description
        });
    },

    removeFeature(index) {
        let feature = this.featureItems[index];
        if (!feature) {
            this.toast("error", "Feature not found.");
            return;
        }

        axios
            .delete(`${this.appUrl}/app/templates/feature/delete/${feature.id}`)
            .then((response) => {
                // console.log(response.data);

                this.featureItems = this.featureItems.filter(
                    (item) => item.id !== feature.id
                );

                this.toast("success", "Feature removed successfully.");
            })
            .catch((error) => {
                console.error(error);
                this.toast(
                    "error",
                    "Something went wrong. Please try again."
                );
            });
    },

    updateContent(event) {
        const rawContent =
            event.target.innerHTML ?? event.target.textContent;
        const sanitizedContent = rawContent.replace(/&nbsp;/g, " ");

        return sanitizedContent;
    },

    updateTitle(section, storeData, event) {
        const newValue = event.target.textContent.trim();
        if (this.orderSubTitle == newValue) {
            return;
        }

        this[storeData] = this.updateContent(event);
        // console.log(this[storeData]);

        this.updateSection(section, "title", this[storeData]);
    },

    updateSubTitle(section, storeData, event) {
        const newValue = event.target.textContent.trim();
        if (this.orderSubTitle == newValue) {
            return;
        }

        this[storeData] = this.updateContent(event);
        // console.log(this[storeData]);

        this.updateSection(section, "sub_title", this[storeData]);
    },

    updateDescription(section, element, storeData, event) {
        const newValue = event.target.textContent.trim();
        if (this.orderSubTitle == newValue) {
            return;
        }

        this[storeData] = this.updateContent(event);
        // console.log(this[storeData]);

        this.updateResource({
            section: section,
            element: element,
            storeData: storeData,
            image: null,
            prefix: "description",
            value: this[storeData],
        });
    },

    updateFooterText(prefix, storeData, event) {
        const newValue = event.target.textContent.trim();
        if (this.orderSubTitle == newValue) {
            return;
        }

        this[storeData] = this.updateContent(event);
        // console.log(this[storeData]);

        this.updateResource({
            section: 'footer',
            element: 'footer',
            storeData: storeData,
            prefix: prefix,
            value: this[storeData],
        });
    },

    updateButton(data) {

        this.updateResource({
            section: data.section,
            element: data.element,
            storeData: data.storeData,
            prefix: "button",
            value: data.button,
        });
    },

    updateBgColor(data) {
        this.updateSection(data.section, "bg_color", data.color);
    },

    updateSection(section, prefix, data) {
        let findSection = this.getSection(section);
        if (!findSection) {
            this.toast("error", "Section not found.");
            return false;
        }

        let formData = new FormData();
        formData.append(prefix, data);

        axios
            .post(
                `${this.appUrl}/app/templates/section/update/${findSection.id}`,
                formData
            )
            .then((response) => {
                // console.log(response.data);
                this.toast("success", "Section updated successfully.");
            })
            .catch((error) => {
                console.error(error);
                this.toast(
                    "error",
                    "Something went wrong. Please try again."
                );
            });
    },

    updateResource(data) {
        // console.log(data);

        let section = data.section;
        let element = data.element;
        let imageFile = data.image || null;
        let prefix = data.prefix || "image"; // Default to "image" if prefix isn't provided
        let value = data.value || null;
        let storeData = data.storeData || null;

        if (prefix == "button" || prefix == "items") {
            value = JSON.stringify(value);
        }

        // console.log(value);

        // Check if section exists
        let findSection = this.getSection(section);
        if (!findSection) {
            this.toast("error", "Section not found.");
            return false;
        }

        // Check if element exists
        let findElement = this.getElement(findSection.section, element);
        if (!findElement) {
            this.toast("error", "Element not found.");
            return false;
        }

        const formData = new FormData();
        if (imageFile) {
            formData.append("image", imageFile);
        }
        formData.append("name", element);
        formData.append("prefix", prefix);
        formData.append("value", value);

        axios
            .post(
                `${this.appUrl}/app/templates/element/update/${findSection.id}`,
                formData
            )
            .then((response) => {
                // console.log(response.data);
                this[storeData] = response.data[prefix];

                this.toast("success", `${prefix} updated successfully.`);
            })
            .catch((error) => {
                console.error(error);
                this.toast(
                    "error",
                    "Something went wrong. Please try again."
                );
            });
    },

    async saveImage(data) {
        let storeData = this.getNestedProperty(this, data.storeData);
        if (!storeData) {
            console.error(`Invalid storeData path: ${data.storeData}`);
            this.toast("error", "Invalid slider item.");
            return;
        }

        const formData = new FormData();
        formData.append("image", data.image);

        await axios
            .post(`${this.appUrl}/app/templates/element/save-image`, formData)
            .then((response) => {
                if (response.data && response.data.image) {
                    storeData.image = response.data.image; // Update the image URL
                    this.toast("success", "Image uploaded successfully.");

                    // If you need to trigger some update after saving, uncomment below
                    // this.updateSlider();
                } else {
                    this.toast("error", "Failed to get the uploaded image URL.");
                }
            })
            .catch((error) => {
                console.error(error);
                this.toast("error", "Something went wrong. Please try again.");
            });
    },

    getNestedProperty(obj, path) {
        // Ensure that path string is correctly formatted and exists
        const keys = path.replace(/\[(\w+)\]/g, ".$1").split(".");
        return keys.reduce((o, key) => (o ? o[key] : undefined), obj);
    },

    updateProductDetails(key, event) {
        const newValue = event.target.textContent.trim();
        if (this.user_template[key] == newValue) {
            return;
        }

        this.user_template[key] = newValue;

        // Save the updated product area when the user blurs out
        this.saveProductDetails();
    },

    saveProductDetails() {
        axios
            .post(`${this.appUrl}/app/templates/product-details/update`, {
                product_name: this.user_template.product_name,
                product_price: this.user_template.product_price,
                shipping_cost_inside_dhaka:
                    this.user_template.shipping_cost_inside_dhaka,
                shipping_cost_outside_dhaka:
                    this.user_template.shipping_cost_outside_dhaka,
                template_id: this.user_template.template_id,
            })
            .then((response) => {
                if (response.data.success) {
                    this.toast(
                        "success",
                        "Product details updated successfully."
                    );
                } else {
                    this.toast("error", "Failed to update");
                }
            })
            .catch((error) => {
                this.toast("error", "Error updating:", error);
            });
    },

    saveReview(data) {
        const formData = new FormData();
        formData.append("id", data.id ?? null);
        formData.append("template_id", data.template_id);

        if (data.review) {
            formData.append("review", data.review);
        }

        if (data.reviewer_name) {
            formData.append("reviewer_name", data.reviewer_name);
        }

        if (data.reviewer_bio) {
            formData.append("reviewer_bio", data.reviewer_bio);
        }

        if (data.reviewer_image) {
            formData.append("reviewer_image", data.reviewer_image);
        }

        if (data.rating) {
            formData.append("rating", data.rating);
        }

        axios
            .post(`${this.appUrl}/app/templates/review/save`, formData)
            .then((response) => {
                const updatedReview = response.data.review;

                // Update the review in the reviews array at the specified index
                if (typeof data.index !== "undefined") {
                    this.reviews.splice(data.index, 1, updatedReview);
                } else {
                    // If index isn't provided, find and update the review by ID
                    const reviewIndex = this.reviews.findIndex(
                        (item) => item.id === updatedReview.id
                    );

                    if (reviewIndex !== -1) {
                        this.reviews.splice(reviewIndex, 1, updatedReview);
                    } else {
                        this.reviews.push(updatedReview);
                    }
                }

                this.toast("success", "Review saved successfully.");
            })
            .catch((error) => {
                console.error(error);
                this.toast("error", "Something went wrong. Please try again.");
            });
    },

    copyReview() {
        let lastReviewItem = this.reviews[this.reviews.length - 1];

        this.saveReview({
            id: null,
            template_id: lastReviewItem.template_id,
            index: this.reviews.length + 1,
            review: lastReviewItem.review,
            reviewer_name: lastReviewItem.reviewer_name,
            reviewer_bio: lastReviewItem.reviewer_bio,
            reviewer_image: lastReviewItem.reviewer_image,
            rating: lastReviewItem.rating
        });
    },

    removeReview(index) {
        let review = this.reviews[index];
        if (!review) {
            this.toast("error", "Review not found.");
            return;
        }

        axios
            .delete(`${this.appUrl}/app/templates/review/delete/${review.id}`)
            .then((response) => {
                this.reviews = this.reviews.filter((item) => item.id !== review.id);
                this.toast("success", "Review removed successfully.");
            })
            .catch((error) => {
                console.error(error);
                this.toast("error", "Something went wrong. Please try again.");
            });
    },
}