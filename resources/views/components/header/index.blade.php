@props([
    'name' => null,
    'suffix' => null,
    'slogan' => null,
])
<header {{ $attributes->class('bg-gradient-to-br') }}>

    @if ($slot->isNotEmpty())
        {{ $slot }}
    @else
        <x-primecore::header.ribbon />
        <x-primecore::header.container>
            <x-primecore::header.hero />
        </x-primecore::header.container>
    @endif

</header>
