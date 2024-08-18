<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// Подключение woocommerce
add_action( 'after_setup_theme', function() {
    add_theme_support( 'woocommerce' );
} );

// Опции для одиночной страницы товара
require_once 'single-product/wc-option_single-product.php';
require_once 'single-product/wc-option-remove_product.php';

// Опции для архива товаров
require_once 'archive-product/wc-option_archive-product.php';
require_once 'archive-product/wc-option_card-product.php';
require_once 'archive-product/wc-sidebar-category.php';
require_once 'archive-product/wc-sidebar-filters.php';
require_once 'archive-product/wc-options_remove-archive.php';

// Опции для категорий
require_once 'category/wc-option_category.php';
require_once 'category/editor-cat.php';


// Добавление кастомных хлебных крошек на страницу продукта
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
add_action('woocommerce_before_main_content', 'fl_add_breadcrumbs', 20);
function fl_add_breadcrumbs(){
    ?>
        <header class="page-header">
			<div class="container">
				<?php
					if(is_product_category() || is_shop()) {
						?><h1><?php woocommerce_page_title();?></h1><?
					} else {
						?><h1><?php the_title();?></h1><?
					}
				?>
				<?=woocommerce_breadcrumb();?>
			</div> 
		</header>
    <?
}

add_action( 'woocommerce_product_options_general_product_data', 'woo_add_custom_general_fields' );
add_action( 'woocommerce_process_product_meta', 'woo_add_custom_general_fields_save' );

function woo_add_custom_general_fields() {

global $woocommerce, $post;
 
echo '<div class="options_group">';
// Add Select field in woocommerce
woocommerce_wp_select( 
	array( 
		'id'      => '_select', 
		'label'   => __( 'Единица измерения', 'productunit' ), 
		'options' => array(
			'м³' => __( 'м³', 'productunit' ),
			'м²'   => __( 'м²', 'productunit' ),
			'шт'   => __( 'шт', 'productunit' ),
			)
		)
	);
	echo '</div>'; 
}

function woo_add_custom_general_fields_save( $post_id ){
	
	// Text Field
	$woocommerce_text_field = $_POST['_text_field'];
	if( !empty( $woocommerce_text_field ) )
	update_post_meta( $post_id, '_text_field', esc_attr( $woocommerce_text_field ) );
		
	// Select
	$woocommerce_select = $_POST['_select'];
	if( !empty( $woocommerce_select ) )
	update_post_meta( $post_id, '_select', esc_attr( $woocommerce_select ) );
	
}

