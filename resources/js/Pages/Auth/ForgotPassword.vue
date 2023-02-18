<template>
  <Header title="Forgot Password" />

  <div class="flex min-h-full">
    <div
      class="flex flex-col justify-center flex-1 px-4 py-12 sm:px-6 lg:flex-none lg:px-20 xl:px-24"
    >
      <div class="w-full max-w-sm mx-auto lg:w-96">
        <div>
          <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
            Forgot Password
          </h2>
        </div>
        <div class="mt-8">
          <div class="mt-6">
            <div class="mb-4 text-sm text-gray-600">
              Forgot your password? No problem. Just let us know your email
              address and we will email you a password reset link that will
              allow you to choose a new one.
            </div>

            <div
              v-if="status"
              class="mb-4 text-sm font-medium text-green-600"
            >
              {{ status }}
            </div>

            <BreezeValidationErrors class="mb-4" />

            <Input
              id="email"
              type="email"
              label="Email"
              placeholder="email@email.com"
              v-model="form.email"
              :required="true"
              autofocus
              autocomplete="username"
            />

            <div class="flex items-center justify-end mt-4">
              <Button
                :class="{ 'opacity-25': form.processing }"
                :disabled="form.processing"
                @click="submit"
              >
                Email Password Reset Link
              </Button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="relative flex-1 hidden w-0 lg:block">
      <img
        class="absolute inset-0 object-cover w-full h-full"
        src="https://images.unsplash.com/photo-1560692830-04adc2f31119?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3270&q=80"
        alt="Photo by Max Böttinger on Unsplash"
      />
    </div>
  </div>
</template>

<script>
  import FullScreen from '@/Layouts/FullScreen.vue'

  export default {
    layout: FullScreen,
  }
</script>

<script setup>
  import Button from '@/Shared/Form/Button.vue'
  import Input from '@/Shared/Form/Input.vue'
  import BreezeValidationErrors from '@/Shared/Form/ValidationErrors.vue'

  import { useForm } from '@inertiajs/vue3'

  defineProps({
    status: String,
  })

  const form = useForm({
    email: '',
  })

  function submit() {
    form.post(route('password.email'))
  }
</script>
