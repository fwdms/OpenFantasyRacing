<template>
    <div class="sm:block">
      <nav class="flex justify-center space-x-4 my-2" aria-label="Tabs">
        <button v-for="tab in tabs" 
          :key="tab" 
          :class="[ selectedTab(currentTab, tabs) === tab ? 'bg-orange-600 text-white' : 'text-gray-500 hover:text-gray-700', 'px-3 py-2 font-medium text-sm rounded-md' ]" 
          @click="changeTab(currentTab, tab)"
        >
          {{ tab }}
        </button>
      </nav>
    </div>
</template>

<script setup>
  import { ref } from 'vue'
  
  const props = defineProps({
    tabs: Array,
  })
  
  const emit = defineEmits(['setCurrentTab'])
  
  const currentTab = ref({ name: '' })

  function selectedTab(currentTab, tabs) {
    if(currentTab.name == '') {
      emit("setCurrentTab", tabs[0]);
      return tabs[0]
    }
    return currentTab.name
  }

  function changeTab(currentTab, tab) {
    currentTab.name = tab
    emit("setCurrentTab", currentTab.name);
  }
</script>