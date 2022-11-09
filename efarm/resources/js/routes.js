import Dashboard from './views/Dashboard'
import Cooperatives from './views/Cooperatives'
import Farmers from './views/Farmers'
import Regions from './views/Regions'

export default {
  mode: 'history',

  routes:[
    {
      path: "/",
      name: "Dashboard",
      component: Dashboard
    },
        {
      path: "/farmers",
      name: "Farmers",
      component: Farmers
    },
    {
      path: "/cooperatives",
      name: "Cooperative",
      component: Cooperatives
    },
    {
      path: "/regions",
      name: "Regions",
      component: Regions
    }
  ]
}