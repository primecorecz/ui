<div class="p-2 sm:p-3 flex items-center justify-center gap-2 text-sm font-medium bg-black/25 text-white/95">
    <span class="text-xs sm:hidden">Jsme součástí</span>
    <span class="hidden sm:block">
        {{ $slot->toHtml() ?: config('app.name') .' je součástí projektu' }}
    </span>
    <a href="https://personalka.cz/" target="_blank">
        <x-primecore::logo.white class="h-4 sm:h-5 opacity-90" />
    </a>
</div>
