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

    const raceTypes = [
        'standard',
        'sprint'
    ]

    const form = useForm({
        franchise: props.event?.franchise ?? {},
        name: props.event?.name ?? '',
        short_name: props.event?.short_name ?? '',
        slug: props.event?.slug ?? '',
        round_number: props.event?.round_number ?? '',
        track: props.event?.track_id ?? {},
        race_type: props.event?.race_type ?? '' 
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
                label="Round #"
                required
                type="number"
                v-model="form.round_number"
                :errors="form.errors.name"
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

            <SelectMenu
                label="Race Type"
                class="w-48"
                :options="raceTypes"
                v-model="form.race_type"
                :errors="form.errors.franchise_id"
                @change="form.clearErrors()"
                required
            >
                <template #option="option">
                    {{ option }}
                </template>
            </SelectMenu>
        </div>
        
        <div class="text-center">
            <Button @click="submit()">
                Submit
            </Button>
        </div>
  </form>
</template>
