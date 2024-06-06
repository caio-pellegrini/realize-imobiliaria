<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $titulo }}</title>

        @vite('resources/css/app.css')

        <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    </head>

    <body class="antialiased">
        @include('components.navigation')

        <main>
            {{ $slot }}
        </main>

        <!--@include('components.footer')-->
    </body>
</html>
