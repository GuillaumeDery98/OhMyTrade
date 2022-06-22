require('./bootstrap');

import Alpine from 'alpinejs';
import { createApp } from 'vue';
import Vue3Marquee from 'vue3-marquee';
import 'vue3-marquee/dist/style.css';
import Antd from 'ant-design-vue';
import 'ant-design-vue/dist/antd.css';
import TopBar from './components/TopBar.vue';
import Chart from './components/Chart.vue';
import SymbolFormModal from './components/SymbolFormModal.vue';

window.Alpine = Alpine;

Alpine.start();



const app = createApp({});

app.component('top-bar', TopBar);
app.component('chart', Chart);
app.component('symbol-form-modal', SymbolFormModal);

app.use(Vue3Marquee);
app.use(Antd);

app.mount('#app');