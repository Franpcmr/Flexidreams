<?php 







?>
<html>

<head>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
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
    <script src="https://kit.fontawesome.com/60b8617b2a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
    $(document).ready(function() {
        $(document).keydown(function(event) {
            if (event.ctrlKey == true && (event.which == '61' || event.which == '107' || event.which ==
                    '173' || event.which == '109' || event.which == '187' || event.which == '189')) {

                event.preventDefault();
                // 107 Num Key  +
                //109 Num Key  -
                //173 Min Key  hyphen/underscor Hey
                // 61 Plus key  +/=
            }
        });

        $(window).bind('mousewheel DOMMouseScroll', function(event) {
            if (event.ctrlKey == true) {

                event.preventDefault();
            }
        });
    });
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

    function alcargar() {


        document.getElementById("categoria-5").style.backgroundImage = "url('fuentes/hotel/BANNER1.jpg')"

    }


    function ampliar() {
        document.getElementById('desplagable_x').classList.toggle('fadee');
    }

    function ampliarir() {
        window.location.href = '#equimaientoid';
        ampliar();
    }
    </script>
</head>

<body onload="alcargar()" class=body>

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

                <h2 class=enjoy>Iberostar Grand Hotel Portals Nous</h2><br>
                <h4>★★★★★</h4>
                <h2>Portals Nous, Mallorca, Spain</h2>
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
                    <input style="font-size:0.7vw;" type="text" class="form-control"
                        placeholder="Ubicación o nombre del hotel" aria-label="Username"
                        aria-describedby="basic-addon1">
                </div>


            </div>


            <div class="col-md-4 col-12 col-xl-2">

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input style="font-size:0.7vw;" type="date" class="form-control" placeholder="Desde"
                        aria-label="Username" aria-describedby="basic-addon1">
                </div>

            </div>
            <div class="col-md-4 col-12 col-xl-2">

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input style="font-size:0.7vw;" type="date" class="form-control" placeholder="Hasta"
                        aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-md-1 col-12 col-xl-1">

                <button style="font-size:0.7vw;" type="button" id=botonbuscar class="btn btn-light">Buscar</button>

            </div>
        </div>

    </nav>

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
                    <div style=" background-color:black; padding: 1em;" class="text-negroh col-xl-9 col-md-9 col-xs-6">
                        <div class="row justify-content-center">
                            <div style=" background-color:black; padding: 1em;"
                                class="text-negroh col-xl-6 col-md-6 col-xs-12">
                                <a> Nestled next to the turquoise water and designed by Marcel Wander studio, the 5*
                                    Iberostar
                                    Grand Hotel Portals Nous radiates a combination of modernity and Mediterranean
                                    Lifestyle
                                    down to the last corner of the building. Symbols related to life itself are
                                    scattered
                                    throughout the building, accumulating into a spectacular forest in the 650-m2 spa,
                                    creating
                                    together with the hotel’s white and reflective surfaces a sensation of energetic
                                    openness.
                                    <br><br>
                                    The hotel offers not only an outside Pool and a Spa Center heated with geothermal
                                    energy,
                                    but also an excellent restaurant and 3 bars. For those, that like to become active
                                    in their
                                    holiday, the resort provides a personal trainer, classes of yoga, Pilates and Zumba
                                    and
                                    features a 24-h gym.

                                </a>

                            </div>
                            <div style=" background-color:black; padding: 1em;"
                                class="text-negroh col-xl-6 col-md-6 col-xs-12">
                                <a>Just a short walk away, Puerto Portals is a symbol of quality in Mallorca and offers
                                    a port,
                                    fashion boutiques, restaurants and bars. Palma is reached within a 10-minute car
                                    ride and
                                    has an abundant gastronomical and cultural offer.
                                    <br><br>
                                    Having a certified butler service as well as an award for the best sustainable hotel
                                    in
                                    Spain, this hotel is an excellent choice for all the conscious gourmets, beachgoers,
                                    athletes and wellness-lovers. Redeem your minimum turnover in their restaurant, one
                                    of their
                                    bars, a wellness-treatment, sport courses and more.
                                </a>
                            </div>
                            <div style=" background-color:black; padding: 1em;"
                                class="text-negroh col-xl-12 col-md-12 col-xs-12">
                                <div class="row justify-content-center">

                                    <div align=center class="col-xl-2 col-md-2 col-xs-12">
                                        <a style="font-size:1.3vw;"> <i class="fas fa-glass-cheers"></i>&nbsp;Only
                                            Adults</a>
                                    </div>
                                    <div align=center class="col-xl-2 col-md-2 col-xs-12">
                                        <a style="font-size:1.3vw;"><i class="fas fa-wifi"></i>&nbsp;Wifi</a>
                                    </div>
                                    <div align=center class="col-xl-2 col-md-2 col-xs-12">
                                        <a style="font-size:1.3vw;"><i
                                                class="fas fa-hand-sparkles"></i>&nbsp;Massage</a>
                                    </div>
                                    <div align=center class="col-xl-2 col-md-2 col-xs-12">
                                        <a style="font-size:1.3vw;"><i class="fas fa-spa"></i>&nbsp;Spa</a>
                                    </div>
                                    <div align=center class="col-xl-2 col-md-2 col-xs-12">
                                        <a style="font-size:1.3vw;"><i class="fas fa-golf-ball"></i>&nbsp;Golf</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div onclick="ampliarir()" style=" cursor: pointer;" class="col-xl-1 col-md-1 col-xs-1">
                                    <a> <i class="fas fa-angle-down"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div style="padding:50px" class="row justify-content-center">
            <div class="imagendivhotel col-xl-4 col-md-7 col-xs-12">
                <div class=divfotohotelp1 style=" background-image: url('fuentes/hotel/PARTII-1.jpg');">
                    <div class=divfotop1marc>
                    </div>
                </div>
            </div>
            <div style="padding-left:50px" class="col-xl-4 col-md-5 col-xs-12">
                <h4 id="subtitulo_t_hotel">Gastronomic offer</h4>
                <h2 id="titulo_t_hotel"><b>Mediterranean flavors with an Asian twist</b></h2><br>

                <a id="texto_hotel">In the MSC/ASC certified Astir Restaurant you can taste the sea in every fresh fish
                    and seafood dish,
                    while chef Miquel Clar spoils you with Mediterranean flavors with an Asian twist. Accompany your
                    food by a wine of the hotel’s wine list or cava, served with 2 different temperatures and enjoy the
                    explosion of flavors with every mouthful that you taste.<br><br>
                    With 4 different bars (Selini Bar, Champagne Bar, Wellness Bar and Dom Perignon Bar) you can be
                    ensured to find the setting and drink that suits you best.
                </a>
            </div>
        </div>
        <br><br><br>
        <div style="padding:50px" class="row justify-content-center">

            <div style="padding-right:50px" class="divtextolateralh col-xl-4 col-md-5 col-xs-12">
                <h4 id="subtitulo_t_hotel" align=right>The rooms</h4>
                <h2 id="titulo_t_hotel" align=right><b>Elegant Designer Rooms</b></h2>
                <br>
                <p id="texto_hotel">Featuring a mix of innovative and retro elements, the Marcel Wanders Room itself is
                    like a work of
                    art. Unwind in the king-size bed, surrounded by luxury furniture created by the Dutch Designer and
                    enjoy features such as a smart TV, free wifi and free toiletries and a minibar.<br><br>
                    If you prefer a room upgrade by redeeming some of your minimal consumption, you can check the room
                    description on the Hotel Website and communicate it to us while making your reservation.
                </p>
            </div>

            <div class="imagendivhotel col-xl-4 col-md-7 col-xs-12">
                <div class=divfotohotelp2 style=" background-image: url('fuentes/hotel/PARTII-2.jpg');">
                    <div class=divfotop2marc>
                    </div>
                </div>
            </div>
        </div>
        <a id=equimaientoid></a>
        <br><br>


        <div class="row justify-content-center">
            <div class="col-xl-8 col-md-8 col-xs-10">

                <div class="row justify-content-center">

                    <div class="col-xl-12 col-md-12 col-xs-12">
                        <h4><i class="fas fa-globe"></i>&nbsp;Spoken lenguajes</h4>
                        <hr>
                    </div>
                </div>

                <div class="row">

                    <div class="col-xl-4 col-md-4 col-xs-4">
                        <i class="flag flag-us"></i> <a>Español</a>
                    </div>
                    <div class="col-xl-4 col-md-4 col-xs-4">
                        <a>Catalan</a>
                    </div>
                    <div class="col-xl-4 col-md-4 col-xs-4">
                        <a>Aleman</a>
                    </div>
                    <div class="col-xl-4 col-md-4 col-xs-4">
                        <a>Ingles</a>
                    </div>
                    <div class="col-xl-4 col-md-4 col-xs-4">
                        <a>Frances</a>
                    </div>
                    <div class="col-xl-4 col-md-4 col-xs-4">
                        <a>Ruso</a>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row justify-content-center">



            <div class="col-xl-8 col-md-8 col-xs-10">

                <div class="row justify-content-center">

                    <div class="col-xl-12 col-md-12 col-xs-12">
                        <h4><i class="fas fa-wheelchair"></i>&nbsp;Accesibilidad</h4>
                        <hr>
                    </div>
                </div>

                <div class="row ">

                    <div class="col-xl-4 col-md-4 col-xs-4">
                        <a>Acceso para personas con minusbalia</a>
                    </div>
                    <div class="col-xl-4 col-md-4 col-xs-4">
                        <a>Adaptado para silla de ruedas</a>
                    </div>
                    <div class="col-xl-4 col-md-4 col-xs-4">
                        <a>Ascensor</a>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row justify-content-center">

            <div class="col-xl-8 col-md-8 col-xs-10">

                <div class="row justify-content-center">

                    <div class="col-xl-12 col-md-12 col-xs-12">
                        <h4><i class="fas fa-wifi"></i>&nbsp;Acceso a internet</h4>
                        <hr>
                    </div>
                </div>

                <div class="row ">

                    <div class="col-xl-4 col-md-4 col-xs-4">
                        <a>Wifi en zonas comunes</a>
                    </div>
                    <div class="col-xl-4 col-md-4 col-xs-4">
                        <a>Wifi en habitaciones</a>
                    </div>

                </div>
            </div>
        </div>
        <br><br>
        <div id="desplagable_x" class="desplagable_x">
            <div class="row justify-content-center">


                <div class="col-xl-8 col-md-8 col-xs-10">

                    <div class="row justify-content-center">

                        <div class="col-xl-12 col-md-12 col-xs-12">
                            <h4><i class="fas fa-globe"></i>&nbsp;Spoken lenguajes</h4>
                            <hr>
                        </div>
                    </div>

                    <div class="row ">

                        <div class="col-xl-4 col-md-4 col-xs-4">
                            <i class="flag flag-us"></i> <a>Español</a>
                        </div>
                        <div class="col-xl-4 col-md-4 col-xs-4">
                            <a>Catalan</a>
                        </div>
                        <div class="col-xl-4 col-md-4 col-xs-4">
                            <a>Aleman</a>
                        </div>
                        <div class="col-xl-4 col-md-4 col-xs-4">
                            <a>Ingles</a>
                        </div>
                        <div class="col-xl-4 col-md-4 col-xs-4">
                            <a>Frances</a>
                        </div>
                        <div class="col-xl-4 col-md-4 col-xs-4">
                            <a>Ruso</a>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row justify-content-center">



                <div class="col-xl-8 col-md-8 col-xs-10">

                    <div class="row justify-content-center">

                        <div class="col-xl-12 col-md-12 col-xs-12">
                            <h4><i class="fas fa-wheelchair"></i>&nbsp;Accesibilidad</h4>
                            <hr>
                        </div>
                    </div>

                    <div class="row ">

                        <div class="col-xl-4 col-md-4 col-xs-4">
                            <a>Acceso para personas con minusbalia</a>
                        </div>
                        <div class="col-xl-4 col-md-4 col-xs-4">
                            <a>Adaptado para silla de ruedas</a>
                        </div>
                        <div class="col-xl-4 col-md-4 col-xs-4">
                            <a>Ascensor</a>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row justify-content-center">

                <div class="col-xl-8 col-md-8 col-xs-10">

                    <div class="row justify-content-center">

                        <div class="col-xl-12 col-md-12 col-xs-12">
                            <h4><i class="fas fa-wifi"></i>&nbsp;Acceso a internet</h4>
                            <hr>
                        </div>
                    </div>

                    <div class="row ">

                        <div class="col-xl-4 col-md-4 col-xs-4">
                            <a>Wifi en zonas comunes</a>
                        </div>
                        <div class="col-xl-4 col-md-4 col-xs-4">
                            <a>Wifi en habitaciones</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="row justify-content-center">
            <div onclick="ampliar()" style=" cursor: pointer;" class="col-xl-1 col-md-1 col-xs-1">
                <a> <i class="fas fa-angle-down"></i></a>
            </div>
        </div>
        <br><br>
        <div id="hotelmincon" class="row justify-content-center">

            <div style=" height: 500px;" class="col-xl-4 col-md-8 col-xs-12">

                <iframe width="100%" height="100%"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3077.151087325772!2d2.5730607156876824!3d39.53364551679326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12978e869397ff33%3A0xea542cc89a9c2a8e!2sIberostar%20Grand%20Portals%20Nous!5e0!3m2!1ses!2ses!4v1612866494236!5m2!1ses!2ses"
                    frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                </iframe>
            </div>
            <div style=" height: 500px;" class="col-xl-4 col-md-4 col-xs-12">
                <iframe
                    src="https://www.tripadvisor.es/Hotel_Review-g580309-d9051296-Reviews-Iberostar_Grand_Portals_Nous-Portals_Nous_Calvia_Majorca_Balearic_Islands.html#taplc_resp_hr_ad_wrapper_lower_block_0"
                    width="100%" height="100%">
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
                        <img class="w-100" src="fuentes/hotel/gallery/1.jpg" data-target="#carouselExample"
                            data-slide-to="0">
                    </div>
                    <div class="col-6 col-md-4 col-lg-4 p-1">
                        <img class="w-100" src="fuentes/hotel/gallery/2.jpg" data-target="#carouselExample"
                            data-slide-to="1">
                    </div>
                    <div class="col-6 col-md-4 col-lg-4 p-1">
                        <img class="w-100" src="fuentes/hotel/gallery/3.jpg" data-target="#carouselExample"
                            data-slide-to="2">
                    </div>
                    <div class="col-6 col-md-4 col-lg-4 p-1">
                        <img class="w-100" src="fuentes/hotel/gallery/4.jpg" data-target="#carouselExample"
                            data-slide-to="3">
                    </div>
                    <div class="col-6 col-md-4 col-lg-4 p-1">
                        <img class="w-100" src="fuentes/hotel/gallery/5.jpg" data-target="#carouselExample"
                            data-slide-to="4">
                    </div>
                    <div class="col-6 col-md-4 col-lg-4 p-1">
                        <img class="w-100" src="fuentes/hotel/gallery/6.jpg" data-target="#carouselExample"
                            data-slide-to="5">
                    </div>


                </div>

            </div>
        </div>
        <div style="padding-top:10%;" class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
            <button style="font-size:50px;" type="button" class="close m-0 p-3 text-white position-absolute right-5"
                data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content bg-transparent">
                    <div class="modal-body p-0">
                        <div id="carouselExample" class="carousel slide carousel-fade" data-ride="false">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="fuentes/hotel/gallery/1.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="fuentes/hotel/gallery/2.jpg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="fuentes/hotel/gallery/3.jpg" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="fuentes/hotel/gallery/4.jpg" alt="Fourth slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="fuentes/hotel/gallery/5.jpg" alt="Fourth slide">
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
                                    <div style="background-image: url('fuentes/minimo/food1.jpg'); "
                                        class=" one-slideh ">

                                        <div class="fondooscuro">
                                            <div class=abajoh>
                                                <h2>FOOD</h2><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="background-image: url('fuentes/minimo/Drink2.jpg'); "
                                        class=" one-slideh ">

                                        <div class="fondooscuro">
                                            <div class=abajoh>
                                                <h2>DRINKS</h2><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="background-image: url('fuentes/minimo/massage2.jpg'); "
                                        class=" one-slideh ">
                                        <div class="fondooscuro">
                                            <div class=abajoh>
                                                <h2>MASSAGES</h2><br>
                                            </div>
                                        </div>

                                    </div>
                                    <div style="background-image: url('fuentes/minimo/beautytreatments.jpg'); "
                                        class=" one-slideh ">
                                        <div class="fondooscuro">
                                            <div class=abajoh>
                                                <h2>BEAUTY TREATMENTS</h2><br>
                                            </div>
                                        </div>

                                    </div>
                                    <div style="background-image: url('fuentes/minimo/upgrade.jpg'); "
                                        class=" one-slideh ">
                                        <div class="fondooscuro">
                                            <div class=abajoH>
                                                <h2>ROOM UPGRADE</h2><br>
                                            </div>
                                        </div>

                                    </div>
                                    <div style="background-image: url('fuentes/minimo/Shuttleservice.jpg'); "
                                        class=" one-slideh ">
                                        <div class="fondooscuro">
                                            <div class=abajoH>
                                                <h2>SHUTTLE SERVICE</h2><br>
                                            </div>
                                        </div>

                                    </div>
                                    <div style="background-image: url('fuentes/minimo/Roomservice.jpg'); "
                                        class=" one-slideh ">
                                        <div class="fondooscuro">
                                            <div class=abajoH>
                                                <h2>ROOM SERVICE</h2><br>
                                            </div>
                                        </div>

                                    </div>
                                    <div style="background-image: url('fuentes/minimo/Parking2.jpg'); "
                                        class=" one-slideh ">
                                        <div class="fondooscuro">
                                            <div class=abajoH>
                                                <h2>PARKING</h2><br>
                                            </div>
                                        </div>

                                    </div>
                                    <div style="background-image: url('fuentes/minimo/sportclasses1.jpg'); "
                                        class=" one-slideh ">
                                        <div class="fondooscuro">
                                            <div class=abajoH>
                                                <h2>SPORT CLASSES</a><br>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    </div>

    <br>
    <div class=container-fluid>

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
                    <button id=texto-footer type="button" class="btn bg-transparent mt-2">REGISTRARSE</button>
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
            <div id=manita onclick="location.href='login.php';" align=center class="col-xl-6 col-md-12 col-xs-12 ">
                <h2 id=titulo-footer><i class="fas fa-key"></i> &nbsp;HOTEL LOGIN</h2>
            </div>

        </div>
    </div>









    </div>

</body>

</html>