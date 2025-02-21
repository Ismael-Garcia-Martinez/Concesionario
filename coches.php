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
.coches{
    display: inline-block;
    background-color: rgb(143, 143, 143);
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
.inicio{
    background-color: grey;
    color: white;
    text-align: center;
        }
.añadir{
    background-color: gray;
    padding: 10px;
    width: 18%;
    text-align: center;
    display: inline-block;
    color: white;
        }
.listar{
    background-color: gray;
    padding: 10px;
    width: 18%;
    text-align: center;
    display: inline-block;
    color: white;
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
<a href="index-admin.php">
<div class="inicio">
<h3>Inicio</h3>
</div>
</a>
<a href="anadir.php">
<div class="añadir">
<h2>ANADIR</h2>
</div>
</a>
<a href="listar.php">
<div class="listar">  
<h2>LISTAR</h2>
</div>
</a>
<a href="buscar1.php">
<div class="listar">
<h2>BUSCAR</h2>
</div>
</a>
<a href="modificar_coche1.php">
<div class="listar">
<h2>MODIFICAR</h2>
</div>
</a>
<a href="eliminar1.php">
<div class="listar">
<h2>BORRAR</h2>
</div>
</a>
</body>
</html>