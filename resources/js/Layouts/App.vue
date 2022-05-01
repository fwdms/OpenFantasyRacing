<template>
  <div class="flex flex-col min-h-screen bg-gray-100">   
    <Navbar />   
    <!-- <command-palette /> --> 
    <main class="mb-auto">
        <slot />
    </main>
    <Footer />
  </div>
</template>

<script setup>
  import Navbar from '@/Components/Navigation/Navbar'
  import Footer from '@/Components/PageSections/Footer'
  // import CommandPalette from '@/Components/Navigation/CommandPalette'
</script>