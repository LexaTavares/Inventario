<?php

include("conexion.php");

$consulta="select * from pescados_mariscos";

$query=$bd->prepare($consulta);

$query->execute();

$arreglo=$query->fetchAll();

//echo"<pre>";
//    print_r($arreglo);
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
                    <div class="jumbotron text-center">
                        <h3>Administracion de Insumos</h3>
                    </div>
                </section>

                <section class="col-xs-12 col-sm-6 col-md-12 margen-abajo">
                    <div class="text-center">
                        <a href="bebidas.php"><button class="btn btn-primary">Bebidas</button></a> 
                        <a href="carnes.php"><button class="btn btn-primary">Carnes</button></a> 
                        <a href="carnes_frias.php"><button class="btn btn-primary">Carnes Frías</button></a>
                        <a href="cereales_leguminosas.php"><button class="btn btn-primary">Cereales/Leguminosas</button></a>
                        <a href="especias.php"><button class="btn btn-primary">Especias</button></a>
                        <a href="frutas.php"><button class="btn btn-primary">Frutas</button></a>
                        <a href="lacteos.php"><button class="btn btn-primary">Lácteos</button></a> 
                        <a href="pescados_mariscos.php"><button class="btn btn-primary">Pescados/Mariscos</button></a>
                        <a href="verduras.php"><button class="btn btn-primary">Verduras</button></a>
                    </div>
                </section>
                
                <section class="col-xs-12 col-sm-6 col-md-6 margen-abajo">
                    <div class="text-left">
                        <a href="index.php"><button class="btn btn-warning">Cerrar Sesión</button></a>
                    </div>

                </section>

                <section class="col-xs-12 col-sm-6 col-md-6 margen-abajo">
                    <div class="text-right">
                        <a href="agregarPescados.php"><button class="btn btn-success">Agregar</button></a>
                    </div>

                </section>


                <section class="col-xs-12 col-sm-6 col-md-12">
                    <div class="table-responsive tabla">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center success">Nombre</th>
                                    <th class="text-center success">Precio Actual</th>
                                    <th class="text-center success">Precio Anterior</th>
                                    <th class="text-center success">Total Invertido</th>
                                    <th class="text-center success">Kg/Lts</th>
                                    <th class="text-center success">Editar</th>
                                    <th class="text-center success">Borrar</th>
                                </tr>
                            </thead>
                            <?php
                            for($x=0;$x<count($arreglo);$x++){
                            ?>

                            <tbody>
                                <tr>
                                    <td class="text-center"><?php echo $arreglo[$x][1]?></td>
                                    <td class="text-center"><?php echo $arreglo[$x][2]?></td>
                                    <td class="text-center"><?php echo $arreglo[$x][3]?></td>
                                    <td class="text-center"><?php echo $arreglo[$x][4]?></td>
                                    <td class="text-center"><?php echo $arreglo[$x][5]?></td>
                                    <td class="text-center"><button class="btn btn-warning editar" iduser="<?php echo $arreglo[$x]["id"];?>">Editar</button></td>
                                    <td class="text-center"><button class="btn btn-danger borrar" iduser="<?php echo $arreglo[$x]["id"];?>">Borrar</button></td>
                                </tr>
                                <?php    
                            }?>
                            </tbody>
                        </table>
                    </div>
                </section>

            </section>
        </section>

        <script>

            $(".editar").click(function(){
                var id=$(this).attr("iduser");
                window.location="editar_pescados.php?id="+id;
            });

            $(".borrar").click(function(){
                if(confirm("¿Estas segur@ de elimiar éste dato?"))
                {
                    var id=$(this).attr("iduser");
                    window.location="borrar_pescados.php?id="+id;
                }

            });

        </script>


    </body>
</html>