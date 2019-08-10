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
	<section class="IntPage Certificaciones">
		<div class="container">
		
		<!-- <div class="row">
		
	
			<div id="post-<?php the_ID(); ?>">

				<?php the_content(); ?>

			</div>
		</div> -->

		<div class="row Certi">
			<div class="col s12 m3 offset-m1 Logos t_center">
				<img src="<?php echo get_template_directory_uri(); ?>/images/iso1.png" alt="">
				<p>Certificación del Sistema de Gestión de la Calidad</p>
			</div>
			<div class="col s12 m7 offset-m1"> <br><br>
				<h3 class="t_left">ISO 9001:2015</h3>
				<p>Certificación del Sistema de Gestión de la Calidad, que asegura nuestra capacidad para proveer productos y servicios que atienden las necesidades de nuestros clientes, cumpliendo con requisitos y especificaciones, para poder aumentar su satisfacción mediante mejoras de proceso y evaluación de la conformidad.</p>
			</div>
		</div>

		<div class="row Certi">
			<div class="col s12 m7 offset-m1"> <br><br><br>
				<h3 class="t_left">ISO 14001:2015</h3>
				<p>Certificación del Sistema de Gestión Ambiental, que demuestra nuestro compromiso con el medio ambiente, mediante la prevención de la contaminación y respondiendo oportunamente a todas las condiciones ambientales, en equilibrio con las necesidades socioeconómicas de nuestra organización.</p>
			</div>
			<div class="col s12 m3 offset-m1 Logos t_center">
				<img src="<?php echo get_template_directory_uri(); ?>/images/iso2.png" alt="">
				<p>Certificación del Sistema de Seguridad y Salud en el Trabajo</p>
			</div>
		</div>

		<div class="row Certi">
			<div class="col s12 m3 offset-m1 Logos t_center">
				<img src="<?php echo get_template_directory_uri(); ?>/images/iso3.png" alt="">
				<p>Certificación del Sistema de Gestión Ambiental</p>
			</div>
			<div class="col s12 m7 offset-m1"> <br><br>
				<h3 class="t_left">OHSAS 18001:2007</h3>
				<p>Certificación del Sistema de Seguridad y Salud en el Trabajo, que demuestra un claro compromiso de nuestra organización con la seguridad y salud del personal y puede contribuir a que estén más motivados sean más eficientes y productivos, al identificar peligros, prevenir riesgos y promover las medidas de control necesarias en el lugar de trabajo para prevenir accidentes.</p>
			</div>
		</div>

		<div class="row Certi">
			<div class="col s12 m6 offset-m1"> <br><br><br>
				<h3 class="t_left">NMX-R-025-SCFI-2015</h3>
				<p>La Norma Mexicana NMX-R-025-SCFI-2015 en Igualdad Laboral y No Discriminación es un mecanismo de adopción voluntaria para reconocer a los centros de trabajo que cuentan con prácticas en materia de igualdad laboral y no discriminación, para favorecer el desarrollo integral de las y los trabajadores.</p> <br>
				<img src="<?php echo get_template_directory_uri(); ?>/images/normasocial.jpg" width="100%" alt="" style="padding: 2em;">
			</div>
			<div class="col s12 m5 Logos t_center">
				<a data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>/images/norma.jpg"><img src="<?php echo get_template_directory_uri(); ?>/images/norma.jpg" alt=""></a>
			</div>
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