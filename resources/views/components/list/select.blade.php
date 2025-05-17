<div {{ $attributes->class('rounded-sm bg-gray-100 p-8') }}>
    <select
        x-data="{
            slug: '',
        }"
        x-model="slug"
        x-on:change="window.location.replace(slug)"
        class="block w-full rounded-sm border border-gray-300 bg-white px-4 py-2 focus:border-accented focus:ring-3 focus:ring-accented/25"
    >
        {{ $slot }}
    </select>
</div>
