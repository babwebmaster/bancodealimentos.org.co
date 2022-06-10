<div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        @php
            $j=0;
        @endphp
        @for ($i = 0; $i < count($sliders); $i++)
            @if ($sliders[$i]->status == 'yes')
                @php
                    $j++;
                @endphp
                @if ($j==1)
                    <li data-bs-target="#mainCarousel" data-bs-slide-to="{{  $j-1  }}" class="active" aria-current="true" aria-label="{{ $sliders[$i]->name}}"></li>
                @else
                    <li data-bs-target="#mainCarousel" data-bs-slide-to="{{  $j-1  }}" aria-current="true" aria-label="{{ $sliders[$i]->name}}"></li>
                @endif
            @endif
        @endfor
    </ol>
    <div class="carousel-inner" role="listbox">
        @php
            $j=0;
        @endphp
        @for ($i = 0; $i < count($sliders); $i++)
            @if ($sliders[$i]->status == 'yes')
                @php
                    $j++;
                @endphp
                @if ($j==1)
                    <div class="carousel-item active">
                        <img src="{{  $sliders[$i]->content_desktop  }}" alt="{{  $sliders[$i]->name  }}" class="hidden md:block">
                        <img src="{{  $sliders[$i]->content_mobile  }}" alt="{{  $sliders[$i]->name  }}" class="block md:hidden">
                    </div>
                @else
                    <div class="carousel-item">
                        <img src="{{  $sliders[$i]->content_desktop  }}" alt="{{  $sliders[$i]->name  }}" class="hidden md:block">
                        <img src="{{  $sliders[$i]->content_mobile  }}" alt="{{  $sliders[$i]->name  }}" class="block md:hidden">
                    </div>
                @endif
            @endif
        @endfor
    </div>
    @php
        $j=0;
    @endphp
    @for ($i = 0; $i < count($sliders); $i++)
        @if ($sliders[$i]->status == 'yes')
            @php
                $j++;
            @endphp
        @endif
    @endfor
    @if ($j != 1 && $j > 1)
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