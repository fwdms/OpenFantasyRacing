<script setup>
    import {useForm} from '@inertiajs/inertia-vue3'
    import Input from '@/Shared/Form/Input.vue'
    import SelectMenu from '@/Shared/Form/SelectMenu.vue'
    import Button from '@/Shared/Form/Button.vue'
    import Combobox from '@/Shared/Form/Combobox.vue'

    const props = defineProps([
        'franchises',
        'tracks',
        'event'
    ])

    const form = useForm({
        franchise: props.event?.franchise ?? {},
        name: props.event?.name ?? '',
        short_name: props.event?.short_name ?? '',
        slug: props.event?.slug ?? '',
        track: props.event?.track_id ?? {} 
    })

    function submit() {
        if (props.team !== undefined) {
            form.put(route('admin.constructor.update', { 
                team: props.team.id 
            }))
        } else {
            form.post(route('admin.constructor.store'))
        }
    }
</script>

<template>
    <form
        class="mx-8 my-8"
        @submit.prevent="submit()"
    >
        <div class="flex flex-wrap items-start justify-center">
            <SelectMenu
                label="Franchise"
                class="w-48"
                :options="franchises"
                v-model="form.franchise"
                :errors="form.errors.franchise_id"
                @change="form.clearErrors()"
                required
            />

            <Input
                label="Event Name"
                required
                v-model="form.name"
                :errors="form.errors.name"
            />

            <Input
                label="Event Name"
                required
                v-model="form.name"
                :errors="form.errors.name"
            />

            <SelectMenu
                label="Track"
                class="w-48"
                :options="franchises"
                v-model="form.franchise"
                :errors="form.errors.franchise_id"
                @change="form.clearErrors()"
                required
            />
            
            <Combobox 
                label="Track"
                :keys="['name']"
                :inputDisplay="[
                    'name'
                ]"
                :options="props.tracks"
                v-model="form.track"
            >
                <template #option="{ option }">
                    {{ option.name }}
                </template>
            </Combobox>

            <Input
                label="Slug"
                v-model="form.slug"
                required
            />
        </div>
        
        <div class="text-center">
            <Button @click="submit()">
                Submit
            </Button>
        </div>
  </form>
</template>
