<template>
  <Combobox
    as='div'
    v-model='selectedOption'
    class='mx-2'
    @update:modelValue="$emit('selected', selectedOption)"
  >
    <ComboboxLabel class='block text-sm font-medium text-gray-700 mx-3'>
      {{ label }}
    </ComboboxLabel>
    
    <div class='relative mt-1'>
      <ComboboxInput
        class='w-full rounded-md border border-gray-300 bg-white py-2 pl-3 pr-10 shadow-sm focus:border-orange-500 focus:outline-none focus:ring-1 focus:ring-orange-500 sm:text-sm'
        @change='query = $event.target.value'
        :display-value="
          option => (Object.keys(option).length !== 0 ? option.first_name + ' ' + option.last_name : '')
        "
      />
      <ComboboxButton
        class='absolute inset-y-0 right-0 flex items-center rounded-r-md px-2 focus:outline-none'
      >
        <SelectorIcon
          class='h-5 w-5 text-gray-400'
          aria-hidden='true'
        />
      </ComboboxButton>
      
      <ComboboxOptions
        v-if='filteredOptions.length > 0'
        class='absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm'
      >
        <ComboboxOption
          v-for='option in filteredOptions'
          :value='option'
          as='template'
          v-slot='{ active, selected }'
        >
          <li
            :class="[
              'relative cursor-default select-none py-2 pl-3 pr-9',
              active ? 'bg-orange-600 text-white' : 'text-gray-900',
            ]"
          >
            <span :class="['block truncate', selected && 'font-semibold']">
              {{ option.first_name }} {{ option.last_name }}
            </span>
            
            <span
              v-if='selected'
              :class="[
                'absolute inset-y-0 right-0 flex items-center pr-4',
                active ? 'text-white' : 'text-orange-600',
              ]"
            >
              <CheckIcon
                class='h-5 w-5'
                aria-hidden='true'
              />
            </span>
          </li>
        </ComboboxOption>
      </ComboboxOptions>
    </div>
  </Combobox>
</template>

<script setup>
  import { computed, ref } from 'vue'
  import { CheckIcon, SelectorIcon } from '@heroicons/vue/solid'
  import {
    Combobox,
    ComboboxButton,
    ComboboxInput,
    ComboboxLabel,
    ComboboxOption,
    ComboboxOptions
  } from '@headlessui/vue'
  
  const props = defineProps(['options', 'label', 'keys'])
  
  const query = ref('')
  const selectedOption = ref({})
  
  const filteredOptions = computed(() =>
    query.value === ''
      ? props.options
      : props.options.filter(option => {
        if (
          option.first_name.toLowerCase().includes(query.value.toLowerCase())
          || option.last_name.toLowerCase().includes(query.value.toLowerCase())
        )
          return option
      })
  )
</script>
