<template>
  <ul role="list" class=" mx-10 my-8 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
    <li v-for="driver in drivers" :key="driver.email" class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
      <div class="w-full flex items-center justify-between p-6 space-x-6">
        <div class="flex-1 truncate">
          <div class="flex items-center space-x-3">
            <h3 class="text-gray-900 text-sm font-medium truncate">{{ driver.first_name }} {{ driver.last_name }}</h3>
            <!-- <span class="flex-shrink-0 inline-block px-2 py-0.5 text-green-800 text-xs font-medium bg-green-100 rounded-full">{{ driver.constructor.name }}</span> -->
          </div>
          <p class="mt-1 text-gray-500 text-sm truncate">{{ driver.constructor.name }}</p>
        </div>
        <div class="flex items-center space-x-3">
          <p class="font-bold text-xl">{{ driver.number }}</p>
          <img v-if="driver.profile_image != null" class="w-10 h-10 bg-gray-300 rounded-full flex-shrink-0" :src="driver.profile_image" alt="" />
        </div>
      </div>
      <div>
        <div class="-mt-px flex divide-x divide-gray-200">
          <div class="w-0 flex-1 flex">
            <a href="#" class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500">
              <ChartPieIcon class="w-5 h-5 text-gray-400" aria-hidden="true" />
              <span class="ml-3">View Driver Profile</span>
            </a>
          </div>
          <!-- <div class="-ml-px w-0 flex-1 flex">
            <a :href="`#`" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
              <ClipboardListIcon class="w-5 h-5 text-gray-400" aria-hidden="true" />
              <span class="ml-3">Create New League</span>
            </a>
          </div> -->
        </div>
      </div>
    </li>
  </ul>
</template>

<script setup>
  import { ChartPieIcon } from '@heroicons/vue/outline'
  import { ClipboardListIcon } from '@heroicons/vue/outline'

  defineProps({
    constructors: Array
  })
</script>