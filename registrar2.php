<?php
$servername = "localhost";
$user = "root";
$password = "rootroot";
$dbname = "concesionario";

$conn = mysqli_connect($servername, $user, $password, $dbname);

if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}


$nombre = trim(strip_tags($_REQUEST["nombre"]));
$apellidos = trim(strip_tags($_REQUEST["apellido"]));
$dni = trim(strip_tags($_REQUEST["dni"]));
$pass1 = trim($_REQUEST["contra"]);
$pass2 = trim($_REQUEST["contra2"]);

if ($pass1 !== $pass2) {
    die("Las contraseñas no coinciden");
}


$sql2 = "SELECT * FROM usuarios WHERE dni = '$dni'";
$consulta = mysqli_query($conn, $sql2);
if (mysqli_num_rows($consulta) == 1) {
    die("Error: Ese usuario ya está registrado.");
}

$cifrada_contra = password_hash($pass1, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (password, nombre, apellidos, dni, tipo_usuario) VALUES ('$cifrada_contra', '$nombre', '$apellidos', '$dni','cliente')";

if (mysqli_query($conn, $sql)) {
    header("Location: index-cliente.php");
} else {
    echo "Error al añadir usuario: " . mysqli_error($conn);
}

mysqli_close($conn);
?>