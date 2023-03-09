<div {{ $attributes->merge(['class' => "w-full mx-auto my-2 px-2 py-6 bg-gradient-to-r from-indigo-500 via-purple-400 to-pink-700 flex flex-col lg:flex-row justify-center items-center md:justify-around"]) }}>
    @foreach ($cifras as $cifra)
        <div class="overflow-hidden w-full text-center">
            <img src="{{  $cifra->icon  }}" alt="{{  $cifra->name }}" class="block mx-auto w-32 h-32 my-2"/>
            <p class="text-center font-sans font-black text-4xl text-white" id="count{{ $loop->iteration }}" data-name="counter" data-value="{{  $cifra->value  }}">{{  $cifra->value  }}</p>
            <h3 class="text-center font-sans font-semibold text-lg uppercase text-white">{{  $cifra->name  }}</h3>
        </div>
    @endforeach
</div>

