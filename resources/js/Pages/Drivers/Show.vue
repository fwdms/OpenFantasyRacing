<template>
  <Head :title="driver.first_name + ' ' + driver.last_name" />
  <PageHeader :title="driver.first_name + ' ' + driver.last_name"/>
</template>

<script setup>
  import PageHeader from '@/Components/PageHeadings/PageHeader'

  defineProps({
    driver: Object
  })
</script>