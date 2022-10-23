<template>
    <form 
        class="mx-8 my-8" 
        @submit.prevent="submit"
    >
        <div class="flex flex-wrap items-start justify-center">
            <Input 
                label="Franchise Name" 
                class="w-96"
                v-model="form.name"
                required
                :errors="form.errors.name"
            />
            
            <Input 
                label="Franchise Slug" 
                class="w-96"
                v-model="form.slug"
                required
                :errors="form.errors.slug"
            />
            
            <Input 
                label="Governing Body" 
                class="w-96"
                v-model="form.governing_body"
                :errors="form.errors.governing_body"
            />
        </div>
       
       <div class="text-center">
            <Button
                @click="submit()"
            >
                Submit
            </Button>
       </div>


    </form>
</template>

<script setup>
    import { useForm } from '@inertiajs/inertia-vue3'
    import Input from '@/Shared/Form/Input.vue'
    import Button from '@/Shared/Form/Button.vue';
    
    const form = useForm({
        name: '',
        slug: '',
        governing_body: ''
    })
    
    const submit = () => {
        form.post(route('admin.franchise.store'), {
            onFinish: () => form.reset(),
        })
    }
</script>
