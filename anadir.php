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
.anadir{
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
<a href="index-admin.php"><input type="submit" value="Volver"></a>
<div class="anadir">
<h2>Insertar Coche</h2>
<form action="add_coche.php" method="post">
    <label for="modelo">Modelo:</label>
    <br>
    <input type="text" name="modelo" required>
    <br>
    <label for="marca">Marca:</label>
    <br>
    <input type="text" name="marca" required>
    <br>
    <label for="color">Color:</label>
    <br>
    <input type="text" name="color" required>
    <br>
    <label for="precio">Precio: </label>
    <br>
    <input type="text" name="precio" required>
    <br>
    <label for="alquilado">Alquilado</label>
    <br>
    <select name="alquilado">
        <option value="1">Si</option>
        <option value="0">No</option>
    </select>
    <br>
    <label for="foto">Foto</label>
    <br>
    <input type="text" name="foto">
    <br><br>
    <input type="submit" value="Anadir">
</form>
</div>
</body>
</html>
