@props([
    'header' => null,
    'footer' => null,
])
<section {{ $attributes->class('bg-gray-50 rounded shadow-xl overflow-hidden') }}>

    @if ($header)
        {{ $header }}
    @else
        <x-primecore::stripes />
    @endif

    <main class="m-4 sm:m-8 xl:m-16">
        {{ $slot }}
    </main>

    @if ($footer)
        {{ $footer }}
    @else
        <x-primecore::stripes />
    @endif

</section>
