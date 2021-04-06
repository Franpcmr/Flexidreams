<?php 
require 'conexion.php';

$filtro = $_GET['filtro'];
$texto = $_GET['texto'];
$fechas = $_GET['fechas'];
$adultos = $_GET['adultos'];
$myString = $filtro;
$myArray = explode(',', $myString);

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




        
    var miarray = [];

    $(document).ready(function() {

        $('.form-check-input').each(function() {

            $(this).change(function() {

                var mi_input = $(this);

                if (mi_input.is(':checked')) {
                    // Agrega un nuevo elemento al array
                    miarray.push(mi_input.val());
                } else {
                    // Retorna el índice del elemento que quieres eliminar
                    var idx_valor = miarray.indexOf(mi_input.val());
                    // Eliminar el elemento
                    miarray.splice(idx_valor, 1);
                }

                console.log(miarray);
            });
        });
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



    function alputohotelbro(id) {

        window.location.href = "hotel.php?hotel=" + id;

    }

    function filtrar() {
        var personas = document.getElementById("personas").value
        var texto = document.getElementById("myInput").value
        var fechas = document.getElementById("daterange").value
        window.location.href = "busqueda.php?filtro=" + miarray + "&texto=" + texto + "&fechas=" + fechas + "&adultos=" + personas
    }
    </script>
</head>

<body onload="" class=body>

    <div class=container-fluid>

        <div id=top-bar-pc class="row justify-content-center">

            <div align=center class="col-md-2 col-xl-2">

                <h4 class="titulo-top">HOTELES Y RESORTS</h4>


            </div>
            <div align=center onclick="window.location.href='the-concept.php';" class="col-md-2 col-xl-2">

                <h4 class="titulo-top">THE CONCEPT</h4>


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
            </div>
        </nav>


    </div>




    </div>

    </div>




    <div class=container-fluid>

        <div style="padding: 50px" class="row justify-content-center">
            <div class="busquedafiltro col-xl-10 col-md-12 col-xs-12">
                <div class="row justify-content-center">
                    <div class="busquedafiltrocheck col-xl-2 col-md-2 col-xs-12">

                        <button type="button" onclick="filtrar()" style="width: 100%"
                            class="btn btn-dark">Bucar</button><br><br>
                        <div class="input-group mb-3">

                            <input type="text" id="daterange" name="daterange" class="form-control"
                                placeholder="Desde - hasta" value="<?php echo $fechas?>">
                        </div>
                        <div class="input-group mb-3">

                            <input type="number" id="personas" value="<?php echo $adultos?>" class="form-control" placeholder="Cantidad de personas">
                        </div>
                        <div class="input-group mb-3">


                            <input id="myInput" value="<?php echo $texto?>"  placeholder="Lugar o hotel" type="text" class="form-control"
                                name="myCountry">
                        </div>

                        <?php
                        
                        
                   
                  $insertardatoshh = "SELECT * FROM flexi_web.tipo_equipaminetos where equipamientos <> ''";
                  $ejecutarinsertarhh = mysqli_query($enlace,$insertardatoshh);
                  $contarfilas = mysqli_num_rows($ejecutarinsertarhh);
                  $numero_filashh = mysqli_fetch_array($ejecutarinsertarhh);
                  for($ii=1; $ii<=$contarfilas; $ii++){


                    if($catequip != $numero_filashh['tipo']) {
                    echo '<br><h5>'.$numero_filashh['icono'].'&nbsp;&nbsp;'.$numero_filashh['tipo'].'</h5>
                    <hr>';
                    }
                    if($numero_filashh['equipamientos'] != '') {
                    echo ' <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="'.$numero_filashh['id'].'" id="check'.$numero_filashh['id'].'">
                    <label class="form-check-label" for=check'.$ii.'">'.$numero_filashh['equipamientos'].'</label>
                </div>';
                    }
                    $catequip =  $numero_filashh['tipo'];
                    $numero_filash = mysqli_fetch_array($ejecutarinsertarh);
                    $numero_filashh = mysqli_fetch_array($ejecutarinsertarhh);
                
            }
                        
                        
                        ?>


                    </div>
                    <div class="busquedafiltrocheck col-xl-5 col-md-10 col-xs-12">
                        <div class="row justify-content-center">
                            <div class=" col-xl-12 col-md-12 col-xs-12">

                                <hr>
                                <p>Resultados </p>

                            </div>
                        </div>



                        <?php












$ids = join("','",$myArray);   


$fechaseleccionadadesde = substr($fechas,0, -13);
$fechaseleccionadadesde = date("Y-m-d",strtotime($fechaseleccionadadesde));
$fechaseleccionadahasta = substr($fechas, 13);
$fechaseleccionadahasta = date("Y-m-d",strtotime($fechaseleccionadahasta));
$insertardatoshhcc = "SELECT * FROM flexi_web.precios_ofertas WHERE ('$fechaseleccionadadesde' BETWEEN desde AND hasta) AND ('$fechaseleccionadahasta' BETWEEN desde AND hasta)AND cupo > cupo_act AND min_personas < '$adultos' AND max_personas > '$adultos' ORDER BY hotel,onrequest DESC"; 
$ejecutarinsertarhhcc = mysqli_query($enlace,$insertardatoshhcc);
$contarfilasf = mysqli_num_rows($ejecutarinsertarhhcc);
$numero_filashhcc = mysqli_fetch_array($ejecutarinsertarhhcc);
$hotelfechas = $numero_filashhcc['hotel']; 
    $hotelfechasact = ''; 
for($ii=1; $ii<=$contarfilasf; $ii++){
   
    $onrequest = $numero_filashhcc['onrequest'];
   
    if(($filtro == '') && ($texto != '')){
        $insertardatoshhc = "SELECT hoteles.foto5,hoteles.nombre_hotel,hoteles.categoria,hoteles.poblacion,hoteles.provincia,hoteles.id,hoteles.localicacion1,hoteles.localicacion2,hoteles.localicacion3
        FROM flexi_web.hoteles,flexi_web.equipamientos_hotel 
        WHERE hoteles.id = equipamientos_hotel.hotel
        AND hoteles.nombre_hotel LIKE '%$texto%' 
        or hoteles.localicacion1 LIKE '%$texto%' 
        or hoteles.localicacion2 LIKE '%$texto%' 
        or hoteles.localicacion3 LIKE '%$texto%'
        and hoteles.id = '$hotelfechas'";
        }
        if(($filtro != '') && ($texto == '')){
            $insertardatoshhc = "SELECT hoteles.foto5,hoteles.nombre_hotel,hoteles.categoria,hoteles.poblacion,hoteles.provincia,hoteles.id,hoteles.localicacion1,hoteles.localicacion2,hoteles.localicacion3
            FROM flexi_web.hoteles,flexi_web.equipamientos_hotel 
            WHERE hoteles.id = equipamientos_hotel.hotel
            AND equipamientos_hotel.equipamiento IN ('$ids')
            and hoteles.id = '$hotelfechas'";
            }
        if(($filtro != '') && ($texto != '')){
                $insertardatoshhc = "SELECT hoteles.foto5,hoteles.nombre_hotel,hoteles.categoria,hoteles.poblacion,hoteles.provincia,hoteles.id,hoteles.localicacion1,hoteles.localicacion2,hoteles.localicacion3
                FROM flexi_web.hoteles,flexi_web.equipamientos_hotel 
                WHERE hoteles.id = equipamientos_hotel.hotel
                AND equipamientos_hotel.equipamiento IN ('$ids')
                AND hoteles.nombre_hotel LIKE '%$texto%' 
        or hoteles.localicacion1 LIKE '%$texto%' 
        or hoteles.localicacion2 LIKE '%$texto%' 
        or hoteles.localicacion3 LIKE '%$texto%'
        and  hoteles.id = '$hotelfechas'";
                }
                if(($filtro == '') && ($texto == '')){
                    $insertardatoshhc = "SELECT hoteles.foto5,hoteles.nombre_hotel,hoteles.categoria,hoteles.poblacion,hoteles.provincia,hoteles.id,hoteles.localicacion1,hoteles.localicacion2,hoteles.localicacion3
                     FROM flexi_web.hoteles
                     where hoteles.id = '$hotelfechas'";
                    }
        
        
        $ejecutarinsertarhhc = mysqli_query($enlace,$insertardatoshhc);
        $contarfilas = mysqli_num_rows($ejecutarinsertarhhc);
        $numero_filashhc = mysqli_fetch_array($ejecutarinsertarhhc);     

    if($hotelfechas != $hotelfechasact){

        echo '<div class="row justify-content-center">
        <div class="col-xl-12 col-md-12 col-xs-12">';

        if($onrequest == 's'){
        echo '<div class="alert alert-warning" role="alert">
       Fechas onrequest del hotel '.$numero_filashhc['nombre_hotel'].'
      </div>';
        }
        echo '<div class="one-slidebusqueda">
            <div class="imagenfondobusqueda" style="background-image: url(back-pannel/'.$numero_filashhc['foto5'].');">
               <div class="fondooscuro_ex">
                    <div onclick="alputohotelbro('.$numero_filashhc['id'].')" class=abajo>
                       <a>'.$numero_filashhc['nombre_hotel'].'
                      </a><br><a>'.$numero_filashhc['categoria'].'</a><br><a>'.$numero_filashhc['poblacion'].','.$numero_filashhc['provincia'].'</a>
                   </div>
               </div>
               </div>
           </div>
       </div>
     </div>';
        
      
    } 


    $hotelfechasact = $hotelfechas;
    
    $numero_filashhcc = mysqli_fetch_array($ejecutarinsertarhhcc);
    $hotelfechas = $numero_filashhcc['hotel'];
  
  
}

    
        




?>






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
var tiposarrayf = [<?php echo $filtro?>];
console.log(tiposarrayf);
for (var iii = 0; iii < 100; iii++) {
 checked = 'check' + tiposarrayf[iii];
    document.getElementById(checked).checked = true;
}
</script>

</html>