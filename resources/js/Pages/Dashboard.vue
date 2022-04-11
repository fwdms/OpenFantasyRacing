<template>
    <Head title="Dashboard" />

    <header class="bg-white shadow">
      <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-gray-900">Dashboard</h1>
      </div>
    </header>

    <main>
      <div class="h-screen max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <stats />
      </div>
    </main>
    
</template>

<script setup>
import Stats from "@/Components/Stats";

  defineProps({
      title: String,
      description: String,
      rules: Array
  });
</script>