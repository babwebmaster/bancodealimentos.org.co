<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.Dashboard') }}
        </h2>
    </x-slot>
    {{ Breadcrumbs::render('slide-donors.show', $slideDonor) }}
    <div class="mb-5">
        <div class="max-w-full mx-auto py-1 sm:px-6 lg:px-8 mb-8">
            <div class="bg-white-4/5 py-4 sm:px-6 lg:px-8 mb-8 rounded-lg shadow-md flex items-start justify-around">
                <div>
                    <h2 class="text-3xl font-bold text-center mb-6">{{  __('messages.Image')  }} #{{  $slideDonor->id  }}</h2>
                    <figure class="mb-0 text-center mx-auto">
                        <img src="{{  $slideDonor->image  }}" alt="{{  $slideDonor->name  }}" class="mb-8 w-48 mx-auto">
                    </figure>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-start">{{  __('messages.Characterist')  }}</h2>
                    <br>
                    <h3 class="text-xl">{{  __('messages.Slide name')  }}: {{  $slideDonor->name  }}</h3>
                    <br>
                    <p>{{  __('messages.Url image')  }}: {{  $slideDonor->image  }}</p>
                    <br>
                    <span>{{  __('messages.Image published')  }}: {{  $slideDonor->status == 'yes'?'si':'no' }}</span>
                    <br>
                    <span>{{  __('messages.Dimensions')  }}: 600x600</span>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>