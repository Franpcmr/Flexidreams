<?php

require '../conexion.php';

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
    <script>
     function filtrar() {
        var personas = document.getElementById("personas").value
        var texto = document.getElementById("myInput").value
        var fechas = document.getElementById("daterange").value
        window.location.href = "busqueda.php?texto=" + texto + "&fechas=" + fechas + "&adultos=" + personas
    }
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
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3
                }
            }, {
                breakpoint: 992,
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
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2
                }
            }, {
                breakpoint: 992,
                settings: {
                    slidesToShow: 1
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
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
        dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
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
    </script>
</head>

<body onload="alcargar()" class=body>
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
                <a class="nav-link" href="the-concept.php">The Concept</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Hoteles y Resorts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="experiencias.php">Experiencias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Iniciar Sesion&nbsp;&nbsp;<i id=manita onclick="location.href='../login.php';" class="fas fa-key"></i></a>
            </li>
    </div>
</nav>


</div>




</div>

</div>
<nav id=barradebusqueda class="navbar sticky-top">

<div id=bordillo class="row justify-content-center">

    <div class="col-md-2 col-12 col-xl-3">


        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-map-pin"></i></span>
            </div>
            <input type="text" class="form-control" id="myInput" placeholder="Ubication or hotel name"
                aria-label="Username" aria-describedby="basic-addon1">
        </div>


    </div>


    <div class="col-md-4 col-12 col-xl-2">

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="far fa-calendar-alt"></i></span>
            </div>
            <input type="text" id="daterange" name="daterange" class="form-control"
                        placeholder="From - To" value="">
        </div>

    </div>
 
    <div class="col-md-6 col-12 col-xl-2">

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-users"></i></span>
            </div>
            <input type="number" min=1 value=1 id=personas class="form-control" placeholder="">
        </div>
    </div>
    <div class="col-md-4 col-12 col-xl-1">

        <button  onclick="filtrar()" class="btn btn-light">Search</button>

    </div>
</div>

</nav>







        <div class=container-fluid>

            <div class="row justify-content-center">

                <div id=texto-abajo-nav class="col-md-6 col-xl-6 col-8">
                    <h1 class="titulo">Experiences</h1>
                    <br>
                    <a>Holidays are not only about the places we visit, but about the experiences we
                        live, the things we see and the people we share it with. You already know how you want to spend
                        your
                        next vacation but are still indecisive of where to go?<br><br>
                        Get inspired by our selection of experiences and find the hotel with the right characteristics,
                        so
                        that
                        you can spend your holidays the way you want to. Whether you are a real sports person, a gourmet
                        or
                        a
                        beach-lover (or maybe everything at once?) - with flexidreams you find the best deal for your
                        kind
                        of
                        holiday.
                    </a>

                </div>
            </div>


            <div class="row justify-content-center">
                <div align=center class="divsublime col-xl-12 col-md-12 col-xs-10 ">
                    <div class="row justify-content-center">
                        <div align=center class="colcuadrado col-xl-4 col-md-6 col-xs-12 ">

                            <div style="background-image:url('../img/expe/Romantic1.jpg');
                          background-repeat: no-repeat;
  background-size:  cover; background-position: center;" class="tdcuadrado">
                                <div onclick="window.location.href='../experiencia_c.php?experiencia=1';"
                                    class="fondooscuro_ex">
                                    <div class=abajoex>Romantic getaway</div>
                                </div>
                            </div>


                        </div>
                        <div align=center class="colcuadrado col-xl-8 col-md-6 col-xs-12 ">

                            <div style="background-image:url('../img/expe/Nature4.jpg');
                          background-repeat: no-repeat;
  background-size:  cover; background-position: center;" class="tdcuadrado">
                                <div onclick="window.location.href='../experiencia_c.php?experiencia=2';"
                                    class="fondooscuro_ex">
                                    <div class=abajoex>Nature escape</div>
                                </div>
                            </div>



                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div align=center class=" col-xl-8 col-md-6 col-xs-12 ">
                            <div class="row justify-content-center">
                                <div align=center class="colcuadrado col-xl-12 col-md-12 col-xs-12 ">
                                    <div style="background-image:url('../img/expe/Culture5.jpg');
                          background-repeat: no-repeat;
  background-size:  cover;  background-position: center;" class="tdcuadrado">
                                        <div onclick="window.location.href='../experiencia_c.php?experiencia=3';"
                                            class="fondooscuro_ex">
                                            <div class=abajoex>Culture</div>
                                        </div>
                                    </div>

                                </div>
                                <div align=center class="colcuadrado col-xl-6 col-md-12 col-xs-12 ">
                                    <div style="background-image:url('../img/expe/Wellness1.jpg');
                          background-repeat: no-repeat;
  background-size:  cover; background-position: center;" class="tdcuadrado">
                                        <div onclick="window.location.href='../experiencia_c.php?experiencia=5';"
                                            class="fondooscuro_ex">
                                            <div class=abajoex>Beauty & Wellness</div>
                                        </div>
                                    </div>

                                </div>
                                <div align=center class="colcuadrado logoentero col-xl-6 col-md-12 col-xs-12 ">
                                    <div style="background-image:url('../img/expe/logoentero.jpg');
                          background-repeat: no-repeat;
  background-size:  contain; background-position: center;" class="tdcuadrados ">

                                    </div>

                                </div>
                            </div>

                        </div>

                        <div align=center class="padding colmovile col-xl-4 col-md-6 col-xs-12 ">

                            <div style="background-image:url('../img/expe/Beach5.jpg');
                          background-repeat: no-repeat;
  background-size:  cover; background-position: center;" class=" tdcuadrado">
                                <div onclick="window.location.href='../experiencia_c.php?experiencia=4';"
                                    class="fondooscuro_ex">
                                    <div class=abajoex>Beach</div>
                                </div>
                            </div>



                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div align=center class="colcuadrado col-xl-4 col-md-6 col-xs-12 ">
                            <div style="background-image:url('../img/expe/Gastronomy1.jpg');
  background-repeat: no-repeat;
background-size:  cover; background-position: center;" class="tdcuadrado">
                                <div onclick="window.location.href='../experiencia_c.php?experiencia=6';"
                                    class="fondooscuro_ex">
                                    <div class=abajoex>Gastronomy</div>
                                </div>
                            </div>
                        </div>
                        <div align=center class="colcuadrado col-xl-8 col-md-6 col-xs-12 ">

                            <div style="background-image:url('../img/expe/Hiking.jpg');
  background-repeat: no-repeat;
background-size:  cover; background-position: center;" class="tdcuadrado">
                                <div onclick="window.location.href='../experiencia_c.php?experiencia=7';"
                                    class="fondooscuro_ex">
                                    <div class=abajoex>Hiking</div>
                                </div>
                            </div>



                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div align=center class="colcuadrado col-xl-8 col-md-6 col-xs-12 ">
                            <div style="background-image:url('../img/expe/Family1.jpg');
  background-repeat: no-repeat;
background-size:  cover; background-position: center;" class="tdcuadrado">
                                <div onclick="window.location.href='../experiencia_c.php?experiencia=8';"
                                    class="fondooscuro_ex">
                                    <div class=abajoex>Family trip</div>
                                </div>
                            </div>
                        </div>
                        <div align=center class="colcuadrado col-xl-4 col-md-6 col-xs-12 ">

                            <div style="background-image:url('../img/expe/city.jpg');
  background-repeat: no-repeat;
background-size:  cover; background-position: center;" class="tdcuadrado">
                                <div onclick="window.location.href='../experiencia_c.php?experiencia=9';"
                                    class="fondooscuro_ex">
                                    <div class=abajoex>City break</div>
                                </div>
                            </div>



                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div align=center class="padding colmovile col-xl-4 col-md-6 col-xs-12 ">

                            <div style="background-image:url('../img/expe/sustainable.jpg');
  background-repeat: no-repeat;
background-size:  cover; background-position: center;" class="tdcuadrado">
                                <div onclick="window.location.href='../experiencia_c.php?experiencia=10';"
                                    class="fondooscuro_ex">
                                    <div class=abajoex>Sustainable stays</div>
                                </div>
                            </div>



                        </div>
                        <div align=center class=" col-xl-8 col-md-6 col-xs-12 ">
                            <div class="row justify-content-center">
                                <div align=center class="colcuadrado col-xl-12 col-md-12 col-xs-12 ">
                                    <div style="background-image:url('../img/expe/bike3.jpg');
                          background-repeat: no-repeat;
  background-size:  cover; background-position: center;" class="tdcuadrado">
                                        <div onclick="window.location.href='../experiencia_c.php?experiencia=11';"
                                            class="fondooscuro_ex">
                                            <div class=abajoex>Cycling</div>
                                        </div>
                                    </div>

                                </div>
                                <div align=center class="colcuadrado col-xl-6 col-md-12 col-xs-12 ">
                                    <div style="background-image:url('../img/expe/Adults_only1.jpg');
                          background-repeat: no-repeat;
  background-size:  cover; background-position: center;" class="tdcuadrado">
                                        <div onclick="window.location.href='../experiencia_c.php?experiencia=12';"
                                            class="fondooscuro_ex">
                                            <div class=abajoex>Adults only</div>
                                        </div>
                                    </div>

                                </div>
                                <div align=center class="colcuadrado col-xl-6 col-md-12 col-xs-12 ">
                                    <div style="background-image:url('../img/expe/Golf.jpg');
                          background-repeat: no-repeat;
  background-size:  cover; background-position: center;" class="tdcuadrado">
                                        <div onclick="window.location.href='../experiencia_c.php?experiencia=13';"
                                            class="fondooscuro_ex">
                                            <div class=abajoex>Golf</div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
            <hr>
            <!--- <table class="tableexperiences">

                    <tr align=center>
                        <td  style="background-image:url('../img/expe/Romantic1.jpg');
                          background-repeat: no-repeat;
  background-size:  cover;">


                            <div class="fondooscuro_ex">
                                <div class=abajoex>Romantic getaway</div>
                            </div>

                        </td>
                        <td class="tdcuadrado " colspan=2 style="background-image:url('../img/expe/Nature4.jpg');
                          background-repeat: no-repeat;
  background-size:  cover;">



                             <div class="fondooscuro_ex">
                                <div class=abajoex>Nature escape</div>
                            </div>



                        </td>
                    </tr>
                    <tr align=center>
                        <td colspan=2 class=tdcuadrado style="background-image:url('../img/expe/Culture5.jpg');
                          background-repeat: no-repeat;
  background-size:cover;">



                            <div class="fondooscuro_ex">
                                <div class=abajoex>Culture</div>
                            </div>




                        </td>
                        <td rowspan=2 class=tdcuadrado style="background-image:url('../img/expe/Beach5.jpg');
                          background-repeat: no-repeat;
  background-size: cover;">



                            <div class="fondooscuro_ex">
                                <div class=abajoex>Beach</div>
                            </div>



                        </td>
                    </tr>
                    <tr align=center>
                        <td class=tdcuadrado style="background-image:url('../img/expe/Wellness1.jpg');
                          background-repeat: no-repeat;
  background-size:  cover;">



                            <div class="fondooscuro_ex">
                                <div class=abajoex>Beauty & Wellness</div>
                            </div>


                        </td>
                        <td class=tdcuadrado style="background-image:url('../img/expe/logoentero.png');
                          background-repeat: no-repeat;
  background-size: cover;">


                      

                        </td>
                    </tr>
                    <tr align=center>
                        <td class=tdcuadrado style="background-image:url('../img/expe/Gastronomy1.jpg');
                          background-repeat: no-repeat;
  background-size: cover;">


                            <div class="fondooscuro_ex">
                                <div class=abajoex>Gastronomy</div>
                            </div>

                            
                        </td>
                        <td class=tdcuadrado colspan=2 style="background-image:url('../img/expe/Hiking.jpg');
                          background-repeat: no-repeat;
  background-size: cover;">


                            <div class="fondooscuro_ex">
                                <div class=abajoex>Hiking</div>
                            </div>


                        </td>
                    </tr>
                    <tr align=center>
                        <td class=tdcuadrado colspan=2 style="background-image:url('../img/expe/Family1.jpg');
                          background-repeat: no-repeat;
  background-size: cover;">


                            <div class="fondooscuro_ex">
                                <div class=abajoex>Family trip</div>
                            </div>


                        </td>
                        <td  class=tdcuadrado style="background-image:url('../img/expe/city.jpg');
                          background-repeat: no-repeat;
  background-size:  cover;">


                            <div class="fondooscuro_ex">
                                <div class=abajoex>City break</div>
                            </div>


                        </td>
                    </tr>

                    <tr align=center>
                        <td class=tdcuadrado rowspan=2 style="background-image:url('../img/expe/sustainable.jpg');
                          background-repeat: no-repeat;
  background-size: cover;">


                            <div class="fondooscuro_ex">
                                <div class=abajoex>Sustainable stays</div>
                            </div>


                        </td>
                        <td class=tdcuadrado style="background-image:url('../img/expe/Adults_only1.jpg');
                          background-repeat: no-repeat;
  background-size: cover;">


                            <div class="fondooscuro_ex">
                                <div class=abajoex>Adults only</div>
                            </div>


                        </td>
                        <td class=tdcuadrado style="background-image:url('../img/expe/Golf.jpg');
                          background-repeat: no-repeat;
  background-size:cover;">


                            <div class="fondooscuro_ex">
                                <div class=abajoex>Golf</div>
                            </div>


                        </td>
                    </tr>
                    <tr align=center>
                        <td class=tdcuadrado colspan=2  style="background-image:url('../img/expe/bike3.jpg');
                          background-repeat: no-repeat;
  background-size: cover;">


                            <div class="fondooscuro_ex">
                                <div class=abajoex>Cycling</div>
                            </div>


                        </td>
                      
                    </tr>
                </table>
            </div>
        </div>
        -->
            <div id="footer" class="row justify-content-center">
                <div class="col-xl-12 col-md-6 col-xs-12 mt-2 mt-sm-5">
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