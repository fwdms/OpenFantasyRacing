<template>
  <Table title='Results' :headers='headers'>
    <tr v-for='result in results' :key='result.id'>
      <td class='whitespace-nowrap px-3 py-4 text-sm text-center text-gray-500'>
        {{ result.finish_pos }}
      </td>
      <td class='whitespace-nowrap py-4 w-96 pl-4 pr-3 text-center text-sm font-medium text-gray-900'>
        <Link class='text-orange-600'
              :href="route('driver.show', { franchise: franchise.slug, driver: result.driver.id })"
        >
          {{ result.driver.first_name + ' ' + result.driver.last_name }}
        </Link>
      </td>
      <td class='whitespace-nowrap py-4 w-96 pl-4 pr-3 text-center text-sm font-medium text-gray-900'>
        <Link class='text-orange-600'
              :href="route('constructor.show', { franchise: franchise.slug, slug: result.driver.constructor.slug })"
        >
          {{ result.driver.constructor.short_name }}
        </Link>
      </td>
      <td class='whitespace-nowrap px-3 w-96 py-4 text-center text-sm text-gray-500'>
        {{ result.starting_pos }}
      </td>
      <td class='whitespace-nowrap px-3 w-96 py-4 text-center text-sm text-gray-500'>
        <span v-if='result.DNF'>
            DNF
        </span>
      </td>
      <td class='whitespace-nowrap px-3 py-4 text-sm text-center text-gray-500'>
        {{ result.points_for_race }}
      </td>
      <td class='whitespace-nowrap px-3 py-4 text-sm text-center text-gray-500'>
        <Button @click='openEditModal(result)'>
          edit
        </Button>
      </td>
    </tr>
  </Table>
  
  <Modal title='Edit Result' v-model='modalOpen'>
    <NewRaceResult
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
  import Table from '@/Components/Tables/Table.vue'
  import Modal from '@/Components/Overlays/Modal.vue'
  import Button from '@/Components/Form/Button.vue'
  import NewRaceResult from '@/Components/Forms/NewRaceResult.vue'
  
  const props = defineProps({
    franchise: Object,
    results: Array,
    drivers: Array,
    event: Object
  })
  
  const modalOpen = ref(false)
  const fields = ref([])
  const resultID = ref()
  
  const emit = defineEmits(['refreshResults'])
  
  function openEditModal(result) {
    resultID.value = result.id
    modalOpen.value = true
    fields.value = result
  }
  
  function closeModalUpdate() {
    modalOpen.value = false
    emit('refreshResults')
  }
  
  const headers = [
    'Finished',
    'Driver',
    'Constuctor',
    'Started',
    'DNF',
    'Points Earned',
    ''
  ]
</script>
