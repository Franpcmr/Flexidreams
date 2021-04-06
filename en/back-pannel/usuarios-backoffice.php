<?php
require '../../conexion.php';
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
    function eliminarhotel(id){


        if (confirm("Estas segur@ de eliminar este hotel?")) {
            window.location.replace("usuarios-backkoffice-eliminarhotel.php?hotel=" + id);
} else {

}
    
    }
    function entrarhoteles(hotel) {

        window.location.replace("usuarios-backoffice-concretoh.php?hotel=" + hotel);
    }

    function entrarclientes(cliente) {

window.location.replace("usuarios-backoffice-concretoc.php?cliente=" + cliente);
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
    </script>

<body onload="comprobarerrores()">

    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">Flexidreams</div>
            <div class="list-group list-group-flush">
            <a href="editar-index-backoffice.php" class="list-group-item list-group-item-action bg-light"><i class="fas fa-home"></i>&nbsp;Users</a>
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
                            <h1 align=center>User management</h1>
                        </div>
                        <div class="col-xs-12 col-md-12 col-xl-12" id=borradogeneralok style="display: none;">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <a>Deleted correctly</a>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row setup-content justify-content-center">
                    <div class="col-xs-12 col-md-12 col-xl-12">
                        <div class="card-in-u shadow2">

                            <div class="row setup-content justify-content-center">
                                <div class="col-xs-12 col-md-6 col-xl-6">
                                    <h1>Clients</h1>
                                    <div class="tableFixHead">
                                        <table class="table table-dark">
                                            <thead>
                                                <tr>
                                                    <th scope="col"></th>
                                                    <th scope="col">User ID</th>
                                                    <th scope="col">Username</th>
                                                    <th scope="col">Email</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php


                        $insertardatos11 = "SELECT * FROM flexi_web.clientes";
                        $ejecutarinsertar11 = mysqli_query($enlace,$insertardatos11);
                        $contarfilas = mysqli_num_rows($ejecutarinsertar11);
                        $numero_filas11 = mysqli_fetch_array($ejecutarinsertar11);
                        for($i=1; $i<=$contarfilas; $i++){
                          echo '<tr id=tr3>
                                <th scope=row>'.$numero_filas11['usuario'].'</th>
                                <td  onclick="entrarclientes('.$numero_filas11['id'].')">'.$numero_filas11['usuario'].'</td>
                                <td  onclick="entrarclientes('.$numero_filas11['id'].')">'.$numero_filas11['nombre'].'</td>
                                  <td  onclick="entrarclientes('.$numero_filas11['id'].')">'.$numero_filas11['email'].'</td>
                                </tr>';
                                $numero_filas11 = mysqli_fetch_array($ejecutarinsertar11);
                        }

?> </tbody>
                                        </table>
                                    </div>
                                    <hr>
                                    <input maxlength="100" disabled name=tipo autocomplete="off" type="text" required="required"
                                        class="form-control" placeholder="Search by username or email" />
                                    <br>
                                    <button style="width: 100%;" type="submit" class="btn btn-primary">Search</button>
                                </div>
                                <div class="col-xs-12 col-md-6 col-xl-6">
                                    <h1>Hotels</h1>
                                    <div class="tableFixHead">
                                        <table class="table table-dark">
                                            <thead>
                                                <tr>
                                                    
                                                    <th scope="col">User ID</th>
                                                    <th scope="col">Hotel name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php


                        $insertardatos11 = "SELECT * FROM flexi_web.hoteles";
                        $ejecutarinsertar11 = mysqli_query($enlace,$insertardatos11);
                        $contarfilas = mysqli_num_rows($ejecutarinsertar11);
                        $numero_filas11 = mysqli_fetch_array($ejecutarinsertar11);
                        for($i=1; $i<=$contarfilas; $i++){
                          echo '<tr id=tr3>
                              
                                <td onclick="entrarhoteles('.$numero_filas11['id'].')">'.$numero_filas11['id'].'</td>
                              <td onclick="entrarhoteles('.$numero_filas11['id'].')">'.$numero_filas11['nombre_hotel'].'</td>
                                <td onclick="entrarhoteles('.$numero_filas11['id'].')">'.$numero_filas11['email1'].'</td>
                                <td onclick="eliminarhotel('.$numero_filas11['id'].')" align=center><i class="fas fa-trash"></i></td>
                                </tr>';
                                $numero_filas11 = mysqli_fetch_array($ejecutarinsertar11);
                        }

?> </tbody>
                                        </table>
                                    </div>
                                    <hr>
                                    <input maxlength="100" disabled name=tipo autocomplete="off" type="text" required="required"
                                        class="form-control" placeholder="Search by hotel name or email" />
                                    <br>
                                    <button style="width: 100%;" type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
                <div class="col-xs-12 col-md-12 col-xl-12">
                    <div class="card-in-u-u shadow2">
                        <h1>Create user profile</h1>
                        <div class="row setup-content justify-content-center">
                            <div class="col-xs-12 col-md-12 col-xl-12">
                                <hr>

                            </div>
                            <div ALIGN=CENTER class="col-xs-12 col-md-4 col-xl-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <form action="usuarios-backoffice-crearusuario.php" method="post">
                                        <label class="control-label">Username</label>
                                        <input maxlength="100" type="text" required="required" class="form-control"
                                            placeholder="" value="<?php echo $numero_filashc['usuario'] ?>" name="nombre_usuario"/>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Password</label>
                                        <input maxlength="100" type="text" required="required" 
                                            class="form-control" placeholder="" name="contraseña" />
                                    </div>
                                    
                                   


                                </div>
                            </div>
                      
                            <div ALIGN=CENTER class="col-xs-12 col-md-4 col-xl-4">
                                <div class="col-md-12">
                                <table>
                                <tr><td> <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tipodeusuario"
                                            id="exampleRadios1" value="h" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                          HOTEL
                                        </label>
                                    </div></td></tr>
                                <tr>
                               <td>
                                    <br>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tipodeusuario"
                                            id="exampleRadios1" value="c" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            CLIENT
                                        </label>
                                    </div>
                                    </td>
                                    </tr>
                                    </table>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row setup-content justify-content-center">
                            <div align=center class="col-xs-12 col-md-12 col-xl-12">
                            <br>
                                <button style="width: 70%;" type="submit" class="btn btn-primary">CREATE</button>
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

    </div>
    <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
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

</body>

</html>