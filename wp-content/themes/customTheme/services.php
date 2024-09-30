<?php
	/* Template Name: Services */
	get_header();
?>

<main>
	<?php get_template_part( 'templates/banner' ); ?>

	<section id="interior-design" class="service-section section-padding-top section-padding-bottom">
		<div class="container-fluid">
			<div class="row vertical-centered">
				<div class="col-lg-4 col-lg-offset-2 col-sm-offset-1 col-sm-5 col-xs-12">
					<div class="vertical-align">
						<?php if ( $interior_design_title = get_field( 'interior_design_title' ) ) : ?>
							<div class="title">
								<h2 class="h6"><?php echo esc_html( $interior_design_title ); ?></h2>
							</div>
						<?php endif; ?>
						<?php if ( $about_interior_design = get_field( 'about_interior_design' ) ) : ?>
							<div class="content text-center-xs"><?php echo $about_interior_design; ?></div>
						<?php endif; ?>
					</div>
				</div>

				<div class="col-lg-4 col-sm-5 col-xs-12">
					<?php if ( $interior_design_image = get_field( 'interior_design_image' ) ) : ?>
						<div class="img bg-dark">
							<img
								src="<?php echo esc_url( $interior_design_image[ 'url' ] ); ?>"
								alt="<?php echo esc_attr( $interior_design_image[ 'alt' ] ); ?>"
								alt="<?php echo esc_attr( $interior_design_image[ 'width' ] ); ?>"
								alt="<?php echo esc_attr( $interior_design_image[ 'height' ] ); ?>"
								loading="lazy"
							>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>

	<section id="architectural-design" class="service-section section-padding-top section-padding-bottom bg-dark">
		<div class="container-fluid">
			<div class="row vertical-centered">
				<div class="col-lg-4 col-lg-offset-2 col-sm-offset-1 col-sm-5 col-xs-12">
					<?php if ( $architectural_design_image = get_field( 'architectural_design_image' ) ) : ?>
						<div class="img bg-light">
							<img
								src="<?php echo esc_url( $architectural_design_image[ 'url' ] ); ?>"
								alt="<?php echo esc_attr( $architectural_design_image[ 'alt' ] ); ?>"
								alt="<?php echo esc_attr( $architectural_design_image[ 'width' ] ); ?>"
								alt="<?php echo esc_attr( $architectural_design_image[ 'height' ] ); ?>"
								loading="lazy"
							>
						</div>
					<?php endif; ?>
				</div>

				<div class="col-lg-4 col-sm-5 col-xs-12">
					<div class="vertical-align">
						<?php if ( $architectural_design_title = get_field( 'architectural_design_title' ) ) : ?>
							<div class="title">
								<h2 class="h6 light"><?php echo esc_html( $architectural_design_title ); ?></h2>
							</div>
						<?php endif; ?>
						<?php if ( $about_architectural_design = get_field( 'about_architectural_design' ) ) : ?>
							<div class="content text-center-xs light"><?php echo $about_architectural_design; ?></div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="subject-design" class="service-section section-padding-top section-padding-bottom">
		<div class="container-fluid">
			<div class="row vertical-centered">
				<div class="col-lg-4 col-lg-offset-2 col-sm-offset-1 col-sm-5 col-xs-12">
					<div class="vertical-align">
						<?php if ( $subject_design_title = get_field( 'subject_design_title' ) ) : ?>
							<div class="title">
								<h2 class="h6"><?php echo esc_html( $subject_design_title ); ?></h2>
							</div>
						<?php endif; ?>
						<?php if ( $about_subject_design = get_field( 'about_subject_design' ) ) : ?>
							<div class="content text-center-xs"><?php echo $about_subject_design; ?></div>
						<?php endif; ?>
					</div>
				</div>

				<div class="col-lg-4 col-sm-5 col-xs-12">
					<?php if ( $subject_design_image = get_field( 'subject_design_image' ) ) : ?>
						<div class="img">
							<img
								src="<?php echo esc_url( $subject_design_image[ 'url' ] ); ?>"
								alt="<?php echo esc_attr( $subject_design_image[ 'alt' ] ); ?>"
								alt="<?php echo esc_attr( $subject_design_image[ 'width' ] ); ?>"
								alt="<?php echo esc_attr( $subject_design_image[ 'height' ] ); ?>"
								loading="lazy"
							>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>

	<section id="design-cources" class="service-section section-padding-top section-padding-bottom bg-dark">
		<div class="container-fluid">
			<div class="row vertical-centered">
				<div class="col-lg-4 col-lg-offset-2 col-sm-offset-1 col-sm-5 col-xs-12">
					<?php if ( $design_cources_image = get_field( 'design_cources_image' ) ) : ?>
						<div class="img bg-light">
							<img
								src="<?php echo esc_url( $design_cources_image[ 'url' ] ); ?>"
								alt="<?php echo esc_attr( $design_cources_image[ 'alt' ] ); ?>"
								alt="<?php echo esc_attr( $design_cources_image[ 'width' ] ); ?>"
								alt="<?php echo esc_attr( $design_cources_image[ 'height' ] ); ?>"
								loading="lazy"
							>
						</div>
					<?php endif; ?>
				</div>

				<div class="col-lg-4 col-sm-5 col-xs-12">
					<div class="vertical-align">
						<?php if ( $design_cources_title = get_field( 'design_cources_title' ) ) : ?>
							<div class="title">
								<h2 class="h6 light"><?php echo esc_html( $design_cources_title ); ?></h2>
							</div>
						<?php endif; ?>
						<?php if ( $about_design_cources = get_field( 'about_design_cources' ) ) : ?>
							<div class="content text-center-xs light"><?php echo $about_design_cources; ?></div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part( 'templates/contact-form-section' ); ?>
</main>

<?php get_footer(); ?>