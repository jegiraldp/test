<?php
class conexion{
	
static function conectar(){

$mysqli = new mysqli("localhost", "jorge", "jorge123", "tienda");
if ($mysqli->connect_errno) {
    echo "Error de conexión";
}
//print ("Conectado<br/>");
return $mysqli;
}

}//class
//conexion::conectar();

?>