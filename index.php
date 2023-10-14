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

        
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Vehiculos</h2>
                        <a href="insertar.php" class="btn btn-success pull-right ">Agregar nuevo vehiculo</a>
                    </div>
                    <?php
                        spl_autoload_register
                        ( function ($nombre_clase) 
                            {
                            include $nombre_clase . '.php';
                            }
                        );
                        
                        $campos = array('matricula', 'serial_motor', 'serial_carroceria', 'marca','modelo','anio','color','precio');
                        $cabecera = array('Matricula', 'Serial motor', 'Serial carroceria', 'Marca','Modelo','Año','Color','Precio');
                        $conexion = new dB();
                        if($resultado=$conexion->buscarTodo("autos"))
                            {
                            echo "<table class='table table-bordered table-striped'>";
                            echo "<thead>";
                            echo "<tr>";
                            foreach ($cabecera as $key => $value) 
                            {
                                echo "<th>".$value."</th>"; 
                            }
                            echo "<th>Accion</th>"; 
                            echo "</tr>";
                            echo "</thead>";
                            
                            echo "<tbody>";
                            foreach ($resultado as $fila)
                            {
                                $cadena = "<tr>";
                                foreach ($campos as $key => $value) 
                                {
                                    $cadena .= "<td>".$fila[$value]."</td>";
                                }
                                $cadena .= "<td>";
                                $cadena .= "<a href='mostrar.php?matricula=". $fila['matricula'] ."' title='Ver' ><span class='glyphicon glyphicon-eye-open'></span></a>";
                                $cadena .= "<a href='modificar.php?matricula=". $fila['matricula'] ."' title='Actualizar' ><span class='glyphicon glyphicon-pencil'></span></a>";
                                $cadena .= "<a href='eliminar.php?matricula=". $fila['matricula'] ."' title='Borrar' ><span class='glyphicon glyphicon-trash'></span></a>";
                                $cadena .= "</td>";
                                echo $cadena;
                                echo "</tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
                        }
                        else
                            echo  "<p class='lead'><em>No existen registros para mostrar</em></p>";
                    ?>
                </div>
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
                    <label for="" id="error1">Error: El vehiculo NO existe</label>  
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
                    <label for="" id="error1">Registro eliminado exitosamente</label>  
                </div>
        <?php 
            }
        }
        if(isset($_GET["error"]))
        {
            if($_GET["error"] == 3)
            {
        ?>
                <div class="row bg-danger text-center" id="erro">
                    <label for="" id="error1">Error de conexion</label>  
                </div>
        <?php 
            }
        }
        ?>
        
    </body>
</html> 