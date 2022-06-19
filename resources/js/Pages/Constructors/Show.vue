<template>
	<Head :title="team.name" />
	<PageHeader :title="team.name"/>

  <Drivers :drivers="drivers" :franchiseSlug="franchise.slug"/>
  <div class="bg-white mx-8 py-8 px-8 rounded my-8">
      <h1 class="text-3xl font-extrabold tracking-tight text-center text-orange-600">
        Results
      </h1>
      <ConstructorsResultsTable :franchise="franchise" :results="results" />
  </div>
</template>

<script setup>
  import PageHeader from '@/Components/PageHeadings/PageHeader'
  import Drivers from '@/Components/PageSections/Drivers'
  import ConstructorsResultsTable from '../../Components/Lists/ConstructorsResultsTable'

  defineProps({
    team: Object,
    franchise: Object,
    drivers: Array,
    results: Array
  })
</script>
