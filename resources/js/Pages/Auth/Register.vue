<template>
    <Head title="Register" />

    <div class="min-h-full flex">

    <BreezeValidationErrors class="mb-4" />

    <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
      <div class="mx-auto w-full max-w-sm lg:w-96">
        <div>
          <h2 class="mt-6 text-3xl font-extrabold text-gray-900">Register for your new account</h2>
        </div>

        <div class="mt-8">
          <div class="mt-6">
            <form @submit.prevent="submit">
                <div>
                    <BreezeLabel for="first_name" value="First Name" />
                    <BreezeInput id="first_name" type="text" class="mt-1 block w-full" v-model="form.first_name" required autofocus autocomplete="first_name" />
                </div>

                <div class="mt-4">
                    <BreezeLabel for="last_name" value="Last Name" />
                    <BreezeInput id="last_name" type="text" class="mt-1 block w-full" v-model="form.last_name" required autocomplete="last_name" />
                </div>

                <div class="mt-4">
                    <BreezeLabel for="email" value="Email" />
                    <BreezeInput id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autocomplete="username" />
                </div>

                <div class="mt-4">
                    <BreezeLabel for="password" value="Password" />
                    <BreezeInput id="password" type="password" class="mt-1 block w-full" v-model="form.password" required autocomplete="new-password" />
                </div>

                <div class="mt-4">
                    <BreezeLabel for="password_confirmation" value="Confirm Password" />
                    <BreezeInput id="password_confirmation" type="password" class="mt-1 block w-full" v-model="form.password_confirmation" required autocomplete="new-password" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <Link :href="route('login')" class="underline text-sm text-gray-600 hover:text-gray-900">
                        Already registered?
                    </Link>

                    <BreezeButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Register
                    </BreezeButton>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="hidden lg:block relative w-0 flex-1">
      <img class="absolute inset-0 h-full w-full object-cover" 
        src="https://images.unsplash.com/photo-1485906441524-ed91f8315b4a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" 
        alt="Photo by Jp Valery on Unsplash" 
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
import BreezeButton from '@/Components/Form/Button.vue'
import BreezeInput from '@/Components/Form/Input.vue'
import BreezeLabel from '@/Components/Form/Label.vue';
import BreezeValidationErrors from '@/Components/Form/ValidationErrors.vue'

import { useForm } from '@inertiajs/inertia-vue3'

const form = useForm({
    first_name: '',
    last_name: '',
    email: '',
    password: '',
    password_confirmation: '',
    terms: false,
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>
