<template>
  <div class="my-8 px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-xl font-semibold text-gray-900">{{ title }}</h1>
        <p class="mt-2 text-sm text-gray-700">{{ description }}</p>
      </div>
    </div>
    <div class="mt-8 flex flex-col">
      <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
          <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
            <table class="min-w-full divide-y divide-gray-300">
              <thead class="bg-gray-50">
                <tr>
                  <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Name</th>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Points Awarded</th>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Descripton</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-200 bg-white">
                <tr v-for="point in points" :key="point.id">
                  <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">{{ point.title }}</td>
                  <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ point.points_amount }} pts</td>
                  <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ point.description }}</td>
                </tr>
              </tbody>
            </table>
          </div>
            <p class="py-4 px-4 text-gray-700 text-sm">
              {{ notes }}
            </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
  defineProps({
      title: String,
      description: String,
      points: Array,
      notes: String
  });
</script>