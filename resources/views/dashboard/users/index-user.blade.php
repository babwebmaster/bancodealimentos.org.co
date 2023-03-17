<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.Dashboard') }}
        </h2>
    </x-slot>
    {{ Breadcrumbs::render('user.index') }}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-bab-shadow overflow-hidden shadow-xl sm:rounded-lg">
                @livewire('search-user', ['users' => $users])
            </div>
        </div>
    </div>

</x-app-layout>
