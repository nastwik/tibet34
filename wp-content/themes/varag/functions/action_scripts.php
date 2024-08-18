<?php

add_action('wp_enqueue_scripts', 'add_scripts');


function add_scripts(){

    wp_enqueue_script("jquery", true);

    wp_enqueue_script( 'fl-jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), "0.0.0.0", true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), "0.0.0.0", true );
    wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/swiper.min.js', array(), "0.0.0.0", true );
    wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/fancybox.min.js', array(), "0.0.0.0", true );
    wp_enqueue_script( 'odometer', get_template_directory_uri() . '/js/odometer.min.js', array(), "0.0.0.0", true );
    wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/isotope.min.js', array(), "0.0.0.0", true );
    wp_enqueue_script( 'modal', get_template_directory_uri() . '/js/modal.js', array(), "0.0.0.0", true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/scripts.js', array(), "0.0.0.0", true );
    wp_enqueue_script( 'mask', get_template_directory_uri() . '/js/maskinput.min.js', array(), "0.0.0.0", true );
    
  //   wp_localize_script('additional-script','WPJS', [
	// 	'ajaxUrl' => admin_url('admin-ajax.php'),
	// ]);
    
}
