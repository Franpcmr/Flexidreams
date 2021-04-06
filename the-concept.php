<?php

require 'conexion.php';

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
    <script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js" data-auto-replace-svg="nest"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
</head>
<script>

function alcargar() {

    setTimeout(function() {


        document.getElementById("categoria-5").style.backgroundImage =
            "url('img/banner/the-concept.jpg')";

    }, 10);

}
function filtrar() {
        var personas = document.getElementById("personas").value
        var texto = document.getElementById("myInput").value
        var fechas = document.getElementById("daterange").value
        window.location.href = "busqueda.php?texto=" + texto + "&fechas=" + fechas + "&adultos=" + personas
    }
</script>

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
            <div align=center>

<ul>
    <li>
        <a href="#"> ES | </a>
    </li>
    <li>
        <a href="en/the-concept.php"> EN | </a>
    </li>
    <li>
        <a href="al/the-concept.php"> AL </a>
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
                        <a class="nav-link" href="the-concept.php">El concepto</a>
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
        <a href="en/the-concept.php"> EN | </a>
    </li>
    <li>
        <a href="al/the-concept.php"> AL </a>
    </li>
</ul>
            </div>
        </nav>


    </div>
</nav>


</div>
</nav>


</div>




</div>

</div>


    <div id="categoria-5">
        <div class="fondooscuro1">
            <div class=abajo1>

                <h1 class=enjoy>El<br>concepto</h1>
            </div>
        </div>
    </div>
    <img style="display: none" src="img/banner/the-concept.jpg"></img>
    <nav id=barradebusqueda class="navbar sticky-top">

<div id=bordillo class="row justify-content-center">

    <div class="col-md-2 col-12 col-xl-3">


        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-map-pin"></i></span>
            </div>
            <input type="text" class="form-control" id="myInput" placeholder="Ubicación o nombre del hotel"
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

        <button  onclick="filtrar()" class="btn btn-light">Buscar</button>

    </div>
</div>

