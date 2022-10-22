<template>
	<div class="md:flex md:items-center md:justify-between bg-white py-8 px-8">
		<div class="flex-1 min-w-0">
			<h2
				class="text-3xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate text-center"
			>
				{{ title }}
			</h2>
		</div>
	</div>
</template>

<script setup>
	defineProps({
		title: String,
	})
</script>
