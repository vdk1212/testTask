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
						<?php if ( $about_projects = get_field( 'about_projects' ) ) : ?>
							<div class="content large light text-center">
								<p><?php echo $about_projects; ?></p>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="breadcrumbs">
		<a href="/">Home</a>
		<span><?php the_title(); ?></span>
	</div>
</div>
<!-- BANNER -->