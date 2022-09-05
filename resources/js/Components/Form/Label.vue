<template>
  <label class='block font-medium text-sm text-gray-700 mx-3'>
    <span v-if='value'>{{ value }}</span>
    <span v-else><slot /></span>
  </label>
</template>

<script setup>
  defineProps(['value'])
</script>