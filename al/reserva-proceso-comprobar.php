<?php 
require '../conexion.php';

$hotelseleccionado = $_POST['hotel'];
$adultos = 1;
$fechas2 = $_POST['daterange'];


$insertardatosh = "SELECT * FROM flexi_web.hoteles where id = '$hotelseleccionado'";
$ejecutarinsertarh = mysqli_query($enlace,$insertardatosh);
$numero_filash = mysqli_fetch_array($ejecutarinsertarh);



$fechaseleccionadadesde = substr($fechas2,0, -13);

$fechaseleccionadahasta = substr($fechas2, 13);

$insertardatoshhh = "SELECT * FROM flexi_web.precios_ofertas where hotel = '$hotelseleccionado'";
$ejecutarinsertarhhh = mysqli_query($enlace,$insertardatoshhh);
$numero_filashhh = mysqli_fetch_array($ejecutarinsertarhhh);
$contarfilas3 = mysqli_num_rows($ejecutarinsertarhhh);
$numerocontador = 0;

$fechadesde = $numero_filashhh['desde'];
$fechahasta = $numero_filashhh['hasta'];

$fechaseleccionada1 = date_create($fechaseleccionadadesde);
$fechaseleccionada2 = date_create($fechaseleccionadahasta);
$contardias = date_diff($fechaseleccionada1, $fechaseleccionada2);
$differenceFormat = '%a';
$contardiasdef = $contardias->format($differenceFormat);

$contadordias = 0;

$fechascorrectas = false;

$precioo = 0;

$cupoact = $numero_filashhh['cupo'];
$cupocompl =$numero_filashhh['cupo_act'];

while($fechascorrectas == false){
    if($contadordias == $contardiasdef){
        $fechascorrectas = true;
      
    }
    
    if($fechadesde < $fechahasta){
  
       $fechadesde = date("Y-m-d",strtotime($fechadesde."+ 1 days")); 
       $fechaseleccionadadesde = date("Y-m-d",strtotime($fechaseleccionadadesde."+ 1 days"));
       $fechaseleccionadahasta = date("Y-m-d",strtotime($fechaseleccionadahasta));
       if($fechaseleccionadadesde < $fechaseleccionadahasta){
        if($fechadesde == $fechaseleccionadadesde){
            $precioo = $precioo + $numero_filashhh['precio'];
            $contadordias = $contadordias + 1;
          
        }
    }else if($fechaseleccionadadesde == $fechaseleccionadahasta){
        $precioo = $precioo + intval($numero_filashhh['precio']);
        $contadordias = $contadordias + 1;
      
    }
    }else if($fechadesde == $fechahasta){
    
       $numero_filashhh = mysqli_fetch_array($ejecutarinsertarhhh);
       $fechadesde = $numero_filashhh['desde'];
       $fechahasta = $numero_filashhh['hasta'];
    }
    
     }


?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style2.css">
    <script type="text/javascript" src="../js/cssrefresh.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/d3js/6.1.1/d3.min.js"></script>
    <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.4/themes/redmond/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js" data-auto-replace-svg="nest"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

</head>

<body onload="" class=body>
<div class=container-fluid>

<div id=top-bar-pc class="row justify-content-center">

    <div align=center class="col-md-2 col-xl-2">

        <h4 class="titulo-top">RESORTS & HOTELS</h4>


    </div>
    <div align=center onclick="window.location.href='../the-concept.php';" class="col-md-2 col-xl-2">

        <h4 class="titulo-top">THE CONCEPT</h4>


    </div>

    <div style="cursor: pointer;" onclick="window.location.href='../index.php';" align=center
        class="col-md-2 col-xl-2">

        <img class="logo-top" src="../img/logo-white.svg">
        <h4>
            </h2>

    </div>
    <div style="cursor: pointer;" onclick="window.location.href='../experiencias.php';" align=center
        class="col-md-2 col-xl-2">

        <h4 class="titulo-top">EXPERIENCES</h4>

    </div>
    <div style="cursor: pointer;" align=center class="col-md-2 col-xl-2">

        <h4 class="titulo-top"><i id=manita onclick="location.href='../login.php';" class="fas fa-key"></i></h4>



    </div>


</div>
</div>
<div id=top-bar-movile>

<nav class="negrazo navbar navbar-expand-xs navbar-dark ">
    <h1 onclick="window.location.href='../index.php';" class="titulo-top"><img class="logo-top" src="../img/logo-white.png">
        FLEXIDREAMS</i>
    </h1>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="n3av-link" href="../the-concept.php">The Concept</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">RESORTS & HOTELS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../experiencias.php">EXPERIENCES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../login.php">Login&nbsp;&nbsp;<i id=manita onclick="location.href='../login.php';" class="fas fa-key"></i></a>
            </li>
    </div>
</nav>


</div>




</div>

