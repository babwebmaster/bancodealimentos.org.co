@extends('layouts.web')
@section('content')
    <main class="pt-[76.6px] bg-bab">
        <x-carousel :sliders="$sliders" />
    </main>
    <x-web.static-content-index :slideDonor="$slideDonor" />
@endsection