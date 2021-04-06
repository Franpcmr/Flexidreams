<?php
require '../conexion.php';

$hotelseleccionado = $_GET['hotel'];
$equipamiento = $_GET['equipamiento'];

$insertardatos22 = "SELECT * FROM flexi_web.tipo_equipaminetos,flexi_web.equipamientos_hotel WHERE tipo_equipaminetos.id = equipamientos_hotel.equipamiento AND hotel = '$hotelseleccionado' and equipamiento = '$equipamiento'";
$ejecutarinsertar22 = mysqli_query($enlace,$insertardatos22);
$contarfilas22 = mysqli_num_rows($ejecutarinsertar22);

if($contarfilas22 == 0){
  $insertardatos111 = "INSERT INTO flexi_web.equipamientos_hotel (hotel,equipamiento)
  VALUES ('$hotelseleccionado','$equipamiento');";
  $ejecutarinsertar111 = mysqli_query($enlace,$insertardatos111);
  
    header("Location: usuarios-backoffice-concretoh.php?hotel=$hotelseleccionado&categoria_equip=Restuarante&equipamiento=".$equipamiento."#equipamientohref");
  
}else{
  header("Location: usuarios-backoffice-concretoh.php?hotel=$hotelseleccionado&categoria_equip=Restuarante&equipamiento=".$equipamiento."#equipamientohref");

}
?>