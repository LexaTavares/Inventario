<?php

include("conexion.php");

$id=$_GET["id"];

//echo"<pre>";
//    print_r($id);
//echo"</pre>";

$cereales="select * from cereales_leguminosas where id=".$id;

$query=$bd->prepare($cereales);
$query->execute();

$consulta=$query->fetchAll();

//echo"<pre>";
//    print_r($consulta);
//echo"</pre>";

?>

<html>
    <head>
        <title>Restaurant</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="main.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>

    <body>
        <section class="container">
            <section class="row">
                <section class="col-xs-12 col-sm-6 col-md-12">
                    <form class="col-md-4 col-md-offset-4" action="edicion_realizada_cereales.php" method="post">

                        <div class="form-group">
                            <label>Ingresa Nombre</label>
                            <input class="form-control" type="text" name="nombre" value="<?php echo $consulta[0][1]; ?>">
                        </div>
                        <div class="form-group">
                            <label>Precio Actual</label>
                            <input class="form-control" type="text" name="actualPrecio" value="<?php echo $consulta[0][2]; ?>">
                        </div>
                        <div class="form-group">
                            <label>Precio Anterior</label>
                            <input class="form-control" type="text" name="anteriorPrecio" value="<?php echo $consulta[0][3]; ?>">
                        </div>
                        <div class="form-group">
                            <label>Total Invertido</label>
                            <input class="form-control" type="text" name="totalInvertido" value="<?php echo $consulta[0][4]; ?>">
                        </div>
                        <div class="form-group">
                            <label>Kilos/litros</label>
                            <input class="form-control" type="text" name="peso" value="<?php echo $consulta[0][5]; ?>">
                        </div>

                        <input class="form-control" type="hidden" name="id" value="<?php echo $consulta[0]["id"]; ?>">

                        <button class="btn btn-info">Editar</button>

                    </form>
                </section>
            </section>
        </section>
    </body>

</html>