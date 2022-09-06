<template>
  <div class='rounded-md bg-red-100 border-red-500 border-solid border-2 p-4'>
    <div class='flex'>
      <div class='flex-shrink-0'>
        <XCircleIcon class='h-5 w-5 text-red-400' aria-hidden='true' />
      </div>
      <div class='ml-3'>
        <h3 class='text-sm font-medium text-red-900'>
          {{ errors }}
        </h3>
      </div>
    </div>
  </div>
</template>

<script setup>
  import { XCircleIcon } from '@heroicons/vue/solid'
  
  defineProps({
    errors: String
  })
</script>
