<script setup>
  import DriversGridList from '@/Shared/Lists/DriversGridList.vue'
  import PageHeader from '@/Shared/PageHeadings/PageHeader.vue'
  import TabBar from '@/Shared/Navigation/TabBar.vue'

  const props = defineProps({
    drivers: Array,
    franchise: Object,
    constructors: Array,
  })

  const tabs = [
    {
      name: 'Drivers',
      href: '/franchise/' + props.franchise.slug + '/drivers',
      current: true,
    },
    {
      name: 'Constructors',
      href: '/franchise/' + props.franchise.slug + '/constructors',
      current: false,
    },
    {
      name: 'Events',
      href: '/franchise/' + props.franchise.slug + '/events',
      current: false,
    },
  ]
</script>

<template>
  <Header :title="franchise.name + ' Drivers'" />

  <PageHeader :title="franchise.name" />

  <TabBar :tabs="tabs" />

  <DriversGridList
    :franchise="franchise"
    :drivers="drivers"
  />
</template>

