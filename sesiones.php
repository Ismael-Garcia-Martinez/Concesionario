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
$nombre = trim(strip_tags($_REQUEST['usuario']));
$dni = trim(strip_tags($_REQUEST['dni']));
$pass = trim(strip_tags($_REQUEST['contra']));
$pass_cifrada = password_hash($pass, PASSWORD_DEFAULT);
$sql = "SELECT * FROM usuarios where nombre = '$nombre' and dni = '$dni'";
$consulta = mysqli_query($conn,$sql) or die ("Fallo en la consulta" . mysqli_error($conn));
$resultado = mysqli_fetch_array($consulta);
if (!$resultado) {
    echo "Usuario no encontrado";
    exit();
}
if (password_verify($pass,$resultado['password']))
{
    echo "holka";

}
else
{
    echo "Credenciales incorrectas";
}
mysqli_close($conn);
?>