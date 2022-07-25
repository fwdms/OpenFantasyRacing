<template>
  <ul role="list" class="mx-10 my-8 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
    <li v-for="driver in drivers" :key="driver.email" class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
      <div class="w-full flex items-center justify-between p-6 space-x-6">
        <div class="flex-1 truncate">
            <div class="flex items-center space-x-3">
              <Link :href="route('driver.show', { franchise_slug: franchise.slug, id: driver.id })">
                <img
                    class="w-24 h-24 bg-gray-300 rounded-lg flex-shrink-0"
                    :src="driver.profile_image ? driver.profile_image : '/assets/missingprofle.webp'"
                    alt=""
                />
              </Link>
                <div class="flex flex-col">
                  <h3 class="font-medium truncate">
                    <Link :href="route('driver.show', {franchise_slug: franchise.slug, id: driver.id})" 
                      class="text-gray-800 hover:text-orange-600"
                    >
                      {{ driver.first_name }} {{ driver.last_name }}
                    </Link>
                  </h3>
                  <Link :href="route('constructor.show', { franchise_slug: franchise.slug, slug: driver.constructor.slug })" 
                    class="mt-1 text-orange-600 text-sm truncate hover:text-gray-800"
                  >
                      {{ driver.constructor.short_name }}
                  </Link>
                </div>
            </div>
        </div>
        <div class="flex flex-col space-y-2">
          <p class="font-bold text-xl mx-auto">
              #{{ driver.number }}
          </p>

          <p class="text-gray-500 text-xl mx-auto">
            {{ driver.results_sum_points_for_race }}
          </p>
        </div>
      </div>
    </li>
  </ul>
</template>

<script setup>
  import { ChartPieIcon } from "@heroicons/vue/outline"
  import { ClipboardListIcon } from "@heroicons/vue/outline"

  defineProps({
    franchise: Object,
    drivers: Array,
  });
</script>
