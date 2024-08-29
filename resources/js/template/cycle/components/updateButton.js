export default {
    updateButton(data) {
        const updateFunctions = {
            hero: this.updateHeroButton,
            "about-1": (buttonData) => this.updateAboutButton(buttonData, 0),
            "about-2": (buttonData) => this.updateAboutButton(buttonData, 1),
            info: this.updateInfoButton,
            order: this.updateOrderButton,
        };

        const updateFunction = updateFunctions[data.section];
        if (updateFunction) {
            updateFunction.call(this, data.button);
        } else {
            console.warn("Something is wrong with updating the button.");
        }
    },

    updateButtonProperties(targetButton, data) {
        Object.assign(targetButton, {
            title: data.title || targetButton.title,
            url: data.url || targetButton.url,
            color: data.color || targetButton.color,
            text_color: data.text_color || targetButton.text_color,
            border_color: data.border_color || targetButton.border_color,
            hover_color: data.hover_color || targetButton.hover_color,
            hover_text_color: data.hover_text_color || targetButton.hover_text_color,
            hover_border_color: data.hover_border_color || targetButton.hover_border_color,
        });
    },

    updateHeroButton(data) {
        this.updateButtonProperties(this.heroButton, data);
        this.updateHeroArea();
    },

    updateAboutButton(data, index) {
        this.updateButtonProperties(this.abouts[index].button, data);
        this.updateAboutArea();
    },

    updateInfoButton(data) {
        this.updateButtonProperties(this.infoButton, data);
        this.updateInfoArea();
    },

    updateOrderButton(data) {
        this.updateButtonProperties(this.orderButton, data);
        this.updateOrderArea();
    },
    updateFeatureButton(data) {
        this.updateButtonProperties(this.orderButton, data);
        this.updateFeaturesArea();
    },
};
