<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "rootroot";
$bdname = "concesionario";
$marca = $_REQUEST['marca'];
$modelo = $_REQUEST['modelo'];
$color = $_REQUEST['color'];
$precio = $_REQUEST['precio'];

$conn = mysqli_connect($servername, $username, $password, $bdname)
or die ("Conexion Fallida: " . mysqli_error());
$sql = "SELECT * FROM coches where marca = '$marca' or modelo = '$modelo' or color = '$color' or precio = '$precio'";
$resultado = mysqli_query($conn, $sql);

if (mysqli_num_rows($resultado) >= 1)
{
    $row = mysqli_fetch_assoc($resultado);
    if ($marca != '')
    {
    ?>
    <form action="modificar_coche2.php" method="post">
        <input type="text" readonly name="marca" value="<?php echo $row['marca']; ?>">
        <br><br>
        <label for="modelo">Modelo:</label>
        <input type="text" name="modelo" value="<?php echo $row['modelo']; ?>" required>
        <br>
        <label for="color">Color:</label>
        <input type="text" name="color" value="<?php echo $row['color']; ?>" required><br>

        <label for="precio">Precio:</label>
        <input type="text" name="precio" value="<?php echo $row['precio']; ?>" required>
    <br>
        <label for="alquilado">Alquilado:</label>
        <select name="alquilado">
            <option value="si" <?php if ($row['alquilado'] == 'si') echo 'selected'; ?> >Si</option>
            <option value="no" <?php if ($row['alquilado'] == 'no') echo 'selected'; ?> >No</option>   
        </select><br>
        
        <label for="imagen">Foto:</label>
        <input type="text" name="foto"><br>
        
        <input type="submit" value="Actualizar">
    </form>
    

</body>
</html>

<?php
}
} 
else 
{
    echo "No se encontró el coche";
}

mysqli_close($conn);
?>