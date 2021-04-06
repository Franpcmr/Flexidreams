<?php
require '../conexion.php';
$hotelseleccionado = $_GET['cliente'];
$error = $_GET['enviado'];
$errorg = $_GET['enviadog'];
$tipo_error = $_GET['tipo'];
$tipo_env_error = $_GET['tipo_cat'];
$insertardatosh = "SELECT * FROM flexi_web.clientes where id = '$hotelseleccionado'";
$ejecutarinsertarh = mysqli_query($enlace,$insertardatosh);
$contarfilas = mysqli_num_rows($ejecutarinsertarh);
$numero_filash = mysqli_fetch_array($ejecutarinsertarh);

$usuariohotel = $numero_filash['usuario'];

$insertardatoshc = "SELECT * FROM flexi_web.usuarios where id = '$usuariohotel'";
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


        var ubi1 = document.getElementById("ubicacion1s").value;
        var ubi2 = document.getElementById("ubicacion2s").value;
        var ubi3 = document.getElementById("ubicacion3s").value;
        var categoria = document.getElementById("categorias").value;
        var pregunta = document.getElementById("pregunta_seguridads").value;
        document.getElementById("ubicacion1").value = ubi1;
        document.getElementById("ubicacion2").value = ubi2;
        document.getElementById("ubicacion3").value = ubi3;
        document.getElementById("categoria").value = categoria;
        document.getElementById("pregunta_seguridad").value = pregunta;


    }

    x = true;
    function entrarhoteles(hotel) {

window.location.replace("usuarios-backoffice-concretoh.php?hotel=" + hotel);
}

function entrarclientes(cliente) {

window.location.replace("usuarios-backoffice-concretoc.php?cliente=" + cliente);
}
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

    function selects() {
        var ubi1 = document.getElementById("ubicacion1s").value;
        var ubi2 = document.getElementById("ubicacion2s").value;
        var ubi3 = document.getElementById("ubicacion3s").value;
        var categoria = document.getElementById("categorias").value;
        var pregunta = document.getElementById("pregunta_seguridads").value;
        document.getElementById("ubicacion1").value = ubi1;
        document.getElementById("ubicacion2").value = ubi2;
        document.getElementById("ubicacion3").value = ubi3;
        document.getElementById("categoria").value = categoria;
        document.getElementById("pregunta_seguridad").value = pregunta;


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
                            <h1 align=center>Gestion de Usuarios</h1>
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
                

                    <div class="col-xs-12 col-md-12 col-xl-12">
                        <div class="card-in-u shadow2">
                            <h1>Perfil cliente</h1>
                            <div class="row setup-content justify-content-center">
                                <div class="col-xs-12 col-md-12 col-xl-12">
                                    <hr>
                                    <h3>Detalles</h3>
                                </div>


                                <div class="col-xs-12 col-md-4 col-xl-4">
                                    <div class="col-md-12">
                                        <form action="usuarios-backoffice-concretoc-update.php" method="post">
                                            

                                            <div class="form-group">
                                               
                                                <label class="control-label">Nombre</label>
                                                <input maxlength="100" type="text" name="nombre" class="form-control"
                                                    placeholder="" value="<?php echo $numero_filash['nombre'] ?>" />
                                            
                                                    <input style="display: none;" maxlength="100" type="text" name="usuarioseleccionado" class="form-control"
                                                    placeholder="" value="<?php echo $hotelseleccionado ?>" />
                                         </div>
                                            
                                            <div class="form-group">
                                               
                                                <label class="control-label">Direccion</label>
                                                <input maxlength="100" type="text" name="direccion" class="form-control"
                                                    placeholder="" value="<?php echo $numero_filash['direccion'] ?>" />
                                            </div>

                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-4 col-xl-4">
                                    <div class="col-md-12">

                                        <div class="form-group">
                                            <label class="control-label">Poblacion</label>
                                            <input maxlength="100" type="text" name="poblacion" class="form-control"
                                                placeholder="" value="<?php echo $numero_filash['poblacion'] ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Provincia</label>
                                            <input maxlength="100" name="provincia" type="text" class="form-control"
                                                placeholder="" value="<?php echo $numero_filash['provincia'] ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-4 col-xl-4">
                                    <div class="col-md-12">

                                        <div class="form-group">
                                            <label class="control-label">CP</label>
                                            <input maxlength="100" type="text" name="cp" class="form-control"
                                                placeholder="" value="<?php echo $numero_filash['cp'] ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">Pais</label>
                                            <input maxlength="100" type="text" name="pais" class="form-control"
                                                placeholder="" value="<?php echo $numero_filash['pais'] ?>" />
                                        </div>


                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-2 col-xl-4">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Email</label>
                                            <input maxlength="100" type="text" name="email"
                                                class="form-control" placeholder=""
                                                value="<?php echo $numero_filash['email'] ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-4 col-xl-4">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Telefono 1</label>
                                            <input maxlength="100" type="text" name="telf1" class="form-control"
                                                placeholder="" value="<?php echo $numero_filash['telf1'] ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-4 col-xl-4">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Telefono 2</label>
                                            <input maxlength="100" type="text" name="telf2" class="form-control"
                                                placeholder="" value="<?php echo $numero_filash['telf2'] ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-12 col-xl-12">
                                    <button style="width: 100%;" type="submit" class="btn btn-primary">EDITAR</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

    <!-- Bootstrap core JavaScript -->
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