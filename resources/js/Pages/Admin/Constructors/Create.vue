<template>
  <Header title="Create a Constructor"/>

  <PageHeader title="Create a Constructor / Team"/>

  <Constructor :franchises="franchises"/>
</template>

<script setup>
import PageHeader from "@/Shared/PageHeadings/PageHeader.vue"
import Constructor from "@/Shared/Forms/Constructor.vue"

const props = defineProps([
  'franchises'
])
</script>

<script>
import Admin from '@/Layouts/Admin.vue'

export default {
  layout: Admin,
}
</script>
