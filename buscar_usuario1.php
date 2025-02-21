<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Buscar</title>
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
form{
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
<form action="buscar_usuarios.php" method="post">
<h2>Buscar Usuario</h2>
<label for="buscarnombre">Buscar por nombre:</label>
<input type="text" name="buscarnombre">
<br><br>
<label for="buscarapellido">Buscar por apellido:</label>
<input type="text" name="buscarapellido">
<br><br>
<label for="buscarcontrasena">Buscar por contrasena:</label>
<input type="text" name="buscarcontrasena">
<br><br>
<label for="buscardni">Buscar por dni:</label>
<input type="text" name="buscardni">
<br><br>
<label for="buscarsaldo">Buscar por saldo:</label>
<input type="text" name="buscarsaldo">
<br><br>
<input type="submit" value="Buscar">
</form>

</body>
</html>