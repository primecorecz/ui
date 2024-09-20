@props([
    'name' => str(config('app.name'))->before('.cz'),
    'slogan',
])
<header {{ $attributes->class('bg-gradient-to-br') }}>

    <x-primecore::header.ribbon />

    <div class="md:min-h-[20rem] grid place-content-center">
        <div class="my-8 mx-4 flex flex-col lg:flex-row gap-y-4 gap-x-8 items-center font-heading text-white">
            <a href="/" class="lg:pr-8 lg:pb-2 lg:border-r-2 border-white text-4xl sm:text-5xl md:text-6xl font-bold">
                {{ $name }}<span class="opacity-50">.cz</span>
            </a>
            <span class="text-xl sm:text-2xl text-center">
                {{ $slogan }}
            </span>
        </div>
    </div>

</header>
