<template>
  <div class='flex flex-col min-h-screen bg-gray-100'>
    <Navbar />
    <main class='mb-auto'>
      <slot />
    </main>
    <Footer />
  </div>
</template>

<script setup>
  import Navbar from '@/Components/Navigation/Navbar.vue'
  import Footer from '@/Components/PageSections/Footer.vue'
</script>