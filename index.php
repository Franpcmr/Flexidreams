<?php 
require 'conexion.php';

$insertardatosh = "SELECT * FROM flexi_web.pagina_principal where id = '1'";
$ejecutarinsertarh = mysqli_query($enlace,$insertardatosh);
$numero_filash = mysqli_fetch_array($ejecutarinsertarh);

$tipodehotel = $numero_filash['tipo_hotel6'];

?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style2.css">
    <script type="text/javascript" src="js/cssrefresh.js"></script>
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
    <script>
    $(document).ready(function() {
        $(".testimonial-carousel").slick({
            infinite: !0,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: !0,
            arrows: true,
            variableWidth: true,

            prevArrow: $(".testimonial-carousel-controls .prev"),
            nextArrow: $(".testimonial-carousel-controls .next"),
            responsive: [{
                breakpoint: 1500,
                settings: {
                    slidesToShow: 3
                }
            }, {
                breakpoint: 1400,
                settings: {
                    slidesToShow: 2
                }
            }, {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1
                }
            }]
        });

    });
    $(document).ready(function() {
        $(".testimonial-carousel2").slick({
            infinite: !0,
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: !1,
            arrows: true,
            variableWidth: true,
            prevArrow: $(".testimonial-carousel-controls2 .prev2"),
            nextArrow: $(".testimonial-carousel-controls2 .next2"),
            responsive: [{
                breakpoint: 1500,
                settings: {
                    slidesToShow: 3
                }
            }, {
                breakpoint: 1400,
                settings: {
                    slidesToShow: 2
                }
            }, {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1
                }
            }]
        });
    })
    $.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '< Ant',
        nextText: 'Sig >',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
            'Octubre', 'Noviembre', 'Diciembre'
        ],
        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Mi??rcoles', 'Jueves', 'Viernes', 'S??bado'],
        dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mi??', 'Juv', 'Vie', 'S??b'],
        dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'S??'],
        weekHeader: 'Sm',
        dateFormat: 'yy-mm-dd',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };
    $.datepicker.setDefaults($.datepicker.regional['es']);

    $(function() {
        $('#fecha1').datepicker();
        $('#fecha2').datepicker();
    });

    function alputohotelbro(id) {

        window.location.href = "hotel.php?hotel=" + id;

    }


    function fade() {
        document.getElementById("categoria-5").classList.toggle('fade');

    }

    function alcargar() {

        setTimeout(function() {


            document.getElementById("categoria-5").style.backgroundImage =
                "url('img/banner/1-min.jpg')";

        }, 10);

        setTimeout(function() {

            document.getElementById("categoria-5").classList.toggle('fade');


        }, 10000);

        setTimeout(function() {
            fade();
            document.getElementById("categoria-5").style.backgroundImage =
                "url('img/banner/2-min.jpg')";

        }, 12000);

        setTimeout(function() {

            document.getElementById("categoria-5").classList.toggle('fade');


        }, 20000);
        setTimeout(function() {
            fade();
            document.getElementById("categoria-5").style.backgroundImage =
                "url('img/banner/3-min.jpg')";


        }, 22000);
        setTimeout(function() {
            document.getElementById("categoria-5").classList.toggle('fade');

        }, 30000);
        setTimeout(function() {
            fade();
            document.getElementById("categoria-5").style.backgroundImage =
                "url('img/banner/5-min.jpg')";


        }, 32000);
        setTimeout(function() {
            document.getElementById("categoria-5").classList.toggle('fade');

        }, 40000);
        setTimeout(function() {
            fade();
            alcargar();
        }, 42000);

    }


    function filtrar() {
        var personas = document.getElementById("personas").value
        var texto = document.getElementById("myInput").value
        var fechas = document.getElementById("daterange").value
        window.location.href = "busqueda.php?texto=" + texto + "&fechas=" + fechas + "&adultos=" + personas
    }
    </script>
</head>

