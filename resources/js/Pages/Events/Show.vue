<template>
  <Header :title='event.name' />
  
  <PageHeader :title='event.name' />
  
  <img v-if='event.track[0].track_photo'
       class='mx-auto my-4 w-64'
       :src='event.track[0].track_photo'
  >
  
  <EventResultsTable :franchise='franchise' :results='results' />
</template>

<script setup>
  import PageHeader from '@/Components/PageHeadings/PageHeader.vue'
  import EventResultsTable from '@/Components/Tables/EventResultsTable.vue'
  
  const props = defineProps({
    franchise: Object,
    event: Object,
    results: Array
  })

</script>