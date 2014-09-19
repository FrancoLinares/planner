<?php
$nombre = $_POST['name'];
$apellido = $_POST['apellido'];
$mail = $_POST['mail'];
$texto = $_POST['texto'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre ." ". $apellido ." \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $texto . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'info@planner15tv.com.ar';
$asunto = 'Nuevo Mail';

mail($para, $asunto, utf8_decode($mensaje), $header);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planner 1.5 | Nosotros</title>
	<!-- CSS -->
	<link href=".././css/bootstrap.min.css" rel="stylesheet">
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
	<link href=".././css/main.css" rel="stylesheet">
	<link href=".././css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    <div class="navbar-wrapper">
      <div class="container">

        <header class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src=".././img/logo_web.png"/></a>
            </div>
            <nav class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href=".././index.html"><span class="icono home"></span>Home</a></li>
                <li><a href="/nosotros"><span class="icono nosotros"></span>Nosotros</a></li>
                <li><a href="/programas"><span class="icono programas"></span>Programas</a></li>
                <li><a href="/ellos-son"><span class="icono ellos"></span>Ellos Son</a></li>
                <li><a href="/contacto"><span class="icono contacto"></span>Contacto</a></li>
              </ul>
              <div class="social-panel">
                <ul class="social">
                  <li><a href="https://www.facebook.com/Planner1.5tv" target="_blank"><i class="icon-facebook icon-social"></i></a></li>
                  <li><a href="https://www.youtube.com/results?search_query=Planner+1.5" target="_blank"><i class="icon-youtube icon-social"></i></a></li>
                  <li><a href="https://twitter.com/Planner15tv" target="_blank"><i class="icon-twitter icon-social"></i></a></li>
                  <li><a href="http://instagram.com/Planner1.5tv" target="_blank"><i class="icon-instagram icon-social"></i></a></li>
                </ul>
              </div>
            </nav>
          </div>
        </header>
        <h2 style="margin:5%">Gracias por enviarnos un mail <?php $nombre ?></h2>
       </div><!-- /.container -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
       <script src=".././js/bootstrap.js"></script>
<body>
</html>