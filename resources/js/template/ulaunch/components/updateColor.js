export default {
    updateColor(data) {
        this.applyColor(data);

        const updateFunctions = {
            nav: this.updateNavColor,
            hero: this.updateHeroArea,
            feature: this.updateFeaturesArea,
            about: this.updateAboutArea,
            testimonials: this.updateTestimonialsArea,
            info: this.updateInfoArea,
            order: this.updateOrderArea,
            footer: this.updateFooterArea,
        };

        const updateFunction = updateFunctions[data.section];
        if (updateFunction) {
            updateFunction.call(this);
        } else {
            console.warn("Something is wrong with updating the color.");
        }
    },

    instantUpdateColor(data) {
        this.applyColor(data);
    },

    applyColor(data) {
        const colorProperties = {
            nav: 'navBg',
            hero: 'heroBg',
            feature: 'featureBg',
            about: 'aboutBg',
            testimonials: 'testimonialBg',
            info: 'infoBg',
            order: 'orderBg',
            footer: 'footerBg',
        };

        const colorProperty = colorProperties[data.section];
        if (colorProperty) {
            this[colorProperty] = data.color;
        } else {
            console.warn("Invalid section provided in data.");
        }
    },
}