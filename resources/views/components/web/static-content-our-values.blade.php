<section class="w-full max-w-6xl mx-auto mt-10" aria-label="Misión, Visión y Valores del Banco de alimentos de bogota">
    <div class="grid sm:grid-rows-2 sm:grid-cols-2 justify-center items-center">
        <div class="col-span-1 px-4 py-6 bg-gray-200">
            <h3 class="text-center text-red-bab font-semibold text-xl">
                1. CARIDAD Y RESPONSABILIDAD
            </h3>
            <p class="text-left text-gray-500 px-2">
                Hacemos nuestra gestión con quienes realmente nos necesitan. La única atadura que alberga nuestro 
                corazón es que los cinco millones de colombianos que padecen hambre cuenten con un alimento, con 
                un alimento de vida.
            </p>
        </div>
        <div class="col-span-1 px-4 py-6">
            <h3 class="text-center text-red-bab font-semibold text-xl">
                2. RESPETO CON EQUIDAD
            </h3>
            <p class="text-left text-gray-500 px-2">
                Valoramos y apreciamos a nuestros beneficiados. El desarrollo social y sostenible no es sólo un acto 
                de justicia sino también el compromiso que asiste a todos quienes queremos derrotar la inequidad en Colombia.
            </p>
        </div>
        <div class="col-span-1 px-4 py-6">
            <h3 class="text-center text-red-bab font-semibold text-xl">3. COMPROMISO SOCIAL</h3>
            <p class="text-left text-gray-500 px-2">
                En el Banco de Alimentos, creemos que la generosidad es el camino. Nosotros, nuestros donantes, voluntarios y 
                productores, tenemos como único objetivo el de garantizar que la alimentación sea un derecho y no un privilegio.
            </p>
        </div>
        <div class="col-span-1 px-4 py-6 bg-gray-200">
            <h3 class="text-center text-red-bab font-semibold text-xl">4. TRANSPARENCIA Y HONESTIDAD</h3>
            <p class="text-left text-gray-500 px-2">
                La totalidad de nuestros actos son el reflejo de lo que somos. Derrotar el hambre es una exigencia ética para 
                combatir la insolidaridad. Ello requiere de ciudadanos comprometidos con la sociedad y compasivos con el prójimo.
            </p>
        </div>
    </div>
    <div class="aspect-video flex justify-center items-cenetr flex-col bg-our-values px-4 py-6">
        <h3 class="text-center text-red-bab font-semibold text-xl uppercase text-shadow">
            5. Compromiso con efectividad
        </h3>
        <p class="text-left text-white w-5/12 mx-auto text-shadow">
            Nuestra gestión está siempre orientada a la excelencia. No sólo nos mueven las buenas intenciones y las firmes convicciones sino 
            también las acciones efectivas. Nuestros resultados son testimonio de ello.
        </p>
    </div>
    <div class="grid sm:grid-rows-1 sm:grid-cols-2 justify-center items-center">
        <div class="col-span-1 px-4 py-6 bg-gray-200">
            <h3 class="text-center text-red-bab font-semibold text-xl">
                MISIÓN
            </h3>
            <p class="text-left text-gray-500 px-2">
                Unir la academia, el sector privado y público con organizaciones sin ánimo de lucro que atienden población 
                vulnerable: recolectando, seleccionando y distribuyendo alimentos, bienes y servicios, donados o comprados; 
                generando sinergias para entregarlos con responsabilidad y caridad; mejorando e impulsando un desarrollo 
                integral sin generar una cultura de mendicidad.
            </p>
        </div>
        <div class="col-span-1 px-4 py-6">
            <h3 class="text-center text-red-bab font-semibold text-xl">
                VISIÓN
            </h3>
            <p class="text-left text-gray-500 px-2">
                Con un equipo humano competente y comprometido, seremos en el 2025 una fundación líder en atención a población 
                vulnerable, brindando alimentos, nutrición, acompañamiento humano y social, con responsabilidad y caridad, 
                siendo un puente entre los que quieren servir y los que lo necesitan.
            </p>
        </div>
    </div>
</section>
{{  $slot  }}
<section class="w-full max-w-6xl mx-auto mt-10 flex flex-col sm:flex-row justify-center items-center" aria-label="¿Que hacemos en el Banco de Alimentos de Bogotá">
    <div class="w-full sm:w-1/2 px-4 py-2">
        <h3 class="text-center text-red-bab font-bold mb-4 text-3xl">Trabajando con el Corazón</h3>
        <p class="text-justify text-gray-600">
            El Banco de Alimentos de Bogotá, no sólo nutrimos cuerpos y alimentamos esperanzas, sino que también movilizamos a todas las 
            personas de buen corazón y conciencia social. Estamos convencidos que garantizar una alimentación adecuada es un compromiso 
            para quienes queremos una Colombia que progrese en la senda de la equidad.
        </p>
        <p class="text-justify text-gray-600">
            El empuje de nuestros <strong>130</strong> colaboradores que día tras día, no solo mueven alimentos sino además transforman voluntades, marcó 
            la diferencia y nos hizo cada vez mas fuertes. Multiplicamos esfuerzos con 1,150 estudiantes de 40 universidades y con la energía 
            de mas de 3,900 voluntarios de buen corazón, logramos apoyar el área de Logística de un año lleno de retos.
        </p>
        <p class="text-justify text-gray-600">
            Gracias al desempeño de este gran equipo de colaboradores,  es posible ser <strong>«un puente para unir a los que quieren servir»</strong> a 
            los más necesitados.
        </p>
        <p class="text-justify text-gray-600">
            Ellos son el corazón de esta misión desde hace <strong>20 años</strong>, no sólo llevando alimento sino también oportunidades a las más de 
            <strong>1.059 organizaciones</strong> vinculadas.
        </p>
        <p class="text-justify text-gray-600">
            Gracias por luchar <strong>#JuntosContraElHambre</strong>
        </p>
    </div>
    <div class="w-full sm:w-1/2 py-2 px-4">
        <div class="swiper ourValues shadow-lg shadow-black rounded-md">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                @for ($i = 1; $i < 6; $i++)
                    <div class="swiper-slide p-2">
                        <img src='{{  asset("images/nuestrosvaloresCarousel$i.jpg")  }}' alt="Imagenes de Nuestros valores">
                    </div>
                @endfor
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
        
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>