<?php
include_once("conexion.php");
$con=conexion::conectar();
print '<a href="index.html">Regresar</a><hr/>';
$nom=$_POST['txtNombre'];

$query= "insert into fabricante(nombre) values ('$nom')";
//print $query."<br/>";

if($con->query($query)){
print "Registro Ok";	
}else{
	print "error";
}
mysqli_close($con);
?>