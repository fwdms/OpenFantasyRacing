<template>
  <Disclosure as='nav' class='bg-gray-800' v-slot='{ open }'>
    <div class='w-full px-2 mx-auto sm:px-6 lg:px-8'>
      <div class='relative flex items-center justify-between h-16'>
        <div class='absolute inset-y-0 left-0 flex items-center sm:hidden'>
          <!-- Mobile menu button-->
          <DisclosureButton class='inline-flex items-center justify-center p-2 text-gray-400 rounded-md hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white'
          >
            <span class='sr-only'>Open main menu</span>
            <Bars3Icon v-if='!open' class='block w-6 h-6' aria-hidden='true' />
            <XMarkIcon v-else class='block w-6 h-6' aria-hidden='true' />
          </DisclosureButton>
        </div>
        <div class='flex items-center justify-center flex-1 sm:items-stretch sm:justify-start'>
          <div class='flex items-center flex-shrink-0'>
            <Link href='/'>
              <!-- The Logo -->
              <p class='font-semibold text-orange-600 sm:text-xl md:text-2xl' style="font-family: 'Bangers', cursive;">
                {{ appName }}
              </p>
            </Link>
          </div>
          <div class='hidden sm:block sm:ml-6'>
            <div class='flex space-x-4'>
              <Link v-for='item in navigation' :key='item.name' :href='item.href'
                    :class="[ currrentTab === item.href ? 'bg-gray-900 text-white'
                : 'text-gray-300 hover:bg-gray-700 hover:text-white', 'px-3 py-2 rounded-md text-sm font-medium']"
                    :aria-current="item.current ? 'page' : undefined">
                {{ item.name }}
              </Link>
            </div>
          </div>
        </div>
        <div v-if='$page.props.auth.user'
             class='absolute inset-y-0 right-0 z-10 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0'>
          <!-- Profile dropdown -->
          <Menu as='div' class='relative ml-3'>
            <div>
              <MenuButton
                class='flex text-sm bg-gray-800 rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white'>
                <span class='sr-only'>Open user menu</span>
                <span v-if='$page.props.auth.user.profile_image === null'
                      class='inline-block w-8 h-8 overflow-hidden bg-gray-100 rounded-full'>
                    <svg class='w-full h-full text-gray-300' fill='currentColor' viewBox='0 0 24 24'>
                      <path
                        d='M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z' />
                    </svg>
                  </span>
                
                <span v-if='$page.props.auth.user.profile_image !== null'
                      class='inline-block w-8 h-8 overflow-hidden bg-gray-100 rounded-full'>
                    <img :src='$page.props.auth.user.profile_image' class='w-full h-full text-gray-300'>
                  </span>
              </MenuButton>
            </div>
            <transition enter-active-class='transition duration-100 ease-out'
              enter-from-class='transform scale-95 opacity-0'
              enter-to-class='transform scale-100 opacity-100'
              leave-active-class='transition duration-75 ease-in'
              leave-from-class='transform scale-100 opacity-100'
              leave-to-class='transform scale-95 opacity-0'
            >
              <MenuItems
                class='absolute right-0 w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none'>
                <MenuItem v-slot='{ active }'>
                  <a href='https://www.patreon.com/openfantasyracing' target='_blank'
                     :class="[active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700 w-full']">
                    Donate
                  </a>
                </MenuItem>
                <MenuItem v-slot='{ active }'>
                  <Link href='/profile' :class="[active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700']">
                    Your Profile
                  </Link>
                </MenuItem>
                <!-- <MenuItem v-slot="{ active }">
                  <Link href="#" :class="[active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700 w-full']">
                    Settings
                  </Link>
                </MenuItem> -->
                <MenuItem v-slot='{ active }'>
                  <Link :href="route('logout')"
                        method='post'
                        :class="[active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700 w-full text-left']"
                        as='button'>
                    Sign out
                  </Link>
                </MenuItem>
              </MenuItems>
            </transition>
          </Menu>
          <button type='button' class='p-1 ml-4 text-gray-400 bg-gray-800 rounded-full hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white'
          >
            <span class='sr-only'>View notifications</span>
            <BellAlertIcon class='w-6 h-6' aria-hidden='true' />
          </button>
        </div>
        
        <div v-else class='py-4 sm:block'>
          <Link :href="route('login')"
                class='px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white'>
            Log in
          </Link>
          <Link :href="route('register')"
                class='px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white'>
            Register
          </Link>
        </div>
      </div>
    </div>
    
    <DisclosurePanel class='sm:hidden'>
      <div class='px-2 pt-2 pb-3 space-y-1'>
        <Link v-for='item in navigation' :key='item.name' as='a' :href='item.href' :class="[item.current
          ? 'bg-gray-900 text-white' 
          : 'text-gray-300 hover:bg-gray-700 hover:text-white', 'block px-3 py-2 rounded-md text-base font-medium']"
              :aria-current="item.current
          ? 'page' : undefined">{{ item.name }}
        </Link>
      </div>
    </DisclosurePanel>
  </Disclosure>
</template>

<script setup>
  import { computed } from 'vue'
  import { Disclosure, DisclosureButton, DisclosurePanel, Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue'
  import { BellAlertIcon, Bars3Icon, XMarkIcon } from '@heroicons/vue/24/outline'
  import { usePage } from '@inertiajs/vue3'
  
  const appName = computed(() => usePage().props.value.appName)
  
  const currrentTab = computed(() => usePage().url.value)
  
  const navigation = [
    { name: 'Dashboard', href: '/dashboard' },
    { name: 'Franchises', href: '/franchise/f1/drivers' },
    { name: 'Scoring Points / Rules', href: '/rules' }
  ]
</script>