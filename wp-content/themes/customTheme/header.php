<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<?php wp_head(); ?>
</head>

<?php if ( is_page_template( 'home.php' ) ) : ?>
	<body class="homepage">
<?php else : ?>
	<body>
<?php endif; ?>
	<!-- HEADER -->
	<header>
		<a href="/" id="logo">
			<?php if ( $logo_light = get_field( 'logo_light', 'options' ) ) : ?>
				<img
					src="<?php echo esc_url( $logo_light[ 'url' ] ); ?>"
					alt="<?php echo esc_attr( $logo_light[ 'alt' ] ); ?>"
					width="<?php echo esc_attr( $logo_light[ 'width' ] ); ?>"
					height="<?php echo esc_attr( $logo_light[ 'height' ] ); ?>"
					loading="lazy"
				/>
			<?php endif; ?>
			<div>
				<?php if ( $logo = get_field( 'logo', 'options' ) ) : ?>
					<img
						src="<?php echo esc_url( $logo[ 'url' ] ); ?>"
						alt="<?php echo esc_attr( $logo[ 'alt' ] ); ?>"
						width="<?php echo esc_attr( $logo[ 'width' ] ); ?>"
						height="<?php echo esc_attr( $logo[ 'height' ] ); ?>"
						loading="lazy"
					/>
				<?php endif; ?>
			</div>
		</a>

		<?php if ( $phone_number = get_field( 'phone_number', 'options' ) ) : ?>
			<div class="phone">
				<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"><path d="M5.265 2.389l1.873 3.745-1.383 1.357-1.046 1.028.666 1.307c1.07 2.099 2.789 3.839 2.888 3.938.073.073 1.812 1.792 3.912 2.862l1.307.666 1.028-1.047 1.357-1.382 3.802 1.901c-.17.546-.351 1-.479 1.168-.73.954-1.982 2.068-3.108 2.068-1.475 0-6.405-1.595-9.258-4.689l-.047-.05-.029-.029-.028-.028-.03-.027C3.595 12.323 2 7.394 2 5.918 2 4.69 3.046 3.37 3.765 3.001c.461-.235 1.004-.444 1.5-.612M6.306 0S4.304.478 2.853 1.222C1.538 1.896 0 3.866 0 5.918c0 2.053 1.819 7.487 5.333 10.728l.02.02C8.594 20.181 14.029 22 16.082 22s3.799-1.679 4.696-2.853c.744-.973 1.222-3.453 1.222-3.453l-6.541-3.271-2.377 2.42c-1.843-.939-3.409-2.497-3.409-2.497l-.02-.02s-1.558-1.565-2.497-3.409l2.42-2.377L6.306 0z"/></svg>
				<a href="tel:<?= preg_replace( '/[^0-9]/', '', $phone_number ); ?>"><?php echo esc_html( $phone_number ); ?></a>
			</div>
		<?php endif; ?>

		<?php wp_nav_menu( array(
			'menu'         => 'Additional menu',
			'container'    => false,
			'container_id' => false,
			'menu_id'      => false,
			'depth'        => -1,
			'item_wrap'    => '<ul>%3$s</ul>'
		) ) ?>

		<div class="burger">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>

		<nav>
			<?php if ( $header_short_text = get_field( 'header_short_text', 'options' ) ) : ?>
				<span class="top-text text-uppercase text-bold"><?php echo esc_html( $header_short_text ); ?></span>
			<?php endif; ?>

			<div>
				<div class="row">
					<div class="col-12">
						<span class="button dark open-popup" data-id="contact-form-popup"><?php the_field( 'popup_form_btn', 'options' ); ?></span>
					</div>

					<div class="col-sm-6 col-12">
						<div class="nav-contacts">
							<div class="transition-delay-6">
								<span>Call:</span>
								<?php if ( $phone_number = get_field( 'phone_number', 'options' ) ) : ?>
									<a href="tel:<?= preg_replace( '/[^0-9]/', '', $phone_number ); ?>"><?php echo esc_html( $phone_number ); ?></a>
								<?php endif; ?>
							</div>
	
							<div class="transition-delay-7">
								<span>Write to us:</span>
								<?php if ( $email = get_field( 'email', 'options' ) ) : ?>
									<a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
								<?php endif; ?>
							</div>
	
							<div class="transition-delay-8">
								<span>Follow us:</span>
								<?php get_template_part( 'templates/social' ); ?>
							</div>
						</div>
					</div>

					<div class="col-sm-6 col-12">
						<?php wp_nav_menu( array(
							'menu'         => 'Main menu',
							'container'    => false,
							'container_id' => false,
							'menu_id'      => false,
							'depth'        => -1,
							'item_wrap'    => '<ul>%3$s</ul>'
						) ) ?>
					</div>
				</div>
			</div>
		</nav>
	</header>
	<!-- HEADER END -->