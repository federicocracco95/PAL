import Vue from 'vue'
import App from './App.vue'
import api from './services/api'
import './assets/tailwind.css'
import './components'
import router from './router'



Vue.config.productionTip = false;
Vue.prototype.$api = api;

new Vue({
  router,
  render: h => h(App)
}).$mount('#app')
