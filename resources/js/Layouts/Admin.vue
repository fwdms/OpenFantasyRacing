<template>
  <div class="h-full bg-gray-100">
    <body class="h-full">
      <TransitionRoot
          as="template"
          :show="sidebarOpen"
      >
        <Dialog
            as="div"
            class="relative z-40 md:hidden"
            @close="sidebarOpen = false"
        >
          <TransitionChild
              as="template"
              enter="transition-opacity ease-linear duration-300"
              enter-from="opacity-0"
              enter-to="opacity-100"
              leave="transition-opacity ease-linear duration-300"
              leave-from="opacity-100"
              leave-to="opacity-0"
          >
            <div class="fixed inset-0 bg-gray-600 bg-opacity-75"/>
          </TransitionChild>

          <div class="fixed inset-0 z-40 flex">
            <TransitionChild
                as="template"
                enter="transition ease-in-out duration-300 transform"
                enter-from="-translate-x-full"
                enter-to="translate-x-0"
                leave="transition ease-in-out duration-300 transform"
                leave-from="translate-x-0"
                leave-to="-translate-x-full"
            >
              <DialogPanel
                  class="relative flex flex-col flex-1 w-full max-w-xs bg-gray-800"
              >
                <TransitionChild
                    as="template"
                    enter="ease-in-out duration-300"
                    enter-from="opacity-0"
                    enter-to="opacity-100"
                    leave="ease-in-out duration-300"
                    leave-from="opacity-100"
                    leave-to="opacity-0"
                >
                  <div class="absolute top-0 right-0 pt-2 -mr-12">
                    <button
                        type="button"
                        class="flex items-center justify-center w-10 h-10 ml-1 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        @click="sidebarOpen = false"
                    >
                      <span class="sr-only">Close sidebar</span>
                      <XMarkIcon
                          class="w-6 h-6 text-white"
                          aria-hidden="true"
                      />
                    </button>
                  </div>
                </TransitionChild>
                <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
                  <div class="flex items-center flex-shrink-0 px-4">
                    <p
                        class="mx-auto text-2xl font-semibold text-orange-600"
                        style="font-family: 'Bangers', cursive"
                    >
                      OFR Admin
                    </p>
                  </div>
                  <nav class="px-2 mt-5 space-y-1">
                    <a
                        v-for="item in navigation"
                        :key="item.name"
                        :href="item.href"
                        :class="[
                          item.current
                            ? 'bg-gray-900 text-white'
                            : 'text-gray-300 hover:bg-gray-700 hover:text-white',
                          'group flex items-center px-2 py-2 text-base font-medium rounded-md',
                        ]"
                    >
                      <component
                          :is="item.icon"
                          :class="[
                            item.current
                              ? 'text-gray-300'
                              : 'text-gray-400 group-hover:text-gray-300',
                            'mr-4 flex-shrink-0 h-6 w-6',
                          ]"
                          aria-hidden="true"
                      />
                      {{ item.name }}
                    </a>
                  </nav>
                </div>
                <div class="flex flex-shrink-0 p-4 bg-gray-700">
                  <a
                      href="#"
                      class="flex-shrink-0 block group"
                  >
                    <div class="flex items-center">
                      <div>
                        <img
                            class="inline-block w-10 h-10 rounded-full"
                            :src="authUser.profile_image"
                            alt=""
                        />
                      </div>
                      <div class="ml-3">
                        <p class="text-base font-medium text-white">
                          {{ authUser.first_name }} {{ authUser.last_name }}
                        </p>
                      </div>
                    </div>
                  </a>
                </div>
              </DialogPanel>
            </TransitionChild>
            <div class="flex-shrink-0 w-14">
              <!-- Force sidebar to shrink to fit close icon -->
            </div>
          </div>
        </Dialog>
      </TransitionRoot>

      <!-- Static sidebar for desktop -->
      <div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
        <!-- Sidebar component, swap this element with another sidebar if you like -->
        <div class="flex flex-col flex-1 min-h-0 bg-gray-800">
          <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
            <div class="flex items-center flex-shrink-0 px-4">
              <p
                  class="mx-auto font-semibold text-orange-600 sm:text-xl md:text-2xl"
                  style="font-family: 'Bangers', cursive"
              >
                OFR Admin
              </p>
            </div>
            <nav class="flex-1 px-2 mt-5 space-y-1">
              <Link
                  v-for="item in navigation"
                  :key="item.name"
                  :href="item.href"
                  :class="[
                    item.current
                      ? 'bg-gray-900 text-white'
                      : 'text-gray-300 hover:bg-gray-700 hover:text-white',
                    'group flex items-center px-2 py-2 text-sm font-medium rounded-md',
                  ]"
              >
                <component
                    :is="item.icon"
                    :class="[
                      item.current
                        ? 'text-gray-300'
                        : 'text-gray-400 group-hover:text-gray-300',
                      'mr-3 flex-shrink-0 h-6 w-6',
                    ]"
                    aria-hidden="true"
                />
                {{ item.name }}
              </Link>
            </nav>
          </div>
          <div class="p-4 bg-gray-700">
            <a
                href="#"
                class="flex-shrink-0 block w-full group"
            >
              <div class="flex items-center">
                <img
                    class="rounded-full h-9 w-9"
                    :src="authUser.profile_image"
                    :alt="authUser.first_name + ' ' + authUser.last_name"
                />
                <div class="ml-3">
                  <p class="text-sm font-medium text-white">
                    {{ authUser.first_name }} {{ authUser.last_name }}
                  </p>
                  <!-- <p class="text-xs font-medium text-gray-300 group-hover:text-gray-200">View profile</p> -->
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="flex flex-col flex-1 md:pl-64">
        <div
            class="sticky top-0 z-10 pt-1 pl-1 bg-gray-100 md:hidden sm:pl-3 sm:pt-3"
        >
          <button
              type="button"
              class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
              @click="sidebarOpen = true"
          >
            <span class="sr-only"> Open sidebar </span>

            <Bars3Icon
                class="w-6 h-6"
                aria-hidden="true"
            />
          </button>
        </div>
        <main class="h-full bg-gray-100">
          <slot/>
        </main>
      </div>
    </body>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import { router, usePage } from '@inertiajs/vue3'
