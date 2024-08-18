<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


// Кастоный title для категории
remove_action('woocommerce_shop_loop_subcategory_title', 'woocommerce_template_loop_category_title', 10);

add_action('woocommerce_shop_loop_subcategory_title', 'fl_category_title',10);
function fl_category_title($category){
    $cat_link = get_category_link( $category->term_id );
    ?>
        <div class="content">
            <span>
                <a href="<?=$cat_link?>"><?=$category->name?></a>
            </span>
        </div>
    <?
}


// Кастоный img для категории
remove_action('woocommerce_before_subcategory_title', 'woocommerce_subcategory_thumbnail', 10);

add_action('woocommerce_before_subcategory_title', 'fl_category_img',10);
function fl_category_img($category){

    $thumb_ID = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
    $image = wp_get_attachment_url($thumb_ID);

    ?>
        <div class="category__img">
            <img src="<?=$image?>" alt="">
        </div>
    <?
}


// Кастомная обёртка для категории
remove_action('woocommerce_before_subcategory', 'woocommerce_template_loop_category_link_open', 10);

add_action('woocommerce_before_subcategory', 'fl_category_main',10);
function fl_category_main($category){

    ?>
        <!-- <div class="category"> -->
    <?
}


// Кастомная обёртка для категории end
remove_action('woocommerce_after_subcategory', 'woocommerce_template_loop_category_link_close', 10);

add_action('woocommerce_after_subcategory', 'fl_category_main_close',10);
function fl_category_main_close($category){
    ?>
            
        <!-- </div> -->
    <?
}


