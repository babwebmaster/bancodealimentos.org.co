<nav x-data="{ open: false }" class="bg-bab border-b border-gray-100 py-2 w-full basis-full  md:basis-80 bg-bab">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto md:px-2">
        <div class="flex justify-between h-16 sm:flex-col">
            <div class="flex flex-row md:flex-col w-full">
                <!-- Logo -->
                <div class="shrink-0 flex items-center my-2">
                    <a href="{{ route('dashboard') }}" class="sm:mx-auto">
                        <x-jet-application-mark class="block h-full w-auto logo_bab" />
                    </a>
                </div>       
                <!-- Hamburger -->
                <div class="flex items-center md:hidden ml-auto mr-5">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-slate-50 hover:text-slate-400 focus:outline-none focus:text-slate-400 transition">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>              
                <br class="hidden md:block">
                <hr class="hidden md:block md:opacity-100 md:border-t md:border-white">
                <!-- Settings Dropdown -->
                <div class="hidden md:block mt-3 w-full relative">
                    <x-jet-dropdown align="left" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex w-full justify-center items-center text-slate-50 text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    {{ Auth::user()->name }}
                                    <img class="h-8 w-8 rounded-full object-cover ml-4" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('messages.Manage Account') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('messages.Profile') }}
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-jet-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('messages.Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
                <div class="hidden md:flex md:flex-col md:items-center mb-3">
                    <!-- Teams Dropdown -->
                    @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                        <div class="w-full relative">
                            <x-jet-dropdown align="left" width="60">
                                <x-slot name="trigger">
                                    <span class="block rounded-md text-center">
                                        <button type="button" class="flex justify-center items-center px-1 w-full py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-slate-50 bg-transparent hover:text-slate-500 focus:outline-none focus:bg-gray-50 focus:text-gray-900 active:bg-gray-50 active:text-gray-900 transition">
                                            {{ Auth::user()->currentTeam->name }}
    
                                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </span>
                                </x-slot>
    
                                <x-slot name="content">
                                    <div class="w-60">
                                        <!-- Team Management -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('messages.Manage Team') }}
                                        </div>
    
                                        <!-- Team Settings -->
                                        <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                            {{ __('messages.Team Settings') }}
                                        </x-jet-dropdown-link>
    
                                        @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                            <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                                {{ __('messages.Create New Team') }}
                                            </x-jet-dropdown-link>
                                        @endcan
    
                                        <div class="border-t border-gray-100"></div>
    
                                        <!-- Team Switcher -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('messages.Switch Teams') }}
                                        </div>
    
                                        @foreach (Auth::user()->allTeams() as $team)
                                            <x-jet-switchable-team :team="$team" />
                                        @endforeach
                                    </div>
                                </x-slot>
                            </x-jet-dropdown>
                        </div>
                    @endif
                </div>
                <hr class="hidden md:block md:opacity-100 md:border-t md:border-white">
                <!-- Navigation Links -->
                <div class="hidden w-full text-slate-50 md:flex md:flex-col md:items-center md:my-5">
                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('messages.Dashboard') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                        {{ __('messages.User Profile') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('user.index') }}" :active="request()->routeIs('user.index') || request()->routeIs('user.show') || request()->routeIs('user.create') || request()->routeIs('user.edit')">
                        {{ __('messages.User Management') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('slide.index') }}" :active="request()->routeIs('slide.index') || request()->routeIs('slide.show') || request()->routeIs('slide.create') || request()->routeIs('slide.edit')">
                        {{ __('messages.Carousel') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('slide-donors.index') }}" :active="request()->routeIs('slide-donors.index') || request()->routeIs('slide-donors.show') || request()->routeIs('slide-donors.create') || request()->routeIs('slide-donors.edit')">
                        {{ __('messages.Our donors') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('cifras.index') }}" :active="request()->routeIs('cifras.index') || request()->routeIs('cifras.show') || request()->routeIs('cifras.create') || request()->routeIs('cifras.edit')">
                        {{ __('messages.Cifras') }}
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('reconocimientos.index') }}" :active="request()->routeIs('reconocimientos.index') || request()->routeIs('reconocimientos.show') || request()->routeIs('reconocimientos.create') || request()->routeIs('reconocimientos.edit')">
                        {{ __('messages.Reconocimientos') }}
                    </x-jet-nav-link>
                </div>
            </div>
            
        </div>
        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="md:hidden bg-bab w-full z-20 ">
            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="flex items-center px-4">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <div class="shrink-0 mr-3">
                            <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        </div>
                    @endif

                    <div>
                        <div class="font-medium text-base text-slate-50">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-slate-200">{{ Auth::user()->email }}</div>
                    </div>
                </div>

                <div class="mt-3 space-y-1">
                    <!-- Account Management -->
                    <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                        {{ __('messages.Profile') }}
                    </x-jet-responsive-nav-link>

                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                            {{ __('API Tokens') }}
                        </x-jet-responsive-nav-link>
                    @endif

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf

                        <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                    @click.prevent="$root.submit();">
                            {{ __('messages.Log Out') }}
                        </x-jet-responsive-nav-link>
                    </form>

                    <!-- Team Management -->
                    @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                        <div class="border-t border-gray-200"></div>

                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('messages.Manage Team') }}
                        </div>

                        <!-- Team Settings -->
                        <x-jet-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                            {{ __('messages.Team Settings') }}
                        </x-jet-responsive-nav-link>

                        @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                            <x-jet-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                                {{ __('messages.Create New Team') }}
                            </x-jet-responsive-nav-link>
                        @endcan

                        <div class="border-t border-gray-200"></div>

                        <!-- Team Switcher -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('messages.Switch Teams') }}
                        </div>

                        @foreach (Auth::user()->allTeams() as $team)
                            <x-jet-switchable-team :team="$team" component="jet-responsive-nav-link" />
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="pt-2 pb-3 space-y-1">
                <div class="border-t border-gray-200"></div>
                <div class="block px-4 py-2 text-xs text-gray-400">
                    {{ __('messages.Routes') }}
                </div>
                <x-jet-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('messages.Dashboard') }}
                </x-jet-responsive-nav-link>
                <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('messages.User Profile') }}
                </x-jet-responsive-nav-link>
                <x-jet-responsive-nav-link href="{{ route('user.index') }}" :active="request()->routeIs('user.index') || request()->routeIs('user.show') || request()->routeIs('user.create') || request()->routeIs('user.edit')">
                    {{ __('messages.User Management') }}
                </x-jet-responsive-nav-link>
                <x-jet-responsive-nav-link href="{{ route('slide.index') }}" :active="request()->routeIs('slide.index') || request()->routeIs('slide.show') || request()->routeIs('slide.create') || request()->routeIs('slide.edit')">
                    {{ __('messages.Carousel') }}
                </x-jet-responsive-nav-link>
                <x-jet-responsive-nav-link href="{{ route('slide-donors.index') }}" :active="request()->routeIs('slide-donors.index') || request()->routeIs('slide-donors.show') || request()->routeIs('slide-donors.create') || request()->routeIs('slide-donors.edit')">
                    {{ __('messages.Our donors') }}
                </x-jet-responsive-nav-link>
                <x-jet-responsive-nav-link href="{{ route('slide-donors.index') }}" :active="request()->routeIs('slide-donors.index') || request()->routeIs('slide-donors.show') || request()->routeIs('slide-donors.create') || request()->routeIs('slide-donors.edit')">
                    {{ __('messages.Our donors') }}
                </x-jet-responsive-nav-link>
                <x-jet-responsive-nav-link href="{{ route('cifras.index') }}" :active="request()->routeIs('cifras.index') || request()->routeIs('cifras.show') || request()->routeIs('cifras.create') || request()->routeIs('cifras.edit')">
                    {{ __('messages.Cifras') }}
                </x-jet-responsive-nav-link>
                <x-jet-responsive-nav-link href="{{ route('reconocimientos.index') }}" :active="request()->routeIs('reconocimientos.index') || request()->routeIs('reconocimientos.show') || request()->routeIs('reconocimientos.create') || request()->routeIs('reconocimientos.edit')">
                    {{ __('messages.Reconocimientos') }}
                </x-jet-responsive-nav-link>
            </div>
        </div>
    </div>
</nav>
