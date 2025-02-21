<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>CONCESIONARIO</title>
<style>
body{
background-image: url(img/fondo2.jpg);
background-repeat: no-repeat;
background-size: cover;
color: white;
text-align: center;
    }
h1{
background-color: black;
text-align: center;
border: 2px white solid;
margin: 0;
  }
.anadir{
background-color: grey;
width: 20%;
text-align: center;
margin-left: 40%;
border-radius: 10%;
margin-top: 10%;

       }
</style>
</head>
<body>
<h1>
<img src="img/fondo.jpg" style="width: 150px; text-align: left;">CONCESIONARIO<img src="img/fondo.jpg" style="width: 150px;">
</h1>
<a href="index-admin.php"><input type="submit" value="Volver"></a>
<div class="anadir">
<h2>Insertar Usuario</h2>
<form action="add_usuario.php" method="post">
    <label for="nombre">Nombre:</label>
    <br>
    <input type="text" name="nombre" required>
    <br>
    <label for="apellidos">Apellidos:</label>
    <br>
    <input type="text" name="apellidos" required>
    <br>
    <label for="password">Password:</label>
    <br>
    <input type="text" name="password" required>
    <br>
    <label for="dni">DNI:</label>
    <br>
    <input type="text" name="dni" required>
    <br>
    <label for="saldo">Saldo:</label>
    <br>
    <input type="text" name="saldo">
    <br><br>
    <input type="submit" value="Anadir">
</form>
</div>
</body>
</html>