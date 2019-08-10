<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

	<!-- compatilibdad con webapp iOS -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php wp_title(''); ?>">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/favicon/apple-touch-icon.png">

	<!-- compatilibdad con webapp Android -->
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="theme-color" content="#252f63">
	<meta name="application-name" content="<?php wp_title(''); ?>">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon/android-touch-icon.png">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon/logo.ico" />

	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?>
	<?php bloginfo('name'); ?></title>

	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="author" description=""/>
	<link href="//www.google-analytics.com" rel="dns-prefetch">

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
</head>
<body <?php body_class(); ?>>

		
	<nav>
		<div class="container">
		<div class="nav-wrapper">
			<a href="#" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/secae-logo.svg" alt=""></a>
			<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
			<ul id="nav-mobile" class="center menu hide-on-med-and-down">
				<li><a class="" href="#">Inicio</a></li>
				<li><a href="#">Quiénes Somos</a></li>
				<li><a href="#">Servicios</a></li>
				<li><a href="#">Cursos</a></li>
				<li><a href="#">Contacto</a></li>
			</ul>
			<ul id="nav-mobile" class="right menu">
				<li><a class="btn btn_secae hide-on-med-and-down" href="#"><i class="material-icons left">search</i> Buscador</a></li>
				<!-- <li><a class="btn btn_secae hide-on-med-and-up" href="#"><i class="material-icons left">search</i></a></li> -->
			</ul>
			<ul id="slide-out" class="sidenav">
				<li>
					<div class="user-view">
						<div class="background">
							<img src="<?php echo get_template_directory_uri(); ?>/images/sidenav.png">
						</div>
					</div>
				</li>
				<li><a class="waves-effect" href="#!">Menu1</a></li>
			</ul>
			
		</div>
		</div>
	</nav>	

	<section class="slider">
		<ul class="slides">
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/images/slider_secae1.jpg">
				<div class="caption center-align">
					<h2>Desde 2010</h2>
					<h3>Nuestro compromiso</h3>
					<h4 class="light grey-text text-lighten-3">Brindarle un excelente servicio con la mejor asistencia en capacitación y asesoría empresarial.</h4>
				</div>
			</li>
			<li>
				<img src="<?php echo get_template_directory_uri(); ?>/images/slider_secae1.jpg">
				<div class="caption center-align">
					<h2>Desde 2010</h2>
					<h3>Nuestro compromiso</h3>
					<h4 class="light grey-text text-lighten-3">Brindarle un excelente servicio con la mejor asistencia en capacitación y asesoría empresarial.</h4>
				</div>
			</li>
		</ul>

		<div class="bgsecae"><img src="<?php echo get_template_directory_uri(); ?>/images/back_arriba_secae.png" width="100%" alt=""></div>
	</section>

	<section class="Especialidad">
		<div class="container">
			<div class="row">
				<div class="col s12 m12">
					<h3>Nuestras especialidades </h3>
					<br><div class="minidivider"></div>
				</div>
			</div> <!-- row -->

			<div class="row especialidad">
				<div class="col s12 m4 Thumbs">
					<img src="<?php echo get_template_directory_uri(); ?>/images/seguridad-industrial.jpg" alt="">
					<h4>Seguridad Industrial</h4>
					<p>Análisis e Investigación de Accidentes, Análisis de riesgo, Auditoria en Seguridad</p>
				</div>
				<div class="col s12 m4 Thumbs">
					<img src="<?php echo get_template_directory_uri(); ?>/images/medio-ambiente.jpg" alt="">
					<h4>Medio Ambiente</h4>
					<p>Auditoría ambiental, Legislación y normatividad ambiental, Protección Ambiental</p>
				</div>
				<div class="col s12 m4 Thumbs">
					<img src="<?php echo get_template_directory_uri(); ?>/images/requerimientos-pemex.jpg" alt="">
					<h4>Requerimientos PEMEX</h4>
					<p>Anexo "S", Sistema de Permisos Para Trabajos con Riesgo</p>
				</div>
			</div> <!-- row -->

			<div class="row negocio">
				<div class="col s12 m7 thumb1">
					<div class="minidivider_left"></div>
					<h4>Más de 8 años en el negocio</h4> <br>
					<p>SECAE S.A. de C.V. es una empresa líder en capacitacion y asesoria empresarial por la experiencia y capacidades de nuestro personal. <br><br>
					 Fue fundada en febrero del 2010 con el objetivo de capacitar y proporcionar estrategias que incrementen la productividad y competitividad de los trabajadores y los recursos de las empresas, fomentando una cultura de calidad hasta alcanzar la excelencia.</p> 
					 <a style="color: #666;" class="btn btn_secae hide-on-med-and-down" href="#">Leer más</a>
				</div>
				<div class="col s12 m5 thumb">
					<img src="<?php echo get_template_directory_uri(); ?>/images/negocio1.jpg" alt="">
				</div>
			</div> <!-- row -->
		</div>
	</section>

	<section class="solicitar flexi">
		<div class="container">
			<div class="row">
				<div class="col s12 m1"></div>
				<div class="col s12 m10">
					<h5> Logra una mejora continua a través de una cultura de calidad, seguridad, salud en el trabajo,
