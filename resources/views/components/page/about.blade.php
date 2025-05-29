<x-primecore::section.stripes {{ $attributes->class('bg-gray-50!') }}>
    <div class="mx-auto prose prose-headings:font-heading">
        {{ $slot }}

        <h2>Co děláme:</h2>
        <p>
            Provozujeme pracovní portál
            <a href="https://personalka.cz">Personálka.cz</a>
            a tematické microsites. Přinášíme obsah, který pomáhá lidem orientovat se v pracovních tématech. Spojujeme
            svět náboru do funkčních řešení pro firmy i jednotlivce.
        </p>

        <h2>Naše projekty:</h2>
        <p>Kromě {{ config('app.name') }} vznikají pod hlavičkou Primecore s.r.o. i další úspěšné weby:</p>
    </div>

    <div
        class="mx-auto my-8 grid max-w-5xl grid-cols-1 justify-items-center gap-4 rounded-2xl bg-white p-4 lg:grid-cols-3"
    >
        {{ $microsites }}
    </div>

    <div class="mx-auto prose">
        <p>
            Každý z těchto projektů má své zaměření, ale spojuje je snaha zpřístupnit svět práce jednoduše
            a srozumitelně.
        </p>

        <h2 class="font-heading">Kontakt</h2>

        {{-- format-ignore-start --}}
        <p>
            <a href="https://www.primecore.cz"><strong>Primecore s.r.o.</strong></a><br />
            Dělnická 213/12<br />
            170 00 Praha - Holešovice
        </p>
        <p>
            IČO: 06262856<br />
            DIČ: CZ06262856
        </p>
        <p>
            E-mail: <a href="mailto:info@primecore.cz">info@primecore.cz</a><br />
            Telefon: <a href="tel:+420222703503">+420 222 703 503</a><br />
            Web: <a href="http://www.primecore.cz">www.primecore.cz</a>
        </p>
        <p class="text-sm">
            Primecore s.r.o. je zapsána v obchodním rejstříku vedeném Městským soudem v Praze, oddíl C, vložka 279050.
        </p>
        {{-- format-ignore-end --}}
    </div>
</x-primecore::section.stripes>
