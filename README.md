## Install

```
composer require primecorecz/ui
```

## Install Tailwind
https://tailwindcss.com/docs/guides/laravel

## Install Tailwind plugins
```
npm install -D @tailwindcss/forms \
    @tailwindcss/typography \
    @tailwindcss/container-queries
```

## Update tailwind.config.js

```
const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    content: [
        "./app/View/**/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./vendor/primecorecz/ui/resources/**/*.blade.php",
        "./vendor/primecorecz/ui/src/View/**/*.php",
    ],
    theme: {
        extend: {
            colors: {
                accented: colors.blue['500'], // Set your preffered color here
            },
            fontFamily: {
                heading: ['Piazzolla', ...defaultTheme.fontFamily.serif],
            },
            backgroundImage: {
                'gradient-stripes': `repeating-linear-gradient(75deg,
                    var(--tw-gradient-from),
                    var(--tw-gradient-from) 1rem,
                    var(--tw-gradient-to) 1rem,
                    var(--tw-gradient-to) 1.5rem)`,
            },
        },
    },
    plugins: [
        require("@tailwindcss/forms"),
        require('@tailwindcss/typography'),
        require('@tailwindcss/container-queries'),
    ],
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
