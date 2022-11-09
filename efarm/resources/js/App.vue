<template>
  <v-app>
   <layout></layout>
  </v-app>
</template>

<script>
import layout from './layout/home'

export default {
  name: 'App',
  components:{
    layout,
  }
}
</script>