	<!-- FOOTER -->
	<footer>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<?php if ( $email = get_field( 'email', 'options' ) ) : ?>
						<div class="footer-contacts">
							<a href="mailto:<?php echo $email; ?>">
								<svg width="479.916" height="479.916" viewBox="0 0 479.916 479.916"><path d="M12.5 408.458h454.916c6.903 0 12.5-5.596 12.5-12.5v-312c0-6.904-5.597-12.5-12.5-12.5H12.5c-6.903 0-12.5 5.596-12.5 12.5v312c0 6.904 5.597 12.5 12.5 12.5zm442.416-25H25V157.062l209.408 103.773c3.496 1.732 7.604 1.732 11.1 0l209.408-103.773v226.396zm0-287v32.703L239.958 235.684 25 129.161V96.458h429.916z"/></svg>
								<span><?php echo $email; ?></span>
							</a>
						</div>
					<?php endif; ?>
				</div>

				<div class="col-sm-6 col-xs-12">
					<?php if ( $phone_number = get_field( 'phone_number', 'options' ) ) : ?>
						<div class="footer-contacts">
							<a href="tel:<?= preg_replace( '/[^0-9]/', '', $phone_number ); ?>">
								<svg width="22" height="22" viewBox="0 0 22 22"><path d="M5.265 2.389l1.873 3.745-1.383 1.357-1.046 1.028.666 1.307c1.07 2.099 2.789 3.839 2.888 3.938.073.073 1.812 1.792 3.912 2.862l1.307.666 1.028-1.047 1.357-1.382 3.802 1.901c-.17.546-.351 1-.479 1.168-.73.954-1.982 2.068-3.108 2.068-1.475 0-6.405-1.595-9.258-4.689l-.047-.05-.029-.029-.028-.028-.03-.027C3.595 12.323 2 7.394 2 5.918 2 4.69 3.046 3.37 3.765 3.001c.461-.235 1.004-.444 1.5-.612M6.306 0S4.304.478 2.853 1.222C1.538 1.896 0 3.866 0 5.918c0 2.053 1.819 7.487 5.333 10.728l.02.02C8.594 20.181 14.029 22 16.082 22s3.799-1.679 4.696-2.853c.744-.973 1.222-3.453 1.222-3.453l-6.541-3.271-2.377 2.42c-1.843-.939-3.409-2.497-3.409-2.497l-.02-.02s-1.558-1.565-2.497-3.409l2.42-2.377L6.306 0z"/></svg>
								<span><?php echo esc_html( $phone_number ); ?></span>
							</a>
						</div>
					<?php endif; ?>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-3 col-lg-offset-1 col-md-4 col-sm-6 col-xs-12">
					<?php if ( $copyright_text = get_field( 'copyright_text', 'options' ) ) : ?>
						<span class="copyright">Copyright © <?= date( 'Y' ) . ' ' . $copyright_text ?></span>
					<?php endif; ?>
				</div>

				<div class="col-md-4 col-xs-12 light">
					<?php get_template_part( 'templates/social' ); ?>
				</div>

				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
					<ul class="terms">
						<li>
							<a href="<?php echo get_page_link( 3 ); ?>"><?php echo get_the_title( 3 ); ?></a>
						</li>

						<li>
							<a href="<?php echo get_page_link( 160 ); ?>"><?php echo get_the_title( 160 ); ?></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- FOOTER END -->

	<!-- POPUPS -->
	<div class="popup">
		<!-- CONTACT FORM POPUP -->
		<div class="popup-content" id="contact-form-popup">
			<div class="popup-bg popup-bg-close"></div>
			<div class="popup-container bg-light">
				<?php if ( $popup_form_title = get_field( 'popup_form_title', 'options' ) ) : ?>
					<div class="h2 text-center"><?php echo esc_html( $popup_form_title ); ?></div>
				<?php endif; ?>
				<form action="/" id="contact-form" class="form row">
					<div class="col-sm-4 col-xs-12">
						<label>
							<input type="text" name="name" required>
							<span>Name</span>
							<span>Заповніть поле</span>
						</label>
					</div>
	
					<div class="col-sm-4 col-xs-12">
						<label>
							<input type="text" name="phone" required>
							<span>Phone number</span>
							<span>Заповніть поле</span>
						</label>
					</div>
	
					<div class="col-sm-4 col-xs-12">
						<label>
							<input type="email" name="email" required>
							<span>E-mail</span>
							<span>Заповніть поле</span>
						</label>
					</div>
	
					<div class="col-xs-12">
						<label>
							<textarea name="message" cols="30" rows="3"></textarea>
							<span>Message</span>
							<span>Заповніть поле</span>
						</label>
					</div>
	
					<div class="col-xs-12">
						<div class="text-center">
							<span class="button dark contact-form-btn">Submit</span>
						</div>
					</div>
				</form>
				<div class="button-close popup-btn-close"></div>
			</div>
		</div>
		<!-- CONTACT FORM POPUP END -->

		<!-- THANKS POPUP -->
		<div class="popup-content" id="thanks-popup">
			<div class="popup-bg popup-bg-close"></div>
			<div class="popup-container popup-container-sm bg-light text-center">
				<?php if ( $popup_thanks_title = get_field( 'popup_thanks_title', 'options' ) ) : ?>
					<div class="h2"><?php echo esc_html( $popup_thanks_title ); ?></div>
				<?php endif; ?>
				<?php if ( $popup_thanks_text = get_field( 'popup_thanks_text', 'options' ) ) : ?>
					<p class="large"><?php echo esc_html( $popup_thanks_text ); ?></p>
				<?php endif; ?>
				<div class="button-close popup-btn-close"></div>
			</div>
		</div>
		<!-- THANKS POPUP END -->
	</div>
	<!-- POPUPS END -->

	<!-- STYLE -->
	<link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet" type="text/css">
	<?php wp_footer(); ?>
</body>
</html>