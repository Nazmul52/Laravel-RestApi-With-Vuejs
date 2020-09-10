import * as type from '../type'

const state = {
    count: 50,
};

const getters = {
    [type.DOUBLE_COUNTER]: (state) => {
        return state.count * 2;
    }
};
const mutations = {
    [type.SET_COUNTER]: (state, payload) => {
        state.count = state.count + payload.interval;
    }
};
const actions = {
    [type.SET_COUNTER]: (context, payload) => {
        console.log('yes');
        context.commit(type.SET_COUNTER, payload);
    }
};
export default {
    state,
    getters,
    mutations,
    actions
};
