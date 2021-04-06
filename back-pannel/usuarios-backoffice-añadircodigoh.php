<?php
require '../conexion.php';



$hotelseleccionado = $_POST['hotelseleccionado'];
$porcentaje = $_POST['porcentaje'];
$codigooferta = $_POST['codigo'];

  $insertardatos111 = "INSERT INTO flexi_web.codigos_ofertas (hotel,oferta,codigo_general)
  VALUES ('$hotelseleccionado','$porcentaje','$codigooferta');";
  $ejecutarinsertar111 = mysqli_query($enlace,$insertardatos111);

  header("Location: usuarios-backoffice-concretoh.php?hotel=$hotelseleccionado&categoria_equip=Restuarante&equipamiento=".$equipamiento."#codigohref");

?>
