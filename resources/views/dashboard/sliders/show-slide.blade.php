<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.Dashboard') }}
        </h2>
    </x-slot>
    <div class="mb-5">
        <div class="max-w-full mx-auto py-1 sm:px-6 lg:px-8 mb-8">
            <div class="bg-white-4/5 py-4 sm:px-6 lg:px-8 mb-8 rounded-lg shadow-md">
                <h2 class="text-3xl font-bold text-center mb-6">{{  __('messages.Desktop')  }}</h2>
                <img src="{{  $slide->content_desktop  }}" alt="{{  $slide->name  }}" class="mb-8">
                <h2 class="text-2xl font-bold text-center">{{  __('messages.Characterist')  }}</h2>
                <h3>{{  __('messages.Slide name')  }}: {{  $slide->name  }}</h3>
                <p>{{  __('messages.Url image')  }}: {{  $slide->content_desktop  }}</p>
                <span>{{  __('messages.Slide published')  }}: {{  $slide->status == 'yes'?'si':'no'  }}</span><br>
                <span>{{  __('messages.Dimensions')  }}: 1920x700</span>
            </div>
        </div>
        <div class="max-w-full mx-auto py-1 sm:px-6 lg:px-8">
            <div class="bg-white-4/5 py-4 sm:px-6 lg:px-8 mb-8 rounded-lg shadow-md">
                <h2 class="text-3xl font-bold text-center mb-6">{{  __('messages.Mobile')  }}</h2>
                <img src="{{  $slide->content_mobile  }}" alt="{{  $slide->name  }}" class="mb-8 block mx-auto">
                <h2 class="text-2xl font-bold text-center">{{  __('messages.Characterist')  }}</h2>
                <h3>{{  __('messages.Slide name')  }}: {{  $slide->name  }}</h3>
                <p>{{  __('messages.Url image')  }}: {{  $slide->content_mobile  }}</p>
                <span>{{  __('messages.Slide published')  }}: {{  $slide->status == 'yes'?'si':'no'  }}</span><br>
                <span>{{  __('messages.Dimensions')  }}: 778x778</span>
            </div>
        </div>
    </div>
</x-app-layout>