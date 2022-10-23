<template>
	<Header title='Admin | Create a Franchise' />
	
	<PageHeader title="Create a Franchise" />
	
	<Franchise />
</template>

<script setup>
	import PageHeader from '@/Shared/PageHeadings/PageHeader.vue'
	import Franchise from '@/Shared/Forms/Franchise.vue'
</script>

<script>
	import Admin from '@/Layouts/Admin.vue'

	export default {
		layout: Admin,
	}
</script>