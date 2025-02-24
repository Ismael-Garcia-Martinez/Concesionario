<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
    <title>Alquilar Coches</title>
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
.logeado{
    float: right; 
    height: 30px; 
    background-color: rgb(71, 209, 255);
}
.cerrar{
    float: right; 
    width: 60px; 
    background-color: rgb(71, 209, 255);
}
.listar{
    background-color: gray;
    padding: 10px;
    width: 18%;
    text-align: center;
    display: inline-block;
    color: white;
       }
th{
border: 2px solid white;
   }
td{
border: 2px solid white;
   }
table{
background-color: black;
margin-left: 35%;
margin-top: 10%;
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
    echo "<a href='index-cliente.php'>";
    echo "<button type='submit' class='volver'>Volver</button>";
    echo "</a>";
    echo "<a href='cerrarsesion.php'>";
    echo "<button class='cerrar'>";
    echo "<b>Cerrar Sesion</b>";
    echo "</button>";
    echo "</a>";
}
$conexion = mysqli_connect ("localhost", "root", "rootroot")
or die ("No se puede conectar con el servidor");

mysqli_select_db ($conexion,"concesionario")
or die ("No se puede seleccionar la base de datos");
$instruccion = "select * from coches where alquilado = 0";
$consulta = mysqli_query ($conexion,$instruccion)
or die ("Fallo en la consulta");
$nfilas = mysqli_num_rows ($consulta);
if ($nfilas > 0)
{
print ("<form action='confirmar_alquilar.php'>");
print ("<TABLE>\n");
print ("<TH>ALQUILAR</TH>");
print ("<TH>MODELO</TH>\n");
print ("<TH>MARCA</TH>\n");
print ("<TH>COLOR</TH>\n");
print ("<TH>PRECIO</TH>\n");

print ("</TR>\n");

for ($i=0; $i<$nfilas; $i++)
{
   $resultado = mysqli_fetch_array ($consulta);
   print ("<TR>\n");
   print ("<TD><input type='radio' name='alquilar' value='" . $resultado['id_coche'] . "' required></TD>");
   print ("<TD>" . $resultado['modelo'] . "</TD>\n");
   print ("<TD>" . $resultado['marca'] . "</TD>\n");
   print ("<TD>" . $resultado['color'] . "</TD>\n");
   print ("<TD>" . $resultado['precio'] . "</TD>\n");

   
   print ("</TR>\n");
}

print ("</TABLE>\n");
print ("<button type='submit' name='confirmar_alquilar'>Alquilar</button>");
}
else
{
print ("No hay noticias disponibles");
}

mysqli_close ($conexion);

?>
</body>
</html>