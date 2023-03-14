<div class="flex flex-col md:flex-row flex-wrap justify-center md:justify-around items-center px-8 md:px-2 gap-4 my-8">
    @foreach ($directors as $d)
        <div class=" basis-3/12"> 
            <figure class="m-0 p-2">
                <img src="{{$d->image}}" class="p-1 w-44 h-44 block mx-auto rounded-full border-4 border-bab border-dotted" alt="{{$d->name}}" />
            </figure>
            <h3 class="text-center font-extrabold text-xl">{{  $d->title ?? '<br>'  }}</h3>
            <h3 class="text-center font-extrabold text-xl">{{  $d->name  }}</h3>
            <p class="text-center font-base">{{  $d->description  }}</p>
        </div>
    @endforeach
</div>