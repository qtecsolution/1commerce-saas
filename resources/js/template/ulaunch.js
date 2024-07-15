import { createApp } from "vue";
import axios from "axios";
import Swal from 'sweetalert2';

const app = createApp({
    data() {
        return {
            hero_title: 'Hi! Welcome to Ulaunch.',
            hero_description: 'This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.',
            hero_button_txt: 'Get Started',
            hero_button_url: '/home',
            
            steps: [
                {
                    title: 'Step 1',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    icon: 'uil uil-rocket',
                },
                {
                    title: 'Step 2',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    icon: 'uil uil-rocket',
                },
                {
                    title: 'Step 3',
                    description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    icon: 'uil uil-rocket',
                }
            ],
        }
    },
    mounted() {

    },
    methods: {
        heroTitle(event) {
            this.hero_title = this.updateContent(event);
        },

        heroDescription(event) {
            this.hero_description = this.updateContent(event);
        },

        stepTitle(event, index) {
            console.log(event.target.innerHTML);
            this.steps[index].title = this.updateContent(event);
        },

        stepDescription(event, index) {
            this.steps[index].description = this.updateContent(event);
        },

        stepIcon(event, index) {
            this.steps[index].icon = event.target.innerHTML;
        },

        updateContent(event) {
            const rawContent = event.target.innerHTML;
            const sanitizedContent = rawContent.replace(/&nbsp;/g, ' ');

            return sanitizedContent;
        }
    }
});

app.mount('#app');