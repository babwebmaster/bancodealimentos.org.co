@extends('layouts.web')
@section('content')
    <main class="pt-[76.6px]">
        <x-web.title class="mt-12 font-extrabold">Junta Directiva</x-web.title>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 relative my-8">
            <x-web.directors :directors="$directors"></x-web.directors>
        </div>
    </main>
    <section class="max-w-7xl mx-auto sm:px-6 lg:px-8 relative my-8">
        <x-web.static-content-directors />
    </section>
@endsection