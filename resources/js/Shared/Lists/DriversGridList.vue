<template>
  <div role='list' class='mx-10 my-8 flex flex-wrap justify-center gap-6'>
    <div v-for='(driver, index) in drivers'
         class='bg-white rounded-lg shadow divide-y divide-gray-200 w-96'
    >
      <div class='w-full flex flex-wrap items-center justify-between p-6 space-x-6'>
        <div class='flex-1 truncate'>
          <div class='flex items-center space-x-3'>
            <Link :href="route('driver.show', { franchise: franchise.slug, driver: driver.id })">
              <img
                class='w-24 h-24 bg-gray-300 rounded-lg flex-shrink-0'
                :src="driver.profile_image ? driver.profile_image : '/assets/missingprofle.webp'"
                alt=''
              />
            </Link>
            <div class='flex flex-col'>
              <h3 class='font-medium truncate'>
                <Link :href="route('driver.show', { franchise: $props.franchise.slug, driver: driver.id })"
                      class='text-gray-800 hover:text-orange-600'
                >
                  {{ driver.first_name }} {{ driver.last_name }}
                </Link>
              </h3>
              <Link class='mt-1 text-orange-600 text-sm truncate hover:text-gray-800'
                    :href="route('constructor.show', { franchise: franchise.slug, slug: driver.constructor.slug })"
              >
                {{ driver.constructor.short_name }}
              </Link>
              <p class='font-bold text-sm my-1'>
                #{{ driver.number }}
              </p>
            </div>
          </div>
        </div>
        <div class='flex flex-col space-y-2'>
          <p class='font-bold text-xl mx-auto'>
            #{{ index + 1 }}
          </p>
          
          <p class='text-gray-500 text-xl mx-auto'>
            {{ driver.results_sum_points_for_race }}
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>  
  const props = defineProps({
    franchise: Object,
    drivers: Array
  })
</script>
