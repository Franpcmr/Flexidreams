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
    <script>
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


    $(document).ready(function() {

        var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

        allWells.hide();

        navListItems.click(function(e) {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                $item = $(this);

            if (!$item.hasClass('disabled')) {
                navListItems.removeClass('btn-primary').addClass('btn-default');
                $item.addClass('btn-primary');
                allWells.hide();
                $target.show();
                $target.find('input:eq(0)').focus();
            }
        });

        allNextBtn.click(function() {
            var curStep = $(this).closest(".setup-content"),
                curStepBtn = curStep.attr("id"),
                nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next()
                .children("a"),
                curInputs = curStep.find("input[type='text'],input[type='url']"),
                isValid = true;

            $(".form-group").removeClass("has-error");
            for (var i = 0; i < curInputs.length; i++) {
                if (!curInputs[i].validity.valid) {
                    isValid = false;
                    $(curInputs[i]).closest(".form-group").addClass("has-error");
                }
            }

            if (isValid)
                nextStepWizard.removeAttr('disabled').trigger('click');
        });

        $('div.setup-panel div a.btn-primary').trigger('click');
    });
    </script>
</head>

<body class=body>
    <div id=container-fluid1 class=container-fluid>
        <div id=top-bar-pc class="row justify-content-center">

            <div align=right class="col-md-4">

                <h1 class="titulo-top">OFERTAS ÚNICAS</h1>


            </div>
            <div align=center class="col-md-3">

                <img class="logo-top" src="img/logo-white.png">
                <h1></h1>

            </div>
            <div align=left class="col-md-4">

                <h1 class="titulo-top">EXPERIENCIAS UNICAS</h1>

            </div>


        </div>
        <div id=top-bar-movile class="row">

            <div class="col-md-12 col-12">
                <h1 class="titulo-top"><img class="logo-top" src="img/logo-white.png"> &nbsp;FLEXIDREAMS</h1>
            </div>
        </div>
    </div>

    <div id=container-form-h class="container">
        <div class="stepwizard">
            <div class="stepwizard-row setup-panel">
                <div class="stepwizard-step">
                    <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                    <p>Detalles del hotel</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                    <p>Equipamiento del hotel</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                    <p>Servicios</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                    <p>Personalidad</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                    <p>Habitaciones</p>
                </div>
            </div>
        </div>
        <form id=form-hotel role="form">

            <div class="row setup-content" id="step-1">
                <div class="col-xs-12 col-md-12 col-xl-12">
                    <h3>Detalles del hotel</h3>
                </div>
                <div class="col-xs-12 col-md-4 col-xl-4">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Nombre del hotel</label>
                            <input maxlength="100" type="text" required="required" class="form-control"
                                placeholder="" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Categoría</label>
                            <input maxlength="100" type="text" required="required" class="form-control"
                                placeholder="" />
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-xl-4">
                    <div class="col-md-12">

                        <div class="form-group">
                            <label class="control-label">Calle, numero</label>
                            <input maxlength="100" type="text" required="required" class="form-control"
                                placeholder="" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Codigo Postal, ciudad</label>
                            <input maxlength="100" type="text" required="required" class="form-control"
                                placeholder="" />
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-xl-4">
                    <div class="col-md-12">

                        <div class="form-group">
                            <label class="control-label">Pais</label>
                            <input maxlength="100" type="text" required="required" class="form-control"
                                placeholder="" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Numero de Habitaciones</label>
                            <input maxlength="100" type="text" required="required" class="form-control"
                                placeholder="" />
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-md-12 col-xl-12">
                    <h3>Persona de contacto para flexidreams</h3>
                </div>
                <div class="col-xs-12 col-md-6 col-xl-6">
                    <div class="col-md-12">

                        <div class="form-group">
                            <label class="control-label">Nombre y apellido</label>
                            <input maxlength="100" type="text" required="required" class="form-control"
                                placeholder="" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Puesto</label>
                            <input maxlength="100" type="text" required="required" class="form-control"
                                placeholder="" />
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-xl-6">
                    <div class="col-md-12">

                        <div class="form-group">
                            <label class="control-label">Correo Electrónico</label>
                            <input maxlength="100" type="text" required="required" class="form-control"
                                placeholder="" />
                        </div>
                        <div class="form-group">
                            <label class="control-label">Teléfono</label>
                            <input maxlength="100" type="text" required="required" class="form-control"
                                placeholder="" />
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-md-12 col-xl-12">
                    <h3>Materiales puestos a disposición para flexidreams</h3>
                </div>
                <div class="col-xs-12 col-md-6 col-xl-6">
                    <div class="col-md-12">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Listas de precios (Formato PDF)
                                de:</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Menú</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Zona de bienestar y tratamientos</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Otro</label>
                        </div>
                        <hr>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Imagenes</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Videos</label>
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-xl-6">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Pagina web</label>
                            <input maxlength="100" type="text" required="required" class="form-control"
                                placeholder="" />
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-md-12 col-xl-12">
                    <h3>Categorías de Flexidreams en las que se puede clasificar el hotel</h3>
                </div>
                <div class="col-xs-12 col-md-4 col-xl-4">
                    <div class="col-md-12">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Gastronomía</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Belleza y Bienestar</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Cultura</label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-xl-4">
                    <div class="col-md-12">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Enoturismo</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Cicloturismo</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Senderismo</label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-xl-4">
                    <div class="col-md-12">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Deportes de invierno</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Romanticismo</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Playa</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row setup-content" id="step-2">
                <div class="col-xs-12 col-md-12 col-xl-12">
                    <h3>Equipamiento</h3>
                </div>
                <div class="col-xs-12 col-md-6 col-xl-6">
                    <div class="col-md-12">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Sólo para adultos</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">WiFi en áreas publicas</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1"> WiFi en la habitación</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Ascensor</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1"> Sin barreras</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Estacionamiento</label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-xl-6">
                    <div class="col-md-12">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Estación de carga de coches
                                eléctricos</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Sala de bicicletas</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1"> Taller de bicicletas</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1"> Sala guardaesquís</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1"> Minimercado</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1"> Se permiten mascotas </label>
                        </div>

                    </div>
                </div>
                <div class="col-xs-12 col-md-12 col-xl-12">
                    <h3>Relajación, deporte y animación</h3>
                </div>
                <div class="col-xs-12 col-md-4 col-xl-4">
                    <div class="col-md-12">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Acceso directo a la playa</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Playa privada</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Terraza</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Jardín</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Piscina al aire libre</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Piscina de interior</label>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-xl-4">
                    <div class="col-md-12">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Piscina temperada
</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Sillas/ tumbonas </label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Jacuzzi</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Sauna finlandesa</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Baño de vapor</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Baño turco</label>
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-3">
                    <div class="col-xs-12">
                        <div class="col-md-12">
                            <h3> Step 3</h3>
                            <button class="btn btn-success btn-lg pull-right" type="submit">Finish!</button>
                        </div>
                    </div>
                </div>

        </form>
    </div>



</body>

</html>