<template>
  <Header title="Admin | Drivers" />

  <PageHeader title="Edit Driver" />

  <Driver
    :franchises="franchises"
    :driver="driver"
  />
</template>

<script setup>
  import PageHeader from '@/Components/PageHeadings/PageHeader.vue'
  import Driver from '@/Components/Forms/Driver.vue'

  const props = defineProps(['franchises', 'driver'])
</script>

<script>
  import Admin from '@/Layouts/Admin.vue'

  export default {
    layout: Admin,
  }
</script>
