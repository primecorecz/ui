@props([
    'header' => null,
    'footer' => null,
])
<section {{ $attributes->class('overflow-hidden rounded-sm bg-white shadow-xl') }}>
    {{ $header }}

    <main class="m-8 xl:m-16">
        {{ $slot }}
    </main>

    {{ $footer }}
</section>
