<?php
spl_autoload_register
( 
    function ($nombre_clase) 
    {
        include $nombre_clase . '.php';
    }
);

if(isset($_GET["matricula"]) && !empty(trim($_GET["matricula"])))
{
    $campos = array('matricula', 'serial_motor', 'serial_carroceria', 'marca','modelo','anio','color','precio');
    $cabecera = array('Matricula', 'Serial motor', 'Serial carroceria', 'Marca','Modelo','Año','Color','Precio');
    $conexion = new dB();
    $condicion = "matricula = '".$_GET['matricula']."'";
    if($resultado=$conexion->buscar("autos",$campos,$condicion))
    {
        $res = $resultado[0];
    } 
    else
    {
        echo "Error al buscar registro";
    }
} 

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/estilos.css">
        <title>Tarea semana 6</title>
    </head>
    <body>
        <script src="js/jquery-3.6.0.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/funciones.js"></script>
        <div class="row">
            <div class="col-sm-12  bg-dark text-white text-center">
                <h1>Tarea semana 6</h1> 
            </div>
        </div>
        <div class="row">
            <div class="col-sm-0 col-md-1 col-xl-1  bg-dark text-white"></div>
            <div class="col-sm-12 col-md-10 col-xl-10  bg-dark text-white text-center">
                &nbsp;
                <h2>Experimentar conexión a base de datos MySQL utilizando PHP</h2> 
            </div>
            <div class="col-sm-0 col-md-1 col-xl-1  bg-dark text-white"></div>
        </div>
        <div class="row align-items-center">
            &nbsp; 
        </div>
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5"></div>

                    <div class="col-md-3">
                        <div class="page-header">
                            <h1>Ver vehiculo</h1>
                        </div>
                        <?php 
                            for($i=0;$i < count($cabecera);$i++) 
                            {    
                        ?>
                                <div class="form-group">
                                    <label><?php echo $cabecera[$i]?> </label>
                                    <p class="form-control-static"><?php echo $res[$campos[$i]]; ?></p>
                                </div>
                        <?php 
                            }
                        ?>
                        <p><a href="index.php" class="btn btn-primary">Volver</a></p>
                    </div>
                    <div class="col-md-4"></div>
                </div>        
            </div>
        </div>
    </body>
</html>