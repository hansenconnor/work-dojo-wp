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
 		  } 
 ?>