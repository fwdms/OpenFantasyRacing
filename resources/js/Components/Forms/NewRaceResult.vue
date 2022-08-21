<template>
  <form class="flex flex-wrap justify-between items-center my-4 mx-4">
    <div class="flex flex-wrap items-center">
      <SelectMenu
        v-if="drivers.length > 0"
        label="Driver"
        :options="drivers"
        @selected="driverSelected"
      />

      <Input
        id="starting_pos"
        label="Start Pos"
        :value="startingPos"
        :placeholder="startingPos"
        @updated="updateStartPos"
      />

      <Input
        id="finish_pos"
        label="Finish Pos"
        :placeholder="finishPos"
        :value="finishPos"
        @updated="updateFinishPos"
      />

      <Input
        id="points_earned"
        label="Points Earned"
        :value="pointsEarned"
        :placeholder="pointsEarned"
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

  const startingPos = ref(0)
  const finishPos = ref(0)
  const pointsEarned = ref(0)
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
