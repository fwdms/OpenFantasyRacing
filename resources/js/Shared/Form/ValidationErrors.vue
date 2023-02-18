<template>
    <div v-if="hasErrors">
        <div class="font-medium text-red-600">
            Whoops! Something went wrong.
        </div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            <li v-for="(error, key) in errors" :key="key">{{ error }}</li>
        </ul>
    </div>
</template>

<script>
    import { usePage } from '@inertiajs/inertia-vue3';

    export default {
        data() {
            return {
                computed :{
                    hasErrors() {
                        return Object.keys(errors.value).length > 0
                    }, 
                    errors() {
                        return usePage().props.value.errors
                    }
                }
            }
        }
    }
</script>