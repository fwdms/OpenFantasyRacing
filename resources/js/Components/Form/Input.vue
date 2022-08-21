<template>
  <div class="my-2 mx-2">
    <div class="flex justify-between">
      <label
        :for="label"
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
        :name="label"
        :id="label"
        class="shadow-sm focus:ring-orange-500 focus:border-orange-500 block w-full sm:text-sm border-gray-300 rounded-md"
        :placeholder="placeholder"
        v-model="value"
        @change="$emit('updated', value ?? '')"
      />
    </div>
  </div>
</template>

<script setup>
  defineProps(['value', 'label', 'required', 'placeholder'])
</script>
