<template>
  <Header title="Reset Password" />

  <BreezeValidationErrors class="mb-4" />

  <div class="flex min-h-full">
    <div
      class="flex flex-col justify-center flex-1 px-4 py-12 sm:px-6 lg:flex-none lg:px-20 xl:px-24"
    >
      <div class="w-full max-w-sm mx-auto lg:w-96">
        <div>
          <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
            Password Reset
          </h2>
        </div>

        <div class="mt-8">
          <div class="mt-6">
            <form @submit.prevent="submit">
              <div>
                <BreezeLabel
                  for="email"
                  value="Email"
                />
                <BreezeInput
                  id="email"
                  type="email"
                  class="block w-full mt-1"
                  v-model="form.email"
                  required
                  autofocus
                  autocomplete="username"
                />
              </div>

              <div class="mt-4">
                <BreezeLabel
                  for="password"
                  value="Password"
                />
                <BreezeInput
                  id="password"
                  type="password"
                  class="block w-full mt-1"
                  v-model="form.password"
                  required
                  autocomplete="new-password"
                />
              </div>

              <div class="mt-4">
                <BreezeLabel
                  for="password_confirmation"
                  value="Confirm Password"
                />
                <BreezeInput
                  id="password_confirmation"
                  type="password"
                  class="block w-full mt-1"
                  v-model="form.password_confirmation"
                  required
                  autocomplete="new-password"
                />
              </div>

              <div class="flex items-center justify-end mt-4">
                <BreezeButton
                  :class="{ 'opacity-25': form.processing }"
                  :disabled="form.processing"
                >
                  Reset Password
                </BreezeButton>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="relative flex-1 hidden w-0 lg:block">
      <img
        class="absolute inset-0 object-cover w-full h-full"
        src="https://images.unsplash.com/photo-1503221507150-dcb5a13416ca?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3270&q=80"
        alt=""
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
  import BreezeButton from '@/Shared/Form/Button.vue'
  import BreezeInput from '@/Shared/Form/Input.vue'
  import BreezeLabel from '@/Shared/Form/Label.vue'
  import BreezeValidationErrors from '@/Shared/Form/ValidationErrors.vue'

  import { useForm } from '@inertiajs/vue3'

  const props = defineProps({
    email: String,
    token: String,
  })

  const form = useForm({
    token: props.token,
    email: props.email,
    password: '',
    password_confirmation: '',
  })

  const submit = () => {
    form.post(route('password.update'), {
      onFinish: () => form.reset('password', 'password_confirmation'),
    })
  }
</script>
