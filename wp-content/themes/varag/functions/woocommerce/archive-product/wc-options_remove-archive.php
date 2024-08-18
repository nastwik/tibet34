<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// Убираем сортировку
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);

// Убираем вывод количества товаров
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);

remove_action('woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10);