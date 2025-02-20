<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
<style>
body{
background-image: url(img/fondo2.jpg);
background-repeat: no-repeat;
background-size: cover;
color: white;
    }
h1{
background-color: black;
text-align: center;
border: 2px white solid;
margin: 0;
  }
.iniciosesion{
margin-top: 40px;
margin-left: 42%;
padding-bottom: 5px;
width: 300px;
background-color: grey;
text-align: center;
border-radius: 30px;
border: 2px white solid;
}
</style>
</head>
<body>
<h1><img src="img/fondo.jpg" style="width: 150px; text-align: left;">CONCESIONARIO<img src="img/fondo.jpg" style="width: 150px;"></h1>
<form class="iniciosesion">
    <h2>Inicio Sesion</h2>
    <label><b>Usuario:</b></label><br><input type="text" name="usuario" required>
    <br><br>
    <label><b>Contraseña:</b></label><br><input type="password" name="contra" required>
    <br><br>
    <button type="submit">Enviar</button>
</body>
</html>
<?php
$server = "localhost";
$user = "root";
$password = "rootroot";
$dbname = "concesionario";
$conn = mysqli_connect($server, $user, $password, $dbname);
if(!$conn)
{
    die ("Conexion fallida" . mysqli_connect_error());
}
$nombre = $_REQUEST['usuario'];
$contra = $_REQUEST['contra'];
$sql = "SELECT * FROM usuarios where nombre = $nombre && password = $contra";

if (mysqli_query($conn,$sql))
{
    echo "El dneiodn";
}
else
{
    echo "no";
}


?>