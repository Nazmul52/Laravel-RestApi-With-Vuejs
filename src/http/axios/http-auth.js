import axios from 'axios';
import store from '@/store/index';
import * as type from '@/store/type';
import routes from "@/router";

const instance = axios.create();

instance.defaults.headers.common = {
    'Accepts': 'application/json'
}
instance.interceptors.request.use(config => {
    config.baseURL = 'http://18.188.54.233/api';
    config.headers['Authorization'] = localStorage.getItem('token_type') + ' ' + localStorage.getItem('access_token');
    return config;
});
instance.interceptors.response.use(res => {
    return res;
}, (error) => {
    if (error.response & error.response.data && +error.response.data.status === 0) {
        store.mutations[type.USER_LOGOUT]();
        routes.push({'name': 'Home'});
        document.querySelector('#login-modal').click();
    }
    return Promise.reject(error);
});
export default instance;
