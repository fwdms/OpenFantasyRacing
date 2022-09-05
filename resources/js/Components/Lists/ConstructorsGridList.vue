<template>
  <div role='list' class='mx-8 my-8 flex flex-wrap justify-center gap-6'>
    <div v-for='(constructor, index) in constructors'
         class='bg-white rounded-lg shadow divide-y divide-gray-200'
    >
      <div class='flex flex-wrap items-center justify-between p-6 w-96'>
        <div class='flex items-center'>
          <img v-if='constructor.logo != null'
               class='w-16 h-16 flex-shrink-0 mr-3'
               :src='constructor.logo'
               alt=''
          />
          <div>
            <Link class='font-medium border border-transparent rounded-bl-lg hover:text-gray-500'
                  :href="route('constructor.show', { franchise: franchise.slug, slug: constructor.slug })"
            >
              <h3 class='text-orange-600 hover:text-gray-800 font-medium truncate'>
                {{ constructor.short_name }}
              </h3>
              
              <h3 class='text-gray-500 text-sm truncate font-medium w-48'>
                {{ constructor.name }}
              </h3>
            
            </Link>
          </div>
        </div>
        <div class='flex flex-col space-y-2'>
          <p class='font-bold text-xl mx-auto'>
            #{{ index + 1 }}
          </p>
          
          <p class='text-gray-500 text-xl mx-auto'>
            {{ constructor.results_sum_points_for_race }}
          </p>
        
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
  defineProps({
    franchise: Object,
    constructors: Array
  })
</script>