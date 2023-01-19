@extends('layouts.web')
@section('content')
    <main>
        <h1 class="mt-16 md:mt-5 text-center pt-8 md:pt-16 pb-2 font-bold text-red-bab">Contactanos</h1>
        <span class="block h-2 w-40 bg-bab rounded-full mx-auto mb-8"></span>
        <div class="w-full max-w-5xl mx-auto flex flex-col md:flex-row items-center justify-around bg-contact-us md:py-8 md:px-4 md:mb-4">
            <div class="flex flex-col justify-around items-center my-2 md:my-8">
                <span class=" bg-gray-300 shadow-xl shadow-gray-800 p-4 my-2 md:my-4 rounded-full">
                    <i class="font-bold text-2xl leading-6 text-red-bab fas fa-phone-volume"></i>
                </span>
                <h4 class="text-slate-50 font-bold text-2xl">Contáctanos</h4>
                <p class="text-slate-100"><a class="text-slate-200 hover:text-blue-500" href="tel:+6017470828">(601) 747 0828</a></p>
            </div>
            <div class="flex flex-col justify-center items-center my-2 md:my-8">
                <span class=" bg-gray-300 shadow-xl shadow-gray-800 p-4 my-2 md:my-4 rounded-full">
                    <i class="font-bold text-2xl leading-6 text-red-bab fas fa-envelope"></i>
                </span>
                <h4 class="text-slate-50 font-bold text-2xl">Correo electrónico</h4>
                <p class="text-slate-100"><a class="text-slate-200 hover:text-blue-500" href="mailto:amigo@bancodealimentos.org.co">amigo@bancodealimentos.org.co</a></p>
            </div>
            <div class="flex flex-col justify-center items-center my-2 md:my-8">
                <span class=" bg-gray-300 shadow-xl shadow-gray-800 p-4 my-2 md:my-4 rounded-full">
                    <i class="font-bold text-2xl leading-6 text-red-bab fas fa-home p2"></i>
                </span>
                <h4 class="text-slate-50 font-bold text-2xl">Dirección</h4>
                <p class="text-slate-100">Calle 19 A # 32 – 50 <br> Bogotá D.C, Colombia</p>
            </div>
        </div>
    </main>
    <section aria-label="Informacion redes sociales">
        <div class="mt-4 md:mb-32 w-full max-w-5xl mx-auto block px-4">
            <div class="flex flex-col justify-center items-start my-8">
                <span class="mx-auto bg-gray-100 shadow-xl shadow-gray-500 p-4 my-4 rounded-full">
                    <i class="font-bold text-2xl leading-6 text-red-bab fa-regular fa-face-grin-stars"></i>
                </span>
                <h4 class="mx-auto text-bab font-bold text-2xl md:text-4xl text-center uppercase">Gracias por tu ayuda</h4>
                <hr class="w-full bg-bab">
                <h6 class=" text-lg">Síguenos en nuestras redes sociales</h6>
                <div class="w-full flex justify-between">
                    <a href="https://es-la.facebook.com/Bancodealimentosbogota/" title="Facebook">
                        <i class="font-bold text-2xl md:text-4xl text-bab fa-brands fa-facebook"></i>
                    </a>
                    <a href="https://twitter.com/BancoAAlimentos" title="Twitter">
                        <i class="font-bold text-2xl md:text-4xl text-bab fa-brands fa-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com/bancodealimentosbgt/" title="Instagram">
                        <i class="font-bold text-2xl md:text-4xl text-bab fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/banco-de-alimentos-de-bogot%C3%A1" title="Linkedin">
                        <i class="font-bold text-2xl md:text-4xl text-bab fa-brands fa-linkedin"></i>
                    </a>
                    <a href="https://www.youtube.com/user/banalimen" title="YouTube">
                        <i class="font-bold text-2xl md:text-4xl text-bab fa-brands fa-youtube"></i>
                    </a>
                    <a href="https://www.tiktok.com/@bancodealimentosbgt" title="TikTok">
                        <i class="font-bold text-2xl md:text-4xl text-bab fa-brands fa-tiktok"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section aria-label="Formulario de contacto">
        <div class="hidden md:block h-16"></div>
        <div class="w-full bg-gradient-to-r from-indigo-500 via-purple-400 to-pink-700 md:mt-16 md:mb-36 p-4 md:p-0">
            <div class="w-full max-w-5xl mx-auto flex flex-col md:flex-row justify-evenly">
                <div class="lg:basis-1/2 p-4 my-8">
                    <h3 class="text-white text-center">¿QUIERES ESCRIBIRNOS?</h3>
                </div>
                <div class="lg:basis-1/2  relative">
                    <form class="md:absolute md:z-10 md:left-0 top-1/2 md:-translate-y-1/2 w-full flex flex-col mx-auto bg-glass-blue-bab py-2 px-4" action="" x-data="{accept : false}">
                        <div class="my-3">  
                            <h3 class="text-center font-bold text-white text-shadow">{{  __('¡Contactanos!')  }}</h3>
                        </div>
                        <div class="mb-2">
                            <x-jet-label class="text-shadow" for="names" value="{{ __('Nombres Completos') }}" />
                            <x-jet-input id="names" class="block mt-1 w-full text-white" type="text" name="names" required />
                        </div>
                        <div class="mb-2">
                            <x-jet-label class="text-shadow" for="email" value="{{ __('messages.Email') }}" />
                            <x-jet-input id="email" class="block mt-1 w-full text-white" type="email" name="email" required />
                        </div>
                        <div class="mb-2">
                            <x-jet-label class="text-shadow" for="messages" value="{{ __('Dejanos un mensaje') }}" />
                            <textarea id="email" class="block mt-1 w-full bg-transparent border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm text-white" name="message" rows="3" required ></textarea>
                        </div>
                        <div class="block mb-2">
                            <label for="terms" class="flex items-center">
                                <x-jet-checkbox id="terms" name="terms" />
                                <a href="https://bancodealimentos.org.co/wp-content/uploads/2021/04/POLITICAS%20DE%20PROTECCION%20DE%20DATOS%20PERSONALES.pdf" class="ml-2 text-sm text-white text-shadow">{{ __('Acepto la política de tratamiento de datos') }}</a>
                            </label>
                        </div>
                        <div class="flex items-center justify-end mb-2">
                            <x-jet-danger-button class="mx-auto bg-red-bab">
                                {{ __('Enviar') }}
                            </x-jet-danger-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="hidden md:block h-16"></div>
    </section>
    <section class="bg-gray-200 md:mt-8 py-8">
        <x-web.title>Blog</x-web.title>
        <div class="shadow-xl overflow-hidden sm:rounded-lg border-none max-w-7xl m-auto">
            <x-web.carousel-blog :posts="$posts" />
        </div>
        <!-- Slider main container -->
    </section>
@endsection
