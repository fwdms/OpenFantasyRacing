<template>
  <Header title='Admin | Results' />
  
  <PageHeader title='Results' />
  
  <div class='flex flex-wrap justify-between items-center w-100 my-4 mx-4'>
    <div class='flex flex-wrap'>
      <SelectMenu
        label='Franchise'
        :options='franchises'
        v-model='franchise'
        @change='franchiseSelected()'
      />
      <SelectMenu
        v-if='events.length > 0'
        label='Event'
        :options='events'
        v-model='event'
        @change='eventSelected()'
      />
    </div>
    
    <Button
      @click.prevent='creatingRecord = !creatingRecord'
      class='my-0 mx-0 p-0'
    >
      Create a New Race Result
    </Button>
  </div>
  
  <div v-if='creatingRecord'>
    <RaceResult
      :drivers='drivers'
      :event='event'
      @submitForm='getEvent'
    />
  </div>
  
  <div v-if='results.length > 0'>
    <Table title='Results' :headers='headers'>
      <tr v-for='result in results'>
        <TableColumn>
          {{ result.finish_pos }}
        </TableColumn>
        
        <TableColumn>
          <Link class='text-orange-600'
                :href="route('driver.show', { franchise: franchise.slug, driver: result.driver.id })"
          >
            {{ result.driver.first_name + ' ' + result.driver.last_name }}
          </Link>
        </TableColumn>
        
        <TableColumn>
          <Link class='text-orange-600'
                :href="route('constructor.show', { franchise: franchise.slug, slug: result.driver.constructor.slug })"
          >
            {{ result.driver.constructor.short_name }}
          </Link>
        </TableColumn>
        
        <TableColumn>
          {{ result.starting_pos }}
        </TableColumn>
        
        <TableColumn>
          <span v-if='result.fastest_lap'>
            Fastest Lap
          </span>
        </TableColumn>
        
        <TableColumn>
          <span v-if='result.DNF'>
            DNF
          </span>
        </TableColumn>
        
        <TableColumn>
          {{ result.points_for_race }}
        </TableColumn>
        
        <TableColumn>
          <Button @click='openEditModal(result)'>
            edit
          </Button>
          <Button @click='destroy(result)'>
            x
          </Button>
        </TableColumn>
      </tr>
    </Table>
  </div>
  
  <div v-else>
    <p class='mx-4 my-4 text-center'>
      No results for this event yet... Maybe you should add some!
    </p>
  </div>
  
  <Modal title='Edit Result' v-model='modalOpen'>
    <RaceResult
      :drivers='drivers'
      :event='event'
      :resultID='resultID'
      :fields='fields'
      @submitForm='closeModalUpdate()'
    />
    
    <div class=''>
      <Button type='button' @click='modalOpen = false'>
        Close
      </Button>
    </div>
  </Modal>
</template>

<script setup>
  import { ref } from 'vue'
  import axios from 'axios'
  import PageHeader from '@/Components/PageHeadings/PageHeader.vue'
  import SelectMenu from '@/Components/Form/SelectMenu.vue'
  import Button from '@/Components/Form/Button.vue'
  import RaceResult from '@/Components/Forms/RaceResult.vue'
  import Modal from '@/Components/Overlays/Modal.vue'
  import Table from '@/Components/Tables/Table.vue'
  import TableColumn from '@/Components/Tables/TableColumn.vue'
  
  const props = defineProps({
    franchises: Array
  })
  
  const franchise = ref({})
  const event = ref({})
  const drivers = ref([])
  const events = ref([])
  const results = ref([])
  const creatingRecord = ref(false)
  const modalOpen = ref(false)
  const fields = ref([])
  const resultID = ref()
  
  const headers = [
    'Finished',
    'Driver',
    'Constructor',
    'Started',
    'Fastest Lap',
    'DNF',
    'Points Earned',
    ''
  ]
  
  function openEditModal(result) {
    resultID.value = result.id
    modalOpen.value = true
    fields.value = result
  }
  
  function closeModalUpdate() {
    modalOpen.value = false
    getEvent()
  }
  
  function franchiseSelected() {
    axios.get(route('event.index.collection', {
        franchise: franchise.value.slug
      })
    )
      .then(res => {
        events.value = res.data.data
      })
      .catch(error => {
        console.log(error)
      })
    
    axios.get(
      route('drivers.index.collection', {
        franchise: franchise.value.slug
      })
    )
      .then(res => {
        drivers.value = res.data.data
      })
  }
  
  function eventSelected() {
    getEvent()
  }
  
  function getEvent() {
    axios.get(route('results.index.collection', {
        franchise: franchise.value.slug,
        race: event.value.id
      })
    )
      .then(res => {
        results.value = res.data.data
      })
      .catch(error => {
        console.log(error)
      })
  }
  
  function destroy(result) {
    axios.delete(route('admin.result.destroy', { result: result.id }))
      .then(() => {
        getEvent()
      })
  }
</script>

<script>
  import Admin from '@/Layouts/Admin.vue'
  
  export default {
    layout: Admin
  }
</script>
