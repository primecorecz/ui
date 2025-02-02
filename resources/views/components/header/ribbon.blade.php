<div class="flex items-center justify-center gap-2 bg-black/25 p-2 text-sm font-medium text-white/95 sm:p-3">
    <span class="text-xs sm:hidden">Jsme součástí</span>
    <span class="hidden sm:block">
        {{ $slot->toHtml() ?: config('app.name').' je součástí projektu' }}
    </span>
    <a href="https://personalka.cz/" target="_blank">
        <x-primecore::logo.white class="h-4 opacity-90 sm:h-5" />
    </a>
</div>
