@props(['link'])
<a {{ $attributes->merge(['href' => $link, 'class' => 'inline-flex items-center px-4 py-2 bg-red-bab border-none rounded-sm font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</a>