<?php
require '../conexion.php';

$hotel_seleccionado = $_POST['hotelseleccionado'];
$on_request = $_POST['on_request'];
$pais = $_POST['pais'];
$nombre_hotel = $_POST['nombre_hotel'];
$provincia = $_POST['provincia'];
$nombre_fiscal = $_POST['nombre_fiscal'];
$poblacion = $_POST['poblacion'];
$n_habitaciones = $_POST['n_habitaciones'];
$categoria_h = $_POST['categoria_h'];
$nif = $_POST['nif'];
$web = $_POST['web'];
$quien_email1 = $_POST['quien_email1'];
$cargo1 = $_POST['cargo1'];
$email1 = $_POST['email1'];
$telf1 = $_POST['telf1'];
$aceptado = $_POST['aceptado'];
$quien_email2 = $_POST['quien_email2'];
$cargo2 = $_POST['cargo2'];
$email2 = $_POST['email2'];
$telf2 = $_POST['telf2'];
$quien_email3 = $_POST['quien_email3'];
$cargo3 = $_POST['cargo3'];
$email3 = $_POST['email3'];
$telf3 = $_POST['telf3'];
$ubicacion1 = $_POST['ubicacion1'];
$ubicacion2 = $_POST['ubicacion2'];
$ubicacion3 = $_POST['ubicacion3'];
$tipo1 = $_POST['tipo1'];
$tipo2 = $_POST['tipo2'];
$tipo3 = $_POST['tipo3'];
$hotel_prioridad = $_POST['hotel_prioridad'];
$tipoprioridad1 = $_POST['tipo_prioridad1'];
$tipoprioridad2 = $_POST['tipo_prioridad2'];
$tipoprioridad3 = $_POST['tipo_prioridad3'];
$observacion1 = $_POST['observacion1'];

$insertardatos1 = "SELECT * FROM flexi_web.hoteles WHERE id = '$hotel_seleccionado'";

$ejecutarinsertar1 = mysqli_query($enlace,$insertardatos1);
$numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
$idusuario = $numero_filas1['usuario'];

$insertardatos1 ="UPDATE flexi_web.hoteles SET marcavisiblehotel = '$aceptado', hotel_prioridad = '$hotel_prioridad', tipo_prioridad1 = '$tipoprioridad1', tipo_prioridad2 = '$tipoprioridad2', tipo_prioridad3 = '$tipoprioridad3', tipo_hotel1 = '$tipo1', tipo_hotel2 = '$tipo2', tipo_hotel3 = '$tipo3', on_request='$on_request',categoria='$categoria_h',nombre_hotel='$nombre_hotel',nombre_fiscal='$nombre_fiscal',nif='$nif',poblacion='$poblacion',provincia='$provincia',pais='$pais',localicacion1='$ubicacion1',localicacion2='$ubicacion2',localicacion3='$ubicacion3',email1='$email1',quien_email1='$quien_email1',cargo1='$cargo1',tlf1='$telf1',email2='$email2',quien_email2='$quien_email2',cargo2='$cargo2',tlf2='$telf2',email3='$email3',quien_email3='$quien_email3',cargo3='$cargo3',tlf3='$telf3', obser1='$observacion1' WHERE usuario='$idusuario'";
$ejecutarinsertar111 = mysqli_query($enlace,$insertardatos1);

header("Location: usuarios-backoffice-concretoh.php?hotel=$hotel_seleccionado#perfilhotelhref");




?>

