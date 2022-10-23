<template>
  <Header title="Admin | Drivers" />

  <PageHeader title="Edit Driver" />

  <Franchise
    :franchise="franchise"
  />
</template>

<script setup>
  import PageHeader from '@/Shared/PageHeadings/PageHeader.vue'
  import Franchise from '@/Shared/Forms/Franchise.vue'

  const props = defineProps([
    'franchise'
  ])
</script>

<script>
  import Admin from '@/Layouts/Admin.vue'

  export default {
    layout: Admin,
  }
</script>
