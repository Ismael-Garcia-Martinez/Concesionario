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
$dni = $_REQUEST['dni'];
$sql = "DELETE FROM usuarios WHERE dni='$dni'";
if (mysqli_query($conn,$sql))
{
    echo "Usuario eliminado con exito";
}
else
{
    echo "Error al eliminar: " . mysqli_error($conn);   
}



?>