<?php
require '../conexion.php';
$tipo = $_GET['tipo'];
echo $tipo;



$insertardatos2= "SELECT COUNT(*) AS total  From  flexi_web.tipo_equipaminetos WHERE tipo = '$tipo'";
$ejecutarinsertar2 = mysqli_query($enlace,$insertardatos2);
$total = mysqli_fetch_assoc($ejecutarinsertar2);
$total1=intval($total['total']);
if($total1 == 1){
    header("Location: datosgenerales-backoffice.php?enviado=true&tipo_cat=$tipo");
    $insertardatos1= "DELETE FROM flexi_web.tipo_equipaminetos WHERE tipo = '$tipo'";
    $ejecutarinsertar1 = mysqli_query($enlace,$insertardatos1);
}else{
    header("Location: datosgenerales-backoffice.php?enviado=error&tipo=categoria&tipo_cat=$tipo");
}
?>
