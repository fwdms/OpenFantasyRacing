<template>
  <div class="my-2 mx-2">
    <div class="flex justify-between">
      <label
        :for="id"
        class="block text-sm font-medium text-gray-700"
      >
        {{ label }}
      </label>

      <span
        class="text-sm text-gray-500"
        v-if="required"
      >
        Required
      </span>
    </div>

    <div class="mt-1">
      <input
        type="text"
        :name="id"
        :id="id"
        class="shadow-sm focus:ring-orange-500 focus:border-orange-500 block w-full sm:text-sm border-gray-300 rounded-md"
        :placeholder="placeholder"
        v-model="value"
        @change="$emit('updated', value)"
      />
    </div>
  </div>
</template>

<script setup>
  import { ref, onMounted } from 'vue'

  const props = defineProps(['id', 'value', 'label', 'required', 'placeholder'])

  const value = ref('')

  onMounted(() => {
    props.value !== undefined ? (value.value = props.value) : (value.value = '')
  })
</script>
