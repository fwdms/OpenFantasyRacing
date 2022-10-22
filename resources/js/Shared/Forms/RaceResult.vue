<template>
  <form class="flex flex-wrap justify-between items-center my-4 mx-4">
    <div class="flex flex-wrap items-center">
      <Combobox
        v-if="drivers.length > 0"
        label="Driver"
        :options="drivers"
        :keys="keys"
        v-model="fields.driver"
      />

      <Input
        label="Start Pos"
        type="number"
        v-model="fields.startingPos"
      />

      <Input
        id="finish_pos"
        label="Finish Pos"
        type="number"
        v-model="fields.finishPos"
      />

      <Toggle
        label="Fastest Lap"
        v-model="fields.fastestLap"
      />

      <Toggle
        label="DNF"
        v-model="fields.dnf"
      />
    </div>

    <Button
      v-if="props.fields === undefined"
      @click.prevent="submitForm()"
    >
      Save
    </Button>

    <Button
      v-else
      @click.prevent="updateResult()"
    >
      Update
    </Button>
  </form>
</template>

<script setup>
  import { ref, onBeforeMount } from 'vue'
  import axios from 'axios'
  import Combobox from '@/Shared/Form/Combobox.vue'
  import Input from '@/Shared/Form/Input.vue'
  import Toggle from '@/Shared/Form/Toggle.vue'
  import Button from '@/Shared/Form/Button.vue'

  const props = defineProps({
    drivers: Array,
    event: Object,
    resultID: Number,
    fields: Object,
  })

  const fields = ref({
    startingPos: 1,
    finishPos: 0,
    dnf: false,
    fastestLap: false,
    driver: {},
  })

  const emit = defineEmits(['submitForm'])

  const keys = ['first_name', 'last_name']

  onBeforeMount(() => {
    if (props.fields !== undefined) {
      fields.value.startingPos = props.fields.starting_pos
      fields.value.finishPos = props.fields.finish_pos
      fields.value.dnf = props.fields.DNF === 1
      fields.value.pointsEarned = props.fields.points_for_race
      fields.value.fastestLap = props.fields.fastest_lap
      fields.value.driver = props.fields.driver
    }
  })

  function submitForm() {
    axios
      .post(route('admin.results.store'), {
        driver_id: fields.value.driver.id,
        event_id: props.event.id,
        starting_pos: fields.value.startingPos,
        finish_pos: fields.value.finishPos,
        fastest_lap: fields.value.fastestLap,
        DNF: fields.value.dnf,
      })
      .then(() => {
        emit('submitForm')
        fields.value.startingPos++
        fields.value.driver = {}
      })
  }

  function updateResult() {
    axios
      .put(route('admin.results.update', { result: props.resultID }), {
        event_id: props.event.id,
        driver_id: fields.value.driver.id,
        starting_pos: fields.value.startingPos,
        finish_pos: fields.value.finishPos,
        fastest_lap: fields.value.fastestLap,
        DNF: fields.value.dnf,
      })
      .then(res => {
        emit('submitForm')
      })
  }
</script>
