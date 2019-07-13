<?php 
	add_action( 'wp_enqueue_scripts', 'relationship_works_enqueue_styles' );
	function relationship_works_enqueue_styles() {
		wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
		   
			$parent_style = 'oceanwp-style';

			wp_enqueue_style( 'child-style',
				get_stylesheet_directory_uri() . '/styles/css/style.css',
				array( $parent_style ),
				wp_get_theme()->get('Version')
			);
		


		// wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', '', '', true );
		wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' );
		wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array( 'popper', 'jquery' ) );

		// Simple Parallax
		wp_enqueue_script('simple-parallax', 'https://cdn.jsdelivr.net/npm/simple-parallax-js@5.0.2/dist/simpleParallax.min.js' );
	} 

	/**
	 * Alter your post layouts
	 *
	 * Replace is_singular( 'post' ) by the function where you want to alter the layout
	 * @return full-width, full-screen, left-sidebar or right-sidebar
	 *
	 */
	function my_post_layout_class( $class ) {

		// Alter your layout
		if ( is_singular( 'service' ) || is_archive('service') ) {
			$class = 'full-width';
		}

		// Return correct class
		return $class;

	}
	add_filter( 'ocean_post_layout_class', 'my_post_layout_class', 20 );
 ?>