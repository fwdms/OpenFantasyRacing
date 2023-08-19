<template>
  <form @submit.prevent="submit">
    <div class="shadow overflow-hidden sm:rounded-md">
      <div class="px-4 py-5 bg-white sm:p-6">
        <div class="grid grid-cols-6 gap-6">
          <div class="col-span-6 sm:col-span-3">
            <label
                for="first-name"
                class="block text-sm font-medium text-gray-700"
            >
              First name
            </label>
            <input
                v-model="form.first_name"
                type="text"
                name="first-name"
                id="first-name"
                autocomplete="given-name"
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
            />
          </div>

          <div class="col-span-6 sm:col-span-3">
            <label
                for="last-name"
                class="block text-sm font-medium text-gray-700"
            >
              Last name
            </label>
            <input
                v-model="form.last_name"
                type="text"
                name="last-name"
                id="last-name"
                autocomplete="family-name"
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
            />
          </div>

          <div class="col-span-6 sm:col-span-4">
            <label
                for="email-address"
                class="block text-sm font-medium text-gray-700"
            >
              Email address
            </label>
            <input
                v-model="form.email"
                type="text"
                name="email-address"
                id="email-address"
                autocomplete="email"
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
            />
          </div>

          <div class="col-span-6 sm:col-span-3">
            <label
                for="country"
                class="block text-sm font-medium text-gray-700"
            >
              Country
            </label>
            <select
                v-model="form.country"
                id="country"
                name="country"
                autocomplete="country-name"
                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
            >
              <option>United States</option>
              <option>Canada</option>
              <option>Mexico</option>
            </select>
          </div>

          <div class="col-span-6">
            <label
                for="street-address"
                class="block text-sm font-medium text-gray-700"
            >
              Street address
            </label
            >
            <input
                v-model="form.street_address"
                type="text"
                name="street-address"
                id="street-address"
                autocomplete="street-address"
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
            />
          </div>

          <div class="col-span-6 sm:col-span-6 lg:col-span-2">
            <label
                for="city"
                class="block text-sm font-medium text-gray-700"
            >
              City
            </label>
            <input
                v-model="form.city"
                type="text"
                name="city"
                id="city"
                autocomplete="address-level2"
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
            />
          </div>

          <div class="col-span-6 sm:col-span-3 lg:col-span-2">
            <label
                for="region"
                class="block text-sm font-medium text-gray-700"
            >
              State / Province
            </label>
            <input
                v-model="form.state"
                type="text"
                name="region"
                id="region"
                autocomplete="address-level1"
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
            />
          </div>

          <div class="col-span-6 sm:col-span-3 lg:col-span-2">
            <label
                for="postal-code"
                class="block text-sm font-medium text-gray-700"
            >
              ZIP / Postal code
            </label>
            <input
                v-model="form.zip_code"
                type="text"
                name="postal-code"
                id="postal-code"
                autocomplete="postal-code"
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
            />
          </div>
        </div>
      </div>
      <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
        <button
            type="submit"
            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
        >
          Save
        </button>
      </div>
    </div>
  </form>
</template>

<script setup>

</script>