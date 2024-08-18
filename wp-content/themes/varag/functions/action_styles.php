<?php


add_action('wp_enqueue_scripts', 'add_styles');

function add_styles(){

    wp_dequeue_style('wp-block-library');

    wp_enqueue_style( 'lineicons', get_template_directory_uri() . '/css/lineicons.css', array(), "0.0.0.0" );
    wp_enqueue_style( 'odometer', get_template_directory_uri() . '/css/odometer.min.css', array(), "0.0.0.0" );
    wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/css/fancybox.min.css', array(), "0.0.0.0" );
    wp_enqueue_style( 'swiper', get_template_directory_uri() . '/css/swiper.min.css', array(), "0.0.0.0" );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), "0.0.0.0" );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css', array(), "0.0.0.0" );
}