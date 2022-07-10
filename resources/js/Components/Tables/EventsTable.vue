<template>
  <Table title="Events" :headers="headers">
    <tr v-for="event in events" :key="event.id">
      <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">
        {{ event.round_number }}
      </td>
      <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 text-center">
        <Link :href="route('event.show', {franchise_slug: franchise.slug, id: event.id})"
              class="text-orange-600"
        >
          {{ event.name }}
        </Link>
      </td>
      <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">
        {{ event.track[0].name }}
      </td>
      <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">
        {{ event.track[0].location }}
      </td>
      <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">
        {{ event.date }}
      </td>
    </tr>
  </Table>
</template>

<script setup>
  import Table from "@/Components/Tables/Table.vue"

  defineProps({
    franchise: Object,
    events: Array
  })

  const headers = [
    'Round',
    'Name',
    'Track',
    'Country',
    'Date'
  ]
</script>