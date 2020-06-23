<?php
include_once("conexion.php");
class listar_fabricantes{
	
static function ver(){
$con=conexion::conectar();
$query= "select * from fabricante";
$resultado = $con->query($query);
$resultado->data_seek(0);
$impri='<a href="index.html">Regresar</a><hr/>';
$impri.='<table border="1" id="customers"><th>Codigo</th><th>Nombre</th>';
while ($fila = $resultado->fetch_assoc()) {
    $impri.='<tr><td>'.$fila['codigo']."</td><td>".$fila['nombre']."</td></tr>";
}
print $impri.'</table>';
mysqli_close($con);
}//ver
}//class

listar_fabricantes::ver();
?>