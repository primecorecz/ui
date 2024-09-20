@props ([
    'metaTitle' => 'Page title',
    'metaDescription' => '',
    'metaKeywords' => '',
    'scripts' => null,
])
<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="{{ $metaDescription }}">
        <meta name="keywords" content="{{ $metaKeywords }}">

        <title>{{ $metaTitle }} | {{ config('app.name') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="https://fonts.bunny.net/css?family=piazzolla:400,700" />

        <link rel="icon" type="image/svg+xml" href="{{ url('/img/favicon.svg') }}">
        <link rel="icon" type="image/png" href="{{ url('/img/favicon.png') }}">

        @stack('head')
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-200 text-gray-700 antialiased">
        <div class="min-h-screen grid grid-rows-[auto,1fr,auto]">

            {{ $slot }}

            <x-primecore::container class="mt-8">
                <footer class="p-8 text-center text-gray-400 border-t border-gray-300">
                    {{ config('app.name') }} &copy; {{ date('Y') }} Všechna práva vyhrazena.
                </footer>
            </x-primecore::container>

        </div>
        @env('local')
            <x-primecore::breakpoints />
        @endenv
    </body>
</html>
