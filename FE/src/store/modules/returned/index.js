//import anai an vue ngan next na an vuex
import Vue from 'vue'
import Vuex from 'vuex'
import AXIOS from '../../config'

Vue.use(Vuex);

const returnedbook = 'returnedbook'

export default ({
  namespaced: true,
  state: {
  },
  actions: {
    async createReturned({commit}, {data, index}){
      const res = await AXIOS.post(`${returnedbook}`, data)
      .then(response => {
        commit('books/UPDATE_COPIES', {id: index, data: response.data.book.book.copies}, {root: true})
        return response
      })
      .catch(error => {
        return error.response
      })

      return res;
    }
  },
  getters: {

  },
  mutations: {
  
  },
})