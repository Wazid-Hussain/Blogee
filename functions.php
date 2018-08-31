<?php
	function enqueue_scripts() {
		wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0', 'all');
	}

	add_action('wp_enqueue_scripts', 'enqueue_scripts');

	// Register menu locations
	register_nav_menus(array(

			'primary' => __('Primary Menu'),
	));

	add_theme_support('post-thumbnails');

