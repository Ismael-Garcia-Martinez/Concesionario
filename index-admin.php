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

</style>
</head>
<body>
<h1><img src="img/fondo.jpg" style="width: 150px; text-align: left;">CONCESIONARIO<img src="img/fondo.jpg" style="width: 150px;"></h1>
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
</body>
</html>