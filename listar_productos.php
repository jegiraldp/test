<?php
include_once("conexion.php");
class listar_productos{
	
static function ver(){
$con=conexion::conectar();
$query= "select * from producto";
$resultado = $con->query($query);
$resultado->data_seek(0);
print '<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style><a href="index.html">Regresar</a><hr/>';
while ($fila = $resultado->fetch_assoc()) {
    print $fila['codigo']."-".$fila['nombre']."-".$fila['precio']."-".$fila['codigo_fabricante']."<br/>";
}
mysqli_close($con);
}//ver
}//class

listar_productos::ver();
?>