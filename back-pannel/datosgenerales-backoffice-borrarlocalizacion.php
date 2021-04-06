<?php
require '../conexion.php';
$tipo = $_GET['tipo'];
echo $tipo;

    
    $insertardatos1= "DELETE FROM flexi_web.localizaciones WHERE localizacion = '$tipo'";
    $ejecutarinsertar1 = mysqli_query($enlace,$insertardatos1);
    header("Location: datosgenerales-backoffice.php");  

?>
