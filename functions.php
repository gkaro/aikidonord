<?php
	function aikidonord_setup() {
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'aikidonord' ),
			'footer' => esc_html__( 'Footer', 'aikidonord' ),
		) );
	}
add_action( 'after_setup_theme', 'aikidonord_setup' );
add_theme_support( 'post-thumbnails' ); 
set_post_thumbnail_size( 50, 50 );