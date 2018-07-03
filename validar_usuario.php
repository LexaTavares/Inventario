<?php

session_start();
include("conexion.php");

 $user=$_POST['usuario'];
 $pass=$_POST['contra'];

$consulta="SELECT * FROM usuarios" ;

        $query=$bd->prepare($consulta);
        $query->execute();
        
        $arreglo=$query->fetchAll();

//echo"<pre>";
//    print_r($arreglo);
//echo"</pre>";

if($user=="administrador" && $pass=="administrador"){
    echo ("<script>location.href='bebidas.php'</script>");
}else if($user=="usuario" && $pass=="usuario"){
    echo ("<script>location.href='bebidas.php'</script>");
    
}else{
    echo "<script language='JavaScript'>alert('Usuario y/o contraseña Incorrecta');</script>"; 
    echo ("<script>location.href='index.php'</script>");
}


?>