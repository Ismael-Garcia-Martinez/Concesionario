<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "rootroot";
$dbname = "concesionario";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn)
{
    die ("Conexion fallida: " . mysqli_connect_error());
}

$nombre = $_REQUEST['nombre'];
$apellidos = $_REQUEST['apellidos'];
$contrasena = $_REQUEST['password'];
$dni = $_REQUEST['dni'];
$saldo = $_REQUEST['saldo'];

$sql = "INSERT INTO usuarios (nombre, apellidos, password , DNI, saldo) VALUES ('$nombre', '$apellidos', '$contrasena', '$dni', '$saldo')";
if (mysqli_query($conn, $sql))
{
    echo "Usuario anadido con exito";
}
else
{
    echo "Error al anadir usuario: " . mysqli_error($conn);
}

mysqli_close($conn);
?>