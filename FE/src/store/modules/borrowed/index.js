//import anai an vue ngan next na an vuex
import Vue from 'vue'
import Vuex from 'vuex'
import AXIOS from '../../config'

Vue.use(Vuex);

const borrowedbook = 'borrowedbook'

export default ({
  namespaced: true,
  state: {
  },
  actions: {
    async createBorrowed({commit}, {data, index}){
      const res = await AXIOS.post(`${borrowedbook}`, data)
      .then(response => {
        commit('books/UPDATE_COPIES', {id: index, data: response.data.borrowedbook.book.copies}, {root: true})
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