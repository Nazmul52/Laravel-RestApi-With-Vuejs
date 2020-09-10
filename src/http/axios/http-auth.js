import axios from 'axios';

const instance = axios.create({
    baseURL: 'localhost:8080',

});

instance.defaults.headers.common = {
    'Accepts': 'application/json'
}

export default instance;
