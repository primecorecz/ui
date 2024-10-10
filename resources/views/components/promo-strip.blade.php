<div {{ $attributes->class([
    'p-4 lg:p-8 bg-accented bg-gradient-to-tl rounded',
    'mt-8 xl:mt-16' => ! str($attributes->get('class'))->contains('mt-'),
]) }}>
    <div class="prose prose-sm lg:prose-base max-w-none prose-invert prose-li:marker:text-white/50 mx-auto text-white/95">
        {{ $slot }}
    </div>
</div>
