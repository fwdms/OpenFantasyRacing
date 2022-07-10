<template>
  <Head :title="league.name" />

  <PageHeader title="Drivers"/>

  <DriversGridList :drivers="drivers" />
</template>

<script setup>
  import DriversGridList from '@/Components/Lists/DriversGridList.vue'
  import PageHeader from '@/Components/PageHeadings/PageHeader.vue'

  defineProps({
    league: Object,
    drivers: Array
  })
</script>