import Vue from 'vue'
import VueRouter from 'vue-router'
import Dashboard from '../components/pages/index/Dashboard'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Dashboard',
    component: Dashboard
  },
  {
    path: '/settings',
    name: 'Settings',
    component: () => import(/* webpackChunkName: "settings" */ '@/components/pages/settings/Settings')
  },
  {
    path: '/books',
    name: 'Books Management',
    component: () => import(/* webpackChunkName: "books" */ '@/components/pages/books/Books')
  },
  {
    path: '/patron',
    name: 'Patron Management',
    component: () => import(/* webpackChunkName: "patron" */ '@/components/pages/patron/Patron')
  },
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
