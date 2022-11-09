<template>
  <v-container>
      <v-data-table :headers="headers" :items="farmers" :items-per-page="5" class="elevation-1">
      
            <template v-slot:item.actions="{ item }">
             <v-btn fab small color="green" class="mr-2">
              <v-icon>mdi-</v-icon>
            </v-btn>
            <v-btn fab small color="red">
              <v-icon>mdi-pencil</v-icon>
            </v-btn>
            </template>
      </v-data-table>
  </v-container>
</template>


<script>
export default {
  data() {
    return {
      headers: [
        {
          text: 'ID',
          align: 'start',
          sortable: false,
          value: 'id',
        },
        { text: 'Name', value: 'name' },
        { text: 'Actions', value: 'actions' },
      ],
      
      farmers: [
        {
          id: 1,
          name: 'Farmer 1',
        },
        {
          id: 2,
          name: 'Farmer 2',
        },
        {
          id: 3,
          name: 'Farmer 3',
        },
      ],
    }
  },
}
</script>