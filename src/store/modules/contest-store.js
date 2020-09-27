import * as type from '../type'
import auth_axios from '@/http/axios/http-auth';

const state = {
    active_contest: {},
    selectedTeam:{
        match_id: undefined,
        team_name: undefined,
        keeper: [
        ],
        batsman: [
        ],
        allrounder: [
        ],
        bowler: [
        ]
    }
};

const getters = {
    [type.ACTIVE_CONTEST_BY_MATCH_ID_GETTER]: (state) => {
        return state.active_contest;
    },
    [type.SELECTED_TEAM_GETTER]: (state) => {
        return state.selectedTeam;
    },

};
const mutations = {
    [type.ACTIVE_CONTEST_BY_MATCH_ID_MUTATION]: (state, payload) => {
        state.active_contest = payload;
    },
    [type.SELECTED_TEAM_SETTER]: (state, payload) => {
        state.active_contest = payload;
    },

};
const actions = {
    [type.ACTIVE_CONTEST_BY_MATCH_ID_ACTION]: (context, {match_id}) => {
        auth_axios.get("/get-team-players", {params: {match_id: match_id}}).then(response => {
            context.commit(type.ACTIVE_CONTEST_BY_MATCH_ID_MUTATION, response.data.data);
        });
    },
};
export default {
    state,
    getters,
    mutations,
    actions
};
