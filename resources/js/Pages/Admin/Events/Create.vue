<template>
  <Header :title="title"/>

  <PageHeader :title="title"/>


</template>

<script setup>
import PageHeader from '@/Shared/PageHeadings/PageHeader.vue'

const props = defineProps({
  franchises: Array
})

let title = 'Create an Event'
</script>
