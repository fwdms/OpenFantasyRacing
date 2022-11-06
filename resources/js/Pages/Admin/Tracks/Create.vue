<template>
  <Header title="Admin | Tracks"/>

  <PageHeader title="Create a Track"/>

  <TrackForm/>
</template>

<script setup>
import PageHeader from '@/Shared/PageHeadings/PageHeader.vue'
import TrackForm from '@/Shared/Forms/Track.vue'
</script>

<script>
import Admin from '@/Layouts/Admin.vue'

export default {
  layout: Admin,
}
</script>
