/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import VueRouter from 'vue-router';
Vue.use(VueRouter)


import Home from './components/Home.vue';
import Despre from './components/Despre.vue';
import Ordonatori from './components/Ordonatori.vue';
import Ordonator from './components/Ordonator.vue';

const router = new VueRouter({
    mode: 'history',
    routes: [
      // Route Home
      { path: '/', component: Home },

      // Route despre
      { path: '/despre', component: Despre },

      // Route Ordonatori de Credite
      { path: '/ordonatori', component: Ordonatori },

      // Route Ordonator de Credite
      { path: '/ordonator/:id', component: Ordonator },
    ]
  });

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});
