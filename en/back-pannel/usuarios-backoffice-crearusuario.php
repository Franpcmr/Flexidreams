<?php
require '../conexion.php';

$nombre_usuario = $_POST['nombre_usuario'];
$contraseña = $_POST['contraseña'];
$tipodeusuario = $_POST['tipodeusuario'];


$insertardatos111 = "INSERT INTO deversor_flexi_web.usuarios (usuario,password,pas1,tipo)
VALUES ('$nombre_usuario','$contraseña','$contraseña','2');";
$ejecutarinsertar111 = mysqli_query($enlace,$insertardatos111);

if($tipodeusuario == "h"){


  $insertardatos1 = "SELECT * FROM deversor_flexi_web.usuarios WHERE usuario = '$nombre_usuario'";

  $ejecutarinsertar1 = mysqli_query($enlace,$insertardatos1);
  $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
  $idusuario = $numero_filas1['id'];

  $insertardatos222 = "INSERT INTO deversor_flexi_web.hoteles (usuario)
  VALUES ('$idusuario');";
  $ejecutarinsertar222 = mysqli_query($enlace,$insertardatos222);
  header("Location: usuarios-backoffice.php?enviado=true");
}
if($tipodeusuario == "c"){


  $insertardatos1 = "SELECT * FROM deversor_flexi_web.usuarios WHERE usuario = '$nombre_usuario'";

  $ejecutarinsertar1 = mysqli_query($enlace,$insertardatos1);
  $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
  $idusuario = $numero_filas1['id'];

  $insertardatos222 = "INSERT INTO deversor_flexi_web.clientes (usuario)
  VALUES ('$idusuario');";
  $ejecutarinsertar222 = mysqli_query($enlace,$insertardatos222);
  header("Location: usuarios-backoffice.php?enviado=true");

  }
?>