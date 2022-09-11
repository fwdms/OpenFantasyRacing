<template>
  <Header title='Admin | Franchises' />
  
  <PageHeader :title="'Fanchises'" />
  
  <Table :headers='headers'>
    <template v-slot:top>
      <div class='mx-auto my-4 mx-6'>
        <div class='sm:flex sm:items-center'>
          <div class='sm:flex-auto px-2'>
            <h1 class='text-xl font-semibold text-gray-900'>
              Franchises
            </h1>
            <p class='mt-2 text-sm text-gray-700'>
              A list of all supported Franchises.
            </p>
          </div>
          <div class='mt-4 sm:mt-0 sm:ml-16 sm:flex-none'>
            <button
              type='button'
              class='inline-flex items-center justify-center rounded-md border border-transparent bg-orange-600 px-4 py-2 text-sm
              font-medium text-white shadow-sm
              hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 sm:w-auto'
            >
              Create a Franchise
            </button>
          </div>
        </div>
      </div>
    </template>
    
    <tr v-for='franchise in franchises'>
      <TableColumn>
        {{ franchise.id }}
      </TableColumn>
      
      <TableColumn>
        {{ franchise.name }}
      </TableColumn>
      
      <TableColumn>
        {{ franchise.slug }}
      </TableColumn>
      
      <TableColumn>
        {{ franchise.governing_body }}
      </TableColumn>
      
      <TableColumn>
        <Button>
          edit
        </Button>
        <Button>
          x
        </Button>
      </TableColumn>
    </tr>
  </Table>
</template>

<script setup>
  import PageHeader from '@/Components/PageHeadings/PageHeader.vue'
  import Table from '@/Components/Tables/Table.vue'
  import TableColumn from '@/Components/Tables/TableColumn.vue'
  import Button from '@/Components/Form/Button.vue'
  
  const props = defineProps([
    'franchises'
  ])
  
  const headers = [
    'Franchise ID',
    'Name',
    'Slug',
    'Governing Body',
    ''
  ]
</script>

<script>
  import Admin from '@/Layouts/Admin.vue'
  
  export default {
    layout: Admin
  }
</script>