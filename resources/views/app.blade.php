<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('favicon.png')}}" type="image/x-icon">

        <!-- Inertia Page Title -->
        <title inertia>{{ config('app.name') }}</title>

        <!-- OpenFantasyRacing Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    
    <body class="font-sans antialiased">
        @inertia
    </body>

    <script>
        (function (p, l, u, t, i, o) {
            p[t] = p[t] || function () {
            (p[t].q = p[t].q || []).push(arguments);
            };
            o = l.getElementsByTagName('head')[0];
            i = l.createElement('script');
            i.async = 1;
            i.src = u;
            o.appendChild(i);
        })(window, document, 'https://cdn.plutio.com/messenger/main.js', '$plutio_msg');

        $plutio_msg('TthCMKaeKajrXTYvq', { });
    </script>
</html>