protección del medio ambiente, productividad e integridad en los centros de trabajo.</h5> <br>
<h6>Lámanos al 555 555-5555 o póngase en contacto con nosotros para obtener su presupuesto</h6> <br>
<a href="#" class="btn btn-large btnsicae">SOLICITAR PRESUPUESTO</a>
				</div>
				<div class="col s12 m1"></div>
			</div>
		</div>
	</section>


	<section class="iso">
		<div class="container">
			<div class="row">
				<div class="col s12 m4 isoThumb">
					<img src="<?php echo get_template_directory_uri(); ?>/images/iso1.png" alt="" width="100%">
					<h5>Certificación del Sistema de
Gestión de la Calidad</h5>
<h4>ISO 9001:2015</h4>
				</div>
				<div class="col s12 m4 isoThumb">
					<img src="<?php echo get_template_directory_uri(); ?>/images/iso2.png" alt="" width="100%">
					<h5>Certificación del Sistema de
Gestión Ambiental</h5>
<h4>ISO 14001:2015</h4>
				</div>
				<div class="col s12 m4 isoThumb">
					<img src="<?php echo get_template_directory_uri(); ?>/images/iso3.png" alt="" width="100%">
					<h5>Certificación del Sistema de
Seguridad y Salud en el Trabajo</h5>
<h4>OHSAS 18001:2007</h4>
				</div>
			</div>
		</div>
	</section>

	
	<footer>
		<div class="bgsecae"><img src="<?php echo get_template_directory_uri(); ?>/images/back_abajo_secae.png" width="100%" alt=""></div>

		<div class="container">
			<div class="row">
				<div class="col s12 m3"><br><br>
					<ul class="menufooter">
					    <li><a href="#">Inicio</a> </li>
					    <li><a href="#">Quiénes Somos</a></li>
					    <li><a href="#">Servicios</a></li>
					    <li><a href="#">Cursos</a></li>
					    <li><a href="#">Contacto</a></li>
					</ul>
				</div>
				<div class="col s12 m4 dir"><br><br>
					<h6>Contacto</h6>
					<ul>
						<li>555-555-555 <br>
micorreo@secaeintegral.com</li> <br>
					    <li>SECAE S.A. DE C.V.
Calle 26 No. 188 Entre 47 y 49
Plaza Mirador Local No. 8 C.P. 24157
Ciudad del Carmen, Camp. Mexico.</li>

					</ul>
				</div>
				<div class="col s12 m1"></div>
				<div class="col s12 m4"> <br><br><br><br>
					<a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/secae-logo-blancos.svg" width="100%" alt=""></a>
				</div>
			</div>
		</div>
	</footer>





	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/materialize.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('.sidenav').sidenav();
			$('.slider').slider({
				interval: 6500,
				height: 600,
				indicators: false
			});
		});
	</script>
</body>
</html>