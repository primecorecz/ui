@props([
    'name',
    'suffix',
    'slogan',
])
@aware([
    'name',
    'suffix',
    'slogan',
])
@php
    $name ??= str(config('app.name'))->before('.cz');
    $suffix ??='.cz'
@endphp
<div {{ $attributes->class('flex flex-col lg:flex-row gap-y-4 gap-x-8 items-center font-heading text-white') }}>
    <a href="/" @class([
        'text-4xl sm:text-5xl md:text-6xl font-bold',
        'lg:pr-8 lg:pb-2 lg:border-r-2 border-white' => !! $slogan
    ])>
        {{ $name }}@if ($suffix)<span class="opacity-50">{{ $suffix }}</span>@endif
    </a>
    <span class="text-xl sm:text-2xl text-center">
        {{ $slogan }}
    </span>
</div>
