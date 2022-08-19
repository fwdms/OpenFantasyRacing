<template>
  <Head title="Admin | Dashboard" />

  <PageHeader :title="'Dashboard'"/>

  <Stats />
</template>

<script setup>
    import PageHeader from '@/Components/PageHeadings/PageHeader.vue'
    import Stats from '@/Components/DataDisplay/Stats.vue';
</script>

<script>
  import Admin from '@/Layouts/Admin.vue'
  
  export default {
    layout: Admin
  }
</script>