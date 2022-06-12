<template>
  <ul role="list" class="mx-10 my-8 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
    <li v-for="driver in drivers" :key="driver.email" class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
      <div class="w-full flex items-center justify-between p-6 space-x-6">
          <div class="flex-1 truncate">
              <div class="flex items-center space-x-3">
                  <img
                      v-if="driver.profile_image != null"
                      class="w-24 h-24 bg-gray-300 rounded-lg flex-shrink-0"
                      :src="driver.profile_image"
                      alt=""
                  />
                  <img
                      v-else
                      class="w-24 h-24 bg-gray-300 rounded-lg flex-shrink-0"
                      src="/assets/missingprofle.webp"
                      alt=""
                  />
                  <div class="flex flex-col">
                    <h3 class="text-gray-900 text-sm font-medium truncate">
                        {{ driver.first_name }} {{ driver.last_name }}
                    </h3>
                    <p class="mt-1 text-gray-500 text-sm truncate">
                        {{ driver.constructor.name }}
                    </p>
                  </div>
              </div>
          </div>
          <div class="flex flex-col space-y-2">
            <p class="font-bold text-xl mx-auto">
                #{{ driver.number }}
            </p>

            <p class="text-gray-500 text-xl mx-auto">{{ driver.results_sum_points_for_race }}</p>
          </div>
        </div>
      <div>
        <div class="-mt-px flex divide-x divide-gray-200">
          <div class="w-0 flex-1 flex">
            <a
              :href="currentUrl + '/driver/' + driver.id"
              class="relative -mr-px w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-bl-lg hover:text-gray-500"
            >
              <ChartPieIcon
                class="w-5 h-5 text-gray-400"
                aria-hidden="true"
              />
              <span class="ml-3"> View Driver Profile </span>
            </a>
          </div>
        </div>
      </div>
    </li>
  </ul>
</template>

<script setup>
  import { ChartPieIcon } from "@heroicons/vue/outline";
  import { ClipboardListIcon } from "@heroicons/vue/outline";

  const currentUrl = window.location.pathname;

  defineProps({
    drivers: Array,
  });
</script>
