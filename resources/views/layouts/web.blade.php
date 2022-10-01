<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
        
        <title>{{ config('app.name') }}</title>
        <!-- fontawesome -->
        <script src="https://kit.fontawesome.com/644fcd3210.js" crossorigin="anonymous"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="preload stylesheet" href="{{  asset('css/app.css')  }}" as="style">
        <!-- Bootstrap CSS v5.0.2 -->
        <link rel="preload stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" as="style">
        <link rel="preload stylesheet" href="{{  asset('css/styles.css')  }}" as="style">
        <livewire:styles />
        @if (Route::is('index'))
            <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
            <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
        @endif
        <script rel="preload" src="{{ asset('js/main.js') }}" as="script"></script>
    </head>
    <body class="antialiased">
        <!-- Modal -->
        <div class="modal fade" id="modalSearch" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
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
        </div>
        <header class="w-100 h-100">
            <!--Top nav-->
            <x-web.top-navigation />
            <!--menu home-->
            <x-web.navigation-menu />
        </header>


        @yield('content')

        <x-web.button-whatsapp />
        <x-web.footer />
        <livewire:scripts />
        <!-- Bootstrap JavaScript Libraries -->   
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="{{  asset('js/index.js')  }}"></script>
    </body>
</html>

