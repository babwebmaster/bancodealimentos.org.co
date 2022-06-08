<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('messages.Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-bab-shadow overflow-hidden shadow-xl sm:rounded-lg border-none mb-8">
                <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        @for ($i = 0; $i < count($sliders); $i++)
                            @if ($i==0)
                                <li data-bs-target="#mainCarousel" data-bs-slide-to="{{  $i  }}" class="active" aria-current="true" aria-label="{{ $sliders[$i]->name}}"></li>
                            @else
                                <li data-bs-target="#mainCarousel" data-bs-slide-to="{{  $i  }}" aria-current="true" aria-label="{{ $sliders[$i]->name}}"></li>
                            @endif
                        @endfor
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        @for ($i = 0; $i < count($sliders); $i++)
                            @if ($i==0)
                                <div class="carousel-item active">
                                    <img src="{{  $sliders[$i]->content  }}" alt="{{  $sliders[$i]->name  }}">
                                </div>
                            @else
                                <div class="carousel-item">
                                    <img src="{{  $sliders[$i]->content  }}" alt="{{  $sliders[$i]->name  }}">
                                </div>
                            @endif
                        @endfor
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                </div>
            </div>
            @livewire('search-slide', ['sliders' => $sliders])
        </div>
    </div>
</x-app-layout>
