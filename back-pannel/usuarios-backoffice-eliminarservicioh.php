<?php
require '../conexion.php';
$hotelseleccionado = $_GET['hotel'];
$servicio = $_GET['servicio'];


    
    $insertardatos1= "DELETE FROM flexi_web.servicios_hotel WHERE id = '$servicio' and hotel = '$hotelseleccionado'";
    $ejecutarinsertar1 = mysqli_query($enlace,$insertardatos1);

    header("Location: usuarios-backoffice-concretoh.php?hotel=$hotelseleccionado#serviciohref");

?>
