<template>
	<Head :title="team.name" />

	<PageHeader :title="team.name"/>

  <Drivers :drivers="drivers" :franchiseSlug="franchise.slug"/>

  <ConstructorsResultsTable :franchise="franchise" :results="results" />
</template>

<script setup>
  import PageHeader from '@/Components/PageHeadings/PageHeader.vue'
  import Drivers from '@/Components/PageSections/Drivers.vue'
  import ConstructorsResultsTable from '@/Components/Tables/ConstructorsResultsTable.vue'

  defineProps({
    team: Object,
    franchise: Object,
    drivers: Array,
    results: Array
  })
</script>
