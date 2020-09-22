import * as type from '../type'
import axios from 'axios';

const state = {
    login_status: false,
    login_fail_message: undefined,
    logout_fail_message: undefined,

};

const getters = {
    [type.USER_LOGIN_STATUS]: (state) => {
        return {login_status: state.login_status, login_fail_message: state.login_fail_message};
    }
};
const mutations = {
    [type.USER_LOGIN_STATUS]: (state, {login_status, login_fail_message}) => {

        state.login_status = login_status;
        state.login_fail_message = login_fail_message;
    },
    [type.USER_LOGOUT]: (state, {login_status, logout_fail_message}) => {
        state.login_status = login_status;
        state.login_status = logout_fail_message;
    }
};
const actions = {
    [type.USER_LOGIN]: (context, {phone, password}) => {
        axios.post('/login', {phone, password}).then(res => {
            if (res.data.status === 0) {
                context.commit(type.USER_LOGIN_STATUS, {login_status: false, login_fail_message: res.data.message});
            } else {
                localStorage.setItem('token_type', res.data.token_type);
                localStorage.setItem('expires_in', res.data.expires_in);
                localStorage.setItem('access_token', res.data.access_token);
                localStorage.setItem('refresh_token', res.data.refresh_token);
                context.commit(type.USER_LOGIN_STATUS, {login_status: true, login_fail_message: undefined});
            }
        }).catch(err => {
            console.error(err);
        }).then(() => {
        })
    },
    [type.USER_LOGOUT]: (context) => {
        axios.post('/logout', {}, {
            headers: {
                Authorization: localStorage.getItem('token_type') + ' ' + localStorage.getItem('access_token')
            }
        }).then(res => {
            if (res.data.status === 0) {
                context.commit(type.USER_LOGIN_STATUS, {login_status: false, logout_fail_message: res.data.message});
            } else {
                localStorage.removeItem('token_type');
                localStorage.removeItem('expires_in');
                localStorage.removeItem('access_token');
                localStorage.removeItem('refresh_token');
                context.commit(type.USER_LOGIN_STATUS, {login_status: false, logout_fail_message: undefined});
            }
        }).catch(err => {
            console.error(err);
        }).then(() => {
        })
    }
};
export default {
    state,
    getters,
    mutations,
    actions
};
