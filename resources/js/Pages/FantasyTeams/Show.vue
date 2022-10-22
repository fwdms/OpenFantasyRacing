<template>
  <Header :title="team.team_name" />

  <PageHeader :title="team.team_name" />

  <div class="my-6">
    <h1
      class="text-3xl my-2 font-extrabold tracking-tight text-center text-orange-600"
    >
      Drivers
    </h1>

    <Button class="right-2"> Add Driver </Button>

    <DriversGridList
      :franchise="league.franchise"
      :drivers="drivers"
    />
  </div>
</template>

<script setup>
  import PageHeader from '@/Shared/PageHeadings/PageHeader.vue'
  import DriversGridList from '@/Shared/Lists/DriversGridList.vue'
  import Button from '@/Shared/Form/Button.vue'

  defineProps({
    league: Object,
    team: Object,
    points: String,
    drivers: Array,
  })
</script>
