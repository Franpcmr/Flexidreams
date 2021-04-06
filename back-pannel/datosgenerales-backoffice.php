<?php
require '../conexion.php';
$error = $_GET['enviado'];
$errorg = $_GET['enviadog'];
$tipo_error = $_GET['tipo'];
$tipo_env_error = $_GET['tipo_cat'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Panel De Control</title>

   <!-- Bootstrap core CSS -->
   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/simple-sidebar.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/60b8617b2a.js" crossorigin="anonymous"></script>
<link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<link href="style2panel.css" rel="stylesheet">

    <script>
    function comprobarerrores() {
        var error = '<?php echo $error?>'
        var tipo_error = '<?php echo $tipo_error?>'
        var tipo_env_error = '<?php echo $tipo_env_error?>'
        var errorg = '<?php echo $errorg?>'
        if (error == 'error' && tipo_error == 'categoria') {
            document.getElementById("errorcategoria").style.display = 'inline';
            document.getElementById("errorcategoriamensj").innerHTML = 'No debes tener equipamiento en ' +
                tipo_env_error + ' para poder borrarlo.';
        } else if (error == 'true') {
            document.getElementById("noerrorcategoria").style.display = 'inline';
            document.getElementById("errorcategoriamensjok").innerHTML = 'La categoria ' + tipo_env_error +
                ' se ha borrado correctamente';
        }
        if (errorg == 'true') {
            document.getElementById("borradogeneralok").style.display = 'inline';
        }
    }


    function borrarcatequipamiento() {
        let borrarsi = confirm("Estas seguro de borrarlo?");

        if (borrarsi == true) {
            var categoriaequipamiento = document.getElementById("categoriaequipamientoselect").value;
            window.location.replace("datosgenerales-backoffice-borrarequipamiento.php?tipo=" + categoriaequipamiento);
        }
    }

    function borrarequipamiento_real() {
        let borrarsi = confirm("Estas seguro de borrarlo?");

        if (borrarsi == true) {
            var categoriaequipamiento = document.getElementById("equipamientorealselect").value;
            window.location.replace("datosgenerales-backoffice-borrarequipamiento-real.php?tipo=" +
                categoriaequipamiento);
        }
    }

    function borrarservicios() {
        let borrarsi = confirm("Estas seguro de borrarlo?");

        if (borrarsi == true) {
            var categoriaequipamiento = document.getElementById("borrarserviciosselect").value;
            window.location.replace("datosgenerales-backoffice-borrarservicio.php?tipo=" + categoriaequipamiento);
        }
    }

    function borrartipohoteles() {
        let borrarsi = confirm("Estas seguro de borrarlo?");

        if (borrarsi == true) {
            var categoriaequipamiento = document.getElementById("tipodehotelesselect").value;
            window.location.replace("datosgenerales-backoffice-borrartipohotel.php?tipo=" + categoriaequipamiento);
        }
    }

    function borrarlocalizaciones() {
        let borrarsi = confirm("Estas seguro de borrarlo?");

        if (borrarsi == true) {
            var categoriaequipamiento = document.getElementById("borrarlocalizacionesselect").value;
            window.location.replace("datosgenerales-backoffice-borrarlocalizacion.php?tipo=" + categoriaequipamiento);
        }
    }

    function añadircatequipamiento() {
        var display = document.getElementById("divañadircategoria").style.display;
        console.log(display);
        if (display == "none") {
            document.getElementById("divañadircategoria").style.display = 'inline';
        } else {
            document.getElementById("divañadircategoria").style.display = 'none';
        }
    }

    function buscarcategoriaa() {
        document.getElementById("categoriaequipamiento").submit();
    }

    function añadircequipamiento() {
        var display = document.getElementById("divañadirequipamiento").style.display;

        if (display == "none") {
            document.getElementById("divañadirequipamiento").style.display = 'inline';
        } else {
            document.getElementById("divañadirequipamiento").style.display = 'none';
        }
    }

    function añadirtipohotel() {
        var display = document.getElementById("divañadirtipohotel").style.display;

        if (display == "none") {
            document.getElementById("divañadirtipohotel").style.display = 'inline';
        } else {
            document.getElementById("divañadirtipohotel").style.display = 'none';
        }
    }


    function añadirlocalizacion() {
        var display = document.getElementById("divañadirlocalizacion").style.display;

        if (display == "none") {
            document.getElementById("divañadirlocalizacion").style.display = 'inline';
        } else {
            document.getElementById("divañadirlocalizacion").style.display = 'none';
        }
    }

    function añadirservicio() {
        var display = document.getElementById("divañadirservicio").style.display;

        if (display == "none") {
            document.getElementById("divañadirservicio").style.display = 'inline';
        } else {
            document.getElementById("divañadirservicio").style.display = 'none';
        }
    }
    </script>

<body onload="comprobarerrores()">

    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">Flexidreams</div>
            <div class="list-group list-group-flush">
            <a href="editar-index-backoffice.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-home"></i>&nbsp;Index</a>
                <a href="datosgenerales-backoffice.php" class="list-group-item list-group-item-action bg-light"><i
                        class="fas fa-concierge-bell"></i>&nbsp;Datos generales</a>
                <a href="usuarios-backoffice.php" class="list-group-item list-group-item-action bg-light"><i
                        class="fas fa-user-plus"></i>&nbsp;Usuarios</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">


            <div class="container-fluid">
                <br>

                <div class="stickytop"><button class="btn btn-light" id="menu-toggle"> <i
                            class="fas fas fa-bars"></i></button></div>
                <br>

                <div class="carta-box">
                    <div class="row setup-content justify-content-center">
                        <div class="col-xs-12 col-md-12 col-xl-12">
                            <h1 align=center>Datos Generales</h1>
                        </div>
                        <div class="col-xs-12 col-md-12 col-xl-12" id=borradogeneralok style="display: none;">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <a>Se ha borrado correctamente</a>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row setup-content justify-content-center">
                    <div class="col-xs-12 col-md-12 col-xl-10">
                        <div class="card-in shadow2">
                            <h2>Tipo de Equipamiento</h2>
                            <div class="row setup-content justify-content-center">
                                <div class="col-xs-12 col-md-6 col-xl-6">
                                    <div class="card shadow2">
                                        <div class="row setup-content justify-content-center">
                                            <div class="col-xs-12 col-md-12 col-xl-12">
                                                <h2>Grupo de equipamiento</h2>
                                            </div>

                                            <div class="col-xs-12 col-md-12 col-xl-6">
                                                <form id=categoriaequipamiento
                                                    action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?> "
                                                    method="post"  enctype="multipart/form-data">
                                                    <select class="selectpicker" onchange="buscarcategoriaa()"
                                                        id=categoriaequipamientoselect name="tipo_equipamiento"
                                                        data-size="5" data-live-search="true">
                                                        <?php
                                    $tipo_equipamiento = $_POST['tipo_equipamiento'];

                                $insertardatos1 = "SELECT * FROM flexi_web.tipo_equipaminetos GROUP BY tipo";
                                $ejecutarinsertar1 = mysqli_query($enlace,$insertardatos1);
                                $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
                                $contarfilas3 = mysqli_num_rows($ejecutarinsertar1);
                                $tipo_v = $numero_filas1['tipo'];
                                $contador = 0;
                                echo'<option > </option>';
                                for($ii=1; $ii<=$contarfilas3; $ii++){
                                    if ($numero_filas1['tipo'] <> $tipo_v || $numero_filas1['tipo'] == $tipo_v && $contador == 0){
                                        if($tipo_equipamiento == $numero_filas1['tipo']){
                                            echo'<option selected>'.$tipo_equipamiento.'</option>';
                                 
                                    $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
                                        }else{
                                            echo'<option >'.$numero_filas1['tipo'].'</option>';
                                            $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
                                        }
                                    }
                                }
                                ?>

                                                    </select>
                                                    <hr>
                                            </div>


                                            <div class="col-xs-12 col-md-12 col-xl-6">
                                                <button type="button" onclick="borrarcatequipamiento()"
                                                    class="btn btn-danger">Borrar</button>
                                                <button type="button" onclick="añadircatequipamiento()"
                                                    class="btn btn-warning">Añadir </button>
                                            </div>
                                            <div class="col-xs-12 col-md-12 col-xl-12" id=errorcategoria
                                                style="display: none;">
                                                <div class="alert alert-warning alert-dismissible fade show"
                                                    role="alert">
                                                    <a id=errorcategoriamensj></a>
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-md-12 col-xl-12" id=noerrorcategoria
                                                style="display: none;">
                                                <div class="alert alert-success alert-dismissible fade show"
                                                    role="alert">
                                                    <a id=errorcategoriamensjok></a>
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        </form>

                                        <div class="row setup-content justify-content-center" id=divañadircategoria
                                            style="display: none;">
                                            <div class="col-xs-12 col-md-12 col-xl-12">
                                                <br>
                                                <h3>Añadir Categoría</h3>
                                            </div>

                                            <div class="col-xs-12 col-md-12 col-xl-12">
                                                <form action="datosgenerales-backoffice-añadircatequipamiento.php"
                                                    method="post">
                                                    <input maxlength="100" name=tipo autocomplete="off" type="text"
                                                        required="required" class="form-control"
                                                        placeholder="Nombre del grupo" />
                                                    <hr>
                                                    <a target="_blank" href="https://fontawesome.com/icons?d=gallery">Lista de iconos</a>
                                                    <input maxlength="100" name="icono_tipo" autocomplete="off" type="text"
                                                  class="form-control"
                                                        placeholder="codigo icono" />
                                                    <hr>
                                            </div>


                                            <div class="col-xs-12 col-md-12 col-xl-12">
                                                <button style="width: 100%;" type="submit"
                                                    class="btn btn-warning">Añadir Categoría</button>
                                                </form>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="col-xs-12 col-md-6 col-xl-6">
                                    <div class="card shadow2">
                                        <div class="row setup-content justify-content-center">
                                            <div class="col-xs-12 col-md-12 col-xl-12">
                                                <h2>Equipamiento <?php echo $tipo_equipamiento
                                                    ?></h2>
                                            </div>
                                            <div class="col-xs-12 col-md-12 col-xl-6">
                                                <select id=equipamientorealselect class="selectpicker"
                                                    name="equipamiento" data-size="5" data-live-search="true">
                                                    <?php
                                $insertardatos1 = "SELECT * FROM flexi_web.tipo_equipaminetos where tipo = '$tipo_equipamiento' and equipamientos <> ''";
                                $ejecutarinsertar1 = mysqli_query($enlace,$insertardatos1);
                                $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
                                $contarfilas3 = mysqli_num_rows($ejecutarinsertar1);
                              
                                for($ii=1; $ii<=$contarfilas3; $ii++){
                                 
                                    echo'<option>'.$numero_filas1['equipamientos'].'</option>';
                                    $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
                                
                                }
                                ?>

                                                </select>
                                                <hr>
                                            </div>

                                            <div class="col-xs-12 col-md-12 col-xl-6">

                                                <button type="button" onclick="borrarequipamiento_real()"
                                                    class="btn btn-danger">Borrar</button>
                                                <button type="button" onclick="añadircequipamiento()"
                                                    class="btn btn-warning">Añadir</button>
                                            </div>

                                        </div>
                                        <div class="row setup-content justify-content-center" id=divañadirequipamiento
                                            style="display: none;">
                                            <div class="col-xs-12 col-md-12 col-xl-12">
                                                <br>
                                                <h3>Categoría y nuevo Equipamiento</h3>

</h3>
                                            </div>

                                            <div class="col-xs-12 col-md-12 col-xl-12">
                                                <form action="datosgenerales-backoffice-añadirequipamiento.php"
                                                    method="post"enctype="multipart/form-data">
                                                    <select class="selectpicker"  name=tipo_equipamientoadd  id=equipamiento
                                                       data-size="5"
                                                        data-live-search="true">
                                                        <?php
                                    $tipo_equipamiento = $_POST['tipo_equipamiento'];
                                
                                $insertardatos1 = "SELECT * FROM flexi_web.tipo_equipaminetos GROUP BY tipo";
                                $ejecutarinsertar1 = mysqli_query($enlace,$insertardatos1);
                                $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
                                $contarfilas3 = mysqli_num_rows($ejecutarinsertar1);
                                $tipo_v = $numero_filas1['tipo'];
                                $contador = 0;
                               
                                for($ii=1; $ii<=$contarfilas3; $ii++){
                                    if ($numero_filas1['tipo'] <> $tipo_v || $numero_filas1['tipo'] == $tipo_v && $contador == 0){
                                    echo'<option value="'.$numero_filas1['tipo'].'">'.$numero_filas1['tipo'].'</option>';
                                    $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
                                    }
                                }
                                ?>

                                                    </select>
                                                    <hr>
                                            </div>




                                            <div class="col-xs-12 col-md-12 col-xl-12">
                                            
                                                    <input maxlength="100" name=equipamientoadd autocomplete="off"
                                                        type="text" required="required" class="form-control"
                                                        placeholder="Nombre de equipamiento" />
                                                    <hr>
                                                    <a target="_blank" href="https://fontawesome.com/icons?d=gallery">Lista de iconos</a>
                                                    <input maxlength="100" name="icono_equipamiento" autocomplete="off" type="text"
                                                       class="form-control"
                                                        placeholder="codigo icono" />
                                                    <hr>
                                            </div>
                                            <div class="col-xs-12 col-md-12 col-xl-12">
                                                <button style="width: 100%;" type="submit"
                                                    class="btn btn-warning">Añadir Equipamiento</button>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row setup-content justify-content-center">
                    <div class="col-xs-12 col-md-12 col-xl-4">
                        <div class="card shadow2">
                            <h2>Tipo de servicios</h2>
                            <div class="row setup-content justify-content-center">
                                <div class="col-xs-12 col-md-12 col-xl-6">
                                    <form action="datosgenerales-backoffice-añadirservicio.php" method="post"  enctype="multipart/form-data">
                                        <select id=borrarserviciosselect class="selectpicker" id=selectservicios
                                            name="localizacion" data-size="5" data-live-search="true">
                                            <?php
                                    $tipo_equipamiento = $_POST['servicio'];
                                
                                $insertardatos1 = "SELECT * FROM flexi_web.tipos_servicios";
                                $ejecutarinsertar1 = mysqli_query($enlace,$insertardatos1);
                                $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
                                $contarfilas3 = mysqli_num_rows($ejecutarinsertar1);
                                $tipo_v = $numero_filas1['servicio'];
                                $contador = 0;
                               
                                for($ii=1; $ii<=$contarfilas3; $ii++){
                                    if ($numero_filas1['servicio'] <> $tipo_v || $numero_filas1['servicio'] == $tipo_v && $contador == 0){
                                    echo'<option>'.$numero_filas1['servicio'].'</option>';
                                    $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
                                    }
                                }
                                ?>

                                        </select>
                                        <hr>
                                </div>


                                <div class="col-xs-12 col-md-12 col-xl-12">
                                    <button type="button" onclick="borrarservicios()" style="width: 49%;"
                                        class="btn btn-danger">Borrar</button>
                                    <button type="button" onclick="añadirservicio()" style="width: 49%;"
                                        class="btn btn-warning">Añadir </button>
                                </div>
                            </div>
                            <div class="row setup-content " id=divañadirservicio style="display: none;">


                                <div class="col-xs-12 col-md-12 col-xl-12">
                                    <br>
                                    <h3>Añadir servicio</h3>
                                    <form action="datosgenerales-backoffice-añadirservicio.php" method="post" enctype="multipart/form-data" >
                                        <input maxlength="100" name=servicios autocomplete="off" type="text"
                                            required="required" class="form-control"
                                            placeholder="Nombre de la servicio" />
                                        <hr>
                                        <label class="control-label">imagen del servicio</label>
                                                    <input type="file" name="imagen2" class="form-control" placeholder="" /><br>
                                </div>
                                <div class="col-xs-12 col-md-12 col-xl-12">
                                    <button style="width: 100%;" type="submit" class="btn btn-warning">Añadir
                                        tipo</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-12 col-xl-4">
                        <div class="card shadow2">
                            <h2>Tipo de hoteles</h2>

                            <div class="row setup-content justify-content-center">
                                <div class="col-xs-12 col-md-12 col-xl-6">
                                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
                                        <select id=tipodehotelesselect class="selectpicker" id=selecttipohoteles
                                            name="tipo_equipamiento" data-size="5" data-live-search="true">
                                            <?php
                                    $tipo_equipamiento = $_POST['tipo_equipamiento'];
                                
                                $insertardatos1 = "SELECT * FROM flexi_web.tipo_hoteles";
                                $ejecutarinsertar1 = mysqli_query($enlace,$insertardatos1);
                                $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
                                $contarfilas3 = mysqli_num_rows($ejecutarinsertar1);
                                $tipo_v = $numero_filas1['tipo_de_hotel'];
                                $contador = 0;
                               
                                for($ii=1; $ii<=$contarfilas3; $ii++){
                                    if ($numero_filas1['tipo_de_hotel'] <> $tipo_v || $numero_filas1['tipo_de_hotel'] == $tipo_v && $contador == 0){
                                    echo'<option>'.$numero_filas1['tipo_de_hotel'].'</option>';
                                    $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
                                    }
                                }
                                ?>

                                        </select>
                                        <hr>
                                </div>


                                <div class="col-xs-12 col-md-12 col-xl-12">
                                    <button type="button" onclick="borrartipohoteles()" style="width: 49%;"
                                        class="btn btn-danger">Borrar</button>
                                    <button type="button" onclick="añadirtipohotel()" style="width: 49%;"
                                        class="btn btn-warning">Añadir </button>
                                </div>
                                </form>
                            </div>
                            <div class="row setup-content " id=divañadirtipohotel style="display: none;">


                                <div class="col-xs-12 col-md-12 col-xl-12">
                                    <br>
                                    <h3>Añadir tipo de hoteles</h3>
                                    <form action="datosgenerales-backoffice-añadirtipohotel.php" method="post" enctype="multipart/form-data">
                                        <input maxlength="100" name=tiponombre autocomplete="off" type="text"
                                            required="required" class="form-control"
                                            placeholder="Nombre del tipo de hotel" />
                                        <hr>
                                </div>
                                <div class="col-xs-12 col-md-12 col-xl-12">
                                    <button style="width: 100%;" type="submit" class="btn btn-warning">Añadir
                                        tipo</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                        </form>

                    </div>
             
            <div class="col-xs-12 col-md-12 col-xl-4">
                <div class="card shadow2">
                    <h2 ID=codigohref>Codigos de oferta</h2>
                    <div class="row setup-content justify-content-center">
                        <div class="col-xs-12 col-md-12 col-xl-6">

                            <select class="selectpicker" id=selectcodigooferta data-size="5" data-live-search="true">
                                <?php
                                    
                                
                                $insertardatos1 = "SELECT * FROM flexi_web.codigos_ofertas where hotel = '$hotelseleccionado'";
                                $ejecutarinsertar1 = mysqli_query($enlace,$insertardatos1);
                                $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
                                $contarfilas3 = mysqli_num_rows($ejecutarinsertar1);
                                $tipo_v = $numero_filas1['codigo_general'];
                                $contador = 0;
                                echo'<option></option>';
                                for($ii=1; $ii<=$contarfilas3; $ii++){
                                    if ($numero_filas1['codigo_general'] <> $tipo_v || $numero_filas1['codigo_general'] == $tipo_v && $contador == 0){
                                    echo'<option value='.$numero_filas1['id'].'>'.$numero_filas1['codigo_general'].' - '.$numero_filas1['oferta'].'%</option>';
                                    $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
                                    }
                                }
                                ?>

                            </select>
                            <hr>
                        </div>


                        <div class="col-xs-12 col-md-12 col-xl-12">
                            <button type="button" onclick="eliminarofertahotel()" style="width: 49%;"
                                class="btn btn-danger">Borrar</button>
                            <button type="button" onclick="añadirservicio()" style="width: 49%;"
                                class="btn btn-warning">Añadir </button>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>

                    <div class="col-xs-12 col-md-12 col-xl-4">
                        <div class="card shadow2">
                            <h2>Localizaciones</h2>
                            <div align=center class="row setup-content justify-content-center">
                                <div class="col-xs-12 col-md-12 col-xl-6">
                                    <form action="datosgenerales-backoffice-añadirlocalizacion.php" method="post" enctype="multipart/form-data">
                                        <select id=borrarlocalizacionesselect class="selectpicker"
                                            id=selectlocalizaciones name="localizacion" data-size="5"
                                            data-live-search="true">
                                            <?php
                                    $tipo_equipamiento = $_POST['localizacion'];
                                
                                $insertardatos1 = "SELECT * FROM flexi_web.localizaciones";
                                $ejecutarinsertar1 = mysqli_query($enlace,$insertardatos1);
                                $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
                                $contarfilas3 = mysqli_num_rows($ejecutarinsertar1);
                                $tipo_v = $numero_filas1['localizacion'];
                                $contador = 0;
                               
                                for($ii=1; $ii<=$contarfilas3; $ii++){
                                    if ($numero_filas1['localizacion'] <> $tipo_v || $numero_filas1['localizacion'] == $tipo_v && $contador == 0){
                                    echo'<option>'.$numero_filas1['localizacion'].'</option>';
                                    $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
                                    }
                                }
                                ?>

                                        </select>
                                        <hr>
                                </div>


                                <div class="col-xs-12 col-md-12 col-xl-12">
                                    <button type="button" onclick="borrarlocalizaciones()" style="width: 49%;"
                                        class="btn btn-danger">Borrar</button>
                                    <button type="button" onclick="añadirlocalizacion()" style="width: 49%;"
                                        class="btn btn-warning">Añadir </button>
                                </div>
                            </div>
                            <div class="row setup-content " id=divañadirlocalizacion style="display: none;">


                                <div class="col-xs-12 col-md-12 col-xl-12">
                                    <br>
                                    <h3>Añadir Localizaciones</h3>
                                    <form action="datosgenerales-backoffice-añadirlocalizacion.php" method="post" enctype="multipart/form-data">
                                        <input maxlength="100" name=localizacion autocomplete="off" type="text"
                                            required="required" class="form-control"
                                            placeholder="Nombre de la Localizacion" />
                                        <hr>
                                </div>
                                <div class="col-xs-12 col-md-12 col-xl-12">
                                    <button style="width: 100%;" type="submit" class="btn btn-warning">Añadir
                                        tipo</button>
                                    </form>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
             
            </div>


        </div>

    </div>
    <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



    <!-- Latest compiled and minified CSS -->


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>


    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>