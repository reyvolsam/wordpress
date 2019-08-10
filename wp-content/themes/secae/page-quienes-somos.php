<?php get_header(); ?>

<main role="main">
	<section class="Int_BgPage" style="height: 280px;background: url('<?php echo get_template_directory_uri(); ?>/images/secae_blur.png') top center repeat, url('<?php the_post_thumbnail_url(); ?>') top center no-repeat;-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
		<div class="container">
			<div class="row">
				<div class="col s12 m12">
					<h2 class="t_center"><?php the_title(); ?></h2>
				</div>
			</div>
		</div>
	</section>


<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<section class="IntPage QuienesSomos">
		<div class="container">
		
		<!-- <div class="row">
		
	
			<div id="post-<?php the_ID(); ?>">

				<?php the_content(); ?>

			</div>
		</div> -->

		<div class="row negocio">
			<div class="col s12 m7 thumb1"> <br>
				<h3>Amplia experiencia en el negocio</h3> <br><br><br>
				<p>SECAE es una empresa líder en capacitacion y asesoria empresarial por la experiencia y capacidades de nuestro personal. <br><br>

Fue fundada en febrero del 2010 con el objetivo de capacitar y proporcionar 
estrategias que incrementen la productividad y competitividad de los trabajadores 
y los recursos de las empresas, fomentando una cultura de calidad hasta 
alcanzar la excelencia.</p> 

			</div>
			<div class="col s12 m5 thumb" >
				<img style="padding: 2em; margin-bottom: -1em" src="<?php echo get_template_directory_uri(); ?>/images/negocio1.jpg" alt="">
			</div>
		</div> <!-- row -->


		<div class="row Vision">
			<div class="col s12 m6">
				<img style="padding: 0em;" src="<?php echo get_template_directory_uri(); ?>/images/mision.jpg" alt="">
			</div>
			<div class="col s12 m6">
				<h3 class="t_left">Misión</h3>
				<p>Brindar servicios de capacitación, consultoría, estudios en materia de seguridad, salud en el trabajo y protección ambiental, construcción y mantenimiento industrial, unidad de verificación y laboratorio de ensayo, proporcionando soluciones flexibles y de pronta respuesta para la industria en México.</p>
			</div>
		</div>

		<div class="row Vision">
			<div class="col s12 m6"> <br><br><br>
				<h3 class="t_left">Visión</h3>
				<p>Ser una empresa líder en la industria en México en la prestación de servicios de capacitación, consultoría, estudios en materia de seguridad, salud en el trabajo y protección ambiental, construcción y mantenimiento industrial, unidad de verificación y laboratorio de ensayo, siempre con el enfoque de satisfacer a nuestros clientes.</p>
			</div>
			<div class="col s12 m6">
				<img style="padding: 0em;" src="<?php echo get_template_directory_uri(); ?>/images/vision.jpg" alt="">
			</div>
			
		</div>


		<div class="row">
			<div class="col s12 m12">
				<h3>¿Por qué elegirnos?</h3>
				<div class="col s6 m3">
					<div class="box">
						<img src="<?php echo get_template_directory_uri(); ?>/images/acerca1.svg" alt="">
						<p>Atención y respuesta inmediata a la solicitud de servicios.</p>
					</div>
				</div>
				<div class="col s6 m3">
					<div class="box">
						<img src="<?php echo get_template_directory_uri(); ?>/images/acerca2.svg" alt="">
						<p>Capacitación y asesoría calificada.</p>
					</div>
				</div>
				<div class="col s6 m3">
					<div class="box">
						<img src="<?php echo get_template_directory_uri(); ?>/images/acerca3.svg" alt="">
						<p>Transparencia en todos nuestros servicios.</p>
					</div>
				</div>
				<div class="col s6 m3">
					<div class="box">
						<img src="<?php echo get_template_directory_uri(); ?>/images/acerca4.svg" alt="">
						<p>Manejo de la información actualizada.</p>
					</div>
				</div>
				<div class="col s6 m3">
					<div class="box">
						<img src="<?php echo get_template_directory_uri(); ?>/images/acerca5.svg" alt="">
						<p>Nos ajustamos a sus 
necesidades de los servicios.</p>
					</div>
				</div>
				<div class="col s6 m3">
					<div class="box">
						<img src="<?php echo get_template_directory_uri(); ?>/images/acerca6.svg" alt="">
						<p>Personal comprometido en 
satisfacer las necesidades 
de nuestros clientes.</p>
					</div>
				</div>
				<div class="col s6 m3">
					<div class="box">
						<img src="<?php echo get_template_directory_uri(); ?>/images/acerca7.svg" alt="">
						<p>Personal certificado y calificado.</p>
					</div>
				</div>
				<div class="col s6 m3">
					<div class="box">
						<img src="<?php echo get_template_directory_uri(); ?>/images/acerca8.svg" alt="">
						<p>Incluimos asesoría en la 
capacitación del personal.</p>
					</div>
				</div>
			</div>
		</div>

			<br><br>
		
		<div class="row">
			<div class="col m1"></div>
			<div class="col m10 minifooterImg">
				<img src="<?php echo get_template_directory_uri(); ?>/images/footerquienes.jpg" alt="">
			</div>
			<div class="col m1"></div>
		</div>

		<?php endwhile; ?>

		<?php else: ?>
		<div class="row">
			<article class="col s12 m12">

				<h2 class="t_center"><?php _e( 'Lo sentimos no fue nada mostrado', 'html5blank' ); ?></h2>

			</article>
		</div>
		<?php endif; ?>

		
		</div>
	</section>
</main>

<?php get_footer(); ?>