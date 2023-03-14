@extends('layouts.web')
@section('content')
    <main class="pt-[76.6px]">
        <x-web.title class="mt-12 font-extrabold">Informes de gestion</x-web.title>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-8">
            <x-web.reports :reports="$reports" />
        </div>
    </main>
    <x-web.juntos-contra-el-hambre />
@endsection