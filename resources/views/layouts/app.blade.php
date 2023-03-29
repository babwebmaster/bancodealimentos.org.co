<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- favicon -->
        <x-web.favicon />
        
        <title>{{ config('app.name') }}</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- fontawesome -->
        <link rel="stylesheet" href="{{ asset('css/fa.css') }}">
        <!-- Styles -->
        @if (in_array(Route::currentRouteName(),['slide-donors.index', 'slide.index']))
            <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
            <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
        @endif
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
        @livewireStyles
        <!-- Scripts -->
        <script defer src="{{ mix('js/app.js') }}"></script>
    </head>
    <body class="font-sans antialiased h-screen md:overflow-y-hidden  bg-gray-100">
        
        <div class="w-full h-full md:flex">
            @livewire('navigation-menu')
            <!-- Page Content -->
            <main class="bg-lines main-dashboard overflow-y-scroll">
                <x-jet-banner />
                <!-- Page Heading -->
                @if (isset($header))
                    <header class="bg-slate-50 rounded-lg mx-2 my-2 shadow-lg">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif
                {{ $slot }} 
                <div class="my-4 mt-auto">
                    <p class="text-xl font-bold text-center text-bab">
                        © 2022 Banco de Alimentos de Bogotá
                    </p>
                </div>
            </main>
        </div>
        {{-- <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div> --}}
        @stack('modals')
        <!-- sweet scripts-->
        @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
         <!-- sweet scripts end-->
        @livewireScripts
        @if (in_array(Route::currentRouteName(),['slide.create', 'slide.edit', 'slide.index']))  
            <script src="{{ asset('js/dashboard.slide.js') }}"></script>
        @endif
        @if (in_array(Route::currentRouteName(),['slide-donors.create', 'slide-donors.edit']))
            <script src="{{ asset('js/dashboard.slideDonors.js') }}"></script>
        @endif
        @if (in_array(Route::currentRouteName(),['slide-donors.index']))
        <script src="{{ asset('js/dashboard.slideDonors.index.js') }}"></script>
        @endif
        @if (in_array(Route::currentRouteName(),['cifras.create', 'cifras.edit']))
            <script src="{{ asset('js/dashboard.cifras.js') }}"></script>
        @endif
        @if (in_array(Route::currentRouteName(),['cifras.index']))
            <script src="{{ asset('js/dashboard.cifras.index.js') }}"></script>
        @endif
        @if (in_array(Route::currentRouteName(),['reconocimientos.create', 'reconocimientos.edit']))
            <script src="{{ asset('js/dashboard.reconocimientos.js') }}"></script>
        @endif
        @if (in_array(Route::currentRouteName(),['reports.create', 'reports.edit']))
            <script src="{{ asset('js/dashboard.reports.js') }}"></script>
        @endif
    </body>
</html>
