<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// Убираем стандартный вывод сайдбара
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

// Убираем апсейлы
remove_action('woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15);

// Убираем заголовок в табе у описания
add_filter( 'woocommerce_product_description_heading', '__return_null' );
// Убираем заголовок в табе у деталей
add_filter( 'woocommerce_product_additional_information_heading', '__return_null' );

// Убираем табы
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10	);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30	);


