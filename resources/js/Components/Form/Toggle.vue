<template>
  <SwitchGroup
    as='div'
    class='flex items-center my-4 mx-4'
  >
    <Switch
      v-model='value'
      :class="[
        value ? 'bg-orange-600' : 'bg-gray-200',
        'relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full ' +
         'cursor-pointer transition-colors ease-in-out duration-200 ' +
         'focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500',
      ]"
      @update:modelValue="$emit('update:modelValue', value)"
    >
      <span
        aria-hidden='true'
        :class="[
          value ? 'translate-x-5' : 'translate-x-0',
          'pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200',
        ]"
      />
    </Switch>
    <Label>
      {{ label }}
      <span class='text-sm text-gray-500'>
        {{ subtext }}
      </span>
    </Label>
  </SwitchGroup>
</template>

<script setup>
  import { ref, defineProps, onBeforeMount } from 'vue'
  import { Switch, SwitchGroup } from '@headlessui/vue'
  import Label from '@/Components/Form/Label.vue'
  
  const props = defineProps({
    label: String,
    subtext: String,
    modelValue: Boolean
  })
  
  onBeforeMount(() => {
    if (props.modelValue !== undefined) {
      value.value = props.modelValue
    }
  })
  
  const value = ref(false)

</script>
