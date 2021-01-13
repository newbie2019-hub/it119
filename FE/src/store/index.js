import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

import patrons from './modules/patrons';
import books from './modules/books';
import borrowed from './modules/borrowed';
import returned from './modules/returned';

export default new Vuex.Store({
  modules: {
    patrons, books, borrowed, returned
  }
})