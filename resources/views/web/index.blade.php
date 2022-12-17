@extends('layouts.web')
@section('content')
    <main class="pt-[76.6px] bg-bab">
        <x-carousel :sliders="$sliders" />
    </main>
    <x-web.static-content-index />
    <section data-sectionId="cifras" class="bg-bab-sky py-16 my-16">

    </section>
    <section data-sectionId="nuestros_donantes_carousel" class="bg-white mb-8">
        <div class="shadow-xl overflow-hidden sm:rounded-lg border-none max-w-7xl m-auto">
            <x-carousel-donors :slideDonor="$slideDonor" />
        </div>
    </section>
@endsection