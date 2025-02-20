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
<h2>COCHES DISPONIBLES</h2>
<table class="tabla">
<tr>
    <td>
        <img src="img/seat-arona.avif" width="300px">
        <br>
        <b>SEAT ARONA</b>
        <br>
        <button type="submit">Alquilar</button>
    </td>
    <td>
        <img src="img/opel-corsa.jpg" width="300px">
        <br>
        <b>OPEL CORSA</b>
        <br>
        <button type="submit">Alquilar</button>
    </td>   
    <td>
        <img src="img/bmw-x2.jpg" width="300px">
        <br>
        <b>BMW X2</b>
        <br>
        <button type="submit">Alquilar</button>
    </td>   
</tr>
<tr>
    <td>
        <img src="img/peugeot-308.jpg" width="300px">
        <br>
        <b>PEUGEOT 308</b>
        <br>
        <button type="submit">Alquilar</button>
    </td>
    <td>
        <img src="img/opel-corsa.jpg" width="300px">
        <br>
        <b>OPEL CORSA</b>
        <br>
        <button type="submit">Alquilar</button>
    </td>   
    <td>
        <img src="img/bmw-x2.jpg" width="300px">
        <br>
        <b>BMW X2</b>
        <br>
        <button type="submit">Alquilar</button>
    </td>   
</tr>

</table>
</body>
</html>