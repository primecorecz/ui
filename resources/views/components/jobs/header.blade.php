@props([
    'title',
])

<header class="flex flex-wrap items-center justify-between p-8">
    <div>
        <div class="text-gray-400">Mohlo by vás zajímat...</div>
        <h2 class="mt-2 font-heading text-xl font-bold">{{ $title }} – doporučené pracovní nabídky</h2>
    </div>
    <div>
        <a href="https://personalka.cz/inzerce" class="leading-loose text-gray-400 underline">Inzerovat zde</a>
    </div>
</header>
