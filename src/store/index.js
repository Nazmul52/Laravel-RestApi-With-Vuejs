import Vue from 'vue';
import Vuex from 'vuex';
import testmodule from "@/store/modules/testmodule";

Vue.use(Vuex);

export const store = new Vuex.Store({
    state: {
        count: 70
    },
    getters: {},
    mutations: {},
    actions: {},
    modules: {
        testmodule
    }
})
