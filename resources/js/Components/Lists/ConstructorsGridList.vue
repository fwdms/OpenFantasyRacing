<template>
  <ul role="list" class="mx-10 my-8 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
    <li v-for="constructor in constructors" :key="constructor.index" class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
      <div class="w-full flex items-center justify-between p-6 space-x-6">
          <div class="flex items-center space-x-3">
            <img v-if="constructor.logo != null" class="w-16 h-16 flex-shrink-0" :src="constructor.logo" alt="" />
            <div> 
              <Link :href="currentUrl + constructor.slug" 
                class="font-medium border border-transparent rounded-bl-lg hover:text-gray-500"
              >
                <h3 class="text-orange-600 hover:text-gray-800 font-medium truncate">
                  {{ constructor.short_name }}
                </h3>
                <h3 class="text-gray-500 text-sm font-medium truncate">{{ constructor.name }}</h3>
              </Link>
            </div>
          </div>
          <p class="text-gray-500 text-xl mx-auto">{{ constructor.results_sum_points_for_race }}</p>
      </div>
    </li>
  </ul>
</template>

<script setup>
  import { ChartPieIcon } from '@heroicons/vue/outline'
  import { ClipboardListIcon } from '@heroicons/vue/outline'

  const currentUrl = window.location.pathname + '/';

  defineProps({
    constructors: Array
  })
</script>