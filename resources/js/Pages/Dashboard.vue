<template>
    <Head title="Dashboard" />

    <header class="bg-white shadow">
      <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900">Dashboard</h1>
      </div>
    </header>

    <div class="max-w-7xl mx-auto my-8 py-6 sm:px-6 lg:px-8">
      <fantasy-teams-table :fantasy_teams='fantasy_teams' />
      <!-- <stats /> -->
    </div>
</template>

<script setup>
  import Stats from "@/Components/DataDisplay/Stats"
  import FantasyTeamsTable from "@/Components/Lists/FantasyTeamsTable"

  defineProps({
      title: String,
      description: String,
      rules: Array,
      fantasy_teams: Array
  })
</script>