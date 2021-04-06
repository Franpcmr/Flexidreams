<?php
require '../conexion.php';

$usuarioseleccionado = $_POST['usuarioseleccionado'];
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$pais = $_POST['pais'];
$poblacion = $_POST['poblacion'];
$provincia = $_POST['provincia'];
$cp = $_POST['cp'];
$email = $_POST['email'];
$telf1 = $_POST['telf1'];
$telf2 = $_POST['telf2'];

$insertardatos1 ="UPDATE flexi_web.clientes SET nombre = '$nombre', direccion = '$direccion',  pais = '$pais' , poblacion = '$poblacion' , provincia = '$provincia', cp = '$cp', email = '$email', telf1 = '$telf1', telf2= '$telf2' WHERE id='$usuarioseleccionado'";
$ejecutarinsertar111 = mysqli_query($enlace,$insertardatos1);

if($ejecutarinsertar111){
header("Location: usuarios-backoffice-concretoc.php?cliente=$usuarioseleccionado#perfilhotelhref");
}



?>

