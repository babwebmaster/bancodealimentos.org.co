<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.Dashboard') }} {{ Route::currentRouteName() }}
        </h2>
    </x-slot>
    {{ Breadcrumbs::render('directors.index') }}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- component table --}}
            @livewire('search-directors', ['directors' => $directors])
            <h1 class="text-center font-bold text-3xl my-12 mb-4 text-bab">{{ __('messages.Preview') }}</h1>
            <x-web.directors :directors="$directors"></x-web.directors>
        </div>
    </div>
</x-app-layout>