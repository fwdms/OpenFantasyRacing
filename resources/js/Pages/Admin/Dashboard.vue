<template>
  <Header title="Admin | Dashboard" />

  <PageHeader title="Dashboard" />

  <div class="mx-4 my-4">
    <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
      <div v-for="item in stats" :key="item.id" class="relative bg-white pt-5 px-4 pb-12 sm:pt-6 sm:px-6 shadow rounded-lg overflow-hidden">
        <dt>
          <div class="absolute bg-orange-500 rounded-md p-3">
            <component :is="item.icon" class="h-6 w-6 text-white" aria-hidden="true" />
          </div>
          <p class="ml-16 text-sm font-medium text-gray-500 truncate">
            {{ item.name }}
          </p>
        </dt>
        <dd class="ml-16 pb-6 flex items-baseline sm:pb-7">
          <p class="text-2xl font-semibold text-gray-900">
            {{ item.stat }}
          </p>
          <div class="absolute bottom-0 inset-x-0 bg-gray-50 px-4 py-4 sm:px-6">
            <div class="text-sm">
              <Link :href="route(item.link)" class="font-medium text-orange-600 hover:text-orange-500">
                View all
                <span class="sr-only">
                  {{ item.name }} stats
                </span>
              </Link>
            </div>
          </div>
        </dd>
      </div>
    </dl>
  </div>
</template>

<script setup>
  import PageHeader from '@/Shared/PageHeadings/PageHeader.vue'
  import { CursorClickIcon, MailOpenIcon, UsersIcon } from '@heroicons/vue/outline'

  const props = defineProps([
    'users',
    'franchises',
    'drivers',
    'events',
    'results',
    'fantasyTeams',
    'tracks'
  ])
  
  const stats = [
    { id: 1, name: 'Users', stat: props.users, icon: UsersIcon, link: 'admin.users.index'},
    { id: 2, name: 'Franchises', stat: props.franchises, icon: MailOpenIcon, link: 'admin.franchise.index' },
    { id: 3, name: 'Drivers', stat: props.drivers, icon: CursorClickIcon, link: 'admin.driver.index' },
    { id: 4, name: 'Events', stat: props.events, icon: CursorClickIcon, link: 'admin.events.index' },
    { id: 5, name: 'Results', stat: props.results, icon: CursorClickIcon, link: 'admin.results.index' },
    { id: 6, name: 'Fantasy Teams', stat: props.fantasyTeams, icon: CursorClickIcon, link: 'admin.results.index' },
    { id: 7, name: 'Tracks', stat: props.tracks, icon: CursorClickIcon, link: 'admin.tracks.index' },
  ]
</script>

<script>
  import Admin from '@/Layouts/Admin.vue'

  export default {
    layout: Admin,
  }
</script>
