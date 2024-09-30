<?php
	/* Template Name: Contacts */
	get_header();
?>

<main class="bg-dark">
	<div class="banner contacts-page section-padding-top section-padding-bottom bg-dark">
		<?php if ( $contacts_bg_img = get_field( 'contacts_bg_img' ) ) : ?>
			<div class="full-size img cover">
				<img
					src="<?php echo esc_url( $contacts_bg_img[ 'url' ] ); ?>"
					alt="<?php echo esc_attr( $contacts_bg_img[ 'alt' ] ); ?>"
					width="<?php echo esc_attr( $contacts_bg_img[ 'width' ] ); ?>"
					height="<?php echo esc_attr( $contacts_bg_img[ 'height' ] ); ?>"
					loading="lazy"
				>
			</div>
		<?php endif; ?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-lg-offset-2 col-md-7 col-sm-10 col-sm-offset-1 col-xs-12">
					<div class="vertical-align">
						<div>
							<?php if ( $contacts_title = get_field( 'contacts_title' ) ) : ?>
								<h1 class="h1 light"><?php echo esc_html( $contacts_title ); ?></h1>
							<?php endif; ?>
							<?php if ( $contacts_text = get_field( 'contacts_text' ) ) : ?>
								<div class="content large light text-center-sm">
									<p><?php echo $contacts_text; ?></p>
								</div>
							<?php endif; ?>
							<div class="nav-contacts">
								<?php if ( $address = get_field( 'address', 'options' ) ) : ?>
									<div>
										<span>Visit Us:</span>
										<a href="<?php echo esc_url( $address ); ?>" target="_blank" rel="noopener noreferrer"><?php the_field( 'address_text', 'options' ); ?></a>
									</div>
								<?php endif; ?>

								<?php if ( $phone_number = get_field( 'phone_number', 'options' ) ) : ?>
									<div>
										<span>Call:</span>
										<a href="tel:<?= preg_replace( '/[^0-9]/', '', $phone_number ); ?>"><?php echo esc_html( $phone_number ); ?></a>
									</div>
								<?php endif; ?>

								<?php if ( $email = get_field( 'email', 'options' ) ) : ?>
									<div>
										<span>Write to us:</span>
										<a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
									</div>
								<?php endif; ?>
							</div>
							<div class="content text-center-sm">
								<div></div>
								<div class="button open-popup" data-id="contact-form-popup"><?php the_field( 'popup_form_btn', 'options' ); ?></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>