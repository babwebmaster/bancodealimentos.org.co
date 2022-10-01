<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.Dashboard') }}
        </h2>
    </x-slot>
    <div class="mb-5 lg:flex">
        <div class="max-w-full mx-auto py-1 sm:px-6 lg:px-2 mb-8">
            <div class="bg-white-4/5 py-4 sm:px-6 lg:px-2 mb-8 rounded-lg shadow-md">
                <h2 class="text-3xl font-bold text-center mb-6">{{  __('messages.Desktop')  }}</h2>
                <img src="{{  $slide->content_desktop  }}" alt="{{  $slide->name  }}" class="mb-8">
                <h2 class="text-2xl font-bold text-center">{{  __('messages.Characterist')  }}</h2>
                <p>{{  __('messages.Slide name')  }}: {{  $slide->name  }}</p>
                <p>{{  __('messages.Url image')  }}: {{  $slide->content_desktop  }}</p>
                <p>{{  __('messages.Caption_status')  }}: {{  $slide->caption_status == 'yes'?'si':'no'  }} <i class="{{  $slide->caption_status == 'yes'?'fa-sharp fa-solid fa-circle-check text-green-500':'fa-solid fa-rectangle-xmark text-red-700'  }}"></i></p>
                @if ($slide->caption_status == 'yes')
                    <p>{{  __('messages.Caption text')  }}: {{  $slide->content_caption  }}</p>
                @endif
                <p>{{  __('messages.Btn_status')  }}: {{  $slide->btn_status == 'yes'?'si':'no'  }} <i class="{{  $slide->btn_status == 'yes'?'fa-sharp fa-solid fa-circle-check text-green-500':'fa-solid fa-rectangle-xmark text-red-700'  }}"></i></p>
                @if ($slide->btn_status == 'yes')
                <p>{{  __('messages.Btn_text')  }}: {{  $slide->btn_text  }}</p>
                <p>{{  __('messages.Btn_url')  }}: {{  $slide->btn_url  }}</p>
                @endif
                <p>{{  __('messages.Slide published')  }}: {{  $slide->status == 'yes'?'si':'no'  }}</p>
                <p>{{  __('messages.Dimensions')  }}: 1920x700</p>
            </div>
        </div>
        <div class="max-w-full mx-auto py-1 sm:px-6 lg:px-2">
            <div class="bg-white-4/5 py-4 sm:px-6 lg:px-2 mb-8 rounded-lg shadow-md">
                <h2 class="text-3xl font-bold text-center mb-6">{{  __('messages.Mobile')  }}</h2>
                <img src="{{  $slide->content_mobile  }}" alt="{{  $slide->name  }}" class="mb-8 block mx-auto">
                <h2 class="text-2xl font-bold text-center">{{  __('messages.Characterist')  }}</h2>
                <p>{{  __('messages.Slide name')  }}: {{  $slide->name  }}</p>
                <p>{{  __('messages.Url image')  }}: {{  $slide->content_mobile  }}</p>
                {{-- <p>{{  __('messages.Caption_status')  }}: {{  $slide->caption_status == 'yes'?'si':'no'  }} <i class="{{  $slide->caption_status == 'yes'?'fa-sharp fa-solid fa-circle-check text-green-500':'fa-solid fa-rectangle-xmark text-red-700'  }}"></i></p>
                @if ($slide->caption_status == 'yes')
                    <p>{{  __('messages.Caption text')  }}: {{  $slide->content_caption  }}</p>
                @endif --}}
                <p>{{  __('messages.Btn_status')  }}: {{  $slide->btn_status == 'yes'?'si':'no'  }} <i class="{{  $slide->btn_status == 'yes'?'fa-sharp fa-solid fa-circle-check text-green-500':'fa-solid fa-rectangle-xmark text-red-700'  }}"></i></p>
                @if ($slide->btn_status == 'yes')
                    <p>{{  __('messages.Btn_text')  }}: {{  $slide->btn_text  }}</p>
                    <p>{{  __('messages.Btn_url')  }}: {{  $slide->btn_url  }}</p>
                @endif
                <span>{{  __('messages.Slide published')  }}: {{  $slide->status == 'yes'?'si':'no'  }}</span><br>
                <span>{{  __('messages.Dimensions')  }}: 778x778</span>
            </div>
        </div>
    </div>
</x-app-layout>