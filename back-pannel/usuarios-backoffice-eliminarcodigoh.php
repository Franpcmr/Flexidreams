<?php
require '../conexion.php';
$hotelseleccionado = $_GET['hotel'];
$oferta = $_GET['oferta'];


    
    $insertardatos1= "DELETE FROM flexi_web.codigos_ofertas WHERE id = '$oferta' and hotel = '$hotelseleccionado'";
    $ejecutarinsertar1 = mysqli_query($enlace,$insertardatos1);

    header("Location: usuarios-backoffice-concretoh.php?hotel=$hotelseleccionado#codigohref");

?>
