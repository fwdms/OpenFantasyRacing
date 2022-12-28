<script setup>
    import PageHeader from '@/Shared/PageHeadings/PageHeader.vue'
    import Event from '@/Shared/Forms/Event.vue'

    const props = defineProps([
        'franchises',
        'tracks',
        'event'
    ])
</script>

<script>
    import Admin from '@/Layouts/Admin.vue'

    export default {
        layout: Admin,
    }
</script>

<template>
    <Header title="Admin | Events"/>

    <PageHeader title="Races / Events"/>
    
    <Event 
        :franchises="franchises" 
        :tracks="tracks" 
        :event="event" 
    /> 
</template>
