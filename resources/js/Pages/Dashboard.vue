<template>
  <Header title='Dashboard' />
  
  <PageHeader title='Dashboard' />
  
  <Table :headers='headers'>
    <template v-slot:top>
      <div class='mx-auto my-4 mx-6'>
        <div class='sm:flex sm:items-center'>
          <div class='sm:flex-auto px-2'>
            <h1 class='text-xl font-semibold text-gray-900'>
              Fantasy Teams
            </h1>
            <p class='mt-2 text-sm text-gray-700'>
              A list of all the fantasy teams in your account.
            </p>
          </div>
          <div class='mt-4 sm:mt-0 sm:ml-16 sm:flex-none'>
            <Link href="route('league.create')">
              <button
                type='button'
                class='inline-flex items-center justify-center rounded-md border border-transparent bg-orange-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-gray-700
                focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-offset-2 sm:w-auto'
              >
                Create A New League
              </button>
            </Link>
          </div>
        </div>
        
        <div v-if='fantasy_teams.length === 0'>
          <p
            class='whitespace-nowrap w-full bg-white mx-auto py-4 text-sm font-medium text-gray-900 sm:pl-6 text-center'>
            Currently, you aren't part of any leagues. Maybe, you should create one?
          </p>
        </div>
      </div>
    </template>
    
    <tr class='text-center' v-for='team in fantasy_teams' :key='team.id'>
      <td class='whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium sm:pl-6'>
        <Link
          class='text-blue-600'
          :href="route('fantasy-team.show', [team.league_id, team.id] )"
        >
          {{ team.team_name }}
        </Link>
      </td>
      <td class='whitespace-nowrap px-3 py-4 text-sm '>
        <Link class='text-blue-600'
              :href="route('league.show', team.league_id)"
        >
          {{ team.league_name }}
        </Link>
        <!-- {{ team.league_name }} -->
      </td>
      <td class='whitespace-nowrap px-3 py-4 text-sm'>
        <Link class='text-blue-600'
              :href="route('driver.index', team.franchise_slug )"
        >
          {{ team.franchise_name }}
        </Link>
      </td>
      <td class='whitespace-nowrap px-3 py-4 text-sm'>
        {{ team.points }}
      </td>
    </tr>
  </Table>
</template>

<script setup>
  import PageHeader from '@/Components/PageHeadings/PageHeader.vue'
  import Table from '@/Components/Tables/Table.vue'
  
  defineProps({
    title: String,
    description: String,
    rules: Array,
    fantasy_teams: Array
  })
  
  const headers = [
    'Fantasy Team Name',
    'League Name',
    'Franchise',
    'Points'
  ]
  
  const pages = [
    { name: 'Dashboard', href: '/dashboard', current: true }
  ]
</script>