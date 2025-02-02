<div
    {{
        $attributes->class([
            'bg-accented rounded-sm bg-linear-to-tl p-4 lg:p-8',
            'mt-8 xl:mt-16' => ! str($attributes->get('class'))->contains('mt-'),
        ])
    }}
>
    <div
        class="prose prose-sm lg:prose-base prose-invert prose-li:marker:text-white/50 mx-auto max-w-none text-white/95"
    >
        {{ $slot }}
    </div>
</div>
