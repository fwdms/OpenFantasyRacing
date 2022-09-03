<template>
  <div class='m-3'>
    <div class='flex justify-between mx-3'>
      <label
        :for='name'
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
        class='w-full border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:ring-orange-500 focus:border-orange-500 sm:text-sm'
        :type='type'
        :name='name'
        v-model='modelValue'
        :placeholder='placeholder'
        @input='updateValue'
      />
    </div>
  </div>
</template>

<script setup>
  import { defineEmits, computed } from 'vue'
  
  const props = defineProps({
    label: String,
    modelValue: String | Number,
    required: Boolean,
    placeholder: String | Number,
    type: {
      type: String,
      default: 'text'
    }
  })
  
  const name = computed(() => props.label.toLowerCase())
  
  const emit = defineEmits(['update:modelValue'])
  const updateValue = (event) => {
    if (props.type === 'number') {
      return emit('update:modelValue', parseInt(event.target.value))
    }
    emit('update:modelValue', event.target.value)
  }
</script>
