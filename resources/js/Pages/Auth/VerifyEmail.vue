<template>
  <Header title="Email Verification" />

  <div
    class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0"
  >
    <div class="mb-4 text-sm text-gray-600">
      Thanks for signing up! Before getting started, could you verify your email
      address by clicking on the link we just emailed to you? If you didn't
      receive the email, we will gladly send you another.
    </div>

    <div
      class="mb-4 text-sm font-medium text-green-600"
      v-if="verificationLinkSent"
    >
      A new verification link has been sent to the email address you provided
      during registration.
    </div>

    <form @submit.prevent="submit">
      <div class="flex items-center justify-between mt-4">
        <BreezeButton
          :class="{ 'opacity-25': form.processing }"
          :disabled="form.processing"
        >
          Resend Verification Email
        </BreezeButton>

        <Link
          :href="route('logout')"
          method="post"
          as="button"
          class="text-sm text-gray-600 underline hover:text-gray-900"
          >Log Out
        </Link>
      </div>
    </form>
  </div>
</template>

<script setup>
  import { computed } from 'vue'
  import BreezeButton from '@/Shared/Form/Button.vue'
  import { useForm } from '@inertiajs/vue3'

  const props = defineProps({
    status: String,
  })

  const form = useForm()

  const submit = () => {
    form.post(route('verification.send'))
  }

  const verificationLinkSent = computed(
    () => props.status === 'verification-link-sent'
  )
</script>
