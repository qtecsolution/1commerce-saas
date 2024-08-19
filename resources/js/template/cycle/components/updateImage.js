export default {
    updateImage(data) {
        switch (data.section) {
            case "logo":
                this.companyLogo = this.validateImage(
                    this.companyLogo,
                    data.image
                );
                this.companyLogoRaw = this.validateImage(
                    this.companyLogoRaw,
                    data.image_raw
                );

                this.updateLogo();
                break;

            case "hero":
                this.heroImage = this.validateImage(
                    this.heroImage,
                    data.image
                );
                this.heroImageRaw = this.validateImage(
                    this.heroImageRaw,
                    data.image_raw
                );

                this.updateHeroArea();
                break;

            case "feature":
                this.featureImage = this.validateImage(
                    this.featureImage,
                    data.image
                );
                this.featureImageRaw = this.validateImage(
                    this.featureImageRaw,
                    data.image_raw
                );

                this.updateFeaturesArea();
                break;

            case "about-1":
                this.abouts[0].image = this.validateImage(
                    this.abouts[0].image,
                    data.image
                );
                this.abouts[0].image_raw = this.validateImage(
                    this.abouts[0].image_raw,
                    data.image_raw
                );

                this.updateAboutArea();
                break;

            case "about-2":
                this.abouts[1].image = this.validateImage(
                    this.abouts[1].image,
                    data.image
                );
                this.abouts[1].image_raw = this.validateImage(
                    this.abouts[1].image_raw,
                    data.image_raw
                );

                this.updateAboutArea();
                break;

            case "testimonial-1":
                this.testimonials[0].reviewer_image = this.validateImage(
                    this.testimonials[0].reviewer_image,
                    data.image
                );
                this.testimonials[0].reviewer_image_raw = this.validateImage(
                    this.testimonials[0].reviewer_image_raw,
                    data.image_raw
                );

                this.updateTestimonialsArea();
                break;

            case "testimonial-2":
                this.testimonials[1].reviewer_image = this.validateImage(
                    this.testimonials[1].reviewer_image,
                    data.image
                );
                this.testimonials[1].reviewer_image_raw = this.validateImage(
                    this.testimonials[1].reviewer_image_raw,
                    data.image_raw
                );

                this.updateTestimonialsArea();
                break;

            case "testimonial-3":
                this.testimonials[2].reviewer_image = this.validateImage(
                    this.testimonials[2].reviewer_image,
                    data.image
                );
                this.testimonials[2].reviewer_image_raw = this.validateImage(
                    this.testimonials[2].reviewer_image_raw,
                    data.image_raw
                );

                this.updateTestimonialsArea();
                break;

            default:
                console.warn("Something is wrong with updating the image.");
                break;
        }
    },

    validateImage(source, data) {
        return data !== null && data !== "" ? data : source;
    },
};
