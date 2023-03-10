<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.Dashboard') }}
        </h2>
    </x-slot>
    <div class="mb-5">
        <div class="max-w-full mx-auto py-1 sm:px-6 lg:px-8 mb-8">
            <div class="bg-white-4/5 py-4 sm:px-6 lg:px-8 mb-8 rounded-lg shadow-md flex items-start justify-around">
                <div class="mx-auto basis-1/3 py-4 px-6">
                    <h3 class="text-center font-extrabold text-gray-600 text-2xl">{{  $report->name  }}</h3>
                    <hr class="my-2 border-red-500" />
                    <figure class="mb-4">
                        <img src="{{  $report->image  }}" class="block mx-auto" alt="{{  $report->name  }}">
                    </figure>
                    <div class="flex justify-center items-center gap-4">
                        <x-web.alink :link="$report->linkSpanish" class="px-6 py-2 text-lg capitalize">Leer</x-web.alink>
                        @if ($report->linkEnglish)
                            <x-web.alink :link="$report->linkEnglish">Leer</x-web.alink>    
                        @endif
                        @if ($report->linkFrench)
                            <x-web.alink :link="$report->linkFrench">Leer</x-web.alink>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>