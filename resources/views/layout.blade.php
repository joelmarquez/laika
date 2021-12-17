<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> LAIKA | Prueba Tecnica Frontend</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
         
                <div class="container-expand-lg first-header d-none d-md-block ">
                    <div class="row background-first-header ">
                    <div class="col-sm-8 d-flex justify-content-start">
                        <ul class="list-group list-group-horizontal background-first-header">
                            <li><a href=""><i class="bi bi-shield-check"></i> <span>Compras seguras online</span></a></li>
                            <span class=vl></span><li><a href=""><i class="bi bi-hand-thumbs-up"></i> <span>Pago Contra Entrega</span></a></li>
                            <span class=vl></span><li><a href=""><i class="bi bi-truck"></i> <span>Entregas el mismo dia</span></a></li>
                        </ul>
                    </div>

                    <div class="col-sm-4 d-flex justify-content-end">
                        <ul class="list-group list-group-horizontal background-first-header">
                            <li> Llámanos <i class="bi bi-phone-vibrate"> </i> <span class=vl></span> <span></span>3009108496 </li>
                            <li><a href=""> <span>Escribenos</span></a></li>
                            <li><a href="#"><span><i class="bi bi-youtube"></i></span></a></li>
                            <li><a href="#"><span><i class="bi bi-instagram"></i></span></a></li>
                            <li><a href="#"> <span><i class="bi bi-facebook"></i></span></a></li>
                        </ul>
                    </div>
                    </div>
                </div>

            <!-- Logo, search, country, cart in header begin-->
            <div class="container-expand-lg px-5 px-lg-5 background-second-header d-none d-md-block">
                <div class="row">
                    <div class="col-sm-1">
                        <a class="navbar-brand" href="#!"><img src="assets/LaikaMascotas.svg"></a>
                        <p class="brand-text">LAIKA</p>
                    </div>
                    <div class="col-sm-5">
                        <form>
                            <input class="form-control form-control-lg" type="text" id="icon" placeholder="Encuentra lo mejor para tu mascota">
                        </form>
                    </div>
                    <div class="col-sm-2 justify-content-end">
                        <div class="head-two-country">
                            <img src="assets/flag.png">
                            <select name="select">
                                <option value="Bogotá" selected>BOG</option>
                                <option value="Barranquilla">BAR</option>
                                <option value="Medellin">MED</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="head-two-user">
                            <span class="vl-cart "><i class="bi bi-person-circle"></i> <a href="#">Mi cuenta</a> </span> 
                            <span class="vl-cart "><i class="bi-cart-fill me-1"></i><span class="badge rounded-pill badge-notification bg-warning">1</span></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Header mobile -->
            <div class="container background-second-header d-lg-none">
                <div class="row">
                    <div class="col-sm-12 d-flex justify-content-end">
                        <a class="navbar-brand" href="#!"><img src="assets/LaikaMascotas.svg"></a>
                        <p class="flag-mini"><img src="assets/flag-mini.png"></p>
                        <select name="select">
                            <option value="Bogotá" selected>BOG</option>
                            <option value="Barranquilla">BAR</option>
                            <option value="Medellin">MED</option>
                        </select>
                        <span class="vl-cart brand-text "><i class="bi bi-cart2"></i><span class="badge rounded-pill badge-notification bg-warning">1</span></span>
                    </div>
                </div>
            </div>

            <div class="container background-second-header d-lg-none mobile-search ">
                <div class="row">
                     <form>
                        <input class="form-control form-control-lg" type="text" id="icon" placeholder="Encuentra lo mejor para tu mascota">
                    </form>
                </div>
            </div>

            <!-- Navigation-->
                <nav id="menu" class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container px-4 px-lg-5">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="assets/dog_mc.svg"> Compra para perro </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#!">Item 1</a></li>
                                        <li><a class="dropdown-item" href="#!">Item 2</a></li>
                                        <li><a class="dropdown-item" href="#!">Item 3</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="assets/cat_mc_s.svg"> Compra para gato</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#!">Item 1</a></li>
                                        <li><a class="dropdown-item" href="#!">Item 2</a></li>
                                        <li><a class="dropdown-item" href="#!">Item 3</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="assets/descuento.png"> Ofertas</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#!">Item 1</a></li>
                                        <li><a class="dropdown-item" href="#!">Item 2</a></li>
                                        <li><a class="dropdown-item" href="#!">Item 3</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="assets/services.png"> Servicios</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#!">Item 1</a></li>
                                        <li><a class="dropdown-item" href="#!">Item 2</a></li>
                                        <li><a class="dropdown-item" href="#!">Item 3</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!"><img src="assets/blog.png"> Blog</a></li>
                            </ul>
                            <form class="d-flex">
                                <img src="assets/membership_logo.png"> 
                                <button class="btn btn-warning badge rounded-pill btn-sm">
                                    <small>ADQUIERELA YA</small>
                                </button>
                            </form>
                        </div>
                    </div>
                </nav>  
        
            <!-- Banners Sliders -->
            <div class="sliderContent">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/slider/example1.jpg" class="d-block w-100" alt="Puppy Dog">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/slider/example2.jpg" class="d-block w-100" alt="Fin de Año">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/slider/example3.jpg" class="d-block w-100" alt="Descuento 18%">
                    </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>


            @yield('content')


            <!-- Footer -->
            <footer>
                <div class="row  m-auto justify-content-center mb-4 mt-0 mt-md-4">
                    <div class="col-md-4 col-lg-2 mt-5 text-center">
                        <span>
                            <!-- logo and social network -->
                            <img class="ml-2 text-right" src="assets/LAIKA.png" alt="Laika: Todo para tu mascota">
                            <h5 class="ml-0 ml-md-2 mt-2 mb-0 footer-social-fallow">Síguenos en:</h5>
                            <p class="ml-0 ml-md-1">
                                <span><a class="footer-icon-social" href="#"><i class="bi bi-youtube footer-icon-social-size"></i></a></span>
                                <span><a class="footer-icon-social" href="#"><i class="bi bi-instagram footer-icon-social-size"></i></a></span>
                                <span><a class="footer-icon-social" href="#"><i class="bi bi-facebook footer-icon-social-size"></i></a></span>
                            </p>
                        </span>
                    </div>
                    
                    <div class="col-md-2 col-lg-2 mt-2 mt-lg-5 d-none d-lg-block">
                        <h1 class="footer-title">ACERCA DE LAIKA</h1>
                        <a href="#"><h3 class="footer-link mb-2">Sobre Laika</h3></a>
                        <a href="#"><h3 class="footer-link mb-2">Servicios</h3></a>
                        <a href="#"><h3 class="footer-link mb-2">Trabaja con nosotros</h3></a>
                        <a href="#"><h3 class="footer-link mb-2">Blog</h3></a>
                        <a href="#"><h3 class="footer-link mb-2">Términos y condiciones</h3></a>
                    </div>
            
                    <div class="col-md-2 col-lg-2 mt-5 d-none d-lg-block">
                        <h1 class="footer-title">LINKS DE INTERÉS</h1>
                        <a href="#"> <h3 class="footer-link mb-2">Preguntas frecuentes</h3></a>
                        <a href="#"> <h3 class="footer-link mb-2">¿Cómo comprar en Laika?</h3></a>
                        <a href="#"><h3 class="footer-link mb-2">Política de Privacidad</h3></a>
                        <a href="#"><h3 class="footer-link mb-2">Contáctanos</h3></a>
                        <a href="#"> <h3 class="footer-link mb-2">Políticas de Entrega</h3></a>
                    </div>
            
                    <div class="col-md-2 col-lg-2 mt-5 d-none d-lg-block">
                        <h1 class="footer-title">INFORMACIÓN</h1>
                        <h3 class="footer-link  mb-2" >
                            Teléfono: 3009108496<br><br>  
                            serviciocliente@laika.com.co<br><br>
                            Bogotá D.C., Colombia
                        </h3>
                    </div>

                    <div class="col-md-12 col-lg-2 mt-5 d-none d-sm-none d-md-none d-lg-block">
                        <h1 class="footer-title">SUSCRÍBETE</h1>
                        <h3 class="footer-link  mb-2 pt-0 mb-2 "><small>Recibe noticias y promociones al instante.</small></h3>
                        <form action="form-group mt-0 " id="footer-subscribe">
                            <div class="input-group ">
                                <input type="email" placeholder="Correo electrónico"  id="icon-suscribe-form" class=" form-control" required>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                    <label class="form-check-label footer-checkbox" for="flexCheckDefault">
                                    <em>He leído y acepto las <a href="#">Políticas de privacidad</a></em>
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            <!-- Menu footer para moviles (Responsive) -->
            <div class="menu-footer-responsive d-lg-none ">
                <button class="accordion footer-title">ACERCA DE LAIKA</button>
                <div class="panel"> 
                    <a href="#"> <h3 class="footer-link mb-2 footer-link-responive">Sobre Laika</h3></a>
                    <a href="#"><h3 class="footer-link mb-2 footer-link-responive">Servicios</h3></a>
                    <a href="#"><h3 class="footer-link mb-2 footer-link-responive">Trabaja con nosotros</h3></a>
                    <a href="#"><h3 class="footer-link mb-2 footer-link-responive">Blog</h3></a>
                    <a href="#"><h3 class="footer-link mb-2 footer-link-responive">Términos y condiciones</h3></a>
                </div>
                
                <button class="accordion footer-title">LINKS DE INTERÉS</button>
                <div class="panel"> 
                    <a href="#"> <h3 class="footer-link mb-2 footer-link-responive">Preguntas frecuentes</h3></a>
                    <a href="#"><h3 class="footer-link mb-2 footer-link-responive">¿Cómo comprar en Laika?</h3></a>
                    <a href="#"><h3 class="footer-link mb-2 footer-link-responive">Política de Privacidad</h3></a>
                    <a href="#"><h3 class="footer-link mb-2 footer-link-responive">Contáctanos</h3></a>
                    <a href="#"><h3 class="footer-link mb-2 footer-link-responive">Políticas de Entrega</h3></a>
                </div>
                
                <button class="accordion footer-title">INFORMACIÓN</button>
                <div class="panel">
                    <h3 class="footer-link mb-2 footer-link-responive" >
                        Teléfono: 3009108496<br><br>  
                        serviciocliente@laika.com.co<br><br>
                        Bogotá D.C., Colombia
                    </h3>
                </div>
            
                <div class="col-md-12 col-lg-12 mt-1 ms-1 d-lg-block px-3">
                    <h2 class="footer-title">
                        SUSCRÍBETE
                    </h2>
                    <h3 class="footer-link  mb-2 pt-0 mb-2 ">
                        <small>Recibe noticias y promociones al instante.</small>
                    </h3>
                    <form action="form-group mt-0 " id="footer-subscribe">
                        <div class="input-group ">
                            <input type="email" placeholder="Correo electrónico"  id="icon-suscribe-form" class=" form-control" required>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <label class="form-check-label footer-checkbox" for="flexCheckDefault">
                                <em>He leído y acepto las <a href="#">Políticas de privacidad</a></em>
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>

                <!-- logos and icon cards in footer-->
            <div class="text-center p-3 end-footer">
                <div class="row">
                    <div class="col-sm-12">
                    <span><img src="assets/logo-mp.png"></span>
                    <span><img src="assets/logo-mastercard.png"></span>
                    <span><img src="assets/logo-visa.png"></span>
                    <span><img src="assets/logo-american-express.png"></span>
                    <span><img src="assets/logo-app-store.png"></span>
                    <span><img src="assets/logo-google-play.png"></span>
                    <span><img src="assets/logo-app-gallery.png"></span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer -->
        
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    </body>
</html>
