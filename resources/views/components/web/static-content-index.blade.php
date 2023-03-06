<section class="flex justify-center items-center bg-white p-4">
    <div class="flex flex-col md:flex-row justify-center items-center md:justify-around p-4" style="max-width:1440px; width:100%;margin:0 auto;">
        <x-web.card-index class="rounded-tl-2xl rounded-br-2xl" style="background: url('http://bancodealimentos.org.co.test/images/bonos-de-generosidad.png');">
            <x-slot:title>Bonos de Generosidad</x-slot>
            <x-slot:textButton>Saber Más</x-slot>
        </x-web.card-index>
        <x-web.card-index class="rounded-2xl" style="background: url('http://bancodealimentos.org.co.test/images/quiero-ser-beneficiario.png');">
            <x-slot:title>Quiero ser Beneficiario</x-slot>
            <x-slot:textButton>Saber Más</x-slot>
        </x-web.card-index>
        <x-web.card-index class="rounded-tr-2xl rounded-bl-2xl" style="background: url('http://bancodealimentos.org.co.test/images/quiero-ser-voluntario.png');">
            <x-slot:title>Quiero ser Voluntario</x-slot>
            <x-slot:textButton>Saber Más</x-slot>
        </x-web.card-index>   
    </div>
</section>
<section data-sectionId="que_hace_el_banco" class="bg-white pb-16">
    <div class="max-w-7xl my-0 mx-auto">
        <h2 class="text-center pt-8 md:pt-16 pb-2 font-bold text-red-bab text-4xl">¿Qué hace el Banco de Alimentos?</h2>
        <span class="block h-2 w-40 bg-bab rounded-full mx-auto mb-8"></span>
        <div class="block md:flex md:justify-around md:items-center">
            <div class="w-full md:w-1/2 p-4">
                <p class="text-justify text-gray-600 font-semibold text-base">
                    Somos un articulador de los esfuerzos de la empresa privada, la academia y organizaciones sin ánimo de lucro, 
                    que trabaja para ayudar a poblaciones en condiciones de vulnerabilidad que sufren de inseguridad 
                    alimentaria y desnutrición.
                </p>
                <p class="text-justify text-gray-600 font-semibold text-base">
                    Recibimos donaciones en forma de alimentos y bienes, los clasificamos, almacenamos y distribuimos de manera responsable, 
                    eficiente y equitativa. Cumplimos 20 años y  gracias a la generosidad de miles de personas nos hemos convertido en uno de los 
                    referentes más importantes en seguridad alimentaria y la lucha contra el desperdicio del país. En medio de una de las crisis 
                    sanitarias más desafiantes a nivel mundial, en nuestro Vigésimo Aniversario contabilizamos más de 228 millones de kilos de 
                    alimentos entregados, superando todas las expectativas y a la vez alcanzando más claros y eficientes procesos, siempre 
                    garantizando a nuestros donantes un manejo impecable y responsable de los recursos.
                </p>
                <p class="text-justify text-gray-600 font-semibold text-base">
                    Promovemos el consumo de alimentos sanos y saludables, entregando mercados balanceados y en óptimas condiciones, 
                    contribuyendo así a la seguridad alimentaria y nutricional de nuestros beneficiados. No solo entregamos alimentos, 
                    sino también esperanza y trabajamos para desarrollar las competencias y habilidades de las organizaciones vinculadas, 
                    encaminados en construir una sociedad más humana, solidaria y equitativa.
                </p>
                <p class="text-center font-base font-mono text-2xl text-red-bab my-2">#JUNTOSCONTRAELHAMBRE</p>
                <a href="{{Route('web.ourValues')}}" class="py-3 px-8 bg-red-600 border-2 border-transparent text-white block mx-auto no-underline font-semibold text-lg text-center w-48 hover:bg-red-500 focus:border-red-400">Leer más</a>
            </div>
            <div class="w-full md:w-1/2 flex justify-center items-center">
                <video controls src="https://www.bancodealimentos.org.co/wp-content/uploads/2020/12/JingleVideo.mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
</section>


