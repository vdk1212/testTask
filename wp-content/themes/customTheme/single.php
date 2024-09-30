<?php get_header(); ?>

<main>
	<!-- BANNER -->
	<div class="banner bg-dark section-padding-top section-padding-bottom">
		<?php if ( $banner_bg_img = get_field( 'banner_bg_img' ) ) : ?>
			<div class="full-size img cover">
				<img
					src="<?php echo esc_url( $banner_bg_img[ 'url' ] ); ?>"
					alt="<?php echo esc_attr( $banner_bg_img[ 'alt' ] ); ?>"
					width="<?php echo esc_attr( $banner_bg_img[ 'width' ] ); ?>"
					height="<?php echo esc_attr( $banner_bg_img[ 'height' ] ); ?>"
					loading="lazy"
				>
			</div>
		<?php endif; ?>

		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 text-center">
					<div class="vertical-align align-items-center">
						<div>
							<h1 class="h1 light"><?php the_title(); ?></h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="breadcrumbs">
			<a href="/">Home</a>
			<a href="<?php echo get_page_link( 314 ); ?>">Projects</a>
			<span><?php the_title(); ?></span>
		</div>
	</div>
	<!-- BANNER -->

	<!-- CONTENT -->
	<div class="section section-padding-top section-padding-bottom">
		<div class="container">
			<?php if ( $project_location = get_field( 'project_location' ) ) : ?>
				<div class="content text-uppercase">
					<p>Location: <b><?php echo esc_html( $project_location ); ?></b></p>
				</div>
			<?php endif; ?>

			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
					<?php if ( $about_project = get_field( 'about_project' ) ) : ?>
						<div class="content">
							<?php echo $about_project; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>

			<?php if ( have_rows( 'project_gallery' ) ) : ?>
				<div class="row section-padding-top">
					<div class="col-xs-12">
						<?php while ( have_rows( 'project_gallery' ) ) : the_row(); ?>
							<div class="content">
								<?php if ( $image_caption = get_sub_field( 'image_caption' ) ) : ?>
									<p class="small"><b><?php echo esc_html( $image_caption ); ?></b></p>
								<?php endif; ?>

								<?php if ( $project_image = get_sub_field( 'project_image' ) ) : ?>
									<div class="img">
										<img
											src="<?php echo esc_url( $project_image[ 'url' ] ); ?>"
											alt="<?php echo esc_attr( $project_image[ 'alt' ] ); ?>"
											width="<?php echo esc_attr( $project_image[ 'width' ] ); ?>"
											height="<?php echo esc_attr( $project_image[ 'height' ] ); ?>"
											loading="lazy"
										>
									</div>
								<?php endif; ?>
							</div>
						<?php endwhile; ?>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
	<!-- CONTENT END -->

	<?php get_template_part( 'templates/contact-form-section' ); ?>
</main>

<?php get_footer(); ?>