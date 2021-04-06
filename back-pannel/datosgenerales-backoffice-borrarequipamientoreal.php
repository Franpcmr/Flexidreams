<?php
require '../conexion.php';
$tipo = $_GET['tipo'];
$equipamiento = $_GET['equipamiento'];
echo $tipo;


    
    $insertardatos1= "DELETE FROM flexi_web.tipo_equipamientos WHERE tipo = '$tipo' and equipamientos = '$equipamiento';
    $ejecutarinsertar1 = mysqli_query($enlace,$insertardatos1);
    header("Location: datosgenerales-backoffice.php?enviadog=true");  

?>

