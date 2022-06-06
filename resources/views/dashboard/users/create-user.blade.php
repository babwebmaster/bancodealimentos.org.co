<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.Dashboard') }}
        </h2>
    </x-slot>
    <div class="mb-5">
        <div class="max-w-full mx-auto py-1 sm:px-6 lg:px-8 flex flex-column items-center justify-center">
            <form action="{{  route('user.store')  }}" class="px-4 py-4 w-full bg-bab-shadow rounded-md" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                        {{  __('messages.User Name')  }}
                    </label>
                    <input type="text" name="name" id="name" placeholder="{{  __('messages.User Name')  }}" value="{{  old("name", $user->name)  }}"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
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
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    @if ($errors->has('email'))
                        <small id="helpId" class="text-red-600">
                            @foreach ($errors->get('email') as $e)
                                {{  $e  }}
                            @endforeach
                        </small>
                    @endif
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                        {{  __('messages.Password')  }}
                    </label>
                    <input type="password" name="password" id="password" placeholder="********"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    @if ($errors->has('password'))
                        <small id="helpId" class="text-red-600">
                            @foreach ($errors->get('password') as $e)
                                {{  $e  }}
                            @endforeach
                        </small>
                    @endif
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                        {{  __('messages.Confirm Password')  }}
                    </label>
                    <input type="password" name="password_confirm" id="password_confirm"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    @if ($errors->has('password_confirm'))
                        <small id="helpId" class="text-red-600">
                            @foreach ($errors->get('password_confirm') as $e)
                                {{  $e  }}
                            @endforeach
                        </small>
                    @endif
                </div>
                <div class="w-full flex justify-center px-2 mt-2">
                    <button type="submit" class="inline-flex items-center justify-end px-4 py-2 bg-bab border border-transparent rounded-md font-semibold text-md text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                        {{  __('Create User')  }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>