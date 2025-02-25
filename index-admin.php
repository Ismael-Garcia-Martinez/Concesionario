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
    }
h1{
background-color: black;
text-align: center;
border: 2px white solid;
margin: 0;
  }
.coches{
    display: inline-block;
    background-color: rgb(99, 98, 98);
    width: 33%;
    height: 200px;
    text-align: center;
    color: white;
        }
.usuarios{
    display: inline-block;
    background-color: rgb(99, 98, 98);
    width: 33%;
    height: 200px;
    text-align: center;
    color: white;
    margin-top: -200px;
         }
.alquileres{
    display: inline-block;
    background-color: rgb(99, 98, 98);
    width: 33%;
    height: 200px;
    text-align: center;
    color: white;
    margin-top: -200px;
           }
.bienvenida{
    background-color: grey;
    color: white;
    width: 30%;
    margin-left: 42%;
}
.logeado{
    float: right; 
    height: 30px; 
    background-color: grey;
    color: white;
}
.cerrar{
    margin-left: 100%;
    float: right; 
    width: 60px; 
    background-color: grey;
    color: white;
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
}
?>
<a href="coches.php">
<div class="coches">
    <h2>COCHES</h2>
    <img src="img/coche.png" style="width: 200px; margin-top: -50px;">  
</div>
</a>
<a href="usuarios.php">
<div class="usuarios">
    <h2 margin-top>USUARIOS</h2>
    <img src="img/usuario" style="width: 150px; margin-top:0px;">  
</div>
</a>
<a href="alquileres.php">
    <div class="alquileres">
        <h2 margin-top>ALQUILERES</h2>
        <img src="img/alquileres.png" style="width: 150px; margin-top:0px;">  
    </div>
</a>
</div>
<a href="bienvenida.php" class="bienvenida">VOLVER AL MENU DE BIENVENIDA</a>
</body>
</html>