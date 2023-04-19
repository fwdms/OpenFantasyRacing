<template>
  <Header title="Register" />

  <div class="flex min-h-full">
    <BreezeValidationErrors class="mb-4" />

    <div
      class="flex flex-col justify-center flex-1 px-4 py-12 sm:px-6 lg:flex-none lg:px-20 xl:px-24"
    >
      <div class="w-full max-w-sm mx-auto lg:w-96">
        <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
          Register for your new account
        </h2>

        <div class="mt-6">
          <form @submit.prevent="submit">
            <Input
              label="First Name"
              id="first_name"
              type="text"
              class="block w-full mt-1"
              v-model="form.first_name"
              required
              autofocus
              autocomplete="first_name"
            />

            <Input
              label="Last Name"
              id="last_name"
              class="block w-full mt-1"
              v-model="form.last_name"
              required
              autocomplete="last_name"
            />

            <Input
              label="Email"
              id="email"
              type="email"
              class="block w-full mt-1"
              v-model="form.email"
              required
              autocomplete="username"
            />

            <Input
              label="Password"
              id="password"
              type="password"
              class="block w-full mt-1"
              v-model="form.password"
              required
              autocomplete="new-password"
            />

            <Input
              label="Confirm Password"
              id="password_confirmation"
              type="password"
              class="block w-full mt-1"
              v-model="form.password_confirmation"
              required
              autocomplete="new-password"
            />

            <div class="flex items-center justify-end mt-4">
              <Link
                :href="route('login')"
                class="text-sm text-gray-600 underline hover:text-gray-900"
              >
                Already registered?
              </Link>

              <Button
                :class="{ 'opacity-25': form.processing }"
                :disabled="form.processing"
              >
                Register
              </Button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="relative flex-1 hidden w-0 lg:block">
      <img
        class="absolute inset-0 object-cover w-full h-full"
        src="https://images.unsplash.com/photo-1485906441524-ed91f8315b4a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
        alt="Photo by Jp Valery on Unsplash"
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

  const form = useForm({
    first_name: '',
    last_name: '',
    email: '',
    password: '',
    password_confirmation: '',
    terms: false,
  })

  const submit = () => {
    form.post(route('register'), {
      onFinish: () => form.reset('password', 'password_confirmation'),
    })
  }
</script>
