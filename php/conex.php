<?php
/* DESARROLLO ~ OSCAR'PC */
$host="190.237.186.99"; 
$user="root"; 
$pass=""; 
$base="coer";

$conexion=mysql_connect($host,$user,$pass) or die ("Error al establecer la conexion al Servidor");
mysql_select_db($base) or die ("Error al conectarse con la Base de datos");

?>