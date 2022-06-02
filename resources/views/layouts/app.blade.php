<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- favicon -->
        <link rel="apple-touch-icon" sizes="57x57" href="{{  config('app.url')  }}images/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="{{  config('app.url')  }}images/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="{{  config('app.url')  }}images/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="{{  config('app.url')  }}images/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="{{  config('app.url')  }}images/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="{{  config('app.url')  }}images/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="{{  config('app.url')  }}images/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="{{  config('app.url')  }}images/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="{{  config('app.url')  }}images/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{  config('app.url')  }}images/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="{{  config('app.url')  }}images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="{{  config('app.url')  }}images/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="{{  config('app.url')  }}images/favicon/favicon-16x16.png">
        <link rel="manifest" href="{{  config('app.url')  }}images/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{  config('app.url')  }}images/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
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

        @livewireScripts
    </body>
</html>
