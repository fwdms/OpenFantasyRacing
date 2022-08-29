<template>
  <form class='flex flex-wrap justify-between items-center my-4 mx-4'>
    <div class='flex flex-wrap items-center'>
      <Combobox
        v-if='drivers.length > 0'
        label='Driver'
        :options='drivers'
        :keys='keys'
        v-model='fields.driver'
      />
      
      <Input
        id='starting_pos'
        label='Start Pos'
        type='number'
        :value='fields.startingPos'
      />
      
      <Input
        id='finish_pos'
        label='Finish Pos'
        type='number'
        :value='fields.finishPos'
      />
      
      <Input
        id='points_earned'
        label='Points Earned'
        type='number'
        :value='fields.pointsEarned'
      />
    </div>
    
    <div class='flex flex-wrap'>
      <Toggle
        id='starting_pos'
        label='DNF'
        :enabled='fields.dnf'
      />
      
      <Button @click.prevent='submitForm()'> Save</Button>
    </div>
  </form>
</template>

<script setup>
  import { ref, onBeforeMount } from 'vue'
  import axios from 'axios'
  import Combobox from '@/Components/Form/Combobox.vue'
  import Input from '@/Components/Form/Input.vue'
  import Toggle from '@/Components/Form/Toggle.vue'
  import Button from '@/Components/Form/Button.vue'
  
  const props = defineProps({
    drivers: Array,
    event: Object,
    fields: Object
  })
  
  const fields = ref({
    startingPos: 0,
    finishPos: 0,
    dnf: false,
    pointsEarned: 0,
    driver: {}
  })
  
  const emit = defineEmits(['submitForm'])
  
  const pointsEarned = ref(0)
  
  const keys = ['first_name', 'last_name']
  
  onBeforeMount(() => {
    if (props.fields !== undefined) {
      fields.value.startingPos = props.fields.starting_pos
      fields.value.finishPos = props.fields.finish_pos
      fields.value.dnf = props.fields.DNF === 1
      fields.value.driver = props.fields.driver
    }
  })
  
  function driverSelected(selected) {
    fields.value.driver = selected
  }
  
  function submitForm() {
    axios.post(route('result.store'), {
      driver_id: driver.value.id,
      event_id: props.event.id,
      startingPos: startingPos.value,
      finishPos: finishPos.value,
      pointsEarned: pointsEarned.value,
      dnf: dnf.value
    })
      .then(res => {
        emit('submitForm')
      })
  }
</script>
