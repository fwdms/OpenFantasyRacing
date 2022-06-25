<template>
  <div>
    <div class="sm:hidden">
      <label for="tabs" class="sr-only">Select a tab</label>
      <select id="tabs" name="tabs" 
        class="block w-full focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md"
      >
        <option v-for="tab in tabs" :key="tab.name" :selected="tab.current">{{ tab.name }}</option>
      </select>
    </div>
    <div class="hidden sm:block">
      <nav class="flex justify-center space-x-4 my-2" aria-label="Tabs">
        <Link v-for="tab in tabs" :key="tab.name" :href="tab.href" 
          :class="[tab.current ? 'bg-orange-600 text-white' : 'text-gray-500 hover:text-gray-700', 'px-3 py-2 font-medium text-sm rounded-md']" 
          :aria-current="tab.current ? 'page' : undefined"
        >
          {{ tab.name }}
        </Link>
      </nav>
    </div>
  </div>
</template>

<script setup>
  defineProps({
    tabs: Array
  })
</script>