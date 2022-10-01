<footer class="pt-5 bg-bab">
    <div class="container py-4">
        <div class="row">
            <div class="col-md-3 ">
                <figure>
                    <img src="{{ asset('images/Logo-Horizontal-Blanco-y-rojo.png')}}" alt="Logo Banco de alimentos de bogotá" class="img-responsive">
                </figure>
                <h4 class="text-center text-uppercase text-white">
                    Mapa del sitio
                </h4>
                <ul class="text-white">
                    <li class="nav-item">Menu item 1</li>
                    <li class="nav-item">Menu item 1</li>
                    <li class="nav-item">Menu item 1</li>
                    <li class="nav-item">Menu item 1</li>
                </ul>
            </div>
            <div class="col-md-3 ">
                <h4 class="text-center text-uppercase text-white">
                    Suscribete
                </h4>
                <form action="" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="text" class="form-control" placeholder="example@email.com" aria-label="Username" aria-describedby="basic-addon1">
                        <button class="btn btn-danger" type="submit" id="button-addon2">Suscribirme</button>
                    </div>
                </form>
                <div class="alert alert-success" role="alert">
                    Se ha suscribido con exito!
                </div>
                <div class="alert alert-danger" role="alert">
                    Ups! Ocurrio un error y no se pudo realizar la subscripcion, estamos trabajando en ello!
                </div>
            </div>
            <div class="col-md-3 ">
                <h4 class="text-center text-uppercase text-white">
                    twitter card
                </h4>
                <a class="twitter-timeline" data-lang="es" data-height="400" data-theme="light" href="https://twitter.com/BancoAAlimentos?ref_src=twsrc%5Etfw">Tweets by BancoAAlimentos</a> 
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <div class="col-md-3 ">
                <h4 class="text-center text-uppercase text-white">
                    Contacto
                </h4>
                <ul class="text-white">
                    <li class="nav-item">
                        <i class="fa fa-map-marker"></i>
                        Calle 19 A # 32 – 50
                    </li>
                    <li class="nav-item">
                        <i class="fa fa-envelope-o"></i>
                        amigo@bancodealimentos.org.co
                    </li>
                    <li class="nav-item">
                        <i class="fa fa-phone"></i>
                        +(60 1) 747 0828
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Política de tratamiento de datos</a>
                    </li>
                </ul>
                <ul class="social-icons text-white d-flex justify-content-around w-100">
                    <li>
                        <a href="https://es-la.facebook.com/Bancodealimentosbogota/" target="_blank" class="social-icon" rel="noopener"> 
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://twitter.com/BancoAAlimentos" target="_blank" class="social-icon" rel="noopener"> 
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/bancodealimentosbgt/" target="_blank" class="social-icon" rel="noopener"> 
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/banco-de-alimentos-de-bogot%C3%A1" target="_blank" class="social-icon" rel="noopener"> 
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/user/banalimen" target="_blank" class="social-icon" rel="noopener"> 
                            <i class="fa fa-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-secondary">
        <div class="row py-4 align-items-center text-white">
            <div class="col-12">
                <p class="text-center">Banco de alimentos de bogotá © 2022 Todos los rerechos reservados.</p>
            </div>
        </div>
    </div>
</footer>