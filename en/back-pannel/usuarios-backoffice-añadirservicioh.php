<?php
require '../conexion.php';

$hotelseleccionado = $_GET['hotel'];
$servicio = $_GET['servicio'];

$insertardatos22 = "SELECT * FROM flexi_web.tipos_servicios,flexi_web.servicios_hotel WHERE tipos_servicios.id = servicios_hotel.equipamiento AND hotel = '$hotelseleccionado'";
$ejecutarinsertar22 = mysqli_query($enlace,$insertardatos22);
$contarfilas22 = mysqli_num_rows($ejecutarinsertar22);


if($contarfilas22 == 0){
  $insertardatos111 = "INSERT INTO flexi_web.servicios_hotel (hotel,servicio)
  VALUES ('$hotelseleccionado','$servicio');";
  $ejecutarinsertar111 = mysqli_query($enlace,$insertardatos111);

    header("Location: usuarios-backoffice-concretoh.php?hotel=$hotelseleccionado&categoria_equip=Restuarante&equipamiento=".$equipamiento."#serviciohref");

    
}else{
  header("Location: usuarios-backoffice-concretoh.php?hotel=$hotelseleccionado&categoria_equip=Restuarante&equipamiento=".$equipamiento."#serviciohref");

}
?>
