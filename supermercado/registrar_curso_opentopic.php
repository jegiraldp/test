<?php
include_once("conexion_opentopic.php");
$con=conexion_opentopic::conectar();

$nom=$_POST['txtNombre'];
$nom=strtolower($nom);

$query= "insert into fabricante (nombre) values ('$nom')";
print $query."<br/>";

if($con->query($query)){
print '<a href="inicio.html"><img width="16" height="16" src="img/back.png"/>Regresar</a><hr/>';
print "Registro Ok";	
}else{
	print "error";
}

mysqli_close($con);


?>