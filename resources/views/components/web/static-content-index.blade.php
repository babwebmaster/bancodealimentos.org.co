<section class="flex justify-center items-center bg-white p-4">
    <div class="flex justify-around gap-2 p-4" style="max-width:1440px; width:100%;margin:0 auto;">
        <div class="border-slate-600 w-80 h-72 border rounded-lg shadow-lg p-4 relative" style="background: url('http://bancodealimentos.org.co.test/images/m-1664643827.png'); background-position: center; background-size: cover;">
            <h3 class="font-bold text-center uppercase text-2xl">Title</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem magni distinctio debitis minus harum corporis maiores praesentium! Ab, placeat nostrum.</p>
            <a href="#" class="text-center m-auto block absolute z-10 left-1/2 top-100 -translate-y-1/2 -translate-x-1/2 bg-red-600 rounded-lg py-2 px-4 w-52 no-underline text-white">Button</a>
        </div>
        <div class="border-slate-600 w-80 h-72 border rounded-lg shadow-lg p-4 relative" style="background: url('http://bancodealimentos.org.co.test/images/m-1664643827.png'); background-position: center; background-size: cover;">
            <h3 class="font-bold text-center uppercase text-2xl">Title</h3>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem magni distinctio debitis minus harum corporis maiores praesentium! Ab, placeat nostrum.</p>
            <a href="#" class="text-center m-auto block absolute z-10 left-1/2 top-100 -translate-y-1/2 -translate-x-1/2 bg-red-600 rounded-lg py-2 px-4 w-52 no-underline text-white">Button</a>
        </div>
        <div class="border-slate-600 w-80 h-72 border rounded-lg shadow-lg p-4 relative" style="background: url('http://bancodealimentos.org.co.test/images/m-1664643827.png'); background-position: center; background-size: cover;">
            <h3 class="font-bold text-center uppercase text-2xl">Title</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem magni distinctio debitis minus harum corporis maiores praesentium! Ab, placeat nostrum.</p>
            <a href="#" class="text-center m-auto block absolute z-10 left-1/2 top-100 -translate-y-1/2 -translate-x-1/2 bg-red-600 rounded-lg py-2 px-4 w-52 no-underline text-white">Button</a>
        </div>
    </div>
</section>
<section data-sectionId="que_hace_el_banco" class="bg-white pb-16">
    <div class="max-w-7xl my-0 mx-auto">
        <h2 class="text-center pt-16 pb-8 font-bold text-red-bab">¿Qué hace el Banco de Alimentos?</h2>
        <div class="flex justify-around items-center">
            <div class="w-1/2 p-4">
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
                <p class="text-center font-base font-mono text-2xl text-red-bab">#JUNTOSCONTRAELHAMBRE</p>
                <a href="{{Route('web.ourValues')}}" class="py-3 px-8 bg-red-600 text-white block mx-auto no-underline font-semibold text-lg text-center w-48">Leer más</a>
            </div>
            <div class="w-1/2 flex justify-center items-center">
                <video controls src="https://www.bancodealimentos.org.co/wp-content/uploads/2020/12/JingleVideo.mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
</section>
<section data-sectionId="cifras" class="bg-bab-sky py-16">

</section>
<section data-sectionId="nuestros_donantes_carousel" class="bg-white mb-8">
    <div class="shadow-xl overflow-hidden sm:rounded-lg border-none max-w-7xl m-auto">
        <x-carousel-donors :slideDonor="$slideDonor" />
    </div>
</section>
