<template>
  <Header title='Admin | Constructors' />
  
  <PageHeader title='Constructors' />
  
  <div class='mx-auto w-1/5'>
    <SelectMenu label='Franchise'
                :options='props.franchises'
                v-model='franchise'
                @change='franchiseSelected()'
    />
  </div>
  
  <div v-if='constructors.length === 0 '>
    <p class='text-center py-4'>Please, select a franchise</p>
  </div>
  
  <Table :headers='headers' v-if='constructors.length > 0'>
    <template v-slot:top>
      <div class='mx-auto my-4 mx-6'>
        <div class='sm:flex sm:items-center'>
          <div class='sm:flex-auto px-2'>
            <h1 class='text-xl font-semibold text-gray-900'>
              Constructors
            </h1>
            <p class='mt-2 text-sm text-gray-700'>
              A list of all the constructors from a given franchise.
            </p>
          </div>
          <div class='mt-4 sm:mt-0 sm:ml-16 sm:flex-none'>
            <button
              type='button'
              class='inline-flex items-center justify-center rounded-md border border-transparent bg-orange-600 px-4 py-2 text-sm
              font-medium text-white shadow-sm
              hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 sm:w-auto'
              @click='modalOpen = !modalOpen'
            >
              Add a Driver
            </button>
          </div>
        </div>
      </div>
    </template>
    
    <tr v-for='team in constructors'>
      <TableColumn>
        {{ team.id }}
      </TableColumn>
      
      <TableColumn>
        {{ team.name }}
      </TableColumn>
      
      <TableColumn>
        {{ team.short_name }}
      </TableColumn>
      
      <TableColumn>
        {{ team.slug }}
      </TableColumn>
      
      <TableColumn>
        <Button>edit</Button>
        <Button>x</Button>
      </TableColumn>
    </tr>
  </Table>
</template>

<script setup>
  import { ref } from 'vue'
  import axios from 'axios'
  import PageHeader from '@/Components/PageHeadings/PageHeader.vue'
  import SelectMenu from '@/Components/Form/SelectMenu.vue'
  import Button from '@/Components/Form/Button.vue'
  import Table from '@/Components/Tables/Table.vue'
  import TableColumn from '@/Components/Tables/TableColumn.vue'
  
  const props = defineProps([
    'franchises'
  ])
  
  const franchise = ref({})
  const constructors = ref([])
  
  const headers = [
    'Team ID',
    'Name',
    'Short Name',
    'Slug',
    ''
  ]
  
  function franchiseSelected() {
    axios.get(route('constructors.index.collection', { franchise: franchise.value.slug }))
      .then(res => {
        constructors.value = res.data.data
      })
  }
</script>

<script>
  import Admin from '@/Layouts/Admin.vue'
  
  export default {
    layout: Admin
  }
</script>