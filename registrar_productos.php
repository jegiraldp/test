<?php
include_once("conexion.php");
$con=conexion::conectar();
print '<a href="index.html">Regresar</a><hr/>';
$nom=$_POST['txtNombre'];
$pre=$_POST['txtPrecio'];
$codF=$_POST['txtCodFabricante'];

$query= "insert into producto(nombre,precio,codigo_fabricante) values ('$nom','$pre','$codF')";
//print $query."<br/>";

if($con->query($query)){
print "Registro Ok";	
}else{
	print "error";
}
mysqli_close($con);
?>