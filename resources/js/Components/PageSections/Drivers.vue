<template>
  <div class="bg-white mx-8 my-16 rounded-xl">
    <div class="max-w-7xl mx-auto py-12 px-4 text-center ">
      <div class="space-y-12">
        <div class="space-y-5 mx-auto">
          <h2 class="text-3xl font-extrabold tracking-tight">Drivers</h2>
        </div>
        <ul role="list" class="flex flex-wrap mx-auto gap-x-16 justify-center items-center">
          <li v-for="driver in drivers" :key="driver.last_name">
              <div class="text-lg leading-6 font-medium space-y-1 mx-auto">
                <Link :href="route('driver.show', { franchise_slug: franchiseSlug, id: driver.id })" 
                  class="text-orange-600 hover:text-gray-800"
                >
                  <img class="h-52 w-52 rounded-full my-5" :src="driver.profile_image" :alt="driver.first_name + ' ' + driver.last_name" />
                  <h3>{{ driver.first_name }} {{ driver.last_name }}</h3>
                </Link>
                <p class="text-gray-500">
                  {{ driver.number }} 
                  <span class="text-gray-400 px-3">{{ driver.results_sum_points_for_race }}</span>
                </p>
              </div>
              <ul v-if="driver.twitterUrl != null" role="list" class="flex justify-center space-x-5">
                <li>
                  <Link :href="driver.twitterUrl" class="text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Twitter</span>
                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                      <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                    </svg>
                  </Link>
                </li>
              </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script setup>

  defineProps({
    drivers: Array,
    franchiseSlug: String
  })

</script>