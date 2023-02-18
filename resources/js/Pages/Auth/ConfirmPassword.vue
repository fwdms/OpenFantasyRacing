<template>
  <div class="flex flex-col items-center sm:justify-center">
    <Header title="Confirm Password" />

    <div class="mb-4 text-sm text-gray-600">
      This is a secure area of the application. Please confirm your password
      before continuing.
    </div>

    <ValidationErrors class="mb-4" />

    <form @submit.prevent="submit">
      <div>
        <Label
          for="password"
          value="Password"
        />
        <Input
          id="password"
          type="password"
          class="block w-full mt-1"
          v-model="form.password"
          required
          autocomplete="current-password"
          autofocus
        />
      </div>

      <div class="flex justify-end mt-4">
        <Button
          class="ml-4"
          :class="{ 'opacity-25': form.processing }"
          :disabled="form.processing"
        >
          Confirm
        </Button>
      </div>
    </form>
  </div>
</template>

<script setup>
  import Button from '@/Shared/Form/Button.vue'
  import Input from '@/Shared/Form/Input.vue'
  import Label from '@/Shared/Form/Label.vue'
  import ValidationErrors from '@/Shared/Form/ValidationErrors.vue'
  
  import { useForm } from '@inertiajs/vue3'

  const form = useForm({
    password: '',
  })

  const submit = () => {
    form.post(route('password.confirm'), {
      onFinish: () => form.reset(),
    })
  }
</script>
