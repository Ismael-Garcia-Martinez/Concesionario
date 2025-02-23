<?php
$servername = "localhost";
$username = "root";
$password = "rootroot";
$dbname = "concesionario";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die ("Conexion fallida: " . mysqli_connect_error());

$marca = $_REQUEST['marca'];
$modelo = $_REQUEST['modelo'];
$color = $_REQUEST['color'];
$precio = $_REQUEST['precio'];

$sql = "INSERT INTO coches(marca, modelo, color, precio, alquilado) VALUES('$marca', '$modelo', '$color', '$precio', 0)";
if (mysqli_query($conn, $sql))
{
    header("Location: index-cliente.php");
}
else
{
    echo "Error al añadir el coche";
}
mysqli_close($conn);
?>