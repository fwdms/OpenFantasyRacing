<template>
  <form
    class="mx-10 my-8 space-y-8 divide-y divide-gray-200"
    @submit.prevent="submit"
  >
    <div>
      <h3 class="text-lg font-medium leading-6 text-gray-900">
        Create a League
      </h3>
      <p class="max-w-2xl mt-1 text-sm text-gray-500">
        This information will be displayed publicly so be careful what you
        share.
      </p>
    </div>

    <div
      class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5"
    >
      <label
        for="name"
        class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"
      >
        League name
      </label>
      <div class="mt-1 sm:mt-0 sm:col-span-2">
        <input
          v-model="form.name"
          type="text"
          name="name"
          id="name"
          class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm"
        />
      </div>
    </div>

    <div
      class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5"
    >
      <label
        for="franchise"
        class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"
      >
        Franchise
      </label>
      <div class="mt-1 sm:mt-0 sm:col-span-2">
        <select
          v-model="form.franchise_id"
          id="franchise"
          name="franchise"
          class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm"
        >
          <option
            v-for="franchise in franchises"
            :value="franchise.id"
            :key="franchise.id"
          >
            {{ franchise.name }}
          </option>
        </select>
      </div>
    </div>

    <div
      class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5"
    >
      <label
        for="about_text"
        class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"
      >
        About League
      </label>
      <div class="mt-1 sm:mt-0 sm:col-span-2">
        <textarea
          v-model="form.about_text"
          id="about_text"
          name="about_text"
          rows="3"
          class="block w-full max-w-lg border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
        />
        <p class="mt-2 text-sm text-gray-500">
          Write a few sentences about your league.
        </p>
      </div>
    </div>

    <div>
      <h3 class="text-lg font-medium leading-6 text-gray-900">
        Create your Fantasy Team
      </h3>
      <p class="max-w-2xl mt-1 text-sm text-gray-500">
        Create your fantasy team for this league.
      </p>
    </div>

    <div
      class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5"
    >
      <label
        for="fantasyTeamName"
        class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"
      >
        Fantasy Team Name
      </label>
      <div class="mt-1 sm:mt-0 sm:col-span-2">
        <input
          v-model="form.fantasyTeamName"
          type="text"
          name="fantasyTeamName"
          id="fantasyTeamName"
          class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm"
        />
      </div>
    </div>

    <div class="pt-5">
      <div class="flex justify-end">
        <button
          type="button"
          class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
        >
          Cancel
        </button>
        <button
          type="submit"
          class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
        >
          Save
        </button>
      </div>
    </div>
  </form>
</template>

<script setup>
  import { useForm } from '@inertiajs/vue3'

  const form = useForm({
    name: '',
    franchise_id: '',
    about_text: '',
    fantasyTeamName: '',
  })

  const submit = () => {
    form.post(route('league.store'), {
      onFinish: () => form.reset(),
    })
  }
</script>
