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

import moment from 'moment'

Vue.prototype.moment = moment


import Home from './components/Home.vue';
import Despre from './components/Despre.vue';

import Regiuni from './components/Regiuni/Regiuni.vue';
import RegiuneLocalitati from './components/Regiuni/RegiuneLocalitati.vue';

import Judete from './components/Judete/Judete.vue';

import Ordonatori from './components/Ordonatori/Ordonatori.vue';
import Ordonator from './components/Ordonatori/Ordonator.vue';
import OrdonatoriCreare from './components/Ordonatori/OrdonatoriCreare.vue';

import Institutii from './components/InstitutiiPublice/Institutii.vue';

import Angajati from './components/Angajati/Angajati.vue';

import FamiliiOcupationale from './components/FamiliiOcupationale/FamiliiOcupationaleAll.vue';

const router = new VueRouter({
    mode: 'history',
    routes: [
        // Route Home
        {path: '/', component: Home},

        // Route despre
        {path: '/despre', component: Despre},

        // Route Regiuni
        {path: '/regiuni', component: Regiuni},

        // Route Regiuni Localitati
        {path: '/regiuni/:id/localitati', component: RegiuneLocalitati},

        // Route Judete
        {path: '/judete', component: Judete},

        // Route Familii Ocupationale
        {path: '/familiiocupationale', component: FamiliiOcupationale},

        // Route Ordonatori de Credite
        {path: '/ordonatori', component: Ordonatori},

        // Route Ordonatori de Credite - Creare
        {path: '/ordonatori/creare', component: OrdonatoriCreare},

        // Route Ordonator de Credite
        {path: '/ordonator/:id', component: Ordonator},

        // Route Institutii Publice
        {path: '/institutii', component: Institutii},

        // Route Angajati
        {path: '/angajati', component: Angajati},


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
