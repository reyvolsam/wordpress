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

	<?php wp_head(); ?>
	
	<script>
		conditionizr.config({
			assets: '<?php echo get_template_directory_uri(); ?>',
			tests: {}
		});
	</script>

</head>
<body <?php body_class(); ?>>

		
	<nav>
		<div class="container">
		<div class="nav-wrapper">
			<a href="<?php echo esc_url( home_url('/') ); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/images/secae-logo.svg" alt=""></a>
			<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
			<ul id="nav-mobile" class="center Menu ">

				<?php wp_nav_menu_principal(); ?>
				
				<!-- <li><a class="hide-on-med-and-down" href="#">Inicio</a></li>
				<li><a class="hide-on-med-and-down" href="#">Quiénes Somos</a></li>
				<li><a class="hide-on-med-and-down" href="#">Certificaciones</a></li>
				<li><a class="hide-on-med-and-down" href="#">Proyectos</a></li>
				<li><a class="hide-on-med-and-down" href="#">Capacitación</a></li> -->

			</ul>
			<ul id="nav-mobile" class="right">
				<li><a class="btn btn_secae hide-on-med-and-down" href="#"><i class="material-icons left">search</i> Buscador</a></li>
				
				<li><a class="hide-on-med-and-up" href="#"><i class="fa fa-search"></i></a></li>
			</ul>
			<ul id="slide-out" class="sidenav">
				<li>
					<div class="user-view">
						<div class="background">
							<img src="<?php echo get_template_directory_uri(); ?>/images/sidenav.png">
						</div>
					</div>
				</li>
				<?php wp_nav_menu_sin_ul(); ?>
			</ul>
			
		</div>
		</div>
	</nav>	