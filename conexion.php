<?php

$servidor="localhost";
$usuario="root";
$clave="";
$basededatos="flexi_web";

 
$enlace = new mysqli($servidor, $usuario, $clave, $basededatos,3306);
$enlace -> set_charset("utf8");
if ($enlace->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $enlace->connect_errno . ") " . $enlace->connect_error;
}
error_reporting(0); 

?>
   