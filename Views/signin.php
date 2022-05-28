<!DOCTYPE html>
<html>
<?php
define('CONTROLLER_PATH', '../Controller/');
define('VIEWS_PATH', '../Views/');
define('MODELS_PATH', '../Models/');
define('CSS_PATH', '../css/');
define('JS_PATH', '../js/');
define('IMG_PATH', '../img/');
include(VIEWS_PATH . "header.php");
require_once(CONTROLLER_PATH . "usuarios.php");
?>

<body style="background-color: #708D81;">
    <div class="row">
        <div class="col-md-3">
            <BR>
            <img src="../img/wick_1.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="col-md-6 mx-auto text-center">
            <div class="header-title">
                <BR>
                <img src="../img/signup.JPG" class="d-block w-100" alt="..." />
                <BR>
            </div>
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <div class="myform form ">
                        <form method="POST" action="<?php echo CONTROLLER_PATH; ?>usuarios.php">
                            <div class="form-group">
                                <input type="text" name="usuario" class="form-control my-input" id="usuario" placeholder="Nombre de Usuario">
                            </div>
                            <BR>
                            <div class="form-group">
                                <input type="text" name="contraseña" class="form-control my-input" id="contraseña" placeholder="Contraseña">
                            </div>
                            <BR>
                            <div class="text-center ">
                                <input type="hidden" name="nuevo_usuario">
                                <button style="background-color: #001427" type="submit" class=" btn btn-block send-button tx-tfm">Crear Cuenta</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <BR>
            <img src="../img/wick_2.jpg" class="d-block w-100" alt="..." />
        </div>
    </div>
</body>

<?php
include(VIEWS_PATH . "footer.php");
?>

</html>