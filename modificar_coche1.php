<!DOCTYPE html>
<html>
<head>
    <title></title>
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
.modificar{
background-color: rgb(131, 128, 128);
width: 20%;
margin-left: 40%;
text-align: center;
border-radius: 10px;
        }
</style>
</head>
<body>
<h1>
<img src="img/fondo.jpg" style="width: 150px; text-align: left;">CONCESIONARIO<img src="img/fondo.jpg" style="width: 150px;">
</h1>
<a href="index-admin.php"><input type="submit" value="Volver"></a>
<div class="modificar">
    <h2>Seleccionar Coche a Modificar</h2>
    <form action="modificar_coche.php" method="post">
        <label for="marca">Seleccionar por marca:</label>
        <input type="text" name="marca">
        <br><br>
        <label for="modelo">Seleccionar por modelo:</label>
        <input type="text" name="modelo">
        <br><br>
        <label for="color">Seleccionar por color:</label>
        <input type="text" name="color">
        <br><br>
        <label for="precio">Seleccionar por precio:</label>
        <input type="text" name="precio">
        <br><br>
        <input type="submit" value="Buscar">
    </form>
</div>
</body>
</html>