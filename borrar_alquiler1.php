
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
.eliminar{
background-color: grey;
width: 20%;
margin-left: 40%;
border-radius: 10px;
         }
</style>
</head>
<body>
<h1><img src="img/fondo.jpg" style="width: 150px; text-align: left;">CONCESIONARIO<img src="img/fondo.jpg" style="width: 150px;"></h1>
<a href="index-admin.php"><input type="submit" value="Volver"></a>
<div class="eliminar">
<h2>Eliminar Alquiler</h2>
<form action="borrar_alquiler.php" method="post">
    <label for="id">ID del alquiler:</label>
    <input type="text" name="id">
    <br><br>
    <input type="submit" value="Buscar">
</form>
</div>
</body>
</html>