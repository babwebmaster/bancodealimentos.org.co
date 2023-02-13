<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-8">
            @livewire('search-reconocimientos', ['reconocimientos' => $reconocimientos])
        </div>
        <h1 class="text-center font-bold text-3xl mb-8 text-bab">{{ __('messages.Preview') }}</h1>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 relative">
            <x-web.reconocimientos :reconocimientos="$reconocimientos"></x-web.reconocimientos>
        </div>
    </div>
</x-app-layout>
