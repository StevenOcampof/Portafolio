<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portafolio</title>
    <script src="/librerias/js/theme-init.js"></script>
    <link rel="icon" type="image/x-icon" href="./imagenes/portatil-pt.png" id="favicon">
    <link href="./librerias/css/bootstrap5.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="./librerias/custom.css" rel="stylesheet" type="text/css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitcount+Grid+Single:wght@100..900&display=swap"
          rel="stylesheet">
    <!--    <base href="imagenes/">-->
</head>
<body id="top">
<nav class="navbar navbar-expand-lg p-2 shadow-lg sticky-top">
    <div class="container-fluid">
        <!-- Logo y nombre -->
        <a class="navbar-brand d-flex align-items-center titles letraNavTitulo" href="./index.php">
            <img src="imagenes/portatil-pt.png" alt="Logo" width="70" height="70" class="d-inline-block me-2">
            MI PORTAFOLIO
        </a>

        <!-- Botón hamburguesa -->
        <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarMenu"
                aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <!--            <span class="navbar-toggler-icon"></span>-->
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </button>

        <!-- Contenido colapsable -->
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link letraNav" href="#top">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link letraNav" href="#section-proyects">Proyectos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link letraNav" href="#section-contact">Saber más</a>
                </li>

            </ul>
            <div class="mx-2">
                <button id="toggle-mode">
                    <i id="theme-icon" class="fas fa-moon"></i>  <!-- Ícono inicial (FontAwesome) -->
                </button>
            </div>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <section class="my-2 mx-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-sm-6">
                <h2 class="texto-gradient">Información personal</h2>
                <p class="texto-gradient">
                    Soy <strong>Jeison Ocampo</strong> Tecnólogo en Análisis y Desarrollo de Software con experiencia en
                    desarrollo web (PHP, MySQL, HTML, CSS, JavaScript) y en la creación de un proyecto de realidad
                    virtual adaptado a la web utilizando Unity. Mi objetivo es seguir creciendo como desarrollador y
                    crear soluciones innovadoras.
                </p>
            </div>

            <div class="col-sm-6 d-flex justify-content-center align-items-center">
                <img src="imagenes/portatil-pt.png" class="img-fluid rounded img-shadow" alt="portatil">
            </div>
        </div>
    </section>

    <section class="my-2 mx-5" id="section-proyects">
        <div class="row justify-content-center align-items-center">
            <div class="card col-sm-3 mx-5 my-2" style="width: 25rem;">
                <h4 class="card-title mt-3">Proyecto VR/Web</h4>
                <div id="carouselBagaWeb" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselBagaWeb" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselBagaWeb" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselBagaWeb" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="imagenes/Baga1.png" class="card-img-top p-2 img-card" ondragstart="return false;"
                                 alt="index proyecto Bagatela Web">
                        </div>
                        <div class="carousel-item">
                            <img src="imagenes/Baga2.png" class="d-block w-100 p-2 img-card" ondragstart="return false;"
                                 alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="imagenes/Baga3.png" class="d-block w-100 p-2 img-card" ondragstart="return false;"
                                 alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev bg-black" type="button" data-bs-target="#carouselBagaWeb"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next bg-black" type="button" data-bs-target="#carouselBagaWeb"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="card-body">
                    <p class="card-text">Participé en el desarrollo de un recorrido virtual del museo La Bagatela,
                        creado en equipo con Unity. El proyecto permite explorar el museo de forma interactiva e
                        inmersiva. Se programó en C# e incluimos elementos 3D y adaptación para la web.</p>
                </div>
            </div>
            <div class="card col-sm-3 mx-5 my-2" style="width: 25rem;">
                <h4 class="card-title mt-3">Proyecto Productivas</h4>
                <div id="carouselProductivas" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselProductivas" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselProductivas" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselProductivas" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="imagenes/produ1.png" class="card-img-top p-2 img-card" ondragstart="return false;"
                                 alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="imagenes/produ2.png" class="d-block w-100 p-2 img-card"
                                 ondragstart="return false;" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="imagenes/produ3.png" class="d-block w-100 p-2 img-card"
                                 ondragstart="return false;" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev bg-black" type="button" data-bs-target="#carouselProductivas"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next bg-black" type="button" data-bs-target="#carouselProductivas"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="card-body">
                    <p class="card-text">Contribuí en la mejora de un aplicativo web para la gestión de etapas
                        productivas, Durante el desarrollo, aporté nuevas funcionalidades y mejoras en la experiencia de
                        usuario bajo el modelo MVC con PHP, JavaScript, HTML, CSS y Bootstrap.
                    </p>
                </div>
            </div>
            <div class="card col-sm-3 mx-5 my-2" style="width: 25rem;">
                <h4 class="card-title mt-3">Proyecto LabAires</h4>
                <div id="carouselLaboratorio" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselLaboratorio" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselLaboratorio" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="imagenes/Lab1.png" class="card-img-top p-2 img-card" ondragstart="return false;"
                                 alt="index proyecto Bagatela Web">
                        </div>
                        <div class="carousel-item">
                            <img src="imagenes/Lab2.png" class="d-block w-100 p-2 img-card" ondragstart="return false;"
                                 alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev bg-black" type="button" data-bs-target="#carouselLaboratorio"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next bg-black" type="button" data-bs-target="#carouselLaboratorio"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="card-body">
                    <p class="card-text">Participé en el desarrollo de un aplicativo enfocado en el control de los
                        servicios prestados por la organización, con el objetivo de mejorar la gestión y el seguimiento
                        de sus procesos operativos.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5 mx-5" id="section-contact">
        <div class="row">
            <div class="col-sm-6 d-flex justify-content-center align-items-center">
                <img src="imagenes/portatil-pt.png" class="img-fluid rounded img-shadow" alt="portatil">
            </div>
            <div class="col-sm-6 justify-content-center">
                <h2 class="texto-gradient">Contactame</h2>
                <form action="">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="name" placeholder="Tu nombre">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="email" placeholder="Tu correo electrónico">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="message" rows="3"
                                  placeholder="Escribe tu mensaje aquí"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" id="contacto">Enviar</button>
                </form>
            </div>
        </div>
    </section>
</div>
<footer class="text-center text-lg-start">
    <div class="text-center p-2">
        <p>
            <small>
                © 2025 Jeison Ocampo. Todos los derechos reservados.
            </small>
        </p>
    </div>
    <script src="./librerias/js/bootstrap5.min.js"></script>
    <?php include_once __DIR__ . '/app/librerias-js.php'; ?>
</body>
</html>