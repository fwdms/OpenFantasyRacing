<template>
  <div class="bg-white my-8 mx-8 pt-4 pb-2 rounded">
    <h1 class="text-3xl my-2 font-extrabold tracking-tight text-center text-orange-600">
      {{ title }}
    </h1>
      
    <div class="mt-4 mb-2 mx-4 flex flex-col">
      <div class="overflow-x-auto">
        <div class="inline-block min-w-full py-2 align-middle px-2">
          <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 rounded-lg">
            <table class="min-w-full divide-y divide-gray-300">
              <slot />
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
  defineProps({
    title: String
  })
</script>
