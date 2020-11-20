import Vue from 'vue'
import Dashboard from './components/pages/index/Dashboard.vue'
// import Patron from './components/pages/patron/Patron.vue'
// import Books from './components/pages/books/Books.vue'
// import Settings from './components/pages/settings/Settings.vue'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

Vue.use(BootstrapVue)
Vue.use(IconsPlugin)
Vue.config.productionTip = false

import './assets/css/style.css'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

new Vue({
  render: function (h) { return h(Dashboard) },
}).$mount('#app')
