<?php
require '../conexion.php';

$aceptado = $_POST['aceptado'];
$hotel_seleccionado = $_POST['hotelseleccionado'];
$texto1 = $_POST['texto1'];
$texto2 = $_POST['texto2'];
$texto3 = $_POST['texto3'];
$equi1 = $_POST['equi1'];
$equi2 = $_POST['equi2'];
$equi3 = $_POST['equi3'];
$equi4 = $_POST['equi4'];
$equi5 = $_POST['equi5'];
$maps2 = $_POST['maps'];
$tripad = $_POST['tripad'];
$titulo3 = $_POST['titulo3'];
$subtitulo3 = $_POST['subtitulo3'];
$texto4 = $_POST['texto4'];
$titulo4 = $_POST['titulo4'];
$subtitulo4 = $_POST['subtitulo4'];
$foto1 = $_FILES['imagen1']['name'];
$foto1_ruta =$_FILES['imagen1']['tmp_name'];
$foto2 = $_FILES['imagen2']['name'];
$foto2_ruta =$_FILES['imagen2']['tmp_name'];
$archivo1 = 'imagenes_hoteles/'.$hotel_seleccionado.'_1.jpg';
$archivo2 = 'imagenes_hoteles/'.$hotel_seleccionado.'_2.jpg';
$userhotel = $_POST['userhotel']; 
$maps = str_replace(" ", "%20", $maps2);


if($foto1 <> ''){
if(!file_exists('imagenes_hoteles')){
	if(file_exists('imagenes_hoteles')){
		if(move_uploaded_file($foto1_ruta, 'imagenes_hoteles/'.$hotel_seleccionado.'_1.jpg')){
            $insertardatos1 ="UPDATE flexi_web.hoteles SET foto1 = '$archivo1' WHERE id ='$hotel_seleccionado'";	
            $ejecutarinsertar111 = mysqli_query($enlace,$insertardatos1);
        }else{
			echo "Archivo no se pudo guardar";
		}
	}
}else{
	if(move_uploaded_file($foto1_ruta, 'imagenes_hoteles/'.$hotel_seleccionado.'_1.jpg')){
        $insertardatos1 ="UPDATE flexi_web.hoteles SET foto1 = '$archivo1' WHERE id ='$hotel_seleccionado'";	
        $ejecutarinsertar111 = mysqli_query($enlace,$insertardatos1);
	}else{
		echo "Archivo no se pudo guardar";
	}
}
}


if($foto2 <> ''){
	if(!file_exists('imagenes_hoteles')){
		if(file_exists('imagenes_hoteles')){
			if(move_uploaded_file($foto2_ruta, 'imagenes_hoteles/'.$hotel_seleccionado.'_2.jpg')){
				$insertardatos1 ="UPDATE flexi_web.hoteles SET foto2 = '$archivo2' WHERE id ='$hotel_seleccionado'";	
				$ejecutarinsertar111 = mysqli_query($enlace,$insertardatos1);
			}else{
				echo "Archivo no se pudo guardar";
			}
		}
	}else{
		if(move_uploaded_file($foto2_ruta, 'imagenes_hoteles/'.$hotel_seleccionado.'_2.jpg')){
			$insertardatos1 ="UPDATE flexi_web.hoteles SET foto2 = '$archivo2' WHERE id ='$hotel_seleccionado'";	
			$ejecutarinsertar111 = mysqli_query($enlace,$insertardatos1);
		}else{
			echo "Archivo no se pudo guardar";
		}
	}
	}
	$contador = 2;
	foreach($_FILES["imagen_galeria"]['tmp_name'] as $key => $tmp_name)
	{
		$contador = $contador + 1;
		//Validamos que el archivo exista
		if($_FILES["imagen_galeria"]["name"][$key]) {
			$filename = $_FILES["imagen_galeria"]["name"][$key]; //Obtenemos el nombre original del archivo
			$source = $_FILES["imagen_galeria"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo
			
			$directorio = 'imagenes_hoteles/'; //Declaramos un  variable con la ruta donde guardaremos los archivos
			
			//Validamos si la ruta de destino existe, en caso de no existir la creamos
			if(!file_exists($directorio)){
				mkdir($directorio, 0777) or die("No se puede crear el directorio de extracci&oacute;n");	
			}
			
			$dir=opendir($directorio); //Abrimos el directorio de destino
			$target_path = $directorio.$hotel_seleccionado.'_galeria_'.$contador.'.jpg'; //Indicamos la ruta de destino, así como el nombre del archivo
			
			//Movemos y validamos que el archivo se haya cargado correctamente
			//El primer campo es el origen y el segundo el destino
			if(move_uploaded_file($source, $target_path)) {	
				$insertardatos1 ="UPDATE flexi_web.hoteles SET foto$contador = '$target_path' WHERE id ='$hotel_seleccionado'";	
				$ejecutarinsertar111 = mysqli_query($enlace,$insertardatos1);	
				} else {	
				echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>";
			}
			closedir($dir); //Cerramos el directorio de destino
		}
	}

	$contador2 = 15;
	foreach($_FILES["imagen_banner"]['tmp_name'] as $key => $tmp_name)
	{
		$contador2 = $contador2 + 1;
		//Validamos que el archivo exista
		if($_FILES["imagen_banner"]["name"][$key]) {
			$filename = $_FILES["imagen_banner"]["name"][$key]; //Obtenemos el nombre original del archivo
			$source = $_FILES["imagen_banner"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo
			
			$directorio = 'imagenes_hoteles/'; //Declaramos un  variable con la ruta donde guardaremos los archivos
			
			//Validamos si la ruta de destino existe, en caso de no existir la creamos
			if(!file_exists($directorio)){
				mkdir($directorio, 0777) or die("No se puede crear el directorio de extracci&oacute;n");	
			}
			
			$dir=opendir($directorio); //Abrimos el directorio de destino
			$target_path = $directorio.$hotel_seleccionado.'_banner_'.$contador2.'.jpg'; //Indicamos la ruta de destino, así como el nombre del archivo
			
			//Movemos y validamos que el archivo se haya cargado correctamente
			//El primer campo es el origen y el segundo el destino
			if(move_uploaded_file($source, $target_path)) {	
				$insertardatos1 ="UPDATE flexi_web.hoteles SET foto$contador2 = '$target_path' WHERE id ='$hotel_seleccionado'";	
				$ejecutarinsertar111 = mysqli_query($enlace,$insertardatos1);	
				} else {	
				echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>";
			}
			closedir($dir); //Cerramos el directorio de destino
		}
	}


	$insertardatos1 ="UPDATE flexi_web.hoteles SET 
	equi1='$equi1',
	equi2='$equi2',
	equi3='$equi3',
	equi4='$equi4',
	equi5='$equi5',
	maps='$maps',
	tripad='$tripad',
	text1='$texto1',
	text2='$texto2',
	text3='$texto3',
	subtitulo3='$subtitulo3',
	titulo3='$titulo3',
	text3='$texto3',
	subtitulo4='$subtitulo4',
	titulo4='$titulo4',
	text4='$texto4',
	marcavisiblehotel='$aceptado'
	WHERE id ='$hotel_seleccionado'";
	$ejecutarinsertar111 = mysqli_query($enlace,$insertardatos1);
	if($userhotel == '1'){

		header("Location: hotel/index.php#paginavisible");

	
	}

	header("Location: usuarios-backoffice-concretoh.php?hotel=$hotel_seleccionado#paginavisible");
?>