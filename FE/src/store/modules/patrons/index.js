//import anai an vue ngan next na an vuex
import Vue from 'vue'
import Vuex from 'vuex'
import AXIOS from '../../config'

Vue.use(Vuex);

const patron = 'patrons'
//an mga core niya like state, mutations, actions, etc aadi nat ibutang ha sulod
//pag sumiring state ada it mga variables ba ada it data na hohold which is accessible from different files like it adi 
//pwde ma access ha books.vue or patron.vue
export default ({
  namespaced: true,
  state: {
    patrons: [],
  },
  actions: {
    async getPatrons({commit}){
      const res = await AXIOS.get(patron)
      .then(response => {
        commit('SET_PATRON', response.data);
        return response;
      })
      .catch(error => {
        return error.response;
      });
      
      return res;
    },
    async storePatron({commit},data){
      const res = await AXIOS.post(`${patron}`, data)
      .then(response => {
        commit('SAVE_PATRON', response.data)
        return response;
      })
      .catch(error => {
        return error.response;
      });
      
      return res;
    },
    async deletePatron({commit}, id){
      const res = await AXIOS.delete(`${patron}/${id}`)
      .then(response => {
        commit('DELETE_PATRON', id)
        return response;
      })
      .catch(error => {
        return error.response;
      });
      
      return res;
    },
    async updatePatron({commit}, {data, index}){
      console.log('UPDATE', data, 'INDEX', index)
      const res = await AXIOS.put(`${patron}/${data.id}`, data)
      .then(response => {
        commit('UPDATE_PATRON', {index, data})
        return response;
      })
      .catch(error => {
        return error.response;
      });
     
      return res;
    }
  },
  getters: {
    getPatronData: function(state) {
      return state.patrons;
    }
  },
  mutations: {
    SET_PATRON(state, data){
      state.patrons = data;
    },
    SAVE_PATRON(state, data){
      console.log(data)
      state.patrons.unshift({
        id: data.id,
        first_name: data.first_name,
        middle_name: data.middle_name,
        last_name: data.last_name,
        email: data.email,
        created_at: data.created_at
      })
    },
    DELETE_PATRON(state, id){
      state.patrons = state.patrons.filter(patron => {
        return patron.id !== id
      })
    },
    UPDATE_PATRON(state, {index, data}){
      Vue.set(state.patrons, index, data);
    }
  },
})