<template>
  <Table title="" :headers="headers">
    <tr v-for="result in results" :key="result.id">
      <td class="whitespace-nowrap py-4 w-96 pl-4 pr-3 text-center text-sm font-medium text-gray-900 sm:pl-6">
        {{ result.round_number }}
      </td>
      <td class="whitespace-nowrap py-4 w-96 pl-4 pr-3 text-center text-sm font-medium text-gray-900 sm:pl-6">
        <Link :href="route('event.show', { franchise_slug: franchise.slug, id: result.race_id })"
          class="text-orange-600"
        >
          {{ result.name }}
        </Link>
      </td>
      <td class="whitespace-nowrap py-4 w-96 pl-4 pr-3 text-center text-sm font-medium text-gray-900 sm:pl-6">
        {{ result.track_name }}
      </td>
      <td class="whitespace-nowrap py-4 w-96 pl-4 pr-3 text-center text-sm font-medium text-gray-900 sm:pl-6">
        {{ result.track_location }}
      </td>
      <td class="whitespace-nowrap px-3 w-96 py-4 text-center text-sm text-gray-500">
        {{ result.starting_pos }}
      </td>
      <td class="whitespace-nowrap px-3 py-4 text-sm text-center text-gray-500">
        {{ result.finish_pos }}
      </td>
      <td class="whitespace-nowrap px-3 py-4 text-sm text-center text-gray-500">
        <span v-if="result.DNF">DNF</span>
      </td>
      <td class="whitespace-nowrap px-3 py-4 text-sm text-center text-gray-500">
        {{ result.points_for_race }}
      </td>
    </tr>
  </Table>
</template>

<script setup>
  import Table from '@/Components/Tables/Table.vue'

	defineProps({
    franchise: Object,
    results: Array,
  })

  const headers = [
    'Round',
    'Event',
    'Track Name',
    'Track Location',
    'Started',
    'Finished',
    'DNF',
    'Points'
  ]
</script>
