require('./bootstrap')

import Vue from 'vue'

import vuetify from './vuetify';
// window.Vuetify = require('vuetify');

// Vue.use(Vuetify);

import routes from './routes'

import store from './store/index'

window.Vue = require('vue').default

import VueRouter from 'vue-router'

Vue.use(VueRouter)

import App from './App.vue'

const app= new Vue ({
  el: "#app",
  vuetify,
  store,
  render: (h) => h(App),
  router: new VueRouter(routes)
});