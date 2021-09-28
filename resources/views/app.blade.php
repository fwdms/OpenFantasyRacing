<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="{{ asset('js/main.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>{{ env('APP_NAME') }}</title>
    </head>
    <body>
        <div id="app">
            <app />
        </div>
    </body>
</html>
