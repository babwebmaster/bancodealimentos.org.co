<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- favicon -->
        <x-web.favicon />
        
        <title>{{ config('app.name') }}</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="preload stylesheet" href="{{  asset('css/app.css')  }}" as="style">
       
        <link rel="preload stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" as="style">
        <link rel="preload stylesheet" href="{{  asset('css/styles.css')  }}" as="style">
        <!-- fontawesome -->
        <link rel="preload stylesheet" href="{{  asset('css/fa.css')  }}" as="style">
        <livewire:styles />
        @if (Route::is('web.index') || Route::is('web.contactUs'))
            <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
            <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
        @endif
        <script rel="preload" src="{{ asset('js/main.js') }}" as="script"></script>
        <script defer src="{{ asset('js/app.js') }}" as="script"></script>
    </head>
    <body class="antialiased">
        <!-- Modal -->
        {{-- <div class="modal fade" id="modalSearch" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <form class="d-flex my-2 my-lg-0">
                            <input class="form-control me-sm-2" type="text" placeholder="Search">
                            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
        <header class="w-100 h-100">
            <!--Top nav-->
            <x-web.top-navigation />
            <!--menu home-->
            <x-web.navigation-menu />
        </header>


        @yield('content')
        
        
        <x-web.button-whatsapp />
        <livewire:scripts />
        <!-- Bootstrap JavaScript Libraries -->  
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        @if (Route::is('web.index'))
            <script src="{{ asset('js/dashboard.slideDonors.index.js') }}"></script>
            <script src="{{ asset('js/dashboard.cifras.index.js') }}"></script>
            <script rel="preload" src="{{ asset('js/home.js') }}" as="script"></script>
        @endif 
        @if (Route::is('web.contactUs'))
            <script rel="preload" src="{{ asset('js/home.js') }}" as="script"></script>
        @endif
        <x-web.footer />
    </body>
</html>

