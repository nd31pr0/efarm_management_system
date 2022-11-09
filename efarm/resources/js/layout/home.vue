<template>
  <v-app>
    <NavigationDrawer />

    <AppBar /> 

    <!-- Sizes your content based upon application components -->
    <v-main>
        <!-- If using vue-router -->
        <router-view></router-view>
    </v-main>

    <Footer />
  </v-app>
</template>
<script>
import NavigationDrawer from '../components/app/NavigationDrawer.vue'
import Footer from '../components/app/Footer.vue'
import AppBar from '../components/app/AppBar.vue'

export default {
  components:{
    NavigationDrawer,
    Footer,
    AppBar
  },

  computed: {},
  data() {
    return {
      
    }
  }
}
</script>