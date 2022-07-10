<template>
  <div class="bg-white my-8 mx-8 py-2 rounded-lg">
    <h1 v-if="title" class="text-3xl my-2 font-extrabold tracking-tight text-center text-orange-600">
      {{ title }}
    </h1>

    <p v-if="description" class="text-center">
      {{ description }}
    </p>
      
    <div class="my-4 mx-4 flex flex-col">
      <div class="overflow-x-auto">
        <div class="inline-block min-w-full py-2 px-2 align-middle">
          <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 rounded-lg">
            <table class="min-w-full divide-y divide-gray-300">

              <thead class="bg-gray-50">
                <tr>
                  <th v-for="header in headers" scope="col" class="px-3 py-3.5 text-center text-sm font-semibold text-gray-900">
                    {{ header }}
                  </th>
                </tr>
              </thead>

              <tbody class="divide-y divide-gray-200 bg-white">
                <slot />
              </tbody>

            </table>
          </div>
        </div>
      </div>
    </div>

    <p v-if="footnote" class="text-center my-2 text-sm px-8 text-gray-600">
      {{ footnote }}
    </p>

  </div>
</template>

<script setup>
  defineProps({
    title: String,
    description: String,
    headers: Array,
    footnote: String
  })
</script>
