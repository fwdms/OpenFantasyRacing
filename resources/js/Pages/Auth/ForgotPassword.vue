<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <Head title="Forgot Password" />

        <div class="mb-4 text-sm text-gray-600">
            Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
        </div>

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <BreezeValidationErrors class="mb-4" />

        <form @submit.prevent="submit">
            <div>
                <BreezeLabel for="email" value="Email" />
                <BreezeInput id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <BreezeButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Email Password Reset Link
                </BreezeButton>
            </div>
        </form>
    </div>
</template>

<script>
  import FullScreen from '@/Layouts/FullScreen'
  
  export default {
    layout: FullScreen
  }
</script>

<script setup>
import BreezeButton from '@/Components/Forms/Button'
import BreezeInput from '@/Components/Forms/Input'
import BreezeLabel from '@/Components/Forms/Label'
import BreezeValidationErrors from '@/Components/Forms/ValidationErrors'

import { useForm } from '@inertiajs/inertia-vue3'

defineProps({
    status: String,
});

const form = useForm({
    email: '',
});

const submit = () => {
    form.post(route('password.email'));
};
</script>
