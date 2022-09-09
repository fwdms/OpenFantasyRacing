<template>
  <Header :title='league.name' />
  
  <PageHeader :title='league.name' />
  
  <Table title='Teams' :headers='headers'>
    <tr v-for='team in fantasyTeams'>
      <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center'>
        <Link
          class='text-blue-600'
          :href="route('fantasy-team.show', [team.league_id, team.id] )"
        >
          {{ team.team_name }}
        </Link>
      </td>
      <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center'>
        {{ team.user.first_name }} {{ team.user.last_name }}
      </td>
      <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center'>
        <Link class='text-blue-600'
              :href="route('driver.index', league.franchise.slug)"
        >
          {{ league.franchise.name }}
        </Link>
      </td>
    </tr>
  </Table>
</template>

<script setup>
  import PageHeader from '@/Components/PageHeadings/PageHeader.vue'
  import Table from '@/Components/Tables/Table.vue'
  
  defineProps({
    league: Object,
    drivers: Array,
    fantasyTeams: Array
  })
  
  const headers = [
    'Fantasy Team Name',
    'Team Owner',
    'Franchise',
    'Points'
  ]
</script>