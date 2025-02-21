<?php
session_start();
?>
<style>
body{
background-image: url(img/fondo2.jpg);
background-repeat: no-repeat;
background-size: cover;
color: white;
    }
h1{
background-color: black;
text-align: center;
border: 2px white solid;
margin: 0;
  }
th{
border: 2px solid white;
   }
td{
border: 2px solid white;
   }
table{
background-color: black;
margin-left: 38%;
margin-top: 10%;
      }
</style>
<h1><img src="img/fondo.jpg" style="width: 150px; text-align: left;">CONCESIONARIO<img src="img/fondo.jpg" style="width: 150px;"></h1>
<?php
$servername = "localhost";
$user = "root";
$password = "rootroot";
$dbname = "concesionario";

$conn = mysqli_connect($servername, $user, $password, $dbname);
if (!$conn)
{
    die ("Conexion fallida: ". mysqli_connect_error());
}
$buscarmarca = $_REQUEST['buscarmarca'];
$buscarmodelo = $_REQUEST['buscarmodelo'];
$buscarcolor = $_REQUEST['buscarcolor'];
$buscarprecio = $_REQUEST['buscarprecio'];
$buscaralq = $_REQUEST['buscaralq'];
$sql = "SELECT * FROM coches where marca = '$buscarmarca'";
$sql1 = "SELECT * FROM coches where modelo = '$buscarmodelo'";
$sql2 = "SELECT * FROM coches where color = '$buscarcolor'";
$sql3 = "SELECT * FROM coches where precio = '$buscarprecio'";
$sqlsi = "SELECT * FROM coches where alquilado = '1'";
$sqlno = "SELECT * FROM coches where alquilado = '0'";

$consulta = mysqli_query ($conn,$sql)
   or die ("Fallo en la consulta");

$nfilas = mysqli_num_rows ($consulta);

if ($nfilas > 0)
{
   print ("<TABLE>\n");
   print ("<TH>MODELO</TH>\n");
   print ("<TH>MARCA</TH>\n");
   print ("<TH>COLOR</TH>\n");
   print ("<TH>PRECIO</TH>\n");
   print ("<TH>ALQUILADO</TH>\n");
   print ("<TH>foto</TH>\n");


   for ($i=0; $i<$nfilas; $i++)
   {
      $resultado = mysqli_fetch_array ($consulta);
      print ("<TR>\n");
      print ("<TD>" . $resultado['modelo'] . "</TD>\n");
      print ("<TD>" . $resultado['marca'] . "</TD>\n");
      print ("<TD>" . $resultado['color'] . "</TD>\n");
      print ("<TD>" . $resultado['precio'] . "</TD>\n");
      print ("<TD>" . $resultado['alquilado'] . "</TD>\n");
      print ("<TD>" . $resultado['foto'] . "</TD>\n");

      
      print ("</TR>\n");
   }

   print ("</TABLE>\n");
}
$consulta1 = mysqli_query ($conn,$sql1)
or die ("Fallo en la consulta");
$nfilas1 = mysqli_num_rows ($consulta1);
if ($nfilas1 > 0)
{
   print ("<TABLE>\n");
   print ("<TH>MODELO</TH>\n");
   print ("<TH>MARCA</TH>\n");
   print ("<TH>COLOR</TH>\n");
   print ("<TH>PRECIO</TH>\n");
   print ("<TH>ALQUILADO</TH>\n");
   print ("<TH>foto</TH>\n");


   for ($i=0; $i<$nfilas1; $i++)
   {
      $resultado = mysqli_fetch_array ($consulta1);
      print ("<TR>\n");
      print ("<TD>" . $resultado['modelo'] . "</TD>\n");
      print ("<TD>" . $resultado['marca'] . "</TD>\n");
      print ("<TD>" . $resultado['color'] . "</TD>\n");
      print ("<TD>" . $resultado['precio'] . "</TD>\n");
      print ("<TD>" . $resultado['alquilado'] . "</TD>\n");
      print ("<TD>" . $resultado['foto'] . "</TD>\n");

      
      print ("</TR>\n");
   }

   print ("</TABLE>\n");
}


$consulta2 = mysqli_query ($conn,$sql2)
or die ("Fallo en la consulta");
$nfilas2 = mysqli_num_rows ($consulta2);
if ($nfilas2 > 0)
{
   print ("<TABLE>\n");
   print ("<TH>MODELO</TH>\n");
   print ("<TH>MARCA</TH>\n");
   print ("<TH>COLOR</TH>\n");
   print ("<TH>PRECIO</TH>\n");
   print ("<TH>ALQUILADO</TH>\n");
   print ("<TH>FOTO</TH>\n");


   for ($i=0; $i<$nfilas2; $i++)
   {
      $resultado = mysqli_fetch_array ($consulta2);
      print ("<TR>\n");
      print ("<TD>" . $resultado['modelo'] . "</TD>\n");
      print ("<TD>" . $resultado['marca'] . "</TD>\n");
      print ("<TD>" . $resultado['color'] . "</TD>\n");
      print ("<TD>" . $resultado['precio'] . "</TD>\n");
      print ("<TD>" . $resultado['alquilado'] . "</TD>\n");
      print ("<TD>" . $resultado['foto'] . "</TD>\n");

      
      print ("</TR>\n");
   }

   print ("</TABLE>\n");
}

$consulta3 = mysqli_query ($conn,$sql3)
or die ("Fallo en la consulta");
$nfilas3 = mysqli_num_rows ($consulta3);
if ($nfilas3 > 0)
{
   print ("<TABLE>\n");
   print ("<TH>MODELO</TH>\n");
   print ("<TH>MARCA</TH>\n");
   print ("<TH>COLOR</TH>\n");
   print ("<TH>PRECIO</TH>\n");
   print ("<TH>ALQUILADO</TH>\n");
   print ("<TH>FOTO</TH>\n");


   for ($i=0; $i<$nfilas3; $i++)
   {
      $resultado = mysqli_fetch_array ($consulta3);
      print ("<TR>\n");
      print ("<TD>" . $resultado['modelo'] . "</TD>\n");
      print ("<TD>" . $resultado['marca'] . "</TD>\n");
      print ("<TD>" . $resultado['color'] . "</TD>\n");
      print ("<TD>" . $resultado['precio'] . "</TD>\n");
      print ("<TD>" . $resultado['alquilado'] . "</TD>\n");
      print ("<TD>" . $resultado['foto'] . "</TD>\n");

      
      print ("</TR>\n");
   }

   print ("</TABLE>\n");
}

mysqli_close ($conn);
?>