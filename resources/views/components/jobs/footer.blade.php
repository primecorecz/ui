@props([
    'title',
    'personalkaUrl',
])

<footer>
    <a href="{{ $personalkaUrl }}" {{ $attributes->class([
        'block',
        'transition duration-150 ease-in-out'
    ]) }}>
        <div class="p-8 pr-4 md:pr-8 flex items-center">
            <div class="min-w-0 flex-1 sm:flex sm:items-center sm:justify-between">
                <div>
                    <div class="text-base leading-5 font-medium">
                        {{ $title }} &ndash; další pracovní nabídky
                    </div>
                </div>
            </div>
            <div class="ml-5 flex-shrink-0">
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
            </div>
        </div>
    </a>
</footer>
