<template>
  <div class="flex flex-wrap justify-center items-center mt-4">
    <Input
        label="First Name"
        v-model="form.first_name"
        :errors="form.errors.first_name"
        required
    />

    <Input
        label="Last Name"
        v-model="form.last_name"
        :errors="form.errors.last_name"
        required
    />

    <Input
        label="Number"
        type="number"
        v-model="form.number"
        :errors="form.errors.number"
    />

    <SelectMenu
        label="Franchise"
        :options="franchises"
        v-model="form.franchise"
        @change="getConstructors()"
    >
        <template #option="{ option }">
            {{ option.name }}
        </template>
    </SelectMenu>

    <SelectMenu
        v-if="constructors.length > 0"
        label="Constructor"
        :options="constructors"
        v-model="form.constructor"
    >
        <template #option="{ option }">
            {{ option.name }} 
        </template>
    </SelectMenu>

    <Toggle
        label="Rookie"
        v-model="form.is_rookie"
    />
  </div>

  <div class="flex flex-wrap justify-center items-center">
    <Button
        v-if="props.driver"
        @click="updateDriver()"
    >
      Update
    </Button>

    <Button
        v-else
        @click="saveDriver()"
    >
      Save
    </Button>
  </div>
</template>

<script setup>
    import { ref, onMounted } from 'vue'
    import { useForm } from '@inertiajs/inertia-vue3'
    import axios from 'axios'
    import Input from '@/Shared/Form/Input.vue'
    import Button from '@/Shared/Form/Button.vue'
    import SelectMenu from '@/Shared/Form/SelectMenu.vue'
    import Toggle from '@/Shared/Form/Toggle.vue'

    const props = defineProps(['franchises', 'driver'])

    const form = useForm({
        id: props.driver?.id ?? '',
        number: props.driver?.number ?? '',
        franchise: props.driver?.constructor.franchise ?? {},
        first_name: props.driver?.first_name ?? '',
        last_name: props.driver?.last_name ?? '',
        constructor: props.driver?.constructor ?? {},
        is_rookie: props.driver?.is_rookie ?? false,
    })

    const constructors = ref({})

    onMounted(() => {
        if (props.driver?.constructor.franchise !== undefined) {
            getConstructors()
        }
    })

    function getConstructors() {
        axios.get(
            route('constructors.index.collection', {
                franchise: form.franchise.slug,
            })
        ).then(res => {
            constructors.value = res.data.data
        })
    }

    function saveDriver() {
        form.post(route('admin.driver.store'), {
            onSuccess: () => form.reset(),
        })
    }

    function updateDriver() {
        form.put(route('admin.driver.update', {driver: form.id}))
    }
</script>
