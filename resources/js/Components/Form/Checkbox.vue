<template>
  <div class='flex items-center'>
    <Label>
      {{ label }}
    </Label>
    <input
      type='checkbox'
      v-model='proxyChecked'
      class='mx-3 rounded border-gray-300 text-orange-600 shadow-sm focus:border-orange-300
           focus:ring focus:ring-orange-200 focus:ring-opacity-50'
    >
  </div>

</template>

<script setup>
  import { computed } from 'vue'
  import Label from '@/Components/Form/Label.vue'
  
  const emit = defineEmits(['update:modelValue'])
  
  const props = defineProps({
    label: String,
    modelValue: Boolean
  })
  
  const proxyChecked = computed({
    get() {
      return props.modelValue
    },
    
    set(value) {
      emit('update:modelValue', value)
    }
  })
</script>