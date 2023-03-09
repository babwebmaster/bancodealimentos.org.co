<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.Dashboard') }}
        </h2>
        <a href="{{$prev}}" rel="noopener noreferrer">regresar</a>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="w-full md:w-1/2 mx-auto">
                <figure class="m-0 p-2">
                    <img src="{{$director->image}}" class="p-1 w-48 h-48 block mx-auto rounded-full border-4 border-bab border-dotted" alt="{{$director->name}}" />
                </figure>
                <h3 class="text-center font-extrabold text-2xl">{{  $director->title ?? '<br>'  }}</h3>
                <h3 class="text-center font-extrabold text-2xl">{{  $director->name  }}</h3>
                <p class="text-center font-base">{{  $director->description  }}</p>
            </div>
        </div>
    </div>
</x-app-layout>