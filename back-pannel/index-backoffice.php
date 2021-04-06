<?php
require '../conexion.php';
session_start();
$user = $_SESSION['usuario'];
if (!isset($_SESSION['usuario'])) {
  header("Location: index.php");
}
if ($_SESSION['tipo'] != "3") {
    header("Location: ../../index.php");
  }


  $insertardatosh = "SELECT * FROM flexi_web.hoteles";
$ejecutarinsertarh = mysqli_query($enlace,$insertardatosh);
$contarfilas = mysqli_num_rows($ejecutarinsertarh);
$numero_filash = mysqli_fetch_array($ejecutarinsertarh);

$insertardatoshc = "SELECT * FROM flexi_web.usuarios where tipo = '1'";
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
</head>

<body>

    <div class="d-flex" id="wrapper">

        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">Flexidreams</div>
            <div class="list-group list-group-flush">
                <a href="editar-index-backoffice.php" class="list-group-item list-group-item-action bg-light"><i
                        class="fas fa-home"></i>&nbsp;Index</a>
                <a href="datosgenerales-backoffice.php" class="list-group-item list-group-item-action bg-light"><i
                        class="fas fa-concierge-bell"></i>&nbsp;Datos generales</a>
                <a href="usuarios-backoffice.php" class="list-group-item list-group-item-action bg-light"><i
                        class="fas fa-user-plus"></i>&nbsp;Usuarios</a>
                <a href="usuarios-backoffice.php" class="list-group-item list-group-item-action bg-light"><i
                        class="fas fa-bed"></i>&nbsp;Reservas</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <button class="btn btn-light" id="menu-toggle">Menu</button>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


            </nav>

            <div class="container-fluid">
                <div style="padding: 30px" class="row justify-content-center">
                    <div align=center class="col-xl-12 col-md-12 col-12">
                        <h1>Bienvenido al panel de control</h1>
                        <br><br>
                        <div style="padding: 30px" class="row justify-content-center">
                            <div align=center class="col-xl-6 col-md-6 col-12">

                                <div class="card bg-info text-white">
                                    <div class="card-body">

                                        <H1> <i class="fas fa-hotel"></i>&nbsp;HOTELES
                                            <?PHP ECHO $contarfilas ?>
                                        </H1>

                                    </div>

                                </div>
                            </div>
                            <div align=center class="col-xl-6 col-md-6 col-12">

                                <div class="card bg-info text-white">
                                    <div class="card-body">

                                        <H1><i class="fas fa-user"></i>&nbsp;CLIENTES
                                            <?PHP ECHO $contarfilasc ?>
                                        </H1>

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

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>