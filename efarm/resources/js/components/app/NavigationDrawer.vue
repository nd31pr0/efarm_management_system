<template>
    <v-navigation-drawer app>
      <v-list-item>
        <v-list-item-content>
          <v-list-item-title class="text-h6">
            E-Farm System
          </v-list-item-title>
          <v-list-item-subtitle>
            Productivity Manager
          </v-list-item-subtitle>
        </v-list-item-content>
      </v-list-item>

      <v-divider></v-divider>

      <v-list dense nav>
        <v-list-item v-for="item in items" :key="item.title" link :to="item.link">
          <v-list-item-icon>
            <v-icon>{{ item.icon }}</v-icon>
          </v-list-item-icon>

          <v-list-item-content>
            <v-list-item-title>{{ item.title }}</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>
</template>

<script>
  export default {
    data () {
      return {
        items: [
          { title: 'Dashboard', icon: 'mdi-view-dashboard' ,link: '/'},
          { title: 'Cooperatives', icon: 'mdi-image' , link:"/cooperatives"},
          { title: 'Farmers', icon: 'mdi-help-box', link: "/farmers" },
          { title: 'Regions', icon: 'mdi-help-box', link: "/regions" },
        ],
        right: null,
      }
    },
  }
</script>
