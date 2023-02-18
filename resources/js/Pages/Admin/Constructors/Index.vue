<script>
	import Admin from '@/Layouts/Admin.vue'

	export default {
		layout: Admin,
	}
</script>

<script setup>
	import {ref} from 'vue'
	import axios from 'axios'
	import {Inertia} from "@inertiajs/inertia"
	import {useForm} from "@inertiajs/inertia-vue3"
	import PageHeader from '@/Shared/PageHeadings/PageHeader.vue'
	import SelectMenu from '@/Shared/Form/SelectMenu.vue'
	import Button from '@/Shared/Form/Button.vue'
	import Table from '@/Shared/Tables/Table.vue'
	import TableColumn from '@/Shared/Tables/TableColumn.vue'

	const props = defineProps(['franchises'])

	const franchise = ref({})
	const constructors = ref([])

	const headers = [
		'Team ID',
		'Logo',
		'Name',
		'Short Name',
		'Slug',
		'Engine',
		'',
	]

	const form = useForm()

	function franchiseSelected() {
		axios.get(
				route('constructors.index.collection', {
					franchise: franchise.value.slug,
				})
			)
			.then(res => {
				constructors.value = res.data.data
			})
	}

	function deleteConstructor(team) {
		form.delete(
				route('admin.constructor.destroy', {team: team.id}), {
					onSuccess: () => Inertia.visit(route('admin.constructor.index'))
				}
		)
	}
</script>

<template>
	<Header title="Admin | Teams"/>

	<PageHeader title="Teams"/>

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

	<Table
		:headers="headers"
	>
		<template v-slot:top>
			<div class="my-4 mx-6">
				<div class="sm:flex sm:items-center">
					<div class="sm:flex-auto px-2">
						<h1 class="text-xl font-semibold text-gray-900">
							Teams
						</h1>
						<p class="mt-2 text-sm text-gray-700">
							A list of all the teams from a given franchise.
						</p>
					</div>
					<div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
						<Link :href="route('admin.constructor.create')">
							<Button class="
								inline-flex items-center justify-center rounded-md border border-transparent bg-orange-600 px-4 py-2 text-sm 
								font-medium text-white shadow-sm 
								hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 sm:w-auto
							">
								Add a Team
							</Button>
						</Link>
					</div>
				</div>
			</div>
		</template>

		<tr v-for="team in constructors">
			<TableColumn>
				{{ team.id }}
			</TableColumn>

			<TableColumn>
				<img
					:src="team.logo"
					class="rounded-lg object-scale-down h-20 mx-auto flex-none"
				/>
			</TableColumn>

			<TableColumn>
				{{ team.name }}
			</TableColumn>

			<TableColumn>
				{{ team.short_name }}
			</TableColumn>

			<TableColumn>
				{{ team.slug }}
			</TableColumn>

			<TableColumn>
				{{ team.engine_type }}
			</TableColumn>

			<TableColumn>
				<Link :href="route('admin.constructor.edit', { team: team.id })">
					<Button>edit</Button>
				</Link>

				<Button @click="deleteConstructor(team)">
					x
				</Button>
			</TableColumn>
		</tr>
	</Table>
</template>