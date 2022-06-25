<template>
  <Head :title="franchise.name + ' Drivers'" />
  <PageHeader :title="franchise.name" />

  <TabBar :tabs="tabs" />

  <DriversGridList :drivers="drivers" />
</template>

<script setup>
  import DriversGridList from "@/Components/Lists/DriversGridList"
  import PageHeader from '@/Components/PageHeadings/PageHeader'
  import TabBar from '@/Components/Navigation/TabBar'

  const props = defineProps({
      drivers: Array,
      franchise: Object,
      constructors: Array,
  });

  const tabs = [
    { name: 'Drivers', href: '/franchise/' + props.franchise.slug + '/drivers', current: true },
    { name: 'Constructors', href: '/franchise/' + props.franchise.slug + '/constructors', current: false },
    { name: 'Events', href: '/franchise/' + props.franchise.slug + '/events', current: false },
  ]
</script>
