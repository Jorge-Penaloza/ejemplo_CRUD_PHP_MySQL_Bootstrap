<?php 
spl_autoload_register( function ($nombre_clase) 
{
    include $nombre_clase . '.php';
});
$campos = array('matricula', 'serial_motor', 'serial_carroceria', 
                'marca','modelo','anio','color','precio');
$value = array('','','','','','','','');
$sw = true;
if(isset($_GET["matricula"]) && !empty(trim($_GET["matricula"])))
{
    $value[0] = $_GET["matricula"];
} 
else
{
    $sw = false;
}
if(isset($_GET["serieMotor"]) && !empty(trim($_GET["serieMotor"])))
{
    $value[1] = $_GET["serieMotor"];
} 
else
{
    $sw = false;
}
if(isset($_GET["serieCarroceria"]) && !empty(trim($_GET["serieCarroceria"])))
{
    $value[2] = $_GET["serieCarroceria"];
} 
else
{
    $sw = false;
}
if(isset($_GET["marca"]) && !empty(trim($_GET["marca"])))
{
    $value[3] = $_GET["marca"];
} 
else
{
    $sw = false;
}
if(isset($_GET["modelo"]) && !empty(trim($_GET["modelo"])))
{
    $value[4] = $_GET["modelo"];
} 
else
{
    $sw = false;
}
if(isset($_GET["anio"]) && !empty(trim($_GET["anio"])))
{
    $value[5] = $_GET["anio"];
} 
else
{
    $sw = false;
}
if(isset($_GET["color"]) && !empty(trim($_GET["color"])))
{
    $value[6] = $_GET["color"];
} 
else
{
    $sw = false;
}
if(isset($_GET["precio"]) && !empty(trim($_GET["precio"])))
{
    $value[7] = $_GET["precio"];
} 
else
{
    $sw = false;
}
print_r($value);
if($sw)
{
    $conexion = new dB();
    $condicion = "matricula = '".$_GET['matricula']."'";
    $url = "modificar.php?";
    for($i = 0;$i < count($value);$i++)
    {
        $url .= $campos[$i]."=".$value[$i]."&";
    }
    
    if($conexion->actualizar('autos',$campos,$value,$condicion))
    {
        header("Location: ".$url."error=2");
    } 
    else
    {
        header("Location: ".$url."error=1");
        
    }
}

?>