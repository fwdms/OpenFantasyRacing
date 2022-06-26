<template>
  <Head :title="driver.first_name + ' ' + driver.last_name" />
  <main>
    <div class="flex flex-wrap bg-white mx-8 py-8 px-8 rounded my-8">
      <img class="max-w-md w-full mx-auto object-center object-cover rounded"
        :src="driver.profile_image" 
        :alt="driver.first_name + ' ' + driver.last_name"  
      />

      <div class="mx-auto mt-8 xl:mt-0 xl:w-4/6">
        <h1 class="text-3xl font-extrabold tracking-tight text-gray-900 text-center xl:text-left">
          {{ driver.first_name + ' ' + driver.last_name }}
        </h1>

        <div class="mt-3 text-center xl:text-left">
          <Link class="text-3xl text-orange-600"
            :href="route('constructor.show', { franchise_slug:franchise.slug, slug: driver.constructor.slug })"
          >
            {{ driver.constructor.name }}
          </Link>
        </div>

        <div class="mt-6">
          <p class="text-base text-gray-700" v-html="driver.bio"></p>
        </div>
      </div>
    </div>

    <div class="bg-white my-8 mx-8 pt-8 pb-4 md:px-8 rounded">
      <h1 class="text-3xl font-extrabold tracking-tight text-center text-orange-600">
        Results
      </h1>
      <ResultsTable :franchise="franchise" :results="results" />
    </div>
  </main>
</template>

<script setup>
  import ResultsTable from '@/Components/Lists/ResultsTable'

  defineProps({
    franchise: Object,
    driver: Object,
    results: Array,
  })
</script>