import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import Login from '../views/Login.vue'
import Modifica from '../views/Modifica-password.vue'
import NuovaPratica from '../views/NewPractice.vue'
import Profilo from '../views/Modifica-profilo.vue'
import PraticheDaControllare from '../views/PraticheDaControllare.vue'
import PraticheApprovate from '../views/PraticheApprovate.vue'
import PraticheNonApprovate from '../views/PraticheNonApprovate.vue'
import DettaglioPratica from '../views/DettaglioPratica.vue'
import CreaUtente from '../views/CreaUtente.vue'
import NotFound from '../views/404.vue'


Vue.use(VueRouter)

const routes = [
  {
    path: '/login',
    name: 'Login',
    component: Login,
    meta: {
      label: "Login",
    },
  },
  {
    path: '/404',
    name: 'Not Found',
    component: NotFound,
    meta: {
      label: "Not Found",
    },
  },
  {
    path: '/',
    name: 'Home',
    component: Home,
    meta: {
      requiresAuth: true,
    },
  },
  {
    path: '/nuovapratica',
    name: 'NuovaPratica',
    component: NuovaPratica,
    meta: {
      requiresAuth: true,
    }
  },
  {
    path: '/dettagliopratica/:id',
    name: 'DettaglioPratica',
    component: DettaglioPratica,
    meta: {
      requiresAuth: true,
    }
  },
  {
    path: '/profile',
    name: 'Profilo',
    component: Profilo,
    meta: {
      requiresAuth: true,
    }
  },
  {
    path: '/crea-utente',
    name: 'CreaUtente',
    component: CreaUtente,
    meta: {
      requiresAuth: true,
    }
  },
  {
    path: '/pratichedacontrollare',
    name: 'PraticheDaControllare',
    component: PraticheDaControllare,
    meta: {
      requiresAuth: true,
    }
  },
  {
    path: '/praticheapprovate',
    name: 'PraticheApprovate',
    component: PraticheApprovate,
    meta: {
      requiresAuth: true,
    }
  },
  {
    path: '/pratichenonapprovate',
    name: 'PraticheNonApprovate',
    component: PraticheNonApprovate,
    meta: {
      requiresAuth: true,
    }
  },
  {
    path: '/pratica/',
    name: 'DettaglioPratica',
    component: DettaglioPratica,
    meta: {
      requiresAuth: true,
    }
  },
  {
    path: '/modifica',
    name: 'Modifica',
    component: Modifica,
    meta: {
      label: "Modifica",
      requiresAuth: true,
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
