<?php 
spl_autoload_register( function ($nombre_clase) 
{
    include $nombre_clase . '.php';
});

$campos = array('matricula', 'serial_motoripcion', 'serial_carroceria', 'marca','modelo','anio','color','precio');
$conexion = new dB();
if($resultado=$conexion->buscarTodo("autos"))
    {
    echo "<table>";
    echo "<tr>";
    foreach ($campos as $key => $value) 
    {
        echo "<th>".$value."</th>"; 
    }
    echo "</tr>";
    echo "<tr>";
    foreach ($resultado as $fila)
    {
        $cadena = "<tr>";
        foreach ($campos as $key => $value) 
        {
            $cadena .= "<td>".$fila[$value]."</td>";
        }
        echo $cadena;
        echo "</tr>";
    }
    echo "</tr>";
    echo "</table>";
}
else
    echo  "No hay registros";
?>