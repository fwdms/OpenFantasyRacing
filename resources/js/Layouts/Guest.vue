<template>
    <Navigation />
    <main class="min-h-screen px-8 py-8 bg-gray-100 pt-6 sm:pt-0">
        <slot />
    </main>
</template>

<script setup>
    import Navigation from '@/Components/Navigation.vue'
</script>
