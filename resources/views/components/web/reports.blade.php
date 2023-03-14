<div class="flex flex-col md:flex-row md:flex-wrap justify-center md:justify-around items-center gap-4 my-8">
    @foreach ($reports as $r)
        <div class="basis-3/12">
            <h3 class="text-center font-extrabold text-gray-600 text-2xl">{{  $r->name  }}</h3>
            <hr class="my-2 border-red-500" />
            <figure class="mb-4">
                <img src="{{  $r->image  }}" alt="{{  $r->name  }}">
            </figure>
            <div class="flex justify-center items-center gap-4">
                <x-web.alink :link="$r->linkSpanish" class="px-6 py-2 text-lg capitalize">Leer</x-web.alink>
                @if ($r->linkEnglish)
                    <x-web.alink :link="$r->linkEnglish">Leer</x-web.alink>    
                @endif
                @if ($r->linkFrench)
                    <x-web.alink :link="$r->linkFrench">Leer</x-web.alink>
                @endif
            </div>
        </div>
    @endforeach
</div>