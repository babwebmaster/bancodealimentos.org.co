<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.Dashboard') }}
        </h2>
    </x-slot>
    <div class="mb-5">
        <div class="max-w-full mx-auto py-1 sm:px-6 lg:px-8 mb-8">
            <div class="bg-white-4/5 py-4 sm:px-6 lg:px-8 mb-8 rounded-lg shadow-md">
                <h2 class="text-3xl font-bold text-center mb-6">Desktop</h2>
                <img src="{{  $slide->content_desktop  }}" alt="{{  $slide->name  }}" class="mb-8">
                <h2 class="text-2xl font-bold text-center">Caracteristicas</h2>
                <h3>Nombre del slide: {{  $slide->name  }}</h3>
                <p>Url de la imagen: {{  $slide->content_desktop  }}</p>
                <span>Slide Publicado: {{  $slide->status  }}</span>
                <span>Dimensiones: 1920x700</span>
            </div>
        </div>
        <div class="max-w-full mx-auto py-1 sm:px-6 lg:px-8">
            <div class="bg-white-4/5 py-4 sm:px-6 lg:px-8 mb-8 rounded-lg shadow-md">
                <h2 class="text-3xl font-bold text-center mb-6">Mobile</h2>
                <img src="{{  $slide->content_mobile  }}" alt="{{  $slide->name  }}" class="mb-8 block mx-auto">
                <h2 class="text-2xl font-bold text-center">caracteristicas</h2>
                <h3>Nombre del slide: {{  $slide->name  }}</h3>
                <p>Url de la imagen: {{  $slide->content_mobile  }}</p>
                <span>Slide Publicado: {{  $slide->status  }}</span>
                <span>Dimensiones: 778x778</span>
            </div>
        </div>
    </div>
</x-app-layout>