import Vue from 'vue'
import router from './router'
import App from './views/App.vue'

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import Toast from "vue-toastification";

Vue.use(BootstrapVue)
Vue.use(IconsPlugin)
Vue.config.productionTip = false

import './assets/css/style.css'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import "vue-toastification/dist/index.css";

Vue.use(Toast, {
  transition: "Vue-Toastification__bounce",
  maxToasts: 3,
  newestOnTop: true
});

new Vue({
  router,
  render: function (h) { return h(App) }
}).$mount('#app')
