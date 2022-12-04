<template>
  <div class="flex flex-wrap justify-center items-start mt-4">
    <Input
        label="Name"
        v-model="form.first_name"
        :errors="form.errors.first_name"
        required
    />

    <Input
        label="Round Number"
        v-model="form.first_name"
        :errors="form.errors.first_name"
        required
    />

    <Input
        label="Date of Event"
        v-model="form.first_name"
        :errors="form.errors.first_name"
        required
    />

    <SelectMenu
        label="Franchise"
        :options="franchises"
        v-model="form.franchise"
        @change="getConstructors()"
    />

    <Combobox
        label="Track"
        :options="props.tracks"
        v-model="form.track"
    />

    <SelectMenu
        label="Event Type"
        v-model="form.is_rookie"
        :options="options"
    />
  </div>

  <div class="flex flex-wrap justify-center items-center">
    <Button
        v-if="props.driver"
        @click="updateDriver()"
    >
      Update
    </Button>

    <Button
        v-else
        @click="saveDriver()"
    >
      Save
    </Button>
  </div>
</template>

<script setup>
import {useForm} from '@inertiajs/inertia-vue3'
import Input from '@/Shared/Form/Input.vue'
import Button from '@/Shared/Form/Button.vue'
import SelectMenu from '@/Shared/Form/SelectMenu.vue'
import Combobox from "@/Shared/Form/Combobox.vue";

const props = defineProps([
  'franchises',
  'tracks'
])

const form = useForm({
  id: props.driver?.id ?? '',
  franchise: props.driver?.constructor.franchise ?? {},
  track: {}
})

const options = [
  {name: 'Standard'},
  {name: 'Sprint'},
  {name: 'Qualifying'}
]

function submit() {
  form.post(route('admin.driver.store'), {
    onSuccess: () => form.reset(),
  })

  form.put(route('admin.driver.update', {driver: form.id}))
}
</script>
