<template>
  <div class='my-3 mx-4'>
    <div class='flex justify-between'>
      <Label
        :for='name'
      >
        {{ label }}
      </Label>
      
      <Label
        class='text-sm text-gray-400'
        v-if='required'
      >
        Required
      </Label>
    </div>
    
    <div class='mt-1'>
      <input
        class='w-full border-gray-300 rounded-md shadow-sm placeholder-gray-400
        focus:ring-orange-500 focus:border-orange-500 sm:text-sm'
        :type='type'
        :name='name'
        v-model='inputValue'
        :placeholder='placeholder'
        @input='updateValue'
      />
    </div>
  </div>
</template>

<script setup>
  import { defineEmits, computed, ref } from 'vue'
  import Label from '@/Components/Form/Label.vue'
  
  const props = defineProps({
    label: String,
    required: Boolean,
    placeholder: String | Number,
    modelValue: String | Number,
    type: {
      type: String,
      default: 'text'
    }
  })
  
  const name = computed(() => props.label.toLowerCase())
  
  const inputValue = computed({
    get() {
      return props.modelValue
    },
    set(newValue) {
      return newValue
    }
  })
  
  const emit = defineEmits(['update:modelValue'])
  
  const updateValue = (event) => {
    if (props.type === 'number') {
      return emit('update:modelValue', parseInt(event.target.value))
    }
    emit('update:modelValue', event.target.value)
  }
</script>
