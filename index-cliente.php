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
color: rgb(255, 255, 255);
    }
h1{
background-color: black;
text-align: center;
border: 2px white solid;
margin: 0;
  }

.registrarse{
    float: right; 
    height: 30px; 
    background-color: rgb(71, 209, 255);
      }
.iniciosesion{
    float: right; 
    height: 30px; 
    background-color: rgb(71, 209, 255); 
}
.mostrar1{
    display: inline-block;
    width: 30%;
    background-color: grey;
    color: white;
    text-align: center;
}
.mostrar2{
    display: inline-block;
    width: 30%;
    background-color: grey;
    color: white;
    text-align: center;
    margin-left: 35%;
}
.logeado{
    float: right; 
    height: 30px; 
    background-color: rgb(71, 209, 255);
}
.cerrar{
    margin-left: 100%;
    float: right; 
    width: 60px; 
    background-color: rgb(71, 209, 255);
}
.alquilar{
    display: inline-block;
    width: 30%;
    background-color: grey;
    color: white;
    text-align: center;
}
.poner{
    display: inline-block;
    width: 30%;
    background-color: grey;
    color: white;
    text-align: center;
}
.bienvenida{
    background-color: grey;
    color: white;
    width: 30%;
    margin-left: 42%;
}
</style>
</head>
<body>
<h1><img src="img/fondo.jpg" style="width: 150px; text-align: left;">CONCESIONARIO<img src="img/fondo.jpg" style="width: 150px;"></h1>
<?php
if (isset($_SESSION['usuario']))
{
    echo "<div class='logeado'>Bienvenido, " . $_SESSION['usuario'] . "</div>";
    echo "<br><br>";
    echo "<a href='cerrarsesion.php'>";
    echo "<button class='cerrar'>";
    echo "<b>Cerrar Sesion</b>";
    echo "</button>";
    echo "</a>";
    echo "<a href='mostrar_coches.php'>";
    echo "<div class='mostrar1'><h2>MOSTRAR COCHES</h2>";
    echo "<img src='img/coche.png' width='200px'>";
    echo "</div>";
    echo "</a>";
    echo "<a href='alquilar_coche.php'";
    echo "<div class='alquilar'><h2>ALQUILAR COCHES</h2>";
    echo "<img src='img/coche.png' width='200px'>";
    echo "</div>";
    echo "</a>";
    echo "<a href='poner_alquiler.php'";
    echo "<div class='poner'><h2>PONER ALQUILER</h2>";
    echo "<img src='img/coche.png' width='200px'>";
    echo "</div>";
    echo "</a>";
}
else
{
    echo "<a href='registrarse.php'>";
    echo "<button class='registrarse'>";
    echo "<b>Registrarse</b>";
    echo "</button>";
    echo "</a>";
    echo "<a href='iniciosesion.php'>";
    echo "<button class='iniciosesion'>";
    echo "<b>Iniciar sesion</b>";
    echo "</button>";
    echo "</a>";
    echo "<a href='mostrar_coches.php'>";
    echo "<div class='mostrar2'><h2>MOSTRAR COCHES</h2>";
    echo "<img src='img/coche.png' width='200px'>";
    echo "</div>";
}
?>
<br><br>
<a href="bienvenida.php" class="bienvenida">VOLVER AL MENU DE BIENVENIDA</a>
</body>
</html>