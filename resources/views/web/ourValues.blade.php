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
@endsection
