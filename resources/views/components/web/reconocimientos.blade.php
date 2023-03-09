<div class="grid grid-rows-1 gap-3 sm:gap-6 grid-cols-[10fr_1fr_10fr] timeline ">
    @foreach ($reconocimientos as $r)
        @if ($loop->iteration % 2 != 0)
            <div class="flex items-center justify-center bg-gray-200 rounded-md relative">
                <div class="w-full block triangle-left py-1 sm:py-2 px-1 sm:px-4">
                    <h3 class="text-left mt-1 sm:mt-4 font-bold text-sm  sm:text-2xl mb-2 sm:mb-4 text-bab">
                        {{$r->date_announcement}} - {{$r->title}}
                    </h3>
                    <p class="text-left text-red-bab text-xs sm:text-base">
                        {{$r->content}}
                    </p>
                    @if (!empty($r->image))
                        <img src="{{$r->image}}" alt="{{$r->title}}" class="block w-full mx-auto max-w-[160px] max-h-28">
                    @endif
                </div>
            </div>
        @else
            <p></p>       
        @endif
        <div class="flex justify-center items-center relative">
            <div class="w-8 sm:w-14 h-8 sm:h-14 flex justify-center items-center rounded-full bg-white border-2 sm:border-4 border-dashed border-bab">
                <i class="{{ $r->icon }} absolute text-lg sm:text-2xl sm:font-extrabold" style="color: {{ $r->color }}"></i>
            </div>
        </div>
        @if ($loop->iteration % 2 == 0)
            <div class="flex items-center justify-center bg-gray-200 rounded-md relative">
                <div class="w-full block triangle-right py-1 sm:py-2 px-1 sm:px-4">
                    <h3 class="text-left mt-1 sm:mt-4 font-bold text-sm sm:text-2xl mb-2 sm:mb-4 text-bab">
                        {{$r->date_announcement}} - {{$r->title}}
                    </h3>        
                    <p class="text-left text-red-bab text-xs sm:text-base">
                        {{$r->content}}
                    </p>
                    @if (!empty($r->image))
                        <img src="{{$r->image}}" alt="{{$r->title}}" class="block w-full mx-auto max-w-[160px] max-h-28">
                    @endif
                </div>
            </div>
        @else
            <p></p>
        @endif
    @endforeach
</div>