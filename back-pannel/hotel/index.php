<?php
require '../../conexion.php';



session_start();
$user = $_SESSION['usuario'];
if (!isset($_SESSION['usuario'])) {
  header("Location: index.php");
}
if ($_SESSION['tipo'] != "2") {
    header("Location: ../../index.php");
  }
$error = $_GET['enviado'];
$categoria_equip = $_GET['categoria_equip'];
$errorg = $_GET['enviadog'];
$equipamiento = $_GET['equipamiento'];
$tipo_error = $_GET['tipo'];
$tipo_env_error = $_GET['tipo_cat'];
$habitacion_sel = $_GET['habitacion'];
$fechasseleccionadas = $_GET['fechasseleccionadas'];
$insertardatosh = "SELECT * FROM flexi_web.hoteles where usuario = '$user'";
$ejecutarinsertarh = mysqli_query($enlace,$insertardatosh);
$contarfilas = mysqli_num_rows($ejecutarinsertarh);
$numero_filash = mysqli_fetch_array($ejecutarinsertarh);
$hotelseleccionado = $numero_filash['id'];
$usuariohotel = $numero_filash['usuario'];
$maps = str_replace("%20", " ", $numero_filash['maps']);
$insertardatoshc = "SELECT * FROM flexi_web.usuarios where id = '$user'";
$ejecutarinsertarhc = mysqli_query($enlace,$insertardatoshc);
$contarfilasc = mysqli_num_rows($ejecutarinsertarhc);
$numero_filashc = mysqli_fetch_array($ejecutarinsertarhc);
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
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="style2panel.css" rel="stylesheet">

    <script>
    function entrarhoteles(hotel) {

        window.location.replace("index.php?hotel=" + hotel);
    }

    function entrarclientes(cliente) {

        window.location.replace("index.php?cliente=" + cliente);
    }

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


        var ubi1 = document.getElementById("ubicacion1s").value;
        var ubi2 = document.getElementById("ubicacion2s").value;
        var ubi3 = document.getElementById("ubicacion3s").value;
        var categoria = document.getElementById("categorias").value;
        var tipodehabitacion = document.getElementById("tipodehabitacions").value;
        var pregunta = document.getElementById("pregunta_seguridads").value;
        document.getElementById("ubicacion1").value = ubi1;
        document.getElementById("ubicacion2").value = ubi2;
        document.getElementById("ubicacion3").value = ubi3;

        document.getElementById("categoria").value = categoria;
        document.getElementById("tipodehabitacion").value = tipodehabitacion;
        document.getElementById("pregunta_seguridad").value = pregunta;
        var tipo1 = document.getElementById("tipo1s").value;
        var tipo2 = document.getElementById("tipo2s").value;
        var tipo3 = document.getElementById("tipo3s").value;
        document.getElementById("tipo1").value = tipo1;
        document.getElementById("tipo2").value = tipo2;
        document.getElementById("tipo3").value = tipo3;
        var servicioseleccionados = document.getElementById("servicioseleccionados").value;
        document.getElementById("servicioseleccionado").value = servicioseleccionados;
    }

    function cambiarfechasselect() {
        var tipodehabitacion = document.getElementById("tipodehabitacions").value;
        document.getElementById("tipodehabitacion").value = tipodehabitacion;
        var servicioseleccionados = document.getElementById("servicioseleccionados").value;
        document.getElementById("servicioseleccionado").value = servicioseleccionados;
    }

    function seleccionarfechas(id) {
        window.location.replace("index.php?hotel=" + <?php echo $hotelseleccionado?> +
            "&fechasseleccionadas=" + id + "#fechashref");
    }

    function seleccionarhabitacion(id) {
        window.location.replace("index.php?hotel=" + <?php echo $hotelseleccionado?> +
            "&habitacion=" + id + "#habitacioneshref");


    }

    function añadirserviciohotel(id) {

        window.location.replace("index.php?hotel=" + <?php echo $hotelseleccionado?> +
            "&servicio=" + id);
    }

    function añadirequipamientohotel(id) {

        window.location.replace("index.php?hotel=" + <?php echo $hotelseleccionado?> +
            "&equipamiento=" + id);
    }

    function eliminarequipamientohotel(id) {

        window.location.replace("index.php?hotel=" +
            <?php echo $hotelseleccionado?> +
            "&equipamiento=" + id);
    }

    function eliminarofertahotel() {
        var id = document.getElementById("selectcodigooferta").value;

        window.location.replace("index.php?hotel=" +
            <?php echo $hotelseleccionado?> +
            "&oferta=" + id);
    }

    function eliminarserviciohotel(id) {

        window.location.replace("index.php?hotel=" + <?php echo $hotelseleccionado?> +
            "&servicio=" + id);
    }
    x = true;

    function añadirusuarios() {

        if (x == true) {
            x = false;
            document.getElementById("h1añadirusuarios").innerHTML =
                'Añadir Usuarios&nbsp;<i class="far fa-caret-square-down"></i>';

        } else {
            x = true;
            document.getElementById("h1añadirusuarios").innerHTML =
                'Añadir Usuarios&nbsp;<i class="far fa-plus-square"></i>';


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

    function selects() {
        var ubi1 = document.getElementById("ubicacion1s").value;
        var ubi2 = document.getElementById("ubicacion2s").value;
        var ubi3 = document.getElementById("ubicacion3s").value;
        var categoria = document.getElementById("categorias").value;
        var tipo1 = document.getElementById("tipo1s").value;
        var tipo2 = document.getElementById("tipo2s").value;
        var tipo3 = document.getElementById("tipo3s").value;

    
        document.getElementById("ubicacion1").value = ubi1;
        document.getElementById("ubicacion2").value = ubi2;
        document.getElementById("ubicacion3").value = ubi3;
        document.getElementById("categoria").value = categoria;
        document.getElementById("tipo1").value = tipo1;
        document.getElementById("tipo2").value = tipo2;
        document.getElementById("tipo3").value = tipo3;
       


    }

    function selectsvisible() {
        var equi1 = document.getElementById("equi1_s").value;
        var equi2 = document.getElementById("equi2_s").value;
        var equi3 = document.getElementById("equi3_s").value;
        var equi4 = document.getElementById("equi4_s").value;
        var equi5 = document.getElementById("equi5_s").value;
        document.getElementById("equi1").value = equi1;
        document.getElementById("equi2").value = equi2;
        document.getElementById("equi3").value = equi3;
        document.getElementById("equi4").value = equi4;
        document.getElementById("equi5").value = equi5;
    }

    function modificarequipamientohotel(equipamiento) {
        window.location.replace("index.php?hotel=" + <?php echo $hotelseleccionado?> +
            "&equipamiento=" + equipamiento);
    }
    </script>

<body onload="comprobarerrores()">



    <div class="col-xs-12 col-md-12 col-xl-12">
        <div class="card-in-u-u shadow2">
            <h1>Perfil de Usuario</h1>
            <div class="row setup-content justify-content-center">
                <div class="col-xs-12 col-md-12 col-xl-12">
                    <hr>

                </div>
                <div class="col-xs-12 col-md-4 col-xl-4">
                    <div class="col-md-12">
                        <div class="form-group">
                            <form action="usuarios-backoffice-perfil-concretoh-update.php" method="post">
                                <label class="control-label">Nombre de Usuario</label>
                                <input disabled=»disabled» maxlength="100" type="text" name="nombre_usuario"
                                    class="form-control" placeholder=""
                                    value="<?php echo $numero_filashc['usuario'] ?>" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Pregunta de seguridad:</label><br>
                            <select onchange="selects()" style="width: 100%;" data-width="100%" id="pregunta_seguridads"
                                class="selectpicker">
                                <option style="display: none;">
                                    <?php echo $numero_filashc['pregunta_seg'] ?>
                                </option>
                                <option>Pregunta 1</option>
                                <option>Pregunta 2</option>
                                <option>Pregunta 3</option>
                            </select>
                        </div>

                    </div>
                </div>
                <div style="display: none;" class="col-xs-12 col-md-12 col-xl-12">
                    <input maxlength="100" type="text" id="pregunta_seguridad" name="pregunta_seguridad"
                        class="form-control" placeholder="" value="" />
                </div>
                <div style="display: none;" class="col-xs-12 col-md-12 col-xl-12">
                    <input maxlength="100" type="text" name="hotelseleccionado" class="form-control" placeholder=""
                        value="<?php echo $hotelseleccionado?>" />
                </div>
                <div class="col-xs-12 col-md-4 col-xl-4">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">contraseña</label>
                            <input maxlength="100" type="password" name="contraseña"
                                value="<?php echo $numero_filashc['password'] ?>" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Respuesta a pregunta de seguridad</label>
                            <input maxlength="100" type="text" name="respuesta_seguridad" class="form-control"
                                placeholder="" value="<?php echo $numero_filashc['respuesta_seg'] ?>" />
                        </div>

                    </div>
                </div>
            </div>
            <div class="row setup-content justify-content-center">
                <div align=center class="col-xs-12 col-md-12 col-xl-12">
                    <button style="width: 70%;" type="submit" class="btn btn-primary">EDITAR</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-md-12 col-xl-12">
        <div class="card-in-u shadow2">
            <h1 id=perfilhotelhref>Perfil hotel</h1>
            <div class="row setup-content justify-content-center">
                <div class="col-xs-12 col-md-12 col-xl-12">
                    <hr>
                    <h3>Detalles del hotel</h3>
                </div>


                <div class="col-xs-12 col-md-4 col-xl-4">
                    <div class="col-md-12">
                        <form action="usuarios-backoffice-concretoh-update.php" method="post">
                            <div class="form-check">

                                <input class="form-check-input" type="checkbox" value="" id="checkbox1"
                                    name="on_request">
                                <label class="form-check-label" for="checkbox1">
                                    ON REQUEST
                                </label>
                            </div>
                            <div class="form-group">
                                <br>
                                <br>
                                <label class="control-label">Pais</label>
                                <input maxlength="100" type="text" name="pais" class="form-control" placeholder=""
                                    value="<?php echo $numero_filash['pais'] ?>" />
                            </div>

                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-xl-4">
                    <div class="col-md-12">

                        <div class="form-group">
                            <label class="control-label">Nombre del Hotel</label>
                            <input maxlength="100" type="text" name="nombre_hotel" class="form-control" placeholder=""
                                value="<?php echo $numero_filash['nombre_hotel'] ?>" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Provincia</label>
                            <input maxlength="100" name="provincia" type="text" class="form-control" placeholder=""
                                value="<?php echo $numero_filash['provincia'] ?>" />
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-xl-4">
                    <div class="col-md-12">

                        <div class="form-group">
                            <label class="control-label">Nombre fiscal</label>
                            <input maxlength="100" type="text" name="nombre_fiscal" class="form-control" placeholder=""
                                value="<?php echo $numero_filash['nombre_fiscal'] ?>" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Poblacion</label>
                            <input maxlength="100" type="text" name="poblacion" class="form-control" placeholder=""
                                value="<?php echo $numero_filash['poblacion'] ?>" />
                        </div>


                    </div>
                </div>
                <div class="col-xs-12 col-md-2 col-xl-1">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Nº Habitaciones</label>
                            <input maxlength="100" type="text" name="n_habitaciones" class="form-control" placeholder=""
                                value="<?php echo $numero_filash['n_habitaciones'] ?>" />
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-2 col-xl-2">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Categoria</label><br>
                            <select class="selectpicker" id=categorias data-size="5" data-live-search="true"
                                onchange="selects()">
                                <option style="display: none;" value="<?php echo $numero_filash['categoria'] ?>">
                                    <?php echo $numero_filash['categoria'] ?></option>
                                <option>★★★★★</option>
                                <option>★★★★</option>
                                <option>★★★</option>
                                <option>★★</option>
                                <option>★</option>
                                <option></option>
                            </select>
                        </div>
                        <div style="display: none;" class="col-xs-12 col-md-12 col-xl-12">
                            <input maxlength="100" id=categoria type="text" name="categoria_h" class="form-control"
                                placeholder="" value="" />
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-2 col-xl-1">
                    <div class="col-md-12">
                        <div class="form-group">
                            <a>Prioridad del hotel</a>
                            <br><br>
                            <input type="number" value="<?php echo $numero_filash['hotel_prioridad'] ?>"
                                name="hotel_prioridad" min="1" max="9">
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-xl-4">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">NIF</label>
                            <input maxlength="100" type="text" name="nif" class="form-control" placeholder=""
                                value="<?php echo $numero_filash['NIF'] ?>" />
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-xl-4">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">WEB</label>
                            <input maxlength="100" type="text" name="web" class="form-control" placeholder=""
                                value="<?php echo $numero_filash['pagina_web'] ?>" />
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12 col-xl-12">
                    <h3>Persona de contacto 1</h3>
                </div>
                <div class="col-xs-12 col-md-6 col-xl-6">
                    <div class="col-md-12">

                        <div class="form-group">
                            <label class="control-label">Nombre y apellido</label>
                            <input maxlength="100" type="text" name="quien_email1" class="form-control" placeholder=""
                                value="<?php echo $numero_filash['quien_email1'] ?>" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Cargo</label>
                            <input maxlength="100" type="text" name="cargo1" class="form-control" placeholder=""
                                value="<?php echo $numero_filash['cargo1'] ?>" />
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-xl-6">
                    <div class="col-md-12">

                        <div class="form-group">
                            <label class="control-label">Correo Electrónico</label>
                            <input maxlength="100" type="text" name="email1" class="form-control" placeholder=""
                                value="<?php echo $numero_filash['email1'] ?>" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Teléfono</label>
                            <input maxlength="100" type="text" name="telf1" class="form-control" placeholder=""
                                value="<?php echo $numero_filash['tlf1'] ?>" />
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-md-12 col-xl-12">
                    <h3>Persona de contacto 2</h3>
                </div>
                <div class="col-xs-12 col-md-6 col-xl-6">
                    <div class="col-md-12">

                        <div class="form-group">
                            <label class="control-label">Nombre y apellido</label>
                            <input maxlength="100" type="text" name="quien_email2" class="form-control" placeholder=""
                                value="<?php echo $numero_filash['quien_email2'] ?>" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Cargo</label>
                            <input maxlength="100" type="text" name="cargo2" class="form-control" placeholder=""
                                value="<?php echo $numero_filash['cargo2'] ?>" />
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-xl-6">
                    <div class="col-md-12">

                        <div class="form-group">
                            <label class="control-label">Correo Electrónico</label>
                            <input maxlength="100" type="text" name="email2" class="form-control" placeholder=""
                                value="<?php echo $numero_filash['email2'] ?>" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Teléfono</label>
                            <input maxlength="100" type="text" name="telf2" class="form-control" placeholder=""
                                value="<?php echo $numero_filash['tlf2'] ?>" />
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-md-12 col-xl-12">
                    <h3>Persona de contacto 3</h3>
                </div>
                <div class="col-xs-12 col-md-6 col-xl-6">
                    <div class="col-md-12">

                        <div class="form-group">
                            <label class="control-label">Nombre y apellido</label>
                            <input maxlength="100" type="text" name="quien_email3" class="form-control" placeholder=""
                                value="<?php echo $numero_filash['quien_email3'] ?>" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Cargo</label>
                            <input maxlength="100" type="text" name="cargo3" class="form-control" placeholder=""
                                value="<?php echo $numero_filash['cargo3'] ?>" />
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-xl-6">
                    <div class="col-md-12">

                        <div class="form-group">
                            <label class="control-label">Correo Electrónico</label>
                            <input maxlength="100" type="text" name="email3" class="form-control" placeholder=""
                                value="<?php echo $numero_filash['email3'] ?>" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Teléfono</label>
                            <input maxlength="100" type="text" name="telf3" class="form-control" placeholder=""
                                value="<?php echo $numero_filash['tlf3'] ?>" />
                        </div>

                    </div>
                </div>
            </div>

            <div class="row setup-content justify-content-center">
                <div class="col-xs-12 col-md-12 col-xl-6">
                    <h3>Ubicaciones del hotel</h3>
                    <div class="row setup-content justify-content-center">
                        <div class="col-xs-12 col-md-12 col-xl-4">
                            <a>Ubicación 1</a>
                            <hr>
                            <select onclick="selects()" class="selectpicker" data-size="5" data-live-search="true"
                                id="ubicacion1s">
                                <?php
                                    $tipo_equipamiento = $_POST['tipo_equipamiento'];

                                $insertardatos1 = "SELECT * FROM flexi_web.localizaciones";
                                $ejecutarinsertar1 = mysqli_query($enlace,$insertardatos1);
                                $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
                                $contarfilas3 = mysqli_num_rows($ejecutarinsertar1);
                                $tipo_v = $numero_filas1['localizacion'];
                                $contador = 0;
                                echo'<option style="display: none;" value="'.$numero_filash['localicacion1'].'">'.$numero_filash['localicacion1']. '</option>';
                                for($ii=1; $ii<=$contarfilas3; $ii++){
                                    if ($numero_filas1['localizacion'] <> $tipo_v || $numero_filas1['localizacion'] == $tipo_v && $contador == 0){
                                    echo'<option value="'.$numero_filas1['localizacion'].'">'.$numero_filas1['localizacion'].'</option>';
                                    $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
                                    }
                                }
                                ?>

                            </select>
                        </div>
                        <div style="display: none;" class="col-xs-12 col-md-12 col-xl-12">
                            <input maxlength="100" id="ubicacion1" type="text" name="ubicacion1" class="form-control"
                                placeholder="" value="" />
                        </div>
                        <div class="col-xs-12 col-md-12 col-xl-4">
                            <a>Ubicación 2</a>
                            <hr>
                            <select onchange="selects()" class="selectpicker" data-size="5" data-live-search="true"
                                id="ubicacion2s">
                                <?php
                                    $tipo_equipamiento = $_POST['tipo_equipamiento'];

                                $insertardatos1 = "SELECT * FROM flexi_web.localizaciones";
                                $ejecutarinsertar1 = mysqli_query($enlace,$insertardatos1);
                                $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
                                $contarfilas3 = mysqli_num_rows($ejecutarinsertar1);
                                $tipo_v = $numero_filas1['localizacion'];
                                $contador = 0;
                                echo'<option style="display: none;"  value="'.$numero_filash['localicacion2'].'">'.$numero_filash['localicacion2']. '</option>';
                                for($ii=1; $ii<=$contarfilas3; $ii++){
                                    if ($numero_filas1['localizacion'] <> $tipo_v || $numero_filas1['localizacion'] == $tipo_v && $contador == 0){
                                    echo'<option value="'.$numero_filas1['localizacion'].'">'.$numero_filas1['localizacion'].'</option>';
                                    $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
                                    }
                                }
                                ?>

                            </select>
                        </div>
                        <div style="display: none;" class="col-xs-12 col-md-12 col-xl-12">
                            <input maxlength="100" id="ubicacion2" type="text" name="ubicacion2" class="form-control"
                                placeholder="" value="" />
                        </div>
                        <div class="col-xs-12 col-md-12 col-xl-4">
                            <a>Ubicación 3</a>
                            <hr>
                            <select onchange="selects()" class="selectpicker" data-size="5" data-live-search="true"
                                id="ubicacion3s">
                                <?php
                                    $tipo_equipamiento = $_POST['tipo_equipamiento'];

                                $insertardatos1 = "SELECT * FROM flexi_web.localizaciones";
                                $ejecutarinsertar1 = mysqli_query($enlace,$insertardatos1);
                                $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
                                $contarfilas3 = mysqli_num_rows($ejecutarinsertar1);
                                $tipo_v = $numero_filas1['localizacion'];
                                $contador = 0;
                                echo'<option style="display: none;"  value="'.$numero_filash['localicacion3'].'">'.$numero_filash['localicacion3']. ' </option>';
                                for($ii=1; $ii<=$contarfilas3; $ii++){
                                    if ($numero_filas1['localizacion'] <> $tipo_v || $numero_filas1['localizacion'] == $tipo_v && $contador == 0){
                                    echo'<option value="'.$numero_filas1['localizacion'].'">'.$numero_filas1['localizacion'].'</option>';
                                    $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
                                    }
                                }
                                ?>

                            </select>

                        </div>
                        <div class="col-xs-12 col-md-12 col-xl-12">
                            <input style="display: none;" maxlength="100" id="ubicacion3" type="text" name="ubicacion3"
                                class="form-control" placeholder="" value="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="row setup-content justify-content-center">
                <div class="col-xs-12 col-md-12 col-xl-6">
                    <br>
                    <h3>Tipos para el hotel</h3>
                    <div class="row setup-content justify-content-center">
                        <div align=center class="col-xs-12 col-md-12 col-xl-4">
                            <a>Tipo 1</a>
                            <hr>
                            <select onchange="selects()" class="selectpicker" id=tipo1s data-size="5"
                                data-live-search="true">
                                <option style="display: none;" value="<?php echo $numero_filash['tipo_hotel1'] ?>">
                                    <?php echo $numero_filash['tipo_hotel1'] ?></option>

                                <?php
                                    $tipo_equipamiento = $_POST['localizacion'];

                                $insertardatos1 = "SELECT * FROM flexi_web.tipo_hoteles";
                                $ejecutarinsertar1 = mysqli_query($enlace,$insertardatos1);
                                $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
                                $contarfilas3 = mysqli_num_rows($ejecutarinsertar1);
                                $tipo_v = $numero_filas1['tipo_de_hotel'];
                                $contador = 0;

                                for($ii=1; $ii<=$contarfilas3; $ii++){
                                    if ($numero_filas1['tipo_de_hotel'] <> $tipo_v || $numero_filas1['tipo_de_hotel'] == $tipo_v && $contador == 0){
                                    echo'<option value="'.$numero_filas1['tipo_de_hotel'].'">'.$numero_filas1['tipo_de_hotel'].'</option>';
                                    $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
                                    }
                                }
                                ?>
                            </select>
                            <hr>
                            <a>Prioridad</a>
                            <br><br>
                            <input type="number" id="tentacles" value="<?php echo $numero_filash['tipo_prioridad1'] ?>"
                                name="tipo_prioridad1" min="1" max="9">
                        </div>
                        <div style="display: none;" class="col-xs-12 col-md-12 col-xl-12">
                            <input maxlength="100" id="tipo1" type="text" name="tipo1" class="form-control"
                                placeholder="" value="" />
                        </div>
                        <div align=center class="col-xs-12 col-md-12 col-xl-4">
                            <a>Tipo 2</a>
                            <hr>
                            <select onchange="selects()" class="selectpicker" id=tipo2s data-size="5"
                                data-live-search="true">
                                <option style="display: none;" value="<?php echo $numero_filash['tipo_hotel2'] ?>">
                                    <?php echo $numero_filash['tipo_hotel2'] ?></option>

                                <?php
                                    $tipo_equipamiento = $_POST['localizacion'];

                                $insertardatos1 = "SELECT * FROM flexi_web.tipo_hoteles";
                                $ejecutarinsertar1 = mysqli_query($enlace,$insertardatos1);
                                $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
                                $contarfilas3 = mysqli_num_rows($ejecutarinsertar1);
                                $tipo_v = $numero_filas1['tipo_de_hotel'];
                                $contador = 0;

                                for($ii=1; $ii<=$contarfilas3; $ii++){
                                    if ($numero_filas1['tipo_de_hotel'] <> $tipo_v || $numero_filas1['tipo_de_hotel'] == $tipo_v && $contador == 0){
                                    echo'<option value="'.$numero_filas1['tipo_de_hotel'].'">'.$numero_filas1['tipo_de_hotel'].'</option>';
                                    $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
                                    }
                                }
                                ?>

                            </select>

                            <hr>
                            <a>Prioridad</a>
                            <br><br>
                            <input type="number" id="tentacles" value="<?php echo $numero_filash['tipo_prioridad2'] ?>"
                                name="tipo_prioridad2" min="1" max="9">
                        </div>
                        <div style="display: none;" class="col-xs-12 col-md-12 col-xl-12">
                            <input maxlength="100" id="tipo2" type="text" name="tipo2" class="form-control"
                                placeholder="" value="" />
                        </div>
                        <div align=center class="col-xs-12 col-md-12 col-xl-4">
                            <a>Tipo 3</a>
                            <hr>
                            <select onchange="selects()" class="selectpicker" id=tipo3s data-size="5"
                                data-live-search="true">
                                <option style="display: none;" value="<?php echo $numero_filash['tipo_hotel3'] ?>">
                                    <?php echo $numero_filash['tipo_hotel3'] ?></option>

                                <?php
                                    $tipo_equipamiento = $_POST['localizacion'];

                                $insertardatos1 = "SELECT * FROM flexi_web.tipo_hoteles";
                                $ejecutarinsertar1 = mysqli_query($enlace,$insertardatos1);
                                $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
                                $contarfilas3 = mysqli_num_rows($ejecutarinsertar1);
                                $tipo_v = $numero_filas1['tipo_de_hotel'];
                                $contador = 0;

                                for($ii=1; $ii<=$contarfilas3; $ii++){
                                    if ($numero_filas1['tipo_de_hotel'] <> $tipo_v || $numero_filas1['tipo_de_hotel'] == $tipo_v && $contador == 0){
                                    echo'<option value="'.$numero_filas1['tipo_de_hotel'].'">'.$numero_filas1['tipo_de_hotel'].'</option>';
                                    $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
                                    }
                                }
                                ?>

                            </select>
                            <hr>
                            <a>Prioridad</a>
                            <br><br>
                            <input type="number" id="tentacles" value="<?php echo $numero_filash['tipo_prioridad3'] ?>"
                                name="tipo_prioridad3" min="1" max="9">
                        </div>
                        <div style="display: none;" class="col-xs-12 col-md-12 col-xl-12">
                            <input maxlength="100" id="tipo3" type="text" name="tipo3" class="form-control"
                                placeholder="" value="" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="row setup-content justify-content-center">
                <div class="col-xs-12 col-md-12 col-xl-12">
                    <br>
                    <div class="row setup-content justify-content-center">
                        <div class="col-xs-12 col-md-12 col-xl-12">
                            <h3>Observacion 1</h3>
                            <textarea style="width:100%;" name="observacion1"><?php echo $numero_filash['obser1'] ?>
</textarea>

                        </div>
                        <div style="display: none;" class="col-xs-12 col-md-12 col-xl-12">
                            <input maxlength="100" type="text" name="hotelseleccionado" class="form-control"
                                placeholder="" value="<?php echo $hotelseleccionado?>" />
                        </div>
                        <div class="col-xs-12 col-md-12 col-xl-12">
                            <br>
                            <button style="width: 100%;" type="submit" class="btn btn-primary">EDITAR</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-12 col-xl-12">
        <div class="card-in-u shadow2">
            <h1 id=equipamientohref>Equipamientos</h1>
            <div class="row setup-content justify-content-center">

                <div align=center class="col-xs-12 col-md-12 col-xl-8">


                    <div class="row setup-content justify-content-center">

                        <div align=center class="col-xs-12 col-md-12 col-xl-6">

                            <div class="tableFixHead">
                                <table class="table table-dark">
                                    <tr>
                                        <thead>
                                            <th colspan=3 scope="col">Equipamiento que ofrece
                                                Flexidreams</th>
                                        </thead>
                                    </tr>
                                    <tbody>

                                        <?php


                        $insertardatos11 = "SELECT * FROM flexi_web.tipo_equipaminetos WHERE equipamientos <> '' ORDER BY tipo";
                        $ejecutarinsertar11 = mysqli_query($enlace,$insertardatos11);
                        $contarfilas = mysqli_num_rows($ejecutarinsertar11);
                        $numero_filas11 = mysqli_fetch_array($ejecutarinsertar11);
                        $equipamientoanterior = ' ';
                        for($i=1; $i<=$contarfilas; $i++){

                            $GLOBAL = $equipamientoanterior;

                            if ($equipamientoanterior <> $numero_filas11['tipo']){
                                echo '<tr>

                          <td align=center colspan=3><b>'.$numero_filas11['icono'].'&nbsp;'.$numero_filas11['tipo'].'</b></td>
                                </tr>';

                            }

                          echo '<tr  id=tr3 onclick="añadirequipamientohotel('.$numero_filas11['id'].')">

                                <td align=center colspan=2>'.$numero_filas11['icono'].'&nbsp;'.$numero_filas11['equipamientos'].'</td>
                                  <td align=center><i class="far fa-arrow-alt-circle-right"></i>
                                  </td>
                                </tr>';
                                $equipamientoanterior = $numero_filas11['tipo'];
                                $numero_filas11 = mysqli_fetch_array($ejecutarinsertar11);

                        }

?> </tbody>
                                </table>
                            </div>

                        </div>
                        <div align=center class="col-xs-12 col-md-12 col-xl-6">

                            <div class="tableFixHead">
                                <table class="table table-dark">
                                    <tr>
                                        <thead>
                                            <th colspan=3 scope="col">Equipamiento del hotel</th>
                                        </thead>
                                    </tr>
                                    <tbody>

                                        <?php



$idequipamiento = $numero_filas22['equipamiento'];
$insertardatos11 = "SELECT * FROM flexi_web.tipo_equipaminetos,flexi_web.equipamientos_hotel WHERE tipo_equipaminetos.id = equipamientos_hotel.equipamiento AND hotel = '$hotelseleccionado' ORDER BY tipo";
$ejecutarinsertar11 = mysqli_query($enlace,$insertardatos11);
$contarfilas = mysqli_num_rows($ejecutarinsertar11);
$numero_filas11 = mysqli_fetch_array($ejecutarinsertar11);



                        $equipamientoanterior = ' ';
                        for($i=1; $i<=$contarfilas; $i++){

                            $GLOBAL = $equipamientoanterior;
                            $idequipamiento = $numero_filas22['equipamiento'];


                            if ($equipamientoanterior <> $numero_filas11['tipo']){
                                echo '<tr>

                          <td align=center colspan=3><b>'.$numero_filas11['tipo'].'</b></td>
                                </tr>';

                            }

                          echo '<tr  id=tr3>

                                <td onclick="modificarequipamientohotel('.$numero_filas11['equipamiento'].')" align=center colspan=2>'.$numero_filas11['equipamientos'].'</td>
                                  <td onclick="eliminarequipamientohotel('.$numero_filas11['equipamiento'].')" align=center><i class="fas fa-trash"></i>
                                  </td>
                                </tr>';
                                $equipamientoanterior = $numero_filas11['tipo'];
                                $numero_filas11 = mysqli_fetch_array($ejecutarinsertar11);



                        }
?> </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12 col-xl-4">
                    <div class="row setup-content justify-content-center">

                        <div align=center class="col-xs-12 col-md-4 col-xl-12">
                            <div class="col-md-12">
                                <form action="" method="post">

                                    <div class="form-group">
                                        <br>
                                        <br>
                                        <h1><?php




                                                        $insertardatos11 = "SELECT * FROM flexi_web.tipo_equipaminetos,flexi_web.equipamientos_hotel WHERE tipo_equipaminetos.id = equipamientos_hotel.equipamiento AND hotel = '$hotelseleccionado' and equipamiento = '$equipamiento'";
$ejecutarinsertar11 = mysqli_query($enlace,$insertardatos11);
$contarfilas = mysqli_num_rows($ejecutarinsertar11);
$numero_filas11 = mysqli_fetch_array($ejecutarinsertar11);




                                                        echo $numero_filas11['equipamientos']
                                                        ?></h1>
                                        <h3 style="color:#CBCBCB;"><?php echo $numero_filas11['tipo']?>
                                        </h3>
                                        <label class="control-label">Precio extra</label>
                                        <input maxlength="100" type="text" name="coste_extra_h" class="form-control"
                                            placeholder="" value="<?php echo $numero_filas11['coste_extra']?>" />
                                    </div>

                                    <div align=center class="col-xs-12 col-md-4 col-xl-12">
                                        <div class="col-md-12">
                                            <button style="width: 100%;" type="submit"
                                                class="btn btn-primary">EDITAR</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    </div>
    </div>
    <div class="col-xs-12 col-md-12 col-xl-7">
        <div class="card-in-u shadow2">
            <h1 id="serviciohref">Servicios</h1>
            <div class="row setup-content justify-content-center">

                <div align=center class="col-xs-12 col-md-12 col-xl-12">


                    <div class="row setup-content justify-content-center">

                        <div align=center class="col-xs-12 col-md-12 col-xl-6">

                            <div class="tableFixHead">
                                <table class="table table-dark">
                                    <tr>
                                        <thead>
                                            <th colspan=3 scope="col">Servicios que ofrece Flexidreams
                                            </th>
                                        </thead>
                                    </tr>
                                    <tbody>

                                        <?php


                        $insertardatos11 = "SELECT * FROM flexi_web.tipos_servicios";
                        $ejecutarinsertar11 = mysqli_query($enlace,$insertardatos11);
                        $contarfilas = mysqli_num_rows($ejecutarinsertar11);
                        $numero_filas11 = mysqli_fetch_array($ejecutarinsertar11);

                        for($i=1; $i<=$contarfilas; $i++){


                          echo '<tr  id=tr3 onclick="añadirserviciohotel('.$numero_filas11['id'].')">

                                <td align=center colspan=2>'.$numero_filas11['servicio'].'</td>
                                  <td align=center><i class="far fa-arrow-alt-circle-right"></i>
                                  </td>
                                </tr>';

                                $numero_filas11 = mysqli_fetch_array($ejecutarinsertar11);

                        }

?> </tbody>
                                </table>
                            </div>

                        </div>
                        <div align=center class="col-xs-12 col-md-12 col-xl-6">

                            <div class="tableFixHead">
                                <table class="table table-dark">
                                    <tr>
                                        <thead>
                                            <th colspan=3 scope="col">Servicios del hotel</th>
                                        </thead>
                                    </tr>
                                    <tbody>

                                        <?php



$idequipamiento = $numero_filas22['equipamiento'];
$insertardatos11 = "SELECT servicios_hotel.id,tipos_servicios.servicio FROM flexi_web.tipos_servicios,flexi_web.servicios_hotel WHERE tipos_servicios.id = servicios_hotel.servicio AND hotel = '$hotelseleccionado'";
$ejecutarinsertar11 = mysqli_query($enlace,$insertardatos11);
$contarfilas = mysqli_num_rows($ejecutarinsertar11);
$numero_filas11 = mysqli_fetch_array($ejecutarinsertar11);


                        for($i=1; $i<=$contarfilas; $i++){





                          echo '<tr  id=tr3>

                                <td onclick="modificarequipamientohotel('.$numero_filas11['servicio'].')" align=center colspan=2>'.$numero_filas11['servicio'].'</td>
                                  <td onclick="eliminarserviciohotel('.$numero_filas11['id'].')" align=center><i class="fas fa-trash"></i>
                                  </td>
                                </tr>';

                                $numero_filas11 = mysqli_fetch_array($ejecutarinsertar11);



                        }
?> </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-12 col-xl-8">
        <div class="card-in-u shadow2">
            <h1 id=habitacioneshref>Habitaciones</h1>
            <div class="row setup-content justify-content-center">

                <div align=center class="col-xs-12 col-md-12 col-xl-12">


                    <div class="row setup-content justify-content-center">

                        <div align=center class="col-xs-12 col-md-12 col-xl-6">

                            <div class="tableFixHead">
                                <table class="table table-dark">
                                    <tr>
                                        <thead>
                                            <th colspan=4 scope="col">Habitaciones hotel
                                            </th>
                                        </thead>
                                    </tr>
                                    <tbody>

                                        <?php


                        $insertardatos11 = "SELECT * FROM flexi_web.tipos_de_habitaciones WHERE hotel = '$hotelseleccionado'";
                        $ejecutarinsertar11 = mysqli_query($enlace,$insertardatos11);
                        $contarfilas = mysqli_num_rows($ejecutarinsertar11);
                        $numero_filas11 = mysqli_fetch_array($ejecutarinsertar11);

                        for($i=1; $i<=$contarfilas; $i++){


                          echo '<tr  id=tr3 onclick="seleccionarhabitacion('.$numero_filas11['id'].')">

                                <td onclick="seleccionarhabitacion('.$numero_filas11['id'].')" align=center colspan=2>'.$numero_filas11['tipo'].'</td>
                                <td onclick="seleccionarhabitacion('.$numero_filas11['id'].')" align=center><i class="fas fa-edit"></i>
                                <td onclick="eliminarhabitacionhotel('.$numero_filas11['id'].')" align=center><i class="fas fa-trash"></i>
                                </td>
                                </tr>';

                                
                                $numero_filas11 = mysqli_fetch_array($ejecutarinsertar11);

                        }

?> </tbody>
                                </table>
                            </div>

                        </div>
                        <div align=center class="col-xs-12 col-md-12 col-xl-6">

                            <div class="tableFixHead">
                                <h2>

                                    <?php

                                                        $insertardatos11 = "SELECT * FROM flexi_web.tipos_de_habitaciones WHERE hotel = '$hotelseleccionado' and id = '$habitacion_sel'";
$ejecutarinsertar11 = mysqli_query($enlace,$insertardatos11);
$contarfilas = mysqli_num_rows($ejecutarinsertar11);
$numero_filas11 = mysqli_fetch_array($ejecutarinsertar11);
if($contarfilas == 1){
    echo $numero_filas11['tipo'];
}else{
    echo "Añadir habitacion";
}
                                                        
                                                        ?>


                                </h2>
                                <form action="usuarios-backoffice-añadireditarhabitacionh.php" method="post">
                                    <label class="control-label">Tipo de Habitacion</label>
                                    <input maxlength="100" type="text" name="titulo_habitacion" class="form-control"
                                        placeholder="" value="<?php echo $numero_filas11['tipo']?>" />

                                    <label class="control-label">Nº Personas</label>
                                    <input maxlength="100" type="text" name="n_personas" class="form-control"
                                        placeholder="" value="<?php echo $numero_filas11['n_personas']?>" />

                                    <label class="control-label">Minimo de Personas</label>
                                    <input maxlength="100" type="text" name="min_personas" class="form-control"
                                        placeholder="" value="<?php echo $numero_filas11['min_personas']?>" />

                                    <label class="control-label">Maximo de Personas</label>
                                    <input maxlength="100" type="text" name="max_personas" class="form-control"
                                        placeholder="" value="<?php echo $numero_filas11['max_personas']?>" />

                               
                                    <input style="display: none;" maxlength="100" type="text" name="hotelseleccionado"
                                        class="form-control" placeholder="" value="<?php echo $hotelseleccionado?>" />
                                    <input style="display: none;" maxlength="100" type="text"
                                        name="habitacionseleccionada" class="form-control" placeholder=""
                                        value="<?php echo $habitacion_sel?>" />
                                    <br>
                                    <button style="width: 100%;" type="submit"
                                        class="btn btn-primary">EDITAR/AÑADIR</button>
                            </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-12 col-xl-12">
        <div class="row setup-content justify-content-center">
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
    </div>
    <div class="row setup-content justify-content-center">
        <div class="col-xs-12 col-md-12 col-xl-12">
            <div class="col-xs-12 col-md-12 col-xl-12">
                <div class="card-in-u shadow2">
                    <h1>Editar pagina visible del hotel</h1>
                    <div class="row setup-content justify-content-center">
                        <div class="col-xs-12 col-md-12 col-xl-12">
                            <hr>

                        </div>


                        <div class="col-xs-12 col-md-4 col-xl-12">
                            <div class="col-md-12">
                                <form id=paginavisible action="../usuarios-backoffice-concretoh-paginavisible.php"
                                    method="post" enctype="multipart/form-data">

                                    <div class="form-group">

                                        <label class="control-label">Equipamiento destacado 1</label><br>
                                        <input style="display: none;" maxlength="100" type="text" id=equi1 name="equi1"
                                            class="form-control" placeholder=""
                                            value="<?php echo  $numero_filash['equi1']?>" />
                                        <select onchange="selectsvisible()" class="selectpicker" id=equi1_s
                                            data-size="5" data-live-search="true">
                                            <?php
                                    
                                
                                $insertardatos1 = "SELECT * FROM flexi_web.equipamientos_hotel,flexi_web.tipo_equipaminetos where equipamientos_hotel.equipamiento = tipo_equipaminetos.id and hotel = '$hotelseleccionado'";
                                $ejecutarinsertar1 = mysqli_query($enlace,$insertardatos1);
                                $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
                                $contarfilas3 = mysqli_num_rows($ejecutarinsertar1);
                                $tipo_v = $numero_filas1['codigo_general'];
                                $contador = 0;
                                echo'<option>'.$numero_filash['equi1'].'</option>';
                                for($ii=1; $ii<=$contarfilas3; $ii++){
                                    if ($numero_filas1['codigo_general'] <> $tipo_v || $numero_filas1['codigo_general'] == $tipo_v && $contador == 0){
                                        echo'<option value="'.$numero_filas1['equipamientos'].'">'.$numero_filas1['tipo'].' - '.$numero_filas1['equipamientos'].'</option>';
                                    $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
                                    }
                                }
                                ?>

                                        </select>
                                        <hr>
                                    </div>

                                    <div class="form-group">

                                        <label class="control-label">Equipamiento destacado 2</label><br>
                                        <input style="display: none;" maxlength="100" type="text" id=equi2 name="equi2"
                                            class="form-control" placeholder=""
                                            value="<?php echo  $numero_filash['equi2']?> " />
                                        <select onchange="selectsvisible()" class="selectpicker" id=equi2_s
                                            data-size="5" data-live-search="true">
                                            <?php
                                    
                                
                                $insertardatos1 = "SELECT * FROM flexi_web.equipamientos_hotel,flexi_web.tipo_equipaminetos where equipamientos_hotel.equipamiento = tipo_equipaminetos.id and hotel = '$hotelseleccionado'";
                                $ejecutarinsertar1 = mysqli_query($enlace,$insertardatos1);
                                $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
                                $contarfilas3 = mysqli_num_rows($ejecutarinsertar1);
                                $tipo_v = $numero_filas1['codigo_general'];
                                $contador = 0;
                                echo'<option>'.$numero_filash['equi2'].'</option>';
                                for($ii=1; $ii<=$contarfilas3; $ii++){
                                    if ($numero_filas1['codigo_general'] <> $tipo_v || $numero_filas1['codigo_general'] == $tipo_v && $contador == 0){
                                        echo'<option value="'.$numero_filas1['equipamientos'].'">'.$numero_filas1['tipo'].' - '.$numero_filas1['equipamientos'].'</option>';
                                    $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
                                    }
                                }
                                ?>

                                        </select>
                                        <hr>
                                    </div>
                                    <div class="form-group">

                                        <label class="control-label">Equipamiento destacado 3</label><br>
                                        <input style="display: none;" maxlength="100" type="text" id=equi3 name="equi3"
                                            class="form-control" placeholder=""
                                            value="<?php echo  $numero_filash['equi3']?>" />
                                        <select onchange="selectsvisible()" class="selectpicker" id=equi3_s
                                            data-size="5" data-live-search="true">
                                            <?php
                                    
                                
                                $insertardatos1 = "SELECT * FROM flexi_web.equipamientos_hotel,flexi_web.tipo_equipaminetos where equipamientos_hotel.equipamiento = tipo_equipaminetos.id and hotel = '$hotelseleccionado'";
                                $ejecutarinsertar1 = mysqli_query($enlace,$insertardatos1);
                                $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
                                $contarfilas3 = mysqli_num_rows($ejecutarinsertar1);
                                $tipo_v = $numero_filas1['codigo_general'];
                                $contador = 0;
                                echo'<option>'.$numero_filash['equi3'].'</option>';
                                for($ii=1; $ii<=$contarfilas3; $ii++){
                                    if ($numero_filas1['codigo_general'] <> $tipo_v || $numero_filas1['codigo_general'] == $tipo_v && $contador == 0){
                                        echo'<option value="'.$numero_filas1['equipamientos'].'">'.$numero_filas1['tipo'].' - '.$numero_filas1['equipamientos'].'</option>';
                                    $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
                                    }
                                }
                                ?>

                                        </select>
                                        <hr>
                                    </div>
                                    <div class="form-group">

                                        <label class="control-label">Equipamiento destacado 4</label><br>
                                        <input style="display: none;" maxlength="100" type="text" id=equi4 name="equi4"
                                            class="form-control" placeholder=""
                                            value="<?php echo  $numero_filash['equi4']?>" />
                                        <select onchange="selectsvisible()" class="selectpicker" id=equi4_s
                                            data-size="5" data-live-search="true">
                                            <?php
                                    
                                
                                $insertardatos1 = "SELECT * FROM flexi_web.equipamientos_hotel,flexi_web.tipo_equipaminetos where equipamientos_hotel.equipamiento = tipo_equipaminetos.id and hotel = '$hotelseleccionado'";
                                $ejecutarinsertar1 = mysqli_query($enlace,$insertardatos1);
                                $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
                                $contarfilas3 = mysqli_num_rows($ejecutarinsertar1);
                                $tipo_v = $numero_filas1['codigo_general'];
                                $contador = 0;
                                echo'<option>'.$numero_filash['equi4'].'</option>';
                                for($ii=1; $ii<=$contarfilas3; $ii++){
                                    if ($numero_filas1['codigo_general'] <> $tipo_v || $numero_filas1['codigo_general'] == $tipo_v && $contador == 0){
                                        echo'<option value="'.$numero_filas1['equipamientos'].'">'.$numero_filas1['tipo'].' - '.$numero_filas1['equipamientos'].'</option>';
                                    $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
                                    }
                                }
                                ?>

                                        </select>
                                        <hr>
                                    </div>
                                    <div class="form-group">

                                        <label class="control-label">Equipamiento destacado 5</label><br>
                                        <input style="display: none;" maxlength="100" type="text" id=equi5 name="equi5"
                                            class="form-control" placeholder=""
                                            value="<?php echo  $numero_filash['equi5']?>" />
                                        <select onchange="selectsvisible()" class="selectpicker" id=equi5_s
                                            data-size="5" data-live-search="true">
                                            <?php
                                    
                                
                                $insertardatos1 = "SELECT * FROM flexi_web.equipamientos_hotel,flexi_web.tipo_equipaminetos where equipamientos_hotel.equipamiento = tipo_equipaminetos.id and hotel = '$hotelseleccionado'";
                                $ejecutarinsertar1 = mysqli_query($enlace,$insertardatos1);
                                $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
                                $contarfilas3 = mysqli_num_rows($ejecutarinsertar1);
                                $tipo_v = $numero_filas1['codigo_general'];
                                $contador = 0;
                                echo'<option>'.$numero_filash['equi5'].'</option>';
                                for($ii=1; $ii<=$contarfilas3; $ii++){
                                    if ($numero_filas1['codigo_general'] <> $tipo_v || $numero_filas1['codigo_general'] == $tipo_v && $contador == 0){
                                        echo'<option value="'.$numero_filas1['equipamientos'].'">'.$numero_filas1['tipo'].' - '.$numero_filas1['equipamientos'].'</option>';
                                    $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
                                    }
                                }
                                ?>

                                        </select>
                                        <hr>
                                    </div>
                                    <div class="form-group">

                                        <label class="control-label">MAPS</label><br>
                                        <input maxlength="100" type="text" style="width:100%;" name="maps"
                                            maxlength="100" rows="1"
                                            placeholder="Nombre del hotel que aparece en google maps"
                                            value="<?php echo $maps?>" />
                                        <hr>
                                        <iframe width="100%" height="200" frameborder="0" scrolling="no"
                                            marginheight="0" marginwidth="0"
                                            src="https://maps.google.com/maps?q=<?php echo $numero_filash['maps']  ?>+(wererwe)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                                        </iframe>
                                    </div>
                                    <div class="form-group">

                                        <label class="control-label">LINK TRIPADVISOR</label><br>
                                        <input maxlength="100" type="text" style="width:100%;" name="tripad"
                                            maxlength="100" rows="1" value="<?php echo  $numero_filash['tripad']?>" />
                                    </div>

                            </div>
                        </div>
                        
                        <div align=center class="col-xs-12 col-md-12 col-xl-12">
                            <div class="form-group">
                                <label class="control-label">Imagenes Galeria</label>
                                <input type="file" name="imagen_galeria[]" class="form-control" placeholder=""
                                    multiple="" value="">
                                <br>
                                <a><b>Imagen seleccionada</b></a>
                                <hr>

                            </div>
                            <div class="row setup-content justify-content-center">

                                <div class="col-xs-3 col-md-3 col-xl-3">
                                    <img style="width:100%;" src="../<?php echo  $numero_filash['foto3']?>">
                                    <hr>
                                </div>

                                <div class="col-xs-3 col-md-3 col-xl-3">
                                    <img style="width:100%;" src="../<?php echo  $numero_filash['foto4']?>">
                                    <hr>
                                </div>
                                <div class="col-xs-3 col-md-3 col-xl-3">
                                    <img style="width:100%;" src="../<?php echo  $numero_filash['foto5']?>">
                                    <hr>
                                </div>
                                <div class="col-xs-3 col-md-3 col-xl-3">
                                    <img style="width:100%;" src="../<?php echo  $numero_filash['foto6']?>">
                                    <hr>
                                </div>
                                <div class="col-xs-3 col-md-3 col-xl-3">
                                    <img style="width:100%;" src="../<?php echo  $numero_filash['foto7']?>">
                                    <hr>
                                </div>
                                <div class="col-xs-3 col-md-3 col-xl-3">
                                    <img style="width:100%;" src="../<?php echo  $numero_filash['foto8']?>">
                                    <hr>
                                </div>
                                <div class="col-xs-3 col-md-3 col-xl-3">
                                    <img style="width:100%;" src="../<?php echo  $numero_filash['foto9']?>">
                                    <hr>
                                </div>
                                <div class="col-xs-3 col-md-3 col-xl-3">
                                    <img style="width:100%;" src="../<?php echo  $numero_filash['foto10']?>">
                                    <hr>
                                </div>
                                <div class="col-xs-3 col-md-3 col-xl-3">
                                    <img style="width:100%;" src="../<?php echo  $numero_filash['foto11']?>">
                                    <hr>
                                </div>
                                <div class="col-xs-3 col-md-3 col-xl-3">
                                    <img style="width:100%;" src="../<?php echo  $numero_filash['foto12']?>">
                                    <hr>
                                </div>
                                <div class="col-xs-3 col-md-3 col-xl-3">
                                    <img style="width:100%;" src="../<?php echo  $numero_filash['foto13']?>">
                                    <hr>
                                </div>
                                <div class="col-xs-3 col-md-3 col-xl-3">
                                    <img style="width:100%;" src="../<?php echo  $numero_filash['foto14']?>">
                                    <hr>
                                </div>
                                <div class="col-xs-3 col-md-3 col-xl-3">
                                    <img style="width:100%;" src="../<?php echo  $numero_filash['foto15']?>">
                                    <hr>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Imagenes Banner</label>
                                <input type="file" name="imagen_banner[]" class="form-control" placeholder=""
                                    multiple="" value="">
                                <br>
                                <a><b>Imagen seleccionada</b></a>
                                <hr>

                            </div>
                            <div class="row setup-content justify-content-center">

                                <div class="col-xs-3 col-md-3 col-xl-3">
                                    <img style="width:100%;" src="../<?php echo  $numero_filash['foto16']?>">
                                    <hr>
                                </div>

                                <div class="col-xs-3 col-md-3 col-xl-3">
                                    <img style="width:100%;" src="../<?php echo  $numero_filash['foto17']?>">
                                    <hr>
                                </div>
                                <div class="col-xs-3 col-md-3 col-xl-3">
                                    <img style="width:100%;" src="../<?php echo  $numero_filash['foto18']?>">
                                    <hr>
                                </div>
                            </div>
                            <div align=center class="col-xs-12 col-md-12 col-xl-12">
                                <input style="display: none" type="text" name="userhotel" class="form-control"
                                    placeholder="" multiple="" value="1">
                                <br><br>
                                <button style="width: 100%;" type="submit" class="btn btn-primary">EDITAR</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

</html>