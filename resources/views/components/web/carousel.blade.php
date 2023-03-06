<!-- Slider main container -->
<div class="swiper-carousel relative">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper relative">
        <!-- Slides -->
        @foreach ($sliders as $slider)
            @if ($slider->status == 'yes')
                <div class="swiper-slide relative">
                    <img src="{{  $slider->content_desktop  }}" alt="{{  $slider->name  }}" class="hidden md:block">
                    <img src="{{  $slider->content_mobile  }}" alt="{{  $slider->name  }}" class="block md:hidden">
                    @if ($slider->caption_status == 'yes')
                        <div class="carousel-caption hidden md:block bottom-20">
                            <h3 class="font-bold text-xl text-shadow text-center">{{  $slider->content_caption  }}</h3>
                        </div>
                    @endif
                    @if ($slider->btn_status == 'yes')
                        <a class="absolute z-20 left-1/2 -translate-x-2/4 bottom-12 w-72 text-center sm:w-[300px] px-4 py-2 bg-red-600 border-2 border-transparent rounded card-logo no-underline text-white hover:bg-red-500 focus:border-red-400" href="{{  $slider->btn_url  }}">{{  $slider->btn_text  }}</a>
                    @endif
                </div>
            @endif 
        @endforeach
    </div>
    @if (count($sliders) > 1)
        <!-- If we need pagination -->
        <div class="swiper-pagination carousel"></div>
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev carousel"></div>
        <div class="swiper-button-next carousel"></div>
    @endif
</div>
