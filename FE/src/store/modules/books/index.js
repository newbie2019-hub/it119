import Vue from 'vue'
import Vuex from 'vuex'
import AXIOS from '../../config'

Vue.use(Vuex);

const CATEGORY = 'categories'
const BOOKS = 'books'

export default ({
  namespaced: true,
  state: {
    books: [],
    categories: [],
  },
  actions: {
    async getCategories({commit}){
      const res = await AXIOS.get(CATEGORY).then(response => {
        commit('SET_CATEGORIES', response.data)
        return response
      }).catch(error => {
        return error.response
      });
    
      return res;
    },
    async getBooks({commit}){
      const res = await AXIOS.get(BOOKS).then(response => {
        commit('SET_BOOKS', response.data)
        return response
      }).catch(error => {
        return error.response;
      })
      return res
    },
    async storeBook({commit}, book){
      const res = await AXIOS.post(`${BOOKS}`, book).then(response => {
        commit('SAVE_BOOK', response.data);
        return response
      }).catch(error => {
        return error.response
      });
      
      return res;
    },
    async updateBook({commit}, {index, data}){
      const res = await AXIOS.put(`${BOOKS}/${data.id}`, data).then(response => {
        commit('UPDATE_BOOK', {id: index, data: response.data.book});
        return response;
      }).catch(error => {
        return error.response
      });

      return res;
    },
    async deleteBook({commit}, id){
      const res = await AXIOS.delete(`${BOOKS}/${id}`).then(response => {
        commit('DELETE_BOOK', id);
        return response;
      });
      return res;
    }
  },
  getters: {
    getBooksData(state){
      return state.books;
    }
  },
  mutations: {
    SET_CATEGORIES(state, categories){
      state.categories = categories
    },
    SET_BOOKS(state, books){
      state.books = books;
    },
    DELETE_BOOK(state, id){
      state.books = state.books.filter(book => {
        return book.id !== id;
      });
    },
    UPDATE_BOOK(state, {id, data}){
      console.log('UPDATE',data)
      Vue.set(state.books, id, data);
    },
    SAVE_BOOK(state, book){
      state.books.push({ 
        id: book.id,
        name: book.name,
        author: book.author,
        copies: book.copies,
        category: book.category_id,
        created_at: book.created_at
      });
    },
    UPDATE_COPIES(state, {id, data}){
      state.books[id].copies = data
    }
  },
})