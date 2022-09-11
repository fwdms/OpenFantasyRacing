<template>
  <Header title='Admin | Drivers' />
  
  <PageHeader title='Drivers' />
  
  <Modal v-model='modalOpen'>
    <h2 v-if='editing' class='text-2xl text-orange-600'>Update {{ fields.first_name }} {{ fields.last_name }}</h2>
    <h2 v-else class='text-2xl text-orange-600'>Add a Driver</h2>
    
    <div class='flex flex-wrap justify-center items-center mt-4'>
      <Input label='First Name' v-model='fields.first_name' />
      <Input label='Last Name' v-model='fields.last_name' />
      
      <Input label='Number' type='number' v-model='fields.number' />
      
      <SelectMenu label='Constructor' :options='constructors' v-model='fields.constructor' />
      
      <Toggle label='Rookie' v-model='fields.is_rookie' />
    </div>
    
    <Button @click='resetForm()'>
      Close
    </Button>
    
    <Button v-if='editing' @click='updateDriver()'>
      Update
    </Button>
    
    <Button v-else @click='saveDriver()'>
      Save
    </Button>
  </Modal>
  
  <div class='mx-auto w-1/5'>
    <SelectMenu label='Franchise'
                :options='props.franchises'
                v-model='franchise'
                @change='franchiseSelected()'
    />
  </div>
  
  <div v-if='drivers.length === 0'>
    <p class='text-center py-4'>Please, select a franchise</p>
  </div>
  
  <Table :headers='headers' v-if='drivers.length > 0'>
    <template v-slot:top>
      <div class='mx-auto my-4 mx-6'>
        <div class='sm:flex sm:items-center'>
          <div class='sm:flex-auto px-2'>
            <h1 class='text-xl font-semibold text-gray-900'>
              Drivers
            </h1>
            <p class='mt-2 text-sm text-gray-700'>
              A list of all the drivers from a given franchise.
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
    
    <tr v-for='driver in drivers'>
      <TableColumn>
        {{ driver.id }}
      </TableColumn>
      
      <TableColumn>
        <img :src='driver.profile_image'
             class='rounded-lg h-20 mx-auto'
        >
      </TableColumn>
      
      <TableColumn>
        {{ driver.first_name }} {{ driver.last_name }}
      </TableColumn>
      
      <TableColumn>
        {{ driver.number }}
      </TableColumn>
      
      <TableColumn>
        <p>{{ driver.constructor.short_name }}</p>
        <p>{{ driver.constructor.name }}</p>
      </TableColumn>
      
      <TableColumn>
        <span v-if='driver.is_rookie'>Rookie</span>
      </TableColumn>
      
      <TableColumn>
        <Button @click='editDriver(driver)'>edit</Button>
        <Button @click='deleteDriver(driver)'>x</Button>
      </TableColumn>
    </tr>
  </Table>
</template>

<script setup>
  import { ref } from 'vue'
  import axios from 'axios'
  import PageHeader from '@/Components/PageHeadings/PageHeader.vue'
  import SelectMenu from '@/Components/Form/SelectMenu.vue'
  import Table from '@/Components/Tables/Table.vue'
  import TableColumn from '@/Components/Tables/TableColumn.vue'
  import Button from '@/Components/Form/Button.vue'
  import Modal from '@/Components/Overlays/Modal.vue'
  import Input from '@/Components/Form/Input.vue'
  import Toggle from '@/Components/Form/Toggle.vue'
  
  const props = defineProps([
    'franchises'
  ])
  
  const drivers = ref([])
  const franchise = ref({})
  const modalOpen = ref(false)
  const constructors = ref([])
  const editing = ref(false)
  const fields = ref({
    number: '',
    first_name: '',
    last_name: '',
    constructor: '',
    is_rookie: false
  })
  
  const headers = [
    'Driver ID',
    'Profile Image',
    'Name',
    '#',
    'Constructor',
    'Rookie',
    ''
  ]
  
  function franchiseSelected() {
    getDrivers()
    axios.get(route('constructors.index.collection', {
      franchise: franchise.value.slug
    }))
      .then(res => {
        constructors.value = res.data.data
      })
      .catch(error => {
        console.log(error)
      })
  }
  
  function getDrivers() {
    axios.get(route('drivers.index.collection', {
      franchise: franchise.value.slug
    }))
      .then(res => {
        drivers.value = res.data.data
      })
      .catch(error => {
        console.log(error)
      })
  }
  
  function editDriver(driver) {
    modalOpen.value = true
    editing.value = true
    
    fields.value = {
      id: driver.id,
      first_name: driver.first_name,
      last_name: driver.last_name,
      number: driver.number,
      constructor: driver.constructor,
      is_rookie: driver.is_rookie
    }
  }
  
  function saveDriver() {
    axios.post(route('admin.driver.store'),
      fields.value
    )
      .then(() => {
        getDrivers()
        resetForm()
      })
      .catch(error => {
        console.log(error)
      })
  }
  
  function updateDriver() {
    axios.put(route('admin.driver.update', { driver: fields.value.id }),
      fields.value
    )
      .then(() => {
        getDrivers()
        resetForm()
      })
      .catch(error => {
        console.log(error)
      })
  }
  
  function deleteDriver(driver) {
    axios.delete(route('admin.driver.destroy', { driver: driver.id }))
      .then(() => {
        getDrivers()
      })
      .catch(error => {
        console.log(error)
      })
  }
  
  function resetForm() {
    modalOpen.value = false
    
    // Wait for the modal to finish closing... then we will reset the form.
    setTimeout(() => {
      fields.value = {
        first_name: '',
        last_name: '',
        number: '',
        constructor: {},
        is_rookie: false
      }
      
      editing.value = false
    }, 700)
  }
</script>

<script>
  import Admin from '@/Layouts/Admin.vue'
  
  export default {
    layout: Admin
  }
</script>