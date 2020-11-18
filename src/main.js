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
import VueNoty from 'vuejs-noty';
import 'vuejs-noty/dist/vuejs-noty.css';
import Swal from 'sweetalert2';

// CommonJS
window.Swal = Swal

/*Sweet Alert*/

const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

window.Toast = Toast


Vue.use(VueNoty, {
  timeout: 4000,
  progressBar: true,
  layout: 'topRight'
})
axios.interceptors.request.use(config => {
    config.baseURL = 'http://18.188.54.233/api';
    config.headers['Access-Control-Allow-Origin'] = '*';
    return config;
});
axios.interceptors.response.use((response) => {
    return response;
}, (error) => {
    // console.log(error.response.data);
    return Promise.reject(error);
});
Vue.use(VueCarousel).use(VueRouter);
Vue.config.productionTip = false;
Vue.use(VueNoty);
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