</div>



    <div class=container-fluid>

        <div id=panelreserva2 class="row justify-content-center">
            <div class="col-xl-12 col-md-12 col-xs-12">

                <div class="row justify-content-center">
                    <div align=center class="col-xl-8 col-md-12 col-xs-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <div align=center class="col-xl-12 col-md-12 col-xs-12">
                                        <h1><?php echo $numero_filash['nombre_hotel']?></h1>
                                    </div>
                                    <div align=center style="width: 100%;" class="col-xl-4 col-md-6 col-xs-12">
                                        <div class="form-group">

                                            <form action="reserva-proceso-comprobar.php" method="post">
                                                <label style="width: 60%;" class="control-label">Rango de fechas
                                                    <input disabled type="text" class="form-control" placeholder=""
                                                        value="<?php echo $fechaseleccionadadesde . " - " . $fechaseleccionadahasta ?>"
                                                        aria-describedby="basic-addon1">
                                                    <input type="hidden" name="hotel" class="form-control"
                                                        value="<?php echo $hotelseleccionado?>">
                                                    <input type="hidden" name="desde" class="form-control"
                                                        value="<?php echo $fechaseleccionadadesde?>">
                                                    <input type="hidden" name="hasta" class="form-control"
                                                        value="<?php echo $fechaseleccionadahasta?>">
                                                </label>

                                        </div>



                                    </div>



                                    <div align=center class="col-xl-4 col-md-6 col-xs-12">
                                        <label style="width: 80%;" class="control-label">Name
                                            <input type="text" class="form-control" placeholder="" value=""
                                                aria-describedby="basic-addon1">
                                        </label>
                                    </div>
                                    <div align=center class="col-xl-4 col-md-6 col-xs-12">
                                        <label style="width: 80%;" class="control-label">Surnames
                                            <input type="text" class="form-control" placeholder="" value=""
                                                aria-describedby="basic-addon1">
                                        </label>
                                    </div>
                                    <div align=center class="col-xl-4 col-md-6 col-xs-12">
                                        <label style="width: 60%;" class="control-label">NIF
                                            <input type="text" class="form-control" placeholder="" value=""
                                                aria-describedby="basic-addon1">
                                        </label>
                                    </div>
                                    <div align=center class="col-xl-4 col-md-6 col-xs-12">
                                        <label style="width: 80%;" class="control-label">Mobile
                                            <input type="text" class="form-control" placeholder="" value=""
                                                aria-describedby="basic-addon1">
                                        </label>
                                    </div>
                                    <div align=center class="col-xl-4 col-md-6 col-xs-12">
                                        <label style="width: 80%;" class="control-label">Email
                                            <input type="text" class="form-control" placeholder="" value=""
                                                aria-describedby="basic-addon1">
                                        </label>
                                    </div>
                                    <div align=center class="col-xl-12 col-md-6 col-xs-12">
                                        <label style="width: 80%;" class="control-label">Comments
                                        </label> <textarea style="width: 100%;" rows="5" name=""
                                            maxlength="400"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id=carta-info-reserva class="col-xl-4 col-md-4 col-xs-12">
                        <div id=carta-info-reserva_1 class="row justify-content-center">
                            <div id=carta-info-reserva_2 class="col-xl-8 col-md-8 col-xs-8">
                                <br>
                                <h1 align=center>Booking information</h1>
                                <h4 align=center>
                                    <br>Dates<br><?php echo $fechaseleccionadadesde . " - " . $fechaseleccionadahasta ?>
                                </h4>
                                <br><br>
                                <h3 align=center>Adults: <?php echo $adultos?></h3>
                                <br><br>
                                <h3 align=center>Total: <?php echo $precioo?>€</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div align=center style="padding-bottom: 10px;" class="col-xl-12 col-md-12 col-xs-12">


                <input onclick="onrequest()" class="form-check-input" type="checkbox" id="resquestc">

                i agree to the terms and conditions and the privacy policy of flexidreams. <a href="">See More</a>
                <hr>
                <button class="botonreservaf btn btn-dark">Book</button>

            </div>

        </div>

        <div id="footer" class="row justify-content-center">
            <div class="col-xl-12 col-md-12 col-xs-12 mt-2 mt-sm-5">
                <hr style=" border-top: 1px solid white">
            </div>
            <div id=logo-footer-i class="col-xl-2 col-md-3 col-xs-2 mt-2 mt-sm-5">
                <img id=logo-footer src="../img/logo-all.png">
            </div>
            <div class="col-xl-2 col-md-3 col-xs-2 mt-2 mt-sm-5">
            <h1 id=titulo-footer>ABOUT US</h1>
                <p id=texto-footer>REGISTER</p>
                <p id=texto-footer>REGISTER AS HOTEL</p>
                <p id=texto-footer>CARRERAS</p>
                <p id=texto-footer>SUSTAINABILITY</p>
                <p id=texto-footer>PARTNERS</p>
            </div>
            <div class="col-xl-2 col-md-3 col-xs-2 mt-2 mt-sm-5">
                <h1 id=titulo-footer>ABOUT US</h1>
                <p id=texto-footer>REGISTER</p>
                <p id=texto-footer>REGISTER AS HOTEL</p>
                <p id=texto-footer>CARRERAS</p>
                <p id=texto-footer>SUSTAINABILITY</p>
                <p id=texto-footer>PARTNERS</p>
            </div>
            <div class="col-xl-2 col-md-3 col-xs-2 mt-2 mt-sm-5">
                <form>
                    <h1 id=titulo-footer>NEWSLETTER</h1>
                    <input type=text placeholder="E-MAIL">
                    <input type=text placeholder="NAME & SURNAMES"><br>
                    <button id=texto-footer type="button" class="btn bg-transparent mt-2">REGISTER</button>
                </form>
            </div>
        </div>

        <div id="footer" class="row justify-content-center">
            <div class="col-xl-12 col-md-12 col-xs-12 ">
                <hr style=" border-top: 1px solid white">
            </div>
            <div align=center class="col-xl-6 col-md-12 col-xs-12 ">
                <h1 id=titulo-footer>&copy; 2020 FLEXIDREAMS | ALL RIGHTS RESERVED</h1>
            </div>
            <div id=manita onclick="location.href='../login.php';" align=center class="col-xl-6 col-md-12 col-xs-12 ">
                <h1 id=titulo-footer><i class="fas fa-key"></i> &nbsp;HOTEL LOGIN</h1>
            </div>

        </div>
    </div>










</body>


</html>