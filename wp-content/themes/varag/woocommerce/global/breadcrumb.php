<?php
/**
 * Shop breadcrumb
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/breadcrumb.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     2.3.0
 * @see         woocommerce_breadcrumb()
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! empty( $breadcrumb ) ) {

	echo '<ul>';

	foreach ( $breadcrumb as $key => $crumb ) {
		
		echo $before;

		if ( ! empty( $crumb[1] ) && sizeof( $breadcrumb ) !== $key + 1 ) {

			if($key === 0){
				echo '<li class="breadcrumb__item breadcrumb__item--parent breadcrumb__item--first">
					<a href="' . esc_url( $crumb[1] ) . '" class="breadcrumb__item-link">' . esc_html( $crumb[0] ) . '</a>
				</li>';

				if(is_product_category()) {
					echo '<li class="breadcrumb__item breadcrumb__item--parent">
					<a href="/shop/" class="breadcrumb__item-link"> Каталог </a>
				</li>';

				} else if (is_product()) {
					echo '<li class="breadcrumb__item breadcrumb__item--parent">
					<a href="/shop/" class="breadcrumb__item-link"> Каталог </a>
				</li>';
				}

			} else {
				echo '<li class="breadcrumb__item breadcrumb__item--parent">
				<a href="' . esc_url( $crumb[1] ) . '" class="breadcrumb__item-link">' . esc_html( $crumb[0] ) . '</a>
				</li>';
			};
		}  else {
			
			echo '<li class="breadcrumb__item breadcrumb__item--current breadcrumb__item--last" aria-current="page">
				<span class="breadcrumb__item-link">' . esc_html( $crumb[0] ) . '</span>
			</li>';
		}

		echo $after;
	}

	echo '</ul>';

}
