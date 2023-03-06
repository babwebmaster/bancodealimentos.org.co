<div class="swiper blog px-4 py-8">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <!-- Slides -->
        @foreach ($posts as $p)
            <div class="swiper-slide">
                <figure class=" aspect-video">
                    {!!  $p->imagen  !!}
                </figure>
                <h4 class="text-center text-xl mb-4">
                    {{  $p->titulo  }}
                </h3>
                <p class="text-justify text-sm px-4 truncate-4">
                    {{  $p->excerpt  }}
                </p>
                <div class="flex justify-center items-center">
                    <x-web.alink :link="$p->link">Leer Más</x-web.alink>
                </div>
            </div>
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