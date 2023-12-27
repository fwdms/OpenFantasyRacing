<script setup>
  import PageHeader from '@/Shared/PageHeadings/PageHeader.vue'
  import Table from '@/Shared/Tables/Table.vue'
  import TabBar from '@/Shared/Navigation/TabBar.vue'

  const props = defineProps({
    franchise: Object,
    events: Array,
  })

  const headers = ['Round', 'Name', 'Track', 'Country', 'Date']

  const tabs = [
    {
      name: 'Drivers',
      href: '/franchise/' + props.franchise.slug + '/drivers',
      current: false,
    },
    {
      name: 'Constructors',
      href: '/franchise/' + props.franchise.slug + '/constructors',
      current: false,
    },
    {
      name: 'Events',
      href: '/franchise/' + props.franchise.slug + '/events',
      current: true,
    },
  ]
</script>

<template>
  <Header :title="franchise.name + ' Events'" />

  <PageHeader :title="franchise.name" />

  <TabBar :tabs="tabs" />

  <Table
    title="Events"
    :headers="headers"
  >
    <tr
      v-for="event in events"
      :key="event.id"
    >
      <td class="px-3 py-4 text-sm text-center text-gray-500 whitespace-nowrap">
        {{ event.round_number }}
      </td>
      <td
        class="py-4 pl-4 pr-3 text-sm font-medium text-center text-gray-900 whitespace-nowrap sm:pl-6"
      >
        <Link
          :href="
            route('event.show', { franchise: franchise.slug, race: event.id })
          "
          class="text-orange-600"
        >
          {{ event.name }}
        </Link>
      </td>
      <td class="px-3 py-4 text-sm text-center text-gray-500 whitespace-nowrap">
        {{ event.track[0].name }}
      </td>
      <td class="px-3 py-4 text-sm text-center text-gray-500 whitespace-nowrap">
        {{ event.track[0].location }}
      </td>
      <td class="px-3 py-4 text-sm text-center text-gray-500 whitespace-nowrap">
        {{ event.date }}
      </td>
    </tr>
  </Table>
</template>


