<?php
session_start();
?>
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
.volver{
    background-color: black;
    color: white;
    margin-left: 49%;
}
</style>
</head>
<body>
<h1><img src="img/fondo.jpg" style="width: 150px; text-align: left;">CONCESIONARIO<img src="img/fondo.jpg" style="width: 150px;"></h1>
<a href='index-cliente.php'><input type="button" value="Volver" class="volver"></a>
<form class="iniciosesion" action="sesiones.php" method="get">
    <h2>Inicio Sesion</h2>
    <label><b>Usuario:</b></label><br><input type="text" name="usuario" required>
    <br><br>
    <label><b>DNI:</b></label><br><input type="text" name="dni" required>
    <br><br>
    <label><b>Contraseña:</b></label><br><input type="password" name="contra" required>
    <br><br>
    <button type="submit">Enviar</button>
</body>
</html>
