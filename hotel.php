<?php 
require 'conexion.php';


$hotelseleccionado = $_GET['hotel'];
$insertardatosh = "SELECT * FROM flexi_web.hoteles where id = '$hotelseleccionado'";
$ejecutarinsertarh = mysqli_query($enlace,$insertardatosh);
$contarfilas = mysqli_num_rows($ejecutarinsertarh);
$numero_filash = mysqli_fetch_array($ejecutarinsertarh);


?>
<html>

<head>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link rel="stylesheet" href="style2.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/d3js/6.1.1/d3.min.js"></script>
    <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.4/themes/redmond/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://kit.fontawesome.com/60b8617b2a.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <script>
    $(document).ready(function() {
        $(".testimonial-carousel").slick({
            infinite: !0,
            slidesToShow: 4,
            slidesToScroll: 2,
            autoplay: !0,
            arrows: false,
            variableWidth: true,

            responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 12
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

    function fade() {
        document.getElementById("categoria-5").classList.toggle('fade');

    }

    function alcargar() {


        window.location.href = '#inicio';
        setTimeout(function() {


            document.getElementById("categoria-5").style.backgroundImage =
                "url('back-pannel/<?php echo $numero_filash['foto16']?>')";

        }, 10);

        setTimeout(function() {

            document.getElementById("categoria-5").classList.toggle('fade');


        }, 18000);

        setTimeout(function() {
            fade();
            document.getElementById("categoria-5").style.backgroundImage =
                "url('back-pannel/<?php echo $numero_filash['foto17']?>')";

        }, 20000);

        setTimeout(function() {

            document.getElementById("categoria-5").classList.toggle('fade');


        }, 38000);
        setTimeout(function() {
            fade();
            document.getElementById("categoria-5").style.backgroundImage =
                "url('back-pannel/<?php echo $numero_filash['foto18']?>')";


        }, 40000);
        setTimeout(function() {
            document.getElementById("categoria-5").classList.toggle('fade');

        }, 58000);
        setTimeout(function() {
            fade();
            alcargar();
        }, 60000);
    }


    function ampliar() {
        document.getElementById('desplagable_x').classList.toggle('fadee');
    }
    function godaterange() {
        window.location.href = '#daterange';
        ampliar();
    }
    function ampliarir() {
        window.location.href = '#equimaientoid';
        ampliar();
    }
    </script>
    <script>
     function filtrar() {
        var personas = document.getElementById("personas").value
        var texto = document.getElementById("myInput").value
        var fechas = document.getElementById("daterange").value
        window.location.href = "busqueda.php?texto=" + texto + "&fechas=" + fechas + "&adultos=" + personas
    }
    moment.locale("en");
    class CalendarYvv {
        constructor(etiqueta = "", diaSeleccionado = "", primerDia = "Lunes") {
            this.etiqueta = etiqueta; // etiqueta donde se mostrará
            this.primerDia = primerDia; // inicio de la semana
            this.diaSeleccionado = diaSeleccionado == "" ? moment().format("Y-M-D") :
                diaSeleccionado; // día actual seleccionado

            this.funcPer = function(e) {}; // funcion a ejecutar al lanzar el evento click
            this.funcNext = false; // funcion a ejecutar al lanzar el evento click
            this.funcPrev = false; // funcion a ejecutar al lanzar el evento click
            this.currentSelected = moment().format("Y-M-D"); // elemento seleccionado

            this.diasResal = []; // dias importantes
            this.diasResalrequest = []; // dias importantes
            this.diasResalnull = []; // dias importantes
            this.colorResal = "#1ABC9C"; // color de los dias importantes
            this.colorResalrequest = "#F1C40F"; // color de los dias importantes
            this.colorResalnull = "#E74C3C"; // color de los dias importantes
            this.textResalt = "text-black"; // color de texto de dias importantes

            this.bg = "bg-dark"; // color de fondo de la cabecera
            this.textColor = "text-white"; // color de texto en la cabecera
            this.btnH = "btn-outline-light"; // color de boton normal
            this.btnD = "btn-rounded-success"; // color de boton al pasar el mouse - "btn-outline-dark";

        }
        startElements() {
            this.diaSeleccionado = this.corregirMesA(this.diaSeleccionado);
            this.inicioDia = moment(this.diaSeleccionado).format("dddd"); // inicio dia del mes
            this.mesSeleccionado = this.diaSeleccionado.split("-")[1] * 1; // mes seleccionado
            this.anioSeleccionado = this.diaSeleccionado.split("-")[0] * 1; // año seleccionado
            this.cantDias = moment(this.diaSeleccionado).daysInMonth() * 1; // cantidad de dias del mes
            this.diasCoto = ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"];
            this.diasLargo = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
        }
        createCalendar() {
            this.startElements();
            var cont = $(this.etiqueta);
            var cntCale = $("<div class='calendar-yvv w-100'>");
            var headerCalendar = this.createHeaderM();
            var daysLettCalendar = this.createDayTag();
            var daysNumCalendar = this.createDaysMont();

            cont.html("");
            cntCale.append(headerCalendar);
            cntCale.append(daysLettCalendar);
            cntCale.append(daysNumCalendar);
            cont.append(cntCale);
        }
        createHeaderM() {
            var cont = $(
                "<div class='d-flex justify-content-between p-2 border align-items-center border-bottom-0 " +
                this.bg + " " + this.textColor + "'>");
            var arrowL = $("<span class='btn " + this.btnH + "'>").html("<");
            var arrowR = $("<span class='btn " + this.btnH + "'>").html(">");
            var title = $("<span class='text-uppercase'>").html(moment(this.diaSeleccionado).format("MMMM - Y"));
            var _this = this;

            arrowL.on("click", function(e) {
                _this.mesAnterior(_this)
            });
            arrowR.on("click", function(e) {
                _this.mesSiguiente(_this)
            });
            cont.append(arrowL);
            cont.append(title);
            cont.append(arrowR);
            return cont;
        }
        createDayTag() {
            var newPrimerDia = this.firtsMayus(this.primerDia);
            var diasOrd = this.ordenarDiasMes(newPrimerDia);

            var cont = $("<div class='d-flex border w-100 border-top-0 " + this.bg + " " + this.textColor + "'>");

            diasOrd.fechCort.forEach(function(e) {
                var div = $(
                    "<div class='cajamesesfecha d-flex border flex-fill w-100 justify-content-center p-2'>"
                ).html(
                    e);
                cont.append(div);
            });
            return cont;
        }
        createDaysMont() {
            var diaSelected = this.corregirMesA(this.anioSeleccionado + "-" + this.mesSeleccionado + "-01");
            var primerDiaMes = moment(diaSelected).format("dddd");
            var diaInicio = this.firtsMayus(primerDiaMes); //this.firtsMayus(this.inicioDia);
            var diasOrd = this.ordenarDiasMes(this.firtsMayus(this.primerDia));
            var posMes = diasOrd.fechLarg.indexOf(diaInicio);

            var cnt = 0;
            var cntG = $("<div class='w-100'>");

            var cont = $("<div class='d-flex border w-100 border-top-0'>");
            var emptyTag =
                "<div class='d-flex border flex-fill w-100 justify-content-center pt-3 pb-3 btn' style='color:transparent'>";
            for (var j = 0; j < posMes; j++) {
                var div = $(emptyTag).html("0");
                cont.append(div);
                cnt++;
            }
            for (var i = 0; i < this.cantDias; i++) {
                var fechNow = this.anioSeleccionado + "-" + this.mesSeleccionado + "-" + (i + 1);
                div = $("<div class='cajafecha d-flex border flex-fill w-100 justify-content-center pt-3 pb-3 btn " +
                    this
                    .btnD + "' data-date='" + fechNow + "' style='background: " + this.colorResalnull +
                    "; color: " + this.textResalt + "; font-weight: bold;'>").html(i + 1);
                var clas_e = this;
                var _ind = (this.cantDias + posMes) % 7;

                for (var ii = 0; ii < this.diasResal.length; ii++) {
                    if (fechNow == this.diasResal[ii]) {
                        div = $("<div class='cajafechaprecio d-flex border flex-fill w-100 justify-content-center pt-3 pb-3 btn " +
                            this.btnD + "' data-date='" + fechNow + "' style='background: " + this.colorResal +
                            "; color: " + this.textResalt + "; font-weight: bold;'>").html(i + 1);
                    }
                }

                for (var iii = 0; iii < this.diasResalrequest.length; iii++) {
                    if (fechNow == this.diasResalrequest[iii]) {
                        div = $("<div class='cajafechaprecio d-flex border flex-fill w-100 justify-content-center pt-3 pb-3 btn " +
                            this.btnD + "' data-date='" + fechNow + "' style='background: " + this
                            .colorResalrequest + "; color: " + this.textResalt + "; font-weight: bold;'>").html(
                            i + 1);
                    }
                }



                div.on("click", function(e) {
                    var daySelec = $(e.target).attr("data-date");
                    clas_e.currentSelected = daySelec;
                    clas_e.funcPer(clas_e)
                });
                cont.append(div);
                if (cnt == 6) {
                    //div.on("click", this.funcPer);
                    cntG.append(cont);
                    cont = $("<div class='d-flex border w-100 border-top-0'>");
                    cnt = 0;
                } else if (this.cantDias == (i + 1)) {
                    for (var j = 0; j < (7 - _ind); j++) {
                        var div = $(emptyTag).html("0");
                        cont.append(div);
                        cnt++;
                    }
                    cntG.append(cont);
                    cont = $("<div class='d-flex border w-100 border-top-0'>");
                    cnt = 0;
                } else {
                    //cont.append(div);
                    cnt++;
                }
            }
            return cntG;
        }
        ordenarDiasMes(dia) {
            var posMes = this.diasLargo.indexOf(dia);
            var fechCort = [];
            var fechLarg = [];

            for (var i = posMes; i < this.diasCoto.length; i++) {
                fechCort.push(this.diasCoto[i]);
                fechLarg.push(this.diasLargo[i]);
            }
            for (var j = 0; j < posMes; j++) {
                fechCort.push(this.diasCoto[j]);
                fechLarg.push(this.diasLargo[j]);
            }
            return {
                fechCort,
                fechLarg
            };
        }
        firtsMayus(letter) {
            var lett = "";
            for (var i = 0; i < letter.length; i++) {
                if (i == 0) lett += "" + letter[i].toUpperCase();
                else lett += "" + letter[i].toLowerCase();
            }
            return lett;
        }
        mesAnterior(ev) {
            ev.mesSeleccionado--;
            if (ev.mesSeleccionado == 0) {
                ev.anioSeleccionado--;
                ev.mesSeleccionado = 12;
            }
            var day = ev.diaSeleccionado.split("-")[2] * 1;
            ev.diaSeleccionado = ev.anioSeleccionado + "-" + ev.mesSeleccionado + "-" + day;
            ev.diaSeleccionado = ev.corregirMesA(ev.diaSeleccionado);
            ev.cantDias = moment(ev.diaSeleccionado).daysInMonth() * 1;
            ev.createCalendar();

            if (this.funcPrev) {
                this.funcPrev(ev)
            } else {
                ev.createCalendar();
            }
        }
        mesSiguiente(ev) {
            ev.mesSeleccionado++;
            if (ev.mesSeleccionado == 13) {
                ev.anioSeleccionado++;
                ev.mesSeleccionado = 1;
            }
            var day = ev.diaSeleccionado.split("-")[2] * 1;
            ev.diaSeleccionado = ev.anioSeleccionado + "-" + ev.mesSeleccionado + "-" + day;
            ev.diaSeleccionado = ev.corregirMesA(ev.diaSeleccionado);
            ev.cantDias = moment(ev.diaSeleccionado).daysInMonth() * 1;

            if (this.funcNext) {
                this.funcNext(ev)
            } else {
                ev.createCalendar();
            }
        }
        corregirMesA(_f) {
            var fec = _f.split("-");
            fec[1] = (fec[1] < 10 && fec[1].length == 1) ? ("0" + fec[1]) : fec[1];
            fec[2] = (fec[2] < 10 && fec[2].length == 1) ? ("0" + fec[2]) : fec[2];
            return fec.join("-");
        }
    }
    </script>
</head>

<body id=inicio onload="alcargar()" class=body>

    <div class=container-fluid>

        <div id=top-bar-pc class="row justify-content-center">

            <div align=center class="col-md-2 col-xl-2">

                <h4 class="titulo-top">HOTELES Y RESORTS</h4>


            </div>
            <div align=center class="col-md-1 col-xl-1">

                <h4 class="titulo-top">FAVORITOS</h4>


            </div>

            <div style="cursor: pointer;" onclick="window.location.href='index.php';" align=center
                class="col-md-2 col-xl-2">

                <img class="logo-top" src="img/logo-white.svg">
                <h4>
                    </h2>

            </div>
            <div style="cursor: pointer;" onclick="window.location.href='experiencias.php';" align=center
                class="col-md-1 col-xl-1">

                <h4 class="titulo-top">EXPERIENCIAS</h4>

            </div>
            <div style="cursor: pointer;" align=center class="col-md-2 col-xl-2">

                <h4 class="titulo-top">BLOG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i id=manita
                        onclick="location.href='login.php';" class="fas fa-key"></i></h4>



            </div>


        </div>
        <div id=top-bar-movile class="row">

            <div class="col-md-12 col-12">
                <h2 class="titulo-top"><img class="logo-top" src="img/logo-white.png">
                    &nbsp;FLEXIDREAMS&nbsp;&nbsp;&nbsp;<i onclick="location.href='login.php';" class="fas fa-key"></i>
                </h2>
            </div>
        </div>


    </div>

    <div id="categoria-5">
        <div class="fondooscuro1">
            <div class=abajo1>

                <h2 class=enjoy><?php echo $numero_filash['nombre_hotel']?></h2><br>
                <h4><?php echo $numero_filash['categoria']?></h4>
                <h2><?php echo $numero_filash['poblacion'].', '.$numero_filash['provincia'].', '.$numero_filash['pais']?>
                </h2>
            </div>
        </div>
    </div>

    <img style="display: none" src="back-pannel/<?php echo $numero_filash['foto16']?>"></img>
    <img style="display: none" src="back-pannel/<?php echo $numero_filash['foto17']?>"></img>
    <img style="display: none" src="back-pannel/<?php echo $numero_filash['foto18']?>"></img>



    <div class=container-fluid>

        <div id=divtextohotel1>
            <div class="row justify-content-center">
                <div class="etiquetas">
                    <ul class="tags">
                        <li><a class="tag">Beach</a></li>
                        <li><a class="tag">Beauty and Wellness</a></li>
                        <li><a class="tag">Only Adults</a></li>
                    </ul>
                </div>
            </div>
            <div id=divtextohotel2>

                <div class="row justify-content-center">
                    <div style=" background-color:black; " class="text-negroh col-xl-9 col-md-9 col-xs-6">
                        <div style="padding: 2%;" class="row justify-content-center">
                            <div style=" background-color:black; padding: 1em;"
                                class="text-negroh col-xl-6 col-md-6 col-xs-12">
                                <a><?php echo $numero_filash['text1'] ?>

                                </a>

                            </div>
                            <div style=" background-color:black; padding: 1em;"
                                class="text-negroh col-xl-6 col-md-6 col-xs-12">
                                <a><?php echo $numero_filash['text2'] ?>
                                </a>
                            </div>
                            <div style=" background-color:black; padding: 1em;"
                                class="text-negroh col-xl-12 col-md-12 col-xs-12">
                                <div class="row justify-content-center">

                                    <div align=center class="col-xl-2 col-md-2 col-xs-12">
                                        <a style="font-size:1vw;"><?php 
                                          $equi = $numero_filash['equi1'];
                                        $insertardatoshc = "SELECT icono FROM flexi_web.equipamientos_hotel,flexi_web.tipo_equipaminetos where equipamientos_hotel.equipamiento = tipo_equipaminetos.id and hotel = '$hotelseleccionado' and equipamientos = '$equi'
                                    ";
$ejecutarinsertarhc = mysqli_query($enlace,$insertardatoshc);
$contarfilasc = mysqli_num_rows($ejecutarinsertarhc);
$numero_filashc = mysqli_fetch_array($ejecutarinsertarhc);
                                        
                                      
                                       echo  $numero_filashc['icono'].'&nbsp;'.$numero_filash['equi1'];
                                        
                                        
                                        
                                        ?></a>
                                    </div>
                                    <div align=center class="col-xl-2 col-md-2 col-xs-12">
                                        <a style="font-size:1vw;"><?php 
                                          $equi = $numero_filash['equi2'];
                                        $insertardatoshc = "SELECT icono FROM flexi_web.equipamientos_hotel,flexi_web.tipo_equipaminetos where equipamientos_hotel.equipamiento = tipo_equipaminetos.id and hotel = '$hotelseleccionado' and equipamientos = '$equi'
                                    ";
$ejecutarinsertarhc = mysqli_query($enlace,$insertardatoshc);
$contarfilasc = mysqli_num_rows($ejecutarinsertarhc);
$numero_filashc = mysqli_fetch_array($ejecutarinsertarhc);
                                        
                                      
                                       echo  $numero_filashc['icono'].'&nbsp;'.$numero_filash['equi2'];
                                        
                                        
                                        
                                        ?></a>
                                    </div>
                                    <div align=center class="col-xl-2 col-md-2 col-xs-12">
                                        <a style="font-size:1vw;"><?php 
                                          $equi = $numero_filash['equi3'];
                                        $insertardatoshc = "SELECT icono FROM flexi_web.equipamientos_hotel,flexi_web.tipo_equipaminetos where equipamientos_hotel.equipamiento = tipo_equipaminetos.id and hotel = '$hotelseleccionado' and equipamientos = '$equi'
                                    ";
$ejecutarinsertarhc = mysqli_query($enlace,$insertardatoshc);
$contarfilasc = mysqli_num_rows($ejecutarinsertarhc);
$numero_filashc = mysqli_fetch_array($ejecutarinsertarhc);
                                        
                                      
                                       echo  $numero_filashc['icono'].'&nbsp;'.$numero_filash['equi3'];
                                        
                                        
                                        
                                        ?></a>
                                    </div>
                                    <div align=center class="col-xl-2 col-md-2 col-xs-12">
                                        <a style="font-size:1vw;"><?php 
                                          $equi = $numero_filash['equi4'];
                                        $insertardatoshc = "SELECT icono FROM flexi_web.equipamientos_hotel,flexi_web.tipo_equipaminetos where equipamientos_hotel.equipamiento = tipo_equipaminetos.id and hotel = '$hotelseleccionado' and equipamientos = '$equi'
                                    ";
$ejecutarinsertarhc = mysqli_query($enlace,$insertardatoshc);
$contarfilasc = mysqli_num_rows($ejecutarinsertarhc);
$numero_filashc = mysqli_fetch_array($ejecutarinsertarhc);
                                        
                                      
                                       echo  $numero_filashc['icono'].'&nbsp;'.$numero_filash['equi4'];
                                        
                                        
                                        
                                        ?></a>
                                    </div>
                                    <div align=center class="col-xl-2 col-md-2 col-xs-12">
                                        <a style="font-size:1vw;"><?php 
                                          $equi = $numero_filash['equi5'];
                                        $insertardatoshc = "SELECT icono FROM flexi_web.equipamientos_hotel,flexi_web.tipo_equipaminetos where equipamientos_hotel.equipamiento = tipo_equipaminetos.id and hotel = '$hotelseleccionado' and equipamientos = '$equi'
                                    ";
$ejecutarinsertarhc = mysqli_query($enlace,$insertardatoshc);
$contarfilasc = mysqli_num_rows($ejecutarinsertarhc);
$numero_filashc = mysqli_fetch_array($ejecutarinsertarhc);
                                        
                                      
                                       echo  $numero_filashc['icono'].'&nbsp;'.$numero_filash['equi5'];
                                        
                                        
                                        
                                        ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div align=center style=" cursor: pointer;"
                                    onclick="godaterange()"
                                    class="col-xl-12 col-md-2 col-xs-12">
                                    <button type="button" class="reservarboton btn btn-light">COMPROBAR
                                        FECHAS<BR></button>
                                </div>
                                <div align=center onclick="ampliarir()" style=" cursor: pointer;"
                                    class="col-xl-12 col-md-2 col-xs-12">
                                    <BR><a> <i class="fas fa-angle-down"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div style="padding:50px" class="row justify-content-center">
            <div class="imagendivhotel col-xl-4 col-md-7 col-xs-12">
                <div class=divfotohotelp1
                    style=" background-image: url('back-pannel/<?php echo $numero_filash['foto1'] ?>');">
                    <div class=divfotop1marc>
                    </div>
                </div>
            </div>
            <div style="padding-left:50px" class="col-xl-4 col-md-5 col-xs-12">
                <h4 id="subtitulo_t_hotel"><?php echo $numero_filash['subtitulo3'] ?></h4>
                <h2 id="titulo_t_hotel"><b><?php echo $numero_filash['titulo3'] ?></b></h2><br>

                <a id="texto_hotel"><?php echo $numero_filash['text3'] ?>
                </a>
            </div>
        </div>
        <br><br><br>
        <div style="padding:50px" class="row justify-content-center">

            <div style="padding-right:50px" class="col-xl-4 col-md-5 col-xs-12">
                <h4 id="subtitulo_t_hotel" align=right><?php echo $numero_filash['subtitulo4'] ?></h4>
                <h2 id="titulo_t_hotel" align=right><b><?php echo $numero_filash['titulo4'] ?></b></h2>
                <br>
                <p id="texto_hotel"><?php echo $numero_filash['text4'] ?>
                </p>
            </div>

            <div class="imagendivhotel col-xl-4 col-md-7 col-xs-12">
                <div class=divfotohotelp2
                    style=" background-image: url('back-pannel/<?php echo $numero_filash['foto2'] ?>');">
                    <div class=divfotop2marc>
                    </div>
                </div>
            </div>
        </div>
        <a id=equimaientoid></a>
        <br><br>





        <?php 
                
                $insertardatos11 = "SELECT tipo,icono FROM flexi_web.tipo_equipaminetos,flexi_web.equipamientos_hotel WHERE tipo_equipaminetos.id = equipamientos_hotel.equipamiento AND hotel = '$hotelseleccionado' ORDER BY tipo";
$ejecutarinsertar11 = mysqli_query($enlace,$insertardatos11);
$contarfilas = mysqli_num_rows($ejecutarinsertar11);
$numero_filas11 = mysqli_fetch_array($ejecutarinsertar11);
$contadoroculto = 0;
$seguro= 0;
$divoculto = 1;
$divsi = 1;
                        $equipamientoanterior = ' ';
           
                        for($i=1; $i<=$contarfilas; $i++){
                            $GLOBAL = $contadoroculto;
                            $GLOBAL = $seguro;
                            $GLOBAL = $divoculto;
                            $GLOBAL = $divsi;


                             
                            if ($equipamientoanterior <> $numero_filas11['tipo']){
                                
                             
                                if($seguro == 1){
                                    echo '</div><br>';
                                    $seguro = 0;
                                }
                                if($contadoroculto < 3 && $divsi == 1){
                                    $divsi = 0;
                                    echo '<div class="row justify-content-center">
                                    <div class="col-xl-8 col-md-8 col-xs-10">';
                                }
                                if($contadoroculto == 3 && $divoculto == 1){
                                    $seguro = 0;
                                   echo '</div></div>
                                   <div  id="desplagable_x" class="desplagable_x row justify-content-center">
                                       <div class="col-xl-8 col-md-8 col-xs-10">';
                                       $divoculto = 0;
                                }
                                $contadoroculto = $contadoroculto + 1;  echo '<div class="row justify-content-center">

                                    <div class="col-xl-12 col-md-12 col-xs-12">
                                         <h4>'.$numero_filas11['icono'].'&nbsp;'.$numero_filas11['tipo'].'</h4>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                ';
                                $equipamientoactual = $numero_filas11['tipo'];
                $insertardatos12 = "SELECT * FROM flexi_web.tipo_equipaminetos,flexi_web.equipamientos_hotel WHERE tipo_equipaminetos.id = equipamientos_hotel.equipamiento AND tipo = '$equipamientoactual'  AND hotel = '$hotelseleccionado'";
                $ejecutarinsertar12 = mysqli_query($enlace,$insertardatos12);
                $contarfilas2 = mysqli_num_rows($ejecutarinsertar12);
                $numero_filas12 = mysqli_fetch_array($ejecutarinsertar12);
                for($ii=1; $ii<=$contarfilas2; $ii++){
                               
                    
                    
                    echo '<div class="col-xl-4 col-md-4 col-xs-4">
                                <a>'.$numero_filas12['equipamientos'].'</a>
                            </div>';
                            $numero_filas12 = mysqli_fetch_array($ejecutarinsertar12);

}


                            }
                            $seguro = 1;
                                $equipamientoanterior = $numero_filas11['tipo'];
                                $numero_filas11 = mysqli_fetch_array($ejecutarinsertar11);
                        }
                        echo '</div></div></div></div>';
                    
                        
                     
                    
                   
           
                
                
                ?>

        <div class=container-fluid>
            <br>
            <div class="row justify-content-center">
                <div onclick="ampliar()" style=" cursor: pointer;" class="col-xl-1 col-md-1 col-xs-1">
                    <a> <i class="fas fa-angle-down"></i></a>
                </div>
            </div>
            <br><br>

            <div id="hotelmincon" class="row justify-content-center">

                <div style=" height: 500px;" class="col-xl-4 col-md-8 col-xs-12">
                    <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                        src="https://maps.google.com/maps?q=<?php echo $numero_filash['maps']  ?>+(wererwe)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                    </iframe>

                </div>
                <div style=" height: 500px;" class="col-xl-4 col-md-4 col-xs-12">
                    <iframe src="<?php echo $numero_filash['tripad']  ?>" width="100%" height="100%">
                    </iframe>
                </div>

            </div>

            <br><br>
            <div class="row justify-content-center">
                <div class="col-md-3 col-xl-8 col-8">

                    <h2 align=center><b>Gallery</b>
                    </h2>

                    <div id="gallery-lightbox" class="row" data-toggle="modal" data-target="#exampleModal">
                        <div class="col-6 col-md-4 col-lg-4 p-1">
                            <img class="w-100" src="back-pannel/<?php echo $numero_filash['foto3']?>"
                                data-target="#carouselExample" data-slide-to="0">
                        </div>
                        <div class="col-6 col-md-4 col-lg-4 p-1">
                            <img class="w-100" src="back-pannel/<?php echo $numero_filash['foto4']?>"
                                data-target="#carouselExample" data-slide-to="1">
                        </div>
                        <div class="col-6 col-md-4 col-lg-4 p-1">
                            <img class="w-100" src="back-pannel/<?php echo $numero_filash['foto5']?>"
                                data-target="#carouselExample" data-slide-to="2">
                        </div>
                        <div class="col-6 col-md-4 col-lg-4 p-1">
                            <img class="w-100" src="back-pannel/<?php echo $numero_filash['foto6']?>"
                                data-target="#carouselExample" data-slide-to="3">
                        </div>
                        <div class="col-6 col-md-4 col-lg-4 p-1">
                            <img class="w-100" src="back-pannel/<?php echo $numero_filash['foto7']?>"
                                data-target="#carouselExample" data-slide-to="4">
                        </div>
                        <div class="col-6 col-md-4 col-lg-4 p-1">
                            <img class="w-100" src="back-pannel/<?php echo $numero_filash['foto8']?>"
                                data-target="#carouselExample" data-slide-to="5">
                        </div>


                    </div>

                </div>
            </div>
            <div style="padding-top:10%;" class="modal" id="exampleModal" tabindex="-1" role="dialog"
                aria-hidden="true">
                <button style="font-size:50px;" type="button" class="close m-0 p-3 text-white position-absolute right-5"
                    data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content bg-transparent">
                        <div class="modal-body p-0">
                            <div id="carouselExample" class="carousel slide carousel-fade" data-ride="false">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="back-pannel/<?php echo $numero_filash['foto3']?>"
                                        alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="back-pannel/<?php echo $numero_filash['foto4']?>"
                                        alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="back-pannel/<?php echo $numero_filash['foto5']?>"
                                        alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="back-pannel/<?php echo $numero_filash['foto6']?>"
                                        alt="Fourth slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="back-pannel/<?php echo $numero_filash['foto7']?>"
                                        alt="Fourth slide">
                                </div>

                                <div class="carousel-item">
                                    <img class="d-block w-100" src="back-pannel/<?php echo $numero_filash['foto8']?>"
                                        alt="Fourth slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="back-pannel/<?php echo $numero_filash['foto9']?>"
                                        alt="Fourth slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="back-pannel/<?php echo $numero_filash['foto10']?>"
                                        alt="Fourth slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="back-pannel/<?php echo $numero_filash['foto11']?>"
                                        alt="Fourth slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="back-pannel/<?php echo $numero_filash['foto12']?>"
                                        alt="Fourth slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="back-pannel/<?php echo $numero_filash['foto13']?>"
                                        alt="Fourth slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="back-pannel/<?php echo $numero_filash['foto14']?>"
                                        alt="Fourth slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="back-pannel/<?php echo $numero_filash['foto15']?>"
                                        alt="Fourth slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div id="hotelmincon" class="row justify-content-center">
                <div align=center class="col-md-12 col-xl-12 col-12">
                    <h2><b>Book your stay and sleep for free</b></h2>
                    <br>
                    <h4>1. Book your stay with flexidreams</h4>
                    <h4>2. Enjoy additional hotel services</h4>
                    <h4>3. Sleep for free</h4>
                </div>
            </div><br>
            <div class="row justify-content-center">
                <div class="col-md-12 col-xl-12 col-12">

                    <h4 align=center>How can I redeem my minimum cosumption? </h4><br>
                    <h4 align=center><b> Get inspired by our collection</b>
                    </h4>
                </div>
                <div class="col-md-12 col-xl-12 col-12">
                    <section class=" pos-r">
                        <div class="row">
                            <div class="col-md-12 col-xl-12 col-12">
                                <div class=" pos-r">
                                    <div class="testimonial-carousel">
                                    
                                        <?php 



$insertardatoshc = "SELECT * FROM flexi_web.servicios_hotel,flexi_web.tipos_servicios where tipos_servicios.id = servicios_hotel.servicio and hotel = '$hotelseleccionado'";
$ejecutarinsertarhc = mysqli_query($enlace,$insertardatoshc);
$contarfilasc = mysqli_num_rows($ejecutarinsertarhc);
$numero_filashc = mysqli_fetch_array($ejecutarinsertarhc);




        
for($i=1; $i<=$contarfilasc; $i++){

    echo '                         
    <div style="background-image: url(back-pannel/'.$numero_filashc['foto'].');" class="one-slideh">                                 
    <div class="fondooscuro">
                                            <div class=abajoh>
                                                    <h2>'.$numero_filashc['servicio'].'</h2><br>
                                            </div>
                                        </div>
                                    </div>
                                        
    
    
    
    ';
    $numero_filashc = mysqli_fetch_array($ejecutarinsertarhc);




}



                                    ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                </section>


                <br>
                <div class=container-fluid>
                <div id=panelreserva class="row justify-content-center">
            <div class="col-xl-12 col-md-12 col-xs-12">

                <div class="row justify-content-center">
                    <div align=center class="col-xl-6 col-md-12 col-xs-12">
                        <div class="row justify-content-center">
                            <div align=center class="col-xl-12 col-md-12 col-xs-12">

                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <h1><?php echo $numero_filash['nombre_hotel']?></h1>
                                            <form action="reserva-proceso-comprobar.php" method="post">
                                            <label class="control-label">Selecciona el rango de fechas
                                                <input type="text" id=daterange name="daterange" class="form-control"
                                                    placeholder="Hasta" aria-label="Username"
                                                    aria-describedby="basic-addon1">
                                                    <input type="hidden" name="hotel" class="form-control"
                                              value="<?php echo $hotelseleccionado?>"
                                                   >
                                            </label>

                                        </div>



                                    </div>
                                    <div id="calendar"></div>
                                    <div class="row justify-content-center">
                                        <div class="col-xl-12 col-md-12 col-xs-12">
                                            <hr>

                                        </div>
                                        <div class="col-xl-4 col-md-4 col-xs-4">
                                            <div class="azul">.</div>
                                            <h2> Disponible</h1>

                                        </div>
                                        <div class="col-xl-4 col-md-4 col-xs-4">

                                            <div class="amarillo">.</div>
                                            <h2> Bajo Peticion</h2>

                                        </div>
                                        <div class="col-xl-4 col-md-4 col-xs-4">

                                            <div class="rojo">.</div>
                                            <h2> No disponible</h2>
                                  
                                        </div>
                                        <div style="padding-bottom: 20px;" class="col-xl-12 col-md-12 col-xs-12">
                                        <hr>
                                        <button  class="botonreservaf btn btn-dark">Reservar</button>

                                        </div>
                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>
                    <!-- <div id=carta-info-reserva style="padding: 50px" class="col-xl-4 col-md-4 col-xs-12">
                        <div id=carta-info-reserva_1 class="row justify-content-center">
                            <div id=carta-info-reserva_2 class="col-xl-8 col-md-8 col-xs-8">
                                <h1 align=center>DETALLES DE LA RESERVA</h1>
                            </div>
                        </div>
                    </div>-->
                </div>
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
                            <h2 id=titulo-footer>SOBRE NOSOTROS</h2>
                            <p id=texto-footer>REGISTRATE</p>
                            <p id=texto-footer>REGISTRATE COMO HOTEL</p>
                            <p id=texto-footer>CARRERAS</p>
                            <p id=texto-footer>SUSTENTABILIDAD</p>
                            <p id=texto-footer>SOCIOS</p>
                        </div>
                        <div class="col-xl-2 col-md-3 col-xs-2 mt-2 mt-sm-5">
                            <h2 id=titulo-footer>FAQ</h2>
                            <p id=texto-footer>REGISTRATE</p>
                            <p id=texto-footer>REGISTRATE COMO HOTEL</p>
                            <p id=texto-footer>CARRERAS</p>
                            <p id=texto-footer>SUSTENTABILIDAD</p>
                            <p id=texto-footer>SOCIOS</p>
                        </div>
                        <div class="col-xl-2 col-md-3 col-xs-2 mt-2 mt-sm-5">
                            <form>
                                <h2 id=titulo-footer>BOLETÍN INFORMATIVO</h2>
                                <input type=text placeholder="E-MAIL">
                                <input type=text placeholder="NOMBRE Y APELLIDOS"><br>
                                <button id=texto-footer type="button"
                                    class="btn bg-transparent mt-2">REGISTRARSE</button>
                            </form>
                        </div>
                    </div>

                    <div id="footer" class="row justify-content-center">
                        <div class="col-xl-12 col-md-12 col-xs-12 ">
                            <hr style=" border-top: 1px solid white">
                        </div>
                        <div align=center class="col-xl-6 col-md-12 col-xs-12 ">
                            <h2 id=titulo-footer>(C) 2020 FLEXIDREAMS | ALL RIGHTS RESERVED</h2>
                        </div>
                        <div id=manita onclick="location.href='login.php';" align=center
                            class="col-xl-6 col-md-12 col-xs-12 ">
                            <h2 id=titulo-footer><i class="fas fa-key"></i> &nbsp;HOTEL LOGIN</h2>
                        </div>

                    </div>
                </div>









            </div>

</body>


<!-- Menu Toggle Script -->
<script>
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
</script>
<script>
<?php
     $insertardatoshh = "SELECT * FROM flexi_web.precios_ofertas where hotel = '$hotelseleccionado'";
     $ejecutarinsertarhh = mysqli_query($enlace,$insertardatoshh);
     $numero_filashh = mysqli_fetch_array($ejecutarinsertarhh);
     $contarfilas3 = mysqli_num_rows($ejecutarinsertarhh);
    $numerocontador = 0;
     for($ii=1; $ii<=$contarfilas3; $ii++){
     
    
        $numerocontador = $numerocontador + 1;

echo '
var fechahoteldesde'.$numerocontador.' = new Date("'.$numero_filashh['desde'].'");

var fechahotelhasta'.$numerocontador.' = new Date("'.$numero_filashh['hasta'].'");

fechahotelconvertidadesde'.$numerocontador.' = fechahoteldesde'.$numerocontador.'.toLocaleDateString("fr-CA");

fechahotelconvertidahasta'.$numerocontador.' = fechahotelhasta'.$numerocontador.'.toLocaleDateString("fr-CA");'
;

$numero_filashh = mysqli_fetch_array($ejecutarinsertarhh);

    
    
    }
    
    ?>

var fecha = new Date('2000-1-1');
var fechasarray = [];
var fechasarray1 = [];
var fechasarray2 = [];
var fechacontador = "";

for (var ii = 0; ii < 10000; ii++) {
    fecha.setDate(fecha.getDate() + 1);
    fechacontador = fecha.toLocaleDateString("fr-CA");
    fechasarray.push(fecha.toLocaleDateString("fr-CA"));

    <?php 

$numerocontador2 = 0;
$textovar = "";
      for($ii=1; $ii<=$numerocontador; $ii++){
        $numerocontador2 = $numerocontador2 + 1;
       
    echo 'if (fechacontador == fechahotelconvertidadesde'. $numerocontador2.') {
     
        fechasarray1.push(fechahoteldesde'. $numerocontador2.'.toLocaleDateString("fr-CA"));
              
        fechasarray2.push(fechahoteldesde'. $numerocontador2.'.toLocaleDateString("fr-CA"));
        if (fechahotelconvertidadesde'.$numerocontador2.' < fechahotelconvertidahasta'.$numerocontador2.') {
            
            fechahoteldesde'.$numerocontador2.'.setDate(fechahoteldesde'.$numerocontador2.'.getDate() + 1);
            fechahotelconvertidadesde'.$numerocontador2.' = fechahoteldesde'.$numerocontador2.'.toLocaleDateString("fr-CA");
     
        }  
       
 
    } 
    
    ';
    
}
echo '}';
?>
<?php 


$insertardatoshhh = "SELECT * FROM flexi_web.precios_ofertas where hotel = '$hotelseleccionado' and onrequest != 's'";
$ejecutarinsertarhhh = mysqli_query($enlace,$insertardatoshhh);
$numero_filashhh = mysqli_fetch_array($ejecutarinsertarhhh);
$contarfilas3 = mysqli_num_rows($ejecutarinsertarhhh);
$numerocontador = 0;

$texto = "
var fechasarraycupolleno = ['1900-1-1'";
$cupo = intval($numero_filashhh['cupo']);
$fechadesdeconvertido = "";
$fechadesde = $numero_filashhh['desde'];
$fechahasta = $numero_filashhh['hasta'];
$texto .= ",'". $fechadesdeconvertido."'";
for($ii=0; $ii<100; $ii++){

   $fechadesdeconvertido = date("Y-m-d",strtotime($fechadesde)); 
  
    if($fechadesde < $fechahasta){ 
       
       $insertardatos = "SELECT * FROM linea_reserva,reservas WHERE linea_reserva.id_reserva = reservas.n_reserva AND reservas.hotel = '$hotelseleccionado' AND linea_reserva.hasta = '$fechadesdeconvertido'";
       $ejecutarinsertar = mysqli_query($enlace,$insertardatos);
       $numero_filas = mysqli_fetch_array($ejecutarinsertar);
       $contarfilas5 = mysqli_num_rows($ejecutarinsertar);
       if($contarfilas5 != $cupo){
       $texto .= ",'". $fechadesdeconvertido."'";
      
       }
       
       $fechadesde = date("Y-m-d",strtotime($fechadesde."+ 1 days")); 
       $fechadesdeconvertido = date("Y-m-d",strtotime($fechadesde));

               
    }else if($fechadesde == $fechahasta){
       if($contarfilas5 != $cupo){
       $texto .= ",'". $fechadesdeconvertido."'";
    
       }
       $numero_filashhh = mysqli_fetch_array($ejecutarinsertarhhh);
       $fechadesde = $numero_filashhh['desde'];
       $fechahasta = $numero_filashhh['hasta'];
    }
    
     }
    
$insertardatoshhh = "SELECT * FROM flexi_web.precios_ofertas where hotel = '$hotelseleccionado' and onrequest = 's'";
$ejecutarinsertarhhh = mysqli_query($enlace,$insertardatoshhh);
$numero_filashhh = mysqli_fetch_array($ejecutarinsertarhhh);
$contarfilas3 = mysqli_num_rows($ejecutarinsertarhhh);
$numerocontador = 0;

$cupo = intval($numero_filashhh['cupo']);
$fechadesdeconvertido = "";
$fechadesde = $numero_filashhh['desde'];
$fechahasta = $numero_filashhh['hasta'];
$texto .= ",'". $fechadesdeconvertido."'";
for($ii=0; $ii<100; $ii++){

   $fechadesdeconvertido = date("Y-m-d",strtotime($fechadesde)); 
  
    if($fechadesde < $fechahasta){ 
       
       $insertardatos = "SELECT * FROM linea_reserva,reservas WHERE linea_reserva.id_reserva = reservas.n_reserva AND reservas.hotel = '$hotelseleccionado' AND linea_reserva.hasta = '$fechadesdeconvertido'";
       $ejecutarinsertar = mysqli_query($enlace,$insertardatos);
       $numero_filas = mysqli_fetch_array($ejecutarinsertar);
       $contarfilas5 = mysqli_num_rows($ejecutarinsertar);
       if($contarfilas5 != $cupo){
       $texto .= ",'". $fechadesdeconvertido."'";
      
       }
       
       $fechadesde = date("Y-m-d",strtotime($fechadesde."+ 1 days")); 
       $fechadesdeconvertido = date("Y-m-d",strtotime($fechadesde));

               
    }else if($fechadesde == $fechahasta){
       if($contarfilas5 != $cupo){
       $texto .= ",'". $fechadesdeconvertido."'";
    
       }
       $numero_filashhh = mysqli_fetch_array($ejecutarinsertarhhh);
       $fechadesde = $numero_filashhh['desde'];
       $fechahasta = $numero_filashhh['hasta'];
    }
    
     }
echo $texto;





?>];

    for (var iii = 0; iii < 10000; iii++) {

        var x = fechasarray.indexOf(fechasarraycupolleno[iii]);

        if (x !== -1) {
            fechasarray.splice(x, 1);
        }

    }

    console.log(fechasarraycupolleno)
    $(function() {

        $('input[name="daterange"]').daterangepicker({
            opens: 'center',
            drops: 'auto',
            isInvalidDate: function(date) {
                var formatted = date.format('Y-MM-DD');

                return fechasarray.indexOf(formatted) > -1;

            }

        }, function(start, end, label) {
            console.log("A new date selection was made: " + start.format('Y-M-D') + ' to ' + end
                .format('Y-M-D'));
        });

    });
    $(document).ready(function(e) {
        calendar = new CalendarYvv("#calendar", moment().format("Y-M-D"), "Monday");
        calendar.funcPer = function(ev) {
            console.log(ev)
        };

        <?php
     $insertardatoshhh = "SELECT * FROM flexi_web.precios_ofertas where hotel = '$hotelseleccionado' and onrequest != 's'";
     $ejecutarinsertarhhh = mysqli_query($enlace,$insertardatoshhh);
     $numero_filashhh = mysqli_fetch_array($ejecutarinsertarhhh);
     $contarfilas3 = mysqli_num_rows($ejecutarinsertarhhh);
    $numerocontador = 0;

    $texto = "calendar.diasResal = ['1900-1-1'";
    $cupo = intval($numero_filashhh['cupo']);
    $fechadesdeconvertido = "";
    $fechadesde = $numero_filashhh['desde'];
    $fechahasta = $numero_filashhh['hasta'];
    $texto .= ",'". $fechadesdeconvertido."'";
     for($ii=0; $ii<100; $ii++){

        $fechadesdeconvertido = date("Y-n-j",strtotime($fechadesde)); 
       
         if($fechadesde < $fechahasta){ 
            
            $insertardatos = "SELECT * FROM linea_reserva,reservas WHERE linea_reserva.id_reserva = reservas.n_reserva AND reservas.hotel = '$hotelseleccionado' AND linea_reserva.hasta = '$fechadesdeconvertido'";
            $ejecutarinsertar = mysqli_query($enlace,$insertardatos);
            $numero_filas = mysqli_fetch_array($ejecutarinsertar);
            $contarfilas5 = mysqli_num_rows($ejecutarinsertar);
            if($contarfilas5 != $cupo){
            $texto .= ",'". $fechadesdeconvertido."'";
           
            }
            
            $fechadesde = date("Y-m-d",strtotime($fechadesde."+ 1 days")); 
            $fechadesdeconvertido = date("Y-n-j",strtotime($fechadesde));
     
                    
         }else if($fechadesde == $fechahasta){
            if($contarfilas5 != $cupo){
            $texto .= ",'". $fechadesdeconvertido."'";
         
            }
            $numero_filashhh = mysqli_fetch_array($ejecutarinsertarhhh);
            $fechadesde = $numero_filashhh['desde'];
            $fechahasta = $numero_filashhh['hasta'];
         }
         
          }
          $texto .= "]";
echo $texto;

     ?>
 <?php
     $insertardatoshhh = "SELECT * FROM flexi_web.precios_ofertas where hotel = '$hotelseleccionado' and onrequest = 's'";
     $ejecutarinsertarhhh = mysqli_query($enlace,$insertardatoshhh);
     $numero_filashhh = mysqli_fetch_array($ejecutarinsertarhhh);
     $contarfilas3 = mysqli_num_rows($ejecutarinsertarhhh);
    $numerocontador = 0;
    $cupo2 =  $numero_filashhh['cupo'];
    $texto2 = "
    calendar.diasResalrequest = ['1900-1-1'";

    $fechadesdeconvertido = "";
    $fechadesde = $numero_filashhh['desde'];
    $fechahasta = $numero_filashhh['hasta'];
    $texto2 .= ",'". $fechadesdeconvertido."'";
     for($ii=0; $ii<100; $ii++){

        $fechadesdeconvertido = date("Y-n-j",strtotime($fechadesde)); 
       
         if($fechadesde < $fechahasta){


            $insertardatos = "SELECT * FROM linea_reserva,reservas WHERE linea_reserva.id_reserva = reservas.n_reserva AND reservas.hotel = '$hotelseleccionado' AND linea_reserva.hasta = '$fechadesdeconvertido'";
            $ejecutarinsertar = mysqli_query($enlace,$insertardatos);
            $numero_filas = mysqli_fetch_array($ejecutarinsertar);
            $contarfilas6 = mysqli_num_rows($ejecutarinsertar);
           
            if($contarfilas6 != $cupo2){
            $texto2 .= ",'". $fechadesdeconvertido."'";
   
            }
            $fechadesde = date("Y-m-d",strtotime($fechadesde."+ 1 days")); 
            $fechadesdeconvertido = date("Y-n-j",strtotime($fechadesde));    
         }else if($fechadesde == $fechahasta){
            if($contarfilas6 != $cupo2){
            $texto2 .= ",'". $fechadesdeconvertido."'";
          
            }
            $numero_filashhh = mysqli_fetch_array($ejecutarinsertarhhh);
            $fechadesde = $numero_filashhh['desde'];
            $fechahasta = $numero_filashhh['hasta'];
         }
         
          }
          $texto2 .= "]";
echo $texto2;

     ?>
        

        calendar.createCalendar();
    });
</script>

</html>