<script setup>
	import { useForm } from '@inertiajs/vue3'
	import Input from '@/Shared/Form/Input.vue'
	import SelectMenu from '@/Shared/Form/SelectMenu.vue'
	import Button from '@/Shared/Form/Button.vue'

	const props = defineProps([
		'franchises',
		'team'
	])

	const form = useForm({
		franchise: props.team?.franchise ?? {},
		name: props.team?.name ?? '',
		short_name: props.team?.short_name ?? '',
		slug: props.team?.slug ?? ''
	})

	function submit() {
		if (props.team !== undefined) {
			form.put(route('admin.constructor.update', {team: props.team.id}))
		} else {
			form.post(route('admin.constructor.store'))
		}
	}
</script>

<template>
	<form
		class="mx-8 my-8 text-center"
		@submit.prevent="submit"
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

			<Input
				label="Constructor / Team Name"
				required
				v-model="form.name"
				:errors="form.errors.name"
			/>

			<Input
				label="Short Name"
				v-model="form.short_name"
				:errors="form.errors.short_name"
			/>

			<Input
				label="Slug"
				v-model="form.slug"
				required
			/>
		</div>

		<Button @click="submit()">
			Submit
		</Button>
	</form>
</template>

