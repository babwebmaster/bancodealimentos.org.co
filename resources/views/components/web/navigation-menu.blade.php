<nav class="menu-home h-20 lg:flex lg:items-center lg:justify-between" x-data="{ open : false }">
    <div class="flex justify-between px-3 lg:w-full">
        <a class="lg:basis-1/3 navbar-brand" href="#">
            <figure class="mb-0">
                <img src="{{ asset('images/Logo-Horizontal-Blanco-y-rojo.png') }}" alt="{{-- $altLogo --}}" class=" w-52">
            </figure>
        </a>
        <ul class="hidden lg:basis-2/3 lg:w-full lg:flex lg:items-center lg:justify-center lg:gap-2 mb-0">
            <x-web.nav-link class=" whitespace-nowrap no-underline hover:text-white" href="{{  route('web.index')  }}" :active="request()->routeIs('web.index')">
                        {{ __('Inicio') }}
            </x-web.nav-link>
            <x-web.dropdown align="left" width="60">
                <x-slot name="trigger">
                    <x-jet-nav-link class=" whitespace-nowrap no-underline hover:text-white">
                        {{ __('Nosotros') }} &nbsp;
                        <i x-show="!open" class="fas fa-caret-down"></i>
                        <i x-show="open" class="fas fa-caret-up"></i>
                    </x-jet-nav-link>
                </x-slot>

                <x-slot name="content">
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        <x-web.dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.ourValues')  }}" :active="request()->routeIs('web.ourValues')">Nuestros Valores</x-web.dropdown-link>
                        <x-web.dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.ourLeaders')  }}" :active="request()->routeIs('web.ourLeaders')">Nuestros Líderes</x-web.dropdown-link>
                        <x-web.dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.managementReports')  }}" :active="request()->routeIs('web.managementReports')">Informes de Gestión</x-web.dropdown-link>
                    </div>
                </x-slot>
            </x-web.dropdown>
            <x-web.dropdown align="left" width="60">
                <x-slot name="trigger">
                    <x-jet-nav-link class=" whitespace-nowrap no-underline hover:text-white">
                        {{ __('Ayúdanos a ayudar') }} &nbsp;
                        <i x-show="!open" class="fas fa-caret-down"></i>
                        <i x-show="open" class="fas fa-caret-up"></i>
                    </x-jet-nav-link>
                </x-slot>

                <x-slot name="content">
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        <x-web.dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.cashDonations')  }}" :active="request()->routeIs('web.cashDonations')">Donaciones en efectivo</x-web.dropdown-link>
                        <x-web.dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.rsa')  }}" :active="request()->routeIs('web.rsa')">RSE</x-web.dropdown-link>
                        <x-web.dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.pni')  }}" :active="request()->routeIs('web.pni')">Programa Nutrición Integral</x-web.dropdown-link>
                        <x-web.dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.corabastos')  }}" :active="request()->routeIs('web.corabastos')">Programa Corabastos</x-web.dropdown-link>
                        <x-web.dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.prea')  }}" :active="request()->routeIs('web.prea')">PREA</x-web.dropdown-link>
                        <x-web.dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.volunteering')  }}" :active="request()->routeIs('web.volunteering')">Voluntariado Corporativo</x-web.dropdown-link>
                        <x-web.dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.academy')  }}" :active="request()->routeIs('web.academy')">Academia</x-web.dropdown-link>
                        <x-web.dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.donationsInKind')  }}" :active="request()->routeIs('web.donationsInKind')">Donaciones en especie</x-web.dropdown-link>
                    </div>
                </x-slot>
            </x-web.dropdown>
            <x-web.dropdown align="left" width="60">
                <x-slot name="trigger">
                    <x-jet-nav-link class=" whitespace-nowrap no-underline hover:text-white">
                        {{ __('Beneficiarios') }} &nbsp;
                        <i x-show="!open" class="fas fa-caret-down"></i>
                        <i x-show="open" class="fas fa-caret-up"></i>
                    </x-jet-nav-link>
                </x-slot>

                <x-slot name="content">
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        <x-web.dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.beneficiaries')  }}" :active="request()->routeIs('web.beneficiaries')">Beneficiarios</x-web.dropdown-link>
                        <x-web.dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.beneficiary')  }}" :active="request()->routeIs('web.beneficiary')">Quiero Ser Beneficiario</x-web.dropdown-link>
                        <x-web.dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.iambeneficiary')  }}" :active="request()->routeIs('web.iambeneficiary')">Soy Beneficiario</x-web.dropdown-link>
                        <x-web.dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.cookBooks')  }}" :active="request()->routeIs('web.cookBooks')">Recetarios</x-web.dropdown-link>
                    </div>
                </x-slot>
            </x-web.dropdown>
            <x-web.dropdown align="left" width="96">
                <x-slot name="trigger">
                    <x-jet-nav-link class=" whitespace-nowrap no-underline hover:text-white">
                        {{ __('Blog') }} &nbsp;
                        <i x-show="!open" class="fas fa-caret-down"></i>
                        <i x-show="open" class="fas fa-caret-up"></i>
                    </x-jet-nav-link>
                </x-slot>

                <x-slot name="content">
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="https://blog.bancodealimentos.org.co/category/banco-de-alimentos-bogota/">Banco de Alimentos de Bogotá</x-jet-dropdown-link>
                        <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="https://blog.bancodealimentos.org.co/category/el-bab-en-los-medios/">El Bab en los medios</x-jet-dropdown-link>
                        <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="https://blog.bancodealimentos.org.co/category/noticias/">Noticias</x-jet-dropdown-link>
                    </div>
                </x-slot>
            </x-web.dropdown>
            <x-web.nav-link class=" whitespace-nowrap no-underline hover:text-white" href="#">
                {{ __('Regala Generosidad') }}
            </x-web.nav-link>
            <x-web.nav-link class=" whitespace-nowrap no-underline hover:text-white" href="{{  route('web.contactUs')  }}" :active="request()->routeIs('web.contactUs')">
                {{ __('Contactanos') }}
            </x-web.nav-link>
            <!-- Button trigger modal -->
            {{-- <li>
                <a class="text-white" type="button" data-bs-toggle="modal" data-bs-target="#modalSearch">
                    <i class="fas fa-search"></i>
                </a>
            </li>
            <div class="relative">
                <input type="text" class="relative" placeholder="Type to search..."/>
                <div class="absolute">
                  <i class="fas fa-search"></i>
                </div>
                
                <div class="absolute">
                  <i class="fas fa-times"></i>
                </div>
            </div> --}}
        </ul>
        <button @click="open = !open" class="text-white p-4 font-semibold text-2xl lg:hidden">
            <i class="fas" :class="open ? 'fa-xmark':'fa-bars'" x-transition.duration.300ms></i>
        </button>
    </div>
    <ul  class="lg:hidden w-full flex-col items-center justify-center py-4 pl-0 bg-bab mb-0" x-show="open" :class="open ? 'flex': 'hidden'" x-transition.duration.500ms>
        <x-web.nav-link class=" whitespace-nowrap no-underline hover:text-white" href="{{  route('web.index')  }}">
                    {{ __('Inicio') }}
        </x-web.nav-link>
        <x-web.dropdown align="center" width="60">
            <x-slot name="trigger">
                <x-web.nav-link class=" cursor-pointer whitespace-nowrap no-underline hover:text-white">
                    {{ __('Nosotros') }} &nbsp;
                    <i x-show="!open" class="fas fa-caret-down"></i>
                    <i x-show="open" class="fas fa-caret-up"></i>
                </x-web.nav-link>
            </x-slot>

            <x-slot name="content">
                <div class="block px-4 py-2 text-xs text-gray-400">
                    <x-web.dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.ourValues')  }}" :active="request()->routeIs('web.ourValues')">Nuestros Valores</x-web.dropdown-link>
                    <x-web.dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.ourLeaders')  }}" :active="request()->routeIs('web.ourLeaders')">Nuestros Líderes</x-web.dropdown-link>
                    <x-web.dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.managementReports')  }}" :active="request()->routeIs('web.managementReports')">Informes de Gestión</x-web.dropdown-link>
                </div>
            </x-slot>
        </x-web.dropdown>
        <x-web.dropdown align="center" width="60">
            <x-slot name="trigger">
                <x-web.nav-link class=" cursor-pointer whitespace-nowrap no-underline hover:text-white">
                    {{ __('Ayúdanos a ayudar') }} &nbsp;
                    <i x-show="!open" class="fas fa-caret-down"></i>
                    <i x-show="open" class="fas fa-caret-up"></i>
                </x-web.nav-link>
            </x-slot>

            <x-slot name="content">
                <div class="block px-4 py-2 text-xs text-gray-400">
                    <x-web.dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.cashDonations')  }}" :active="request()->routeIs('web.cashDonations')">Donaciones en efectivo</x-web.dropdown-link>
                    <x-web.dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.rsa')  }}" :active="request()->routeIs('web.rsa')">RSE</x-web.dropdown-link>
                    <x-web.dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.pni')  }}" :active="request()->routeIs('web.pni')">Programa Nutrición Integral</x-web.dropdown-link>
                    <x-web.dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.corabastos')  }}" :active="request()->routeIs('web.corabastos')">Programa Corabastos</x-web.dropdown-link>
                    <x-web.dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.prea')  }}" :active="request()->routeIs('web.prea')">PREA</x-web.dropdown-link>
                    <x-web.dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.volunteering')  }}" :active="request()->routeIs('web.volunteering')">Voluntariado Corporativo</x-web.dropdown-link>
                    <x-web.dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.academy')  }}" :active="request()->routeIs('web.academy')">Academia</x-web.dropdown-link>
                    <x-web.dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.donationsInKind')  }}" :active="request()->routeIs('web.donationsInKind')">Donaciones en especie</x-web.dropdown-link>
                </div>
            </x-slot>
        </x-web.dropdown>
        <x-web.dropdown align="center" width="60">
            <x-slot name="trigger">
                <x-web.nav-link class=" cursor-pointer whitespace-nowrap no-underline hover:text-white">
                    {{ __('Beneficiarios') }} &nbsp;
                    <i x-show="!open" class="fas fa-caret-down"></i>
                    <i x-show="open" class="fas fa-caret-up"></i>
                </x-web.nav-link>
            </x-slot>

            <x-slot name="content">
                <div class="block px-4 py-2 text-xs text-gray-400">
                    <x-web.dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.beneficiaries')  }}" :active="request()->routeIs('web.beneficiaries')">Beneficiarios</x-web.dropdown-link>
                    <x-web.dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.beneficiary')  }}" :active="request()->routeIs('web.beneficiary')">Quiero Ser Beneficiario</x-web.dropdown-link>
                    <x-web.dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.iambeneficiary')  }}" :active="request()->routeIs('web.iambeneficiary')">Soy Beneficiario</x-web.dropdown-link>
                    <x-web.dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.cookBooks')  }}" :active="request()->routeIs('web.cookBooks')">Recetarios</x-web.dropdown-link>
                </div>
            </x-slot>
        </x-web.dropdown>
        <x-web.dropdown align="center" width="96">
            <x-slot name="trigger">
                <x-web.nav-link class=" cursor-pointer whitespace-nowrap no-underline hover:text-white">
                    {{ __('Blog') }} &nbsp;
                    <i x-show="!open" class="fas fa-caret-down"></i>
                    <i x-show="open" class="fas fa-caret-up"></i>
                </x-web.nav-link>
            </x-slot>

            <x-slot name="content">
                <div class="block px-4 py-2 text-xs text-gray-400">
                    <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="https://blog.bancodealimentos.org.co/category/banco-de-alimentos-bogota/">Banco de Alimentos de Bogotá</x-jet-dropdown-link>
                    <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="https://blog.bancodealimentos.org.co/category/el-bab-en-los-medios/">El Bab en los medios</x-jet-dropdown-link>
                    <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="https://blog.bancodealimentos.org.co/category/noticias/">Noticias</x-jet-dropdown-link>
                </div>
            </x-slot>
        </x-web.dropdown>
        <x-web.nav-link class=" whitespace-nowrap no-underline hover:text-white" href="#">
            {{ __('Regala Generosidad') }}
        </x-web.nav-link>
        <x-web.nav-link class=" whitespace-nowrap no-underline hover:text-white" href="{{  route('web.contactUs')  }}" :active="request()->routeIs('web.contactUs')">
            {{ __('Contactanos') }}
        </x-web.nav-link>
        <!-- Button trigger modal -->
        {{-- <li>
            <a class="text-white" type="button" data-bs-toggle="modal" data-bs-target="#modalSearch">
                <i class="fas fa-search"></i>
            </a>
        </li> --}}
        {{-- <div class="relative">
            <input type="text" class="relative" placeholder="Type to search..."/>
            <div class="absolute">
                <i class="fas fa-search"></i>
            </div>
            
            <div class="absolute">
                <i class="fas fa-times"></i>
            </div>
        </div> --}}
    </ul>
</nav>
