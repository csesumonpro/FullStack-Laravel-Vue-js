import './bootstrap';

import { createApp } from 'vue/dist/vue.esm-bundler.js';

import App from './components/App.vue';

import {createRouter, createWebHashHistory} from 'vue-router';

import routes from './routes';

const app  = createApp(App);

const router = createRouter({
    history: createWebHashHistory(),
    routes, // short for `routes: routes`
})

app.use(router)
app.mount('#app')
