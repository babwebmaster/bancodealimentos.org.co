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

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="my-4">  
                <h3 class="text-center font-bold text-white">{{  __('messages.Register')  }}</h3>
            </div>

            <div>
                <x-jet-label for="name" value="{{ __('messages.Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('messages.Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('messages.Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('messages.Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('messages.I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-slate-50 hover:text-gray-900">'.__('messages.Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-slate-50 hover:text-gray-900">'.__('messages.Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-slate-50 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('messages.Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('messages.Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
