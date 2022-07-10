<template>
  <Table :title="title" :description="description" :headers="headers" :footnote="notes">
    <tr v-for="point in points" :key="point.id">
      <td class="whitespace-nowrap py-4 w-96 pl-4 pr-3 text-center text-sm font-medium text-gray-900 sm:pl-6">
        {{ point.title }}
      </td>
      <td class="whitespace-nowrap px-3 w-96 py-4 text-center text-sm text-gray-500">
        {{ point.points_amount }} pts
      </td>
      <td class="whitespace-nowrap px-3 py-4 text-sm text-center text-gray-500">
        {{ point.description }}
      </td>
    </tr>
  </Table>
</template>

<script setup>
  import Table from '@/Components/Tables/Table.vue'

  defineProps({
      title: String,
      description: String,
      points: Array,
      notes: String
  });

  const headers = [
    'Name',
    'Points Awarded',
    'Description'
  ]
</script>