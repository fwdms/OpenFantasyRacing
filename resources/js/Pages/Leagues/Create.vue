<template>
  <Header title='Create Fantasy League' />
  
  <form class='space-y-8 divide-y divide-gray-200 mx-10 my-8' @submit.prevent='submit'>
    <div>
      <h3 class='text-lg leading-6 font-medium text-gray-900'>
        Create a League
      </h3>
      <p class='mt-1 max-w-2xl text-sm text-gray-500'>
        This information will be displayed publicly so be careful what you share.
      </p>
    </div>
    
    <div class='sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5'>
      <label for='name' class='block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2'> League name </label>
      <div class='mt-1 sm:mt-0 sm:col-span-2'>
        <input
          v-model='form.name'
          type='text'
          name='name'
          id='name'
          class='max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md'
        />
      </div>
    </div>
    
    <div class='sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5'>
      <label for='franchise' class='block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2'> Franchise </label>
      <div class='mt-1 sm:mt-0 sm:col-span-2'>
        <select v-model='form.franchise_id'
                id='franchise'
                name='franchise'
                class='max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md'
        >
          <option
            v-for='(franchise) in franchises'
            :value='franchise.id'
            :key='franchise.id'
          >
            {{ franchise.name }}
          </option>
        </select>
      </div>
    </div>
    
    <div class='sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5'>
      <label for='about_text' class='block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2'>
        About League
      </label>
      <div class='mt-1 sm:mt-0 sm:col-span-2'>
        <textarea
          v-model='form.about_text'
          id='about_text'
          name='about_text'
          rows='3'
          class='max-w-lg shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md'
        />
        <p class='mt-2 text-sm text-gray-500'>
          Write a few sentences about your league.
        </p>
      </div>
    </div>
    
    <div>
      <h3 class='text-lg leading-6 font-medium text-gray-900'>
        Create your Fantasy Team
      </h3>
      <p class='mt-1 max-w-2xl text-sm text-gray-500'>
        Create your fantasy team for this league.
      </p>
    </div>
    
    <div class='sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5'>
      <label for='fantasyTeamName' class='block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2'>
        Fantasy Team Name
      </label>
      <div class='mt-1 sm:mt-0 sm:col-span-2'>
        <input
          v-model='form.fantasyTeamName'
          type='text'
          name='fantasyTeamName'
          id='fantasyTeamName'
          class='max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md'
        />
      </div>
    </div>
    
    <div class='pt-5'>
      <div class='flex justify-end'>
        <button
          type='button'
          class='bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500'
        >
          Cancel
        </button>
        <button
          type='submit'
          class='ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500'
        >
          Save
        </button>
      </div>
    </div>
  </form>
</template>

<script setup>
  import { useForm } from '@inertiajs/inertia-vue3'
  
  defineProps({
    franchises: Array
  })
  
  const form = useForm({
    name: '',
    franchise_id: '',
    about_text: '',
    fantasyTeamName: ''
  })
  
  const submit = () => {
    form.post(route('league.store'), {
      onFinish: () => form.reset()
    })
  }
</script>
