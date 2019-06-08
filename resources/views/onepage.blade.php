<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Cybertyx</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/cybertyx.css') }}">
        <link rel="stylesheet" href="{{ asset('libs/bootstrap-material/bootstrap-material.css') }}">
        <link rel="stylesheet" href="{{ asset('libs/font-icon/font-icon.css') }}">
        <link rel="stylesheet" href="{{ asset('libs/animate/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('libs/font-awesome/font-awesome.css') }}">
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg sticky-top navbar-dark navbar-gradient">
            <div class="container">
                <a class="navbar-brand" href="/">CYBER<b>TYX</b></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#nosotros">¿Quiénes Somos?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#servicios">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#equipo">Nuestro Equipo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contacto">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <!-- Intro - Banner -->
        <section id="intro">
            <div class="intro-content wow animated rotateIn" id="#"> <!-- El id="#" es para el nav -->
                <h2><span>Tecnología</span><br>Necesitamos cambios revolucionarios</h2>
                <!-- <div>
                    <a href="#about" class="btn-get-started scrollto">Get Started</a>
                </div> -->
            </div>
            <div class="item">
                <img src="{{ asset('img/idea-banner.jpg') }}" alt="banner" />
            </div>
        </section>

        <!-- Nosotros -->
        <section class="row" id="nosotros">
            <div class="col-md-6 about-background wow animated fadeInLeft"></div>
            <div class="col-md-6 about-text-container wow animated fadeInRight">
                <h2>¿Quiénes Somos?</h2>
                <div class="linea-titulo"></div>

                <div class="mt-3">
                    <p>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        Somos una empresa que acerca las tendencias tecnológicas a cualquier sector, nacida en 2019.
                        Aunque es relativamente joven su equipo está formado por porfesionales totalmente calificados.
                        Nuestra misión es resolver las necesidades de nuestros clientes apoyándonos en las nuevas
                        tecnologías para adaptarlas a su entorno y potenciar su transformación digital.
                        Nuestros esfuerzos van dirigidos a crear soluciones concretas para problemas específicos,
                        partiendo siempre de metodologías ágiles de desarrollo.
                    </p>
                    <p>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        Nos especializamos en el diseño y creación de paginas y apliciones web, así como
                        tambien en la creación de aplicaciones moviles. Por otra parte trabajamos en la
                        automaticazión de procesos empleando IoT y Domotica. Del mismo modo contamos con
                        personal para intalaciones de Redes.
                    </p>
                    <p>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        En <b>Cybertyx</b> sabemos que el futuro viene de la mano de la tecnología. Una herramienta
                        clave para mejorar procesos, comunicar mejor, reducir costes y agilizar tareas. Las
                        Tecnologías de la Información y la Comunicación (TICC) nos permiten optimizar los
                        procesos de las empresas y buscar respuestas concretas y adaptadas a cada negocio.
                    </p>
                </div>
            </div>
        </section>

        <!-- Frase tecnologia -->
        <section class="frase-container  wow animated fadeIn">
            <div class="text-center text-white">
                <h4>
                La tecnología ha cambiado la forma de vivir desde siempre.
                Estamos interconectados, de una forma u otraá.
                </h4>
                <p>-James Comey.</p>
            </div>
        </section>

        <!-- Servicios -->
        <section id="servicios" class="services service-section">
            <div class="container">
                <div class="section-header text-center wow fadeInDown animated">
                    <h2>Nuestros Servicios</h2>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p> -->
                </div>
                <div class="row mt-5  wow animated zoomIn">
                    <div class="col-md-4 col-sm-6 services">
                        <span class="icon icon-genius"></span>
                        <div class="services-content">
                            <h5 class="text-center">Diseño de Páginas Web</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 services">
                        <span class="icon icon-genius"></span>
                        <div class="services-content">
                            <h5 class="text-center">Creación de Aplicaciones Web</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 services">
                        <span class="icon icon-genius"></span>
                        <div class="services-content">
                            <h5 class="text-center">Creación de Aplicaciones de Escritorio</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 services">
                        <span class="icon icon-genius"></span>
                        <div class="services-content">
                            <h5 class="text-center">Desarrollo de Aplicaciones Móviles</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 services">
                        <span class="icon icon-genius"></span>
                        <div class="services-content">
                            <h5 class="text-center">Automatización de procesos (IoT - Domotica)</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 services">
                        <span class="icon icon-genius"></span>
                        <div class="services-content">
                            <h5 class="text-center">Instalaciones de Redes</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque ligula sagittis faucibus eget quis lacus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Frase tecnologia -->
        <section class="frase-container wow animated fadeIn">
            <div class="text-center text-white">
                <h4>
                    La tecnología ha avanzado más en los últimos treinta años que en los últimos
                    doscientos. El avance exponencial sólo continuará.
                </h4>
                <p>-Niels Bohr.</p>
            </div>
        </section>

        <!-- Team -->
        <section id="equipo" class="container">
            <div class="row">
                <div class="col text-center wow fadeInDown animated">
                    <h2>Nuestro Equipo</h2>
                </div>
            </div>
            <div class="row justify-content-md-center mt-5">
                <!-- Miembro -->
                <div class="col-md-6 team-col wow animated flipInY">
                    <div class="team-card text-center">
                        <div class="mt-2">
                            <img src="{{ asset('img/team2.jpg') }}" alt="" width="300">
                        </div>
                        <div class="mt-3">
                            <h4>Humberto Aviño</h4>
                            <p>CEO</p>
                        </div>
                        <div class="team-redes mt-2 mb-3">
                            <a href="https://twitter.com">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="https://github.com">
                                <i class="fa fa-github"></i>
                            </a>
                            <a href="https://linkedin.com">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Miembro -->
                <div class="col-md-6 team-col wow animated flipInY">
                    <div class="team-card text-center">
                        <div class="mt-2">
                            <img src="{{ asset('img/team1.jpg') }}" alt="" width="300">
                        </div>
                        <div class="mt-3">
                            <h4>Juan Villarroel</h4>
                            <p>CTO</p>
                        </div>
                        <div class="team-redes mt-2 mb-3">
                            <a href="https://twitter.com">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="https://github.com">
                                <i class="fa fa-github"></i>
                            </a>
                            <a href="https://linkedin.com">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contacto -->
        <section id="contacto">
            <div class="row text-center">
                <div class="col text-white wow fadeInDown animated">
                    <h2>Contacto</h2>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <div class="col-md-6  contacto-card wow animated zoomIn">
                    <form>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Ingrese su Nombre">
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo Electrónico</label>
                            <input type="email" class="form-control" id="correo" placeholder="Ingrese su Correo Electrónico">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Mensaje</label>
                            <textarea class="form-control" id="descripcion" rows="3" placeholder="Escriba su Mensaje"></textarea>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-outline-ctyx">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <script src="{{ asset('libs/wow/wow.min.js') }}"></script>
        <script src="{{ asset('libs/jquery/jquery.js') }}"></script>
        <!-- <script src="{{ asset('libs/waypoints/waypoints.js') }}"></script> -->

        <script>
            // Desplazamiento anclas suave
            $(document).ready(function() {
                $('a[href^="#"]').click(function() {
                    var destino = $(this.hash);
                    if (destino.length == 0) {
                        destino = $('a[name="' + this.hash.substr(1) + '"]');
                    }
                    if (destino.length == 0) {
                        destino = $('html');
                    }
                    $('html, body').animate({ scrollTop: destino.offset().top }, 500);
                    return false;
                });

                // var url = window.location.toString();

                // var inicio = new Waypoint({
                //     element: document.getElementById('#'),
                //     handler: function(direction) {
                //         console.log('Scrolled to inicio!')
                //     }
                // })
                // var nosotros = new Waypoint({
                //     element: document.getElementById('nosotros'),
                //     handler: function(direction) {
                //         console.log('Scrolled to nosotros!')
                //     }
                // })
                // var servicios = new Waypoint({
                //     element: document.getElementById('servicios'),
                //     handler: function(direction) {
                //         console.log('Scrolled to servicios!')
                //     }
                // })
                // var equipo = new Waypoint({
                //     element: document.getElementById('equipo'),
                //     handler: function(direction) {
                //         console.log('Scrolled to equipo!')
                //     }
                // })
                // var contacto = new Waypoint({
                //     element: document.getElementById('contacto'),
                //     handler: function(direction) {
                //         console.log('Scrolled to contacto!')
                //     }
                // })
            
            });
        </script>
        <script>
            wow = new WOW(
                    {
                    boxClass:     'wow',      // default
                    animateClass: 'animated', // default
                    offset:       0,          // default
                    mobile:       true,       // default
                    live:         true        // default
                }
            )
            wow.init();
        </script>
    </body>
</html>
