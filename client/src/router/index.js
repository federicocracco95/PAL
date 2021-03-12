import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import Login from '../views/Login.vue'
import Modifica from '../views/Modifica-password.vue'
import AddUser from '../views/AddUser.vue'
import NewPractice from '../views/NewPractice.vue'
import ModificaProfile from '../views/Modifica-profilo.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/about',
    name: 'About',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/About.vue')
  },
  {
    path: '/login',
    name: 'Login',
    component: Login
  },
  {
    path: '/modifica',
    name: 'Modifica',
    component: Modifica
  },
  {
    path: '/adduser',
    name: 'AddUser',
    component: AddUser
  },
  {
    path: '/newpractice',
    name: 'NewPractice',
    component: NewPractice
  },
  {
    path: '/modificaprofilo',
    name: 'ModificaProfile',
    component: ModificaProfile
  }
]

const router = new VueRouter({
  routes
})

export default router
