<script setup>
	import { computed, ref } from 'vue'
	import { CheckIcon, ArrowsUpDownIcon } from '@heroicons/vue/24/solid'
	import {
		Combobox,
		ComboboxButton,
		ComboboxInput,
		ComboboxOption,
		ComboboxOptions,
	} from '@headlessui/vue'

	import Label from '@/Shared/Form/Label.vue'

	const props = defineProps([
		'options', 
		'label',
		'inputDisplay', 
		'keys',
		'errors'
	])

	const query = ref('')
	const selectedOption = ref()
 
	const filteredOptions = computed(() =>
		query.value === '' ? props.options : buildFilter() 
	)
	
	function buildFilter() {
		let array = []
		
		props.options.filter(option => {
			props.keys.map(key => {
				Object.getOwnPropertyDescriptor(option, key).value.toLowerCase().includes(query.value.toLowerCase()) 
					? array.push(option) : null
			})
		})
		
		return array
	} 
	
	function buildString(option) {
		let string = []

		props.inputDisplay.map(key => {
			string.push(Object.getOwnPropertyDescriptor(option, key).value)
		})
		
		return string.join(' ')
	}
</script>

<template>
	<Combobox as="div"
		v-model="selectedOption"
		@update:modelValue="$emit('selected', selectedOption)"
		class="mx-2 my-2"
	>
		<Label>
			{{ label }}
		</Label>

		<div class="relative mt-1">
			<ComboboxInput
				class="
					mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300
					focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm rounded-md
				"
				@change="query = $event.target.value"
				autocomplete="off"
				:display-value="(option) => Object.keys(option).length > 0 ? buildString(option) : ''"
			/>
		
			<ComboboxButton
				class="absolute inset-y-0 right-0 flex items-center rounded-r-md px-2 focus:outline-none"
			> 
				<ArrowsUpDownIcon
					class="h-5 w-5 text-gray-400"
					aria-hidden="true"
				/>
			</ComboboxButton>

			<ComboboxOptions
				v-if="filteredOptions.length > 0"
				class="
					absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg 
					ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm
				"
			>
				<ComboboxOption
					v-for="option in filteredOptions"
					:value="option"
					as="template"
					v-slot="{ active, selected }"
				> 
					<li :class="[
							'relative cursor-default select-none py-2 pl-3 pr-9',
							active ? 'bg-orange-600 text-white' : 'text-gray-900',
						]"
					>
						<span :class="['block truncate', selected && 'font-semibold']">
							<slot name="option" :option="option"/>
						</span>

						<span
							v-if="selected"
							:class="[
								'absolute inset-y-0 right-0 flex items-center pr-4',
								active ? 'text-white' : 'text-orange-600',
							]"
						>
							<CheckIcon
								class="h-5 w-5"
								aria-hidden="true"
							/>
						</span>
					</li>
				</ComboboxOption>
			</ComboboxOptions>

			<p class="mt-2 text-orange-600">
				{{ errors }}
			</p>
		</div>
	</Combobox>
</template>