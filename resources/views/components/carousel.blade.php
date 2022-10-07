<div id="mainCarousel" class="carousel slide carousel-fade relative" data-bs-ride="carousel">
    <ol class="carousel-indicators hidden">
        @foreach ($sliders as $slider)
            @if ($slider->status == 'yes')
                <li data-bs-target="#mainCarousel" data-bs-slide-to="{{  $loop->index  }}" class="{{ $loop->first ? 'active': ''}}" aria-current="true" aria-label="{{ $slider->name}}"></li>
            @endif 
        @endforeach
    </ol>
    <div class="carousel-inner" role="listbox">
        @foreach ($sliders as $slider)
            @if ($slider->status == 'yes')
                <div class="carousel-item relative {{ $loop->first ? 'active': '' }}">
                    <img src="{{  $slider->content_desktop  }}" alt="{{  $slider->name  }}" class="hidden md:block">
                    <img src="{{  $slider->content_mobile  }}" alt="{{  $slider->name  }}" class="block md:hidden">
                    @if ($slider->caption_status == 'yes')
                        <div class="carousel-caption d-none d-md-block bottom-20">
                            <h3 class="font-bold text-xl text-shadow text-center">{{  $slider->content_caption  }}</h3>
                        </div>
                    @endif
                    @if ($slider->btn_status == 'yes')
                        <a class="absolute z-20 left-1/2 -translate-x-2/4 bottom-12 w-72 text-center sm:w-[300px] px-4 py-2 bg-red-600 rounded card-logo no-underline text-white" href="{{  $slider->btn_url  }}">{{  $slider->btn_text  }}</a>
                    @endif
                    @if (Route::is('web.index'))
                        <x-web.carousel-svg />
                    @endif
                </div>
            @endif 
        @endforeach
    </div>
    @if (count($sliders) > 1)
        <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    @endif
</div>
