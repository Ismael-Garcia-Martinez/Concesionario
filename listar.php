<HTML LANG="es">
<HEAD>
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
</HEAD>

<BODY>

<h1><img src="img/fondo.jpg" style="width: 150px; text-align: left;">CONCESIONARIO<img src="img/fondo.jpg" style="width: 150px;"></h1>
<a href="index-admin.php"><input type="submit" value="Volver"></a>
<?PHP

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
         print ("<TH>ALQUILADO</TH>\n");
         print ("<TH>foto</TH>\n");
        
         print ("</TR>\n");

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
      else
         print ("No hay noticias disponibles");


mysqli_close ($conexion);

?>

</BODY>
</HTML>