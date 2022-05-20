<template>
  <Head :title="franchise.name" />
  <PageHeader :title="franchise.name"/>

  <TabsBar @setCurrentTab="(tab) => selectedTab.name = tab" :tabs="tabs"/>

  <DriversGridList v-if="selectedTab.name === 'Drivers'" :drivers="drivers" />
  <ConstructorsGridList v-if="selectedTab.name === 'Constructors'" :constructors="constructors" />
</template>

<script setup>
  import { ref } from 'vue'
  import PageHeader from '@/Components/PageHeadings/PageHeader'
  import TabsBar from '@/Components/Navigation/TabsBar'
  import DriversGridList from '@/Components/Lists/DriversGridList'
  import ConstructorsGridList from '@/Components/Lists/ConstructorsGridList'

  defineProps({
    franchise: Object,
    constructors: Array,
    drivers: Array
  })

  const selectedTab = ref({ name: '' })

  const tabs = [
    'Drivers',
    'Constructors',
    // 'Calendar',
    // 'Scoring Points',
    // 'Rules',
  ]

</script>