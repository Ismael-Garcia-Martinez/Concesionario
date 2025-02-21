<?php
session_start();
?>
<?php
$servername = "localhost";
$username = "root";
$password = "rootroot";
$dbname = "concesionario";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!conn)
{
    die ("Conexion fallida: " . mysqli_connect_error());
}
$dni = $_REQUEST['dni'];
$nombre = $_REQUEST['nombre'];
$apellidos = $_REQUEST['apellidos'];
$password = $_REQUEST['password'];
$saldo = $_REQUEST['saldo'];
$sql = "UPDATE usuarios SET nombre='$nombre', apellidos='$apellidos', password='$password=', saldo='$saldo' WHERE dni='$dni'";
if (mysqli_query($conn,$sql))
{
    echo "Usuario actualizado con exito";
}
else
{
    echo "Error al actualizar: " . mysqli_error($conn);
}