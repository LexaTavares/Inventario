<?php

include("conexion.php");

//echo "<pre>";
//print_r($_POST);
//echo"</pre>";

$nombre=$_POST['nombre'];
$actualPrecio=$_POST['actualPrecio'];
$anteriorPrecio=$_POST['anteriorPrecio'];
$totalInvertido=$_POST['totalInvertido'];
$peso=$_POST['peso'];

$consulta="insert into verduras (nombre, precio_actual, precio_anterior,total_invertido,kgLts) values ('".$nombre."', '".$actualPrecio."', '".$anteriorPrecio."', '".$totalInvertido."','".$peso."')";

//preparo consulta

$query=$bd->prepare($consulta);

//ejecuto consulta

$query->execute();

if($query){
    echo "<script language='JavaScript'>alert('Grabacion Correcta');</script>"; 
    echo ("<script>location.href='verduras.php'</script>");
}else{
    echo "<script language='JavaScript'>alert('Grabacion Incorrecta');</script>"; 
    echo ("<script>location.href='agregar_verduras.php'</script>");
};


?>