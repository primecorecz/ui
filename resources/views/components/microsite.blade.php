@props([
    'title',
    'url',
])
<div
    x-data="{ open: () => window.open('{{ $url }}', '_blank') }"
    x-on:click="open"
    class="w-full max-w-96 cursor-pointer space-y-4 rounded-xl p-4 text-center transition-colors hover:bg-gray-100 md:max-lg:w-80"
>
    <div
        {{ $icon->attributes->class(['mx-auto flex size-12 items-center justify-center rounded-xl bg-linear-to-br text-xl font-bold text-white']) }}
    >
        {{ $icon }}
    </div>

    <h2 class="text-xl font-bold">
        <a href="{{ $url }}" target="_blank">{{ $title }}</a>
    </h2>

    <div class="text-balance text-gray-400">
        {{ $slot }}
    </div>
</div>
