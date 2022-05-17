<template>
  <Head :title="franchise.name" />
  <PageHeader :title="franchise.name"/>

  <TabsBar :tabs="tabs"/>

  <DriversGridList v-if="true === true" :drivers="drivers" />
  <!-- <p class="text-center">current tab: {{ getTab().name }} </p> -->
</template>

<script setup>
  import PageHeader from '@/Components/PageHeadings/PageHeader'
  import TabsBar from '@/Components/Navigation/TabsBar'
  import DriversGridList from '@/Components/Lists/DriversGridList'

  defineProps({
    franchise: Object,
    constructors: Array,
    drivers: Array
  })

  const tabs = [
    'Drivers',
    'Contstructors',
    'Calendar',
    'Scoring Points',
    'Rules',
  ]
</script>