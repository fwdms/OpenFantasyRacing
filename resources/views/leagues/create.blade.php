<x-app-layout>
    <div>
        <h1 class="text-white text-2xl text-center py-6">
            Create a League
        </h1>

        @if ($errors->any())
            <div class="bg-white mx-16 my-8 rounded px-8 py-8">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-red-600 text-center">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('leagues.store') }}" class="bg-white mx-16 rounded px-8 py-8 flex flex-col items-center justify-center">
            @csrf
            <div class="mb-8">                
                <label for="franchise_type">Franchise : </label>
                <select class="rounded" name='franchise_id'>
                    @foreach($franchises as $franchise)
                        <option value="{{ $franchise->id }}">{{ $franchise->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="name">League Name : </label>
                <input class="rounded mx-4" type="text" name="name"></input>
            </div>

            <button class="bg-blue-400 text-white rounded px-4 py-2 mx-4 mt-8" type="submit">Create League</button
        </form>
    </div>
</x-app-layout>