<template>
  <Table title="Teams" :headers="headers">
    <tr v-for="team in fantasyTeams">
      <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">
        <Link 
          class="text-blue-600"
          :href="route('fantasy-team.show', [team.league_id, team.id] )"
        >
          {{ team.team_name }}
        </Link>
      </td>
      <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">
        {{ team.user.first_name }} {{ team.user.last_name }}
      </td>
      <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">
        <Link class="text-blue-600" 
          :href="route('driver.index', league.franchise.slug)"
        >
          {{ league.franchise.name }}
        </Link>
      </td>
    </tr>
  </Table>
</template>

<script setup>
  import Table from "@/Components/Tables/Table.vue"

  defineProps({
    fantasyTeams: Array,
    league: Object
  })

  const headers = [
    'Fantasy Team Name',
    'Team Owner',
    'Franchise',
    'Points'
  ]
</script>