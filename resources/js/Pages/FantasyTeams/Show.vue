<template>
  <Head :title="team.team_name" />

  <PageHeader :title="team.team_name"/>

  <div class="bg-white my-8 mx-8 py-2 rounded-lg">
    <h1 class="text-3xl my-2 font-extrabold tracking-tight text-center text-orange-600">
      Drivers
    </h1>

    <p v-if="description" class="text-center">
      {{ description }}
    </p>

    <DriversGridList :franchise="team.league.franchise" :drivers="drivers" />

  </div>
</template>

<script setup>
  import PageHeader from '@/Components/PageHeadings/PageHeader.vue'
  import DriversGridList from '@/Components/Lists/DriversGridList.vue'

  defineProps({
    team: Object,
    drivers: Array
  })
</script>