<!-- CONTACT FORM SECTION -->
<div class="section section-padding-top section-padding-bottom bg-dark overflow-hidden">
	<?php if ( $popup_block_banner = get_field( 'popup_block_banner', 'options' ) ) : ?>
		<div class="full-size img cover">
			<img
				src="<?php echo esc_url( $popup_block_banner[ 'url' ] ); ?>"
				alt="<?php echo esc_attr( $popup_block_banner[ 'alt' ] ); ?>"
				width="<?php echo esc_attr( $popup_block_banner[ 'width' ] ); ?>"
				height="<?php echo esc_attr( $popup_block_banner[ 'height' ] ); ?>"
				loading="lazy"
			>
		</div>
	<?php endif; ?>
	<div class="container text-center">
		<div class="bordered-button open-popup" data-id="contact-form-popup">
			<span></span>
			<span><?php the_field( 'popup_form_btn', 'options' ); ?></span>
			<span></span>
		</div>
	</div>
</div>
<!-- CONTACT FORM SECTION END -->