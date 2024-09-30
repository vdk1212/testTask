<div class="social">
	<?php if ( $facebook_link = get_field( 'facebook_link', 'options' ) ) : ?>
		<a href="<?php echo esc_url( $facebook_link ); ?>" title="Facebook" target="_blank" rel="noopener noreferrer">
			<svg width="512" height="512" viewBox="0 0 512 512"><path d="M296.296 512H200.36V256h-64v-88.225l64-.029-.104-51.976C200.256 43.794 219.773 0 304.556 0h70.588v88.242h-44.115c-33.016 0-34.604 12.328-34.604 35.342l-.131 44.162h79.346l-9.354 88.225-69.926.029-.064 256z"/></svg>
		</a>
	<?php endif; ?>

	<?php if ( $instagram_link = get_field( 'instagram_link', 'options' ) ) : ?>
		<a href="<?php echo esc_url( $instagram_link ); ?>" title="Instagram" target="_blank" rel="noopener noreferrer">
			<svg width="512" height="512" viewBox="0 0 512 512"><path d="M352 0H160C71.648 0 0 71.648 0 160v192c0 88.352 71.648 160 160 160h192c88.352 0 160-71.648 160-160V160C512 71.648 440.352 0 352 0zm112 352c0 61.76-50.24 112-112 112H160c-61.76 0-112-50.24-112-112V160C48 98.24 98.24 48 160 48h192c61.76 0 112 50.24 112 112v192z"/><path d="M256 128c-70.688 0-128 57.312-128 128s57.312 128 128 128 128-57.312 128-128-57.312-128-128-128zm0 208c-44.096 0-80-35.904-80-80 0-44.128 35.904-80 80-80s80 35.872 80 80c0 44.096-35.904 80-80 80z"/><circle cx="393.6" cy="118.4" r="17.056"/></svg>
		</a>
	<?php endif; ?>

	<?php if ( $houzz_link = get_field( 'houzz_link', 'options' ) ) : ?>
		<a href="<?php echo esc_url( $houzz_link ); ?>" title="Houzz" target="_blank" rel="noopener noreferrer">
			<svg width="113.986" height="125.984" viewBox="0 0 113.986 125.984" enable-background="new 0 0 113.986 125.984"><path d="M0 0h33.993v30.084l79.993 24.5v71.4H73.993v-40.15h-34.25v40.15H0z"/></svg>
		</a>
	<?php endif; ?>

	<?php if ( $pinterest_link = get_field( 'pinterest_link', 'options' ) ) : ?>
		<a href="<?php echo esc_url( $pinterest_link ); ?>" title="Pinterest" class="large-svg" target="_blank" rel="noopener noreferrer">
			<svg width="416" height="511.889" viewBox="0 0 416 511.889" enable-background="new 0 0 416 511.889"><path d="M214.96 0C74.63 0 0 89.905 0 187.936 0 233.4 25.41 290.094 66.085 308.075c6.176 2.784 9.537 1.6 10.913-4.127 1.216-4.351 6.561-25.308 9.153-35.194.8-3.168.384-5.919-2.176-8.895-13.505-15.613-24.226-44.056-24.226-70.74 0-68.372 54.372-134.761 146.891-134.761 80.006 0 135.978 51.959 135.978 126.282 0 83.986-44.451 142.088-102.216 142.088-31.97 0-55.78-25.084-48.228-56.118 9.121-36.954 27.01-76.691 27.01-103.342 0-23.9-13.505-43.673-41.091-43.673-32.546 0-58.949 32.219-58.949 75.475 0 27.483 9.729 46.04 9.729 46.04S96.679 371.137 90.695 395.42c-10.113 41.113 1.376 107.694 2.368 113.421.608 3.167 4.16 4.159 6.145 1.568 3.168-4.159 42.083-59.67 52.996-99.791 3.968-14.622 20.258-73.907 20.258-73.907 10.721 19.357 41.667 35.578 74.63 35.578 98.055 0 168.909-86.161 168.909-193.087C415.648 76.691 327.897 0 214.96 0z"/></svg>
		</a>
	<?php endif; ?>
</div>