<template>
  <Head title="Admin | Franchises" />

  <PageHeader :title="'Fanchises'"/>
</template>

<script setup>
    import PageHeader from '@/Components/PageHeadings/PageHeader.vue'
</script>

<script>
  import Admin from '@/Layouts/Admin.vue'
  
  export default {
    layout: Admin
  }
</script>