</nav>
    <div class=container-fluid>

        <div class="row justify-content-center">
            <div align=Center style="padding:10px;" class="col-xl-8 col-md-8 col-xs-7">

                <br> <br>
                <h4> En el camino a encontrar el cambio en la forma de viajar y encontrar las mejores ofertas para
                    nuestros clientes, encontramos la solución matando dos pájaros de un tiro:
                    Si bien nuestros clientes pueden obtener un trato increíble y seguro hasta el 100% de la tarifa nocturna,
                    los hoteleros pueden reducir la fluctuación de su ocupación atrayendo a más huéspedes
                    fuera de temporada.
                </h4>
                <hr><br>
                <h4 align=left>¿Cómo funciona?</h4>
                <p align=left>
                    Para dormir gratuitamente, lo único que has de hacer es disfrutar de algunas de las actividades
                    del hotel. Disfruta de una deliciosa cena en el restaurante del hotel, cuídate a ti mismo con un masaje
                    relajante o mejora tu habitación para dormir más cómodamente.
                    Con flexidreams solo gastas una cantidad mínima en los servicios del hotel, que generalmente es
                    menor o igual que la tarifa de noche más barata ofrecida por la casa de huéspedes. 
                    En lugar de gastar tu dinero en dormir, con nosotros puedes gastarlo en cosas que te divertirán mucho más!. 
                    La mejor parte de esto: puedes darte un capricho sin remordimiento.

                </p><br>
                <h4 align=left>Tus vacaciones. Tu decisión.</h4>
                <p align=left>
                    Quieres ser flexible y tener algo de tiempo en tus vacaciones? Nosotros te lo conseguimos.
                    Por eso no te decimos como usar tu facturación mínima. 
                    Si prefieres probar el gran restaurante de la ciudad
                    que te ha recomendado un amigo y aprovechar el bar del hotel antes de
                    ir a la cama, no hay problema en absoluto. Tú decides donde gastar tu facturación mínima.<br><br>
                    En la página de cada hotel puedes encontrar la sección "Cómo canjear mi consumo mínimo", donde
                    puede ver todos los servicios que puede adquirir utilizando su facturación mínima. Desde
                    algunos servicios del hotel se subcontratan, no podemos garantizar que podrá utilizar su
                    Rotación mínima para todas las ofertas del hotel. Sin embargo, la comida y las bebidas siempre serán
                    Se puede adquirir con el bono de consumo mínimo.
                    En la página de cada hotel puedes encontrar la sección "Cómo canjear mi consumo mínimo", donde
                    puede ver todos los servicios que puede adquirir utilizando su facturación mínima. Ya que
                    algunos servicios del hotel se subcontratan, no podemos garantizar que podrá utilizar su
                    facturación mínima para todas las ofertas del hotel. Sin embargo, la comida y las bebidas siempre 
                    se podrán adquirir con el bono de consumo mínimo. 

                </p><br>
                <h4 align=left>Tu estancia.</h4>
                <p align=left>
                    Flexidreams escoge cuidadosamente los hospedajes más bonitos para ti, y sólo a socios que cumplen
                    con un criterio estricto de calidad. Desde tranquilas posadas rurales en plena naturaleza, pasando por
                    hoteles solo para adultos junto al mar, hasta complejos turísticos para niños con un programa de animación,
                    flexidreams tiene la opción adecuada para ti. Cualquier hotel que elijas, nos aseguramos de que haya suficientes
                    servicios para que puedas gastar tu facturación mínima sin problema. Infórmate sobre nuestros socios y obsérvalo 
                    por ti mismo.
                </p><br>
                <h4 align=left>Tus experiencias.</h4>
                <p align=left>
                    Los hoteles son tan variados como los propios servicios y actividades que éstos pueden ofrecer.
                    Tanto si prefieres un retiro de bienestar, una escapada a la ciudad o unas vacaciones activas,
                    nosotros te cubrimos. ¿No puedes decidir como pasar tu proximas vacaciones? Déjate guiar por nuestro
                    apartado de experiencias.
                </p><br>
                <h4 align=left>Como quedarse gratuitamente.</h4>
                <p align=left>
                    Ir de vacaciones sin pagar las noches no podría ser más fácil. Solo sigue estos pasos</p>
                <br>
                <br>
                <div class="row justify-content-center">
                    <div align=Center style="padding:10px;" class="col-xl-3 col-md-4 col-xs-12">
                        <i style="font-size: 40px" class="fas fa-h-square"></i>
                        <hr>
                        <p>1. Busca un hotel en específico a través de nuestra barra de búsqueda o déjate guiar por nuestras
                        experiencias.</p>
                    </div>
                    <div align=Center style="padding:10px;" class="col-xl-6 col-md-4 col-xs-12">
                        <i style="font-size: 40px" class="fas fa-door-open"></i>
                        <hr>
                        <div class="row justify-content-center">
                            <div align=Center style="padding:10px;" class="col-xl-12 col-md-12 col-xs-12">
                                <p>2a. Hacer una reserva. Si se puede reservar una habitación de inmediato, se podrá ver en el
                                     calendario de reservas en la página del hotel. Recibirás una reserva inmediata
                                     confirmación por correo electrónico de flexidreams </p>
                            </div>
                            <div align=Center style="padding:10px;" class="col-xl-12 col-md-12 col-xs-12">
                                <p>2b. Si la habitación no se puede reservar de inmediato, se realizará una petición de reserva
                                    y usted recibirá un email en las próximas 12 horas (días laborales) con la confirmación de la reserva
                                    o la opción de escoger otro hotel/fecha en la que puedes elegir para reservar.</p>
                            </div>
                        </div>
                    </div>
                    <div align=Center style="padding:10px;" class="col-xl-3 col-md-4 col-xs-12">
                        <i style="font-size: 40px" class="fas fa-key"></i>
                        <hr>
                        <p>
                            3. Pague la tarifa de reserva a través de un enlace que le enviamos para asegurar su reserva. Usted está
                             listo para dormir gratis y darse un capricho. </p>
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