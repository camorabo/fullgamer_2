<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/Style.css">
    <link rel="shortcut icon" href="./img/LOGO_MORADO.png" alt="Logo empresarial">
    <title>FULLGAMER</title>
</head>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" color="" href="#">
                <img src="./img/LOGO_BLANCO_SIMBOLO.png" alt="" height="50px" width="50px" radius="150%" style="border-radius: 100%;">
                FULLGAMER</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php" id="espacioletra">INICIO</a>
                    </li>

                    <li class="nav-item dropdown" id="espacioletra">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">CATEGORÍAS</a>
                        <div class="dropdown-menu" id="espacioletra">
                            <a class="dropdown-item" href="./sec/carreras.php">CARRERAS</a>
                            <a class="dropdown-item" href="./sec/accion.php">ACCIÓN</a>
                            <a class="dropdown-item" href="./sec/aventura.php">AVENTURA</a>
                            <a class="dropdown-item" href="./sec/terror.php">TERROR</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./quienessomos.php" id="espacioletra">QUIÉNES SOMOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Views/login.php" id="espacioletra">INICIAR SESIÓN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<body>
    <div class="row">
        <h1 style='text-align:center; color:bisque'>¿QUE HACEMOS NOSOTROS?</h1>
        &nbsp;
        <div class="container-fluid" style="color:bisque">
            <div class="row">
                <div class="col-md-3">
                    <img class="d-block w-100" alt="..." src="./img/Videojuego1.jpg" style="height: 18cm;" />
                </div>
                <div class="col-md-6">
                    <h2 color=>¿DE QUÉ TRATA NUESTRA PÁGINA?<br></br></h2>
                    <p>Nuestra pagina web se basa en ayudar a todos los gamers o amantes de los videojuegos a encontrar las
                        categorias
                        y los juegos mas buscados y mas jugados en los ultimos años, tambien podran tener diferentes videos
                        del
                        videojuego
                        y su historia, podran ir al sitio de comprar del videojuego para comprarlo allí.<br></br>
                    </p>

                    <h2>¿HAY ESPACIOS PARA LOS USUARIOS?<br></br></h2>
                    <p>Los usuarios tendran una variedad de espacios donde se sentiran comodos, tenemos diferentes espacios
                        como
                        terror, aventura, accion y de carreras, donde podran descubrir que mas les gusta y poder encontrar
                        contenido
                        solo del tema que escoja, tambien podran opinar sobre la seccion escogida podran contarnos que tal les
                        parecio
                        y que recomendarian agregar a nuestra página.</p>
                </div>
                <div class="col-md-3">
                    <img class="d-block w-100" alt="..." src="./img/Videojuego2.jpg" style="height: 18cm;" />
                </div>
            </div>
        </div>
    </div>
    <script src="./js/bootstrap.min.js"></script>
</body>