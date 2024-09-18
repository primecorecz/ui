<x-primecore::section {{ $attributes }}>
    <x-slot:header>
        <x-primecore::stripes />
    </x-slot:header>
    {{ $slot }}
    <x-slot:footer>
        <x-primecore::stripes />
    </x-slot:footer>
</x-primecore::section>
