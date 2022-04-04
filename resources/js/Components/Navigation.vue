<template>
  <Disclosure as="nav" class="bg-gray-800" v-slot="{ open }">
    <div class="w-full mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
          <!-- Mobile menu button-->
          <DisclosureButton class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 
            hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
          >
            <span class="sr-only">Open main menu</span>
            <MenuIcon v-if="!open" class="block h-6 w-6" aria-hidden="true" />
            <XIcon v-else class="block h-6 w-6" aria-hidden="true" />
          </DisclosureButton>
        </div>
        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
          <div class="flex-shrink-0 flex items-center">
            <Link href="/">
              <!-- The Logo -->
              <p class="text-orange-600 font-semibold text-2xl" style="font-family: 'Bangers', cursive;">{{ appName }}</p>
              <!-- <img class="hidden lg:block h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg" alt="Workflow" /> -->
            </Link>
          </div>
          <div v-if="$page.props.auth.user" class="hidden sm:block sm:ml-6">
            <div class="flex space-x-4">
              <Link v-for="item in navigation" :key="item.name" :href="item.href" 
                :class="[item.current ? 'bg-gray-900 text-white' 
                : 'text-gray-300 hover:bg-gray-700 hover:text-white', 'px-3 py-2 rounded-md text-sm font-medium']" 
                :aria-current="item.current ? 'page' : undefined">{{ item.name }}
              </Link>
            </div>
          </div>
        </div>
        <div v-if="$page.props.auth.user" class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0 z-10">
          <!-- Profile dropdown -->
          <Menu as="div" class="ml-3 relative">
            <div>
              <MenuButton class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                <span class="sr-only">Open user menu</span>
                  <span v-if="$page.props.auth.user.profile_image === null" class="inline-block h-8 w-8 rounded-full overflow-hidden bg-gray-100">
                    <svg  class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                      <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                    </svg>
                  </span>

                  <span v-if="$page.props.auth.user.profile_image !== null" class="inline-block h-8 w-8 rounded-full overflow-hidden bg-gray-100">
                    <img :src="$page.props.auth.user.profile_image" class="h-full w-full text-gray-300">
                  </span>
              </MenuButton>
            </div>
            <transition enter-active-class="transition ease-out duration-100" 
              enter-from-class="transform opacity-0 scale-95" 
              enter-to-class="transform opacity-100 scale-100" 
              leave-active-class="transition ease-in duration-75" 
              leave-from-class="transform opacity-100 scale-100" 
              leave-to-class="transform opacity-0 scale-95"
            >
              <MenuItems class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                <MenuItem v-slot="{ active }">
                  <Link href="/profile" :class="[active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700']">Your Profile</Link>
                </MenuItem>
                <MenuItem v-slot="{ active }">
                  <Link href="#" :class="[active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700 w-full']">Settings</Link>
                </MenuItem>
                <MenuItem v-slot="{ active }">
                  <Link :href="route('logout')" method="post" :class="[active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm text-gray-700 w-full text-left']" as="button">Sign out</Link>
                </MenuItem>
              </MenuItems>
            </transition>
          </Menu>
          <button type="button" class="bg-gray-800 p-1 ml-4 rounded-full text-gray-400 
            hover:text-white focus:outline-none focus:ring-2 
            focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
          >
            <span class="sr-only">View notifications</span>
            <BellIcon class="h-6 w-6" aria-hidden="true" />
          </button>
        </div>

        <div v-else class="py-4 sm:block">
          <Link :href="route('login')" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
              Log in
          </Link>
          <Link :href="route('register')" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
              Register
          </Link>
        </div>
      </div>
    </div>

    <DisclosurePanel class="sm:hidden">
      <div class="px-2 pt-2 pb-3 space-y-1">
        <Link v-for="item in navigation" :key="item.name" as="a" :href="item.href" :class="[item.current 
          ? 'bg-gray-900 text-white' 
          : 'text-gray-300 hover:bg-gray-700 hover:text-white', 'block px-3 py-2 rounded-md text-base font-medium']" :aria-current="item.current 
          ? 'page' : undefined">{{ item.name }}
        </Link>
      </div>
    </DisclosurePanel>
  </Disclosure>
</template>

<script>
import { computed } from 'vue'
import { Disclosure, DisclosureButton, DisclosurePanel, Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue'
import { BellIcon, MenuIcon, XIcon } from '@heroicons/vue/outline'
import { usePage } from '@inertiajs/inertia-vue3'

const navigation = [
  { name: 'Dashboard', href: '/dashboard', current: true },
  // { name: 'Team', href: '#', current: false },
  { name: 'Rules', href: '/rules', current: false },
  // { name: 'Calendar', href: '#', current: false },
]

export default {

  components: {
    Disclosure,
    DisclosureButton,
    DisclosurePanel,
    Menu,
    MenuButton,
    MenuItem,
    MenuItems,
    BellIcon,
    MenuIcon,
    XIcon,
  },

  setup() {
    const appName = computed(() => usePage().props.value.appName)

    // const profilePhoto = usePage().props.auth.user.profile_image

    return {
      navigation,
      appName,
      // profilePhoto
    }
  },
}
</script>