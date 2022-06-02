<x-guest-layout>
    <x-jet-authentication-card>
        {{-- <x-slot name="breadcrumb">
            <nav class="breadcrumb">
                <a class="breadcrumb-item hover:text-gray-900" href="{{  route('web.index')  }}"><i class="fa-solid fa-angles-left"></i> Inicio</a>
                <span class="breadcrumb-item active"> </span>
                <a class="breadcrumb-item hover:text-gray-900" href="{{  Route::is('login')? route('register'): route('login')  }}">{{ Route::is('login')? __('register'): __('Login') }} <i class="fa-solid fa-angles-right"></i></a>
            </nav>
        </x-slot> --}}
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="my-4">  
                <h3 class="text-center font-bold text-white">{{  __('messages.Login')  }}</h3>
            </div>
            <div>
                <x-jet-label for="email" value="{{ __('messages.Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('messages.Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-white">{{ __('messages.Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-slate-50 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('messages.Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('messages.Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
