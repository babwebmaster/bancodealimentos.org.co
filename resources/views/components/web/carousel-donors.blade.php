<!-- Slider main container -->
<div class="swiper donors">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        @foreach ($slideDonor as $sd)
            @if ($sd->status == 'yes')
                <div class="swiper-slide">
                    <img src="{{  $sd->image  }}" alt="{{  $sd->name  }}">
                </div>
            @endif
        @endforeach
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
  
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  
    <!-- If we need scrollbar -->
    {{-- <div class="swiper-scrollbar"></div> --}}
</div>