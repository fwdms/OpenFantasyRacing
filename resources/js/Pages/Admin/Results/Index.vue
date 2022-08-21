<template>
  <Head title="Admin | Restuls" />

  <PageHeader title="Results" />

  <div class="flex flex-wrap justify-between items-center w-100 my-4 mx-4">
    <div class="flex flex-wrap">
      <SelectMenu
        @selected="franchiseSelected"
        label="Franchise"
        :options="franchises"
      />
      <SelectMenu
        @selected="eventSelected"
        v-if="events.length > 0"
        label="Event"
        :options="events"
      />
    </div>

    <Button
      @click.prevent="createNewRow()"
      class="my-0 mx-0 p-0"
    >
      Create a New Race Result
    </Button>
  </div>

  <div v-if="event">
    <NewRaceResult
      :drivers="drivers"
      :event="event"
      @submitForm="getEvent"
    />
  </div>

  <div v-if="results.length > 0">
    <EventResultsTable
      :franchise="franchise"
      :results="results"
    />
  </div>

  <div v-else>
    <p class="mx-4 my-4 text-center">
      No results for this event yet... Maybe you should add some!
    </p>
  </div>
</template>

<script setup>
  import { ref } from 'vue'
  import axios from 'axios'
  import PageHeader from '@/Components/PageHeadings/PageHeader.vue'
  import SelectMenu from '@/Components/Form/SelectMenu.vue'
  import Button from '@/Components/Form/Button.vue'
  import EventResultsTable from '@/Components/Tables/EventResultsTable.vue'
  import NewRaceResult from '@/Components/Forms/NewRaceResult.vue'

  const props = defineProps({
    franchises: Array,
  })

  const franchise = ref({})
  const drivers = ref([])
  const event = ref({})
  const events = ref([])
  const results = ref([])

  function franchiseSelected(selected) {
    franchise.value = selected

    axios
      .get(
        route('event.index.collection', {
          franchise_slug: franchise.value.slug,
        })
      )
      .then(res => {
        events.value = res.data.data
      })
      .catch(error => {
        console.log(error)
      })

    axios
      .get(
        route('drivers.index.collection', {
          franchise_slug: franchise.value.slug,
        })
      )
      .then(res => {
        drivers.value = res.data.data
      })
  }

  function eventSelected(selected) {
    event.value = selected

    getEvent()
  }

  function getEvent() {
    axios
      .get(
        route('results.index.collection', {
          franchise_slug: franchise.value.slug,
          event_id: event.value.id,
        })
      )
      .then(res => {
        results.value = res.data.data
      })
      .catch(error => {
        console.log(error)
      })
  }

  function createNewRow() {
    results.value.unshift({
      finish_pos: 0,
      'driver.first_name': 'Unknown',
    })
  }
</script>

<script>
  import Admin from '@/Layouts/Admin.vue'

  export default {
    layout: Admin,
  }
</script>
