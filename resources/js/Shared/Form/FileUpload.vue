<template>
  <Label :label="props.label"/>
  <input
      ref="file"
      id="file-upload"
      @input="inputValue"
      class="sr-only"
      name=""
      type="file"
  />

  <p class="mt-2 text-orange-600">
    {{ errors }}
  </p>
</template>

<script setup>
import Label from "@/Shared/Form/Label.vue"
import {computed} from "vue"

const props = defineProps([
  'label',
  'errors',
  'modelValue'
])

const emit = defineEmits(['update:modelValue'])

const inputValue = computed({
  get() {
    return props.modelValue
  },
  set(value) {
    emit('update:modelValue', value)
  },
})
</script>