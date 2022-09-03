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
        label='Start Pos'
        type='number'
        v-model='fields.startingPos'
      />
      
      <Input
        id='finish_pos'
        label='Finish Pos'
        type='number'
        v-model='fields.finishPos'
      />
      
      <Input
        id='points_earned'
        label='Points Earned'
        type='number'
        v-model='fields.pointsEarned'
      />
    </div>
    
    <div class='flex flex-wrap'>
      <Toggle
        label='DNF'
        v-model='fields.dnf'
      />
      
      <Button v-if='props.fields === undefined' @click.prevent='submitForm()'>
        Save
      </Button>
      <Button v-else @click.prevent='updateResult()'>
        Update
      </Button>
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
    resultID: Number,
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
  
  const keys = ['first_name', 'last_name']
  
  onBeforeMount(() => {
    if (props.fields !== undefined) {
      fields.value.startingPos = props.fields.starting_pos
      fields.value.finishPos = props.fields.finish_pos
      fields.value.dnf = props.fields.DNF === 1
      fields.value.pointsEarned = props.fields.points_for_race
      fields.value.driver = props.fields.driver
    }
  })
  
  function submitForm() {
    axios.post(route('admin.results.store'), {
      driver_id: fields.value.driver.id,
      event_id: props.event.id,
      starting_pos: fields.value.startingPos,
      finish_pos: fields.value.finishPos,
      points_earned: fields.value.pointsEarned,
      DNF: fields.value.dnf
    })
      .then(res => {
        emit('submitForm')
      })
  }
  
  function updateResult() {
    axios.put(route('admin.results.update', { result: props.resultID }), {
      event_id: props.event.id,
      driver_id: fields.value.driver.id,
      starting_pos: fields.value.startingPos,
      finish_pos: fields.value.finishPos,
      points_for_race: fields.value.pointsEarned,
      DNF: fields.value.dnf
    })
      .then(res => {
        emit('submitForm')
      })
  }
</script>
