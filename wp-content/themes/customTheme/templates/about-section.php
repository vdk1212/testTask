<!-- ABOUT SECTION -->
<section class="about section-padding-top section-padding-bottom">	
	<div class="container-fluid">
		<div class="row vertical-centered">
			<div class="col-lg-4 col-lg-offset-2 col-sm-offset-1 col-sm-5 col-xs-12">
				<div class="vertical-align">
					<?php if ( $about_title = get_field( 'about_title' ) ) : ?>
						<div class="title">
							<h2 class="h3"><?php echo esc_html( $about_title ); ?></h2>
						</div>
					<?php endif; ?>
					<?php if ( $about_content = get_field( 'about_content' ) ) : ?>
						<div class="content"><?php echo $about_content; ?></div>
					<?php endif; ?>
					<?php if ( is_page_template( 'about.php' ) ) { ?>
						<a href="<?php echo get_page_link( 43 ); ?>" title="Reed more about our studio" class="button dark">See more</a>
					<?php } else { ?>
						<a href="<?php echo get_page_link( 41 ); ?>" title="Reed more about our studio" class="button dark">Read more</a>
					<?php } ?>
				</div>
			</div>

			<div class="col-lg-4 col-sm-5 col-xs-12">
				<?php if ( $about_image = get_field( 'about_image' ) ) : ?>
					<div class="img">
						<img
							src="<?php echo esc_url( $about_image[ 'url' ] ); ?>"
							alt="<?php echo esc_attr( $about_image[ 'alt' ] ); ?>"
							alt="<?php echo esc_attr( $about_image[ 'width' ] ); ?>"
							alt="<?php echo esc_attr( $about_image[ 'height' ] ); ?>"
							loading="lazy"
						>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<!-- ABOUT SECTION END -->