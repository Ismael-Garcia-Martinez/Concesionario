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
$id = $_REQUEST['id'];
$sql = "DELETE FROM alquileres WHERE id_alquiler='$id'";
if (mysqli_query($conn,$sql))
{
    echo "Alquiler eliminado con exito";
}
else
{
    echo "Error al eliminar: " . mysqli_error($conn);   
}



?>