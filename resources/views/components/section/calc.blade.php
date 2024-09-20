
<section {{ $attributes->class('bg-gray-50 rounded shadow-xl overflow-hidden') }}>

    <x-primecore::stripes />

    <main class="m-4 sm:m-8 xl:m-16">
        {{ $slot }}
    </main>

    <x-primecore::stripes />

</section>
