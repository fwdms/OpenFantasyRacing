<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-center text-2xl pb-4">My Leagues</h2>

                    <div class="flex justify-center align-center">
                        @if(count($leagues) < 1)
                            <p class="text-center">You aren't part of any leagues.
                                <a class="text-blue-600 text-center" href="{{ route('league.create') }}">Create one?</a>
                            </p>
                        @else
                            @foreach($leagues as $league)
                                <a href="{{ route('league.show', $league->id) }}">{{ $league->name }}</a>
                            @endforeach
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-center text-2xl pb-4">My Fantasy Teams</h2>

                    <div class="flex justify-center align-center">
                        @if(count($fantasy_teams) < 1)
                            <p class="text-center">You don't have any fantasy teams.</p>
                        @else
                            @foreach($fantasy_teams as $team)
                                <p class="">{{ $team->team_name }}</p>
                            @endforeach
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
