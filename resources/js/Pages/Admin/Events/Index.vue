<script setup>
	import {ref} from 'vue'
	import axios from 'axios'
	import PageHeader from '@/Shared/PageHeadings/PageHeader.vue'
	import SelectMenu from '@/Shared/Form/SelectMenu.vue'
	import Table from '@/Shared/Tables/Table.vue'
	import TableColumn from '@/Shared/Tables/TableColumn.vue'
	import Button from '@/Shared/Form/Button.vue'

	const props = defineProps([
	'franchises'
	])

	const franchise = ref({})
	const events = ref([])
	const fields = ref({
		number: '',
		first_name: '',
		last_name: '',
		constructor: '',
		is_rookie: false,
	})

	const headers = [
		'Name',
		'Track Name',
		'Country',
		'',
	]

	function franchiseSelected() {
		axios
			.get(
				route('events.index.collection', {
					franchise: franchise.value.slug,
				})
			)
			.then(res => {
				events.value = res.data.data
			})
			.catch(error => {
				console.log(error)
			})
	}
</script>

<script>
	import Admin from '@/Layouts/Admin.vue'

	export default {
		layout: Admin,
	}
</script>

<template>
	<Header title="Admin | Drivers"/>

	<PageHeader title="Races / Events"/>

	<div class="mx-auto w-1/5">
		<SelectMenu
			label="Franchise"
			:options="props.franchises"
			v-model="franchise"
			@change="franchiseSelected()"
		>
			<template #option="{ option }">
				{{ option.name }}
			</template>
		</SelectMenu>
	</div>

	<Table :headers="headers">
		<template v-slot:top>
			<div class="my-4 mx-6">
				<div class="sm:flex sm:items-center">
					<div class="sm:flex-auto px-2">
						<h1 class="text-xl font-semibold text-gray-900">Events</h1>
						<p class="mt-2 text-sm text-gray-700">
							A list of all the events from a given franchise.
						</p>
					</div>
					<div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
						<Link :href="route('admin.events.create')">
							<button
								type="button"
								class="inline-flex items-center justify-center rounded-md border border-transparent bg-orange-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 sm:w-auto"
							>
								Add an Event
							</button>
						</Link>
					</div>
				</div>
			</div>
		</template>

		<tr v-for="event in events">
			<TableColumn>
				{{ event.name }}
			</TableColumn>

			<TableColumn>
				{{ event.track[0].name }}
			</TableColumn>

			<TableColumn>
				{{ event.track[0].location }}
			</TableColumn>

			<TableColumn>
				<Link :href="route('admin.events.edit', { event: event.id })">
					<Button>edit</Button>
				</Link>

				<Button>x</Button>
			</TableColumn>
		</tr>
  </Table>
</template>
