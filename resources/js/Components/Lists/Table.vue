<template>
	<div class="flex flex-col my-8">
		<div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
			<div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
				<table class="min-w-full divide-y divide-gray-500">
					<thead class="bg-gray-800 text-white">
						<p class="px-6 py-3 text-left text-md font-medium uppercase tracking-wider">Qualifying</p>
					</thead>
					<tbody class="bg-green-400 divide-y divide-gray-500">
						<tr v-for="technology in technologies" :key="technology.id">
							<td class="px-6 py-4 whitespace-nowrap">
									<div class="text-sm font-medium text-gray-900">{{ technology.name }}</div>
							</td>
							<td class="px-6 py-4 whitespace-nowrap">
									<div class="text-sm text-gray-900">{{ technology.proficiency }}</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</template>

<script>
import { computed } from 'vue'
import { usePage } from '@inertiajs/inertia-vue3'

export default {
  setup() {
    const qualifyingPoints = computed(() => usePage().props.value.qualifyingPoints)
    return { qualifyingPoints }
  },
}
</script>
