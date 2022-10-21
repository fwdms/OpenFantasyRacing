<template>
  <Header title="Admin | Users" />

  <PageHeader title="Users" />

  <Table :headers="headers">
    <template v-slot:top>
      <div class="mx-auto my-4 mx-6">
        <div class="sm:flex sm:items-center">
          <div class="sm:flex-auto px-2">
            <h1 class="text-xl font-semibold text-gray-900">Users</h1>
            <p class="mt-2 text-sm text-gray-700">A list of all the users.</p>
          </div>
          <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
            <button
              type="button"
              class="inline-flex items-center justify-center rounded-md border border-transparent bg-orange-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 sm:w-auto"
            >
              Add a User
            </button>
          </div>
        </div>
      </div>
    </template>

    <tr v-for="user in users">
      <TableColumn>
        {{ user.id }}
      </TableColumn>

      <TableColumn>
        {{ user.first_name }}
      </TableColumn>

      <TableColumn>
        {{ user.last_name }}
      </TableColumn>

      <TableColumn>
        {{ user.email }}
      </TableColumn>
    </tr>
  </Table>
</template>

<script setup>
  import PageHeader from '@/Shared/PageHeadings/PageHeader.vue'
  import Table from '@/Shared/Tables/Table.vue'
  import TableColumn from '@/Shared/Tables/TableColumn.vue'

  const props = defineProps(['users'])

  const headers = ['User ID', 'First Name', 'Last Name', 'Email']
</script>

<script>
  import Admin from '@/Layouts/Admin.vue'

  export default {
    layout: Admin,
  }
</script>
