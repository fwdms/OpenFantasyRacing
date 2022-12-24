<script setup>
	import {computed} from 'vue'
	import Label from '@/Shared/Form/Label.vue'
	
	const props = defineProps({
		label: String,
		errors: String,
		options: Array,
		modelValue: Object
	})

	const emit = defineEmits(['update:modelValue'])

	const selectedOption = computed({
		get() {
			return props.modelValue
		},
		set(value) {
			emit('update:modelValue', value)
		}
	})
</script>

<template>
	<div class='my-2 mx-2'>
		<Label>
			{{ label }}
		</Label>

		<select :id='label' :name='label' v-model='selectedOption' class='
			mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300
			focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm rounded-md'
		>
			<option></option>

			<option v-for='option in options' :value='option'>
				<slot name="option" :option="option" />	
			</option>
		</select>

		<p class="mt-2 text-orange-600">
			{{ errors }}
		</p>
	</div>
</template>