<div {{ $attributes->class('p-8 bg-gray-100 rounded') }}>
    <select
        x-data="{
            slug: ''
        }"
        x-model="slug"
        x-on:change="window.location.replace(slug)"
        class="block w-full py-2 px-4 border border-gray-300 rounded bg-white
            focus:border-accented focus:ring focus:ring-accented focus:ring-opacity-25"
    >{{ $slot }}</select>
</div>
