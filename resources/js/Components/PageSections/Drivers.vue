<template>
  <div class="bg-white mx-8 my-16 rounded-xl">
    <div class="max-w-7xl mx-auto py-12 px-4 text-center sm:px-6 lg:px-8 lg:py-24">
      <div class="space-y-12">
        <div class="space-y-5 sm:mx-auto sm:max-w-xl sm:space-y-4 lg:max-w-5xl">
          <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">Drivers</h2>
        </div>

        <ul role="list" class="flex flex-wrap mx-auto gap-x-16 justify-center items-center">
          <li v-for="driver in drivers" :key="driver.last_name">
            <div class="space-y-6 my-8 mx-auto">
              <img class="mx-auto h-64 w-64 rounded-full xl:w-56 xl:h-56" :src="driver.profile_image" alt="" />
              <div class="space-y-2">
                <div class="text-lg leading-6 font-medium space-y-1 mx-auto">
                  <h3>{{ driver.first_name }} {{ driver.last_name }}</h3>
                  <p class="text-gray-500">{{ driver.number }}</p>
                </div>
                <ul role="list" class="flex justify-center space-x-5">
                  <li>
                    <a :href="driver.twitterUrl" class="text-gray-400 hover:text-gray-500">
                      <span class="sr-only">Twitter</span>
                      <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                      </svg>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
        </ul>

      </div>
    </div>
  </div>
</template>

<script setup>
  defineProps({
    drivers: Array
  })
</script>