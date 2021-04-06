<?php
require '../../conexion.php';



$insertardatosh = "SELECT * FROM flexi_web.pagina_principal where id = '1'";
$ejecutarinsertarh = mysqli_query($enlace,$insertardatosh);
$contarfilas = mysqli_num_rows($ejecutarinsertarh);
$numero_filash = mysqli_fetch_array($ejecutarinsertarh);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Control panel</title>

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
    function alcargar() {
        var tipo_hotel = document.getElementById("tipo_hotels").value;
        document.getElementById("tipo_hotel").value = tipo_hotel;
    }
    function cambiarselects() {
        var tipo_hotel = document.getElementById("tipo_hotels").value;
        document.getElementById("tipo_hotel").value = tipo_hotel;
    }
    </script>

<body onload="alcargar()">

    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">Flexidreams</div>
            <div class="list-group list-group-flush">
            <a href="editar-index-backoffice.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-home"></i>&nbsp;Index</a>
                <a href="datosgenerales-backoffice.php" class="list-group-item list-group-item-action bg-light"><i
                        class="fas fa-concierge-bell"></i>&nbsp;General data</a>
                <a href="usuarios-backoffice.php" class="list-group-item list-group-item-action bg-light"><i
                        class="fas fa-user-plus"></i>&nbsp;Users</a>
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
                            <h1 align=center>Main page</h1>
                        </div>

                    </div>
                </div>


                <div class="row setup-content justify-content-center">
                    <div class="col-xs-12 col-md-12 col-xl-12">
                        <div class="col-xs-12 col-md-12 col-xl-12">
                            <div class="card-in-u shadow2">
                                <h1>Edit main page</h1>
                                <div class="row setup-content justify-content-center">
                                    <div class="col-xs-12 col-md-12 col-xl-12">
                                        <hr>

                                    </div>


                                    <div class="col-xs-12 col-md-4 col-xl-4">
                                        <div class="col-md-12">
                                            <form action="editar-index-backoffice-editarañadir.php" method="post"
                                                enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <h1>Section 1</h1>
                                                    <label class="control-label">Image 1</label>
                                                    <input maxlength="400" type="file" name="imagen1"
                                                        class="form-control" placeholder="" />
                                                        <br>
                                                    <a><b>Selected image</b></a>
                                                    <hr>
                                                    <div style="width:100%;">

                                                        <img style="width:100%;"
                                                            src="<?php echo $numero_filash['foto1']?>">
                                                        <hr>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Title 1</label>
                                                    <input maxlength="100" type="text" name="titulo1"
                                                        class="form-control" placeholder=""
                                                        value="<?php echo $numero_filash['titulo1']?>" />
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label">Text 1</label><br>
                                                    <textarea style="width:100%;" name="texto1" maxlength="400"
                                                        rows="1"><?php echo $numero_filash['texto1']?></textarea>
                                                </div>

                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-4 col-xl-4">
                                        <div class="col-md-12">

                                            <div class="form-group">
                                                <h1>Section 2</h1>
                                                <label class="control-label">Text 2</label><br>
                                                <textarea style="width:100%;" name="texto2" maxlength="300"
                                                    rows="5"><?php echo $numero_filash['texto2']?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Text 3</label><br>
                                                <textarea style="width:100%;" name="texto3" maxlength="300"
                                                    rows="5"><?php echo $numero_filash['texto3']?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Text 4</label><br>
                                                <textarea style="width:100%;" name="texto4" maxlength="300"
                                                    rows="5"><?php echo $numero_filash['texto4']?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-4 col-xl-4">
                                        <div class="col-md-12">

                                            <div class="form-group">
                                                <h1>Section 3</h1>
                                                <label class="control-label">Title 5</label>
                                                <input maxlength="100" type="text" name="titulo5" class="form-control"
                                                    placeholder="" value="<?php echo $numero_filash['titulo5'] ?>" />
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Text 5</label><br>
                                                <textarea style="width:100%;" name="texto5" maxlength="400"
                                                    rows="1"><?php echo $numero_filash['texto5'] ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Image 5</label>
                                                <input maxlength="400" type="file" name="imagen5" class="form-control"
                                                    placeholder="" value="">
                                                    <br>
                                                    <a><b>Selected image</b></a>
                                                    <hr>
                                                    <div style="width:100%;">

                                                        <img style="width:100%;"
                                                            src="<?php echo $numero_filash['foto5']?>">
                                                        <hr>
                                                    </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-4 col-xl-4">
                                        <div class="col-md-12">
                                            <form action="usuarios-backoffice-concretoc-update.php" method="post">
                                                <div class="form-group">
                                                    <h1>Section 4</h1>
                                                    <label class="control-label">Title 6</label>
                                                    <input maxlength="100" type="text" name="titulo6"
                                                        class="form-control" placeholder=""
                                                        value="<?php echo $numero_filash['titulo6'] ?>" />
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Text 6</label>
                                                    <input maxlength="400" type="text" name="texto6"
                                                        class="form-control" placeholder=""
                                                        value="<?php echo $numero_filash['texto6'] ?>" />
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label">Tipo hotel</label><br>
                                                    <select onchange="cambiarselects()" class="selectpicker" id="tipo_hotels" data-size="5" data-live-search="true">
                                                        <?php
                                    $tipo_equipamiento = $_POST['tipo_equipamiento'];
                                
                                $insertardatos1 = "SELECT * FROM flexi_web.tipo_hoteles";
                                $ejecutarinsertar1 = mysqli_query($enlace,$insertardatos1);
                                $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
                                $contarfilas3 = mysqli_num_rows($ejecutarinsertar1);
                                $tipo_v = $numero_filas1['tipo_de_hotel'];
                                $contador = 0;
                                
                                echo '<option style="display: none;">'.$numero_filash['tipo_hotel6'].'</option>';
                                for($ii=1; $ii<=$contarfilas3; $ii++){
                                    if ($numero_filas1['tipo_de_hotel'] <> $tipo_v || $numero_filas1['tipo_de_hotel'] == $tipo_v && $contador == 0){
                                    echo'<option>'.$numero_filas1['tipo_de_hotel'].'</option>';
                                    $numero_filas1 = mysqli_fetch_array($ejecutarinsertar1);
                                    }
                                }
                                ?>

                                                    </select>
                                                    <input style="display: none;" maxlength="50" type="text" name="tipo_hotel"
                                                        class="form-control" placeholder="" id="tipo_hotel"
                                                        value="<?php echo $numero_filash['tipo_hotel6'] ?>" />
                                                </div>

                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-md-4 col-xl-4">
                                        <div class="col-md-12">

                                            <div class="form-group">
                                                <h1>Section 5</h1>
                                                <label class="control-label">Title 7</label>
                                                <input maxlength="400" type="text" name="titulo7" class="form-control"
                                                    placeholder="" value="<?php echo $numero_filash['titulo7'] ?>" />
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Text 7</label><br>
                                                <textarea style="width:100%;" name="texto7" maxlength="400"
                                                    rows="1"><?php echo $numero_filash['texto7'] ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">Image 7</label>
                                                <input type="file" name="imagen7" class="form-control" placeholder="">
                                            </div>
                                            <br>
                                                    <a><b>Selected image</b></a>
                                                    <hr>
                                                    <div style="width:100%;">

                                                        <img style="width:100%;"
                                                            src="<?php echo $numero_filash['foto7']?>">
                                                        <hr>
                                                    </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-12 col-xl-12">
                                        <button style="width: 100%;" type="submit"
                                            class="btn btn-primary">EDIT</button>
                                    </div>
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
    <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->

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