<template>
  <div class='m-3'>
    <div class='flex justify-between mx-3'>
      <label
        :for='id'
        class='text-sm font-medium text-gray-700'
      >
        {{ label }}
      </label>
      
      <p
        class='text-sm text-gray-500'
        v-if='required'
      >
        Required
      </p>
    </div>
    
    <div class='mt-1'>
      <input
        :type='type'
        :name='id'
        :id='id'
        class='w-full border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:ring-orange-500 focus:border-orange-500 sm:text-sm'
        :placeholder='placeholder'
        v-model='value'
        @change="$emit('updated', value)"
      />
    </div>
  </div>
</template>

<script setup>
  import { ref, onMounted } from 'vue'
  
  const props = defineProps({
    id: String,
    value: String | Number,
    label: String,
    required: Boolean,
    placeholder: String | Number,
    type: {
      type: String,
      default: 'text'
    }
  })
  
  const value = ref('')
  
  onMounted(() => {
    props.value !== undefined ? (value.value = props.value) : (value.value = '')
  })
</script>
