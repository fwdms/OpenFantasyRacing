<template>
    <div class="min-h-screen bg-gray-100">
        <Navigation />
        <!-- <command-palette /> -->
        <main class="">
            <slot />
        </main>
        <Footer />
    </div>
</template>

<script setup>
    import Navigation from '@/Components/Navigation.vue'
    import Footer from '@/Components/Footer.vue'
    import CommandPalette from '@/Components/CommandPalette'
</script>
