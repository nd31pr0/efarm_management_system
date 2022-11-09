import axios from "axios"

export default {
  namespaced: true,
  state:{
    farmers: [],
  },
  getters:{
    getFarmers(state){
      return state.farmers
    }
  },
  mutations:{
    setFarmers(state,payload){
      state.farmers = payload
    }
  },
  actions:{
    fetchFarmers(ctx,request){
      return axios.get("api/farmer").then(response =>{
        ctx.commit("setFarmers",response.data.farmers)
      })
    }
  }
}