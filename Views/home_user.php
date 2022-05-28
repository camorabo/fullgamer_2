<?php

define('CONTROLLER_PATH', '../Controller/');
define('VIEWS_PATH', '../Views/');
define('MODELS_PATH', '../Models/');
define('CSS_PATH', '../css/');
define('JS_PATH', '../js/');
define('IMG_PATH', '../img/');


include(VIEWS_PATH . "header.php");
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#">Perfil</a>
                </li>               
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo VIEWS_PATH;?>login.php?info=2">Cerrar sesión</a>
                </li>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="jumbotron">
                <h2>
                    Bienvenido Usuario
                </h2>
                <p>
                    <img alt="Imagen de inicio usuario" class="d-block w-75"  src="<?php echo IMG_PATH;?>supernintendo.jpg" />
                </p>
            </div>
        </div>
    </div>
</div>
<?php
include(VIEWS_PATH . "footer.php");
?>