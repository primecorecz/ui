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
    	 ...,
        "./vendor/primecorecz/ui/resources/**/*.blade.php",
        "./vendor/primecorecz/ui/src/View/**/*.blade.php",
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
<x-primecore::layout metaTitle="Set page title here ...">

    <x-primecore::header
        slogan="Set slogan here ..."
        class="pb-16 from-blue-500 to-blue-800"
    />

    <x-primecore::container class="-mt-16">

        <x-primecore::section.stripes class="!bg-gray-50">
            {{ $slot }}
        </x-primecore::section.stripes>

        <x-primecore::section class="mt-8">
            Lorem ipsum ...
        </x-primecore::section>

    </x-primecore::container>

</x-primecore::layout>
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