<body onload="alcargar()" class=body>

    <div class=container-fluid>

        <div id=top-bar-pc class="row justify-content-center">

            <div align=center class="col-md-2 col-xl-2">

                <h4 class="titulo-top">HOTELES Y RESORTS</h4>


            </div>
            <div align=center onclick="window.location.href='the-concept.php';" class="col-md-2 col-xl-2">

                <h4 class="titulo-top">CONCEPTO</h4>


            </div>

            <div style="cursor: pointer;" onclick="window.location.href='index.php';" align=center
                class="col-md-2 col-xl-2">

                <img class="logo-top" src="img/logo-white.svg">
                <h4>
                    </h2>

            </div>
            <div style="cursor: pointer;" onclick="window.location.href='experiencias.php';" align=center
                class="col-md-2 col-xl-2">

                <h4 class="titulo-top">EXPERIENCIAS</h4>

            </div>
            
            <div style="cursor: pointer;" align=center class="col-md-2 col-xl-2">

                <h4 class="titulo-top"><i id=manita onclick="location.href='login.php';" class="fas fa-key"></i></h4>



            </div>
            <div id="language" align=center>

<ul>
    <li>
        <a href="#"> ES | </a>
    </li>
    <li>
        <a href="en/"> EN | </a>
    </li>
    <li>
        <a href="al/"> AL | </a>
    </li>
</ul>

</div>

        </div>
    </div>
    <div id=top-bar-movile>

        <nav class="negrazo navbar navbar-expand-xs navbar-dark ">
            <h1 onclick="window.location.href='index.php';" class="titulo-top"><img class="logo-top"
                    src="img/logo-white.png">
                FLEXIDREAMS</i>
            </h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="the-concept.php">The Concept</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hoteles y Resorts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="experiencias.php">Experiencias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Iniciar Sesion&nbsp;&nbsp;<i id=manita
                                onclick="location.href='login.php';" class="fas fa-key"></i></a>
                    </li>
                </ul>
                <ul>
    <li>
        <a href="#"> ES | </a>
    </li>
    <li>
        <a href="en/"> EN | </a>
    </li>
    <li>
        <a href="al/"> AL | </a>
    </li>
</ul>
            </div>
        </nav>


    </div>




    </div>

    </div>



    <div id="categoria-5">
        <div class="fondooscuro1">
            <div class=abajo1>

                <h1 class=enjoy>Enjoy <br>Yourself.</h1>
            </div>
        </div>
    </div>
    <img style="display: none" src="img/banner/1-min.jpg"></img>
    <img style="display: none" src="img/banner/2-min.jpg"></img>
    <img style="display: none" src="img/banner/3-min.jpg"></img>
    <img style="display: none" src="img/banner/5-min.jpg"></img>
    </div>

    <nav id=barradebusqueda class="navbar sticky-top">

        <div id=bordillo class="row justify-content-center">

            <div class="col-md-2 col-12 col-xl-3">


                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-map-pin"></i></span>
                    </div>
                    <input type="text" class="form-control" id="myInput" placeholder="Ubicaci??n o nombre del hotel"
                        aria-label="Username" aria-describedby="basic-addon1">
                </div>


            </div>


            <div class="col-md-4 col-12 col-xl-2">

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" id="daterange" name="daterange" class="form-control"
                                placeholder="Desde - hasta" value="">
                </div>

            </div>
         
            <div class="col-md-6 col-12 col-xl-2">

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-users"></i></span>
                    </div>
                    <input type="number" id=personas class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-md-4 col-12 col-xl-1">

                <button  onclick="filtrar()" class="btn btn-light">Buscar</button>

            </div>
        </div>

    </nav>
    <div class=container-fluid>
        <div id="recomendados" class="row justify-content-center">
            <div id="recomendados-f" class="col-md-12 col-xl-3 col-12">
                <h1 style="font-size: calc(1em + 1vw)">RECOMENDACIONES PARA UD.</h1><br>
                <a>Una selecci??n especial de las mejores ofertas.</a>

            </div>

            <div class="col-md-12 col-xl-9 col-12">

                <section class="p-5 pos-r">
                    <div class="container">
                        <div class="col-md-12 col-xl-12 col-12">
                            <div class=" pos-r">
                                <div class="carousel-controls testimonial-carousel-controls">
                                    <div class="control prev"><i class="fa fa-chevron-left text-black">&nbsp;</i>
                                    </div>
                                    <div class="control next"><i class="fa fa-chevron-right text-black">&nbsp;</i>
                                    </div>
                                </div>
                                <div class="testimonial-carousel">
                                    <?PHP

