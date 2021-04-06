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
    </script>
</head>

<body>
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
        <a href="en/login.php"> EN | </a>
    </li>
    <li>
        <a href="al/login.php"> AL </a>
    </li>
</ul>

</div>

</div>
</div>
<div id=top-bar-movile>

<nav class="negrazo navbar navbar-expand-xs navbar-dark ">
    <h1 onclick="window.location.href='index.php';" class="titulo-top"><img class="logo-top" src="img/logo-white.png">
        FLEXIDREAMS</i>
    </h1>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="the-concept.php">Concepto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Hoteles y Resorts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="experiencias.php">Experiencias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Iniciar Sesion&nbsp;&nbsp;<i id=manita onclick="location.href='login.php';" class="fas fa-key"></i></a>
            </li>
            <ul>
    <li>
        <a href="#"> ES | </a>
    </li>
    <li>
        <a href="en/login.php"> EN | </a>
    </li>
    <li>
        <a href="al/login.php"> AL </a>
    </li>
</ul>
    </div>
</nav>


</div>




</div>

</div>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="img/logo-white.svg" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form action="login-comprobar.php" method="post">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="user" class="form-control input_user" value="" placeholder="usuario">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="contrasena" class="form-control input_pass" value="" placeholder="contraseña">
						</div>
						
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button  name="button" class="btn login_btn">Login</button>
				   </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						¿No tienes cuenta? <a href="#" class="ml-2">¡Registrate!</a>
					</div>
					<div class="d-flex justify-content-center links">
						<a href="#">¿Has olvidado la contraseña?</a>
                    </div>
                    <div class="d-flex justify-content-center links">
                    ¿Eres un hotel?<a  class="ml-2" href="form-hotel.php">¡Registrate aqui!</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>