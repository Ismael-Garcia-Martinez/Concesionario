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

<?PHP

      $conexion = mysqli_connect ("localhost", "root", "rootroot")
         or die ("No se puede conectar con el servidor");

      mysqli_select_db ($conexion,"concesionario")
         or die ("No se puede seleccionar la base de datos");
      $instruccion = "select * from usuarios";
      $consulta = mysqli_query ($conexion,$instruccion)
         or die ("Fallo en la consulta");
      $nfilas = mysqli_num_rows ($consulta);
      if ($nfilas > 0)
      {
         print ("<TABLE>\n");
         print ("<TH>NOMBRE</TH>\n");
         print ("<TH>APELLIDOS</TH>\n");
         print ("<TH>CONTRASEÑA</TH>\n");
         print ("<TH>DNI</TH>\n");
         print ("<TH>SALDO</TH>\n");
        
         print ("</TR>\n");

         for ($i=0; $i<$nfilas; $i++)
         {
            $resultado = mysqli_fetch_array ($consulta);
            print ("<TR>\n");
            print ("<TD>" . $resultado['nombre'] . "</TD>\n");
            print ("<TD>" . $resultado['apellidos'] . "</TD>\n");
            print ("<TD>" . $resultado['password'] . "</TD>\n");
            print ("<TD>" . $resultado['dni'] . "</TD>\n");
            print ("<TD>" . $resultado['saldo'] . "</TD>\n");
            
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