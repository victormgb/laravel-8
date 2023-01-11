/* eslint-disable no-unused-vars */
/* eslint-disable import/no-extraneous-dependencies */
import Vue from 'vue';
import Vuetify from 'vuetify';
import App from './App.vue';
import VueToast from 'vue-toast-notification';
import 'vue-toast-notification/dist/theme-sugar.css';
Vue.use(VueToast);

import '../bootstrap';
import router from './router';

import 'vuetify/dist/vuetify.min.css';
// let instance = Vue.$toast;

// window.toast = instance;

Vue.use(Vuetify);

// USE UR COMPONENT BELOW
Vue.component('app', App);

const brands = new Vue({
  vuetify: new Vuetify({
    icons: {
      iconfont: 'fa',
    },
  }),
  router,
  components: {
    App,
  },
  el: '#app',
});
