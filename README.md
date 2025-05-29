## Install

```
composer require primecorecz/ui
```

## Install Tailwind
https://tailwindcss.com/docs/guides/laravel

## Install Tailwind plugins
```
npm install -D tailwindcss \
    @tailwindcss/vite \
    @tailwindcss/forms \
    @tailwindcss/typography
```

## Update postcss.config.js

```
export default {
    plugins: {
        '@tailwindcss/postcss': {},
    },
};
```

## Update vite.config.js

```
import { defineConfig } from 'vite';
import tailwindcss from '@tailwindcss/vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        tailwindcss(),
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
```

## Update ./resources/css/app.css

```
@import url('../../vendor/primecorecz/ui/resources/css/app.css');

@theme {
    --color-accented: var(--color-lime-500);
}
```

## Example usage

### Base layout component

```
<x-primecore::layout
    :$metaTitle
    :$metaDescription
    :$metaKeywords
>

    <x-primecore::header
        slogan="Set slogan here ..."
        class="pb-16 from-blue-500 to-blue-800"
    />

    {{-- OR --}}

    <x-primecore::header class="pb-16 from-blue-500 to-blue-800">
        <x-primecore::header.ribbon/>
        <x-primecore::header.container>
            <x-primecore::header.hero
                name="WebsiteName"
                suffix=".cz"
                slogan="Set slogan here ..."
            />
        </x-primecore::header.container>
    </x-primecore::header>

    <x-primecore::container class="-mt-16">

        <x-primecore::section.calc>
            {{ $slot }}
        </x-primecore::section.calc>

        <x-primecore::section class="mt-8">
            Lorem ipsum ...
        </x-primecore::section>

    </x-primecore::container>

</x-primecore::layout>
```

## Tabs

```
@props ([
    'active',
])

<x-primecore::tabs>

    <x-primecore::tabs.item href="..." @class($active == 'position'
        ? 'bg-white text-gray-700'
        : 'bg-orange-400 hover:bg-orange-200 text-orange-700 hover:text-gray-600'
    )>
        Lorem
    </x-primecore::tabs.item>

    <x-primecore::tabs.item href="..." @class($active == 'area'
        ? 'bg-white text-gray-700'
        : 'bg-orange-400 hover:bg-orange-200 text-orange-700 hover:text-gray-600'
    )>
        Ipsum
    </x-primecore::tabs.item>

</x-primecore::tabs>

```


### Calc

```
<x-primecore::calc>

    <x-slot:input>

        <x-primecore::calc.input>

            <x-primecore::calc.input.tile>
                <x-primecore::calc.input.tile.label>...</x-primecore::calc.input.tile.label>
                <div>...</div>
            </x-primecore::calc.input.tile>

            <x-primecore::calc.input.tile.inline>
                <x-primecore::calc.input.tile.label>...</x-primecore::calc.input.tile.label>
                <input type="checkbox" ...>
            </x-primecore::calc.input.tile.inline>

        </x-primecore::calc.input>

    </x-slot:input>

    <x-slot:result>

        <x-primecore::calc.result
            title="Výpočet "
            disclaimer="Jedná se o orientační výpočet. Provozovatel neručí za jeho správnost."
            credits="Kalkulačku vám přináší"
        >
            <x-primecore::calc.result.table>
                <tr>
                    <td>...</td>
                    <td>...</td>
                </tr>
                ...
            </x-primecore::calc.result.table>
        </x-primecore::calc.result>

    </x-slot:result>

</x-primecore::calc>
```

## Lists

```
<x-primecore::list.container>

    <x-primecore::list.select>
        <option disabled="disabled" value="">Vyberte profesi</option>
        @foreach ($positions as $position)
            <option value="{{ "pozice/{$position->slug}" }}">{{ $position->title }}</option>
        @endforeach
    </x-primecore::list.select>

    <x-primecore::stripes/>

    @foreach ($positionGroups as $groupTitle => $positions)
        <x-primecore::list.group>

            <x-primecore::list.group.title>
                {{ $groupTitle }}
            </x-primecore::list.group.title>

            <x-primecore::list.items>
                @foreach ($positions as $position)
                    <li>...</li>
                @endforeach
            </x-primecore::list.items>

        </x-primecore::list.group>
    @endforeach

</x-primecore::list.container>
```

## Personalka Job Offers

```
<x-primecore::jobs>
    <x-primecore::jobs.header
        :$title
    />
    <x-primecore::jobs.offers
        :$jobs
        class="text-orange-800"
    />
    <x-primecore::jobs.footer
        :$title
        :$personalkaUrl
        class="text-orange-800 border-orange-200 bg-orange-100 hover:bg-orange-50 focus:outline-none focus:bg-orange-50"
    />
</x-primecore::jobs>
```

## About page template

```
<x-primecore::page.about>
    <h1>...</h1>
    <p class="lead">
        ...
    </p>

    <x-slot:microsites>
        <x-primecore::microsite title="DůchodovýVěk.cz" url="https://duchodovyvek.cz">
            <x-slot:icon class="from-teal-600 to-teal-500">DV</x-slot>
            Vše, co potřebujete znát o vašem odchodu do důchodu
        </x-primecore::microsite>
        ...
    </x-slot:microsites>
</x-primecore::page.about>
```
