<?php
session_start();

$nombre = $_REQUEST['nombre'];

if ($nombre == "") {
    echo "No ha escrito su nombre";
    header("Location:nombre-1.php");
    exit;
} else {
    $_SESSION["nombre"] = $nombre;
    header("Location:index.php");
    exit;
}
?>