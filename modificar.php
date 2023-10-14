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
        echo "Error al buscar registro!!!";
        exit;
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
            <div class="col-sm-0 col-md-1 text-center">
                &nbsp; 
            </div>
            <div class="col-sm-12 col-md-10 bg-tranparent text-black text-justify">

                <form class="was-validated" method="get" action="update.php">
                    <div class="form-group">
                        <label for="matricula">Matrícula</label>
                        <input type="text"  class="form-control " id="matricula" name="matricula" 
                            aria-describedby="emailHelp" placeholder="Ingrese matrícula" 
                            readonly value="<?php echo $res['matricula'];?>">
                    </div>
                    <div class="form-group">
                        <label for="serieMotor">Serie de motor</label>
                        <input type="text" class="form-control" id="serieMotor" name="serieMotor" 
                            aria-describedby="serieMotorHelp" placeholder="Ingrese numero de serie de motor" 
                            value="<?php echo $res['serial_motor'];?>"> 
                    </div>
                    <div class="form-group">
                        <label for="serieCarroceria">Serie de carroceria</label>
                        <input type="number" class="form-control" id="serieCarroceria" name="serieCarroceria" 
                            aria-describedby="serieCarroceriaHelp" placeholder="Ingrese numero de serie de carroceria" 
                            value="<?php echo $res['serial_carroceria'];?>">
                    </div>
                    <div class="form-group">
                        <label for="marca">Marca</label>
                        <input type="text" class="form-control" id="marca" name="marca" 
                            aria-describedby="marcaHelp" placeholder="Ingrese marca"
                            value="<?php echo $res['marca'];?>">
                    </div>
                    <div class="form-group">
                        <label for="modelo">Modelo</label>
                        <input type="text" class="form-control" id="modelo" name="modelo" 
                            aria-describedby="modeloHelp" placeholder="Ingrese modelo"
                            value="<?php echo $res['modelo'];?>">
                    </div>
                    <div class="form-group">
                        <label for="anio">Año</label>
                        <input type="text" class="form-control" id="anio" name="anio" 
                            aria-describedby="modeloHanioHelp" placeholder="Ingrese año"
                            minlength="4" required
                            onkeyup="return limitar(event,this.value,4)" 
                            onkeydown="return limitar(event,this.value,4)"
                            value="<?php echo $res['anio'];?>">
                        <div class="invalid-feedback">Necesita como minimo 4 digitos</div>
                    </div>
                    <div class="form-group">
                        <label for="color">Color</label>
                        <input type="text" class="form-control" id="color" name="color" 
                            aria-describedby="colorHelp" placeholder="Ingrese color"
                            value="<?php echo $res['color'];?>">
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="text" class="form-control" id="precio" name="precio" 
                            aria-describedby="precioHelp" placeholder="Ingrese precio"
                            value="<?php echo $res['precio'];?>">
                    </div>
                    <button type="submit" class="btn btn-primary" onclick="activar()">Guardar</button>
                    
                    <a href="index.php" class="btn btn-primary">Volver</a>
                </form>
            </div>
            <div class="col-sm-0 col-md-1">
                &nbsp; 
            </div>
        </div>
        <div class="row align-items-center">
            &nbsp; 
        </div>
        
        <?php 
        if(isset($_GET["error"]))
        {
            if($_GET["error"] == 1)
            {
        ?>
                <div class="row bg-danger text-center" id="erro">
                    <label for="" id="error1">Error de modificacion!!! </label>  
                </div>
        <?php 
            }
        }
        ?>
        <?php 
        if(isset($_GET["error"]))
        {
            if($_GET["error"] == 2)
            {
        ?>
                <div class="row bg-success text-center" id="erro">
                    <label for="" id="error1">Registro modificado exitosamente</label>  
                </div>
        <?php 
            }
        }
        
        ?>
    </body>
</html>