<template>
  <div class="max-w-7xl mx-auto my-8 py-6 px-6 mb-10">
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-xl font-semibold text-gray-900">
          Fantasy Teams
        </h1>
        <p class="mt-2 text-sm text-gray-700">
          A list of all the fantasy teams in your account.
        </p>
      </div>
      <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
        <Link href="/leagues/create">
          <button 
            type="button" 
            class="inline-flex items-center justify-center rounded-md border border-transparent bg-orange-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-gray-700 
                focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 sm:w-auto"
          >
            Create A New League
          </button>
        </Link>
      </div>
    </div>
    <div class="mt-8 flex flex-col">
      <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
          <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
            <div v-if="fantasy_teams.length === 0">
              <p class="whitespace-nowrap w-full bg-white mx-auto py-4 text-sm font-medium text-gray-900 sm:pl-6 text-center">
                Currently, you aren't part of any leagues. Maybe, you should create one?
              </p>
            </div> 
            
            <table v-if="fantasy_teams.length > 0" class="min-w-full divide-y divide-gray-300">
              <thead class="bg-gray-50 text-center">
                <tr>
                  <th class="py-3.5 pl-4 pr-3 text-sm font-semibold text-gray-900 sm:pl-6">
                    Fantasy Team Name
                  </th>
                  <th class="py-3.5 pl-4 pr-3 text-sm font-semibold text-gray-900 sm:pl-6">
                    League Name
                  </th>
                  <th class="px-3 py-3.5 text-sm font-semibold text-gray-900">
                    Franchise
                  </th>
                  <th class="px-3 py-3.5 text-sm font-semibold text-gray-900">
                    Points
                  </th>
                </tr>
              </thead>

              <tbody class="divide-y divide-gray-200 text-gray-500 bg-white text-center">
                <tr v-for="team in fantasy_teams" :key="team.id">
                  <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium sm:pl-6">
                     <Link 
                      class="text-blue-600"
                      :href="route('fantasy-team.show', [team.league_id, team.id] )"
                    >
                      {{ team.team_name }}
                     </Link>
                  </td>
                  <td class="whitespace-nowrap px-3 py-4 text-sm ">
                    <Link class="text-blue-600" 
                      :href="route('league.show', team.league_id)"
                    >
                      {{ team.league_name }}
                    </Link>
                    <!-- {{ team.league_name }} -->
                  </td>
                  <td class="whitespace-nowrap px-3 py-4 text-sm">
                    <Link class="text-blue-600" 
                      :href="route('driver.index', team.franchise_slug )"
                    >
                      {{ team.franchise_name }}
                    </Link>
                  </td>
                  <td class="whitespace-nowrap px-3 py-4 text-sm">
                    {{ team.points }}
                  </td>
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
  defineProps({
    fantasy_teams: Array
  })
</script>