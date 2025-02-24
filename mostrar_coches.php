<?php
session_start();
?>
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

.logeado{
    float: right; 
    height: 30px; 
    background-color: rgb(71, 209, 255);
}
.cerrar{
    margin-left: 100%;
    float: right; 
    width: 60px; 
    background-color: rgb(71, 209, 255);
}
th{
border: 2px solid white;
height: 30px;
width: 50px;
   }
td{
border: 2px solid white;
height: 30px;
width: 50px;
   }
table{
background-color: black;
margin-left: 43%;
text-align: center;
} 
.volver{
background-color: black;
color: white;
margin-left: 49%;
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
    echo "<a href='index-cliente.php'><input type='button' value='Volver' class='volver'></a>";
    echo "<h2>COCHES DISPONIBLES</h2>";

}
else
{
    echo "<a href='registrarse.php'>";
    echo "<button class='registrarse'>";
    echo "<b>Registrarse</b>";
    echo "</button>";
    echo "</a>";
    echo "<a href='iniciosesion.php'>";
    echo "<button class='iniciosesion'>";
    echo "<b>Iniciar sesion</b>";
    echo "</button>";
    echo "</a>";
    echo "<a href='index-cliente.php'><input type='button' value='Volver' class='volver'></a>";
    echo "<h2>COCHES DISPONIBLES</h2>";
}
$conexion = mysqli_connect ("localhost", "root", "rootroot")
or die ("No se puede conectar con el servidor");

mysqli_select_db ($conexion,"concesionario")
or die ("No se puede seleccionar la base de datos");
$instruccion = "select * from coches";
$consulta = mysqli_query ($conexion,$instruccion)
or die ("Fallo en la consulta");
$nfilas = mysqli_num_rows ($consulta);
if ($nfilas > 0)
{
print ("<TABLE>\n");
print ("<TH>MODELO</TH>\n");
print ("<TH>MARCA</TH>\n");
print ("<TH>COLOR</TH>\n");
print ("<TH>PRECIO</TH>\n");

print ("</TR>\n");

for ($i=0; $i<$nfilas; $i++)
{
   $resultado = mysqli_fetch_array ($consulta);
   print ("<TR>\n");
   print ("<TD>" . $resultado['modelo'] . "</TD>\n");
   print ("<TD>" . $resultado['marca'] . "</TD>\n");
   print ("<TD>" . $resultado['color'] . "</TD>\n");
   print ("<TD>" . $resultado['precio'] . "</TD>\n");

   
   print ("</TR>\n");
}

print ("</TABLE>\n");
}
else
print ("No hay noticias disponibles");


mysqli_close ($conexion);
?>
</body>
</html>