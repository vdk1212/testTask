<!-- CLIENTS SECTION -->
<?php if ( is_page_template( 'about.php' ) ) { ?>
	<section class="section-padding-top section-padding-bottom">
<? } else { ?>
	<section class="section-padding-top-xs section-padding-bottom">
<? } ?>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 text-center">
				<?php if ( $clients_title = get_field( 'clients_title' ) ) : ?>
					<h2 class="h2 dark"><?php echo esc_html( $clients_title ); ?></h2>
				<?php endif; ?>
				<?php if ( $clients_content = get_field( 'clients_content' ) ) : ?>
					<div class="content large">
						<p><?php echo $clients_content; ?></p>
					</div>
					<div class="content"></div>
				<?php endif; ?>
			</div>
		</div>
		<?php if ( have_rows( 'clients_slider' ) ) : ?>
			<div class="clients-carousel">
				<div class="swiper-container" data-loop="1" data-slides-per-view="6" data-breakpoints="1" data-md-slides="5" data-sm-slides="4" data-xs-slides="2" data-space-between="30" data-space-between-md="15" data-space-between-xs="0" data-autoplay="7000">
					<div class="swiper-wrapper">
						<?php while ( have_rows( 'clients_slider' ) ) : the_row(); ?>
							<?php if ( $client_logo = get_sub_field( 'client_logo' ) ) : ?>
								<div class="swiper-slide">
									<div class="img">
										<img
											src="<?php echo esc_url( $client_logo[ 'url' ] ); ?>"
											alt="<?php echo esc_attr( $client_logo[ 'alt' ] ); ?>"
											width="<?php echo esc_attr( $client_logo[ 'width' ] ); ?>"
											height="<?php echo esc_attr( $client_logo[ 'height' ] ); ?>"
											loading="lazy"
										>
									</div>
								</div>
							<?php endif; ?>
						<?php endwhile; ?>
					</div>
				</div>
				<div class="swiper-pagination"></div>
			</div>
		<?php endif; ?>
	</div>
</section>
<!-- CLIENTS SECTION END -->