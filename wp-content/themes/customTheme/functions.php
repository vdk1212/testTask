<?php

	if ( ! function_exists( 'theme_setup' ) ) :
		//Sets up theme defaults and registers support for various WordPress features.
		// Note that this function is hooked into the after_setup_theme hook, which
		// runs before the init hook. The init hook is too late for some features, such
		// as indicating support for post thumbnails.
		function theme_setup() {
			
			load_theme_textdomain( 'thebigshoworchestra', get_template_directory() . '/languages' );
			add_theme_support( 'automatic-feed-links' );
			add_theme_support( 'title-tag' );
			add_theme_support( 'post-thumbnails' );

			register_nav_menus( array(
				'main-menu'       => esc_html__( 'Main menu', 'main_menu' ),
				'additional-menu' => esc_html__( 'Additional menu', 'additional_menu' )
			) );
			
			add_theme_support( 'html5', array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'menus',
			) );
		}
	endif;

	add_action( 'after_setup_theme', 'theme_setup' );

	function theme_scripts() {
		
		wp_enqueue_style( 'style', get_template_directory_uri() . '/css/main.css' );
		wp_enqueue_script( 'jquery' );

		wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array(), '1.1', true );

		if ( is_page_template( 'about.php' ) ) {
			wp_enqueue_script( 'easypiechart-js', get_template_directory_uri() . '/js/easypiechart.js', array(), '1.1', true );
		}

		if ( is_page_template( array( 'front-page.php', 'about.php' ) ) ) {
			wp_enqueue_script( 'swiper-js', get_template_directory_uri() . '/js/swiper.js', array(), '1.1', true );
		}
	}

	add_action ( 'wp_enqueue_scripts', 'theme_scripts' );
	/* ACF Options */
	if ( function_exists( 'acf_add_options_page') ) {
		
		acf_add_options_page( array (
			'page_title'    => 'Header/Footer',
			'menu_title'    => 'Header/Footer',
			'menu_slug'     => 'global-data',
			'icon_url'      => 'dashicons-info-outline'
		) );
	}

	add_action( 'template_redirect', function() {
		ob_start( function( $buffer ) {
			$buffer = str_replace( array( 'type="text/javascript"', "type='text/javascript'" ), '', $buffer );
			$buffer = str_replace( array( 'type="text/css"', "type='text/css'" ), '', $buffer );
			return $buffer;
		} );
	} );

	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );


	function create_custom_post_type() {
		$labels = array(
			'name'               => 'Projects',
			'singular_name'      => 'Project',
			'menu_name'          => 'Projects',
			'name_admin_bar'     => 'Project',
			'add_new'            => 'Add New',
			'add_new_item'       => 'Add New Project',
			'new_item'           => 'New Project',
			'edit_item'          => 'Edit Project',
			'view_item'          => 'View Project',
			'all_items'          => 'All Project',
			'search_items'       => 'Search Projects',
			'parent_item_colon'  => 'Parent Projects:',
			'not_found'          => 'No projects found.',
			'not_found_in_trash' => 'No projects found in Trash.',
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array('slug' => 'project'),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'supports'           => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' ),
			'show_in_rest'       => true,
			'menu_icon'          => 'dashicons-portfolio'
		);

		register_post_type( 'service', $args );
	}

	add_action( 'init', 'create_custom_post_type' );
?>