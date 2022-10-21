<template>
  <Header title="Create Fantasy League" />

  <League />
</template>

<script setup>
  import League from '@/Shared/Forms/League.vue'

  defineProps({
    franchises: Array,
  })
</script>
