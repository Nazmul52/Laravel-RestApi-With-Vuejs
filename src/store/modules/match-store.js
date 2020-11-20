import * as type from '../type'
import axios from 'axios';

const state = {
    upcoming_match_football: [],
    upcoming_match_cricket: [],
    match_type: 'cricket',
    tournament_id: '',
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
    [type.TOURNAMENT_ID_GETTER]: (state) => {
        return state.tournament_id;
    },
    [type.TOURNAMENT_ID_NAME_MAP ]: (state) => {
        const mapper = {};
        const tournamentList = [];
        for (let match of state['upcoming_match_' + state.match_type]) {
            if (!mapper[match.tournament_id]) {
                mapper[match.tournament_id] = true;
                tournamentList.push({
                    key: match.tournament_id,
                    value: match.tournament_name
                });
            }
        }
        return tournamentList;
    },
    [type.UPCOMING_MATCH_LIST]: (state) => {
        return (len) => {
            if (!len) len = state.match_type === 'cricket' ? state.upcoming_match_cricket.length : state.upcoming_match_football.length;
            return state.match_type === 'cricket' ?
                [...state.upcoming_match_cricket].filter(match => {
                    return !state.tournament_id || state.tournament_id === match.tournament_id
                }).splice(0, len) :
                [...state.upcoming_match_football].filter(match => {
                    return !state.tournament_id || state.tournament_id === match.tournament_id
                }).splice(0, len);
        }
    },
    [type.MATCH_BY_MATCH_ID]: state => (match_id, match_type) => {
        return match_type === 'cricket' ?
            [...state.upcoming_match_cricket].filter(match => +match_id === +match.match_id)[0] :
            [...state.upcoming_match_football].filter(match => +match_id === +match.match_id)[0];
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
        state.tournament_id = '';
    },
    [type.TOURNAMENT_ID_SETTER]: (state, payload) => {
        state.tournament_id = payload;
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
