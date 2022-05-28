<?php

define('CONTROLLER_PATH', '../Controllers/');
define('VIEWS_PATH', '../Views/');
define('MODELS_PATH', '../Models/');
define('LIBRARIES_PATH', '../libraries/');

require_once(LIBRARIES_PATH."Conexion.php");
$db = Conexion::getConnection();
$query = "SELECT * FROM usuarios WHERE usuario = '" . $_POST["usuario"] . "' AND contraseña = '" . $_POST["contraseña"] . "' ";
$result = $db->query($query);
if ($result->num_rows > 0) {
    //echo "Datos Correctos";
    while ($row = mysqli_fetch_assoc($result)) {
session_start();
$_SESSION["id_usuario"] = $row["id"];
$_SESSION["usuario"] = $row["usuario"];
$_SESSION["contraseña"] = $row["contraseña"];
        if ($row["rol"] == 0) { //Usuario con menos privilegios
            header("Location:".VIEWS_PATH."home_user.php");
        }
        if ($row["rol"] == 1) { //Administrador
            header("Location:".VIEWS_PATH."home_admin.php");
        }
    }
    //header("Location:".VIEWS_PATH."home_user.php");
} else {
    //echo "Datos Incorrectos";
    header("Location:".VIEWS_PATH."login.php?info=1");
}
?>