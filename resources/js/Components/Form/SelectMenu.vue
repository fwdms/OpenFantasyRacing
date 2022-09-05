<template>
  <div class='my-2 mx-2'>
    <label
      :for='label'
      class='block text-sm font-medium text-gray-700 mx-3'
    >
      {{ label }}
    </label>
    
    <select
      :id='label'
      :name='label'
      class='mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-orange-500 focus:border-orange-500 sm:text-sm rounded-md'
      v-model='selected'
      @change="$emit('selected', selected)"
    >
      <option></option>
      
      <option
        v-for='option in options'
        :value='option'
      >
        {{ option.name }}
        
        {{ option.first_name }}
        {{ option.last_name }}
      </option>
    </select>
  </div>
</template>

<script setup>
  import { ref } from 'vue'
  
  const props = defineProps({
    label: String,
    options: Array,
    modelValue: Object
  })
  
  const selected = ref({})
</script>
