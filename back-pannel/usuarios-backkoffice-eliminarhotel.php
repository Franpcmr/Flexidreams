<?php
require '../conexion.php';



$hotelseleccionado = $_GET['hotel'];


$insertardatos111= "DELETE FROM flexi_web.hoteles WHERE id = '$hotelseleccionado'";
  $ejecutarinsertar111 = mysqli_query($enlace,$insertardatos111);

  header("Location: usuarios-backoffice.php");

?>
