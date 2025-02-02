<a
    {{
        $attributes->class([
            'inline-block px-4 py-4 md:px-8 lg:px-12 lg:py-6',
            'text-sm font-bold md:text-base lg:text-lg',
            'transition-color duration-500 ease-in-out',
        ])
    }}
>
    {{ $slot }}
</a>
