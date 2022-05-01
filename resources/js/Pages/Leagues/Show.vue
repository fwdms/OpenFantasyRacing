<template>
    <Head :title="league.name" />
    <div>
        <page-header title="Drivers"/>
        <drivers-grid-list :drivers="drivers" />
    </div>
</template>

<script setup>
  import DriversGridList from '@/Components/Lists/DriversGridList.vue'
  import PageHeader from '@/Components/PageHeadings/PageHeader'

  defineProps({
    league: Object,
    drivers: Array
  })
</script>