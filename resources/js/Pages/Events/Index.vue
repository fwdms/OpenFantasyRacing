<template>
  <Head :title="franchise.name + ' Events'" />
  <PageHeader :title="franchise.name" />

  <TabBar :tabs="tabs" />

  <EventsList :franchise="franchise" :events='events'/>
</template>

<script setup>
  import PageHeader from '@/Components/PageHeadings/PageHeader.vue'
  import EventsList from '@/Components/Lists/EventsList.vue'
  import TabBar from '@/Components/Navigation/TabBar.vue'

  const props = defineProps({
    franchise: Object,
    events: Array,
  });

  const tabs = [
    { name: 'Drivers', href: '/franchise/' + props.franchise.slug + '/drivers', current: false },
    { name: 'Constructors', href: '/franchise/' + props.franchise.slug + '/constructors', current: false },
    { name: 'Events', href: '/franchise/' + props.franchise.slug + '/events', current: true },
  ]
</script>