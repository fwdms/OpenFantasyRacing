<template>
  <Header :title="driver.first_name + ' ' + driver.last_name" />
  
  <div class='flex flex-wrap bg-white mx-8 py-8 px-8 rounded my-8'>
    <img class='max-w-md w-full mx-auto object-center object-cover rounded'
         :src="driver.profile_image ? driver.profile_image : '/assets/missingprofle.webp'"
         :alt="driver.first_name + ' ' + driver.last_name"
    />
    
    <div class='mx-auto mt-8 xl:mt-0 xl:w-4/6'>
      <h1 class='text-3xl font-extrabold tracking-tight text-gray-900 text-center xl:text-left'>
        {{ driver.first_name + ' ' + driver.last_name }}
        
        <span class='text-orange-600 text-2xl'>
          {{ driver.number }}
        </span>
      </h1>
      
      <div class='mt-3 text-center xl:text-left'>
        <Link :href="route('constructor.show', { franchise: franchise.slug, slug: driver.constructor.slug })"
              class='text-3xl text-orange-600'
        >
          {{ driver.constructor.name }}
        </Link>
      </div>
      <p class='mt-6'> Total Points : {{ points }}</p>
      
      <div class='mt-6'>
        <p class='text-base text-gray-700' v-html='driver.bio'></p>
      </div>
    </div>
  </div>
  
  <Table title='' :headers='headers'>
    <tr v-for='result in results' :key='result.id'>
      <td class='whitespace-nowrap py-4 w-96 pl-4 pr-3 text-center text-sm font-medium text-gray-900 sm:pl-6'>
        {{ result.round_number }}
      </td>
      <td class='whitespace-nowrap py-4 w-96 pl-4 pr-3 text-center text-sm font-medium text-gray-900 sm:pl-6'>
        <Link :href="route('event.show', { franchise: franchise.slug, race: result.race_id })"
              class='text-orange-600'
        >
          {{ result.name }}
        </Link>
      </td>
      <td class='whitespace-nowrap py-4 w-96 pl-4 pr-3 text-center text-sm font-medium text-gray-900 sm:pl-6'>
        {{ result.track_name }}
      </td>
      <td class='whitespace-nowrap py-4 w-96 pl-4 pr-3 text-center text-sm font-medium text-gray-900 sm:pl-6'>
        {{ result.track_location }}
      </td>
      <td class='whitespace-nowrap px-3 w-96 py-4 text-center text-sm text-gray-500'>
        {{ result.starting_pos }}
      </td>
      <td class='whitespace-nowrap px-3 py-4 text-sm text-center text-gray-500'>
        {{ result.finish_pos }}
      </td>
      <td class='whitespace-nowrap px-3 py-4 text-sm text-center text-gray-500'>
        <span v-if='result.DNF'>DNF</span>
      </td>
      <td class='whitespace-nowrap px-3 py-4 text-sm text-center text-gray-500'>
        {{ result.points_for_race }}
      </td>
    </tr>
  </Table>

</template>

<script setup>
  import Table from '@/Components/Tables/Table.vue'
  
  defineProps({
    driver: Object,
    franchise: Object,
    points: String,
    results: Array
  })
  
  const headers = [
    'Round',
    'Event',
    'Track Name',
    'Track Location',
    'Started',
    'Finished',
    'DNF',
    'Points'
  ]
</script>