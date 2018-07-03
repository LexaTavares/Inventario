<?php
include("conexion.php");

//echo"<pre>";
//    print_r($_GET);
//echo"</pre>";

$nombre=$_POST['nombre'];
$actualPrecio=$_POST['actualPrecio'];
$anteriorPrecio=$_POST['anteriorPrecio'];
$totalInvertido=$_POST['totalInvertido'];
$peso=$_POST['peso'];
$id=$_POST['id'];

$consulta="update verduras set nombre='".$nombre."', precio_actual='".$actualPrecio."', precio_anterior='".$anteriorPrecio."',total_invertido='".$totalInvertido."',kgLts='".$peso."' where id=".$id;


$query=$bd->prepare($consulta);
$query->execute();

header("Location:verduras.php");

?>