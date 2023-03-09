<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.Dashboard') }} {{ Route::currentRouteName() }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- component table --}}
            @livewire('search-directors', ['directors' => $directors])
            <h1 class="text-center font-bold text-3xl my-12 mb-4 text-bab">{{ __('messages.Preview') }}</h1>
            <div class="flex flex-wrap justify-between items-center gap-4 my-8">
                @foreach ($directors as $d)
                    <div class=" basis-3/12"> 
                        <figure class="m-0 p-2">
                            <img src="{{$d->image}}" class="p-1 w-48 h-48 block mx-auto rounded-full border-4 border-bab border-dotted" alt="{{$d->name}}" />
                        </figure>
                        <h3 class="text-center font-extrabold text-2xl">{{  $d->title ?? '<br>'  }}</h3>
                        <h3 class="text-center font-extrabold text-2xl">{{  $d->name  }}</h3>
                        <p class="text-center font-base">{{  $d->description  }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>