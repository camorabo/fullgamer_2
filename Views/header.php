<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/Style.css">
    <link rel="shortcut icon" href="../img/LOGO_MORADO.png" alt="Logo empresarial">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <title>FULLGAMER</title>
</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" color="" href="#">
                <img src="../img/LOGO_BLANCO_SIMBOLO.png" alt="" height="50px" width="50px" radius="150%" style="border-radius: 100%;">
                FULLGAMER</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../Views/index.php" id="espacioletra">INICIO</a>
                    </li>

                    <li class="nav-item dropdown" id="espacioletra">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">CATEGORÍAS</a>
                        <div class="dropdown-menu" id="espacioletra">
                            <a class="dropdown-item" href="../sec/carreras.php">CARRERAS</a>
                            <a class="dropdown-item" href="../sec/accion.php">ACCIÓN</a>
                            <a class="dropdown-item" href="../sec/aventura.php">AVENTURA</a>
                            <a class="dropdown-item" href="../sec/terror.php">TERROR</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../quienessomos.php" id="espacioletra">QUIÉNES SOMOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Views/login.php" id="espacioletra">INICIAR SESIÓN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>