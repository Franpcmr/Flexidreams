<?php
require '../conexion.php';

$foto1 = $_FILES['imagen1']['name'];
$foto1_ruta =$_FILES['imagen1']['tmp_name'];
$titulo1 = $_POST['titulo1'];
$texto1 = $_POST['texto1'];
$texto2 = $_POST['texto2'];
$texto3 = $_POST['texto3'];
$texto4 = $_POST['texto4'];
$titulo5 = $_POST['titulo5'];
$texto5 = $_POST['texto5'];
$foto5 = $_FILES['imagen5']['name'];
$foto5_ruta =$_FILES['imagen5']['tmp_name'];
$titulo6 = $_POST['titulo6'];
$texto6 = $_POST['texto6'];
$tipo_hotel =  $_POST['tipo_hotel'];
$titulo7 = $_POST['titulo7'];
$texto7 = $_POST['texto7'];
$foto7 = $_FILES['imagen7']['name'];
$foto7_ruta =$_FILES['imagen7']['tmp_name'];




if($foto1 <> ''){
if(!file_exists('img_pagina_principal')){
	if(file_exists('img_pagina_principal')){
		if(move_uploaded_file($foto1_ruta, 'img_pagina_principal/'.$foto1)){
            $insertardatos1 ="UPDATE flexi_web.pagina_principal SET foto1 = 'img_pagina_principal/$foto1' WHERE id ='1'";	
            $ejecutarinsertar111 = mysqli_query($enlace,$insertardatos1);
        }else{
			echo "Archivo no se pudo guardar";
		}
	}
}else{
	if(move_uploaded_file($foto1_ruta, 'img_pagina_principal/'.$foto1)){
        $insertardatos1 ="UPDATE flexi_web.pagina_principal SET foto1 = 'img_pagina_principal/$foto1' WHERE id ='1'";	
        $ejecutarinsertar111 = mysqli_query($enlace,$insertardatos1);
	}else{
		echo "Archivo no se pudo guardar";
	}
}
}


if($foto5 <> ''){
if(!file_exists('img_pagina_principal')){
	if(file_exists('img_pagina_principal')){
		if(move_uploaded_file($foto5_ruta, 'img_pagina_principal/'.$foto5)){
            $insertardatos1 ="UPDATE flexi_web.pagina_principal SET foto5 = 'img_pagina_principal/$foto5' WHERE id ='1'";
            $ejecutarinsertar111 = mysqli_query($enlace,$insertardatos1);
        }else{
			echo "Archivo no se pudo guardar";
		}
	}
}else{
	if(move_uploaded_file($foto5_ruta, 'img_pagina_principal/'.$foto5)){
        $insertardatos1 ="UPDATE flexi_web.pagina_principal SET foto5 = 'img_pagina_principal/$foto5' WHERE id ='1'";
        $ejecutarinsertar111 = mysqli_query($enlace,$insertardatos1);
    }else{
		echo "Archivo no se pudo guardar";
	}
}
}

if($foto7 <> ''){
if(!file_exists('img_pagina_principal')){
	if(file_exists('img_pagina_principal')){
		if(move_uploaded_file($foto7_ruta, 'img_pagina_principal/'.$foto7)){
            $insertardatos1 ="UPDATE flexi_web.pagina_principal SET foto7 = 'img_pagina_principal/$foto7' WHERE id ='1'";
            $ejecutarinsertar111 = mysqli_query($enlace,$insertardatos1);
        }else{
			echo "Archivo no se pudo guardar";
		}
	}
}else{
	if(move_uploaded_file($foto7_ruta, 'img_pagina_principal/'.$foto7)){
        $insertardatos1 ="UPDATE flexi_web.pagina_principal SET foto7 = 'img_pagina_principal/$foto7' WHERE id ='1'";
        $ejecutarinsertar111 = mysqli_query($enlace,$insertardatos1);
	}else{
		echo "Archivo no se pudo guardar";
	}
}
}

  $insertardatos1 ="UPDATE flexi_web.pagina_principal SET titulo1 = '$titulo1', texto1 = '$texto1', texto2 = '$texto2', texto3 = '$texto3', texto4 = '$texto4' WHERE id ='1'";
  $ejecutarinsertar111 = mysqli_query($enlace,$insertardatos1);
  $insertardatos2 ="UPDATE flexi_web.pagina_principal SET titulo5 = '$titulo5', texto5 = '$texto5' , titulo6 = '$titulo6' , texto6 = '$texto6', tipo_hotel6 = '$tipo_hotel' , titulo7 = '$titulo7', texto7 = '$texto7' WHERE id ='1'";
$ejecutarinsertar112 = mysqli_query($enlace,$insertardatos2);

header("Location: editar-index-backoffice.php");

?>