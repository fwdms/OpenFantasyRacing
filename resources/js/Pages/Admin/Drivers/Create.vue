<template>
  <Header title="Admin | Drivers" />

  <PageHeader title="Drivers" />

  <Driver :franchises="franchises" />
</template>

<script setup>
  import PageHeader from '@/Shared/PageHeadings/PageHeader.vue'
  import Driver from '@/Shared/Forms/Driver.vue'

  const props = defineProps(['franchises'])
</script>

<script>
  import Admin from '@/Layouts/Admin.vue'

  export default {
    layout: Admin,
  }
</script>
