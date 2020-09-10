import Vue from 'vue'
import App from './App.vue'
import 'bootstrap'
// import './registerServiceWorker'
import VueRouter from 'vue-router'
import routes from "@/router";
import {store} from '@/store'
import '@/assets/css/main.css'
import '@/assets/css/go11.css'
import '@/assets/js/app'
import VueCarousel from 'vue-carousel';

Vue.use(VueCarousel).use(VueRouter)
Vue.config.productionTip = false
const router = new VueRouter({
    routes,
    mode: 'history'
});
// new Vue({
//     router,
//     render: h => h(App),
// }).$mount('#app')

new Vue({
    el: '#app',
    store,
    router,
    render: h => h(App)
})
