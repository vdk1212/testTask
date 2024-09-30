<?php
	get_header();
?>

<main class="without-banner error">
	<div class="container">
		<div class="row">
			<div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1 col-12 text-center">
				<h1 class="h2 animation fade-in-up"><?php the_field( 't_404_title', 'options' ) ?></h1>
				<div class="h1 animation fade-in-up">404</div>
				<div class="animation fade-in-up">
					<a href="<?php echo get_home_url(); ?>" class="btn btn-dark"><?php the_field( 't_404_homeback', 'options' ) ?></a>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>