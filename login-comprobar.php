<?php 

require 'conexion.php';

$user = $_POST['user'];
$contrasena = $_POST['contrasena'];
$insertardatos1 = "SELECT count(*) as total FROM flexi_web.usuarios WHERE usuario = '$user' and password = '$contrasena';";
$ejecutarinsertar1 = mysqli_query($enlace,$insertardatos1);
$numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);

$num_rows1=$numero_filas1['total'];

$insertardatos2 = "SELECT * FROM flexi_web.usuarios WHERE usuario = '$user' and password = '$contrasena';";
$ejecutarinsertar2 = mysqli_query($enlace,$insertardatos2);
$numero_filas2 = mysqli_fetch_array($ejecutarinsertar2);
$tipo=$numero_filas2['tipo'];
$id=$numero_filas2['id'];

if($num_rows1 == 1){



    if($tipo == "3"){
        session_start();
        $insertardatos1 = "SELECT * FROM flexi_web.usuarios WHERE id = '$id';";
        $ejecutarinsertar1 = mysqli_query($enlace,$insertardatos1);
        $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
        $_SESSION["usuario"] = $numero_filas1['id'];
        $_SESSION["tipo"] = $tipo;
        header("Location: back-pannel/index-backoffice.php");


    }
    if($tipo == "2"){
        session_start();
        $insertardatos1 = "SELECT * FROM flexi_web.usuarios WHERE id = '$id';";
        $ejecutarinsertar1 = mysqli_query($enlace,$insertardatos1);
        $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
        $_SESSION["usuario"] = $numero_filas1['id'];
        $_SESSION["tipo"] = $tipo;
        header("Location: back-pannel/hotel/index.php");


    }
    if($tipo == "1"){
        session_start();
        $insertardatos1 = "SELECT * FROM flexi_web.usuarios WHERE id = '$id';";
        $ejecutarinsertar1 = mysqli_query($enlace,$insertardatos1);
        $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
        $_SESSION["usuario"] = $numero_filas1['id'];
        $_SESSION["tipo"] = $tipo;
        header("Location: index.php");


    }

}


?>