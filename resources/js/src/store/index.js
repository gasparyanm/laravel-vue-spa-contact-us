import Vue from 'vue'
import Vuex from 'vuex';

import contactUs from './modules/contactUs'

Vue.use(Vuex);

const store = new Vuex.Store({
    state :{
    },
    mutations:{
    },
    actions:{

    },
    getters:{

    },
    modules:{
        contactUs
    },
});

export default store;