$insertardatoshh = "SELECT * FROM flexi_web.hoteles where marcavisiblehotel = 's' ORDER BY hotel_prioridad asc";
$ejecutarinsertarhh = mysqli_query($enlace,$insertardatoshh);
$contarfilas = mysqli_num_rows($ejecutarinsertarhh);
$numero_filashh = mysqli_fetch_array($ejecutarinsertarhh);
                                    for($ii=1; $ii<=$contarfilas; $ii++){
                                        echo '<div style="background-image: url(back-pannel/'.$numero_filashh['foto5'].');" class="one-slide ">

                                        <div class="fondooscuro">
                                            <div onclick="alputohotelbro('.$numero_filashh['id'].')" class=abajo><a>'.$numero_filashh['nombre_hotel'].'
                                                </a><br><a>'.$numero_filashh['categoria'].'</a><br><a>'.$numero_filashh['poblacion'].','.$numero_filashh['provincia'].'</a></div>
                                        </div>
                                    </div>';
                                    $numero_filashh = mysqli_fetch_array($ejecutarinsertarhh);
                
                                    
                                }
                                
                                
                                ?>

                                </div>
                            </div>
                        </div>
                </section>
            </div>
        </div>

        <div id=hoteles-y-ads class="row justify-content-center">
            <div class="col-md-12 col-xl-12 col-12">
                <div class="row justify-content-center">

                    <div id=texto-abajo-nav class="col-md-6 col-xl-6 col-8">
                        <a>??A??n paga el coste de la habitaci??n en sus viajes? ??Y cree que ha conseguido una verdadera
                            ganga? Con flexidreams solamente paga un consumo m??nimo y decide por s?? mismo como
                            lo quiere gastar en el hotel. A cambio, le regalamos el precio de la habitaci??n.
                        </a>
                    </div>
                </div>
                <div id=iconos-abajo-nav align=center class="row justify-content-center">

                    <div class="col-md-12 col-xl-2 col-12">
                        <i class="fas fa-check"></i><br>
                        <a>ALOJAMIENTO <br> GRATIS</a><br><br>
                    </div>
                    <div class="col-md-12 col-xl-2 col-12">
                        <i class="fas fa-percent"></i><br>
                        <a>LAS MEJORES <br> OFERTAS</a><br><br>
                    </div>
                    <div class="col-md-12 col-xl-2 col-12">
                        <i class="fas fa-bed"></i><br>
                        <a>HOTELES <br>SELECCIONADOS</a><br><br>
                    </div>
                    <div class="col-md-12 col-xl-2 col-12">
                        <i class="far fa-lightbulb"></i><br>
                        <a>INSPIRACIONES</a><br><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 col-xl-6 col-12"
                style="background-image: url('<?php echo 'back-pannel/'.$numero_filash['foto1']?>');" id="categoria-1">
            </div>

            <div style="background-color:black;" class="col-md-12 col-xl-6 col-12">
                <div class="quete" id="div-text-4">
                    <a style="color:white;"><?php echo $numero_filash['titulo1']?></a>
                </div>
                <div id="div-text-5">
                    <a style="color:white;"><?php echo $numero_filash['texto1']?></a>
                </div>
                <div id="div-text-6">
                    <a>Descubra m??s&nbsp;&nbsp;<i class="fas fa-long-arrow-alt-right"></i>

                    </a>
                </div>

            </div>
        </div>
        <div id="row3" align=center class="row justify-content-center">
            <div id="divtexto21" class="col-md-12 col-xl-3 col-12">

                <div id="divtexto2">
                    <a style="font-size: 20px;"><b><?php echo $numero_filash['texto2']?></b>
                    </a>
                </div>


            </div>


            <div id="divtexto22" class="col-md-12 col-xl-3 col-12">
                <a style="font-size: 20px;">
                    <div id="divtexto2"><b>
                            <?php echo $numero_filash['texto3']?>
                    </div></b>
                </a>

            </div>

            <div id="divtexto23" class="col-md-12 col-xl-3 col-12">
                <div id="divtexto2">
                    <a style="font-size: 20px;"><b><?php echo $numero_filash['texto4']?></b>
                    </a>
                </div>

            </div>
        </div>
        <div class="row justify-content-center">


            <div style="background-color:black; " class="col-md-12 col-xl-6 col-12">
                <div id="div-text-7">
                    <hr style="border:2px solid rgb(244, 149, 31); ">
                    <h1 style="color:white;"><?php echo $numero_filash['titulo5']?></h1>
                </div>
                <div id="div-text-8">
                    <a style="color:white;"><?php echo $numero_filash['texto5']?></a>
                </div>
                <div id="div-text-9">
                    <a>Descubra m??s &nbsp;&nbsp;<i class="fas fa-long-arrow-alt-right"></i>

                    </a>
                </div>

            </div>
            <div style="background-image: url('<?php echo 'back-pannel/'.$numero_filash['foto5']?>');" id="categoria-4"
                class="col-md-12 col-xl-6 col-12">
            </div>
        </div>
        <div id="recomendados" class="row justify-content-center">
            <div id="recomendados-f" class="col-md-12 col-xl-3 col-12">
                <h1><?php echo $numero_filash['titulo6']?></h1><br>
                <a><?php echo $numero_filash['texto6']?></a>

            </div>

            <div class="col-md-12 col-xl-9 col-12">

                <section class="p-5 pos-r">
                    <div class="container">
                        <div class="row">
                            <div style="" class="col-md-12 col-xl-12 col-12">

                                <div class="mt-5 pos-r">
                                    <div class="carousel-controls testimonial-carousel-controls2">
                                        <div class="control prev2"><i class="fa fa-chevron-left text-black">&nbsp;</i>
                                        </div>
                                        <div class="control next2"><i class="fa fa-chevron-right text-black">&nbsp;</i>
                                        </div>
                                    </div>
                                    <div class="testimonial-carousel2">

                                        <?PHP

