<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casas & Asociados</title>
    <link rel="stylesheet" href="../assets/scss/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header id="header__blogs">
        <nav id="nav__blogs">
            <ul>
                <li>
                    <a class="nav__blogs__link" href="../pages/index.php">
                        <div class="nav__blogs__logo">
                            <img src="../img/logo-casas-y-asociados.png" alt=" ">
                        </div>
                    </a>
                </li>
                <li><a class="nav-link active" aria-current="page" href="../pages/about.php">Quienes somos</a></li>
                <li><a class="nav-link" href="../pages/services.php">servicios</a></li>
                <li><a class="nav-link" href="../pages/news.php">Actualidad</a></li>
                <li><a class="nav-link" href="../pages/contact.php" tabindex="-1"aria-disabled="true">Contacto</a></li>
                <li>
                    <a href=""><img width="35" height="35" src="../img/icons8-linkedin-circled-50.png" alt=""/></a>
                    <a href=""><img width="23" height="23" src="../img/icons8-instagram-24.png" alt=""/></a>
                </li>
            </ul>
            <hr>
        </nav>
        <!-- NAV ALTERNATIVO PARA PANTALLAS MENORES -->
        <nav id="nav__blogs__small" class="navbar fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="../pages/index.php">
                    <img src="../img/logo-casas-y-asociados.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <img src="../img/logo-casas-y-asociados.png" alt="">
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul>
                            <li><a class="nav-link active" aria-current="page" href="../pages/about.php">Quienes somos</a></li>
                            <li><a class="nav-link" href="../pages/services.php">servicios</a></li>
                            <li><a class="nav-link" href="../pages/news.php">Actualidad</a></li>
                            <li><a class="nav-link" href="../pages/contact.php" tabindex="-1" aria-disabled="true">Contacto</a></li>
                            <li>
                                <a href=""><img width="40" height="40" src="../img/icons8-linkedin-circled-50.png" alt=""></a>
                                <a href=""><img width="27" height="27" src="../img/icons8-instagram-24.png" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- FIN DE NAV ALTERNATIVO -->
    </header>
