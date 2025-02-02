<x-primecore::section {{ $attributes }}>
    <x-slot:header>
        <x-primecore::stripes />
    </x-slot>
    {{ $slot }}
    <x-slot:footer>
        <x-primecore::stripes />
    </x-slot>
</x-primecore::section>