$insertardatoshh = "SELECT * FROM flexi_web.hoteles WHERE tipo_hotel1 = '$tipodehotel' ORDER BY tipo_prioridad1 DESC";
$ejecutarinsertarhh = mysqli_query($enlace,$insertardatoshh);
$contarfilas = mysqli_num_rows($ejecutarinsertarhh);
$numero_filashh = mysqli_fetch_array($ejecutarinsertarhh);
                                    for($ii=1; $ii<=$contarfilas; $ii++){
                                        echo '<div style="background-image: url(back-pannel/'.$numero_filashh['foto5'].'); " class=" one-slide ">

                                        <div class="fondooscuro">
                                            <div class=abajo><a>'.$numero_filashh['nombre_hotel'].'
                                                </a><br><a>'.$numero_filashh['categoria'].'</a><br><a>'.$numero_filashh['poblacion'].','.$numero_filashh['provincia'].'</a></div>
                                        </div>
                                    </div>';
                                    $numero_filashh = mysqli_fetch_array($ejecutarinsertarhh);
                
                                    
                                }
                                
                                
                                ?>


                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
            </div>
        </div>

        <div class="row justify-content-center">


            <div style="background-color:black; " class="col-md-12 col-xl-6 col-12">
                <div id="div-text-7">
                    <hr style="border:2px solid rgb(244, 149, 31); ">
                    <a style="color:white;"><?php echo $numero_filash['titulo7']?></a>
                </div>
                <div id="div-text-8">
                    <a style="color:white;"><?php echo $numero_filash['texto7']?></a>
                </div>
                <div id="div-text-9">
                    <a>Descubra m??s&nbsp;&nbsp;<i class="fas fa-long-arrow-alt-right"></i>

                    </a>
                </div>

            </div>
            <div style="background-image: url('<?php echo 'back-pannel/'.$numero_filash['foto7']?>');" id="categoria-4"
                class="col-md-12 col-xl-6 col-12">
            </div>
        </div>


        <div id="footer" class="row justify-content-center">
            <div class="col-xl-12 col-md-12 col-xs-12 mt-2 mt-sm-5">
                <hr style=" border-top: 1px solid white">
            </div>
            <div id=logo-footer-i class="col-xl-2 col-md-3 col-xs-2 mt-2 mt-sm-5">
                <img id=logo-footer src="img/logo-all.png">
            </div>
            <div class="col-xl-2 col-md-3 col-xs-2 mt-2 mt-sm-5">
                <h1 id=titulo-footer>SOBRE NOSOTROS</h1>
                <p id=texto-footer>REGISTRATE</p>
                <p id=texto-footer>REGISTRATE COMO HOTEL</p>
                <p id=texto-footer>CARRERAS</p>
                <p id=texto-footer>SUSTENTABILIDAD</p>
                <p id=texto-footer>SOCIOS</p>
            </div>
            <div class="col-xl-2 col-md-3 col-xs-2 mt-2 mt-sm-5">
                <h1 id=titulo-footer>FAQ</h1>
                <p id=texto-footer>REGISTRATE</p>
                <p id=texto-footer>REGISTRATE COMO HOTEL</p>
                <p id=texto-footer>CARRERAS</p>
                <p id=texto-footer>SUSTENTABILIDAD</p>
                <p id=texto-footer>SOCIOS</p>
            </div>
            <div class="col-xl-2 col-md-3 col-xs-2 mt-2 mt-sm-5">
                <form>
                    <h1 id=titulo-footer>BOLET??N INFORMATIVO</h1>
                    <input type=text placeholder="E-MAIL">
                    <input type=text placeholder="NOMBRE Y APELLIDOS"><br>
                    <button id=texto-footer type="button" class="btn bg-transparent mt-2">REGISTRARSE</button>
                </form>
            </div>
        </div>

        <div id="footer" class="row justify-content-center">
            <div class="col-xl-12 col-md-12 col-xs-12 ">
                <hr style=" border-top: 1px solid white">
            </div>
            <div align=center class="col-xl-6 col-md-12 col-xs-12 ">
                <h1 id=titulo-footer>(C) 2020 FLEXIDREAMS | TODOS LOS DERECHOS RESERVADOS</h1>
            </div>
            <div id=manita onclick="location.href='login.php';" align=center class="col-xl-6 col-md-12 col-xs-12 ">
                <h1 id=titulo-footer><i class="fas fa-key"></i> &nbsp;HOTEL LOGIN</h1>
            </div>

        </div>
    </div>