import {
  Dialog,
  DialogPanel,
  TransitionChild,
  TransitionRoot,
} from '@headlessui/vue'
import {
  AdjustmentsHorizontalIcon,
  BookOpenIcon,
  BriefcaseIcon,
  GlobeAltIcon,
  HomeIcon,
  IdentificationIcon,
  Bars3Icon,
  TicketIcon,
  UserGroupIcon,
  UsersIcon,
  XMarkIcon,
} from '@heroicons/vue/24/outline'

const navigation = ref([])
const sidebarOpen = ref(false)

const authUser = usePage.props.auth.user

router.on('navigate', event => {
  navigation.value = [
    {
      name: 'Dashboard',
      href: route('admin.dashboard.index'),
      icon: HomeIcon,
      current: route().current('admin.dashboard.*'),
    },
    {
      name: 'Franchises',
      href: route('admin.franchise.index'),
      icon: BriefcaseIcon,
      current: route().current('admin.franchise.*'),
    },
    {
      name: 'Teams',
      href: route('admin.constructor.index'),
      icon: UserGroupIcon,
      current: route().current('admin.constructor.*'),
    },
    {
      name: 'Drivers',
      href: route('admin.driver.index'),
      icon: IdentificationIcon,
      current: route().current('admin.driver.*'),
    },
    {
      name: 'Tracks',
      href: route('admin.tracks.index'),
      icon: GlobeAltIcon,
      current: route().current('admin.tracks.*'),
    },
    {
      name: 'Events',
      href: route('admin.events.index'),
      icon: TicketIcon,
      current: route().current('admin.events.*'),
    },
    {
      name: 'Results',
      href: route('admin.results.index'),
      icon: BookOpenIcon,
      current: route().current('admin.results.*'),
    },
    {
      name: 'Users',
      href: route('admin.users.index'),
      icon: UsersIcon,
      current: route().current('admin.users.*'),
    },
    {
      name: 'UI Test',
      href: route('admin.ui.test'),
      icon: AdjustmentsHorizontalIcon,
      current: route().current('admin.ui.test'),
    },
  ]
})
</script>
