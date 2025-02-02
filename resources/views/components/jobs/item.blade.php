@props([
    'job',
])

<li {{ $attributes->class('border-t border-gray-200') }}>
    <a
        href="{{ $job->url }}"
        class="block transition duration-150 ease-in-out hover:bg-gray-50 focus:bg-gray-50 focus:outline-none"
    >
        <div class="relative flex flex-col gap-4 px-8 py-4 md:flex-row md:items-center">
            <div class="min-w-0 flex-1 sm:flex sm:items-center sm:justify-between">
                <div>
                    <div class="text-base font-medium leading-5">
                        {{ $job->title }}
                    </div>
                    <div class="mt-2 flex">
                        <div class="flex flex-wrap items-center text-sm leading-5 text-gray-500 lg:space-x-4">
                            @if ($job->area || $job->city)
                                <span class="flex w-full items-center gap-2 lg:w-auto">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                        class="h-5 w-5 opacity-25"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                    {{ $job->area ?? $job->city }}
                                </span>
                            @endif

                            @if ($job->contractTypes)
                                <span class="flex w-full items-center gap-2 lg:w-auto">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                        class="h-5 w-5 opacity-25"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 000-1.5h-3.75V6z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                    {{ $job->contractTypes() }}
                                </span>
                            @endif

                            @if ($job->minSalary > 14200)
                                <span class="flex w-full items-center gap-2 lg:w-auto">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24"
                                        fill="currentColor"
                                        class="h-5 w-5 opacity-25"
                                    >
                                        <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
                                        <path
                                            fill-rule="evenodd"
                                            d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z"
                                            clip-rule="evenodd"
                                        />
                                        <path
                                            d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z"
                                        />
                                    </svg>
                                    {{ $job->salary() }}
                                </span>
                            @endif

                            <span class="flex w-full items-center gap-2 lg:w-auto">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="currentColor"
                                    class="h-5 w-5 opacity-25"
                                >
                                    <path
                                        d="M19.006 3.705a.75.75 0 00-.512-1.41L6 6.838V3a.75.75 0 00-.75-.75h-1.5A.75.75 0 003 3v4.93l-1.006.365a.75.75 0 00.512 1.41l16.5-6z"
                                    />
                                    <path
                                        fill-rule="evenodd"
                                        d="M3.019 11.115L18 5.667V9.09l4.006 1.456a.75.75 0 11-.512 1.41l-.494-.18v8.475h.75a.75.75 0 010 1.5H2.25a.75.75 0 010-1.5H3v-9.129l.019-.006zM18 20.25v-9.565l1.5.545v9.02H18zm-9-6a.75.75 0 00-.75.75v4.5c0 .414.336.75.75.75h3a.75.75 0 00.75-.75V15a.75.75 0 00-.75-.75H9z"
                                        clip-rule="evenodd"
                                    />
                                </svg>
                                {{ $job->employer }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-between gap-4">
                <div class="flex-shrink-0">
                    <div class="flex overflow-hidden rounded bg-gray-200 p-3">
                        <x-primecore::logo.blue class="w-28" />
                    </div>
                </div>
                <div class="absolute inset-4 left-auto flex items-center md:static md:flex-shrink-0">
                    <!-- Heroicon name: chevron-right -->
                    <svg
                        class="h-5 w-5 text-gray-400"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"
                        />
                    </svg>
                </div>
            </div>
        </div>
    </a>
</li>
