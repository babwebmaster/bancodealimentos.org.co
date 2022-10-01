<div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        @foreach ($sliders as $slider)
            @if ($slider->status == 'yes')
                @if ($loop->first)
                    <li data-bs-target="#mainCarousel" data-bs-slide-to="{{  $loop->index  }}" class="active" aria-current="true" aria-label="{{ $slider->name}}"></li>
                @else
                    <li data-bs-target="#mainCarousel" data-bs-slide-to="{{  $loop->index  }}" aria-current="true" aria-label="{{ $slider->name}}"></li>
                @endif
            @endif 
        @endforeach
    </ol>
    <div class="carousel-inner" role="listbox">
        @foreach ($sliders as $slider)
            @if ($slider->status == 'yes')
                @if ($loop->first)
                    <div class="carousel-item relative active">
                        <img src="{{  $slider->content_desktop  }}" alt="{{  $slider->name  }}" class="hidden md:block">
                        <img src="{{  $slider->content_mobile  }}" alt="{{  $slider->name  }}" class="block md:hidden">
                        @if ($slider->caption_status == 'yes')
                            <div class="carousel-caption d-none d-md-block bottom-16">
                                <h3 class="font-bold text-xl text-shadow text-center">{{  $slider->content_caption  }}</h3>
                            </div>
                        @endif
                        @if ($slider->btn_status == 'yes')
                            <a class="absolute left-1/2 -translate-x-2/4 bottom-10 w-72 text-center sm:w-[300px] px-4 py-2 bg-red-600 rounded card-logo no-underline text-white" href="{{  $slider->btn_url  }}">{{  $slider->btn_text  }}</a>
                        @endif
                    </div>
                @else
                    <div class="carousel-item relative">
                        <img src="{{  $slider->content_desktop  }}" alt="{{  $slider->name  }}" class="hidden md:block">
                        <img src="{{  $slider->content_mobile  }}" alt="{{  $slider->name  }}" class="block md:hidden">
                        @if ($slider->caption_status == 'yes')
                            <div class="carousel-caption d-none d-md-block bottom-16">
                                <h3 class="font-bold text-xl text-shadow text-center">{{  $slider->content_caption  }}</h3>
                            </div>
                        @endif
                        @if ($slider->btn_status == 'yes')
                            <a class="absolute left-1/2 -translate-x-2/4 bottom-10 w-72 text-center sm:w-[300px] px-4 py-2 bg-red-600 rounded card-logo no-underline text-white" href="{{  $slider->btn_url  }}">{{  $slider->btn_text  }}</a>
                        @endif
                    </div>
                @endif
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
