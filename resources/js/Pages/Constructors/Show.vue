<template>
	<Head :title="team.name" />
	<PageHeader :title="team.name"/>

  <Drivers :drivers="drivers" :franchiseSlug="franchise.slug"/>

  <ConstructorsResultsTable title="Results" :franchise="franchise" :results="results" />
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
