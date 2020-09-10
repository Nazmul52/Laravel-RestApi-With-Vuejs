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
import axios from 'axios';

axios.defaults.baseURL = 'http://18.188.54.233/api';
axios.defaults.headers.get['Accepts'] = 'application/json';
axios.defaults.headers.common['Authorization'] = 'Bearer token';
axios.interceptors.request.use(config => {
    console.log(config);
    return config;
});
axios.interceptors.response.use(res => {
    console.log(res);
    return res;
});
Vue.use(VueCarousel).use(VueRouter)
Vue.config.productionTip = false
const router = new VueRouter({
    routes,
    mode: 'history'
});
new Vue({
    el: '#app',
    store,
    router,
    render: h => h(App)
})
