<ul {{ $attributes->class([
    'leading-loose',
    'columns-1 md:columns-2 lg:columns-3 2xl:columns-4' => ! str($attributes->get('class'))->contains('columns-'),
]) }}>
    {{ $slot }}
</ul>
