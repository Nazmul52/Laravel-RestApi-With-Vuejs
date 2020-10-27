import Vue from 'vue';
import Vuex from 'vuex';
import Match from "@/store/modules/match-store";
import Auth from "@/store/modules/auth-store";
import Contest from "@/store/modules/contest-store";
import User from "@/store/modules/user-store";

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
        Auth,
        Contest,
        User
    }
})
