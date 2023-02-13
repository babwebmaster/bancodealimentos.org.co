<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.Dashboard') }}
        </h2>
    </x-slot>
    <div class="mb-5">
        <div class="max-w-full mx-auto py-1 sm:px-6 lg:px-8 mb-8">
            <div class="bg-white-4/5 py-4 sm:px-6 lg:px-8 mb-8 rounded-lg shadow-md flex items-start justify-around">
                <div class="w-full py-4 px-6">
                    <h2 class="text-3xl font-bold text-center mb-6">{{ $reconocimiento->title }}</h2>
                    <hr class="w-full">
                    <p class="mt-2 py4 px-6">{{  $reconocimiento->content  }}</p>
                </div>
                <div class="w-full">
                    @if ($reconocimiento->image)
                        <img src="{{  $reconocimiento->image  }}" class="block w-44 mx-auto" alt="{{ $reconocimiento->title }}">
                    @endif
                </div>
                <div class="w-full">
                    <h4 class="text-center text-2xl">Icono</h4>
                    <br>
                    <i class="block {{  $reconocimiento->icon  }} text-9xl text-center" style="color: {{ $reconocimiento->color }}"></i>
                </div>
                <div class="w-full">
                    <h4 class="text-center text-2xl">Fecha del Reconocimiento:</h4>
                    <p class="mt-2 py-4 px-6 text-center">
                        {{  \Carbon\Carbon::parse($reconocimiento->date_announcement)->diffForHumans() }}
                    </p>
                    <span class="block text-center w-full">
                        {{  $reconocimiento->date_announcement  }}
                    </span>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>