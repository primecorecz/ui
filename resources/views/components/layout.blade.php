@props([
    'metaTitle' => 'Page title',
    'metaDescription' => '',
    'metaKeywords' => '',
    'footer' => null,
])
<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="{{ $metaDescription }}" />
        <meta name="keywords" content="{{ $metaKeywords }}" />

        <title>{{ $metaTitle }} | {{ config('app.name') }}</title>

        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "WebSite",
                "name": "{{ config('app.name') }}",
                "url": "{{ config('app.url') }}"
            }
        </script>

        <link rel="preconnect" href="https://fonts.bunny.net" />
        <link rel="stylesheet" href="https://fonts.bunny.net/css?family=piazzolla:400,700" />

        <link rel="icon" type="image/svg+xml" href="{{ url('/img/favicon.svg') }}" />
        <link rel="icon" type="image/png" href="{{ url('/img/favicon.png') }}" />

        <livewire:styles />

        @stack('head')
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-200 text-gray-700 antialiased">
        <div class="grid min-h-screen grid-rows-[auto_1fr_auto]">
            {{ $slot }}

            <x-primecore::container class="mt-8">
                <footer class="border-t border-gray-300 p-8 text-center text-gray-400">
                    @if ($footer instanceof Illuminate\View\ComponentSlot)
                        {{ $footer }}
                    @else
                        <span class="inline-block">
                            {{ config('app.name') }} &copy; {{ date('Y') }} Všechna práva vyhrazena. Web provozuje
                        </span>
                        <a href="{{ url('/kontakt') }}" class="inline-block underline">Primecore s.r.o.</a>
                        <span class="inline-block">
                            {{-- format-ignore-start --}}
                            (<a href="https://primecore.cz/reference" class="underline" target="_blank">reference a zkušenosti</a>)
                            {{-- format-ignore-end --}}
                        </span>
                    @endif
                </footer>
            </x-primecore::container>
        </div>
        @env('local')
            <x-primecore::breakpoints />
        @endenv

        <livewire:scripts />
    </body>
</html>
