@props([
    'jobs',
])

<ul>
    @foreach ($jobs as $job)
        <x-primecore::jobs.item :$job {{ $attributes }} />
    @endforeach
</ul>
