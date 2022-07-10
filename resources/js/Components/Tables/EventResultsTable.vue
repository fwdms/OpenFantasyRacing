<template>
  <Table title="Results" :headers="headers">
    <tr v-for="result in results" :key="result.id">
      <td class="whitespace-nowrap px-3 py-4 text-sm text-center text-gray-500">
        {{ result.finish_pos }}
      </td>
      <td class="whitespace-nowrap py-4 w-96 pl-4 pr-3 text-center text-sm font-medium text-gray-900">
        <Link class="text-orange-600"
              :href="route('driver.show', { franchise_slug: franchise.slug, id: result.driver.id })"
        >
          {{ result.driver.first_name + ' ' + result.driver.last_name }}
        </Link>
      </td>
      <td class="whitespace-nowrap py-4 w-96 pl-4 pr-3 text-center text-sm font-medium text-gray-900">
        <Link class="text-orange-600"
              :href="route('constructor.show', { franchise_slug: franchise.slug, slug: result.driver.constructor.slug })"
        >
          {{ result.driver.constructor.short_name }}
        </Link>
      </td>
      <td class="whitespace-nowrap px-3 w-96 py-4 text-center text-sm text-gray-500">
        {{ result.starting_pos }}
      </td>
      <td class="whitespace-nowrap px-3 w-96 py-4 text-center text-sm text-gray-500">
        <span v-if="result.DNF">
            DNF
        </span>
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
    'Finished',
    'Driver',
    'Constuctor',
    'Started',
    'DNF',
    'Points Earned'
  ]
</script>
