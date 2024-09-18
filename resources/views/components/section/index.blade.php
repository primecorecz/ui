@props([
    'header' => null,
    'footer' => null,
])
<section {{ $attributes->class('bg-white rounded shadow-xl overflow-hidden') }}>

    {{ $header }}

    <main class="m-4 lg:m-8 xl:m-16">
        {{ $slot }}
    </main>

    {{ $footer }}

</section>
