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
.mostrar{
    width: 30%;
    background-color: grey;
    color: white;
    text-align: center;
    margin-left: 35%;
}

</style>
</head>
<body>
<h1><img src="img/fondo.jpg" style="width: 150px; text-align: left;">CONCESIONARIO<img src="img/fondo.jpg" style="width: 150px;"></h1>
<a href="registrarse.php">
<button class="registrarse">
<b>Registrarse</b>
</button>
</a>
<a href="iniciosesion.php">
<button class="iniciosesion">
<b>Iniciar sesion</b>
</button>
</a>
<a href="mostrar_coches.php">
<div class="mostrar"><h2>MOSTRAR COCHES</h2>
<img src="img/coche.png" width="200px">
</div>
</body>
</html>