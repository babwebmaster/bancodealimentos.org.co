<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.Dashboard') }}
        </h2>
    </x-slot>
    {{ Breadcrumbs::render('slide-donors.index') }}
    <div class="py-12">
        <h1 class="text-center font-bold text-3xl mb-4 text-bab">{{ __('messages.Preview') }}</h1>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-bab-shadow overflow-hidden shadow-xl sm:rounded-lg border-none mb-8">
                <x-web.carousel-donors :slideDonor="$slideDonor" />
            </div>
            @livewire('search-slide-donors', ['slideDonor' => $slideDonor])
        </div>
    </div>
</x-app-layout>
