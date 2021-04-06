<?php
require '../../conexion.php';

$hotelseleccionado = $_POST['hotelseleccionado'];
$titulo_habitacion = $_POST['titulo_habitacion'];
$suplemento_dia = $_POST['suplemento_dia'];
$n_personas = $_POST['n_personas'];
$min_personas = $_POST['min_personas'];
$max_personas = $_POST['max_personas'];
$precio_dia_extra = $_POST['precio_dia_extra'];
$habitacionseleccionada = $_POST['habitacionseleccionada'];


if ($habitacionseleccionada == ""){

  $insertardatos111 = "INSERT INTO flexi_web.tipos_de_habitaciones (hotel,tipo,suplemento_dia,n_personas,min_personas,max_personas,precio_dia_extra)
VALUES ('$hotelseleccionado','$titulo_habitacion','$suplemento_dia','$n_personas','$min_personas','$max_personas','$precio_dia_extra');";
  $ejecutarinsertar112 = mysqli_query($enlace,$insertardatos111);

  if($ejecutarinsertar112){
    header("Location: ../index.php#habitacioneshref");  }
}
if($habitacionseleccionada <> "0"){

  $insertardatos1 ="UPDATE flexi_web.tipos_de_habitaciones SET tipo = '$titulo_habitacion', suplemento_dia = '$suplemento_dia', n_personas = '$n_personas' WHERE id ='$habitacionseleccionada'";
  $insertardatos2 ="UPDATE flexi_web.tipos_de_habitaciones SET  min_personas = '$min_personas', max_personas = '$max_personas', precio_dia_extra = '$precio_dia_extra' WHERE id ='$habitacionseleccionada'";
 
$ejecutarinsertar111 = mysqli_query($enlace,$insertardatos1);
$ejecutarinsertar113 = mysqli_query($enlace,$insertardatos2);
header("Location: index.php#habitacioneshref");}
?>
