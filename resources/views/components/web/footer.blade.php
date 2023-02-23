<footer class="pt-5 bg-bab">
    <div class="max-w-6xl block mx-auto">
        <div class="flex justify-around flex-col lg:flex-row">
            <div class="w-full px-4 sm:px-[15%] lg:px-2">
                <figure class="block my-4 mx-auto">
                    <img src="{{ asset('images/Logo-Horizontal-Blanco-y-rojo.png')}}" alt="Logo Banco de alimentos de bogotá" class="block mx-auto w-full max-w-72 lg:max-w-96">
                </figure>
                <h4 class="text-center uppercase text-2xl text-white my-4">
                    Contacto
                </h4>
                <ul class="text-slate-50 mb-2">
                    <li class="my-4">
                        <i class="fa-solid fa-location-dot"></i>
                        Calle 19 A # 32 – 50
                    </li>
                    <li class="my-4">
                        <i class="fa-solid fa-envelope"></i>
                        amigo@bancodealimentos.org.co
                    </li>
                    <li class="my-4">
                        <i class="fa-solid fa-phone"></i>
                        +(60 1) 747 0828
                    </li>
                    <li class="my-4">
                        <a href="#" class="text-slate-50 hover:text-slate-500 underline hover:no-underline">Política de
                            tratamiento de datos</a>
                    </li>
                </ul>
                <ul class="my-4 text-slate-50 flex justify-around w-full">
                    <li>
                        <a href="https://es-la.facebook.com/Bancodealimentosbogota/" target="_blank" class="block"
                            rel="noopener">
                            <i class="fa-brands fa-facebook text-2xl text-slate-50 hover:text-slate-200"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/BancoAAlimentos" target="_blank" class="block" rel="noopener">
                            <i class="fa-brands fa-twitter text-2xl text-slate-50 hover:text-slate-200"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/bancodealimentosbgt/" target="_blank" class="block"
                            rel="noopener">
                            <i class="fa-brands fa-instagram text-2xl text-slate-50 hover:text-slate-200"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/banco-de-alimentos-de-bogot%C3%A1" target="_blank"
                            class="block" rel="noopener">
                            <i class="fa-brands fa-linkedin text-2xl text-slate-50 hover:text-slate-200"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/user/banalimen" target="_blank" class="block" rel="noopener">
                            <i class="fa-brands fa-youtube text-2xl text-slate-50 hover:text-slate-200"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="w-full px-2 sm:px-[15%] lg:px-4">
                <h4 class="text-center uppercase text-2xl text-white my-4">
                    Suscribete
                </h4>
                <div id="fb-root"></div>
                <p>
                    <script async="" defer="" crossorigin="anonymous"
                        src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&amp;version=v13.0" nonce="0oYV5pnW">
                    </script>
                </p>
                <div class="fb-page" data-href="https://www.facebook.com/Bancodealimentosbogota/" data-tabs="timeline"
                    data-width="260" data-height="400" data-small-header="false" data-adapt-container-width="true"
                    data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/Bancodealimentosbogota/" class="fb-xfbml-parse-ignore">
                        <p><a href="https://www.facebook.com/Bancodealimentosbogota/">Banco de Alimentos de Bogotá</a>
                        </p>
                    </blockquote>
                </div>
                <form action="" method="post" class="my-4">
                    @csrf
                    <div class="relative flex flex-wrap items-stretch w-full mb-3 max-w-lg mx-auto">
                        <span class="flex items-center py-2 px-3 text-base font-normal text-gray-500 text-center whitespace-nowrap bg-white border border-slate-200 rounded-bl rounded-tl rounded-tr-none rounded-br-none">
                            @
                        </span>
                        <input type="text" class="block py-2 px-3 font-normal text-gray-500 bg-clip-padding border border-slate-200 appearance-none relative flex-auto w-[1%] min-w-0" placeholder="example@email.com" aria-label="Username" aria-describedby="basic-addon1">
                        <button class="-ml-[1px] rounded-tl-0 rounded-bl-0 rounded-tr rounded-br py-2 px-3 relative z-10 cursor-pointer text-white bg-red-600 border-red-600 hover:bg-red-500 focus:border-red-400 focus:border-2 inline-block font-normal text-xs text-center select-none border-transparent" type="submit" id="button-addon2">
                            Suscribirme
                        </button>
                    </div>
                </form>
            </div>
            <div class="w-full px-2 sm:px-[15%] lg:px-4">
                <h4 class="text-center uppercase text-2xl text-white my-4">
                    twitter card
                </h4>
                <a class="twitter-timeline" data-lang="es" data-height="400" data-theme="light"
                    href="https://twitter.com/BancoAAlimentos?ref_src=twsrc%5Etfw">Tweets by BancoAAlimentos</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <div class="w-full px-2 sm:px-[15%] lg:px-4">
                <h4 class="text-center uppercase text-2xl text-white my-4">
                    Mapa del sitio
                </h4>
                <ul class="text-white">
                    <li class="nav-item">Menu item 1</li>
                    <li class="nav-item">Menu item 1</li>
                    <li class="nav-item">Menu item 1</li>
                    <li class="nav-item">Menu item 1</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="max-w-6xl block mx-auto py-4">
        <div class="flex py-4 items-center justify-center w-full">
            <p class="text-center text-slate-50">Banco de alimentos de bogotá © 2023 Todos los rerechos reservados.</p>
        </div>
    </div>
</footer>