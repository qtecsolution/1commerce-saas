import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler.js';
import Ulaunch from './template/ulaunch/index.vue';
import Seedee from './template/seedee/index.vue';

import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';

const app = createApp({});

app.use(VueSweetalert2);

app.component('ulaunch', Ulaunch);
app.component('seedee', Seedee);

app.mount('#app');