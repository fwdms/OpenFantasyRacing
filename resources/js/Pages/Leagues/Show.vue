<template>
  <Head :title="league.name" />

  <PageHeader :title="league.name"/>

  <LeagueTeamsTable 
    :fantasyTeams="league.fantasy_teams"
    :league="league"
  />
</template>

<script setup>
  import PageHeader from '@/Components/PageHeadings/PageHeader.vue'
  import LeagueTeamsTable from '../../Components/Tables/LeagueTeamsTable.vue'
  import DriversGridList from '@/Components/Lists/DriversGridList.vue'

  defineProps({
    league: Object,
    drivers: Array
  })
</script>