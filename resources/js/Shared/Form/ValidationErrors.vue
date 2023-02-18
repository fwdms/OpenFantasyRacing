<template>
    <div v-if="hasErrors">
        <div class="font-medium text-red-600">
            Whoops! Something went wrong.
        </div>

        <ul class="mt-3 text-sm text-red-600 list-disc list-inside">
            <li v-for="(error, key) in errors" :key="key">{{ error }}</li>
        </ul>
    </div>
</template>

<script>
    import { usePage } from '@inertiajs/vue3'

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