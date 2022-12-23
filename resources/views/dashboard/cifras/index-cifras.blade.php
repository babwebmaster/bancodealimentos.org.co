<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <h1 class="text-center font-bold text-3xl mb-4 text-bab">{{ __('messages.Preview') }}</h1>
            <x-web.cifras :cifras="$cifras"/>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- component table --}}
            @livewire('search-cifras', ['cifras' => $cifras])
        </div>
    </div>
</x-app-layout>
