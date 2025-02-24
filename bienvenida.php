<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    
    <title>Concesionario</title>
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
h2{
background-color: rgb(92, 85, 85);
text-align: center;
border: 2px white solid; 
margin: 0;
}
h3{ 
text-align: center;
background-color: rgb(92, 85, 85);
text-align: center;
margin: 0;
}

.cliente{
    background-color: rgb(92, 85, 85);
    color: white;
}
.admin{
    margin-top: 10%;
    background-color: rgb(92, 85, 85);
    color: white;
}
</style>
</head>
<body>
    <h1><img src="img/fondo.jpg" style="width: 150px; text-align: left;">CONCESIONARIO<img src="img/fondo.jpg" style="width: 150px;"></h1>
<h2>¡BIENVENIDO AL CONCESIONARIO!</h2>
<h3>SELECCIONE EL TIPO DE USUARIO QUE ERES:</h3>
<div class="usuarios">
    <a href="index-cliente.php" class="cliente"><b><input type="button" value="CLIENTE" class="cliente"></b></a>
    <a href="index-admin.php" class="admin"><b><input type="button" value="ADMINISTRADOR" class="admin"></b></a>
</div>
</body>
</html>