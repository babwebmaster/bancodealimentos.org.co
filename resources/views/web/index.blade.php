@extends('layouts.web')
@section('content')
    <main class="pt-[76.6px] bg-bab">
        <x-web.carousel :sliders="$sliders" />
    </main>
    <x-web.static-content-index />
    <section data-sectionId="cifras" class="bg-bab-sky py-8 my-2">
        <x-web.cifras :cifras="$cifras" :page="count($cifras)" />
    </section>
    <section data-sectionId="nuestros_donantes_carousel" class="bg-white my-8">
        <div class="shadow-xl overflow-hidden sm:rounded-lg border-none max-w-7xl m-auto">
            <x-web.carousel-donors :slideDonor="$slideDonor" />
        </div>
    </section>
    <section class="bg-white my-8">
        <div class="shadow-xl overflow-hidden sm:rounded-lg border-none max-w-7xl m-auto">
            <x-web.carousel-blog :posts="$posts" />
        </div>
        <!-- Slider main container -->
    </section>
@endsection