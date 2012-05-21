<?php

add_action( 'wp_enqueue_scripts', 'register_scripts' );

function register_scripts() {
	wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css' );

	wp_enqueue_style( 'bootstrap' );
}
