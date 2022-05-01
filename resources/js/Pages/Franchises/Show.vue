<template>
  <Head :title="franchise.name" />
  <PageHeader :title="franchise.name"/>

  <TabsBar :tabs="tabs"/>

  <DriversGridList v-if="tabs[0].current === true" :drivers="drivers" />

</template>

<script setup>
  import PageHeader from '@/Components/PageHeadings/PageHeader'
  import TabsBar from '@/Components/Navigation/TabsBar'
  import DriversGridList from '@/Components/Lists/DriversGridList'

  const tabs = [
    { name: 'Drivers', href: '#', current: true },
    { name: 'Contstructors', href: '#', current: false },
    { name: 'Calendar', href: '/calendar', current: false },
    { name: 'Scoring / rules', href: '/rules', current: false },
  ]

  defineProps({
    franchise: Object,
    constructors: Array,
    drivers: Array
  })
</script>