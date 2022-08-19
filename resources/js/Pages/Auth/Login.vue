<template>
  <Head title="Log in" />
  <div class="h-screen flex">
    <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
      <div class="mx-auto w-full max-w-sm lg:w-96">
        <div>
          <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
            Log in to your account
          </h2>
        </div>
        <div class="mt-8">
          <div class="mt-6">
            <form @submit.prevent="submit" class="space-y-6">
              <div>
                <label for="email" class="block text-sm font-medium text-gray-700"> Email address </label>
                <div class="mt-1">
                  <input v-model="form.email" id="email" 
                    name="email" 
                    type="email" 
                    autocomplete="email" 
                    required="" 
                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm" 
                  />
                </div>
              </div>

              <div class="space-y-1">
                <label for="password" class="block text-sm font-medium text-gray-700"> Password </label>
                <div class="mt-1">
                  <input v-model="form.password" id="password" name="password" type="password" autocomplete="current-password" required="" 
                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm" 
                  />
                </div>
              </div>

              <div class="flex items-center justify-between">
                <div class="flex items-center">
                  <input v-model="form.remember" id="remember" name="remember" type="checkbox" class="h-4 w-4 text-orange-600 focus:ring-orange-500 border-orange-300 rounded" />
                  <label for="remember" class="ml-2 block text-sm text-gray-900">
                    Remember me
                  </label>
                </div>

                <div class="text-sm">
                  <Link href="/forgot-password" class="font-medium text-gray-600 hover:text-orange-500">
                    Forgot your password?
                  </Link>
                </div>
              </div>

              <Alert v-if="form.errors.email" :errors="errors.email"/>

              <div>
                <button type="submit" 
                  class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-orange-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                  Sign in
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="hidden lg:block relative w-0 flex-1">
      <img class="absolute inset-0 h-full w-full object-cover" 
        src="https://images.unsplash.com/photo-1547025603-ef800f02690e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3600&q=80" 
        alt="Photo by toine G on Unsplash" 
      />
    </div>
  </div>
</template>

<script>
  import FullScreen from '@/Layouts/FullScreen.vue'
  
  export default {
    layout: FullScreen
  }
</script>

<script setup>
  import { useForm } from '@inertiajs/inertia-vue3'
  import Alert from '../../Components/Feedback/Alert.vue'

  defineProps({
      canResetPassword: Boolean,
      status: String,
      errors: Object,
  });

  const form = useForm({
      email: '',
      password: '',
      remember: false
  });

  const submit = () => {
      form.post(route('login'), {
          onFinish: () => form.reset('password'),
      });
  };
</script>