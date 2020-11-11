import Vue from 'vue'
import Dashboard from './components/pages/index/Dashboard.vue'
// import Patron from './pages/patron/Patron.vue'
// import Books from './pages/books/Books.vue'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

Vue.use(BootstrapVue)
Vue.use(IconsPlugin)
Vue.config.productionTip = false


import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

new Vue({
  render: function (h) { return h(Dashboard) },
}).$mount('#app')
