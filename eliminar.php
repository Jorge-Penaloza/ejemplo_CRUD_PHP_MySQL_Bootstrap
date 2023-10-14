<?php 
spl_autoload_register( function ($nombre_clase) 
{
    include $nombre_clase . '.php';
});

if(isset($_GET["matricula"]) && !empty(trim($_GET["matricula"])))
{
    $conexion = new dB();
    $condicion = "matricula = '".$_GET['matricula']."'";
    $campos = array('matricula', 'serial_motor', 'serial_carroceria', 
                'marca','modelo','anio','color','precio');
    echo $condicion;                
    if($conexion->buscar("autos",null,$condicion))
    {
        if($conexion->borrar("autos",$condicion))
            header("Location: index.php?error=2");
        else
            header("Location: index.php?error=1");
    } 
    else
    {
        header("Location: index.php?error=3");
    }
}
?>