<template>
    <div class="min-h-screen bg-gray-100 py-6 sm:pt-0">
        <Navigation />
        <main class="">
            <slot />
        </main>
    </div>
</template>

<script setup>
    import Navigation from '@/Components/Navigation.vue'
</script>
