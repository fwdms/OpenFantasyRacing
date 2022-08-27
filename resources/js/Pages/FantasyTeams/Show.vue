<template>
  <Header :title='team.team_name' />
  
  <PageHeader :title='team.team_name' />
  
  <div class='my-6'>
    <h1 class='text-3xl my-2 font-extrabold tracking-tight text-center text-orange-600'>
      Drivers
    </h1>
    
    <Button class='right-2'>
      Add Driver
    </Button>
    
    <DriversGridList :franchise='league.franchise' :drivers='drivers' />
  </div>


</template>

<script setup>
  import PageHeader from '@/Components/PageHeadings/PageHeader.vue'
  import DriversGridList from '@/Components/Lists/DriversGridList.vue'
  import Button from '@/Components/Form/Button.vue'
  
  defineProps({
    league: Object,
    team: Object,
    drivers: Array
  })
</script>