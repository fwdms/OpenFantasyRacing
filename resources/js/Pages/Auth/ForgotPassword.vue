<template>
    <Head title="Forgot Password" />
    <div class="min-h-full flex">
        <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div class="mx-auto w-full max-w-sm lg:w-96">
                <div>
                    <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
                        Forgot Password
                    </h2>
                </div>
                <div class="mt-8">
                    <div class="mt-6">
                        <div class="mb-4 text-sm text-gray-600">
                            Forgot your password? No problem. Just let us know your email
                            address and we will email you a password reset link that will allow
                            you to choose a new one.
                        </div>

                        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                            {{ status }}
                        </div>

                        <BreezeValidationErrors class="mb-4" />

                        <form @submit.prevent="submit">
                            <div>
                                <BreezeLabel for="email" value="Email" />
                                <BreezeInput
                                    id="email"
                                    type="email"
                                    class="mt-1 block w-full"
                                    v-model="form.email"
                                    required
                                    autofocus
                                    autocomplete="username"
                                />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <BreezeButton
                                    :class="{ 'opacity-25': form.processing }"
                                    :disabled="form.processing"
                                >
                                    Email Password Reset Link
                                </BreezeButton>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden lg:block relative w-0 flex-1">
            <img
                class="absolute inset-0 h-full w-full object-cover"
                src="https://images.unsplash.com/photo-1560692830-04adc2f31119?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3270&q=80"
                alt="Photo by Max Böttinger on Unsplash"
            />
        </div>
    </div>
</template>

<script>
    import FullScreen from "@/Layouts/FullScreen";

    export default {
        layout: FullScreen,
    };
</script>

<script setup>
    import BreezeButton from "@/Components/Forms/Button";
    import BreezeInput from "@/Components/Forms/Input";
    import BreezeLabel from "@/Components/Forms/Label";
    import BreezeValidationErrors from "@/Components/Forms/ValidationErrors";

    import { useForm } from "@inertiajs/inertia-vue3";

    defineProps({
        status: String,
    });

    const form = useForm({
        email: "",
    });

    const submit = () => {
        form.post(route("password.email"));
    };
</script>
