import './bootstrap';

import { createApp } from 'vue/dist/vue.esm-bundler.js';

import App from './components/App.vue';

import {createRouter, createWebHashHistory} from 'vue-router';

const app  = createApp(App);

const Home = { template: '<div>Home</div>' }
const About = { template: '<div>About compontents</div>' }

const routes = [
    { path: '/', component: Home },
    { path: '/about', component: About },
  ];

  const router = createRouter({
    // 4. Provide the history implementation to use. We are using the hash history for simplicity here.
    history: createWebHashHistory(),
    routes, // short for `routes: routes`
  })

  app.use(router)
  app.mount('#app')
