<?php
require '../conexion.php';
$tipo = $_GET['tipo'];
echo $tipo;

    
    $insertardatos1= "DELETE FROM flexi_web.tipo_hoteles WHERE tipo_de_hotel = '$tipo'";
    $ejecutarinsertar1 = mysqli_query($enlace,$insertardatos1);
    header("Location: datosgenerales-backoffice.php");  

?>

