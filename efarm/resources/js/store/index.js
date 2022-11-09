import Vue from 'vue'
import Vuex from 'vuex'

import farmers from './farmers'

Vue.use(Vuex)

export default new Vuex.Store({
  modules:{
    farmers,
  }
})