<template>
  <Head :title="driver.first_name + ' ' + driver.last_name" />
  <PageHeader :title="driver.first_name + ' ' + driver.last_name"/>

  <div class="aspect-w-3 aspect-h-2 mx-8 my-8">
    <img class="object-cover shadow-lg rounded-lg w-96" :src="driver.profile_image" alt="" />
  </div>
</template>

<script setup>
  import PageHeader from '@/Components/PageHeadings/PageHeader'

  defineProps({
    driver: Object
  })
</script>