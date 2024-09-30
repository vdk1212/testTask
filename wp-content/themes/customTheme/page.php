<?php get_header(); ?>

<main>
	<?php get_template_part( 'templates/banner' ); ?>

	<!-- CONTENT -->
	<?php if ( $content = get_field( 'content' ) ) : ?>
		<div class="section section-padding-top section-padding-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
						<div class="content">
							<?php echo $content; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<!-- CONTENT END -->
</main>

<?php get_footer(); ?>