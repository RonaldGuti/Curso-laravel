<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    include ('db.php');

$marca=$_POST['txtMarca'];
$modelo=$_POST['txtmodelo'];
$color=$_POST['txtcolor'];
$año=$_POST['txtaño'];
$precio=$_POST['txtprecio'];
    

$consulta="INSERT INTO `automovil3` ( `Marca`, `Modelo`, `Color`, `año`, `Precio`) 
VALUES ( '$marca', '$modelo', '$color', '$año', '$precio');";

$resultado=mysqli_query($conexion,$consulta) or die ("error de registro");

echo "registro exitoso";

mysqli_close($conexion);

?>