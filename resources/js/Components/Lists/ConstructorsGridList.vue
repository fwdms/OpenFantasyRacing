<template>
  <ul role="list" class="mx-10 my-8 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
    <li v-for="constructor in constructors" :key="constructor.index" class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
      <div class="w-full flex items-center justify-between p-6 space-x-6">
        <div class="flex-1 truncate">
          <div class="flex items-center space-x-3">
            <img v-if="constructor.logo != null" class="w-16 h-16 flex-shrink-0" :src="constructor.logo" alt="" />
            <div> 
              <h3 class="text-gray-900 text-sm font-medium truncate">{{ constructor.short_name }}</h3>
              <h3 class="text-gray-500 text-sm font-medium truncate">{{ constructor.name }}</h3>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="-mt-px flex divide-x divide-gray-200">
          <div class="w-0 flex-1 flex">
            <Link :href="currentUrl + '/constructor/' + constructor.slug" 
              class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500"
            >
              <ChartPieIcon class="w-5 h-5 text-gray-400" aria-hidden="true" />
              <span class="ml-3">View Constructor Profile</span>
            </Link>
          </div>
        </div>
      </div>
    </li>
  </ul>
</template>

<script setup>
  import { ChartPieIcon } from '@heroicons/vue/outline'
  import { ClipboardListIcon } from '@heroicons/vue/outline'

  const currentUrl = window.location.pathname;

  defineProps({
    constructors: Array
  })
</script>