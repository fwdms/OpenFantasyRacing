<template>
  <div class="px-4 sm:px-6 lg:px-8 mb-8">
    <div class="mt-8 flex flex-col">
      <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
          <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
            <table class="min-w-full divide-y divide-gray-300">
              <thead class="bg-gray-50">
                <tr>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 text-center">Round</th>
                  <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6 text-center">Name</th>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 text-center">Track</th>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 text-center">Country</th>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900 text-center">Date</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-200 bg-white">
                <tr v-for="(event, index) in events" :key="event.id">
                  <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">{{ index + 1 }}</td>
                  <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 text-center">
                    <Link :href="currentUrl + '/events/' + event.id" class="text-orange-600">
                      {{ event.name }}
                    </Link>
                  </td>
                  <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">{{ event.track[0].name }}</td>
                  <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">{{ event.track[0].location }}</td>
                  <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 text-center">{{ event.date }}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
  const currentUrl = window.location.pathname

  defineProps({
    events: Array
  })
</script>