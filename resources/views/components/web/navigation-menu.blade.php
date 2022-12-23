<nav class="menu-home h-20" x-data="{ open : false }">
    <div class="flex justify-between px-3">
        <a class="lg:basis-1/3 navbar-brand" href="#">
            <figure class="mb-0">
                <img src="{{ asset('images/Logo-Horizontal-Blanco-y-rojo.png') }}" alt="{{-- $altLogo --}}" class=" w-52">
            </figure>
        </a>
        <ul class="hidden lg:basis-2/3 lg:w-full lg:flex lg:items-center lg:justify-center lg:gap-2">
            <x-jet-nav-link class=" whitespace-nowrap no-underline hover:text-white" href="{{  route('web.index')  }}">
                        {{ __('Inicio') }}
            </x-jet-nav-link>
            <x-jet-dropdown align="left" width="60">
                <x-slot name="trigger">
                    <x-jet-nav-link class=" whitespace-nowrap no-underline hover:text-white">
                        {{ __('Nosotros') }} &nbsp;
                        <i x-show="!open" class="fas fa-caret-down"></i>
                        <i x-show="open" class="fas fa-caret-up"></i>
                    </x-jet-nav-link>
                </x-slot>

                <x-slot name="content">
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.ourValues')  }}">Nuestros Valores</x-jet-dropdown-link>
                        <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.ourLeaders')  }}">Nuestros Líderes</x-jet-dropdown-link>
                        <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.managementReports')  }}">Informes de Gestión</x-jet-dropdown-link>
                    </div>
                </x-slot>
            </x-jet-dropdown>
            <x-jet-dropdown align="left" width="60">
                <x-slot name="trigger">
                    <x-jet-nav-link class=" whitespace-nowrap no-underline hover:text-white">
                        {{ __('Ayúdanos a ayudar') }} &nbsp;
                        <i x-show="!open" class="fas fa-caret-down"></i>
                        <i x-show="open" class="fas fa-caret-up"></i>
                    </x-jet-nav-link>
                </x-slot>

                <x-slot name="content">
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.cashDonations')  }}">Donaciones en efectivo</x-jet-dropdown-link>
                        <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.corporateValueProposition')  }}">RSE</x-jet-dropdown-link>
                        <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.corporateValueProposition')  }}">Programa Nutrición Integral</x-jet-dropdown-link>
                        <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.corabastos')  }}">Programa Corabastos</x-jet-dropdown-link>
                        <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.prea')  }}">PREA</x-jet-dropdown-link>
                        <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.volunteering')  }}">Voluntariado Corporativo</x-jet-dropdown-link>
                        <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.academy')  }}">Academia</x-jet-dropdown-link>
                        <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.donationsInKind')  }}">Donaciones en especie</x-jet-dropdown-link>
                    </div>
                </x-slot>
            </x-jet-dropdown>
            <x-jet-dropdown align="left" width="60">
                <x-slot name="trigger">
                    <x-jet-nav-link class=" whitespace-nowrap no-underline hover:text-white">
                        {{ __('Beneficiarios') }} &nbsp;
                        <i x-show="!open" class="fas fa-caret-down"></i>
                        <i x-show="open" class="fas fa-caret-up"></i>
                    </x-jet-nav-link>
                </x-slot>

                <x-slot name="content">
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.cashDonations')  }}">Quiero Ser Beneficiario</x-jet-dropdown-link>
                        <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.corporateValueProposition')  }}">Soy Beneficiario</x-jet-dropdown-link>
                        <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.corporateValueProposition')  }}">Receraeio</x-jet-dropdown-link>
                    </div>
                </x-slot>
            </x-jet-dropdown>
            <x-jet-dropdown align="left" width="60">
                <x-slot name="trigger">
                    <x-jet-nav-link class=" whitespace-nowrap no-underline hover:text-white">
                        {{ __('Blog') }} &nbsp;
                        <i x-show="!open" class="fas fa-caret-down"></i>
                        <i x-show="open" class="fas fa-caret-up"></i>
                    </x-jet-nav-link>
                </x-slot>

                <x-slot name="content">
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="https://www.bancodealimentos.org.co/quiero-ser-beneficiario/">Quiero Ser Beneficiario</x-jet-dropdown-link>
                        <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="https://blog.bancodealimentos.org.co/category/el-bab-en-los-medios/">El Bab en los medios</x-jet-dropdown-link>
                        <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="https://blog.bancodealimentos.org.co/category/noticias/">Noticias</x-jet-dropdown-link>
                    </div>
                </x-slot>
            </x-jet-dropdown>
            <x-jet-nav-link class=" whitespace-nowrap no-underline hover:text-white" href="#">
                {{ __('Regala Generosidad') }}
            </x-jet-nav-link>
            <x-jet-nav-link class=" whitespace-nowrap no-underline hover:text-white" href="{{  route('web.index')  }}">
                {{ __('Contactanos') }}
            </x-jet-nav-link>
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
        <button @click="open = !open" class="text-white pr-4 font-semibold text-2xl">
            <i class="fas" :class="open ? 'fa-xmark':'fa-bars'"></i>
        </button>
    </div>
    <ul  class="lg:hidden w-full flex-col items-center justify-center py-4 bg-bab" x-show="open" :class="open ? 'flex': 'hidden'" x-transition.duration.500ms>
        <x-jet-nav-link class=" whitespace-nowrap no-underline hover:text-white" href="{{  route('web.index')  }}">
                    {{ __('Inicio') }}
        </x-jet-nav-link>
        <x-jet-dropdown align="center" width="60">
            <x-slot name="trigger">
                <x-jet-nav-link class=" whitespace-nowrap no-underline hover:text-white">
                    {{ __('Nosotros') }} &nbsp;
                    <i x-show="!open" class="fas fa-caret-down"></i>
                    <i x-show="open" class="fas fa-caret-up"></i>
                </x-jet-nav-link>
            </x-slot>

            <x-slot name="content">
                <div class="block px-4 py-2 text-xs text-gray-400">
                    <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.ourValues')  }}">Nuestros Valores</x-jet-dropdown-link>
                    <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.ourLeaders')  }}">Nuestros Líderes</x-jet-dropdown-link>
                    <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.managementReports')  }}">Informes de Gestión</x-jet-dropdown-link>
                </div>
            </x-slot>
        </x-jet-dropdown>
        <x-jet-dropdown align="center" width="60">
            <x-slot name="trigger">
                <x-jet-nav-link class=" whitespace-nowrap no-underline hover:text-white">
                    {{ __('Ayúdanos a ayudar') }} &nbsp;
                    <i x-show="!open" class="fas fa-caret-down"></i>
                    <i x-show="open" class="fas fa-caret-up"></i>
                </x-jet-nav-link>
            </x-slot>

            <x-slot name="content">
                <div class="block px-4 py-2 text-xs text-gray-400">
                    <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.cashDonations')  }}">Donaciones en efectivo</x-jet-dropdown-link>
                    <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.corporateValueProposition')  }}">RSE</x-jet-dropdown-link>
                    <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.corporateValueProposition')  }}">Programa Nutrición Integral</x-jet-dropdown-link>
                    <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.corabastos')  }}">Programa Corabastos</x-jet-dropdown-link>
                    <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.prea')  }}">PREA</x-jet-dropdown-link>
                    <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.volunteering')  }}">Voluntariado Corporativo</x-jet-dropdown-link>
                    <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.academy')  }}">Academia</x-jet-dropdown-link>
                    <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.donationsInKind')  }}">Donaciones en especie</x-jet-dropdown-link>
                </div>
            </x-slot>
        </x-jet-dropdown>
        <x-jet-dropdown align="center" width="60">
            <x-slot name="trigger">
                <x-jet-nav-link class=" whitespace-nowrap no-underline hover:text-white">
                    {{ __('Beneficiarios') }} &nbsp;
                    <i x-show="!open" class="fas fa-caret-down"></i>
                    <i x-show="open" class="fas fa-caret-up"></i>
                </x-jet-nav-link>
            </x-slot>

            <x-slot name="content">
                <div class="block px-4 py-2 text-xs text-gray-400">
                    <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.cashDonations')  }}">Quiero Ser Beneficiario</x-jet-dropdown-link>
                    <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.corporateValueProposition')  }}">Soy Beneficiario</x-jet-dropdown-link>
                    <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="{{  route('web.corporateValueProposition')  }}">Receraeio</x-jet-dropdown-link>
                </div>
            </x-slot>
        </x-jet-dropdown>
        <x-jet-dropdown align="center" width="60">
            <x-slot name="trigger">
                <x-jet-nav-link class=" whitespace-nowrap no-underline hover:text-white">
                    {{ __('Blog') }} &nbsp;
                    <i x-show="!open" class="fas fa-caret-down"></i>
                    <i x-show="open" class="fas fa-caret-up"></i>
                </x-jet-nav-link>
            </x-slot>

            <x-slot name="content">
                <div class="block px-4 py-2 text-xs text-gray-400">
                    <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="https://www.bancodealimentos.org.co/quiero-ser-beneficiario/">Quiero Ser Beneficiario</x-jet-dropdown-link>
                    <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="https://blog.bancodealimentos.org.co/category/el-bab-en-los-medios/">El Bab en los medios</x-jet-dropdown-link>
                    <x-jet-dropdown-link class=" whitespace-nowrap no-underline" href="https://blog.bancodealimentos.org.co/category/noticias/">Noticias</x-jet-dropdown-link>
                </div>
            </x-slot>
        </x-jet-dropdown>
        <x-jet-nav-link class=" whitespace-nowrap no-underline hover:text-white" href="#">
            {{ __('Regala Generosidad') }}
        </x-jet-nav-link>
        <x-jet-nav-link class=" whitespace-nowrap no-underline hover:text-white" href="{{  route('web.index')  }}">
            {{ __('Contactanos') }}
        </x-jet-nav-link>
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
