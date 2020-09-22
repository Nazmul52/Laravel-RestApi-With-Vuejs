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
import match_filter from "@/filters/match_filter";
axios.interceptors.request.use(config => {
    config.baseURL = 'http://18.188.54.233/api';
    config.headers['Access-Control-Allow-Origin'] = '*';
    return config;
});
axios.interceptors.response.use(res => {
    return res;
});
Vue.use(VueCarousel).use(VueRouter);
Vue.config.productionTip = false;

Vue.mixin({
    filters: {
        ...match_filter
    },
    methods: {
        getTimeDiff(datetime) {
            const time_in_mile_second = Math.round(Math.max(0, new Date(datetime) - new Date()));
            const time_in_minutes = time_in_mile_second / (1000 * 60);
            return {
                minutes: Math.round(Math.max(0, time_in_minutes % 60)),
                hours: Math.round(Math.max(0, time_in_minutes / 60))
            };
        }
    }
});
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
