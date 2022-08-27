<template>
  <Header title='My Profile' />
  
  <div class='my-8 mx-8'>
    <div class='md:grid md:grid-cols-3 md:gap-6'>
      <div class='md:col-span-1'>
        
        <div class='px-4 sm:px-0'>
          <h3 class='text-lg font-medium leading-6 text-gray-900'>Personal Information</h3>
          <p class='mt-1 text-sm text-gray-600'>Use a permanent address where you can receive mail.</p>
        </div>
      
      </div>
      
      <div class='mt-5 md:mt-0 md:col-span-2'>
        <form @submit.prevent='submit'>
          <div class='shadow overflow-hidden sm:rounded-md'>
            <div class='px-4 py-5 bg-white sm:p-6'>
              <div class='grid grid-cols-6 gap-6'>
                
                <div class='col-span-6 sm:col-span-3'>
                  <label for='first-name' class='block text-sm font-medium text-gray-700'>First name</label>
                  <input v-model='form.first_name' type='text' name='first-name' id='first-name'
                         autocomplete='given-name'
                         class='mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md' />
                </div>
                
                <div class='col-span-6 sm:col-span-3'>
                  <label for='last-name' class='block text-sm font-medium text-gray-700'>Last name</label>
                  <input v-model='form.last_name' type='text' name='last-name' id='last-name' autocomplete='family-name'
                         class='mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md' />
                </div>
                
                <div class='col-span-6 sm:col-span-4'>
                  <label for='email-address' class='block text-sm font-medium text-gray-700'>Email address</label>
                  <input v-model='form.email' type='text' name='email-address' id='email-address' autocomplete='email'
                         class='mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md' />
                </div>
                
                <div class='col-span-6 sm:col-span-3'>
                  <label for='country' class='block text-sm font-medium text-gray-700'>Country</label>
                  <select v-model='form.country' id='country' name='country' autocomplete='country-name'
                          class='mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm'>
                    <option>United States</option>
                    <option>Canada</option>
                    <option>Mexico</option>
                  </select>
                </div>
                
                <div class='col-span-6'>
                  <label for='street-address' class='block text-sm font-medium text-gray-700'>Street address</label>
                  <input v-model='form.street_address' type='text' name='street-address' id='street-address'
                         autocomplete='street-address'
                         class='mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md' />
                </div>
                
                <div class='col-span-6 sm:col-span-6 lg:col-span-2'>
                  <label for='city' class='block text-sm font-medium text-gray-700'>City</label>
                  <input v-model='form.city' type='text' name='city' id='city' autocomplete='address-level2'
                         class='mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md' />
                </div>
                
                <div class='col-span-6 sm:col-span-3 lg:col-span-2'>
                  <label for='region' class='block text-sm font-medium text-gray-700'>State / Province</label>
                  <input v-model='form.state' type='text' name='region' id='region' autocomplete='address-level1'
                         class='mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md' />
                </div>
                
                <div class='col-span-6 sm:col-span-3 lg:col-span-2'>
                  <label for='postal-code' class='block text-sm font-medium text-gray-700'>ZIP / Postal code</label>
                  <input v-model='form.zip_code' type='text' name='postal-code' id='postal-code'
                         autocomplete='postal-code'
                         class='mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md' />
                </div>
              </div>
            </div>
            <div class='px-4 py-3 bg-gray-50 text-right sm:px-6'>
              <button type='submit'
                      class='inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500'>
                Save
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  <div class='hidden sm:block' aria-hidden='true'>
    <div class='border-t border-gray-200' />
  </div>
  
  <div class='mx-8 my-8'>
    <div class='md:grid md:grid-cols-3 md:gap-6'>
      <div class='md:col-span-1'>
        <div class='px-4 sm:px-0'>
          <h3 class='text-lg font-medium leading-6 text-gray-900'>Profile</h3>
          <p class='mt-1 text-sm text-gray-600'>This information will be displayed publicly so be careful what you
            share.</p>
        </div>
      </div>
      <div class='mt-5 md:mt-0 md:col-span-2'>
        <form @submit.prevent='submit'>
          <div class='shadow sm:rounded-md sm:overflow-hidden'>
            <div class='px-4 py-5 bg-white space-y-6 sm:p-6'>
              
              <div>
                <label class='block text-sm font-medium text-gray-700'> Photo </label>
                <div class='mt-1 flex items-center'>

                  <span v-if='props.auth.user.profile_image === null'
                        class='inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100'>
                    <svg class='h-full w-full text-gray-300' fill='currentColor' viewBox='0 0 24 24'>
                      <path
                        d='M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z' />
                    </svg>
                  </span>
                  
                  <span v-if='props.auth.user.profile_image !== null'
                        class='inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100'>
                    <img :src='props.auth.user.profile_image' class='h-full w-full text-gray-300' fill='currentColor'
                         viewBox='0 0 24 24' />
                  </span>
                  
                  <div>
                    <label
                      class='ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500'
                      for='file-upload'>Upload File</label>
                    <input ref='file' id='file-upload' @input='form.profile_image = $event.target.files[0]'
                           class='sr-only'
                           :name='form.profile_image' type='file' @change='check'
                    >
                  </div>
                
                </div>
              </div>
              
              <div>
                <label for='about' class='block text-sm font-medium text-gray-700'> About </label>
                <div class='mt-1'>
                  <textarea v-model='form.about' id='about' name='about' rows='3'
                            class='shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md'
                            placeholder='you@example.com' />
                </div>
                <p class='mt-2 text-sm text-gray-500'>Brief description for your profile. URLs are hyperlinked.</p>
              </div>
              
              <div class='grid grid-cols-3 gap-6'>
                <div class='col-span-3 sm:col-span-2'>
                  <label for='company-website' class='block text-sm font-medium text-gray-700'> Website </label>
                  <div class='mt-1 flex rounded-md shadow-sm'>
                    <span
                      class='inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm'> https:// </span>
                    <input v-model='form.website' type='text' name='company-website' id='company-website'
                           class='focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300'
                           placeholder='www.example.com' />
                  </div>
                </div>
              </div>
            
            </div>
            <div class='px-4 py-3 bg-gray-50 text-right sm:px-6'>
              <button type='submit'
                      class='inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500'
              > Save
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script setup>
  import { useForm } from '@inertiajs/inertia-vue3'
  
  const props = defineProps(['auth'])
  
  const form = useForm({
    first_name: props.auth.user.first_name,
    last_name: props.auth.user.last_name,
    email: props.auth.user.email,
    country: props.auth.user.country,
    street_address: props.auth.user.street_address,
    city: props.auth.user.city,
    state: props.auth.user.state,
    zip_code: props.auth.user.zip_code,
    about: props.auth.user.about,
    website: props.auth.user.website,
    profile_image: props.auth.user.profile_image,
    about: props.auth.user.about
  })
  
  let profilePhoto = form.profile_image
  
  const submit = () => {
    form.post(route('profile.update'), {
      onFinish: () => form.reset('password', 'password_confirmation')
    })
  }
</script>
