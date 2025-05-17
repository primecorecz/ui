<div
    {{
        $attributes->class([
            'rounded-sm bg-accented bg-linear-to-tl p-4 lg:p-8',
            'mt-8 xl:mt-16' => ! str($attributes->get('class'))->contains('mt-'),
        ])
    }}
>
    <div
        class="mx-auto prose prose-sm max-w-none text-white/95 prose-invert lg:prose-base prose-li:marker:text-white/50"
    >
        {{ $slot }}
    </div>
</div>
