import axios from "axios";

const state = {
    list: [],
}

const actions = {
    createContactUs: async function ({commit, state}, payload) {
        return await new Promise((resolve, reject) => {
            axios.post('/contact-us', payload)
                .then(response => {
                    commit('ADD_LIST_ITEM', response.data.data);
                    resolve(response.data.data);
                })
                .catch(error => {
                    reject(error.response.data.errors);
                })
        })
    }
}

const mutations = {
    ADD_LIST_ITEM: function (state, contactUs) {
        state.list.push(contactUs);
    },
}

const getters = {
    getAllContacts: function (state) {
        return state.list;
    }
}

export default {state, actions, mutations, getters}
