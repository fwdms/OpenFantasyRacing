<script setup>
	import { onMounted } from 'vue'
	import { useForm } from '@inertiajs/vue3'
	import dayjs from 'dayjs'
	import Input from '@/Shared/Form/Input.vue'
	import SelectMenu from '@/Shared/Form/SelectMenu.vue'
	import Button from '@/Shared/Form/Button.vue'
	import Combobox from '@/Shared/Form/Combobox.vue'
	import DatePicker from '@/Shared/Form/DatePicker.vue'

	const props = defineProps([
		'franchises',
		'tracks',
		'event'
	])

	const raceTypes = [
		'standard',
		'sprint'
	]
	
	onMounted(() => {
		if(props.event !== undefined) {
			form.franchise = props.franchises.find(
				franchise => franchise.id === props.event?.franchise_id
			)
			form.track = props.tracks.find(
				track => track.id === props.event?.track_id
			)
		} 
	})
	
	const form = useForm({
		franchise: props.event?.franchise_id ?? {},
		name: props.event?.name ?? '',
		date: props.event?.date ?? '',
		short_name: props.event?.short_name ?? '',
		slug: props.event?.slug ?? '',
		round_number: props.event?.round_number ?? '',
		track: props.event?.track_id ?? {},
		race_type: props.event?.race_type ?? '' 
	})

	function submit() {
		if (props.event !== undefined) {
			form.put(route('admin.events.update', {
				event: props.event.id
			}))
		} else {
			form.post(route('admin.events.store'))
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
			>
				<template #option="{ option }">
					{{ option.name }}
				</template>
			</SelectMenu>
			
			<DatePicker
				label="Event Date"
				:min="dayjs()"
				v-model="form.date"
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
				:errors="form.errors.track"
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
				<template #option="{ option }">
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
<template>
  <div class="flex flex-wrap justify-center items-start mt-4">
    <Input
        label="Name"
        v-model="form.first_name"
        :errors="form.errors.first_name"
        required
    />

    <Input
        label="Round Number"
        v-model="form.first_name"
        :errors="form.errors.first_name"
        required
    />

    <Input
        label="Date of Event"
        v-model="form.first_name"
        :errors="form.errors.first_name"
        required
    />

    <SelectMenu
        label="Franchise"
        :options="franchises"
        v-model="form.franchise"
        @change="getConstructors()"
    />

    <Combobox
        label="Track"
        :options="props.tracks"
        v-model="form.track"
    />

    <SelectMenu
        label="Event Type"
        v-model="form.is_rookie"
        :options="options"
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
import {useForm} from '@inertiajs/inertia-vue3'
import Input from '@/Shared/Form/Input.vue'
import Button from '@/Shared/Form/Button.vue'
import SelectMenu from '@/Shared/Form/SelectMenu.vue'
import Combobox from "@/Shared/Form/Combobox.vue";

const props = defineProps([
  'franchises',
  'tracks'
])

const form = useForm({
  id: props.driver?.id ?? '',
  franchise: props.driver?.constructor.franchise ?? {},
  track: {}
})

const options = [
  {name: 'Standard'},
  {name: 'Sprint'},
  {name: 'Qualifying'}
]

function submit() {
  form.post(route('admin.driver.store'), {
    onSuccess: () => form.reset(),
  })

  form.put(route('admin.driver.update', {driver: form.id}))
}
</script>
