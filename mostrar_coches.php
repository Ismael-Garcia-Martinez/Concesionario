<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Coches</title>
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
h2{
    background-color: grey;
    width: 30%;
    text-align: center;
    margin-left: 35%;
}
table{
margin-left: 25%;
}

td{
text-align: center;
background-color: grey;
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
    echo "<a href='index-cliente.php'><input type='button' value='Volver'></a>";
    echo "<h2>COCHES DISPONIBLES</h2>";
    echo "<table class='tabla'>";
    echo "<tr>";
    echo "<td>";
    echo "<img src='img/seat-arona.avif' width='300px'>";
    echo "<br>";
    echo "<b>SEAT ARONA</b>";
    echo "<br>";
    echo "<a href='formulario_alquilar.php'><button type='submit'>Alquilar</button></a>";
    echo "<td>";
    echo "<img src='img/opel-corsa.jpg' width='300px'>";
    echo "<br>";
    echo "<b>OPEL CORSA</b>";
    echo "<br>";
    echo "<a href='formulario_alquilar.php'><button type='submit'>Alquilar</button></a>";
    echo "<td>";
    echo "<img src='img/bmw-x2.jpg' width='300px'>";
    echo "<br>";
    echo "<b>BMW X2</b>";
    echo "<br>";
    echo "<a href='formulario_alquilar.php'><button type='submit'>Alquilar</button></a>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<img src='img/peugeot-308.jpg' width='300px'>";
    echo "<br>";
    echo "<b>PEUGEOT 308</b>";
    echo "<br>";
    echo "<a href='iniciosesion.php'><button type='submit'>Alquilar</button></a>";    echo "</td>";
    echo "<td>";
    echo "<img src='img/audia4.jpg' width='300px'>";
    echo "<br>";
    echo "<b>AUDI A4</b>";
    echo "<br>";
    echo "<a href='formulario_alquilar.php'><button type='submit'>Alquilar</button></a>";
    echo "</td>";   
    echo "<td>";
    echo "<img src='img/mercedesc63.webp' width='300px'>";
    echo "<br>";
    echo "<b>MERCEDES C63</b>";
    echo "<br>";
    echo "<a href='iniciosesion.php'><button type='submit'>Alquilar</button></a>";    echo "</td>";   
    echo "</tr>";
    echo "</table>";
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
    echo "<a href='index-cliente.php'><input type='button' value='Volver'></a>";
    echo "<h2>COCHES DISPONIBLES</h2>";
    echo "<table class='tabla'>";
    echo "<tr>";
    echo "<td>";
    echo "<img src='img/seat-arona.avif' width='300px'>";
    echo "<br>";
    echo "<b>SEAT ARONA</b>";
    echo "<br>";
    echo "<a href='iniciosesion.php'><button type='submit'>Alquilar</button></a>";    echo "</td>";
    echo "<td>";
    echo "<img src='img/opel-corsa.jpg' width='300px'>";
    echo "<br>";
    echo "<b>OPEL CORSA</b>";
    echo "<br>";
    echo "<a href='iniciosesion.php'><button type='submit'>Alquilar</button></a>";    echo "</td>"; 
    echo "<td>";
    echo "<img src='img/bmw-x2.jpg' width='300px'>";
    echo "<br>";
    echo "<b>BMW X2</b>";
    echo "<br>";
    echo "<a href='iniciosesion.php'><button type='submit'>Alquilar</button></a>";    echo "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo "<img src='img/peugeot-308.jpg' width='300px'>";
    echo "<br>";
    echo "<b>PEUGEOT 308</b>";
    echo "<br>";
    echo "<a href='iniciosesion.php'><button type='submit'>Alquilar</button></a>";    echo "</td>";
    echo "<td>";
    echo "<img src='img/audia4.jpg' width='300px'>";
    echo "<br>";
    echo "<b>AUDI A4</b>";
    echo "<br>";
    echo "<a href='iniciosesion.php'><button type='submit'>Alquilar</button></a>";
    echo "</td>";   
    echo "<td>";
    echo "<img src='img/mercedesc63.webp' width='300px'>";
    echo "<br>";
    echo "<b>MERCEDES C63</b>";
    echo "<br>";
    echo "<a href='iniciosesion.php'><button type='submit'>Alquilar</button></a>";    echo "</td>";   
    echo "</tr>";
    echo "</table>";
}
?>
</body>
</html>