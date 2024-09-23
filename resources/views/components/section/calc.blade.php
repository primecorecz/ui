@props([
    'header' => null, // null -> stripes, false -> no header, anything else -> render
    'footer' => null,
])
<section {{ $attributes->class('bg-gray-50 rounded shadow-xl overflow-hidden') }}>

    @if ($header === null)
        <x-primecore::stripes />
    @elseif ($header !== false)
        {{ $header }}
    @endif

    <main class="m-4 sm:m-8 xl:m-16">
        {{ $slot }}
    </main>

    @if ($footer === null)
        <x-primecore::stripes />
    @elseif ($footer !== false)
        {{ $header }}
    @endif

</section>
