<template>
  <Header :title="title"/>

  <PageHeader :title="title"/>

  <Event
      :franchises="franchises"
      :tracks="tracks"
  />
</template>

<script setup>
import PageHeader from '@/Shared/PageHeadings/PageHeader.vue'
import Event from '@/Shared/Forms/Event.vue'

const props = defineProps({
  franchises: Array,
  tracks: Array
})

let title = 'Create an Event'
</script>

<script>
import Admin from '@/Layouts/Admin.vue'

export default {
  layout: Admin,
}
</script>

