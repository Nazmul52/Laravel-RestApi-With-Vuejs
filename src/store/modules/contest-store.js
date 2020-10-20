import * as type from '../type'
import auth_axios from '@/http/axios/http-auth';

const state = {
    active_contest: {},
    selectedTeam: {
        match_id: null,
        team_name: null,
        keeper: [],
        batsman: [],
        allrounder: [],
        bowler: []
    }
};

const getters = {
    [type.ACTIVE_CONTEST_BY_MATCH_ID_GETTER]: (state) => {
        return state.active_contest;
    },
    [type.SELECTED_TEAM_CRICKET_GETTER]: (state) => {
        return state.selectedTeam;
    },

};
const mutations = {
    [type.ACTIVE_CONTEST_BY_MATCH_ID_MUTATION]: (state, payload) => {
        state.active_contest = payload;
    },
    [type.SELECTED_TEAM_CRICKET_SETTER]: (state, payload) => {
        state.selectedTeam = payload;
    },

};
const actions = {
    [type.ACTIVE_CONTEST_BY_MATCH_ID_ACTION]: (context, {match_id}) => {
        auth_axios.get("/get-team-players", {params: {match_id: match_id}}).then(response => {
            response.data.data.players = response.data.data.players.map(newPlayer => {
                if (context.state.active_contest.players && context.state.active_contest.players.length > 0) {
                    context.state.active_contest.players.forEach(player => {
                        if (player.player_key === newPlayer.player_key) {
                            newPlayer.isSelected = player.isSelected;
                            newPlayer.isCaptain = player.isCaptain;
                            newPlayer.isViceCaptain = player.isViceCaptain;
                        }
                    });
                } else {
                    newPlayer.isSelected = false;
                    newPlayer.isCaptain = false;
                    newPlayer.isViceCaptain = false;
                }
                return newPlayer;
            });
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
