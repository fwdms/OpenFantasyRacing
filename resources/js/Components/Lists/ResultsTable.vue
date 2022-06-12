<template>
	<div class="mt-8 flex flex-col">
		<div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
			<div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
				<div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
					<table class="min-w-full divide-y divide-gray-300">
						<thead class="bg-gray-50">
							<tr>
								<th scope="col" class="py-3.5 pl-4 pr-3 w-96 text-center text-sm font-semibold text-gray-900 sm:pl-6">
									Round
								</th>
								<th scope="col" class="py-3.5 pl-4 pr-3 w-96 text-center text-sm font-semibold text-gray-900 sm:pl-6">
									Event
								</th>
								<th scope="col" class="py-3.5 pl-4 pr-3 w-96 text-center text-sm font-semibold text-gray-900 sm:pl-6">
									Track Name
								</th>
								<th scope="col" class="py-3.5 pl-4 pr-3 w-96 text-center text-sm font-semibold text-gray-900 sm:pl-6">
									Track Location
								</th>
								<th scope="col" class="px-3 py-3.5 w-96 text-center text-sm font-semibold text-gray-900">
									Started
								</th>
								<th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
									Finished
								</th>
								<th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
									DNF
								</th>
								<th scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
									Points
								</th>
							</tr>
						</thead>
						<tbody class="divide-y divide-gray-200 bg-white">
							<tr v-for="result in results" :key="result.id">
                <td class="whitespace-nowrap py-4 w-96 pl-4 pr-3 text-center text-sm font-medium text-gray-900 sm:pl-6">
									{{ result.round_number }}
								</td>	
								<td class="whitespace-nowrap py-4 w-96 pl-4 pr-3 text-center text-sm font-medium text-gray-900 sm:pl-6">
									<Link :href="'/franchise/' + franchise.slug + '/events/' + result.race_id" class="text-orange-600">
										{{ result.name }}
									</Link>
								</td>	
								<td class="whitespace-nowrap py-4 w-96 pl-4 pr-3 text-center text-sm font-medium text-gray-900 sm:pl-6">
									{{ result.track_name }}
								</td>							
								<td class="whitespace-nowrap py-4 w-96 pl-4 pr-3 text-center text-sm font-medium text-gray-900 sm:pl-6">
									{{ result.track_location }}
								</td>
								<td class="whitespace-nowrap px-3 w-96 py-4 text-center text-sm text-gray-500">
									{{ result.starting_pos }}
								</td>
								<td class="whitespace-nowrap px-3 py-4 text-sm text-center text-gray-500">
									{{ result.finish_pos }}
								</td>
								<td class="whitespace-nowrap px-3 py-4 text-sm text-center text-gray-500">
									<span v-if="result.DNF">DNF</span>
								</td>
								<td class="whitespace-nowrap px-3 py-4 text-sm text-center text-gray-500">
									{{ result.points_for_race }}
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</template>

<script setup>
	defineProps({
    franchise: Object,
    results: Array,
  })
</script>
