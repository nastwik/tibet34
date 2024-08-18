<?php
/**
 * Product Loop End
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-end.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$categories = get_terms( ['taxonomy' => 'product_cat'] );
  $parent_cats = array();
  foreach ($categories as $cat) {
    if($cat->parent === 0) {
      array_push($parent_cats,$cat);
    }
  };

if((count($parent_cats) % 4) == 0){
	echo '<li class="categories-list__item categories-list_last-item">
	Весь ассортимент
	<a href="'. get_permalink(30) .'" class="btn btn-white btn-lg">Каталог</a>
	</li>';
  }
?>
</div>
