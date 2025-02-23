<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Poner Coche en Alquiler</title>
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
.info_coche{
    margin: 10%;
    text-align: center;
    background-color: grey;
    border: 2px white solid;
    border-radius: 20px;
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

    echo "<a href='index-cliente.php'>";
    echo "<button type='submit'>Volver</button>";
    echo "</a>";

    echo "<a href='cerrarsesion.php'>";
     echo "<button class='cerrar'>";
    echo "<b>Cerrar Sesion</b>";
    echo "</button>";
    echo "</a>";

    echo "<form action='poner_alquiler2.php'>";
    echo "<div class='info_coche'>";
    echo "<h2>INFORMACIÓN DEL COCHE</h2>";
    echo "<label>MARCA</label><br><input type='text' name='marca' required>";
    echo "<br><br>";
    echo "<label>MODELO</label><br><input type='text' name='modelo' required>";
    echo "<br><br>";
    echo "<label>COLOR</label><br><input type='text' name='color' required>";
    echo "<br><br>";
    echo "<label>PRECIO</label><br><input type='number' name='precio' required>";
    echo "<br><br>";
    echo "<button type='submit'>Confirmar</button>";
    echo "<br><br>";
    echo "</div>";
    echo "</form>";
}
?>
</body>
</html>