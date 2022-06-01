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
            <div class="top-nav d-none d-md-flex justify-content-between align-items-center bg-bab px-md-2 px-lg-5">
                <div class="d-flex justify-content-start py-2">
                    <a href="#">
                        <span class="text-slate-400 hover:text-slate-50 text-sm"><i class="fas fa-shopping-cart"></i> Recompensas</span>
                    </a>
                    <span class="text-gray-300 mx-2"> | </span>
                    <a href="#">
                        <span class="text-slate-400 hover:text-slate-50 text-sm">Bonos</span>
                    </a>
                    <span class="text-gray-300 mx-2"> | </span>
                    <a href="{{  route('login')  }}">
                        <span class="text-slate-400 hover:text-slate-50 text-sm">Inicia Sesion</span>
                    </a>
                    <span class="text-gray-300 mx-2"> | </span>
                </div>
                <div class="flex justify-end basis-1/2">
                    <a href="#" class="flex justify-start align-items-center px-5 bg-red-700">
                        <span class="text-white text-lg font-bold">Dona ya!</span>
                    </a>
                    <div class="flex justify-around text-slate-400 hover:text-slate-50 ml-4 mr-8  py-2">
                        <span class="text-slate-50 text-sm">
                            Escribenos
                            <a href="http://" target="_blank" rel="noopener noreferrer" class="text-slate-400 hover:text-slate-50">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="http://" target="_blank" rel="noopener noreferrer" class="text-slate-400 hover:text-slate-50">
                                <i class="fab fa-youtube"></i>
                            </a>
                            <a href="http://" target="_blank" rel="noopener noreferrer" class="text-slate-400 hover:text-slate-50">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
            <!--menu home-->
            <nav class="menu-home navbar navbar-expand-lg navbar-dark px-2 px-lg-3 py-0">
                <a class="navbar-brand" href="#">
                    <figure class="mb-0">
                        <img src="{{ asset('images/Logo-Horizontal-Blanco-y-rojo.png') }}" alt="{{-- $altLogo --}}" class="img-responsive dropFilterLogo">
                    </figure>
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#menu-home-collapse" aria-controls="menu-home-collapse"
                    aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="menu-home-collapse">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link text-sm" href="{{  route('web.index')  }}">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-sm" href="#" id="dropdownWe" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Nosotros
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownWe">
                                <a class="dropdown-item" href="{{  route('web.ourValues')  }}">Nuestros Valores</a>
                                <a class="dropdown-item" href="{{  route('web.ourLeaders')  }}">Nuestros Líderes</a>
                                <a class="dropdown-item" href="{{  route('web.managementReports')  }}">Informes de Gestión</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-sm" href="#" id="dropdownWe" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Ayúdanos a ayudar
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownWe">
                                <a class="dropdown-item" href="{{  route('web.cashDonations')  }}">Donaciones en efectivo</a>
                                <a class="dropdown-item" href="{{  route('web.corporateValueProposition')  }}">Propuesta de valor corporativo</a>
                                <a class="dropdown-item" href="{{  route('web.donationsInKind')  }}">Donaciones en especie</a>
                                <a class="dropdown-item" href="{{  route('web.volunteering')  }}">Voluntariado</a>
                                <a class="dropdown-item" href="{{  route('web.academy')  }}">Academia</a>
                                <a class="dropdown-item" href="{{  route('web.corabastos')  }}">Corabastos</a>
                                <a class="dropdown-item" href="{{  route('web.prea')  }}">PREA</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-sm" href="#" id="dropdownWe" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Beneficiarios
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownWe">
                                <a class="dropdown-item" href="{{  route('web.ourWork')  }}">Nuestra Labor</a>
                                <a class="dropdown-item" href="{{  route('web.linkUp')  }}">Vincúlate</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-sm" href="https://blog.bancodelalimentos.org.co">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-sm" href="#">Regala Generosidad</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-sm" href="{{  route('web.contactUs')  }}">Contáctanos</a>
                        </li>
                        <li class="nav-item">
                            <!-- Button trigger modal -->
                            <a class="nav-link text-sm" type="button" data-bs-toggle="modal" data-bs-target="#modalSearch">
                                <i class="fas fa-search"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>


        @yield('content')

        <a href="https://api.whatsapp.com/send?phone=+573015107279" target="_blank" class="bg-white p-2 absolute bottom-4 right-4 rounded-full border-2 border-white shadow-md shadow-black">
            <img src="{{  asset('images/whatsapp-icon.png')  }}" alt="Icono whatsapp" class="h-12 w-12">
        </a>
        <footer class="pt-5 bg-bab">
            <div class="container py-4">
                <div class="row">
                    <div class="col-md-3 ">
                        <figure>
                            <img src="{{ asset('images/Logo-Horizontal-Blanco-y-rojo.png')}}" alt="Logo Banco de alimentos de bogotá" class="img-responsive">
                        </figure>
                        <h4 class="text-center text-uppercase text-white">
                            Mapa del sitio
                        </h4>
                        <ul class="text-white">
                            <li class="nav-item">Menu item 1</li>
                            <li class="nav-item">Menu item 1</li>
                            <li class="nav-item">Menu item 1</li>
                            <li class="nav-item">Menu item 1</li>
                        </ul>
                    </div>
                    <div class="col-md-3 ">
                        <h4 class="text-center text-uppercase text-white">
                            Suscribete
                        </h4>
                        <form action="" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">@</span>
                                <input type="text" class="form-control" placeholder="example@email.com" aria-label="Username" aria-describedby="basic-addon1">
                                <button class="btn btn-danger" type="submit" id="button-addon2">Suscribirme</button>
                            </div>
                        </form>
                        <div class="alert alert-success" role="alert">
                            Se ha suscribido con exito!
                        </div>
                        <div class="alert alert-danger" role="alert">
                            Ups! Ocurrio un error y no se pudo realizar la subscripcion, estamos trabajando en ello!
                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <h4 class="text-center text-uppercase text-white">
                            twitter card
                        </h4>
                        <a class="twitter-timeline" data-lang="es" data-height="400" data-theme="light" href="https://twitter.com/BancoAAlimentos?ref_src=twsrc%5Etfw">Tweets by BancoAAlimentos</a> 
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                    <div class="col-md-3 ">
                        <h4 class="text-center text-uppercase text-white">
                            Contacto
                        </h4>
                        <ul class="text-white">
                            <li class="nav-item">
                                <i class="fa fa-map-marker"></i>
                                Calle 19 A # 32 – 50
                            </li>
                            <li class="nav-item">
                                <i class="fa fa-envelope-o"></i>
                                amigo@bancodealimentos.org.co
                            </li>
                            <li class="nav-item">
                                <i class="fa fa-phone"></i>
                                +(60 1) 747 0828
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Política de tratamiento de datos</a>
                            </li>
                        </ul>
                        <ul class="social-icons text-white d-flex justify-content-around w-100">
                            <li>
                                <a href="https://es-la.facebook.com/Bancodealimentosbogota/" target="_blank" class="social-icon" rel="noopener"> 
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/BancoAAlimentos" target="_blank" class="social-icon" rel="noopener"> 
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/bancodealimentosbgt/" target="_blank" class="social-icon" rel="noopener"> 
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/banco-de-alimentos-de-bogot%C3%A1" target="_blank" class="social-icon" rel="noopener"> 
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/user/banalimen" target="_blank" class="social-icon" rel="noopener"> 
                                    <i class="fa fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid bg-secondary">
                <div class="row py-4 align-items-center text-white">
                    <div class="col-12">
                        <p class="text-center">Banco de alimentos de bogotá © 2022 Todos los rerechos reservados.</p>
                    </div>
                </div>
            </div>
        </footer>
        <livewire:scripts />
        <!-- Bootstrap JavaScript Libraries -->   
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="{{  asset('js/index.js')  }}"></script>
    </body>
</html>

