import * as type from '../type'
import axios from 'axios';

const state = {
    upcoming_match_football: [],
    upcoming_match_cricket: [],
    match_type: 'cricket',
};

const getters = {
    [type.UPCOMING_MATCH_LIST_CRICKET]: (state) => {
        return state.upcoming_match_cricket;
    },
    [type.UPCOMING_MATCH_LIST_FOOTBALL]: (state) => {
        return state.upcoming_match_football;
    },
    [type.MATCH_TYPE]: (state) => {
        return state.match_type;
    },
    [type.UPCOMING_MATCH_LIST]: (state) => {
        return (value) => {
            if (!value) value = state.match_type === 'cricket' ? state.upcoming_match_cricket.length : state.upcoming_match_football.length;
            return state.match_type === 'cricket' ? [...state.upcoming_match_cricket].splice(0, value) : [...state.upcoming_match_football].splice(0, value);
        }
    }
};
const mutations = {
    [type.UPCOMING_MATCH_LIST_CRICKET]: (state, payload) => {
        state.upcoming_match_cricket = payload;
    },
    [type.UPCOMING_MATCH_LIST_FOOTBALL]: (state, payload) => {
        state.upcoming_match_football = payload;
    },
    [type.MATCH_TYPE]: (state, payload) => {
        state.match_type = payload;
    }
};
const actions = {
    [type.UPCOMING_MATCH_LIST_CRICKET]: (context) => {
        axios.get('/upcoming-matches').then(response => {
            context.commit(type.UPCOMING_MATCH_LIST_CRICKET, response.data.data);
        }).catch(errors => {
            console.log(errors);
        }).then(() => {
            //    final
        })
    },
    [type.UPCOMING_MATCH_LIST_FOOTBALL]: (context) => {
        axios.get('/football/upcoming-matches').then(response => {
            console.log(response.data.data);
            context.commit(type.UPCOMING_MATCH_LIST_FOOTBALL, response.data.data);
        }).catch(errors => {
            console.log(errors);
        }).then(() => {
            //    final
        })
    }
};
export default {
    state,
    getters,
    mutations,
    actions
};
