<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "rootroot";
$dbname = "concesionario";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

$nombre = trim(strip_tags($_REQUEST['usuario']));
$dni = trim(strip_tags($_REQUEST['dni']));
$pass = trim(strip_tags($_REQUEST['contra']));

$sql = "SELECT * FROM usuarios WHERE nombre = '$nombre' AND dni = '$dni' AND tipo_usuario = 'administrador'";
$consulta = mysqli_query($conn, $sql) or die("Fallo en la consulta: " . mysqli_error($conn));

if (mysqli_num_rows($consulta) == 1) 
{
    $usuario = mysqli_fetch_assoc($consulta);
    
    if (password_verify($pass, $usuario['password'])) { 
        $_SESSION['usuario'] = $usuario['nombre'];
        $_SESSION['dni'] = $usuario['dni'];
        header("Location: index-admin.php");
        exit();
    } 
    else 
    {
        echo "Contraseña incorrecta";
        echo "<br><br>";
        echo "<a href='bienvenida.php'>Volver</a>";
    }
} 
else 
{
    echo "Credenciales incorrectas";
    echo "<br><br>";
    echo "<a href='bienvenida.php'>Volver</a>";
}
?>