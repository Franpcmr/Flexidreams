<?php
require '../conexion.php';
$hotelseleccionado = $_GET['hotel'];
$equipamiento = $_GET['equipamiento'];


    
    $insertardatos1= "DELETE FROM flexi_web.equipamientos_hotel WHERE equipamiento = '$equipamiento' and hotel = '$hotelseleccionado'";
    $ejecutarinsertar1 = mysqli_query($enlace,$insertardatos1);

    header("Location: usuarios-backoffice-concretoh.php?hotel=$hotelseleccionado#equipamientohref");

?>
