<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.Profile') }}
        </h2>
    </x-slot>

    <div class="mb-5">
        <div class="max-w-full mx-auto py-1 sm:px-6 lg:px-8">
            <div class="w-full rounded-lg bg-courves-profile">
            </div>
            <!-- Current Profile Photo -->
            <div class="w-11/12 mx-auto p-3 rounded-lg bg-white-4/5 -translate-y-1/2 flex" x-show="! photoPreview">
                <img src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}" class="rounded-md h-20 w-20 object-cover">
                <div class="block">
                    <h3 class="ml-4 text-gray-900 text-2xl font-bold capitalize">{{ $user->name }}</h3>
                    <p class="ml-4 text-gray-700 text-xl font-bold capitalize">{{ $user->email }}</p>
                    <span class="ml-4 text-gray-700 text-md font-bold capitalize">{{ $user->updated_at->format('d-M-Y') }}</span>
                </div>
            </div>
            <div class="lg:flex lg:flex-wrap">
                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                    <div class="mt-5 mb-4 md:mt-0 w-6/6 lg:w-4/6">
                        @livewire('profile.update-profile-information-form')
                    </div>
                @endif
    
                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                    <div class="mt-5 mb-4 md:mt-0 w-6/6 lg:w-2/6">
                        @livewire('profile.update-password-form')
                    </div>
                @endif
    
                @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                    <div class="mt-5 md:mt-0 w-6/6 lg:w-2/6">
                        @livewire('profile.two-factor-authentication-form')
                    </div>
    
                    <x-jet-section-border />
                @endif
    
                <div class="mt-5 md:mt-0 w-6/6 lg:w-2/6">
                    @livewire('profile.logout-other-browser-sessions-form')
                </div>
    
                @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                    <x-jet-section-border />
    
                    <div class="mt-5 md:mt-0 w-6/6 lg:w-2/6">
                        @livewire('profile.delete-user-form')
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
