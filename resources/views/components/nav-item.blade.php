@props(['active'])

@php
    $classes = ($active ?? false)
                ? 'text-green-600 font-bold text-lg shadow-xl rounded-md'
                : '';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
