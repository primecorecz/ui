@props([
    'header' => null,
    //null->stripes,
    false->noheader,
    anythingelse->render'footer' => null,
])
<section {{ $attributes->class('overflow-hidden rounded-sm bg-gray-50 shadow-xl') }}>
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
