@extends('layouts.web', ['posts' => $posts])
@section('content')
    <main class="pt-[76.6px] bg-bab overflow-hidden">
        <x-web.carousel :sliders="$sliders" />
    </main>
    <x-web.static-content-index />
    <section data-sectionId="cifras" class="bg-gradient-to-r from-indigo-500 via-purple-400 to-pink-700 py-8 my-2">
        <x-web.cifras :cifras="$cifras" />
        <p class="text-center text-2xl font-semibold text-white my-8">Cifras del 1° de Enero de 2023 al {{$datecifras}}</p>
    </section>
    <section data-sectionId="nuestros_donantes_carousel" class="bg-white my-8">
        <x-web.title>Nuestros Donantes</x-web.title>
        <div class="shadow-xl overflow-hidden sm:rounded-lg border-none max-w-7xl mx-auto my-16">
            <x-web.carousel-donors :slideDonor="$slideDonor" />
        </div>
    </section>
@endsection