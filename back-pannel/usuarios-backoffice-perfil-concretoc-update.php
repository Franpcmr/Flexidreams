<?php
require '../conexion.php';

$hotel_seleccionado = $_POST['hotelseleccionado'];
$nombre_usuario = $_POST['nombre_usuario'];
$contraseña = $_POST['contraseña'];
$pregunta = $_POST['pregunta_seguridad'];
$respuesta = $_POST['respuesta_seguridad'];

$insertardatos1 = "SELECT * FROM flexi_web.clientes WHERE id = '$hotel_seleccionado'";

$ejecutarinsertar1 = mysqli_query($enlace,$insertardatos1);
$numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
$idusuario = $numero_filas1['usuario'];

$insertardatos1 ="UPDATE flexi_web.usuarios SET usuario='$nombre_usuario',password='$contraseña',pas2='$contraseña',pregunta_seg='$pregunta',respuesta_seg='$respuesta' WHERE id='$idusuario'";
$ejecutarinsertar111 = mysqli_query($enlace,$insertardatos1);

header("Location: usuarios-backoffice-concretoc.php?cliente=$hotel_seleccionado");




?>