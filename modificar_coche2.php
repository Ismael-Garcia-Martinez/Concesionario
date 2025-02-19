<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "rootroot";
$dbname = "concesionario";

// Crear conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
// Recuperar datos del formulario
$id = $_POST['id_coche'];
$modelo =  $_POST['modelo'];
$marca =  $_POST['marca'];
$color = $_POST['color'];
$precio = $_POST['precio'];
$alquilado = $_POST['alquilado'];
$foto = $_POST['foto'];

// Preparar y ejecutar la consulta de inserción
$sql = "UPDATE coches SET modelo='$modelo', color='$color', precio='$precio', alquilado='$alquilado', foto='$foto' WHERE marca = '$marca' ";


if (mysqli_query($conn, $sql)) {
    echo "Coche actualizado con éxito.";
} else {
    echo "Error al actualizar: " . mysqli_error($conn);
}

// Cerrar la conexión
mysqli_close($conn);
?>