<div {{ $attributes->merge(['class'=>'flex flex-col items-center justify-center border-none t w-60 sm:w-72 md:w-80 h-72 my-8 md:my-0 shadow-xl shadow-gray-700 p-4 relative text-shadow bg-center bg-cover'])}}>
    <h3 class="text-white font-bold text-center uppercase text-3xl">{{ $title }}</h3>
    {{-- <p class="text-white text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem magni distinctio debitis minus harum corporis maiores praesentium! Ab, placeat nostrum.</p> --}}
    <a href="#" class="text-center m-auto block absolute z-10 left-1/2 top-100 -translate-y-1/2 -translate-x-1/2 bg-red-600 rounded-lg py-2 px-4 w-52 no-underline text-white bg-bab-shadow">{{  $textButton  }}</a>
</div>