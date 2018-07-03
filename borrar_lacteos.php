<?php
include("conexion.php");

//echo"<pre>";
//    print_r($_GET);
//echo"</pre>";

$id=$_GET["id"];

$consulta="delete from lacteos where id=".$id;

$query=$bd->prepare($consulta);
$query->execute();


header("Location:lacteos.php");

?>