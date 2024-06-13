<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $titulo }}</title>

    @vite('resources/css/app.css')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.14.0/cdn.js"
        integrity="sha512-z6F6XBybddChHDc/36z8WZzvOW8pdlUKne6R5E7PGIo7v9S8AZF8vlhm2hbiAAjKpKbfO9K8Yer0w6U1xYsQjQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>
    <script src="https://kit.fontawesome.com/9e7ee59099.js" crossorigin="anonymous" defer></script>


    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body class="antialiased">
    @include('components.navigation')

    <main>
        {{ $slot }}
    </main>

    <x-whastapp-btn></x-whastapp-btn>

    @include('components.footer')

    
</body>

</html>
