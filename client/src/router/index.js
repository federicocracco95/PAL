import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import Login from '../views/Login.vue'
import Modifica from '../views/Modifica-password.vue'
import NuovaPratica from '../views/NewPractice.vue'
import Profilo from '../views/Modifica-profilo.vue'
import PraticheEffetuate from '../views/PraticheEffetuate.vue'
import PraticheAttesa from '../views/PraticheAttesa.vue'
import CreaUtente from '../views/CreaUtente.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home,
    meta: {
      requiresAuth: true,
    }
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
    path: '/nuovapratica',
    name: 'NuovaPratica',
    component: NuovaPratica,
  },
  {
    path: '/profile',
    name: 'Profilo',
    component: Profilo,
  },
  {
    path: '/pratiche-effetuate',
    name: 'PraticheEffetuate',
    component: PraticheEffetuate,
  },
  {
    path: '/crea-utente',
    name: 'CreaUtente',
    component: CreaUtente,
  },
  {
    path: '/pratiche-attesa',
    name: 'PraticheAttesa',
    component: PraticheAttesa,
  },
  {
    path: '/login',
    name: 'Login',
    component: Login,
    meta: {
      label: "Login",
    },
  },
  {
    path: '/modifica',
    name: 'Modifica',
    component: Modifica,
    meta: {
      label: "Modifica",
    },
  }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

// Auth based guard
router.beforeEach((to, from, next) => {
  if (to.matched.some(record => record.meta.requiresAuth)) {

    // if route requires auth
    if (localStorage.getItem('user')) {
      
      // if user is logged in
      console.log('auth: OK, vai pure')
      next()

    } else {
      // if user is not logged in
      console.log('auth: NO, rilogga')

      router.push('/login');
      next(false);
    }
  } else {
    next();
  }
});

export default router
