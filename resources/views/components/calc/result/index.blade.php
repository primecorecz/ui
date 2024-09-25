@props([
    'title',
    'disclaimer',
    'credits',
])

<div class="border-2 border-accented bg-white rounded">
    <div class="m-1 py-6 px-2 flex items-center gap-4 bg-gray-100 rounded-sm">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="flex-shrink-0 -mt-1 h-[4.5rem] text-gray-300">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V13.5zm0 2.25h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V18zm2.498-6.75h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V13.5zm0 2.25h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V18zm2.504-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zm0 2.25h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V18zm2.498-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zM8.25 6h7.5v2.25h-7.5V6zM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 002.25 2.25h10.5a2.25 2.25 0 002.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0012 2.25z" />
        </svg>
        @if ($title instanceof Illuminate\View\ComponentSlot)
            {{ $title }}
        @else
            <div class="text-lg sm:text-2xl font-medium">{{ $title }}</div>
        @endif
    </div>
    <div class="m-4 sm:m-6">
        {{ $slot }}
        <div class="mt-4 sm:m-6 px-2 text-sm italic text-center text-balance text-gray-400">
            {{ $disclaimer }}
        </div>
    </div>
    <div class="m-1 py-4 px-8 flex flex-wrap justify-center items-center gap-y-2 gap-x-4 bg-gray-100 rounded-sm">
        <span class="text-center">{{ $credits }}</span>
        <a href="{{ url('https://personalka.cz') }}" target="_blank">
            <x-primecore::logo.blue class="h-6" />
        </a>
    </div>
</div>
