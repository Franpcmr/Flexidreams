<?php
require '../conexion.php';
$localizacion = $_POST['localizacion'];
echo $tipo;
$insertardatos1= "INSERT INTO flexi_web.localizaciones (localizacion) VALUES ('$localizacion')";
$ejecutarinsertar1 = mysqli_query($enlace,$insertardatos1);

if($ejecutarinsertar1 == true){
header("Location: datosgenerales-backoffice.php");
}
?>
