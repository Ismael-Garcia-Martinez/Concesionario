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

$modelo = $_REQUEST['modelo'];
$marca = $_REQUEST['marca'];
$color = $_REQUEST['color'];
$precio = $_REQUEST['precio'];
$alquilado = $_REQUEST['alquilado'];
$foto = $_REQUEST['foto'];

$sql = "INSERT INTO coches (modelo, marca, color, precio, alquilado, foto) VALUES ('$modelo', '$marca', '$color', '$precio', '$alquilado', '$foto')";
if (mysqli_query($conn, $sql))
{
    echo "Coche anadido con exito";
}
else
{
    echo "Error al anadir coche: " . mysqli_error($conn);
}

mysqli_close($conn);

?>