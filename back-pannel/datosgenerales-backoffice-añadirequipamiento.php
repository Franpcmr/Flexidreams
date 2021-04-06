<?php
require '../conexion.php';
$tipo = $_POST['tipo_equipamientoadd'];
$equipamiento = $_POST['equipamientoadd'];
$icono_equipamiento = $_POST['icono_equipamiento'];
echo $tipo;
$insertardatos1= "INSERT INTO flexi_web.tipo_equipaminetos (tipo, equipamientos, icono) VALUES ('$tipo', '$equipamiento', '$icono_equipamiento')";
$ejecutarinsertar1 = mysqli_query($enlace,$insertardatos1);

if($ejecutarinsertar1 == true){
header("Location: datosgenerales-backoffice.php");
}
?>
