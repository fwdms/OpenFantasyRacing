<template>
  <div class="flex flex-col min-h-screen bg-gray-100">
    <Navbar />
    <main class="mb-auto">
      <slot />
    </main>
    <Footer />
  </div>
</template>

<script setup>
  import Navbar from '@/Shared/Navigation/Navbar.vue'
  import Footer from '@/Shared/PageSections/Footer.vue'
</script>
