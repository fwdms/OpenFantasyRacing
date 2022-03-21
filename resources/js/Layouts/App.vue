<template>
    <div class="min-h-screen bg-gray-100 pt-6 sm:pt-0">
        <Navigation />
        <main>
            <slot />
        </main>
    </div>
</template>

<script setup>
    import Navigation from '@/Components/Navigation.vue'
</script>
