<?php 







?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style2.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/d3js/6.1.1/d3.min.js"></script>
    <link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.4/themes/redmond/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
    $(document).ready(function() {
        $(".testimonial-carousel").slick({
            infinite: !0,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: !1,
            arrows: true,
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
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: !1,
            arrows: true,
            prevArrow: $(".testimonial-carousel-controls2 .prev"),
            nextArrow: $(".testimonial-carousel-controls2 .next"),
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

<body class=body>
    <div id=container-fluid1 class=container-fluid>

        <div id=top-bar-pc class="row justify-content-center">

            <div align=center class="col-md-1 col-xl-2">

                <h1 class="titulo-top">HOTELES Y RESORTS</h1>


            </div>
            <div align=center class="col-md-1 col-xl-1">

                <h1 class="titulo-top">FAVORITOS</h1>


            </div>

            <div align=center class="col-md-1 col-xl-2">

                <img class="logo-top" src="img/logo-white.svg">
                <h1></h1>

            </div>
            <div align=center class="col-md-1 col-xl-1">

                <h1 class="titulo-top">TEMAS</h1>

            </div>
            <div align=center class="col-md-1 col-xl-2">

                <h1 class="titulo-top">BLOG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i id=manita
                        onclick="location.href='login.php';" class="fas fa-key"></i></h1>



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
    <div  class="row justify-content-center">
        <div style="background-image: url('img/img2.png'); height: 100%;"  class="col-md-12 col-12 col-xl-12">
            <div class="img-barra-busqueda">

                <div class="texto-barra-busqueda">
                    <h1 class=enjoy>Enjoy <br>Yourself.</h1>
                </div>
            </div>
        </div>
    </div>
    <nav id=barradebusqueda class="navbar sticky-top">

        <div id=bordillo class="row justify-content-center">

            <div class="col-md-3 col-12 col-xl-3">


                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-map-pin"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Ubicación o nombre del hotel"
                        aria-label="Username" aria-describedby="basic-addon1">
                </div>


            </div>

            <div class="col-md-3 col-12 col-xl-2">

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-align-justify"></i></span>
                    </div>
                    <select class="browser-default custom-select" placeholder="Enter email">
                        <option>Selecciona una opción</option>
                        <option>Day Pass</option>
                        <option>Spa y Bienestar</option>
                        <option>Ofertas</option>
                        <option>Golf</option>
                    </select>
                </div>




            </div>
            <div class="col-md-2 col-12 col-xl-2">

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="date" class="form-control" placeholder="Desde" aria-label="Username"
                        aria-describedby="basic-addon1">
                </div>

            </div>
            <div class="col-md-2 col-12 col-xl-2">

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="date" class="form-control" placeholder="Hasta" aria-label="Username"
                        aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-md-1 col-12 col-xl-1">

                <button type="button" id=botonbuscar class="btn btn-light">Buscar</button>
                <hr>
            </div>
        </div>
    


    <div id=hoteles-y-ads class="row justify-content-center">
        <div class="col-md-12 col-xl-12 col-12">
            <div class="row justify-content-center">

                <div id=texto-abajo-nav class="col-md-6 col-xl-6 col-8">
                    <a>¿Aún paga el coste de la habitación en sus viajes? ¿Y cree que ha conseguido una verdadera
                        ganga? Con flexidreams solamente paga un consumo mínimo y decide por sí mismo como
                        lo quiere gastar en el hotel. A cambio, le regalamos el precio de la habitación.
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
                    <a>55 HOTELES <br>SELECCIONADOS</a><br><br>
                </div>
                <div class="col-md-12 col-xl-2 col-12">
                    <i class="far fa-lightbulb"></i><br>
                    <a>INSPIRACIONES</a><br><br>
                </div>
            </div>
        </div>
    </div>
    <div id="recomendados" class="row justify-content-center">
        <div id="recomendados-f" class="col-md-12 col-xl-2 col-12">
            <h1>RECOMENDACIONES PARA UD.</h1><br>
            <a>Una selección especial de las mejores ofertas.</a>

        </div>

        <div class="col-md-12 col-xl-10 col-12">
            <section class="p-5 pos-r">
                <div class="container">
                    <div class="row">
                        <div style="" class="col-md-12 col-xl-12 col-12">

                            <div class=" pos-r">
                                <div class="carousel-controls testimonial-carousel-controls">
                                    <div class="control prev"><i class="fa fa-chevron-left text-black">&nbsp;</i></div>
                                    <div class="control next"><i class="fa fa-chevron-right text-black">&nbsp;</i></div>
                                </div>
                                <div class="testimonial-carousel">
                                    <div style="background-image: url('img/recomendado-p1.jpg'); " class=" one-slide ">
                                        <div class=abajo><a>Iberostar Portals
                                                Nous</a><br><a>★★★★★</a><br><a>Mallorca</a></div>
                                    </div>
                                    <div style="background-image: url('img/recomendado-p1.jpg');" class="one-slide ">

                                    </div>
                                    <div style="background-image: url('img/img1.jpg');" class="one-slide ">

                                    </div>
                                    <div style="background-image: url('img/img3.jpg');" class="one-slide ">

                                    </div>
                                    <div style="background-image: url('img/img3.jpg');" class="one-slide ">

                                    </div>
                                    <div style="background-image: url('img/recomendado-p1.jpg');" class="one-slide ">

                                    </div>
                                    <div style="background-image: url('img/img3.jpg');" class="one-slide ">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="row justify-content-center">
        <div style="background-image: url('img/img3.jpg');" id="categoria-1" class="col-md-12 col-xl-6 col-12">
        </div>

        <div style="background-color:black;" class="col-md-12 col-xl-6 col-12">
            <div id="div-text-4">
                <h1 style="color:white;">Le enviamos de vacaciones y le
                    regalamos el precio de habitación</h1>
            </div>
            <div id="div-text-5">
                <a style="color:white;">Flexidreams ofrece una selección de hoteles exclusivos, con un
                    toque especial. Permítase un descanso y disfrute de momentos maravillosos
                    en las posadas más bellas - flexidreams le regala el precio de habitación.</a>
            </div>
            <div id="div-text-6">
                <a>Descubra nuestros hoteles&nbsp;&nbsp;<i class="fas fa-long-arrow-alt-right"></i>

                </a>
            </div>

        </div>
    </div>
    <div id="row3" align=center class="row justify-content-center">
        <div id="divtexto21" class="col-md-12 col-xl-3 col-12">

            <div id="divtexto2">
                <a style="font-size: 20px;"><b>Elija uno de nuestros grandes hoteles o
                        resorts fantásticos y dejase inspirar por
                        nuestras sugerencias y descubra una manera
                        moderna de viajar.</b>
                </a>
            </div>


        </div>


        <div id="divtexto22" class="col-md-12 col-xl-3 col-12">
            <a style="font-size: 20px;">
                <div id="divtexto2"><b>
                        Ud. paga solo un precio mínimo de consumo,
                        el que puede gastar libremente durante su
                        estancia en el hotel.
                </div></b>
            </a>

        </div>

        <div id="divtexto23" class="col-md-12 col-xl-3 col-12">
            <div id="divtexto2">
                <a style="font-size: 20px;"><b>¡Reserve su viaje con nosotros y le
                        regalamos la noche – así de fácil!</b>
                </a>
            </div>

        </div>
    </div>
    <div class="row justify-content-center">


        <div style="background-color:black; " class="col-md-12 col-xl-6 col-12">
            <div id="div-text-7">
                <hr style="border:2px solid rgb(244, 149, 31); ">
                <h1 style="color:white;">DESCUBRA LOS HOTELES GOURMET como nunca lo ha experimentado antes.</h1>
            </div>
            <div id="div-text-8">
                <a style="color:white;">Disfrute de una excelente
                    comida en un hermoso
                    ambiente en los restaurantes
                    de nuestros hoteles gourmet.</a>
            </div>


        </div>
        <div style="background-image: url('img/img12.jpg');" id="categoria-2" class="col-md-12 col-xl-6 col-12">
        </div>
    </div>
    <div id="recomendados2" class="row justify-content-center">
        <div style="" class="col-md-12 col-xl-12 col-12">
            <div class=" pos-r">
                <div class="carousel-controls testimonial-carousel-controls2">
                    <div class="control prev"><i class="fa fa-chevron-left text-black">&nbsp;</i></div>
                    <div class="control next"><i class="fa fa-chevron-right text-black">&nbsp;</i></div>
                </div>
                <div class="testimonial-carousel2">
                    <div style="background-image: url('img/recomendado-p1.jpg'); " class=" one-slide ">
                        <div class=abajo><a>Iberostar Portals
                                Nous</a><br><a>★★★★★</a><br><a>Mallorca</a></div>
                    </div>
                    <div style="background-image: url('img/recomendado-p1.jpg');" class="one-slide ">

                    </div>
                    <div style="background-image: url('img/img1.jpg');" class="one-slide ">

                    </div>
                    <div style="background-image: url('img/img3.jpg');" class="one-slide ">

                    </div>
                    <div style="background-image: url('img/img3.jpg');" class="one-slide ">

                    </div>
                    <div style="background-image: url('img/recomendado-p1.jpg');" class="one-slide ">

                    </div>
                    <div style="background-image: url('img/img3.jpg');" class="one-slide ">

                    </div>

                </div>
            </div>
            </section>
        </div>
    </div>
    <div id="footer" class="row justify-content-center">
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
        <!--<div class="col-md-2 mt-2 mt-sm-5">
            <ul class="list-unstyled list-inline social text-center">
                <li class="list-inline-item"><a href=""><i class="fab fa-facebook-f"></i></a></li>
                <li class="list-inline-item"><a href=""><i class="fab fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href=""><i class="fab fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="" target="_blank"><i class="fa fa-envelope"></i></a></li>
            </ul>
        </div>-->


    </div>
    <div id="footer" class="row justify-content-center">
        <div class="col-xl-10 col-md-12 col-xs-10 mt-2 mt-sm-5">
            <hr style=" border-top: 1px solid white">
        </div>
        <!--<div class="col-md-2 mt-2 mt-sm-5">
            <ul class="list-unstyled list-inline social text-center">
                <li class="list-inline-item"><a href=""><i class="fab fa-facebook-f"></i></a></li>
                <li class="list-inline-item"><a href=""><i class="fab fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href=""><i class="fab fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="" target="_blank"><i class="fa fa-envelope"></i></a></li>
            </ul>
        </div>-->
    </div>
    <div id="footer" class="row justify-content-center">
        <div align=center class="col-xl-6 col-md-12 col-xs-12 ">
            <h1 id=titulo-footer>(C) 2020 FLEXIDREAMS | ALL RIGHTS RESERVED</h1>
        </div>
        <div id=manita onclick="location.href='login.php';" align=center class="col-xl-6 col-md-12 col-xs-12 ">
            <h1 id=titulo-footer><i class="fas fa-key"></i> &nbsp;HOTEL LOGIN</h1>
        </div>
        <!--<div class="col-md-2 mt-2 mt-sm-5">
            <ul class="list-unstyled list-inline social text-center">
                <li class="list-inline-item"><a href=""><i class="fab fa-facebook-f"></i></a></li>
                <li class="list-inline-item"><a href=""><i class="fab fa-twitter"></i></a></li>
                <li class="list-inline-item"><a href=""><i class="fab fa-instagram"></i></a></li>
                <li class="list-inline-item"><a href="" target="_blank"><i class="fa fa-envelope"></i></a></li>
            </ul>
        </div>-->
    </div>








</body>

</html>