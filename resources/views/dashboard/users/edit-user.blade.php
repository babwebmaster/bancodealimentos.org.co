<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.Dashboard') }}
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
                <form action="{{  route('user.update', $user->id)  }}" class="px-4 py-4 w-full md:w-3/6 md:mx-auto bg-white-4/5 rounded-md" method="POST">
                    @csrf
                    @method('PATCH')
                    <h3 class="text-center text-2xl font-bold">Datos Personales</h3>
                    <div class="mb-5">
                        <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                            {{  __('messages.User Name')  }}
                        </label>
                        <input type="text" name="name" id="name" placeholder="{{  __('messages.User Name')  }}" value="{{  old("name", $user->name)  }}"
                            class="w-full rounded-md border border-[#e0e0e0] bg-transparent py-3 px-6 text-base font-medium text-gry-900 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        @if ($errors->has('name'))
                            <small id="helpId" class="text-red-600">
                                @foreach ($errors->get('name') as $e)
                                    {{  $e  }}
                                @endforeach
                            </small>
                        @endif
                    </div>
                    <div class="mb-5">
                        <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                            {{  __('messages.Email')  }}
                        </label>
                        <input type="email" name="email" id="email" placeholder="example@domain.com" value="{{  old("email", $user->email)  }}"
                            class="w-full rounded-md border border-[#e0e0e0] bg-transparent py-3 px-6 text-base font-medium text-gry-900 outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        @if ($errors->has('email'))
                            <small id="helpId" class="text-red-600">
                                @foreach ($errors->get('email') as $e)
                                    {{  $e  }}
                                @endforeach
                            </small>
                        @endif
                    </div>
                    <div class="w-full flex justify-center px-2 mt-2">
                        <button type="submit" class="inline-flex items-center justify-end px-4 py-2 bg-bab border border-transparent rounded-md font-semibold text-md text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                            {{  __('messages.Edit User')  }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>