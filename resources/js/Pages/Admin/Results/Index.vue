<template>
  <Head title="Admin | Restuls" />

  <PageHeader :title="'Results'"/>

  <div class="flex flex-wrap justify-center w-100">
    <SelectMenu @selected="franchiseSelected" label="Franchise" :options="franchises"/>
    <SelectMenu @selected="eventSelected" v-if="events" label="Event" :options="events"/>
  </div>

  <div class="flex flex-wrap justify-end bg-white m-0 p-0">
    <Button> Create a New Race Result </Button>
  </div>

  <div v-if="results.length > 0">
    <EventResultsTable :franchise="franchise" :results="results"/>
  </div>

  <div v-else>
    <p>No results yet... Maybe you should add some!</p>
  </div>
</template>

<script setup>
  import { ref } from 'vue'
  import axios from 'axios'
  import PageHeader from '@/Components/PageHeadings/PageHeader.vue'
  import SelectMenu from '@/Components/Forms/SelectMenu.vue'
  import Button from '@/Components/Forms/Button.vue'
  import EventResultsTable from '@/Components/Tables/EventResultsTable.vue'

  const props = defineProps({
    franchises: Array,
  })

  const franchise = ref({})
  const event = ref({})
  const events = ref([])
  const results = ref([])

  function franchiseSelected(selected) {
    franchise.value = selected

    axios.get(route('event.index.collection', { franchise_slug: franchise.value.slug }))
      .then( res => {
        events.value = res.data.data
      })
      .catch(error => {
        console.log(error)
      })
  }

  function eventSelected(selected) {
    event.value = selected

    axios.get(route('results.index.collection', { franchise_slug: franchise.value.slug, event_id: event.value.id }))
      .then( res => {
        results.value = res.data.data
      })
      .catch( error =>{
        console.log(error)
      })
  }
</script>

<script>
  import Admin from '@/Layouts/Admin.vue'
  
  export default {
    layout: Admin
  }
</script>