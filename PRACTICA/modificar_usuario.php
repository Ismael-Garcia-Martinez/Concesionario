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
form{
    background-color: grey;
    width: 20%;
    margin-left: 40%;
    margin-top: 10%;
    }
</style>
</HEAD>

<BODY>

<h1><img src="img/fondo.jpg" style="width: 150px; text-align: left;">CONCESIONARIO<img src="img/fondo.jpg" style="width: 150px;"></h1>
<?php
$servername = "localhost";
$username = "root";
$password = "rootroot";
$bdname = "concesionario";
$dni = $_REQUEST['dni'];

$conn = mysqli_connect($servername, $username, $password, $bdname)
or die ("Conexion Fallida: " . mysqli_connect_error());
$sql = "SELECT * FROM usuarios where dni = '$dni'";
$resultado = mysqli_query($conn, $sql);
if (mysqli_num_rows($resultado) == 1)
{
    $row = mysqli_fetch_assoc($resultado);
?>
    <form action="modificar_usuario2.php" method="post">
        <label for="dni">DNI:</label>
        <input type="text" readonly name="dni" value="<?php echo $row['dni']; ?>" required>
        <br>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required>
        <br>
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" value="<?php echo $row['apellidos']; ?>" required>
        <br>
        <label for="password">Contrasena:</label>
        <input type="text" name="password" value="<?php echo $row['password']; ?>" required>
        <br>
        <label for="saldo">Saldo:</label>
        <input type="text" name="saldo" value="<?php echo $row['saldo']; ?>" required>
        <br><br>
        <input type="submit" value="Modificar">
    </form>

<?php
}
else
{
    echo "No se encontro el usuario";
}
mysqli_close($conn);



?>