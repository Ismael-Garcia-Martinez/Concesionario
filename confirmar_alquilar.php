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
$alquilar = $_REQUEST['alquilar'];
$sql_precio ="SELECT precio FROM coche where id_coche = '$alquilar'";
$consulta = mysqli_query($conn,$sql_precio);
$coche = mysqli_fetch_assoc($consulta);
$precio = $coche['precio'];

$usuario = $_SESSION['usuario'];
$dni = $_SESSION['dni'];
$sql_saldo = "SELECT saldo FROM usuarios WHERE id_usuario = '$id'";
$consulta2 = mysqli_query($conn,$sql_saldo);
$persona = mysqli_fetch_assoc($consulta2);
$saldo =  $persona['saldo'];

if ($precio > $saldo)
{
    echo "No tienes suficiente saldo para alquilarlo";
}
else
{
$saldo2 = $saldo - $precio;
$sql_nuevo_saldo = "UPDATE usuarios SET saldo = '$saldo2' WHERE nombre = '$usuario'";
mysqli_query($conn,$sql_nuevo_saldo);

$sql_alquilado = "UPDATE coches SET alquilado = 1 WHERE id_coche = '$alquilar'";
$sql_alquileres = "INSERT INTO alquileres(dni_usuario,id_coche,prestado) VALUES('$dni','$alquilar',now())";
mysqli_query($conn,$sql_alquilado);
mysqli_query($conn,$sql_alquileres);

echo "Coche alquilado.";
echo "<br><a href='index-cliente.php'>Volver</a>";
}
mysqli_close($conn);
?>
