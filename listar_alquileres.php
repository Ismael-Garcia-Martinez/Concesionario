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
    background-color: rgb(99, 98, 98);
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
    background-color: rgb(143, 143, 143);
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
</style>
</head>
<body>
<h1><img src="img/fondo.jpg" style="width: 150px; text-align: left;">CONCESIONARIO<img src="img/fondo.jpg" style="width: 150px;"></h1>
<a href="index-admin.php"><input type="submit" value="Volver"></a>
<?php
$conexion = mysqli_connect ("localhost", "root", "rootroot")
or die ("No se puede conectar con el servidor");

mysqli_select_db ($conexion,"concesionario")
or die ("No se puede seleccionar la base de datos");
$instruccion = "select * from alquileres";
$consulta = mysqli_query ($conexion,$instruccion)
or die ("Fallo en la consulta");
$nfilas = mysqli_num_rows ($consulta);
if ($nfilas > 0)
{
print ("<div class='tabla'>");
print ("<TABLE>\n");
print ("<TH>ID_ALQUILER</TH>\n");
print ("<TH>DNI_USUARIO</TH>\n");
print ("<TH>ID_COCHE</TH>\n");
print ("<TH>PRESTADO</TH>\n");
print ("<TH>DEVUELTO</TH>\n");

print ("</TR>\n");
print ("</div>");
for ($i=0; $i<$nfilas; $i++)
{
   $resultado = mysqli_fetch_array ($consulta);
   print ("<TR>\n");
   print ("<TD>" . $resultado['id_alquiler'] . "</TD>\n");
   print ("<TD>" . $resultado['dni_usuario'] . "</TD>\n");
   print ("<TD>" . $resultado['id_coche'] . "</TD>\n");
   print ("<TD>" . $resultado['prestado'] . "</TD>\n");
   print ("<TD>" . $resultado['devuelto'] . "</TD>\n");

   
   print ("</TR>\n");
}

print ("</TABLE>\n");
}
else
print ("No hay noticias disponibles");


mysqli_close ($conexion);

?>

</BODY>
</HTML>