</body>
<script>
function autocomplete(inp, arr) {
    /*the autocomplete function takes two arguments,
    the text field element and an array of possible autocompleted values:*/
    var currentFocus;
    /*execute a function when someone writes in the text field:*/
    inp.addEventListener("input", function(e) {
        var a, b, i, val = this.value;
        /*close any already open lists of autocompleted values*/
        closeAllLists();
        if (!val) {
            return false;
        }
        currentFocus = -1;
        /*create a DIV element that will contain the items (values):*/
        a = document.createElement("DIV");
        a.setAttribute("id", this.id + "autocomplete-list");
        a.setAttribute("class", "autocomplete-items");
        /*append the DIV element as a child of the autocomplete container:*/
        this.parentNode.appendChild(a);
        /*for each item in the array...*/
        for (i = 0; i < arr.length; i++) {
            /*check if the item starts with the same letters as the text field value:*/
            if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                /*create a DIV element for each matching element:*/
                b = document.createElement("DIV");
                /*make the matching letters bold:*/
                b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                b.innerHTML += arr[i].substr(val.length);
                /*insert a input field that will hold the current array item's value:*/
                b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                /*execute a function when someone clicks on the item value (DIV element):*/
                b.addEventListener("click", function(e) {
                    /*insert the value for the autocomplete text field:*/
                    inp.value = this.getElementsByTagName("input")[0].value;
                    /*close the list of autocompleted values,
                    (or any other open lists of autocompleted values:*/
                    closeAllLists();
                });
                a.appendChild(b);
            }
        }
    });
    /*execute a function presses a key on the keyboard:*/
    inp.addEventListener("keydown", function(e) {
        var x = document.getElementById(this.id + "autocomplete-list");
        if (x) x = x.getElementsByTagName("div");
        if (e.keyCode == 40) {
            /*If the arrow DOWN key is pressed,
            increase the currentFocus variable:*/
            currentFocus++;
            /*and and make the current item more visible:*/
            addActive(x);
        } else if (e.keyCode == 38) { //up
            /*If the arrow UP key is pressed,
            decrease the currentFocus variable:*/
            currentFocus--;
            /*and and make the current item more visible:*/
            addActive(x);
        } else if (e.keyCode == 13) {
            /*If the ENTER key is pressed, prevent the form from being submitted,*/
            e.preventDefault();
            if (currentFocus > -1) {
                /*and simulate a click on the "active" item:*/
                if (x) x[currentFocus].click();
            }
        }
    });

    function addActive(x) {
        /*a function to classify an item as "active":*/
        if (!x) return false;
        /*start by removing the "active" class on all items:*/
        removeActive(x);
        if (currentFocus >= x.length) currentFocus = 0;
        if (currentFocus < 0) currentFocus = (x.length - 1);
        /*add class "autocomplete-active":*/
        x[currentFocus].classList.add("autocomplete-active");
    }

    function removeActive(x) {
        /*a function to remove the "active" class from all autocomplete items:*/
        for (var i = 0; i < x.length; i++) {
            x[i].classList.remove("autocomplete-active");
        }
    }

    function closeAllLists(elmnt) {
        /*close all autocomplete lists in the document,
        except the one passed as an argument:*/
        var x = document.getElementsByClassName("autocomplete-items");
        for (var i = 0; i < x.length; i++) {
            if (elmnt != x[i] && elmnt != inp) {
                x[i].parentNode.removeChild(x[i]);
            }
        }
    }
    /*execute a function when someone clicks in the document:*/
    document.addEventListener("click", function(e) {
        closeAllLists(e.target);
    });
}

