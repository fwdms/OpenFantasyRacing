<template>
  <form
      class="mx-8 my-8 text-center"
      @submit.prevent="submit"
  >
    <div class="flex flex-wrap justify-center items-start mt-4">
      <Input
          label="Track Name"
          v-model="form.name"
          :errors="form.errors.name"
          required
      />

      <Input
          label="Track Location"
          v-model="form.location"
          :errors="form.errors.location"
          required
      />

      <Input
          label="Number of Turns"
          v-model="form.number_of_turns"
          type="number"
          :errors="form.errors.number_of_turns"
          required
      />
    </div>

    <div class="text-center">
      <Button
      >
        Submit
      </Button>
    </div>
  </form>
</template>

<script setup>
import {useForm} from '@inertiajs/inertia-vue3'
import Input from '@/Shared/Form/Input.vue'
import Button from '@/Shared/Form/Button.vue'

const form = useForm({
  'name': '',
  'location': '',
  'number_of_turns': ''
})

function submit() {
  form.post(route('admin.tracks.store'))
}
</script>
