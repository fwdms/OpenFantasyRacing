<template>
    <Head title="Dashboard" />

    <header class="bg-white shadow">
      <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900">Dashboard</h1>
      </div>
    </header>

    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
      <league-table :leagues='leagues' />
      <stats />
    </div>

</template>

<script setup>
  import Stats from "@/Components/DataDisplay/Stats"
  import LeagueTable from "@/Components/Lists/LeagueTable"

  defineProps({
      title: String,
      description: String,
      rules: Array,
      leagues: Array
  })
</script>