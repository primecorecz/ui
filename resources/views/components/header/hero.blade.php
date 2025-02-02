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
<div {{ $attributes->class('font-heading flex flex-col items-center gap-x-8 gap-y-4 text-white lg:flex-row') }}>
    <a href="/" @class([
        'text-4xl font-bold sm:text-5xl md:text-6xl',
        'border-white lg:border-r-2 lg:pb-2 lg:pr-8' => !! $slogan
    ])>
        {{ $name }}@if ($suffix)<span class="opacity-50">{{ $suffix }}</span>@endif
    </a>
    <span class="text-xl sm:text-2xl text-center">
        {{ $slogan }}
    </span>
</div>
