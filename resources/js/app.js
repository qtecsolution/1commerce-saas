import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler.js';
import Ulaunch from './template/ulaunch/index.vue';
import Seedee from './template/seedee/index.vue';

const app = createApp({});

app.component('ulaunch', Ulaunch);
app.component('seedee', Seedee);

app.mount('#app');