require('./bootstrap');

import Alpine from 'alpinejs';
import { createApp } from 'vue'
import Vue3Marquee from 'vue3-marquee'
import 'vue3-marquee/dist/style.css'
import TopBar from './components/TopBar.vue'

window.Alpine = Alpine;

Alpine.start();



const app = createApp({})

app.component('top-bar', TopBar)

app.use(Vue3Marquee)

app.mount('#app')