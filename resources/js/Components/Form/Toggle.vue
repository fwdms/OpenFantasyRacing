<template>
  <SwitchGroup
    as='div'
    class='flex items-center my-4 mx-4'
  >
    <Switch
      v-model='modelValue'
      :class="[
        modelValue ? 'bg-orange-600' : 'bg-gray-200',
        'relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500',
      ]"
      @update:modelValue='updateValue'
    >
      <span
        aria-hidden='true'
        :class="[
          modelValue ? 'translate-x-5' : 'translate-x-0',
          'pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200',
        ]"
      />
    </Switch>
    <SwitchLabel
      as='span'
      class='ml-3'
    >
      <span class='text-sm font-medium text-gray-900'>
        {{ label }}
      </span>
      <span class='text-sm text-gray-500'>
        {{ subtext }}
      </span>
    </SwitchLabel>
  </SwitchGroup>
</template>

<script setup>
  import { computed, defineEmits } from 'vue'
  import { Switch, SwitchGroup, SwitchLabel } from '@headlessui/vue'
  
  const props = defineProps({
    label: String,
    subtext: String,
    modelValue: Boolean
  })
  
  const emit = defineEmits(['update:modelValue'])
  const updateValue = (event) => {
    emit('update:modelValue', props.modelValue)
  }

</script>
