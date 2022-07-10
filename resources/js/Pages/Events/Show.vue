<template>
  <Head :title="event.name"/>
  <PageHeader :title="event.name"/>

  <img v-if="event.track[0].track_photo"
       class="mx-auto my-4 w-64"
       :src="event.track[0].track_photo"
  >

  <Table title="Results">
    <thead class="bg-gray-50">
      <tr>
        <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
          Finished
        </th>
        <th scope="col"
            class="py-3.5 pl-4 pr-3 w-96 text-center text-sm font-semibold text-gray-900">
          Driver
        </th>
        <th scope="col"
            class="py-3.5 pl-4 pr-3 w-96 text-center text-sm font-semibold text-gray-900">
          Constuctor
        </th>
        <th scope="col" class="px-3 py-3.5 w-96 text-center text-sm font-semibold text-gray-900">
          Started
        </th>
        <th scope="col" class="px-3 py-3.5 w-96 text-center text-sm font-semibold text-gray-900">
          DNF
        </th>
        <th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
          Points Earned
        </th>
      </tr>
    </thead>
    <tbody class="divide-y divide-gray-200 bg-white">
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
    </tbody>
  </Table>
</template>

<script setup>
  import PageHeader from '@/Components/PageHeadings/PageHeader.vue'
  import Table from '@/Components/Lists/Table.vue'

  defineProps({
    franchise: Object,
    event: Object,
    results: Array
  })
</script>