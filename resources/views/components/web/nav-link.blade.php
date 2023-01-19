@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-200 text-sm font-medium leading-5 text-slate-200 hover:text-gray-500 hover:border-gray-500 focus:outline-none focus:text-gray-500 focus:border-gray-500 transition'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-white hover:text-gray-500 hover:border-gray-500 focus:outline-none focus:text-gray-500 focus:border-gray-500 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
