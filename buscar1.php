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
<form action="buscar.php" method="post">
<h2>Buscar Coche</h2>
<label for="buscar">Buscar por marca:</label>
<input type="text" name="buscarmarca">
<br><br>
<label for="buscar">Buscar por modelo:</label>
<input type="text" name="buscarmodelo">
<br><br>
<label for="buscar">Buscar por color:</label>
<input type="text" name="buscarcolor">
<br><br>
<label for="buscarprecio">Buscar por precio:</label>
<input type="text" name="buscarprecio">
<br><br>
<input type="submit" value="Buscar">
</form>

</body>
</html>