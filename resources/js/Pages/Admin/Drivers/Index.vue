<template>
  <Header title="Admin | Drivers"/>

  <PageHeader title="Drivers"/>

  <div class="mx-auto w-1/5">
    <SelectMenu
        label="Franchise"
        :options="props.franchises"
        v-model="franchise"
        @change="franchiseSelected()"
    >
      <template #option="{ option }">
        {{ option.name }}
      </template>
    </SelectMenu>
  </div>

  <Table
      :headers="headers"
  >
    <template v-slot:top>
      <div class="my-4 mx-6">
        <div class="sm:flex sm:items-center">
          <div class="sm:flex-auto px-2">
            <h1 class="text-xl font-semibold text-gray-900">
              Drivers
            </h1>
            <p class="mt-2 text-sm text-gray-700">
              A list of all the drivers from a given franchise.
            </p>
          </div>
          <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
            <Link :href="route('admin.driver.create')">
              <Button>
                Add a Driver
              </Button>
            </Link>
          </div>
        </div>
      </div>
    </template>

    <tr v-for="driver in drivers">
      <TableColumn>
        {{ driver.id }}
      </TableColumn>

      <TableColumn>
        <img
            :src="
            driver.profile_image
              ? driver.profile_image
              : '/assets/missingprofle.webp'
          "
            class="rounded-lg object-contain h-20 w-20 mx-auto"
        />
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
        <span v-if="driver.is_rookie">Rookie</span>
      </TableColumn>

      <TableColumn>
        <Link :href="route('admin.driver.edit', { driver: driver.id })">
          <Button>
            edit
          </Button>
        </Link>

        <Button @click="deleteDriver(driver)">
          x
        </Button>
      </TableColumn>
    </tr>
  </Table>
</template>

<script setup>
import {ref} from 'vue'
import axios from 'axios'
import PageHeader from '@/Shared/PageHeadings/PageHeader.vue'
import SelectMenu from '@/Shared/Form/SelectMenu.vue'
import Table from '@/Shared/Tables/Table.vue'
import TableColumn from '@/Shared/Tables/TableColumn.vue'
import Button from '@/Shared/Form/Button.vue'

const props = defineProps(['franchises'])

const drivers = ref([])
const franchise = ref({})
const constructors = ref([])

const headers = [
  'Driver ID',
  'Profile Image',
  'Name',
  '#',
  'Constructor',
  'Rookie',
  '',
]

function franchiseSelected() {
  getDrivers()
  axios
      .get(
          route('constructors.index.collection', {
            franchise: franchise.value.slug,
          })
      )
      .then(res => {
        constructors.value = res.data.data
      })
      .catch(error => {
        console.log(error)
      })
}

function getDrivers() {
  axios
      .get(
          route('drivers.index.collection', {
            franchise: franchise.value.slug,
          })
      )
      .then(res => {
        drivers.value = res.data.data
      })
      .catch(error => {
        console.log(error)
      })
}

function deleteDriver(driver) {
  axios.delete(
      route('admin.driver.destroy', {driver: driver.id})
  )
      .then(() => {
        getDrivers()
      })
      .catch(error => {
        console.log(error)
      })
}
</script>

<script>
import Admin from '@/Layouts/Admin.vue'

export default {
  layout: Admin,
}
</script>
