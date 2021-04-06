<?php

require '../conexion.php';

?>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style2.css">
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
            "url('../img/banner/the-concept.jpg')";

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
            <div align=center>

            <ul>
                    <li>
                        <a href="../the-concept.php"> ES | </a>
                    </li>
                    <li>
                        <a href="#"> EN | </a>
                    </li>
                    <li>
                        <a href="../al/the-concept.php"> AL </a>
                    </li>
                </ul>

            </div>

        </div>
    </div>
    <div id=top-bar-movile>

<nav class="negrazo navbar navbar-expand-xs navbar-dark ">
    <h1 onclick="window.location.href='../index.php';" class="titulo-top"><img class="logo-top"
            src="../img/logo-white.png">
        FLEXIDREAMS</i>
    </h1>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="../the-concept.php">The Concept</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Hoteles y Resorts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../experiencias.php">Experiencias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../login.php">Iniciar Sesion&nbsp;&nbsp;<i id=manita
                        onclick="location.href='../login.php';" class="fas fa-key"></i></a>
            </li>
        </ul>
        <ul>
                    <li>
                        <a href="../the-concept.php"> ES | </a>
                    </li>
                    <li>
                        <a href="#"> EN | </a>
                    </li>
                    <li>
                        <a href="../al/the-concept.php"> AL </a>
                    </li>
                </ul>
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

                <h1 class=enjoy>The <br>Concept</h1>
            </div>
        </div>
    </div>
    <img style="display: none" src="../img/banner/the-concept.jpg"></img>
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
            <input type="number" min=1 value=1 id=personas class="form-control" placeholder="">        </div>
    </div>
    <div class="col-md-4 col-12 col-xl-1">

        <button  onclick="filtrar()" class="btn btn-light">Search</button>

    </div>
</div>

</nav>
    <div class=container-fluid>

        <div class="row justify-content-center">
            <div align=Center style="padding:10px;" class="col-xl-8 col-md-8 col-xs-7">

                <br> <br>
                <h4> On the search of changing the way we travel and finding the best offers for our customers,
                    we came across an idea that enables us to fix two problems at the same time:
                    While our clients can get an incredible deal and safe up to 100 % of the overnight rate,
                    hoteliers are able to reduce the fluctuation of their occupancy by attracting more guests
                    during off-season.
                </h4>
                <hr><br>
                <h4 align=left>How does it work?</h4>
                <p align=left>
                    To sleep for free, the only thing you have to do, is enjoying some of the hotel’s
                    activities. Eat a delicious dinner in the hotel restaurant, treat yourself to a relaxing
                    massage or even get a room upgrade to sleep in the most comfortable way.
                    With flexidreams you only spend a minimum amount on the hotel’s services, which is usually
                    less than, or the same as, the cheapest overnight rate offered by the guest house. So
                    instead of spending your money on sleeping, with us you can spend it on things that are so
                    much more fun. The best part about this - you can finally treat yourself without guilty
                    feelings.

                </p><br>
                <h4 align=left>Your vacation. Your choice.</h4>
                <p align=left>
                    You want to stay flexible during your holidays? We get you. This is why we don’t tell you
                    how to redeem your minimum turnover. If you prefer to try the great restaurant in the city
                    that has been recommended to you by a friend and take advantage of the hotel bar before
                    going to bed, there is no problem at all. You decide on which services you want to spend
                    your minimum turnover.<br><br>
                    On each hotel page you can find the section “How can I redeem my minimum consumption”, where
                    you can see all the services that you can purchase by using your minimum turnover. Since
                    some hotel services are outsourced, we can’t guarantee, that you will be able to use your
                    minimum turnover for all offers of the hotel. However, food and beverages will always be
                    able to be purchased with the minimum consumption voucher.

                </p><br>
                <h4 align=left>Your stay.</h4>
                <p align=left>
                    Flexidreams hand-picks the most beautiful guest houses for you, and only partners with
                    those, that fulfill our quality criteria. From calm country-inns in the middle of nature, to
                    adults-only hotels right by the sea, to children-friendly resorts with an animation program
                    – flexidreams has the right option for you. Whichever hotel you chose, we make sure that
                    there are enough services for you to be able to spend the minimum turnover. Check out our
                    partner hotels and see for yourself.
                </p><br>
                <h4 align=left>Your Experiences</h4>
                <p align=left>
                    As different as the hotels, as varied the activities and services they offer. Weather you
                    prefer a wellness retreat, a city escape, or an active vacation, we got you covered. Can’t
                    decide, how you want to spend your next holidays? Let yourself get inspired in our
                    Experiences-section.
                </p><br>
                <h4 align=left>How to stay for free.</h4>
                <p align=left>
                    Going on a vacation without paying for your nights, couldn’t be easier. Just follow these
                    steps:</p>
                <br>
                <br>
                <div class="row justify-content-center">
                    <div align=Center style="padding:10px;" class="col-xl-3 col-md-4 col-xs-12">
                        <i style="font-size: 40px" class="fas fa-h-square"></i>
                        <hr>
                        <p>1. Search for a specific hotel via our search bar or get inspired by our experiences to find
                            your favorite hotel.</p>
                    </div>
                    <div align=Center style="padding:10px;" class="col-xl-6 col-md-4 col-xs-12">
                        <i style="font-size: 40px" class="fas fa-door-open"></i>
                        <hr>
                        <div class="row justify-content-center">
                            <div align=Center style="padding:10px;" class="col-xl-12 col-md-12 col-xs-12">
                                <p>2a. Make a reservation. If a room can be booked immediately, can be seen in the
                                    booking calendar on the hotel page. You will receive an immediate booking
                                    confirmation via E-mail from flexidreams</p>
                            </div>
                            <div align=Center style="padding:10px;" class="col-xl-12 col-md-12 col-xs-12">
                                <p>2b. If the room is not bookable immediately, you make a booking request and receive
                                    an E-mail within 12 hours (work days), with a booking confirmation or another hotel
                                    option/ date option which you can choose to reserve.</p>
                            </div>
                        </div>
                    </div>
                    <div align=Center style="padding:10px;" class="col-xl-3 col-md-4 col-xs-12">
                        <i style="font-size: 40px" class="fas fa-key"></i>
                        <hr>
                        <p>
                            3. Pay the booking fee via a link that you receive by us to secure your booking. – You are
                            ready to sleep for free and treat yourself.</p>
                    </div>
                </div>
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