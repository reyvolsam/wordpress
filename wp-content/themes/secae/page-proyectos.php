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

		<div class="row ">
			<div class="col s12 m4 Proyectos_Int">
				<a class="" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/proyecto1.svg" alt="ATLAS DE RIESGO A LA SALUD"></a>
			</div>
			<div class="col s12 m4 Proyectos_Int">
				<img src="<?php echo get_template_directory_uri(); ?>/images/proyecto2.svg" alt="ANALISIS DE RIESGO DE LOS PROCESOS">
			</div>
			<div class="col s12 m4 Proyectos_Int">
				<img src="<?php echo get_template_directory_uri(); ?>/images/proyecto3.svg" alt="PLAN DE CONTINGENCIA AMBIENTAL">
			</div>
			<div class="col s12 m4 Proyectos_Int">
				<a class="" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/proyecto4.svg" alt="ATLAS DE RIESGO A LA SALUD"></a>
			</div>
			<div class="col s12 m4 Proyectos_Int">
				<img src="<?php echo get_template_directory_uri(); ?>/images/proyecto5.svg" alt="ANALISIS DE RIESGO DE LOS PROCESOS">
			</div>
			<div class="col s12 m4 Proyectos_Int">
				<img src="<?php echo get_template_directory_uri(); ?>/images/proyecto6.svg" alt="PLAN DE CONTINGENCIA AMBIENTAL">
			</div>
			<div class="col s12 m4 offset-m4 Proyectos_Int">
				<img src="<?php echo get_template_directory_uri(); ?>/images/proyecto7.svg" alt="PLAN DE CONTINGENCIA AMBIENTAL">
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