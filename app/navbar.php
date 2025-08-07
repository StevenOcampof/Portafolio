<nav class="navbar navbar-expand-lg p-2 shadow-lg sticky-top">
    <div class="container-fluid">
        <!-- Logo y nombre -->
        <a class="navbar-brand d-flex align-items-center titles letraNavTitulo" href="../index.php">
            <img src="../imagenes/portatil-pt.png" alt="Logo" width="70" height="70" class="d-inline-block me-2">
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
                    <a class="nav-link letraNav" href="../index.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link letraNav" href="mas-proyectos.php">Proyectos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link letraNav" href="../index.php#section-contact">Saber más</a>
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