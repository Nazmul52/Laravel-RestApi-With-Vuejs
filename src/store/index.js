import Vue from 'vue';
import Vuex from 'vuex';
import Match from "@/store/modules/match-store";
import Auth from "@/store/modules/auth-store";

Vue.use(Vuex);

export const store = new Vuex.Store({
    state: {
        count: 70
    },
    getters: {},
    mutations: {},
    actions: {},
    modules: {
        Match,
        Auth
    }
})
