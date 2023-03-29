@extends('layouts.web')
@section('content')
    <main class="pt-[76.6px]">
        <x-web.title class="mt-12 font-extrabold">Informes de gestion</x-web.title>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-8">
            <h4 class="text-center text-2xl text-black">Conoce más la historia del Banco de Alimentos de Bogotá con nuestros Informes de Gestión</h4>
            <hr class="border-blue-800 opacity-25" />
            <x-web.reports :reports="$reports" />
        </div>
    </main>
    <x-web.juntos-contra-el-hambre />
@endsection