import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export default new Vuex.Store({
  state:{
    isAbout:false
  },
  mutations:{
    aboutIs(state){
      state.isAbout = !state.isAbout
    }
  },
  actions:{

  },
  getters:{

  }
});
