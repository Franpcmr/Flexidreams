<?php 
require 'conexion.php';

$hotelseleccionado = $_GET['hotel'];
$insertardatosh = "SELECT * FROM deversor_flexi_web.hoteles where id = '$hotelseleccionado'";
$ejecutarinsertarh = mysqli_query($enlace,$insertardatosh);
$numero_filash = mysqli_fetch_array($ejecutarinsertarh);




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
                            "; color: " + this.textResalt + "; font-weight: bold;'>").html("<a>" + i +
                            "<br>52€</a>");
                    }
                }

                for (var iii = 0; iii < this.diasResalrequest.length; iii++) {
                    if (fechNow == this.diasResalrequest[iii]) {
                        div = $("<div class='cajafechaprecio d-flex border flex-fill w-100 justify-content-center pt-3 pb-3 btn " +
                            this.btnD + "' data-date='" + fechNow + "' style='background: " + this
                            .colorResalrequest + "; color: " + this.textResalt + "; font-weight: bold;'>").html(
                            "<a>" + i + "<br>52€</a>");
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
                breakpoint: 1300,
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



    function fade() {
        document.getElementById("categoria-5").classList.toggle('fade');

    }
    </script>
</head>

<body onload="" class=body>
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
                <h1 class="titulo-top"><img class="logo-top" src="img/logo-white.png">
                    &nbsp;FLEXIDREAMS&nbsp;&nbsp;&nbsp;<i onclick="location.href='login.php';" class="fas fa-key"></i>
                </h1>
            </div>
        </div>




    </div>

    </div>





    </div>


    <div class=container-fluid>

        <div id=panelreserva class="row justify-content-center">
            <div class="col-xl-12 col-md-12 col-xs-12">

                <div class="row justify-content-center">
                    <div align=center class="col-xl-6 col-md-12 col-xs-12">
                        <div class="row justify-content-center">
                            <div align=center class="col-xl-12 col-md-12 col-xs-12">

                                <div class="card  ">
                                    <div class="card-body">
                                        <div class="form-group">


                                            <label class="control-label">Selecciona el rango de fechas
                                                <input type="text" name="daterange" class="form-control"
                                                    placeholder="Hasta" aria-label="Username"
                                                    aria-describedby="basic-addon1">
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
                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>
                    <div id=carta-info-reserva style="padding: 50px" class="col-xl-4 col-md-4 col-xs-12">
                        <div id=carta-info-reserva_1 class="row justify-content-center">
                            <div id=carta-info-reserva_2 class="col-xl-8 col-md-8 col-xs-8">
                                <h1 align=center>DETALLES DE LA RESERVA</h1>
                            </div>
                        </div>
                    </div>
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
                    <h1 id=titulo-footer>BOLETÍN INFORMATIVO</h1>
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
                <h1 id=titulo-footer>(C) 2020 FLEXIDREAMS | ALL RIGHTS RESERVED</h1>
            </div>
            <div id=manita onclick="location.href='login.php';" align=center class="col-xl-6 col-md-12 col-xs-12 ">
                <h1 id=titulo-footer><i class="fas fa-key"></i> &nbsp;HOTEL LOGIN</h1>
            </div>

        </div>
    </div>










</body>
<script>
$(document).ready(function(e) {
    calendar = new CalendarYvv("#calendar", moment().format("Y-M-D"), "Monday");
    calendar.funcPer = function(ev) {
        console.log(ev)
    };
    calendar.diasResal = ['2021-5-2', '2021-3-17', '2021-3-10']
    calendar.diasResalrequest = ['2021-3-18', '2021-3-19']

    calendar.createCalendar();
});

<?php
     $insertardatoshh = "SELECT * FROM deversor_flexi_web.precios_ofertas where hotel = '$hotelseleccionado'";
     $ejecutarinsertarhh = mysqli_query($enlace,$insertardatoshh);
     $numero_filashh = mysqli_fetch_array($ejecutarinsertarhh);
     $contarfilas3 = mysqli_num_rows($ejecutarinsertarhh);
    
    
    
    ?>

var fecha = new Date('2000-1-1');
var fechasarray = [];


var fechahoteldesde = new Date('<?php echo $numero_filashh['desde']; ?>');
var fechahotelhasta = new Date('<?php echo $numero_filashh['hasta']; ?>');
fechahotelconvertidadesde = fechahoteldesde.toLocaleDateString("fr-CA");
fechahotelconvertidahasta = fechahotelhasta.toLocaleDateString("fr-CA");




var fechacontador = "";

for (var ii = 0; ii < 10000; ii++) {
    fecha.setDate(fecha.getDate() + 1);
    fechacontador = fecha.toLocaleDateString("fr-CA");

    if (fechacontador == fechahotelconvertidadesde) {

        if (fechahotelconvertidadesde < fechahotelconvertidahasta) {
            fechahoteldesde.setDate(fechahoteldesde.getDate() + 1);
            fechahotelconvertidadesde = fechahoteldesde.toLocaleDateString("fr-CA");
        }  
    } else {
        fechasarray.push(fecha.toLocaleDateString("fr-CA"));
    }

}




$(function() {

    $('input[name="daterange"]').daterangepicker({
        opens: 'left',
        isInvalidDate: function(date) {
            var formatted = date.format('Y-MM-DD');

            return fechasarray.indexOf(formatted) > -1;

        }
    }, function(start, end, label) {
        console.log("A new date selection was made: " + start.format('Y-M-D') + ' to ' + end
            .format('Y-M-D'));
    });

});
</script>

</html>