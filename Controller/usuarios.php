<?php

if (!defined('LIBRARIES_PATH')) {
    define('LIBRARIES_PATH', '../libraries/');
}

if (!defined('VIEWS_PATH')) {
    define('VIEWS_PATH', '../Views/');
}

require_once(LIBRARIES_PATH . "Conexion.php");

//crear función
function getAllUsuarios()
{
    $db = Conexion::getConnection();
    //crear variable para hacer consultas SQL
    $queryUsuarios = "SELECT * FROM usuarios";
    $result = $db->query($queryUsuarios);
    return $result;
}

//Con el punto se concatena
function getOneUsuario($id)
{
    $db = Conexion::getConnection();
    $queryUsuario = "SELECT * FROM usuarios WHERE id=" . $id;
    $result = $db->query($queryUsuario);
    if ($result->num_rows > 0) {
        return $result;
    }
    return null;
}

//crear función
function updateOneUsuario($id, $usuario, $contraseña)
{
    $db = Conexion::getConnection();
    //crear variable para hacer consultas SQL
    $queryUsuarios = "UPDATE usuarios SET usuario ='$usuario', contraseña ='$contraseña' WHERE id=" . $id;
    $db->query($queryUsuarios);
}
//crear función
function deleteOneUsuario($id)
{
    $db = Conexion::getConnection();
    //crear variable para hacer consultas SQL
    $queryUsuarios = "DELETE FROM usuarios WHERE id=" . $id;
    //echo $queryUsuarios;
    $db->query($queryUsuarios);
}
if (isset($_GET["elimina"]) && isset($_GET["id"])) {
    deleteOneUsuario($_GET["id"]);
    header("Location:".VIEWS_PATH."login.php");
}
if (isset($_POST['actualiza_contraseña'])) {
    updateOneUsuario($_POST["id"], $_POST["usuario"], $_POST["contraseña"]);
    header("Location:".VIEWS_PATH."login.php");
}

function newUsuario($usuario, $contraseña)
{
    $db = Conexion::getConnection();
    //crear variable para hacer consultas SQL
    $queryUsuarios = "INSERT INTO usuarios (usuario, contraseña) VALUES ('$usuario', '$contraseña')";
    //echo $queryUsuarios;
    $db->query($queryUsuarios);
}

if (isset($_POST['nuevo_usuario'])) {
    newUsuario($_POST["usuario"], $_POST["contraseña"]);
    header("Location:".VIEWS_PATH."login.php");
}
