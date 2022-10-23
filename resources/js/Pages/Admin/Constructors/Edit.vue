<template>
  <Header title="Edit a Constructor"/>

  <PageHeader title="Edit a Constructor / Team"/>

  <Constructor :franchises="franchises" :team="team"/>
</template>

<script setup>
import PageHeader from "@/Shared/PageHeadings/PageHeader.vue"
import Constructor from "@/Shared/Forms/Constructor.vue"

const props = defineProps([
  'franchises',
  'team'
])
</script>

<script>
import Admin from '@/Layouts/Admin.vue'

export default {
  layout: Admin,
}
</script>
