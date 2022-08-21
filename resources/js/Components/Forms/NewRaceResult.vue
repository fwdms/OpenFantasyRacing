<template>
  <form class="flex flex-wrap justify-between items-center my-4 mx-4">
    <div class="flex flex-wrap items-center">
      <SelectMenu
        label="Driver"
        :options="drivers"
        @selected="driverSelected"
      />

      <Input
        id="starting_pos"
        label="Start Pos"
        v-model="startingPos"
        @updated="updateStartPos"
      />

      <Input
        id="finish_pos"
        label="Finish Pos"
        @updated="updateFinishPos"
      />

      <Input
        id="points_earned"
        label="Points Earned"
        @updated="updatePointsEarned"
      />
    </div>

    <div class="flex flex-wrap">
      <Toggle
        id="starting_pos"
        label="DNF"
        @changed="updateDNF"
      />

      <Button @click.prevent="submitForm()"> Save </Button>
    </div>
  </form>
</template>

<script setup>
  import { ref } from 'vue'
  import axios from 'axios'
  import SelectMenu from '@/Components/Form/SelectMenu.vue'
  import Input from '@/Components/Form/Input.vue'
  import Toggle from '@/Components/Form/Toggle.vue'
  import Button from '@/Components/Form/Button.vue'

  const props = defineProps({
    drivers: Array,
    event: Object,
  })

  const emit = defineEmits(['submitForm'])

  const startingPos = ref()
  const finishPos = ref()
  const pointsEarned = ref()
  const dnf = ref(false)
  const driver = ref({})

  function driverSelected(selected) {
    driver.value = selected
  }

  function updateStartPos(value) {
    startingPos.value = value
  }

  function updateFinishPos(value) {
    finishPos.value = value
  }

  function updatePointsEarned(value) {
    pointsEarned.value = value
  }

  function updateDNF(value) {
    dnf.value = value
  }

  function submitForm() {
    axios
      .post(route('result.store'), {
        driver_id: driver.value.id,
        event_id: props.event.id,
        startingPos: startingPos.value,
        finishPos: finishPos.value,
        pointsEarned: pointsEarned.value,
        dnf: dnf.value,
      })
      .then(res => {
        emit('submitForm')
      })
  }
</script>
