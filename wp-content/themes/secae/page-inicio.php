<?php get_header(); ?>

<section class="slider">
	<ul class="slides">
		<!-- <li>
			<img src="<?php echo get_template_directory_uri(); ?>/images/slider_secae1.jpg">
			<div class="caption center-align">
				<h2>Desde 2010</h2>
				<h3>Nuestro compromiso:</h3>
				<h4 class="light grey-text text-lighten-3">Brindarle un excelente servicio con la mejor asistencia en capacitación y asesoría empresarial.</h4>
			</div>
		</li> -->
		<?php 
			$args = array (
				'post_type'			=> 'slider',
				'posts_per_page'	=> -1,
				'order'				=> 'ASC'
			);
			$slide = new WP_Query($args);
			while($slide->have_posts()): $slide->the_post();
		?>

		<li>
			<img src="<?php the_post_thumbnail(); ?>">
			<div class="caption center-align">
				<h2><?php the_title(); ?></h2>
				<h3><?php the_field('subtitulo'); ?></h3>
				<h4 class="light grey-text text-lighten-3"><?php the_content(); ?></h4>
			</div>
		</li>

		<?php endwhile; wp_reset_postdata();?>

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
				<img src="<?php echo get_template_directory_uri(); ?>/images/atlas-de-riesgo.jpg" alt="">
				<h4>ATLAS DE RIESGO </h4>
				<p>Herramienta para identificar en el ambiente laboral los factores y riesgos a la salud</p>
			</div>
			<div class="col s12 m4 Thumbs">
				<img src="<?php echo get_template_directory_uri(); ?>/images/capacitacion.jpg" alt="">
				<h4>CAPACITACIÓN</h4>
				<p>Orientados en ampliar los conocimientos, habilidades y aptitudes del personal que labora en su empresa</p>
			</div>
			<div class="col s12 m4 Thumbs">
				<img src="<?php echo get_template_directory_uri(); ?>/images/laboratorio.jpg" alt="">
				<h4>LABORATORIO</h4>
				<p>Ensayo en ambiente laboral</p>
			</div>
		</div> <!-- row -->

		<div class="row negocio">
			<div class="col s12 m7 thumb1">
				<div class="minidivider_left"></div>
				<h4>Amplia experiencia en el negocio</h4> <br>
				<p>SECAE es una empresa líder en capacitacion y asesoria empresarial por la experiencia y capacidades de nuestro personal. <br><br>

				Fue fundada en febrero del 2010 con el objetivo de capacitar y proporcionar estrategias que incrementen la productividad y competitividad de los trabajadores y los recursos de las empresas, fomentando una cultura de calidad hasta alcanzar la excelencia.</p> 
				 <a style="color: #666;" class="btn btn_secae hide-on-med-and-down" href="#">Leer más</a>
			</div>
			<div class="col s12 m5 thumb" >
				<img style="padding: 2em;" src="<?php echo get_template_directory_uri(); ?>/images/negocio1.jpg" alt="">
			</div>
		</div> <!-- row -->
	</div>
</section>

<section class="solicitar flexi" style="padding: 1em 0;">
	<div class="container">
		<div class="row">
			<div class="col s12 m1"></div>
			<div class="col s12 m10">
				<h5> Logra una mejora continua a través de una cultura de calidad, seguridad, salud en el trabajo, 
protección del medio ambiente, productividad e integridad en los centros de trabajo.</h5> <br>
<h6>Lámanos al (938) 384 1305 o al correo ventas@secaeintegral.com</h6> <br>
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
				<h5>Certificación del Sistema de Gestión de la Calidad</h5> 
				<br><a class="LeerMas" href="<?php echo esc_url( home_url('/certificaciones/') ); ?>">Leer más</a>
				<h4>ISO 9001:2015</h4>
			</div>
			<div class="col s12 m4 isoThumb">
				<img src="<?php echo get_template_directory_uri(); ?>/images/iso2.png" alt="" width="100%">
				<h5>Certificación del Sistema de Gestión Ambiental</h5>
				<br><a class="LeerMas" href="<?php echo esc_url( home_url('/certificaciones/') ); ?>">Leer más</a>
				<h4>ISO 14001:2015</h4>
			</div>
			<div class="col s12 m4 isoThumb">
				<img src="<?php echo get_template_directory_uri(); ?>/images/iso3.png" alt="" width="100%">
				<h5>Certificación del Sistema de Seguridad y Salud en el Trabajo</h5>
				<br><a class="LeerMas" href="<?php echo esc_url( home_url('/certificaciones/') ); ?>">Leer más</a>
				<h4>OHSAS 18001:2007</h4>
			</div>
		</div>
	</div>
</section>

	
<?php get_footer(); ?>