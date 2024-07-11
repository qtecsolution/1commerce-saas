import { createApp } from "vue";
import axios from "axios";

// create app
const app = createApp({
    data() {
        return {
            edit_section: false,
            element: [],

            // section one
            section_one_header_text: 'মধু বলতেই সুন্দরবনের মিশ্র ফুলের প্রাকৃতিক খাঁটি মধু অন্যতম.',
        }
    },
    mounted() {
        // this.getElement();
    },
    methods: {
        // function to give access to edit section one
        editSection(element_id, action) {
            this.edit_section = action;

            // get element data
            this.getElement(element_id);
        },

        // function to update section one
        // updateSection() {
        //     const formData = new FormData();
        //     formData.append("section_one_header_text", this.section_one_header_text);
        //     formData.append("theme_id", theme_id);
        //     formData.append("section_id", 1);
        //     // axios
        //     //     .post(section_one_edit_url, formData)
        //     //     .then((res) => {
        //     //         this.section_one_edit = false;
        //     //         this.getContent();
        //     //     })
        //     //     .catch((error) => { });

        // },

        // function to get element
        getElement(element_id) {
            axios
                .get(`${window.location.origin}/user/api/theme-element/${element_id}`)
                .then(res => {
                    this.element = res.data;
                });
        }
    }
});

app.mount('#__next');
