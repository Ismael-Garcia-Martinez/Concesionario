<?php
$servername = "localhost";
$username = "root";
$password = "rootroot";
$dbname = "concesionario";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn)
{
    die ("Conexion fallida: " . mysqli_connect_error());
}
$marca = $_REQUEST['marca'];
$sql = "DELETE FROM coches WHERE marca='$marca'";
if (mysqli_query($conn,$sql))
{
    echo "Coche eliminado con exito";
}
else
{
    echo "Error al eliminar: " . mysqli_error($conn);   
}



?>