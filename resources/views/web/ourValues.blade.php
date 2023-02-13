@extends('layouts.web')
@section('content')
    <main class="pt-[76.6px]">
        <x-web.title class="mt-5">Nuestros Valores</x-web.title>
    </main>
    <x-web.static-content-our-values>
        <section data-sectionId="cifras" class="bg-gradient-to-r from-indigo-500 via-purple-400 to-pink-700 py-8">
            <x-web.cifras :cifras="$cifras" />
            <p class="text-center text-2xl font-semibold text-white my-8">Cifras del 1° de Enero de 2022 al {{$datecifras}}</p>
        </section>
    </x-web.static-content-our-values>
    <section class="my-8">
        <h3 class="text-red-bab text-center capitalize font-semibold text-4xl mt-8 mb-2">Reconocimientos</h3>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 relative my-8">
            <x-web.reconocimientos :reconocimientos="$reconocimientos"></x-web.reconocimientos>
        </div>
        <section aria-label="Hacemos parte de">
            <h3 class="text-center font-semibold text-gray-600 text-4xl mt-4">Hacemos parte de:</h3>
            <div class="w-full max-w-6xl mx-auto mt-10 flex flex-col sm:flex-row justify-center sm:justify-around items-center">
                <figure class="block mx-auto mb-0 sm:m-0">
                    <img src="{{  asset('images/logo-global-food.png')  }}" class="w-1/2 mx-auto sm:w-72" alt="Logo global food">
                </figure>
                <figure class="block mx-auto mb-0 sm:m-0">
                    <img src="{{  asset('images/logo-abaco.png')  }}" class="w-1/2 mx-auto sm:w-72" alt="Logo abaco">
                </figure>
            </div>
        </section>
    </section>
@endsection
