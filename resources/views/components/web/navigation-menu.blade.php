<nav class="menu-home navbar navbar-expand-lg navbar-dark px-2 px-lg-3 py-0">
    <div class="nav-container flex justify-between">
        <a class="navbar-brand" href="#">
            <figure class="mb-0">
                <img src="{{ asset('images/Logo-Horizontal-Blanco-y-rojo.png') }}" alt="{{-- $altLogo --}}" class="img-responsive dropFilterLogo">
            </figure>
        </a>
        <button class="navbar-toggler d-lg-none border-hidden" type="button" data-bs-toggle="collapse" data-bs-target="#menu-home-collapse" aria-controls="menu-home-collapse"
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
    </div>
</nav>