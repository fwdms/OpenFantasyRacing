<template>
  <Head :title='team.team_name' />

  <PageHeader :title='team.team_name' />

  <div class='bg-white my-8 mx-8 py-2 rounded-lg'>
    <h1 class='text-3xl my-2 font-extrabold tracking-tight text-center text-orange-600'>
      Drivers
    </h1>

    <DriversGridList :franchise='league.franchise' :drivers='drivers' />
  </div>
</template>

<script setup>
  import PageHeader from '@/Components/PageHeadings/PageHeader.vue'
  import DriversGridList from '@/Components/Lists/DriversGridList.vue'

  defineProps({
    league: Object,
    team: Object,
    drivers: Array
  })
</script>