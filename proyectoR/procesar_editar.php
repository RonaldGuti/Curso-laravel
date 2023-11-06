<?php
include('db.php');

$ID=$_POST['txtID'];
$MARCA=$_POST['txtMarca'];
$MODELO=$_POST['txtmodelo'];
$COLOR=$_POST['txtcolor'];
$AÑO=$_POST['txtaño'];
$PRECIO=$_POST['txtprecio'];


mysqli_query($conexion,"UPDATE `automovil` SET `Marca` = '$MARCA', `Modelo` = '$MODELO', `color` = '$MOTOR', 
`año` = '$AÑO', `precio` = '$PRECIO',  WHERE `ID` = '$ID'")or die("error de actualizar");
 
mysqli_close($conexion);
header("location:mostrar.php");


?>