<template>
    <div class="min-h-screen bg-gray-100">
        <Navbar />
        <!-- <command-palette /> -->
        <main class="">
            <slot />
        </main>
        <Footer />
    </div>
</template>

<script setup>
    import Navbar from '@/Components/Navigation/Navbar.vue'
    import Footer from '@/Components/Footer.vue'
    import CommandPalette from '@/Components/CommandPalette'
</script>
