import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler.js';
import Ulaunch from './template/ulaunch/index.vue';

const app = createApp({});

app.component('ulaunch', Ulaunch);

app.mount('#app');