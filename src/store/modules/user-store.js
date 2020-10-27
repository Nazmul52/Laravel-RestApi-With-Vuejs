import * as type from '../type'
import auth_axios from '@/http/axios/http-auth';

const state = {
    userDetails: {},
    userStatus: false,
};

const getters = {
    [type.USER_DATA_GETTER]: (state) => {
        return state.userDetails;
    },
    [type.USER_STATUS_GETTER]: (state) => {
        return state.userStatus;
    }
};
const mutations = {
    [type.USER_DATA_SETTER]: (state, payload) => {
        state.userDetails = payload;
    },
    // eslint-disable-next-line no-unused-vars
    [type.USER_STATUS_SETTER]: (state, payload) => {
        return state.userStatus = payload || !!localStorage.getItem('access_token');
    }

};
const actions = {
    [type.USER_DATA_SETTER]: (context) => {
        auth_axios.get("/user").then(response => {
            context.commit(type.USER_DATA_SETTER, response.data.data);
        });
    },
};
export default {
    state,
    getters,
    mutations,
    actions
};
