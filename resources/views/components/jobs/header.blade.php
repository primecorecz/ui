@props(['title'])

<header class="p-8 flex flex-wrap justify-between items-center">
    <div>
        <div class="text-gray-400">
            Mohlo by vás zajímat...
        </div>
        <h2 class="mt-2 text-xl font-heading font-bold">
            {{ $title }} – doporučené pracovní nabídky
        </h2>
    </div>
    <div>
        <a href="https://personalka.cz/inzerce" class="leading-loose underline text-gray-400">Inzerovat zde</a>
    </div>
</header>
