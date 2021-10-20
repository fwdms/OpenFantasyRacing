<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased">

    <header class='flex items-center justify-between px-8 py-4'> 
        <a href="{{ route('dashboard') }}">{{ env('APP_NAME') }}</a>
        @if (Route::has('login') && Auth::check())
            <div class="top-right links">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>
            </div>

        @elseif (Route::has('login') && !Auth::check())
            <div class="top-right links">
                <a class="px-2" href="{{ url('/register') }}">Register</a>
                <a class="px-2" href="{{ url('/login') }}">Login</a>
            </div>
        @endif
    </header>

    <div class="min-h-screen bg-gray-900">
        <main>
            {{ $slot }}
        </main>
    </div>
</body>
</html>