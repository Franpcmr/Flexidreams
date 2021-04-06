<?php
require '../conexion.php';

$hotelseleccionado = $_POST['hotelseleccionado'];
$precio = $_POST['precio'];
$cantidad_dias = $_POST['cantidad_dias'];
$codigo_oferta = $_POST['codigo_oferta'];
$min_personas = $_POST['min_personas'];
$max_personas = $_POST['max_personas'];
$desde = $_POST['desde'];
$desde_r = $_POST['desde_r'];
$hasta = $_POST['hasta'];
$hasta_r = $_POST['hasta_r'];
$cupo = $_POST['cupo'];
$request = $_POST['on_request'];
$tipodehabitacion = $_POST['tipodehabitacion'];
$fechasseleccionada = $_POST['fechasseleccionadas'];

if ($fechasseleccionada == ""){

  $insertardatos111 = "INSERT INTO flexi_web.precios_ofertas (onrequest,hotel,cupo,codigo_oferta,desde,hasta,desde_reserva,hasta_reserva,precio,numero_dias,tipo_habitacion,max_personas,min_personas)
VALUES ('$request','$hotelseleccionado','$cupo','$codigo_oferta','$desde','$hasta','$desde_r','$hasta_r','$precio','$cantidad_dias','$tipodehabitacion','$max_personas','$min_personas');";
  $ejecutarinsertar112 = mysqli_query($enlace,$insertardatos111);

  if($ejecutarinsertar112){
    header("Location: usuarios-backoffice-concretoh.php?hotel=$hotelseleccionado#fechashref");
  }
}
if ($fechasseleccionada <> ""){

  $insertardatosh = "SELECT * FROM flexi_web.precios_ofertas where id = '$hotelseleccionado' and id='$fechasseleccionada'";
  $ejecutarinsertarh = mysqli_query($enlace,$insertardatosh);
  $contarfilas = mysqli_num_rows($ejecutarinsertarh);
  $numero_filash = mysqli_fetch_array($ejecutarinsertarh);


  if($cupo > $numero_filash['cupo']){
  $insertardatos1 ="UPDATE flexi_web.precios_ofertas SET onrequest = '$request', cupo = '$cupo', codigo_oferta = '$codigo_oferta', desde = '$desde', hasta = '$hasta', desde_reserva = '$desde_r', hasta_reserva = '$hasta_r', precio = '$precio', numero_dias = '$cantidad_dias', tipo_habitacion = '$tipodehabitacion', max_personas = '$max_personas',min_personas = '$min_personas' WHERE id ='$fechasseleccionada'";
  }
$ejecutarinsertar111 = mysqli_query($enlace,$insertardatos1);
header("Location: usuarios-backoffice-concretoh.php?hotel=$hotelseleccionado#fechashref");
  
}
?>
