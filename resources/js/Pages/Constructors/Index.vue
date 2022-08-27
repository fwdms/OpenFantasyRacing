<template>
  <Header :title="franchise.name + ' Constructors'" />
  
  <PageHeader :title='franchise.name' />
  
  <TabBar :tabs='tabs' />
  
  <ConstructorsGridList :franchise='franchise' :constructors='teams' />
</template>

<script setup>
  import PageHeader from '@/Components/PageHeadings/PageHeader.vue'
  import ConstructorsGridList from '@/Components/Lists/ConstructorsGridList.vue'
  import TabBar from '@/Components/Navigation/TabBar.vue'
  
  const props = defineProps({
    franchise: Object,
    teams: Array
  })
  
  const tabs = [
    {
      name: 'Drivers',
      href: '/franchise/' + props.franchise.slug + '/drivers',
      current: false
    },
    {
      name: 'Constructors',
      href: '/franchise/' + props.franchise.slug + '/constructors',
      current: true
    },
    {
      name: 'Events',
      href: '/franchise/' + props.franchise.slug + '/events',
      current: false
    }
  ]
</script>