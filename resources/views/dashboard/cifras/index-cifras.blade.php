<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <h1 class="text-center font-bold text-3xl mb-4 text-bab">{{ __('messages.Preview') }}</h1>
        <div class="w-full mx-auto mb-6 px-2 py-6 bg-bab-sky grid grid-cols-3 gap-4">
            {{-- Component preview --}}
            @foreach ($cifras as $cifra)
            <div class="overflow-hidden col-span-1 text-center mb-4">
                <img src="{{  $cifra->icon  }}" alt="{{  $cifra->name }}" class="block mx-auto w-32 h-32 my-2" />
                <p class="text-center font-sans font-bold text-4xl text-white" id="count{{ $loop->iteration }}" data-name="counter" data-value="{{  $cifra->value  }}">{{  $cifra->value  }}</p>
                <h3 class="text-center font-sans font-semibold text-lg uppercase text-white">{{  $cifra->name  }}</h3>
            </div>
            @endforeach
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- component table --}}
            @livewire('search-cifras', ['cifras' => $cifras])
        </div>
    </div>
</x-app-layout>