/*An array containing all the country names in the world:*/
var countries = [<?php 
                                $insertardatoshhh = "SELECT * FROM flexi_web.hoteles ORDER BY nombre_hotel ASC";
                                $ejecutarinsertarhhh = mysqli_query($enlace,$insertardatoshhh);
                                $contarfilass = mysqli_num_rows($ejecutarinsertarhhh);
                                $numero_filashhh = mysqli_fetch_array($ejecutarinsertarhhh);

                            $insertardatoshh = "SELECT * FROM flexi_web.localizaciones ORDER BY localizacion ASC";
                            $ejecutarinsertarhh = mysqli_query($enlace,$insertardatoshh);
                            $contarfilas = mysqli_num_rows($ejecutarinsertarhh);
                            $numero_filashh = mysqli_fetch_array($ejecutarinsertarhh);
                            for($ii=1; $ii<=$contarfilas; $ii++){
                              
                                echo "'".$numero_filashh['localizacion']."',";
                                $numero_filashh = mysqli_fetch_array($ejecutarinsertarhh);

                              ;
                            }
                            for($ii=1; $ii<=$contarfilas; $ii++){
                                echo "'".$numero_filashhh['nombre_hotel']."',";
                               
                         

                                $numero_filashhh = mysqli_fetch_array($ejecutarinsertarhhh);
                            }
                            ?>];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), countries);
$(function() {

    $('input[name="daterange"]').daterangepicker({
        opens: 'center',
        drops: 'auto'

    }, function(start, end, label) {
        console.log("A new date selection was made: " + start.format('Y-M-D') + ' to ' + end
            .format('Y-M-D'));
    });

});

</script>

</html>