<template>
  <Header title="Admin | Dashboard" />

  <PageHeader title="Dashboard" />

  <Stats />
</template>

<script setup>
  import PageHeader from '@/Shared/PageHeadings/PageHeader.vue'
  import Stats from '@/Shared/DataDisplay/Stats.vue'
</script>

<script>
  import Admin from '@/Layouts/Admin.vue'

  export default {
    layout: Admin,
  }
</script>
