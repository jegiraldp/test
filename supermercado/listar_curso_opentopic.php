<?php
include_once("conexion_opentopic.php");
class listar_curso_opentopic{
	
static function ver(){
$con=conexion_opentopic::conectar();
$query= "select * from fabricante";
$resultado = $con->query($query);
$resultado->data_seek(0);
while ($fila = $resultado->fetch_assoc()) {
    print $fila['codigo']."-".$fila['nombre']."<br/>";
}
mysqli_close($con);
}//ver
}//class
print '<a href="inicio.html"><img width="16" height="16" src="img/back.png"/>Regresar</a><hr/>';
listar_curso_opentopic::ver();

//<?php echo json_encode(array("name"=>"John","time"=>"2pm"));
?>