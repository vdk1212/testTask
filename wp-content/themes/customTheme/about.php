<?php
	/* Template Name: About */
	get_header();
?>

<main>
	<!-- BANNER -->
	<section class="banner about-page section-padding-top section-padding-bottom bg-dark">
		<?php if ( $banner_img = get_field( 'banner_img' ) ) : ?>
			<div class="full-size img cover">
				<img
					src="<?php echo esc_url( $banner_img[ 'url' ] ); ?>"
					alt="<?php echo esc_attr( $banner_img[ 'alt' ] ); ?>"
					width="<?php echo esc_attr( $banner_img[ 'width' ] ); ?>"
					height="<?php echo esc_attr( $banner_img[ 'height' ] ); ?>"
					loading="lazy"
				>
			</div>
		<?php endif; ?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-5 col-lg-offset-2 col-md-7 col-sm-10 col-sm-offset-1 col-xs-12">
					<div class="vertical-align">
						<div>
							<?php if ( $about_banner_title = get_field( 'about_banner_title' ) ) : ?>
								<h1 class="h1 light"><?php echo esc_html( $about_banner_title ); ?></h1>
							<?php endif; ?>
							<?php if ( $about_banner_text = get_field( 'about_banner_text' ) ) : ?>
								<div class="content large text-center-sm light">
									<p><?php echo esc_html( $about_banner_text ); ?></p>
								</div>
							<?php endif; ?>

							<?php if ( have_rows( 'achievements' ) ) : ?>
								<div class="statistic">
									<div class="row">
										<?php while ( have_rows( 'achievements' ) ) : the_row(); ?>
											<div class="col-sm-3 col-xs-6">
												<div class="card style-2">
													<?php if( get_row_index() == 1 ) { ?>
														<div class="img piechart plus-after" data-percent="<?php the_sub_field( 'achievements_number' ); ?>">
													<?php } else { ?>
														<div class="img piechart" data-percent="<?php the_sub_field( 'achievements_number' ); ?>">
													<?php } ?>
														<span class="angle"></span>
														<span class="angle"></span>
														<span class="angle"></span>
														<span class="angle"></span>
														<div class="h1 light">
															<span class="pr-chart"></span>
														</div>
													</div>
													<?php if ( $achievements_description = get_sub_field( 'achievements_description' ) ) : ?>
														<div class="content text-uppercase light">
															<p><?php echo esc_html( $achievements_description ); ?></p>
														</div>
													<?php endif; ?>
												</div>
											</div>
										<?php endwhile; ?>
									</div>
								</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- BANNER END -->

	<?php get_template_part( 'templates/about-section' ); ?>

	<!-- AWARDS SECTION -->
	<section class="section-padding-bottom">
		<div class="container-fluid text-center">
			<div class="row">
				<?php if ( have_rows( 'awards_slider' ) ) : ?>
					<div class="col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
						<?php if ( $awards_title = get_field( 'awards_title' ) ) : ?>
							<h2 class="h4"><?php echo esc_html( $awards_title ); ?></h2>
						<?php endif; ?>
						<?php if ( $awards_content = get_field( 'awards_content' ) ) : ?>
							<div class="content large">
								<p><?php echo $awards_content; ?></p>
							</div>
						<?php endif; ?>
						<div class="awards-carousel">
							<div class="swiper-container" data-loop="1" data-slides-per-view="6" data-breakpoints="1" data-md-slides="5" data-sm-slides="4" data-xs-slides="2" data-pagination-type="bullets" data-autoplay="7000">
								<div class="swiper-wrapper">
									<?php while ( have_rows( 'awards_slider' ) ) : the_row(); ?>
										<div class="swiper-slide">
											<span class="angle"></span>
											<span class="angle"></span>
											<?php if ( $award_logo = get_sub_field( 'award_logo' ) ) : ?>
												<img
													src="<?php echo esc_url( $award_logo[ 'url' ] ); ?>"
													alt="<?php echo esc_attr( $award_logo[ 'alt' ] ); ?>"
													width="<?php echo esc_attr( $award_logo[ 'width' ] ); ?>"
													height="<?php echo esc_attr( $award_logo[ 'height' ] ); ?>"
													loading="lazy"
												>
											<?php endif; ?>
										</div>
									<?php endwhile; ?>
								</div>
							</div>
							<div class="swiper-pagination dark"></div>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<!-- AWARDS SECTION END -->

	<!-- ADVANTAGES SECTION -->
	<section class="bg-dark section-padding-top section-padding-bottom">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 col-sm-offset-1 col-sm-10 col-xs-12">
					<?php if ( $advantages_title = get_field( 'advantages_title' ) ) : ?>
						<h2 class="h1 light text-uppercase text-center-sm"><?php echo esc_html( $advantages_title ); ?></h2>
					<?php endif; ?>
					<?php if ( have_rows( 'advantages' ) ) : ?>
						<div class="row">
							<?php while ( have_rows( 'advantages' ) ) : the_row(); ?>
								<div class="col-sm-6 col-xs-12">
									<div class="title text-left-sm">
										<?php if ( $advantage_title = get_sub_field( 'advantage_title' ) ) : ?>
											<h3 class="h5 light text-center-xs"><?php echo esc_html( $advantage_title ); ?></h3>
										<?php endif; ?>
										<?php if ( $advantage_content = get_sub_field( 'advantage_content' ) ) : ?>
											<div class="content light">
												<?php echo $advantage_content; ?>
											</div>
											<div></div>
										<?php endif; ?>
									</div>
								</div>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
	<!-- ADVANTAGES SECTION END -->

	<?php get_template_part( 'templates/clients-section' ); ?>

	<?php get_template_part( 'templates/contact-form-section' ); ?>
</main>

<?php get_footer(); ?>