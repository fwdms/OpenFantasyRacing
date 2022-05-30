<template>
	<Head :title="constructor.name" />
	<PageHeader :title="constructor.name"/>

  <Drivers :drivers="constructor.drivers" :franchiseSlug="franchise.slug"/>

  <p>{{ constructor.franchise_id }}</p>
</template>

<script setup>
  import PageHeader from '@/Components/PageHeadings/PageHeader'
  import Drivers from '@/Components/PageSections/Drivers'

  defineProps({
    constructor: Object,
    franchise: Object
  })
</script>
